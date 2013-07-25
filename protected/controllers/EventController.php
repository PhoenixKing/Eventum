<?php
class EventController extends Controller {

    public $layout = '//layouts/main';

    public function actionView() {
        $id = Yii::app()->request->getQuery('id');
        if ($id !== null) {
            $event = Events::model()->findByPk($id);
            if ($event !== null) {
                $this->render('view', array('event'=>$event));
            } else {
                $title = 'Ошибка. Не найден объект';
                $message = 'Страница не может быть отображена так как запись не найдена в базе данных.';
                $this->render('//site/message', compact('title', 'message'));
            }
        } else {
            $title = 'Ошибка. Не получен идентификатор';
            $message = 'Страница не может быть отображена так как отсутствует идентификатор события';
            $this->render('//site/message', compact('title', 'message'));
        }
    }
}
?>