<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="error">
	<h1>404 Not Found！</h1>
	<h3>出错啦。</h3>
	<h3><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></h3>
	<form method="post">
		<div class="row">
			<div class="col-md-8">
				<input type="text" name="s" class="form-control" autofocus placeholder="搜 索... ..."/>
			</div>
			<div class="col-md-4">
				<input type="submit" class="btn btn-primary" value="搜 索">
			</div>
		</div>
	</form>
</div>

<?php $this->need('footer.php'); ?>