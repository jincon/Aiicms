<?php
class PublicController extends Controller{
    function index(){
        $this->display('login');
    }

    function login(){
        if(IS_POST){
            $username = I('username');
            $password = I('password');
            $db = $this->model('Users');
            $res = $db->getOne("select * from users where username = ? and password=?",array($username,md5($password)));

            if($res){
                Session::set('uid',$res['uid']);
                Session::set('username',$res['username']);
                $this->redirect("index/index");
            }else{
                $this->redirect("public/login");
            }
        }
        $this->display();
    }

    function logout(){
        Session::set('uid','');
        Session::set('username','');
        $this->redirect("public/login");
    }

}