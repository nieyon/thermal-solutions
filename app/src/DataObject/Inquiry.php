<?php
namespace {

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\ReadonlyField;

    class Inquiry extends DataObject {

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
            'ID' => 'ID',
            'FName' => 'Name',
            'PhoneNumber' => 'Phone Number',
            'Email' => 'Email',
        ];

        public function getCMSFields() {
            $fields = parent::getCMSFields();
            
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('FName', 'Name'));
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('PhoneNumber', 'Phone Number'));
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('Email'));
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('Message'));

            return $fields;
        }
    }
}