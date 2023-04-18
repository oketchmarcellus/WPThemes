<?php
/* If a post password is required or no comments are given and comments/pings are closed, return return early without loading the comments. */
if ( post_password_required() || ( !have_comments() && !comments_open() && !pings_open() ) ){
	return;
}
?>

<section>

	<?php if ( have_comments() ) : // Check if there are any comments. ?>
		<div class="heading-helper">

				<h5 class="text-uppercase heading">
				<?php
				/* translators: %s: search term */
				sprintf( _n('%s comment on','%s comments on',get_comments_number(),'musicstudio'),
				    number_format_i18n( get_comments_number() ));

				sprintf(' &ldquo;%1$s&rdquo;', get_the_title());
				?>
				</h5>
		</div>
		<div>
			<ol class="comment-list">
				<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 32,
				) );
				?>
			</ol><!-- .comment-list -->
			<?php the_comments_navigation(); ?>
		</div><!-- #comments-->
	<?php endif; // End check for comments. ?>
	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	<div class="container">
		<p class="no-comments"><?php esc_html_e('Comments are closed.', 'musicstudio'); ?></p>
	</div>
	<?php endif; ?>
	<div class="container">
	<?php comment_form( array(
			'title_reply_before' => '<h5 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h5>',
			'class_submit'      => 'btn btn-lg submit'
		) ); // Loads the comment form. ?>
	</div>

</section><!-- #comments-template -->



