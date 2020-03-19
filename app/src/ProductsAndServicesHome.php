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

class ProductsAndServicesHome extends DataObject
{

    private static $db = [
        'ItemTitle' => 'Text',
        'Description' => 'Varchar'
    ];

    private static $has_one = [
        'Photo' => Image::class,
        'HomePage' => HomePage::class,
    ];

    private static $owns = [
        'Photo',
    ];

    private static $extensions = [
        Versioned::class,
    ];

    private static $summary_fields = [
        'GridThumbnail' => '',
        'ItemTitle' => 'Item Title',
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
            TextField::create('ItemTitle'),
            TextareaField::create('Description')
        );
        $photo->setFolderName('Frame4/Projects');

        // $uploader->setFolderName('images/frame4');
        // $uploader->getValidator()->setAllowedExtensions(['png','gif','jpeg','jpg']);

        return $fields;
    }
}
}