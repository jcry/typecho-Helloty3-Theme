<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
    </div>
</div><!-- end #body -->
<?php if (!empty($this->options->decBlock) && in_array('ShowKeywords', $this->options->decBlock)): ?>
<div class="container">
<?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
<ul class="tags-list">
<?php while($tags->next()): ?>
    <li><a href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a></li>
<?php endwhile; ?>
</ul>
</div>
<?php endif;?>

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.zzfly.net">Rytia</a> 设计. Typecho 驱动'); ?>.<script src="https://s4.cnzz.com/z_stat.php?id=1260117451&web_id=1260117451" language="JavaScript"></script>
    <br>
    <?php if ($this->options->footerText()): ?>
    <?php $this->options->footerText() ?>
    <?php endif; ?>
</footer><!-- end #footer -->

<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
<script src="<?php $this->options->themeUrl();?>js/instantclick.min.js" data-no-instant></script>
<script data-no-instant>InstantClick.init();</script>
<?php $this->footer(); ?>
</body>
</html>
