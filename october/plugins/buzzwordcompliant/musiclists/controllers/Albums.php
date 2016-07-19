<?php
namespace BuzzwordCompliant\Musiclists\Controllers;

use Backend\Facades\BackendMenu;

class Albums extends \Backend\Classes\Controller
{
    public $implement = [
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.FormController',
    ];
    public $listConfig = 'list_config.yaml';
    public $formConfig = 'form_config.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BuzzwordCompliant.Musiclists', 'musiclists', 'albums');
    }

    public function index()    // <=== Action method
    {
        $this->asExtension('ListController')->index();
    }
}