<?php /* Smarty version Smarty-3.1.15, created on 2017-04-19 10:06:24
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\admin\adminpanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1225958f7353a0d4b52-69720337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6ba07b5f2b050710ca9df8f6e8524eaca194351' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\admin\\adminpanel.tpl',
      1 => 1492596381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1225958f7353a0d4b52-69720337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f7353a0f6468_13800881',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f7353a0f6468_13800881')) {function content_58f7353a0f6468_13800881($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chipper News</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap-theme.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-ricardo.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <a class="navbar-brand" href="#">Admin Panel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin Options <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Shut down for maintenance</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Search User</button>
                </form>

                <ul class="nav navbar-nav navbar-right">

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <row>
        <div class="col-sm-3">
            <h1> Users </h1>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> User Options <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Promote to Moderator</a></li>
                    <li><a href="#">Promote to Collaborator</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Freeze Account</a></li>
                    <li><a href="#">Ban</a></li>
                </ul>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/pepe.jpg" alt="..."></td>
                        <td>Pepe 1</td>
                        <td>pepe1@frog.com
                        </td>
                        <td>
                            <form action="">
                                <input type="checkbox" name="check" value="checked"><br>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/pepe.jpg" alt="..."></td>
                        <td>Pepe 2</td>
                        <td>pepe2@frog.com</td>
                        <td>
                            <form action="">
                                <input type="checkbox" name="check" value="checked"><br>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3">
            <h1> Collaborators </h1>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Collaborator Options <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Promote to Moderator</a></li>
                    <li><a href="#">Promote to Collaborator</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Freeze Account</a></li>
                    <li><a href="#">Ban</a></li>
                </ul>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/pepe.jpg" alt="..."></td>
                        <td>Pepe 1</td>
                        <td>pepe1@frog.com</td>
                        <td>
                            <form action="">
                                <input type="checkbox" name="check" value="checked"><br>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/pepe.jpg" alt="..."></td>
                        <td>Pepe 2</td>
                        <td>pepe2@frog.com</td>
                        <td>
                            <form action="">
                                <input type="checkbox" name="check" value="checked"><br>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="col-sm-3">
            <h1> Moderators </h1>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Moderator Options <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Promote to Moderator</a></li>
                    <li><a href="#">Promote to Collaborator</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Freeze Account</a></li>
                    <li><a href="#">Ban</a></li>
                </ul>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/pepe.jpg" alt="..."></td>
                        <td>Pepe 1</td>
                        <td>pepe1@frog.com</td>
                        <td>
                            <form action="">
                                <input type="checkbox" name="check" value="checked"><br>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/pepe.jpg" alt="..."></td>
                        <td>Pepe 2</td>
                        <td>pepe2@frog.com</td>
                        <td>
                            <form action="">
                                <input type="checkbox" name="check" value="checked"><br>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </row>
    <footer>
        <p> </p>
    </footer>
</body>

</html><?php }} ?>