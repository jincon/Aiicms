<?php
/**
 * Created by PhpStorm.
 * User: jincon
 * Date: 16/7/5
 * Time: 下午11:48
 */
//
class IndexController extends JomController{

    public $db;
    public $user;

    function __construct(){
        parent::__construct();
        $this->db = $this->model();
        $this->user = $this->db->getOne("select * from users where uid=".$this->uid);
    }

    /**
     * 默认首页
     */
    function index(){

        $key = I('key');

        $page    = I('page', 1);
        $perpage =  2;
        $start = ($page-1)*$perpage;
        $sql = '';
        if($key){
            $sql = " where (xiangmu like '%".$key."%' or biaozhun like '%".$key."%' or fangfa like '%".$key."%' or tiaojian like '%".$key."%' or lingyu like '%".$key."%' or fanwei like '%".$key."%' or yangpin like '%".$key."%' or shebeiyq like '%".$key."%' or danwei like '%".$key."%' or price like '%".$key."%' or jcprice like '%".$key."%') ";
        }
        $list = $this->db->getAll("select * from diaocha $sql order by id desc limit $start,$perpage");

        $total = $this->db->getOne("select count(*) total from diaocha $sql ");

        $pager_html = '';
        if(isset($total['total']) && $total['total']){
            $linkUrl = U('index/index') . '?page=';
            $pager = Aii::app("Page");
            $pager->loadCss('classic');
            $pager_html = $pager->total($total['total'])->num($perpage)->page($page)->url($linkUrl)->output();
        }

        $this->assign('pager', $pager_html);
        $this->assign('key',$key);
        $this->assign('list',$list);
        $this->assign('act',"index");
        $this->assign('title',"最新列表");
        $this->display();
    }

    public function add(){
        $this->assign('title',"添加数据");
        $this->assign('act',"add");
        $id = I('id',0,'intval');
        if(IS_POST){
            $data = I('data');
            if(!$data['xiangmu']){
                $this->success("测试项目不能为空！");exit;
            }
            $this->db->table = 'diaocha';
            if(isset($id) && $id){
                $id = $_POST['id'];

                $this->db->update($data,"id=?",array($id));
            }else{
                $this->db->add($data);
            }
            $this->success("操作成功！",U('index/index'));exit;
        }
        $this->assign('listdata',$this->db->getOne("select * from diaocha where id=?",array($id)));
        $this->display();
    }

    public function catadd(){
        $this->assign('title',"添加/编辑数据");
        $this->assign('act',"cat");

        if(IS_POST){

        }
    }

    public function catdel(){
        $id = I('id',0,'intval');
        $this->db->table = 'cat';
        $res = $this->db->delete("id=?",array($id));
        $this->success("删除成功！");
    }

    public function cat(){
        $this->assign('title',"分类数据");
        $this->assign('act',"cat");

        if(IS_POST){
            $this->db->table = 'cat';
            $name = I('name');
            $data['name'] = $name;
            if(isset($_POST['id']) && $_POST['id']){
                $id = $_POST['id'];
                $this->db->update($data,"id=?",array($id));
            }else{
                $this->db->add($data);
            }
            $this->success("操作成功！",U('index/cat'));exit;
        }

        $key = I('key');
        $this->assign('key',$key);
        $page    = I('page', 1);
        $perpage =  100;
        $start = ($page-1)*$perpage;
        $sql = '';
        if($key){
            $sql = " where (name like '%".$key."%') ";
        }
        $list = $this->db->getAll("select * from cat $sql order by id desc limit $start,$perpage");

        if(isset($_GET['id']) && $_GET['id']){
            $this->assign('listdata',$this->db->getOne("select * from cat where id=".intval($_GET['id'])));
        }

        $this->assign('list',$list);
        $this->display();
    }

    /**
     * 账户设置
     * @param：
     */
    public function config(){
        $this->assign('title',"账户设置");
        if(IS_POST){
            if(I('password')){
                $data['password'] = md5(I('password'));
                $this->db->table = 'users';
                $this->db->update($data,"uid=?",array($this->uid));
            }
            $this->success("账户信息更新成功！");
        }
        $this->assign('act',"config");
        $userinfo = $this->db->getOne("select * from users where uid=?",array($this->uid));

        $this->assign('listdata',$userinfo);
        $this->display();
    }

    /**
     * 删除
     * @param：
     */
    function del(){
        $id = I('id',0,'intval');
        $this->db->table = 'diaocha';
        $res = $this->db->delete("id=?",array($id));
        $this->success("删除成功！");
    }



    function test(){
        //$this->success("哈哈","http://baidu.com",100);
        //$this->error("哈哈","http://baidu.com",1000000);

//          $m = $this->model('Post');
//          echo $m->p();

//        $url = "url地址";
//        $data = Aii::app('Curl')->get($url);
//        print_r($data);

//        echo Aii::app('FileCache')->set('key','我是帅哥');
//        echo Aii::app('FileCache')->set('key2','我是帅哥222');
//        echo Aii::app('FileCache')->get('key2');

//        echo Aii::app('Curl')->get();

//        print_r(I('SERVER.'));

//        test();
//        echo Aii::app('demo')->p();
//        echo C('ext');

//          Log::write("啥东西");

          //d(I('keyword'));

          echo "test";

//          var_dump(Session::set("name","baozi"));
//          var_dump(Session::get("name"));

//        echo Aii::app('Demo/demo')->p();
        // ###  等价于上面
//            Aii::library('Demo/demo');
//            (new demo())->p();


//        $page = @(int)$_GET['page'];
//        $pager = Aii::app('Page');
//        echo $pager->loadCss('classic');
//        $pager_html = $pager->total(100)->num(10)->page($page)->url('/?page=')->output();
//        echo $pager_html;
//        echo Aii::app('Captcha')->show();  //验证码
//
//        $p = Aii::app('demo','123');
//        echo $p->p();

//
//        echo Aii::app('Pinyin')->output('包子');
//        echo Aii::app('page');
//

//        $this->import('demo');  //只加载不是实例化类
//        $d = new demo();
//        $d->t();
//上面等价于
//        $d = $this->load('demo');   //加载并实例化类
//        $d->t();

//
//        echo U('ab/cd',array('a'=>1,'b'=>2));
//
//        $a = '1';
//        $this->assign('a',$a);

         $this->display();
    }
}
