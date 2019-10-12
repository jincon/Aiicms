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
        <div class="panel-heading">账户设置</div>
        <div class="panel-body">
            <form class="form-horizontal" action="" method="post">
                <input type="hidden" name="id" value="<?php ?>">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">用户密码：</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="" name="password" id="inputEmail3" placeholder="用户密码，不修改可以为空">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-default btn-lg active">提交</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>