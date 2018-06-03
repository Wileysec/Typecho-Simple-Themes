<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container">
	<div class="row article">
		<div class="col-md-9">
			<div class="content post">
				<div class="post-header">
					<h2><?php $this->title() ?></h2>
				</div>
				<div class="post-body">
					<?php $this->content(); ?>
                    			<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"8","bdPos":"right","bdTop":"100"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='//'+document.domain+'/static/api/js/share.js?v=89860593.js?'];</script>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="sidebar">
				<?php $this->need("sidebar.php"); ?>
			</div>
		</div>
	</div>

<?php $this->need('footer.php'); ?>
