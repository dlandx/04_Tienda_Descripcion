<?php
/* Smarty version 3.1.33, created on 2019-02-24 18:03:26
  from 'C:\xampp\htdocs\EX\Tienda\06_T_Descripcion\Smarty\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c72ce5e9efb93_13656511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07a2e844faf1736f5ea691a82a7ce21fda110d72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\EX\\Tienda\\06_T_Descripcion\\Smarty\\template\\login.tpl',
      1 => 1549737438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c72ce5e9efb93_13656511 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
    
    <body>
        <div class="content c_login">
            <img src="https://image.flaticon.com/icons/png/512/419/419280.png" alt="" class="img">
            
            <div class="login">
                <span class="info"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
                
                <form action="./login.php" method="POST">
                    <h1>Login</h1>
                    <input type="text" placeholder="Ingresar usuario" name="user" value="" class="campo" autocomplete="off">
                    <input type="password" placeholder="Ingresar contraseña" name="pass" value="" class="campo">
                    <button type="submit" name="btn" value="Login" class="btn">Login</button>
                    <!-- <input type="submit" class="success" value="Login" name="btn"> -->
                </form>
            </div>
        </div>
    </body>
</html><?php }
}
