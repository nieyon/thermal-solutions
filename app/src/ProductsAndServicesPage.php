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

	class ProductsAndServicesPage extends Page {

		private static $db = [
	        'ContentTitle' => 'Text',
	        'ContentSubTitle' => 'Text',
	        'ContentItemTitle1' => 'Text',
	        'ContentItemDesc1' => 'HTMLText',
	        'ContentItemTitle2' => 'Text',
	        'ContentItemDesc2' => 'HTMLText',
	        'ProSerDesc' => 'Varchar'
		];

		private static $has_one = [
			'ProPhoto' => Image::class,
		];

		private static $owns = [
			'ProPhoto',
	    ];

	    //  private static $has_many = [
	    //     'ProductsAndServices' => ProductsAndServices::class,
	    // ];

		private static $allowed_children = "none";

		private static $can_be_root = false;

		private static $defaults = array(
			'PageName' => 'Producst & Services Page',
			'MenuTitle' => 'Producst & Services',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		// private static $summary_fields = [
	 //        'GridThumbnail' => '',
	 //        'TabTitle' => 'Tab Title',
	 //        'ContentTitle' => 'Content Title',
	 //        'ContentItemTitle1' => 'Content Item Title 1',
	 //        'ContentItemDesc1' => 'Content Item Description 1',
	 //        'ContentItemTitle2' => 'Content Item Title 2',
	 //        'ContentItemDesc2' => 'Content Item Description 2',
	 //        'Description' => 'Description',
	 //    ];

	 //    private static $versioned_gridfield_extensions = true;

	 //    public function getGridThumbnail()
	 //    {
	 //        if($this->Photo()->exists()) {
	 //            return $this->Photo()->ScaleWidth(100);
	 //        }

	 //        return "(no image)";
	 //    }

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');

			// Products and Services
			$fields->addFieldToTab('Root.Content', new TabSet('ProSerContentSets',
				new Tab('Products And Services',
					$PropPhoto = UploadField::create('ProPhoto'),
		            TextField::create('ContentTitle'),
		            TextField::create('ContentSubTitle'),
		            TextField::create('ContentItemTitle1'),
		            HTMLEditorField::create('ContentItemDesc1'),
		            TextField::create('ContentItemTitle2'),
		            HTMLEditorField::create('ContentItemDesc2'),
		            TextareaField::create('ProSerDesc')
				)
			));

			$PropPhoto->setFolderName('ProductsAndServices/');

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
			// $uploadf1->setFolderName('ProductsAndServicesPage/frame-1');

			return $fields;
		}
	}

	class ProductsAndServicesPageController extends PageController {
		
	}
}