<!doctype html>
<html>
    <head>
        <style>
            @import url("https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed");
            
            html {
                font-family: 'Barlow Semi Condensed', sans-serif;
            }
            /** 
             * COLORS
             */
            .color--black {
                color: #333;
            }
            .color--gray {
                color: #5f5f5f;
            }
            .color--brown {
                color: #30292a;
            }
             
            /** 
             * EMAIL : Template
             */
            .email-template__holder {
                width: 900px;
                padding: 50px 0px;
                margin: auto;
                background: #ececec;
            }
            .email-template__card {
                width: 80%;
                margin: auto;
                background: #ffffff;
            }
            .email-template__card-limit {
                width: 80%;
                margin: auto;
                background: white;
            }
            .email-template__header {
                text-align: center;
                width: 100%;
                padding-top: 60px;
            }
            .email-template__logo {
                max-width: 90px;
            }
            .email-template__description {
                padding-top: 10px;
                padding-bottom: 60px;
            }
            .email-template__description > * {
                font-size: 1.1em;
            }
        </style>
    </head>
    <body>
        <div class="email-template__holder">
            <div class="email-template__card">
                <div class="email-template__card-limit">
                    <div class="email-template__description">
                        <br>
                        <p class="color--gray">Inquiry Details</p>
                        <br>
                        <p class="color--gray">Name : {$fname} {$lname}</p>
                        <p class="color--gray">Email : {$email}</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>