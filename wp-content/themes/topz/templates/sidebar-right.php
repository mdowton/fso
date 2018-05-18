<?php if ( is_active_sidebar('right') ):
	$topz_right_span_class = 'col-lg-'.topz_options()->getCpanelValue('sidebar_right_expand');
	$topz_right_span_class .= ' col-md-'.topz_options()->getCpanelValue('sidebar_right_expand_md');
	$topz_right_span_class .= ' col-sm-'.topz_options()->getCpanelValue('sidebar_right_expand_sm');
?>
<aside id="right" class="sidebar <?php echo esc_attr($topz_right_span_class); ?>">
	<?php dynamic_sidebar('right'); ?>
</aside>
<?php endif; ?>