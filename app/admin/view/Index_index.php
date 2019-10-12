<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="gbk">
    <title><?php echo $title;?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<script language="javascript" type="text/javascript" src="./js/WdatePicker.js"></script>
<div class="container col-md-10 col-md-offset-1">

    <?php include("public_nav.php");?>

    <div class="panel panel-default">
        <div class="panel-heading">后台管理系统</div>
        <div class="panel-body">
            后台管理系统，用于显示数据的各项列表。。
        </div>
    </div>

    <form class="form-horizontal" action="" method="get">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">搜索：</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" value="<?php echo $key;?>" name="key" id="inputEmail3" placeholder="搜索全部">
            </div>
            <div class="col-sm-4">
                <button type="submit" class="btn btn-default active" style="height: 35px;">搜索</button>
            </div>
        </div>
    </form>
    <table class="table col-md-6 table-bordered table-hover table-striped">
        <tr class="bg-primary">
            <thead>
            <th width="4%">序号</th>
            <th width="7%">测试项目</th>
            <th width="8%">测试标准</th>
            <th width="8%">测试方法</th>
            <th width="8%">测试条件</th>
            <th width="8%">行业领域</th>
            <th width="8%">应用范围</th>
            <th width="8%">样品情况</th>
            <th width="8%">设备仪器</th>
            <th width="5%">计价单位</th>
            <th width="8%">时间</th>
            <th width="7%">操作</th>
            </thead>
        </tr>
        
		<?php 
		if(isset($list)){foreach($list as $v){ ?>
		<tr>
			<td><?php echo $v['id']?></td>
            <td><?php echo $v['xiangmu']?></td>
            <td><?php echo $v['biaozhun']?></td>
            <td><?php echo $v['fangfa']?$v['fangfa']:"\\";?></td>
            <td><?php echo $v['tiaojian']?$v['tiaojian']:"\\";?></td>
            <td><?php echo $v['lingyu']?$v['lingyu']:"\\";?></td>
            <td><?php echo $v['fanwei']?$v['fanwei']:'\\';?></td>
            <td><?php echo $v['yangpin']?$v['yangpin']:'\\';?></td>
            <td><?php echo $v['shebeiyq']?$v['shebeiyq']:'\\';?></td>
            <td><?php echo $v['danwei']?$v['danwei']:'';?></td>
            <td><?php echo $v['dateline']?$v['dateline']:'';?></td>
            <td><a href="<?php echo U('index/add',array('id'=>$v['id']));?>">编辑</a> <br> <a href="<?php echo U('index/del',array('id'=>$v['id']));?>" onClick="javascript:if(!confirm('确定删除吗？')){return false;}">删除</a></td>
		</tr>
		<?php }} ?>
    </table>
    <!-- 分页 -->
    <style>
        .pagelist_current{display: inline-block;
            padding: 5px 14px;}
    </style>
    <?php if($pager) { ?>
        <div class="pager">
            <?php echo $pager; ?>
        </div>
    <?php } ?>
    <!-- /分页 -->
</div>
</body>
</html>