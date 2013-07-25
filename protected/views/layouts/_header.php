<div id='header'>
    <div id='logo'></div>
    <ol id='menu'>
<!--        <li>--><?//= CHtml::link('События'); ?><!--</li>-->
<!--        <li>--><?//= CHtml::link('Киноафиша'); ?><!--</li>-->
<!--        <li>--><?//= CHtml::link('Развлечения'); ?><!--</li>-->
<!--        <li>--><?//= CHtml::link('Контакты'); ?><!--</li>-->
<!--        <li>--><?//= CHtml::link('О Проекте'); ?><!--</li>-->
        <div id='searchBlock'>
            <input type='text' name='search' value='' id='searchInput'>
            <div id='searchButton'><img src='/images/search.png'></div>
        </div>
    </ol>
</div>

<style type="text/css">
    #header {
        width: 100%;
        height: 40px;
        background-color: #f4f4f4;
        border-bottom: 1px #e8e8e8 solid;
    }
    #logo {
        width: 237px;
        height: 40px;
        background-image: url('/images/logo_ench.png');
        margin: 0px;
        padding: 0px;
        float: left;
        display: block;
    }
    #logo>img {
        width: 100%;
    }
    #menu {
        margin: 0px;
        padding: 0px;
    }
    #menu>li {
        display: inline-block;
    }
    #searchBlock {
        width: 550px;
        height: 27px;
        background-color: #fff;
        border: 1px #c3c3c3 solid;
        float: left;
        margin: 6px 0px 0px 43px;
    }
    #searchBlock>input {
        width: 475px;
        outline: none;
        padding: 2px 0px 0px 5px;
        font-size: 12pt;
    }
    #searchButton {
        width: 65px;
        height: 27px;
        background-color: #f8f8f8;
        float: right;
        border-left: 1px #c9c9c9 solid;
    }
    #searchButton:hover {
        background-color: #ebebeb;
        cursor: pointer;
    }
    #searchButton>img {
        margin: 8px 0px 0px 25px;
        width: 13px;
    }
    #searchInput {
        background-color: transparent;
        border: none;
    }
</style>