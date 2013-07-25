<?php $this->widget('application.components.LeftMenuWidget.leftMenuWidget'); ?>
<?php $route = 'http://fc03.deviantart.net/fs71/i/2012/004/8/a/volibear_thunder__s_roar_sculpture_by_snakestorm44-d4l9x9k.jpg'; ?>

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
        <div class='userBlock'>
            <div class='avatar'>
                <img src='<?php echo $route; ?>'>
            </div>
        </div>
    </div>

    <p><?php echo $event->description; ?></p>
</div>

<style type='text/css'>
    .informationBlock {
        border-bottom: 1px #c9c9c9 solid;
        padding: 0px 10px 15px 10px;
        margin: 0px 0px 10px 0px;
    }
    h1 {
        padding: 5px 0px 10px 0px;
    }
    .avatar {
        width: 70px;
        height: 70px;
        overflow: hidden;
    }
    .avatar>img {
        <?php $image = ImageControl::getImage($route); echo ($image->width>$image->height) ? 'width: 100%;' : 'height: 100%;';?>
        margin-left: -15px;
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