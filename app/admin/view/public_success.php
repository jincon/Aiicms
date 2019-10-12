<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <meta author="Luoliang">
    <link rel="stylesheet" type="text/css" href="https://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
    <style>
        /* 非组件样式 */
        .btn{
            margin-right:20px;
        }
        .p40{
            padding:40px;
        }
        .mt20{
            margin-top:20px;
        }
        .title{
            font-weight:bold;
            font-size:16px;
        }
    </style>
</head>
<body>

<script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo __STATIC__;?>js/message.js"></script>
<script type="text/javascript">
    $.message({
        type:'success',
        message:'<div style="color:#333;font-weight:bold;font-size:16px;"><?php echo $message;?><div><span style="color:lightgrey;font-size:small;">3秒后自动关闭</span>',
        duration:3000,
        center:true
    })
    setTimeout(function(){ location.href='<?php echo $jumpUrl;?>'; }, 3500);
</script>
</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: jincon
 * Date: 16/9/4
 * Time: 下午5:10
 */
/*echo "成功模板";
echo $message;
echo $jumpUrl;
echo $waitSecond;


