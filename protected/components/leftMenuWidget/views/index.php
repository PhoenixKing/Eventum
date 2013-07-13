<div id='mainMenuContainer'>
    <ol>
        <li style='background-color: #fdfdfd;'><a style='padding: 0px 0px 0px 17px; font-weight: bold; font-size: 13px; color: #5f5f5f;'>Лента событий</a></li>
        <?
        foreach ($aEventTypes as $i=>$value) {?>
            <li><?= CHtml::link($value->name, '#', array('style'=>'background-image: url("'.$value->logo.'");', 'class'=>'leftMenuItemPicture')); ?></li>
        <?}
        ?>
    </ol>
</div>

<style type='text/css'>
    #mainMenuContainer {
        width: 240px;
        height: auto;
        background-color: red;
        position: absolute;
        top: 55px;
        left: 15px;
        background-color: #f8f8f8;
        border: 1px #d9d9d9 solid;
        border-radius: 2px;
    }

    #mainMenuContainer>ol {
        margin: 0px;
        padding: 0px;
    }

    #mainMenuContainer>ol>li {
        list-style: none;
        height: 35px;
        background-color: transparent;
        background-image: url('/images/leftMenuBackground.png');
    }

    #mainMenuContainer>ol>li>a {
        color: #333;
        display: block;
        text-decoration: none;
        height: 35px;
        line-height: 33px;
        font-family: "Segoe UI";
        font-size: 14px;
        padding: 0px 0px 0px 32px;
    }

    #mainMenuContainer>ol>li>a:hover {
        color: #ff6600;
    }

    .leftMenuItemPicture {
        background-repeat: no-repeat;
        background-position: 7px 10px;
    }
</style>