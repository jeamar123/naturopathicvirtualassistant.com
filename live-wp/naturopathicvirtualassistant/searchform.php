<form role="search" id="searchform" method="get" action="<?php echo site_url() ?>">
	<div class="input-group">
		<label class="hidden" for="s"><?php _e('Search:'); ?></label>
		<input type="text" class="form-control search-input" placeholder="Search for..." value="<?php the_search_query(); ?>" name="s" id="s" />
		<span class="input-group-btn">
			<button class="btn btn-default" id="searchsubmit" type="submit"><i class="fa fa-search"></i></button>
		</span>
	</div>
</form>