<?php 
	/* Display footer or not */
	if( !get_post_meta( get_the_ID(), 'page_footer_hide', true ) ) :
		topz_footer_check();
	endif; ?>
</div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || 
{widgetcode:"24a7d70ee2f9e18eae9baa3cc656535618201858d01beec43409fc11e8b60193d5e1ec9aa25fee8368efdf82a9cfd545", values:{},ready:function(){}};
var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>
</body>
</html>