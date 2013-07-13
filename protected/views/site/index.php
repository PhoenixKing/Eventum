<?php $this->widget('application.components.LeftMenuWidget.leftMenuWidget'); ?>

<div class='contentBlock'>
    <?php $this->widget('application.components.dayFilterWidget.dayFilterWidget'); ?>

    <h1>Афиша событий</h1>
    <?php $this->renderPartial('//layouts/_mainEvent'); ?>
    <p>Здесь былО 800 пикселей.</p>
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