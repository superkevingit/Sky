<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <div class="sidebar">
        <div class="widget center">
            <i class="logo"></i>
            <span class="name">Sky</span>
        </div>
        <div class="social">
            <div class="center">
                <a href="https://github.com/superkevingit" target="_blank" title="GitHub">&#60081;</a>
            </div>
        </div>
        <div class="widget">
            <h3 class="widget-title"><?php _e('最新文章'); ?></h3>
            <ul class="widget-list article-list">
                <?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
            </ul>
        </div>
        <div class="widget">
            <h3 class="widget-title"><?php _e('最近回复'); ?></h3>
            <ul class="widget-list">
            <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments); ?>
            <?php while($comments->next()): ?>
                <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?>: <?php $comments->excerpt(30, '...'); ?></a></li>
            <?php endwhile; ?>
            </ul>
        </div>
    </div>

<script src="<?php $this->options->themeUrl('common.js'); ?>"></script>
<?php $this->footer(); ?>
</body>
</html>
