<?php $route = 'http://fc03.deviantart.net/fs71/i/2012/004/8/a/volibear_thunder__s_roar_sculpture_by_snakestorm44-d4l9x9k.jpg'; ?>
<div class='userBlock'>
    <div class='avatar'>
        <img src='<?php echo $route; ?>'>
    </div>
    <?php echo CHtml::link($user->nickname, '#', array('class'=>'authorLink')); ?>
    <p class='addInfo'>Событий: <?php echo count(Events::model()->findAllByAttributes(array('author_id'=>$user->id))); ?></p>
</div>

<style type='text/css'>
    .addInfo {
        font-size: 8pt;
        color: #868686;
    }
    .authorLink {
        font-family: arial;
        font-size: 10pt;
        font-weight: bold;
        color: #3c79b1;
        text-decoration: none;
    }
    .authorLink:hover {
        text-decoration: underline;
    }
    .avatar {
        width: 50px;
        height: 50px;
        margin: 0px 10px 0px 0px;
        overflow: hidden;
        float: left;
    }
    .avatar>img {
    <?php $image = ImageControl::getImage($route); echo ($image->width>$image->height) ? 'width: 100%;' : 'height: 100%;';?>
        margin-left: -15px;
    }
</style>