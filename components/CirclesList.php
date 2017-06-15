<?php

namespace GetRight\ProgressCircles\Components;

use Cms\Classes\ComponentBase;
use GetRight\ProgressCircles\Models\ProgressCircle;

class CirclesList extends ComponentBase
{
    /**
     * @var $circles
     */
    public $circles;

    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'CirclesList Component',
            'description' => 'Gets progress circles.'
        ];
    }

    /**
     * Define properties.
     *
     * @return array
     */
    public function defineProperties()
    {
        return [];
    }

    /**
     * Runs when component is loaded.
     */
    public function onRun() {
        $this->addJs('/plugins/getright/progresscircles/assets/js/circle-progress.js');
        $this->addJs('/plugins/getright/progresscircles/assets/js/init.js');

        $pathToLess = plugins_path('getright/progresscircles/assets/less');

        $this->addCss(["$pathToLess/style.less"]);

        $this->circles = $this->getThreeCircles();
    }

    /**
     * Get three circles.
     */
    private function getThreeCircles()
    {
        return ProgressCircle::take(3)->get();
    }
}
