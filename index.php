<?php
/**
 * 这是基于Bootstrap4.0开发的最简洁程序员博客主题
 * 
 * @package Simple Theme
 * @author Wiley
 * @version 1.0
 * @link http://www.wileysec.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="container">
	<div class="row article">
		<div class="col-md-9">
			<div class="content flag">
				<h1 class="float-left">Articles</h1>
				<a href="<?php $this->options->feedUrl(); ?>" target="_blank" id="rss" title="RSS订阅">Rss Feed <i class="fas fa-rss"></i></a>
				<div class="clearfix"></div>
				<?php while($this->next()): ?>
		        <article>
			        <h4 class="title">
			        	<a href="<?php $this->permalink() ?>">
			        		<?php $this->title() ?>
			        	</a>
			        </h4>
			        <div class="date">
			        	<?php $this->date('Y-m-d'); ?>
			        </div>
		            <div class="post-content-preview">
		                <?php $this->excerpt(200,'...'); ?>
		            </div>
		            <a href="<?php $this->permalink() ?>" class="more">Read More &raquo;</a>
		        </article>
		    	<?php endwhile; ?>
			    <div class="pages text-center">
					<span title="上一页"><?php $this->pageLink('&laquo; Prev','prev');?></span>
					<span><?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> Of <?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></span>
					<span title="下一页"><?php $this->pageLink('Next &raquo;','next');?></span>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="sidebar">
				<?php $this->need("sidebar.php"); ?>
              	<hr>
                <div class="article">
                  <p class="text-center">New Articles</p>
                  <ul>
                      <?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                  </ul>
                </div>
			</div>
		</div>
	</div>

<?php $this->need('footer.php'); ?>