<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container">
	<div class="row article">
		<div class="col-md-9">
			<div class="content">
				<h2><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h2>
		<?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
		        <article>
			        <h4 class="title">
			        	<a target="_blank" href="<?php $this->permalink() ?>">
			        		<?php $this->title() ?>
			        	</a>
			        </h4>
			        <div class="date">
			        	<?php $this->date('F j, Y'); ?>
			        </div>
		            <div class="post-content-preview">
		                <?php $this->excerpt(200,'...'); ?>
		            </div>
		            <a href="<?php $this->permalink() ?>" class="more">Read More &raquo;</a>
		        </article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article>
                <h3><?php _e('很抱歉，没有找到内容'); ?></h3>
            </article>
        <?php endif; ?>
			    <div class="pages text-center">
					<?php $this->pageLink('&laquo; Prev','prev');?>
					<span><?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> Of <?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></span>
					<?php $this->pageLink('Next &raquo;','next');?>
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