<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-29 00:15:11
  from 'F:\xampp\htdocs\Kalkulator\app\calc\Kalk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7fda7fc84e04_37280642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f170cadd5681d94d394351e178f041c6865660b6' => 
    array (
      0 => 'F:\\xampp\\htdocs\\Kalkulator\\app\\calc\\Kalk.tpl',
      1 => 1585437098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7fda7fc84e04_37280642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8919904435e7fda7fc6ee97_79155661', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7344021495e7fda7fc6fbd0_70105624', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'footer'} */
class Block_8919904435e7fda7fc6ee97_79155661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8919904435e7fda7fc6ee97_79155661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_7344021495e7fda7fc6fbd0_70105624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7344021495e7fda7fc6fbd0_70105624',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


   
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
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
</div>
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
		<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
		<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }?>

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
<?php }?>


<?php
}
}
/* {/block 'content'} */
}
