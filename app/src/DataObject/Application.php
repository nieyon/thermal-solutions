<?php
namespace {

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\ReadonlyField;
use SilverStripe\Assets\Image;
use SilverStripe\Assets\File;

class Application extends DataObject
{

    private static $db = [

        'JobTitle' => 'Varchar',
        'Name' => 'Varchar',
        'MobileNumber' => 'Varchar',
        'Attaintment' => 'Varchar',
        'AppEmail' => 'Varchar',
        'Intent' => 'Varchar',
    ];

    private static $has_one = [
        'file' => File::class
    ];

    private static $owns = [

    ];

    private static $summary_fields = [

    ];


}
}