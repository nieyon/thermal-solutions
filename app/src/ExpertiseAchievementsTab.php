<?php
namespace {

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Versioned\Versioned;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class ExpertiseAchievementsTab extends DataObject
{

    private static $db = [
        'Description' => 'Varchar'
    ];

    private static $has_one = [
        'Photo' => Image::class,
        'ExpertiseAchievementsPage' => ExpertiseAchievementsPage::class,
        // 'ExpertiseAchievementsHolder' => ExpertiseAchievementsHolder::class,
    ];

    private static $owns = [
        'Photo',
    ];

    private static $extensions = [
        Versioned::class,
    ];

    private static $summary_fields = [
        'GridThumbnail' => '',
        'Description' => 'Description',
    ];

    private static $versioned_gridfield_extensions = true;

    public function getGridThumbnail()
    {
        if($this->Photo()->exists()) {
            return $this->Photo()->ScaleWidth(100);
        }

        return "(no image)";
    }


    public function getCMSFields()
    {
        $fields = FieldList::create(
            $photo = UploadField::create('Photo'),
            TextareaField::create('Description')
        );

        $photo->setFolderName('ExpertiseAndAchievements/');

        // $uploader->setFolderName('images/frame4');
        // $uploader->getValidator()->setAllowedExtensions(['png','gif','jpeg','jpg']);

        return $fields;
    }
}
}