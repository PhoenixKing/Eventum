<?php
$count = (strlen($event->title)>75) ? 220 : 310;
if ($event->poster != null) {
    $image = ImageControl::getImage($event->poster);
    $style = ($image->width>$image->height) ? 'width: auto; height: 100%;' : 'width: 100%; height: auto;' ;
    $count = (strlen($event->title)>75) ? 165 : 260;
}
?>

<div class='event'>
    <?php if ($image !== null) { ?>
    <div class='event_image'>
        <img src='<?php echo $image->route; ?>' style='<?php echo $style; ?>'>
    </div>
    <?php } ?>

    <div class='event_info'>
        <?php echo CHtml::link($event->title, array('event/view', 'id'=>$event->id), array('class'=>'title')); ?> <span>• <?php echo CHtml::link(User::model()->findByPk($event->author_id)->nickname, '#', array('class'=>'author')); ?> </span>
        <p class='moreInformation'><?php echo CHtml::link(SprEventTypes::model()->findByPk($event->type_id)->name, '#', array('class'=>'category')); ?> • Дата события: <span><b><?php echo date('d.m.Y', strtotime($event->datetime_event)); ?></b> в <b><?php echo date('H:i:s', strtotime($event->datetime_event)); ?></b></span></p>
        <p class='description'><?php echo mb_substr(str_replace('<br>', '', $event->description), 0, $count, 'UTF-8'); ?>...<?php echo CHtml::link('Читать далее', array('view'), array('class'=>'seeMore')); ?></p>
    </div>
</div>

<style type='text/css'>
    .category {
        color: #ff6600;
    }
    .category:hover {
        text-decoration: none;
    }
    .seeMore {
        text-align: right;
        margin: 5px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
        font-family: Arial;
        font-size: 9pt;
        color: #3c79b1;
        text-decoration: none;
    }
    .seeMore:hover {
        text-decoration: underline;
    }
    .author {
        font-family: Arial;
        font-size: 8pt;
        color: #555;
        text-decoration: none;
    }
    .author:hover {
        text-decoration: underline;
    }
    .moreInformation {
        margin: 4px 0px;
        padding: 0px;
        font-family: Arial;
        font-size: 8pt;
        color: #555;
    }
    .event {
        display: block;
        width: auto;
        height: 100px;
        background-color: #efefef;
        padding: 10px;
        margin: 0px 0px 7px 0px;
        border-radius: 2px;
    }
    .event_image {
        width: 100px;
        height: 100px;
        overflow: hidden;
        float: left;
        margin: 0px 10px 0px 0px;
    }
    .event_image>img {
        width: 100%;
    }
    .event_info {
        display: block;
    }
    .title {
        margin: 0px;
        padding: 0px;
        font-size: 9pt;
        font-weight: bold;
        font-family: Arial;
        color: #3c79b1;
        text-decoration: none;
    }
    .title:hover {
        text-decoration: underline;
    }
    .description {
        font-family: Arial;
        font-size: 9pt;
    }
    span {
        font-size: 8pt;
        font-family: Arial;
        color: #6e6e6e;
    }
</style>