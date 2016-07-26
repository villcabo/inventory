<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\inventory;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $publishOptions = [
        'forceCopy' => true
    ];
    
    public $css = [
        'inventory.css',
    ];
//    public $js = [
//        'fullcalendar/lib/moment.min.js',
//        'fullcalendar/lib/jquery-ui.custom.min.js',
//        'fullcalendar/fullcalendar.min.js',
//        'fullcalendar/lang-all.js',
//        'fullcalendar.js'
//    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets';
        parent::init();
    }

}
