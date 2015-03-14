<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <footer id="footer" class="wrapper center">
        &copy; 2015 <b><?php $this->options->title() ?></b>. All rights reserved. Proudly powered by <a href="http://typecho.org" target="_blank">Typecho</a>.
    </footer>
    <div class="btm-search">
        <form class="search" method="post" action="/" role="search">
            <input type="text" name="s" value="搜索" onfocus="if (value =='搜索'){value =''}" onblur="if (value ==''){value='搜索'}" autocomplete="off" />
        </form>
    </div>
</div>
