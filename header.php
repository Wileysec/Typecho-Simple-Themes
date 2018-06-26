<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/monokai.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>">
    <!-- <link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>"> -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/rainbow-custom.min.js'); ?>"></script>
	<link rel="icon" href="<?php $this->options->themeUrl().$this->options->faviconUrl(); ?>">
	<link rel="bookmark" href="<?php $this->options->themeUrl().$this->options->faviconUrl(); ?>">
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
	<!--[if lt IE 9]>
	    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
	<![endif]-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->nav_title() ?></a>
		<a href="javascript:;" data-toggle="modal" data-target="#searchModal" id="search-btn"><i class="fas fa-search"></i></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>
	  	<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
            <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
            <?php endwhile; ?>
	  	</div>
	</nav>
    <div class="modal fade" id="searchModal">
	    <div class="modal-dialog">
	        <div class="modal-content">
	        	<!-- 模态框主体 -->
	            <div class="modal-body">
					<div class="form-group">
						<form action="<?php $this->options->siteUrl(); ?>" method="post" >
							<div class="row search-form">
								<div class="col-md-10">
									<input type="text" class="form-control" id="search" placeholder="搜 索... ..." name="s" autofocus>
								</div>
								<div class="col-md-2">
									<input type="submit" value="搜 索" class="btn btn-primary">
								</div>
							</div>
						</form>
					</div>
	            </div>
	        </div>
	    </div>
	</div>