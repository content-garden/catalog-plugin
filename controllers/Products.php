<?php namespace Kodji\Catalog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Kodji\Catalog\Models\Product;
/**
 * Products Back-end Controller
 */
class Products extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ImportExportController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $importExportConfig = 'config_import_export.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Kodji.Catalog', 'catalog', 'products');
    }
}
