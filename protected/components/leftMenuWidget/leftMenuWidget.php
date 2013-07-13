<?php
class LeftMenuWidget extends CWidget {

    public $layout = '//layouts/';

    public function init() {
        //Получили все типы событий
        $aEventTypes = SprEventTypes::model()->findAll(array('order'=>'weight'));
        //Рендерим страницу
        $this->render('index',array(
            'aEventTypes'=>$aEventTypes
        ));
    }
}
?>