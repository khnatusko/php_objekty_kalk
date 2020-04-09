<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-09 21:35:46
  from 'F:\xampp\htdocs\Kalkulator\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8f7912b2bcb7_01349955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31c1b8644b7d9689a4ddd644b8dae7a367a66dc9' => 
    array (
      0 => 'F:\\xampp\\htdocs\\Kalkulator\\app\\views\\templates\\main.tpl',
      1 => 1586453102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8f7912b2bcb7_01349955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html lang="pl">
<head>
 <title>Kalkulator</title>
         <meta charset="utf-8">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/css/main.css" />
</head>
<body>
    <div id="app_top" class="header">
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
							<h1>Kalkulator VAT</h1>
						</div>
                                     
					<!-- Nav -->
						<nav id="nav">
                                                    <ul>
                                                      
                                                         <li>
                                                            <a href="#app_content">Kalkulator</a>
                                                        </li>
                                                    </ul>
						</nav>

				</section>
                         

                </div>

            <!-- Footer -->
				<section id="footer" class="wrapper">
					<div class="title">Reszta należy do Ciebie</div>
					<div class="container">
						
                                        </div>
						<div class="row">

                                                    <section class="col">
                                    
							<div class="col">
                                                            
								<!-- Contact Form -->
                                                            <div class="content-wrapper">
                                                                
                                                                <div id="app_content" class="content" class="col">
                                                                    
                                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20772654715e8f7912af2b90_25166505', 'content');
?>

                                                                   
                                                            </div>
                                                            
                                                            </div>
                                                        </div>
                                                            
                                                    </section>

                                                            <center>
                                                         <section class="col">
                                                                <div class="col"> 
                                                    
                                                                            <h3>Social</h3>
                                                
                                                                            <p>
                                                                            <a href="https://twitter.com/Varaskuu" class="icon brands alt fa-twitter"></a>
                                                                            <a href="#" class="icon brands alt fa-facebook"></a>
                                                                            <a href="https://github.com/khnatusko" class="icon brands alt fa-github"><span class="label">GitHub</span></a>
                                                                            </p>
                                                                            <p>&copy; Autor: Krzysztof Hnatuśko.</p> <p>Design: <a href="http://html5up.net">HTML5 UP</a></p>
                                                                                    
                                                                        </div>
                                                         </section>
                                                            </center>
                                                                </div>
                                                          
                                                    </section>
                                          </div>
	


		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html>
<?php }
/* {block 'content'} */
class Block_20772654715e8f7912af2b90_25166505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20772654715e8f7912af2b90_25166505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
