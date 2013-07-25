<?php $this->widget('application.components.LeftMenuWidget.leftMenuWidget'); ?>
<?php $user = User::model()->findByPk($event->author_id); ?>

<div class='contentBlock'>
    <?php
    $this->widget('application.components.dayFilterWidget.dayFilterWidget');

    if ($event->poster != null) {
        $image = ImageControl::getImage($event->poster);
        ?>
        <div class='imageBlock'>
            <img src='<?php echo $image->route; ?>'>
        </div>
        <img class='posterShadow' src='/images/poster_shadow.png'>
        <?php
    }
    ?>

    <div class='informationBlock'>
        <h1><?php echo $event->title; ?></h1>
        <?php $this->renderPartial('//event/_user', array('user'=>$user)); ?>
        <div class='willBlock'>
            <div class='willGoButton'></div>
        </div>
    </div>

    <p><?php echo $event->description; ?></p>
</div>

<style type='text/css'>
    .willBlock {
        width: 400px;
        height: 50px;
        background-color: #f6f6f6;
        position: absolute;
        bottom: 15px;
        right: 10px;
        border-radius: 2px;
    }
    .willGoButton {
        display: block;
        width: 100px;
        height: 28px;
        margin: 10px 0px 0px 10px;
        border-radius: 2px;
        border: 1px #f6f6f6 solid;
    }
    .willGoButton:hover {
        border: 1px #c9c9c9 solid;
        background-color: #f3f3f3;
    }
</style>

<style type='text/css'>
    .informationBlock {
        border-bottom: 1px #c9c9c9 solid;
        padding: 0px 10px 15px 10px;
        margin: 0px 0px 10px 0px;
        overflow: hidden;
        position: relative;
    }
    h1 {
        font-family: Arial;
        font-weight: normal;
        font-size: 15pt;
        padding: 5px 0px 20px 0px;
        color: #222;
    }
    .contentBlock {
        display: block;
        width: 700px;
        height: 1500px;
        background-color: transparent;
        margin: 0px 0px 0px 280px;
    }
    .imageBlock {
        display: block;
        width: 680px;
        padding: 10px;
        margin: 10px 0px 0px 0px;
        border: 1px #c9c9c9 solid;
    }
    .imageBlock>img {
        width: 100%;
    }
    .posterShadow {
        margin: 0px 0px 0px 0px;
    }
    p {
        font-family: "Segoe UI";
        font-size: 10pt;
        text-align: justify;
        color: #444;
    }
</style>