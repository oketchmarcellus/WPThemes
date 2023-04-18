jQuery(document).ready(function($){

	jQuery('.releases_loadmore').live('click', function(e){
	e.preventDefault();
	var link = jQuery(this).attr(href);
	jQuery('.releases_loadmore').html('<span class="loader">Loading More Posts..</span>');
	$.get(link, function(data){
	var post = $("col-lg-4 col-md-4 .img-release ",data);
		$('.col-lg-4 col-md-4').append(post);
		});
	jQuery('.releases_loadmore').load(link+' .releases_loadmore');
	});
})