<?php
namespace {
    use SilverStripe\Admin\ModelAdmin;
    class ApplicationAdmin extends ModelAdmin {
        private static $managed_models = [
            Application::class,
        ];
        private static $menu_title = 'Applications';
        private static $url_segment = 'Applications';
        
    }
}