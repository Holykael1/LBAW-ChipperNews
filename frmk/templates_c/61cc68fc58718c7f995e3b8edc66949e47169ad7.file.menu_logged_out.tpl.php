<?php /* Smarty version Smarty-3.1.15, created on 2017-04-19 12:08:19
         compiled from "C:\wamp64\www\LBAW-ChipperNews\frmk\templates\common\menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1123258f753338cd0c6-83109871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61cc68fc58718c7f995e3b8edc66949e47169ad7' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\frmk\\templates\\common\\menu_logged_out.tpl',
      1 => 1386927924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1123258f753338cd0c6-83109871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f753338e5ce8_17338639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f753338e5ce8_17338639')) {function content_58f753338e5ce8_17338639($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
