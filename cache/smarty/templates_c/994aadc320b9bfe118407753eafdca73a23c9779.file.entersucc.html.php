<?php /* Smarty version Smarty-3.1.18, created on 2015-02-12 12:01:29
         compiled from "/home/jishuai/wwwroot/OrgCenter/application/views/teacher/entersucc.html" */ ?>
<?php /*%%SmartyHeaderCode:106265255954dc2599b1d487-70092301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '994aadc320b9bfe118407753eafdca73a23c9779' => 
    array (
      0 => '/home/jishuai/wwwroot/OrgCenter/application/views/teacher/entersucc.html',
      1 => 1423137837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106265255954dc2599b1d487-70092301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'static_url' => 0,
    'static_version' => 0,
    'site_url' => 0,
    'succNum' => 0,
    'url_config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54dc2599c170e1_72275188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dc2599c170e1_72275188')) {function content_54dc2599c170e1_72275188($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="shortcut icon" href=" /favicon.ico" />
<link rel="stylesheet" type="text/css" href="/<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['static_version']->value;?>
/css/uploadStudentInfo/style.css" />
<!-- 定义全局变量开始 -->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['site_url']->value)."/include/var.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- 定义全局变量结束 -->
</head>
<body>
<!-- 头部开始 -->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['site_url']->value)."/include/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- 头部结束 -->
<!-- 主要内容开始 -->
<div class="wrap layout">
    <!-- 右侧开始 -->
    <div class="mainContent comBg fr" id="mainContent">
        <div class="uploadStudentInfo uploadStudentInfoSuccess" id="moduleId" pagename="uploadStudentInfo">
            <!-- 录入成功开始 -->
            <div class="hd ">
                <h2>录入成功</h2>
            </div>
			<p class="io">提交有效老师信息<?php echo $_smarty_tpl->tpl_vars['succNum']->value;?>
条</p>
            <div class="inputSuccess">
                <div class="btn cf">
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['url_config']->value['teacherUpload'];?>
" class="comBlueBtn">继续上传信息表</a>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['url_config']->value['teacherList'];?>
" class="comWhiteBtn">查看所有老师</a>
                </div>
            </div>
            <!-- 录入成功结束 -->
        </div>
    </div>
    <!-- 右侧结束 -->
    <!-- 左侧导航开始 -->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['site_url']->value)."/include/left_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- 左侧导航结束 -->
</div>
<!-- 主要内容结束 -->
<!-- 底部开始 -->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['site_url']->value)."/include/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- 底部结束 -->
<!-- js引入开始 -->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['site_url']->value)."/include/js.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--js引入结束-->
</body>
</html>
<?php }} ?>
