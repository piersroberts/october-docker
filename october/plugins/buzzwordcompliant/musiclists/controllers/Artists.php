<?php
namespace BuzzwordCompliant\Musiclists\Controllers;

use Backend\Facades\BackendMenu;

class Artists extends \Backend\Classes\Controller
{
    public $implement = ['Backend.Behaviors.ListController'];
    public $listConfig = 'list_config.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BuzzwordCompliant.Musiclists', 'musiclists', 'artists');
    }

    public function index()    // <=== Action method
    {
        $this->asExtension('ListController')->index();
    }
}