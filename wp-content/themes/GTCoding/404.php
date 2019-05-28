<?php get_header(); ?>

<div class="container-404" align="center">
	<h2 class="page-heading"> 404 Error. Page not Exist</h2><br>
	<img src="http://source.unsplash.com/640x480/?cats">

	<h3>Sorry i think you lost</h3>

	<ul style="list-style: none;">
		<li>
			<a href="<?php echo site_url(''); ?>">Home</a>
        <li>
            <a href="<?php echo site_url('/blog'); ?>">Blog</a>
        </li>
        <li>
            <a href="<?php echo site_url('/projects'); ?>">Projects</a>
        </li>
        <li>
            <a href="<?php echo site_url('/about'); ?>">About</a>
        </li>	
	</ul>
</div>

<?php get_footer(); ?>