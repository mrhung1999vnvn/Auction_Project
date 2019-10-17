<?php
require_once "controller/base_controller.php";

class PagesController extends BaseController{
    function __construct()
    {
        $this->folder='pages';
    }

    public function home(){
        $data=array(
            'name'=>'hung',
            'age'=>20
        );

        $this->render('home',$data);
    }

    public function error(){
        $this->render('error');
    }
}
