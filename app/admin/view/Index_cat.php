<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="gbk">
    <title>首页列表</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<!--<script language="javascript" type="text/javascript" src="./js/WdatePicker.js"></script>-->

<div class="container col-md-10 col-md-offset-1">
    <?php include("public_nav.php");?>



    <form class="form-horizontal" action="" method="get">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">搜索：分类名称</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" value="<?php echo $key?>" name="key" id="inputEmail3" placeholder="请输入分类名称">
            </div>
            <div class="col-sm-6">
                <button type="submit" class="btn btn-default active" style="height: 35px;">搜索</button>
            </div>
        </div>
    </form>
    <div class="panel panel-default">
        <div class="panel-heading">添加/修改分类</div>
        <div class="panel-body">
            <form class="form-horizontal" action="" method="post">
                <input type="hidden" name="id" value="<?php echo isset($_GET['id'])?$_GET['id']:'';?>">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">分类</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="pid">
                            <option value="0" <?php if(isset($listdata['pid']) && $listdata['pid'] == 0){echo "selected";}?>>顶级分类</option>
                            <?php /*if(isset($catdata)){foreach($catdata as $k=>$v){ ?>
                                <option value="<?php echo $v['id']?>" <?php if(isset($listdata['pid']) && $listdata['pid'] == $v['id']){echo "selected";}?>><?php echo $v['name']?></option>
                            <?php }}*/ ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">分类名称</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo isset($listdata['name'])?$listdata['name']:''?>" name="name" id="inputEmail3" placeholder="分类名称">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-default btn-lg active">提交</button>
                </div>
            </form>
        </div>
    </div>
    <form class="form-horizontal" action="?act=alldo" method="post">
        <table class="table col-md-6 table-bordered table-hover table-striped">
            <tr class="bg-primary">
                <thead>
                <th>序号</th>
                <th>分类名称</th>
                <th>时间</th>
                <th>操作</th>
                </thead>
            </tr>
            <?php
            if(isset($list)){foreach($list as $v){ ?>
                <tr>
                    <td><input type="checkbox" name="ids[]" value="<?php echo $v['id']?>"> <?php echo $v['id']?></td>
                    <td><?php if(isset($v['pid']) && $v['pid']){$cat = $db->getOne("select `name` from cat where id = ".$v['pid']);echo ($cat['name'])." &nbsp;|—&nbsp; ";} echo $v['name']?></td>
                    <td><?php echo $v['dateline'];?></td>
                    <td><a href="<?php echo U('index/cat');?>?id=<?php echo $v['id']?>">编辑</a> | <a href="<?php echo U('index/catdel');?>?id=<?php echo $v['id']?>" onClick="javascript:if(!confirm('确定删除吗？')){return false;}">删除</a></td>
                </tr>
            <?php }} ?>
            <!--        <button class="btn btn-default" type="submit" name="all" value="edit" style="margin-bottom: 10px">批量编辑</button>-->
            <button class="btn btn-default" type="submit" name="all" value="del" style="margin-bottom: 10px;margin-left:10px;" onclick="javascript:if(confirm('你确定要批量删除嘛')){return true;}else{return false}">批量删除</button> （注意:删除需要勾选，编辑可不用勾选）
        </table>
        <?php

        //存储页码字符串
        /*$pageNumString = "";
        if($curPage <=5){
            $begin =1;
            $end = $totalpage>=10?10:$totalpage;
        }else{
            $end = $curPage +5>$totalpage?$totalpage:$curPage +5;
            $begin =$end -9<=1?1:$end -9;
        }
        //实现上一页
        $prev = $curPage -1<=1?1:$curPage -1;
        $pageNumString .="<li><a href='?key=".(isset($_GET['key'])?$_GET['key']:'')."&page=1'>首页</a></li>";
        $pageNumString .="<li><a href='?key=".(isset($_GET['key'])?$_GET['key']:'')."&page=$prev'>&laquo;</a></li>";


        //根据起始页与终止页将当前页面的页码显示出来
        for($i=$begin;$i<=$end;$i++){
            //使用if实现高亮显示当前点击的页码
            if($curPage == $i){
                $pageNumString .= "<li class='active'><a href='?key=".(isset($_GET['key'])?$_GET['key']:'')."&page=$i'>$i</a></li>";
            }else{
                $pageNumString .= "<li><a href='?key=".(isset($_GET['key'])?$_GET['key']:'')."&page=$i'>$i</a></li>";
            }
        }
        //实现下一页
        $next = $curPage +1 >=$totalpage?$totalpage:$curPage +1;
        $pageNumString .="<li><a href='?key=".(isset($_GET['key'])?$_GET['key']:'')."page=$next'>&raquo;</a></li>";
        $pageNumString .="<li><a href='?key=".(isset($_GET['key'])?$_GET['key']:'')."&page=$totalpage'>尾页</a></li>";*/
        ?>
        <ul class="pagination">
            <?php //echo $pageNumString;?>
        </ul>
    </form>
</div>
</body>
</html>