<?php

namespace {
	use SilverStripe\CMS\Model\SiteTree;

	use Page;  
	use PageController;

	use SilverStripe\Forms\TabSet;
	use SilverStripe\Forms\Tab;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TextareaField;
	use SilverStripe\Forms\CheckboxField;
	use SilverStripe\Forms\DateField;
	use SilverStripe\Forms\ReadonlyField;
	use SilverStripe\Forms\DropdownField;
	use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
	use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
	use Bummzack\SortableFile\Forms\SortableUploadField;

	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Assets\Image;
	use SilverStripe\Assets\File;

	use SilverStripe\ORM\PaginatedList;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\ORM\ArrayList;
	use SilverStripe\ORM\GroupedList;

	use SilverStripe\View\Requirements;
	use SilverStripe\View\ArrayData;

	use SilverStripe\Control\HTTPRequest;

	class CareersPage extends Page {

		private static $db = [
		
		];

		private static $has_one = [

		];

		private static $owns = [
	
	    ];

	     private static $has_many = [
			'CareersTab' => CareersTab::class,
	    ];


		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'CareersPage',
			'MenuTitle' => 'CareersPage',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');

			$fields->addFieldToTab('Root.CareersTabs', new TabSet('TabsSets',
				new Tab('Careers Tab',
					GridField::create(
			            'CareersTab',
			            'Careers Tabs',
			            $this->CareersTab(),
			            GridFieldConfig_RecordEditor::create()
		        	)
				)
			));
			

			/**
			* EMAIL RECEIPIENT : Text Field
			* - Flexibility purpose; to change email with ease.
			*/
			// $fields->addFieldsToTab('Root.Email Recipient', array(
			// 	$desc = new TextField('EmailRecipient', 'Email Address'),
			// ));

			# SET FIELD DESCRIPTION 
			// $uploadf1->setDescription('Max file size: 2MB | Dimension: 1366px x 768px');
			// $desc->setDescription('Sample format: email@sample.com, email_2@sample.com');
			
			# Set destination path for the uploaded images.
			// $uploadf1->setFolderName('CareersPage/frame-1');

			return $fields;
		}
	}

	class CareersPageController extends PageController {
		
	}
}