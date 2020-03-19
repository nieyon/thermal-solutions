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

	use SilverStripe\Forms\Form;
	use SilverStripe\Forms\FieldList;
	use SilverStripe\Forms\EmailField;
	use SilverStripe\Forms\FormAction;
	use SilverStripe\Forms\RequiredFields;

	class HomePage extends Page {

		private static $db = [

			// Frm 1
			'F1FrmTitle' => 'Text',
			'F1FrmDesc' => 'HTMLText',
			'F1BtnLink' => 'Varchar',
			'F1BtnText' => 'Varchar',

			// Frm 2
			'F2FrmSubTitle' => 'Text',
			'F2FrmTitle' => 'Text',
			'F2FrmDesc' => 'HTMLText',
			'F2BtnLink' => 'Varchar',
			'F2BtnText' => 'Varchar',

			// Frm 3
			'F3FrmSubTitle' => 'Text',
			'F3FrmTitle' => 'Text',
			'F3FrmDesc' => 'HTMLText',
			'F3BtnLink' => 'Varchar',
			'F3BtnText' => 'Varchar',

			// Frm 4
			'F4FrmSubTitle' => 'Text',
			'F4FrmTitle' => 'Text',
			'F4FrmDesc' => 'HTMLText',
			'F4BtnLink' => 'Varchar',
			'F4BtnText' => 'Varchar',

			// Frm 5
			'F5FrmSubTitle' => 'Text',
			'F5FrmTitle' => 'Text',
			'F5FrmDesc' => 'HTMLText',
			'F5BtnLink' => 'Varchar',
			'F5BtnText' => 'Varchar',

			// Frm 6
			'F6FrmSubTitle' => 'Text',
			'F6FrmTitle' => 'Text',
		];

		private static $has_one = [
			'F1FrmPicture' => Image::class, // Frm 1
			'F4FrmBg' => Image::class, // Frm 4 Background
			'F5FrmPicture' => Image::class, // Frm 5
		];

		private static $owns = [
			'F1FrmPicture', // Frm 1
			'F4FrmBg', // Frm 4 Background
			'F5FrmPicture', // Frm 5
	    ];

	    private static $has_many = [
	        'ProductsAndServicesHome' => ProductsAndServicesHome::class,
	        // 'Accomplishments' => Accomplishments::class,
	        'Slide' => Slide::class,
	    ];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Home Page',
			'MenuTitle' => 'Home',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');

			// Frm 1
			$fields->addFieldToTab('Root.Frame 1', new TabSet('Frame1Sets',
				new Tab('Content',
					TextField::create('F1FrmTitle', 'Frame Title'),
					HTMLEditorField::create('F1FrmDesc', 'Description')
				),
				new Tab('Picture',
					$F1FrmPicture = UploadField::create('F1FrmPicture', 'Picture')
				),
				new Tab('Button',
					TextField::create('F1BtnLink', 'Button Link'),
					TextField::create('F1BtnText', 'Button Text')
				)
			));
				$F1FrmPicture->setFolderName('Frame1/');

			// Frm 2
			$fields->addFieldToTab('Root.Frame 2', new TabSet('Frame2Sets',
				new Tab('Content',
					TextField::create('F2FrmSubTitle', 'Frame Sub Title'),
					TextField::create('F2FrmTitle', 'Frame Title'),
					HTMLEditorField::create('F2FrmDesc', 'Description')
				),
				new Tab('Button',
					TextField::create('F2BtnLink', 'Button Link'),
					TextField::create('F2BtnText', 'Button Text')
				)
				// new Tab('Accomplishments',
				// 	GridField::create(
			 //            'Accomplishments',
			 //            'Accomplishments',
			 //            $this->Accomplishments(),
			 //            GridFieldConfig_RecordEditor::create()
		  //       	)
				// )
			));

			// Frm 3
			$fields->addFieldToTab('Root.Frame 3', new TabSet('Frame3Sets',
				new Tab('Slider',
					GridField::create(
			            'Slide',
			            'Slider',
			            $this->Slide(),
			            GridFieldConfig_RecordEditor::create()
		        	)
				),
				new Tab('Content',
					TextField::create('F3FrmSubTitle', 'Frame Sub Title'),
					TextField::create('F3FrmTitle', 'Frame Title'),
					HTMLEditorField::create('F3FrmDesc', 'Description')
				),
				new Tab('Button',
					TextField::create('F3BtnLink', 'Button Link'),
					TextField::create('F3BtnText', 'Button Text')
				)
			));

			// Frm 4
			$fields->addFieldToTab('Root.Frame 4', new TabSet('Frame4Sets',
				new Tab('Content',
					TextField::create('F4FrmSubTitle', 'Frame Sub Title'),
					TextField::create('F4FrmTitle', 'Frame Title'),
					HTMLEditorField::create('F4FrmDesc', 'Description')
				),
				new Tab('Background',
					$F4FrmBg = UploadField::create('F4FrmBg', 'Background')
				),
				new Tab('Button',
					TextField::create('F4BtnLink', 'Button Link'),
					TextField::create('F4BtnText', 'Button Text')
				),
				new Tab('Products And Services',
					GridField::create(
			            'ProductsAndServicesHome',
			            'Products And Services',
			            $this->ProductsAndServicesHome(),
			            GridFieldConfig_RecordEditor::create()
		        	)
				)
			));

				$F4FrmBg->setFolderName('Frame4/');

			// Frm 5
			$fields->addFieldToTab('Root.Frame 5', new TabSet('Frame5Sets',
				new Tab('Content',
					TextField::create('F5FrmSubTitle', 'Frame Sub Title'),
					TextField::create('F5FrmTitle', 'Frame Title'),
					HTMLEditorField::create('F5FrmDesc', 'Description')
				),
				new Tab('Picture',
					$F5FrmPicture = UploadField::create('F5FrmPicture', 'Picture')
				),
				new Tab('Button',
					TextField::create('F5BtnLink', 'Button Link'),
					TextField::create('F5BtnText', 'Button Text')
				)
			));
				$F5FrmPicture->setFolderName('Frame5/');

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
			// $uploadf1->setFolderName('homepage/Frm-1');

			return $fields;
		}
	}

	class HomePageController extends PageController {
		
	}
}