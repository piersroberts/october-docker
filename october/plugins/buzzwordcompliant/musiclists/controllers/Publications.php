<?php
namespace BuzzwordCompliant\Musiclists\Controllers;

use Backend\Facades\BackendMenu;

class Publications extends \Backend\Classes\Controller
{
    public $implement = [
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.FormController'
    ];
    public $listConfig = 'list_config.yaml';
    public $formConfig = 'form_config.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BuzzwordCompliant.Musiclists', 'musiclists', 'publications');
    }

    public function index()
    {
        $this->asExtension('ListController')->index();
    }
}