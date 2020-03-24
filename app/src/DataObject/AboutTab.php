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

class AboutTab extends DataObject
{

    private static $db = [
        'TabTitle' => 'Text',
        'Description' => 'HTMLText'
    ];

    private static $has_one = [
        'AboutUsPage' => AboutUsPage::class,
    ];

    private static $owns = [

    ];

    private static $extensions = [
        Versioned::class,
    ];

    private static $summary_fields = [
        'TabTitle' => 'Tab Title',
        'Description' => 'Description',
    ];

    private static $versioned_gridfield_extensions = true;



    public function getCMSFields()
    {
        $fields = FieldList::create(
            TextField::create('TabTitle'),
            HTMLEditorField::create('Description')
        );
        return $fields;
    }
}
}