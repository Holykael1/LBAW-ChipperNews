<?php /* Smarty version Smarty-3.1.15, created on 2017-05-04 13:59:59
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\users\post-history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2786558fe43e57bc2a4-81144832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '247c1f037db705a319a77d6cb6888cb5dfa998b8' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\post-history.tpl',
      1 => 1493664803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2786558fe43e57bc2a4-81144832',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fe43e5943b64_71714743',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'comments' => 0,
    'comment' => 0,
    'article' => 0,
    'user' => 0,
    'votes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe43e5943b64_71714743')) {function content_58fe43e5943b64_71714743($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post History</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-posthistory.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-header.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/main.js"></script>
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>

<body>

    <div class=allcontent>
        <div id="bg">
            <img class="bg" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/circuit.jpg" alt="">
        </div>


        <div class="container-fluid" id="postheader">
            <h1 class="nf"> My Comment History </h1>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle pull-right" type="button" data-toggle="dropdown" id="dropdownbutton"><span class="droptext">Newest</span>
		<span class="caret caret-reversed"></span> 
		</button>
                <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu1">
                    <li><a href="#" onclick="changeDropdown('Newest')">Newest</a></li>
                    <li><a href="#" onclick="changeDropdown('Oldest')">Oldest</a></li>
                    <li><a href="#" onclick="changeDropdown('Popular')">Popular</a></li>
                    <li><a href="#" onclick="changeDropdown('Controversial')">Controversial</a></li>
                </ul>
            </div>
        </div>
         <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['article'] = new Smarty_variable(fetchArticle($_smarty_tpl->tpl_vars['comment']->value['comment_id']), null, 0);?>
            <div class="container comment-snip" id="">
                <div class="thumbcontent">
                    <div class="container image">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images\articles\<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="..." style=" width: 100%; height: auto;">
                    </div>
                    <h2 id="headline"><a href=# style="color:black" id="articleAnchor"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
                </div>
                <div class="comment">
                    <div class="mycomment">
                        <h6>By <a style="color:black; font-style:italic"><?php echo $_smarty_tpl->tpl_vars['user']->value[0]['username'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['comment']->value['posted_date'];?>
</h6>
                        <p><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</p>
                        <?php $_smarty_tpl->tpl_vars['votes'] = new Smarty_variable(getVotes($_smarty_tpl->tpl_vars['comment']->value['comment_id']), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['votes']->value>=0) {?>
                            <h5>Votes: <span class="posrating" style="font-weight:bold;color:#357266">+<?php echo $_smarty_tpl->tpl_vars['votes']->value;?>
</span></h5>
                        <?php } else { ?>
                            <h5>Votes: <span class="posrating" style="font-weight:bold;color:#f11066">-<?php echo $_smarty_tpl->tpl_vars['votes']->value;?>
</span></h5>
                        <?php }?>
                    </div>
                </div>
            </div>
         <?php } ?>
    </div>
</body>



</html><?php }} ?>
