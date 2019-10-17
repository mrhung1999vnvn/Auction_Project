<?php
class DB{
    private static $instance=NULL;

    /**
     * @return null
     */
    public static function getInstance(){
        if(!isset(self::$instance)){

                self::$instance=new mysqli('localhost','root','','demo_mvc')
                    or die('Connect Failed');

        }
        return self::$instance;
    }

}