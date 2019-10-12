<?php
/**
 * Created by PhpStorm.
 * User: jincon
 * Date: 16/7/5
 * Time: 下午11:48
 */

class IndexController extends Controller{
    public $db;
    function __construct(){
        parent::__construct();
        $this->db = $this->model();
        //$this->user = $this->db->getOne("select * from users where uid=".$this->uid);
    }

    function index(){
        $key = I('key');

        $page    = I('page', 1);
        $perpage =  2;
        $start = ($page-1)*$perpage;
        $sql = ' where 1=1 ';
        $cat = I('cat');
        if($cat){
            $sql .= " and xiangmu='$cat'";
        }
        if($key){
            $sql .= " and (xiangmu like '%".$key."%' or biaozhun like '%".$key."%' or fangfa like '%".$key."%' or tiaojian like '%".$key."%' or lingyu like '%".$key."%' or fanwei like '%".$key."%' or yangpin like '%".$key."%' or shebeiyq like '%".$key."%' or danwei like '%".$key."%' or price like '%".$key."%' or jcprice like '%".$key."%') ";
        }
        $list = $this->db->getAll("select * from diaocha $sql order by id desc limit $start,$perpage");

        $total = $this->db->getOne("select count(*) total from diaocha $sql ");
        $pager_html = '';
        if(isset($total['total'])&&$total['total']){
            $linkUrl = U('index/index') . '?cat='.$cat.'&key='.$key.'&page=';
            $pager = Aii::app("Page");
            $pager_html = $pager->total($total['total'])->num($perpage)->page($page)->url($linkUrl)->output();
        }


        $cat = $this->db->getAll("select * from cat order by id desc");
//        $catdata = array();
//        foreach($cat as $k=>$v){
//            $catdata[] = $v['name'];
//        }
        $this->assign('catdata', $cat);

        $this->assign('pager', $pager_html);
        $this->assign('key',$key);
        $this->assign('list',$list);

        $this->display();
    }


}