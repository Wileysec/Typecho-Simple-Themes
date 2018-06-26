<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="author">
	<img src="<?php $this->options->themeUrl(); ?>img/<?php $this->options->avatarUrl(); ?>">
	<p class="text-center"><?php $this->options->author(); ?></p>
	<p class="text-center"><?php $this->options->introduce(); ?></p>
	<p class="text-center links">
        <?php if ($this->options->Email): ?>
            <a target="_blank" href="mailto:<?php $this->options->Email(); ?>" title="Email"><i class="fas fa-envelope fa-2x"></i></a>
        <?php endif; ?>
        <?php if ($this->options->QQ): ?>
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php $this->options->QQ(); ?>&site=qq&menu=yes" title="QQ"><i class="fab fa-qq fa-2x"></i></a>
        <?php endif; ?>
        <?php if ($this->options->Github): ?>
            <a target="_blank" href="<?php $this->options->Github(); ?>" title="Github"><i class="fab fa-github fa-2x"></i></a>
        <?php endif; ?>
        <?php if ($this->options->facebook): ?>
            <a target="_blank" href="<?php $this->options->facebook(); ?>" title="Facebook"><i class="fab fa-facebook-square fa-2x"></i></a>
        <?php endif; ?>
        <?php if ($this->options->twitter): ?>
            <a target="_blank" href="<?php $this->options->twitter(); ?>" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a>
        <?php endif; ?>
        <?php if ($this->options->google): ?>
            <a target="_blank" href="<?php $this->options->google(); ?>" title="Google"><i class="fab fa-google fa-2x"></i></a>
        <?php endif; ?>
	</p>
</div>