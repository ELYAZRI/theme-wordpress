<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
	    
	    <input type="image" alt="Submit search query"
               src="<?php echo get_template_directory_uri(); ?>/img/altgr6g.jpg">
		
		<input type="submit" class="menu-search-button" value>

		<input type="search" class="menu-search-box" placeholder="Search" 
		 value="<?php echo get_search_query() ?>" name="s" title="Search" />

</form>