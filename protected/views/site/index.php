<?php $this->widget('application.components.LeftMenuWidget.leftMenuWidget'); ?>

<div class='contentBlock'>
    <?php $this->widget('application.components.dayFilterWidget.dayFilterWidget'); ?>

    <h1>Афиша событий</h1>

    <?php
    foreach ($events as $event) {
        $this->renderPartial('//layouts/_event', array('event'=>$event));
    }
    ?>
</div>

<style type='text/css'>
    .contentBlock {
        display: block;
        width: 700px;
        height: 1500px;
        background-color: transparent;
        margin: 0px 0px 0px 280px;
    }
</style>