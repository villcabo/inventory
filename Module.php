<?php

namespace humhub\modules\inventory;

use Yii;
use humhub\modules\space\models\Space;
use humhub\modules\user\models\User;
use humhub\modules\content\components\ContentContainerActiveRecord;

class Module extends \humhub\modules\content\components\ContentContainerModule
{
    
    /**
     * @inheritdoc
     */
    public function getContentContainerTypes()
    {
        return [
            Space::className(),
            User::className(),
        ];
    }

    /**
     * @inheritdoc
     */
//    public function disable()
//    {
//        foreach (CalendarEntry::find()->all() as $entry) {
//            $entry->delete();
//        }
//
//        parent::disable();
//    }

    /**
     * @inheritdoc
     */
//    public function disableContentContainer(ContentContainerActiveRecord $container)
//    {
//        parent::disableContentContainer($container);
//        foreach (CalendarEntry::find()->contentContainer($container)->all() as $entry) {
//            $entry->delete();
//        }
//    }

    /**
     * @inheritdoc
     */
    public function getContentContainerDescription(ContentContainerActiveRecord $container)
    {
        if ($container instanceof Space) {
            return Yii::t('InventoryModule.base', 'Adds an event calendar to this space.');
        } elseif ($container instanceof User) {
            return Yii::t('InventoryModule.base', 'Adds an calendar for private or public events to your profile and mainmenu.');
        }
    }

}
