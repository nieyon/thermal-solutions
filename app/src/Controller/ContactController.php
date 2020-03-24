<?php
use SilverStripe\Control\Controller;
use SilverStripe\Control\HTTPRequest;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use SilverStripe\View\ArrayData;
require '../vendor/autoload.php';
class ContactController extends Controller 
{
    private $fname;
    private $phonenumber;
    private $email;
    private $message;
    private $errors;
    public function init() {
        parent::init();
        // print_r('Init...');
        if(isset($_POST['postFlag']) && is_numeric($_POST['postFlag'])) {
            $postFlag = $_POST['postFlag'];
            // print_r('PostFlag : '$_POST['postFlag']);
            switch ($postFlag) {
            
                // Sending
                case 1:
                        
                    if($this->setPostVars() && $this->checkPostVars()) {
                        // print_r('Sending...');
                        $this->writeRecord();
                        $this->setRecipients();
                        $this->sendEmail();
                        $this->sendConfirmationEmail();
                        $this->returnEcho(1, 'Sending successful!');
                    }
                break;
            }
        }
        exit();
    }
    private function setPostVars() {
        // print_r('Set post...');
    
        if(isset($_POST['fname'])) {
            $this->fname = $_POST['fname'];
        }

        if(isset($_POST['phonenumber'])) {
            $this->phonenumber = $_POST['phonenumber'];
        }

        if(isset($_POST['email'])) {
            $this->email = $_POST['email'];
        }

        if(isset($_POST['message'])) {
            $this->message = $_POST['message'];
        }

        if(isset($_POST['g-recaptcha-response'])){
            $this->captcha=$_POST['g-recaptcha-response'];
        }

        return true;
    }
    private function checKPostVars() {
        // print_r('Check post...');
        if(empty($_POST['fname'])) {
            $this->errors['fname'] = array(
                'error' => 'Please input your first name'
            );
        }
        if(empty($_POST['phonenumber'])) {
            $this->errors['phonenumber'] = array(
                'error' => 'Please input your phonenumber'
            );
        }
        if(empty($_POST['email'])) {
            $this->errors['email'] = array(
                'error' => 'Please input your e-mail'
            );
        }
        if(empty($_POST['message'])) {
            $this->errors['message'] = array(
                'error' => 'Please input your message'
            );
        }

        if(empty($_POST['g-recaptcha-response']) ) {
            $this->errors = 'Please check the the captcha form';
        }

        $secretKey = "6Le9iOMUAAAAABg9QofWPboOif-2BgfgRJ4CBHpm";
        $response = $this->postRecaptcha($secretKey, $this->captcha);

        // should return JSON with success as true
        if($response->success) {
        } else {
            $this->errors = 'CAPTCHA verification failed.';
        }

        switch ($this->postFlag) {
            // Sending
            case 1: break;
        }

        if(!empty(count($this->errors) > 0)) {
            $this->returnEcho(0, explode(", ", $this->errors));

            return false;
        }
      
        // if(!empty(count($this->errors) > 0)) {
        //     $this->returnEcho(0, 'Error');
        //     return false;
        // }
 
        return true;
    }

    private function writeRecord() {
        $duplicate = new Inquiry(); // This is the data object you created
        $duplicate->FName = $this->fname;
        $duplicate->PhoneNumber = $this->phonenumber;
        $duplicate->Email = $this->email;
        $duplicate->Message = $this->message;
        $duplicate->write(); 
    }

    private function setRecipients() {
        $email = ContactUsPage::get()->First()->EmailRecipient; // Create a field on ContactUsPage to upload email recipient
        $this->recipient = $email;
    }

    private function sendEmail() {
        // print_r('Email...');
        $to = explode(',', $this->recipient);
        // Enables HTML Text
        // $headers .= "\r\n" . "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $subject = $this->subject .'Thermal Solutions: New Inquiry!';
        $message = $this->getAdminEmailTemplate();
        $this->sendPHPMailer($to, $subject, $message);
    }

    private function getAdminEmailTemplate() {
        $arrayData = new ArrayData(array(
            'fname' => $this->fname,
            'phonenumber' => $this->phonenumber,
            'email' => $this->email,
            'message' => $this->message,
        ));
        return $arrayData->renderWith('InquiryEmailTemplateAdmin');
    }

    private function sendConfirmationEmail() {
        // print_r('Email confirmation...');
        
        $recipients = explode(',', $this->email);
        $subject = $this->subject .'Thermal Solutions: This is to notify you that we have succesfully received your message.';
        
        // Enables HTML Text
        // $headers .= "\r\n" . "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $message = $this->getUserEmailTemplate();
        $this->sendPHPMailer($recipients, $subject, $message);
    }
    
    private function getUserEmailTemplate() {
        $arrayData = new ArrayData(array(
            'fname' => $this->fname,
        ));
        return $arrayData->renderWith('InquiryEmailTemplateUser');
    }

    private function sendPHPMailer($recipients, $subject, $body) {
        // print_r('Emailing...' . $recipients);
        try {

            $mail = new PHPMailer;
            // Set PHPMailer to use the sendmail transport
            $mail->isSendmail();
            //Set who the message is to be sent from
            $mail->setFrom('no-reply@thermail-solutions.com.ph', 'www.thermail-solutions.com.ph');
            //Set an alternative reply-to address
            $mail->addReplyTo('no-reply@thermail-solutions.com.ph', 'www.thermail-solutions.com.ph');
            //Set who the message is to be sent to

            // Add in each recipient to the "TO"
            foreach ($recipients as $recipient) {
                $mail->addAddress($recipient, $recipient);
            }

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body;

            // $mail->send();

            if (!$mail->send()) {
                echo 'Mailer Error: '. $mail->ErrorInfo;
            } else {
                echo 'Message sent!';
            }

            // print_r('Emailing done...');

        } catch (phpmailerException $e) {
            // print_r($e->errorMessage());
        } catch (Exception $e) {
            // print_r($e->getMessage());
        }
    }

    private function returnEcho($status, $message = 'Sent') {
        echo json_encode(array(
            'status' => $status,
            'message' => $message
        ));
    }

    private function postRecaptcha($secret, $response) {

        $data = array(
            'secret' => $secret,
            'response' => $response
        );

        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        return  json_decode(curl_exec($verify));

    }

}