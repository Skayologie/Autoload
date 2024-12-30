<?php
class Autoload{
    public static function register(){
        spl_autoload_register(function ($class){
            require $class.".php";
        });
    }
}
































































//class Autoload{
//        public static function register(){
//            spl_autoload_register(static function ($class){
//                $filename = str_replace("\\","/",$class);
//                $filename = $filename.".php";
//                if (file_exists($filename)){
//                    require $filename;
//                    }
//                });
//        }
//}