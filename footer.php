<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

		<div class="footer">
			<p class="text-center">&copy; <?php echo date('Y'); ?> <?php $this->options->author(); ?></p>
			<p class="text-center"><?php $this->options->footer(); ?></p>
		</div>
	</div>
</body>
</html>