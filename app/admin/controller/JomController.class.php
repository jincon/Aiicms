<?php
/**
 * Created by PhpStorm.
 * User: jincon
 * Date: 16/7/30
 * Time: 下午2:13
 */
class JomController extends Controller{
    public $uid;
    function __construct(){
        parent::__construct();
        $this->uid = Session::get("uid");
        if(!$this->uid){
            $this->redirect('public/login');
        }
    }

}