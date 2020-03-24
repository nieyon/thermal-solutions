<?php

namespace {
	use SilverStripe\CMS\Model\SiteTree;

	use Page;  
	use PageController;
	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Assets\Image;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TextareaField;
	use SilverStripe\Forms\TabSet;
	use SilverStripe\Forms\Tab;
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
	use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
	use Bummzack\SortableFile\Forms\SortableUploadField;

	class HeaderFooter extends Page {

		private static $db = [

			// Frame 6 Contact Us page
			'F6FrmSubTitle' => 'Text',
			'F6FrmTitle' => 'Text',

			// Contact Details
			'Address' => 'Varchar',
			'FaxNumber' => 'Varchar',
			'TelephoneNumber1' => 'Varchar',
			'TelephoneNumber2' => 'Varchar',
			'TelephoneNumber3' => 'Varchar',
			'Email' => 'Varchar',

			// Search Engine Optimization
			'SEO' => 'Text',

			// Descriptio 
			'Description' => 'Text',

		];

		private static $has_one = [

			// Header Logo
			'HeaderLogo' => Image::class,
			'Favicon' => Image::class,

		];

		private static $owns = [

			// Header Logo
	        'HeaderLogo',
	        'Favicon'
	    ];

	    private static $has_many = [
			'Accomplishments' => Accomplishments::class,
	    ];

		private static $defaults = array(
			'PageName' => 'Header & Footer',
			'MenuTitle' => 'Header & Footer',
			'ShowInMenus' => false,
			'ShowInSearch' => false,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			// Header
			$fields->addFieldToTab('Root.Header', $upload = UploadField::create('Favicon','Favicon'));
			$fields->addFieldToTab('Root.Header', $upload1 = UploadField::create('HeaderLogo','Logo'));

			// Frame 6 / Contact Us page
			$fields->addFieldToTab('Root.Frame 6', $desc = TextField::create('F6FrmSubTitle', 'Sub Title'));
			$fields->addFieldToTab('Root.Frame 6', $desc = TextField::create('F6FrmTitle', 'Title'));

			// Contact Details
			$fields->addFieldToTab('Root.Contact Details', $desc = TextField::create('Address', 'Address'));
			$fields->addFieldToTab('Root.Contact Details', $desc = TextField::create('FaxNumber', 'Fax Number'));
			$fields->addFieldToTab('Root.Contact Details', $desc = TextField::create('TelephoneNumber1', 'TelephoneNumber1'));
			$fields->addFieldToTab('Root.Contact Details', $desc = TextField::create('TelephoneNumber2', 'TelephoneNumber2'));
			$fields->addFieldToTab('Root.Contact Details', $desc = TextField::create('TelephoneNumber3', 'TelephoneNumber3'));
			$fields->addFieldToTab('Root.Contact Details', $desc = TextField::create('Email', 'Email'));

			$fields->addFieldToTab('Root.CareersTabs', new TabSet('TabsSets',
				new Tab('Accomplishments Tab',
					GridField::create(
			            'Accomplishments',
			            'Accomplishments Tabs',
			            $this->Accomplishments(),
			            GridFieldConfig_RecordEditor::create()
		        	)
				)
			));

			// Search Engine Optimization
			$fields->addFieldToTab('Root.SEO Keywords', $desc = TextareaField::create('SEO', 'SEO Keywords'));

			// Description
			$fields->addFieldToTab('Root.Description', TextareaField::create('Description', 'Site Description'));

			#Description
			$desc->setDescription('Separate each descriptions with comma (,)');
			$upload->setDescription('Max file size: 2MB');
			$upload1->setDescription('Max file size: 2MB');
			$upload->setFolderName('headerfooter/');
			$upload1->setFolderName('headerfooter/');
			
			/*
			* Remove by tab
			*/
			$fields->removeFieldFromTab('Root.Main', 'Content');

			return $fields;
		}
	}

	class HeaderFooterController extends PageController {

	}
}
