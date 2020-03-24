<?php
namespace {

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\ReadonlyField;

class Inquiry extends DataObject
{

    private static $db = [

        'FName' => 'Varchar',
        'PhoneNumber' => 'Varchar',
        'Email' => 'Varchar',
        'Message' => 'Varchar',
    ];

    private static $has_one = [

    ];

    private static $owns = [

    ];

    private static $summary_fields = [

    ];


}
}