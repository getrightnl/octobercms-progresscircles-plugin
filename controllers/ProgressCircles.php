<?php namespace GetRight\ProgressCircles\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Progress Circles Back-end Controller
 */
class ProgressCircles extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('GetRight.ProgressCircles', 'progresscircles', 'progresscircles');
    }
}
