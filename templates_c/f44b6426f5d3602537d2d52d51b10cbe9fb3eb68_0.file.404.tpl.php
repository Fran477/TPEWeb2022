<?php
/* Smarty version 4.2.1, created on 2022-10-04 18:31:06
  from 'C:\xampp\htdocs\TPEWeb2022\templates\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633c5fcab70530_83631156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f44b6426f5d3602537d2d52d51b10cbe9fb3eb68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2022\\templates\\404.tpl',
      1 => 1664900051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633c5fcab70530_83631156 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center row">
                <div class=" col-md-6">
                    <img src="https://cdn.pixabay.com/photo/2017/03/09/12/31/error-2129569__340.jpg" alt=""
                        class="img-fluid">
                </div>
                <div class=" col-md-6 mt-5">
                    <p class="fs-3"> <span class="text-danger">Opps!</span> Pagina no encontrada.</p>
                    <p class="lead">
                        La pagina que busca no existe.
                    </p>
                    <a href="home" class="btn btn-primary">Volver al Home</a>
                </div>

            </div>
        </div>
    </body>
    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
}
}
