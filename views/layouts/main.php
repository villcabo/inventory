<?php

use yii\widgets\Breadcrumbs;
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?= \humhub\modules\inventory\widgets\InventoryMenu::widget(); ?>
        </div>
        <div class="col-md-9">
            <div>
                <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
                <div class="panel panel-default">
                    <?= $content ?>
                </div>
            </div>
        </div>
    </div>
</div>