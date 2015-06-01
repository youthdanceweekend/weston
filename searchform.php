<form class="navbar-form navbar-right" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="sr-only" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
	<div class="input-group">
		<input type="text" class="form-control" placeholder="Search" name="s" id="s" value="<?php echo get_search_query(); ?>">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default">
				<i class="fa fa-search"></i>
				<span class="sr-only"><?php echo esc_attr_x( 'Search', 'submit button' ); ?></span>
			</button>
		</span>
	</div>
</form>
