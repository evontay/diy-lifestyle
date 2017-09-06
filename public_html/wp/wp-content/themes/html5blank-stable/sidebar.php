<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<?php get_template_part('searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
<div id="side_wrapper">

<aside id="side_info">
	<div id="challenge">
		<img src="/wp/wp-content/uploads/2014/10/dailydiy.png"/>
	</div>	
	
	<a href="challenge.html"><img id="photo" src="/wp/wp-content/uploads/2014/10/dailyDIY_1.png" alt="" /></a>
	<div id="manifesto">
	<img src="/wp/wp-content/uploads/2014/10/navmanifesto.png"/>
	</div>

	<a href="manifesto.html"><img id="photo" src="/wp/wp-content/uploads/2014/10/manifesto_small.jpg" alt="" /></a>
	<p class="side_link"> <a href="manifesto.html">ENLARGE!</a></p>
		
	<div id="zine">
	<img src="/wp/wp-content/uploads/2014/10/navzine.png"/>
	</div>
	<a href="zine.html"><img id="photo" src="/wp/wp-content/uploads/2014/10/zinecovers.gif"/></a>
	<p class="side_para"><a href="zine.html">ADVENTURES IN DIY #1 - OUT NOW!</a></p>
		
</aside>

</div>