<?php
/* Smarty version 3.1.33, created on 2019-02-24 18:04:25
  from 'C:\xampp\htdocs\EX\Tienda\06_T_Descripcion\Smarty\template\descripcion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c72ce99aca122_27227691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a574493db3e00fa6541dc31865490568f9af1d90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\EX\\Tienda\\06_T_Descripcion\\Smarty\\template\\descripcion.tpl',
      1 => 1549748941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c72ce99aca122_27227691 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Descipcion del producto</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
    
    <body>
        <div class="content c_login content_desc">
            <?php $_smarty_tpl->_assignInScope('info', "<div id='info_desc'><h2>Descripción</h2><p>");?>
            <?php $_smarty_tpl->_assignInScope('result', "<div class='login'><div class='product'>");?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infoProduct']->value, 'producto', false, 'key', 'pos', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['producto']->value) {
?>
                <?php if (($_smarty_tpl->tpl_vars['key']->value === 4)) {?>                     <?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('info', (($_smarty_tpl->tpl_vars['info']->value).($_prefixVariable1)).("</p></div>"));?>
                <?php } else { ?>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value;
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('result', ((($_smarty_tpl->tpl_vars['result']->value).("<p>")).($_prefixVariable2)).("</p>"));?>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php $_smarty_tpl->_assignInScope('result', ($_smarty_tpl->tpl_vars['result']->value).("<form action='./productos.php' method='POST'>
                <button type='submit' name='btn' value='LogOut' class='btn_exit'></button></form>"));?>
                
           
            <?php echo (($_smarty_tpl->tpl_vars['info']->value).($_smarty_tpl->tpl_vars['result']->value)).("</div></div>");?>


        </div>
    </body>
</html><?php }
}
