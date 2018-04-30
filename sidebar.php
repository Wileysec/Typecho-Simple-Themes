<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="author">
	<img src="<?php $this->options->themeUrl(); ?>img/<?php $this->options->avatarUrl(); ?>">
	<p class="text-center"><?php $this->options->author(); ?></p>
	<p class="text-center"><?php $this->options->introduce(); ?></p>
	<p class="text-center links">
        <?php if ($this->options->Email): ?>
            <a target="_blank" href="mailto:<?php $this->options->Email(); ?>" title="Email"><i class="icon-envelope-alt icon-2x"></i></a>
        <?php endif; ?>
        <?php if ($this->options->Github): ?>
            <a target="_blank" href="<?php $this->options->Github(); ?>" title="Github"><i class="icon-github icon-2x"></i></a>
        <?php endif; ?>
        <?php if ($this->options->facebook): ?>
            <a target="_blank" href="<?php $this->options->facebook(); ?>" title="Facebook"><i class="icon-facebook-sign icon-2x"></i></a>
        <?php endif; ?>
        <?php if ($this->options->twitter): ?>
            <a target="_blank" href="<?php $this->options->twitter(); ?>" title="Twitter"><i class="icon-twitter-sign icon-2x"></i></a>
        <?php endif; ?>
        <?php if ($this->options->google): ?>
            <a target="_blank" href="<?php $this->options->google(); ?>" title="Google"><i class="icon-google-plus-sign icon-2x"></i></a>
        <?php endif; ?>
	</p>
</div>
<hr>
<div class="article">
    <p>New Article</p>
    <ul>
        <?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
    </ul>
</div>