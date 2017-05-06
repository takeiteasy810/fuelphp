<?php
/* Smarty version 3.1.31, created on 2017-05-07 00:08:50
  from "/vagrant_data/fuel/app/views/test/index.smarty" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_590de70217ba99_19778199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '046a2ebe9b60de91c2a1d495f4f46c37c76afd05' => 
    array (
      0 => '/vagrant_data/fuel/app/views/test/index.smarty',
      1 => 1494005005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590de70217ba99_19778199 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FuelPHP Framework</title>
	<?php 
            echo Asset::css('bootstrap.css');
        ?>
</head>
<body>

    <header>
        <div class="container">
            <h1>
            hello world!<?php echo $_smarty_tpl->tpl_vars['test']->value;?>

            </h1>
        </div>
    </header>
    <div class="container">
        <?php echo $_smarty_tpl->tpl_vars['form']->value;?>

    </div>
</body>
</html>
<?php }
}
