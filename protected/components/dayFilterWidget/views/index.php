<ul id='dayFilter'>
    <li><p>Раписание на: </p></li><li><?= CHtml::link('Сегодня'); ?></li><li><?= CHtml::link('Завтра'); ?></li><li><?= CHtml::link('3 Дня'); ?></li>
</ul>

<style type='text/css'>
    #dayFilter {
        margin: 0px;
        padding: 5px 0px 7px 10px;
        border-bottom: 1px #e1e1e1 solid;
    }
    #dayFilter>li {
        margin: 0px;
        padding: 0px;
        display: inline-block;
    }
    #dayFilter>li>a {
        padding: 0px 0px 0px 7px;
        margin: 0px;
        font-family: "Segoe UI";
        font-size: 13px;
        color: #148cd2;
    }
    #dayFilter>li>a:hover {
        text-decoration: none;
    }
    #dayFilter>li>p {
        padding: 0px;
        margin: 0px;
        font-family: "Segoe UI";
        font-size: 13px;
    }
</style>