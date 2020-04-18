<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-18 20:47:43
  from 'F:\xampp\htdocs\Kalkulator\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9b4b4f89f452_50474782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '708a2f35daea71cfcec1c56e199d8c01e64723b0' => 
    array (
      0 => 'F:\\xampp\\htdocs\\Kalkulator\\app\\views\\LoginView.tpl',
      1 => 1587232383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5e9b4b4f89f452_50474782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18638919915e9b4b4f883824_28043801', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main2.tpl");
}
/* {block 'content'} */
class Block_18638919915e9b4b4f883824_28043801 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18638919915e9b4b4f883824_28043801',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
	<center>
	<h1>Logowanie do<span class="badge badge-success">Kalkulatora VAT</span></h1>
        <fieldset>
            <div class="pure-control-group">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_password">Password: </label>
			<input id="id_password" type="password" name="password" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
		</div>
        </fieldset>
    </form>
        
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
