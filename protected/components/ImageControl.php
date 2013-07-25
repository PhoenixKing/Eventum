<?php

class ImageControl {
    public $width;
    public $height;
    public $route;
    public $size;

    /**
     * @param $route
     * @return ImageControl|null
     * Передаем методу путь к рисунку, получаем объект содержащий всю необходимую информацию
     */
    public static function getImage($route) {
        if (file_exists($route)) {
            list($width, $height) = getimagesize($route);
            $obj = new ImageControl();
            $obj->width = $width;
            $obj->height = $height;
            $obj->route = '/'.$route;
            $obj->size = filesize($route);
            return($obj);
        } else {
            return (null);
        }
    }

}

?>