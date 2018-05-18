<?php if ( is_active_sidebar('left') ):
	$topz_left_span_class = 'col-lg-'.topz_options()->getCpanelValue('sidebar_left_expand');
	$topz_left_span_class .= ' col-md-'.topz_options()->getCpanelValue('sidebar_left_expand_md');
	$topz_left_span_class .= ' col-sm-'.topz_options()->getCpanelValue('sidebar_left_expand_sm');
?>
<aside id="left" class="sidebar <?php echo esc_attr($topz_left_span_class); ?>">
	<?php dynamic_sidebar('left'); ?>
</aside>
<?php endif; ?>