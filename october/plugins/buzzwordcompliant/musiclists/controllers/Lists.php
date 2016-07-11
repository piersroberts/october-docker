<?php
namespace BuzzwordCompliant\Musiclists\Controllers;

use Backend\Facades\BackendMenu;

class Lists extends \Backend\Classes\Controller
{
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BuzzwordCompliant.Musiclists', 'musiclists', 'lists');
    }

    public function index()    // <=== Action method
    {

    }
}