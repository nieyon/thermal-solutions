<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\View\Requirements;

    class PageController extends ContentController
    {
        /**
         * An array of actions that can be accessed via a request. Each array element should be an action name, and the
         * permissions or conditions required to allow the user to access it.
         *
         * <code>
         * [
         *     'action', // anyone can access this action
         *     'action' => true, // same as above
         *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
         *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
         * ];
         * </code>
         *
         * @var array
         */
        private static $allowed_actions = [];

        public function HeaderFooter(){
           return HeaderFooter::get();
        }

        public function Stylesheet(){
           return Stylesheet::get();
        }


        public function Slide(){
           return Slide::get();
        }

        public function CareersTab(){
           return CareersTab::get();
        }

        public function AboutTab(){
           return AboutTab::get();
        }

        public function ContactController(){
           return ContactController::get();
        }

        public function Inquiry(){
           return Inquiry::get();
        }

        public function InquiryAdmin(){
           return InquiryAdmin::get();
        }

        protected function init()
        {
            parent::init();
            // You can include any CSS or JS required by your project here.
            // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/
            Requirements::themedCSS("assets/app");
            Requirements::themedCSS("fonts/benefice/style");
            Requirements::themedCSS("fonts/openSans/style");
        }
    }
}


