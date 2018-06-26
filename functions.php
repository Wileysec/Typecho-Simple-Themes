<?php 

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text('faviconUrl', NULL, NULL, _t('站点favicon.ico地址'), _t('站点favicon.ico地址，默认在本模板根目录下'));
    $form->addInput($faviconUrl);

    $nav_title = new Typecho_Widget_Helper_Form_Element_Text('nav_title', NULL, NULL, _t('导航栏标题'), _t('导航栏标题'));
    $form->addInput($nav_title);

    $avatarUrl = new Typecho_Widget_Helper_Form_Element_Text('avatarUrl', NULL, NULL, _t('头像地址'), _t('输入头像地址，默认在本模板根目录下的img文件夹下'));
    $form->addInput($avatarUrl);

    $author = new Typecho_Widget_Helper_Form_Element_Text('author', NULL, NULL, _t('博主名称'), _t('输入博主名称'));
    $form->addInput($author);

    $introduce = new Typecho_Widget_Helper_Form_Element_Text('introduce', NULL, NULL, _t('博主简介'), _t('输入博主简介'));
    $form->addInput($introduce);

    $footer = new Typecho_Widget_Helper_Form_Element_Text('footer', NULL, NULL, _t('底部信息'), _t('底部信息，可以是备案信息，支持HTML'));
    $form->addInput($footer);

    $Email = new Typecho_Widget_Helper_Form_Element_Text('Email', NULL, NULL, _t('邮箱'), _t('请输入邮箱'));
    $form->addInput($Email);

    $QQ = new Typecho_Widget_Helper_Form_Element_Text('QQ', NULL, NULL, _t('QQ'), _t('请输入您的QQ'));
    $form->addInput($QQ);
  
    $Github = new Typecho_Widget_Helper_Form_Element_Text('Github', NULL, NULL, _t('Github'), _t('请输入 Github 地址'));
    $form->addInput($Github);

    $facebook = new Typecho_Widget_Helper_Form_Element_Text('facebook', NULL, NULL, _t('Facebook'), _t('请输入 Facebook 地址'));
    $form->addInput($facebook);

    $twitter = new Typecho_Widget_Helper_Form_Element_Text('twitter', NULL, NULL, _t('Twitter'), _t('请输入 Twitter 地址'));
    $form->addInput($twitter);

    $google = new Typecho_Widget_Helper_Form_Element_Text('google', NULL, NULL, _t('Google'), _t('请输入 Google 地址'));
    $form->addInput($google);

}


 ?>