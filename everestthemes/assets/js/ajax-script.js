jQuery(function($){

	/*
	 * Load More
	 */
	$('body').on('click', '#influence_blog_loadmore', function(){

		$.ajax({
			url : influence_blog_obj.ajaxurl, // AJAX handler
			data : {
				'action': 'loadmore', // the parameter for admin-ajax.php
				'query': influence_blog_obj.posts, // loop parameters passed by wp_localize_script()
				'page' : influence_blog_obj.current_page, // current page
				'first_page' : influence_blog_obj.first_page
			},
			type : 'POST',
			beforeSend : function ( xhr ) {
				$('#influence_blog_loadmore').html(influence_blog_obj.loading+'<span class="load-more-icon"><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i></span>'); // some type of preloader
			},
			success : function( data ){

					$('#influence_blog_loadmore').remove();
					$('#influence_blog_pagination').before(data).remove();
					influence_blog_obj.current_page++;
			}
		});
		return false;
	});

});
