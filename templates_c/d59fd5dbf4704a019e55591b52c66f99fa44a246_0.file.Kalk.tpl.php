<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-18 20:47:47
  from 'F:\xampp\htdocs\Kalkulator\app\views\Kalk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9b4b53eec062_16392117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd59fd5dbf4704a019e55591b52c66f99fa44a246' => 
    array (
      0 => 'F:\\xampp\\htdocs\\Kalkulator\\app\\views\\Kalk.tpl',
      1 => 1587232267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5e9b4b53eec062_16392117 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18856720185e9b4b53e73075_01683473', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20541793735e9b4b53e79da8_29781887', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_18856720185e9b4b53e73075_01683473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18856720185e9b4b53e73075_01683473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_20541793735e9b4b53e79da8_29781887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20541793735e9b4b53e79da8_29781887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post">

<fieldset>
	<center>
	<h1>KALKULATOR <span class="badge badge-success">VAT</span></h1>
	<label for="x">Kwota Netto: </label>
	<input id="x" type="text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['vat']->value->x;?>
"><br />
	<label for="y">Kwota Brutto: </label>
	<input id="y" type="text" name="y" value="<?php echo $_smarty_tpl->tpl_vars['vat']->value->y;?>
"><br />

	
	<label for="proc">Procent: </label>
	<select id= "proc" name="proc">
		<option value="trzy">3%</option>
		<option value="piec">5%</option>
		<option value="siedem">7%</option>
		<option value="osiem">8%</option>
		<option value="dwadziesciadwa">22%</option>
		<option value="dwadziesciatrzy">23%</option>
	</select><br />
	<button type="submit" class="btn btn-dark">Oblicz</button></center>
</fieldset>
</form>	



<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<center>
<?php if (isset($_smarty_tpl->tpl_vars['resx']->value->resultx)) {?>
	<h4>Wynik netto</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['resx']->value->resultx;?>

	</p>
        
<?php }
if (isset($_smarty_tpl->tpl_vars['resy']->value->resulty)) {?>
	<h4>Wynik brutto</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['resy']->value->resulty;?>

        
	</p>
<?php }
if (isset($_smarty_tpl->tpl_vars['resx']->value->resultx)) {?>
<p>Gratulacje, udało Ci się obliczyć wartość VAT!</p>
<center><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/images/pepe.png" alt="Gratulacje, udało Ci się obliczyć wartość VAT"></center>
<?php }
}
}
/* {/block 'content'} */
}
