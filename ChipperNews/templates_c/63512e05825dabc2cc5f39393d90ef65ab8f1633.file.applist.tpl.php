<?php /* Smarty version Smarty-3.1.15, created on 2017-05-22 20:26:34
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\users\applist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:269645923497a2bcbb7-33908131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63512e05825dabc2cc5f39393d90ef65ab8f1633' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\applist.tpl',
      1 => 1495484674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269645923497a2bcbb7-33908131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'apps' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5923497a32ed68_59073070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5923497a32ed68_59073070')) {function content_5923497a32ed68_59073070($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Applications Review</title>
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
            <h1 class="nf"> Applications Review </h1>
        </div>
         <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value) {
$_smarty_tpl->tpl_vars['app']->_loop = true;
?>
            <div class="container comment-snip" id="">
                <div class="app">
                    <div class="mycomment">
						
                        <h6>(here will appeat the name but for now ID) By <a style="color:black; font-style:italic"><?php echo $_smarty_tpl->tpl_vars['app']->value['user_id'];?>
</a></h6>
                        <p>Achievements: <?php echo $_smarty_tpl->tpl_vars['app']->value['achievements'];?>
</p>
						<p>Motivation: <?php echo $_smarty_tpl->tpl_vars['app']->value['motivation'];?>
</p>
						<p>References: <?php echo $_smarty_tpl->tpl_vars['app']->value['reference'];?>
</p>
						<button type="button" class="btn btn-default">Delete</button>
						<button type="button" class="btn btn-primary">Accept</button> 
                    </div>
                </div>
            </div>
         <?php } ?>
    </div>
</body>



</html><?php }} ?>