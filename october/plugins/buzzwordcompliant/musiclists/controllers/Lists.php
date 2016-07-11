<?php
namespace BuzzwordCompliant\Musiclists\Controllers;

use Backend\Facades\BackendMenu;

class Lists extends \Backend\Classes\Controller
{
    public $implement = ['Backend.Behaviors.ListController'];
    public $listConfig = 'list_config.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BuzzwordCompliant.Musiclists', 'musiclists', 'lists');
    }

    public function index()
    {
        $this->asExtension('ListController')->index();
    }
}