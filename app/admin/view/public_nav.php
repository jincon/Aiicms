<nav class="navbar navbar-default">
    <div class="container-flid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">后台管理系统</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?php if($act=='index'){echo 'class="active"';}?>><a href="<?php echo U('index/index')?>">数据列表 <span class="sr-only">(current)</span></a></li>

                <li <?php if($act=='add'){echo 'class="active"';}?>><a href="<?php echo U('index/add')?>">添加数据</a></li>

                <li <?php if($act=='cat'){echo 'class="active"';}?>><a href="<?php echo U('index/cat')?>">栏目管理</a></li>

                <li <?php if($act=='config'){echo 'class="active"';}?>><a href="<?php echo U('index/config')?>">账户设置</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><?php echo Session::get('username')?></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo U('index/config')?>">账户设置</a></li>
                        <li><a href="<?php echo U('public/logout')?>">退出</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>