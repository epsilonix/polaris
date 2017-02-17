<?php
/**
 * Template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Polaris
 * @since Polaris 1.0
 */
?>

<form role="search" method="get" id="search-form" action="<?php echo home_url( '/' ); ?>">
    
	<label>
		<span class="screen-reader-text"></span>
        <input type="text" class="search-field" placeholder="Search" value="" name="s" />
	</label>
	
		<div class="search-cap"></div>
		
        <input type="submit" id="search-submit" value="Search" />
    
</form>