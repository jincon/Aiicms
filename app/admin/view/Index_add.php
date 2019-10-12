<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="gbk">
    <title>首页列表</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--<link href="./ueditor/themes/default/css/umeditor.min.css" type="text/css" rel="stylesheet">
    <script src="./ueditor/umeditor.config.js"></script>
    <script src="./ueditor/umeditor.min.js"></script>-->
</head>
<body>
<!--<script language="javascript" type="text/javascript" src="./js/WdatePicker.js"></script>-->

<div class="container col-md-10 col-md-offset-1">

    <?php include("public_nav.php");?>

    <div class="panel panel-default">
        <div class="panel-heading">添加/修改内容</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo U("index/add");?>" method="post">
                <input type="hidden" name="id" value="<?php echo isset($_GET['id'])?$_GET['id']:'';?>">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">测试项目</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo isset($listdata['xiangmu'])?$listdata['xiangmu']:''?>" name="data[xiangmu]" id="inputEmail3" placeholder="测试项目">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">测试标准</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo isset($listdata['biaozhun'])?$listdata['biaozhun']:''?>" name="data[biaozhun]" id="inputEmail3" placeholder="测试标准">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">测试方法</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo isset($listdata['fangfa'])?$listdata['fangfa']:''?>" name="data[fangfa]" id="inputEmail3" placeholder="测试方法">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">测试条件</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo isset($listdata['tiaojian'])?$listdata['tiaojian']:''?>" name="data[tiaojian]" id="inputEmail3" placeholder="测试条件">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">行业领域</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo isset($listdata['lingyu'])?$listdata['lingyu']:''?>" name="data[lingyu]" id="inputEmail3" placeholder="行业领域">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">应用范围</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo isset($listdata['fanwei'])?$listdata['fanwei']:''?>" name="data[fanwei]" id="inputEmail3" placeholder="应用范围">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">样品情况</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo isset($listdata['yangpin'])?$listdata['yangpin']:''?>" name="data[yangpin]" id="inputEmail3" placeholder="样品情况">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">设备仪器</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo isset($listdata['shebeiyq'])?$listdata['shebeiyq']:''?>" name="data[shebeiyq]" id="inputEmail3" placeholder="设备仪器">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">计价单位</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo isset($listdata['danwei'])?$listdata['danwei']:''?>" name="data[danwei]" id="inputEmail3" placeholder="计价单位">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">研发数据价格</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo isset($listdata['price'])?$listdata['price']:''?>" name="data[price]" id="inputEmail3" placeholder="研发数据价格">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">检测报告价格</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo isset($listdata['jcprice'])?$listdata['jcprice']:''?>" name="data[jcprice]" id="inputEmail3" placeholder="检测报告价格">
                    </div>
                </div>
                <!-- 实例化编辑器 -->
                <script type="text/javascript">
//                    var ue = UM.getEditor('container',{
//                        toolbars: [
//                            ['fullscreen', 'source', 'undo', 'redo', 'bold']
//                        ]
//                    });
                </script>
                <div class="text-center">
                    <button type="submit" class="btn btn-default btn-lg active">提交</button>
                </div>
            </form>
        </div>
    </div>


</div>
</body>
</html>