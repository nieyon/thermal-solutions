<?php

namespace {
	use SilverStripe\CMS\Model\SiteTree;

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

	class AboutUs extends Page {

		private static $db = [
	        'TabTitle' => 'Text',
	        'Description' => 'HTMLText'
	    ];

		private static $has_one = [

		];

		private static $owns = [
	
	    ];

	  //   private static $has_many = [
			// 'AboutTab' => AboutTab::class,
	  //   ];

		private static $can_be_root = false;
		
		private static $defaults = array(
			'PageName' => 'About Us',
			'MenuTitle' => 'About Us',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');


			$fields->addFieldsToTab('Root.Content', array(
				TextField::create('TabTitle', 'Title'),
				HTMLEditorField::create('Description', 'Content')
			));

			# SET FIELD DESCRIPTION 
			// $uploadf1->setDescription('Max file size: 2MB | Dimension: 1366px x 768px');
			// $desc->setDescription('Sample format: email@sample.com, email_2@sample.com');
			
			# Set destination path for the uploaded images.
			// $uploadf1->setFolderName('AboutPage/frame-1');

			return $fields;
		}
	}

	class AboutUsController extends PageController {
		
	}
}