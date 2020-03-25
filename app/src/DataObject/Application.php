<?php
namespace {

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\ReadonlyField;
use SilverStripe\Assets\Image;
use SilverStripe\Assets\File;

    class Application extends DataObject {

        private static $db = [

            'JobTitle' => 'Varchar',
            'Name' => 'Varchar',
            'MobileNumber' => 'Varchar',
            'Attaintment' => 'Varchar',
            'AppEmail' => 'Varchar',
            'Intent' => 'Varchar',
        ];

        private static $has_one = [
            'File' => File::class
        ];

        private static $owns = [
            'File',
        ];

        private static $summary_fields = array(
            'ID' => 'ID',
            'JobTitle' => 'Job Title',
            'Name' => 'Name',
            'MobileNumber' => 'Mobile Number',
            'AppEmail' => 'Email',
        );

        public function getCMSFields() {
            $fields = parent::getCMSFields();
            
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('JobTitle', 'Job Title'));
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('Name', 'Name'));
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('MobileNumber'));
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('Attaintment'));
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('AppEmail', 'Email'));
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('Intent'));
            $fields->addFieldToTab('Root.Main', $upload = UploadField::create('File', 'File'));

            $upload->setDescription('Max file size: 2MB');
            $upload->setFolderName('careers/resume');

            return $fields;
        }
    }
}