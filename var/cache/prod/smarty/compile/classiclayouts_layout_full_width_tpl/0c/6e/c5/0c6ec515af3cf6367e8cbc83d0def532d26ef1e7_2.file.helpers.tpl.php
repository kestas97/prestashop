<?php
/* Smarty version 3.1.43, created on 2022-08-25 21:01:12
  from 'C:\xampp\htdocs\presta_shop\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6307b8e89fcbb1_10126821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c6ec515af3cf6367e8cbc83d0def532d26ef1e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta_shop\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1658331066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6307b8e89fcbb1_10126821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\presta_shop\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\0c\\6e\\c5\\0c6ec515af3cf6367e8cbc83d0def532d26ef1e7_2.file.helpers.tpl.php',
    'uid' => '0c6ec515af3cf6367e8cbc83d0def532d26ef1e7',
    'call_name' => 'smarty_template_function_renderLogo_991111206307b8e899d914_77774133',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_991111206307b8e899d914_77774133 */
if (!function_exists('smarty_template_function_renderLogo_991111206307b8e899d914_77774133')) {
function smarty_template_function_renderLogo_991111206307b8e899d914_77774133(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_991111206307b8e899d914_77774133 */
}
