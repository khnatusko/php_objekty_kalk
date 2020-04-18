<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-18 20:52:01
  from 'F:\xampp\htdocs\Kalkulator\app\views\HistoryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9b4c5151b016_51660132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ebc522b20f4ee5eca2ea330214eec36d0251db4' => 
    array (
      0 => 'F:\\xampp\\htdocs\\Kalkulator\\app\\views\\HistoryView.tpl',
      1 => 1587235920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5e9b4c5151b016_51660132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13508967175e9b4c514b5565_10587820', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_13508967175e9b4c514b5565_10587820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13508967175e9b4c514b5565_10587820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Historia obliczeń</h2> <br/>
    <div>
        <table>
            <head>
                <tr>
                    <th>Netto</th>
                    <th>Brutto</th>
                    <th>Procent</th>
                    <th>Wynik Netto</th>
                    <th>Wynik Brutto</th>
                </tr>
            </head>
            <body>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['d']->value["netto"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["brutto"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["procenty"];?>
</td><td><?php echo round($_smarty_tpl->tpl_vars['d']->value["wyn_netto"],3);?>
</td><td><?php echo round($_smarty_tpl->tpl_vars['d']->value["wyn_brutto"],3);?>
</td></tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </body>
        </table>
    </div>
            <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
