<?php namespace GetRight\ProgressCircles;

use Backend;
use System\Classes\PluginBase;

/**
 * ProgressCircles Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'ProgressCircles',
            'description' => 'Plugin for progress circles.',
            'author'      => 'GetRight',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'GetRight\ProgressCircles\Components\CirclesList' => 'CirclesList',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'getright.progresscircles.some_permission' => [
                'tab' => 'ProgressCircles',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'progresscircles' => [
                'label'       => 'ProgressCircles',
                'url'         => Backend::url('getright/progresscircles/progresscircles'),
                'icon'        => 'icon-leaf',
                'permissions' => ['getright.progresscircles.*'],
                'order'       => 500,
            ],
        ];
    }
}
