<?php
/* If a post password is required or no comments are given and comments/pings are closed, return return early without loading the comments. */
if ( post_password_required() || ( !have_comments() && !comments_open() && !pings_open() ) ){
    return;
}
?>
<div id="comments-wrap">   
<?php if ( have_comments() ) : // Check if there are any comments. ?>
    <div id="jc">
        <div id="comments">
            <h3>
                <?php sprintf(' &ldquo;%1$s&rdquo;', get_the_title());?>
                <span><?php
                    /* translators: %s: search term */
                    sprintf( _n('%s comment on','%s comments on',get_comments_number(),'musicstudio'),
                    number_format_i18n( get_comments_number() ));?></span>
            </h3>
            <div class="comments-list">
                <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 32,
                ) );?>
            </div>
            <div id="comments-list-footer"><a class="refresh" href="#" title="Refresh comments list" onclick="jcomments.showPage(30,'com_cobalt',0);return false;">Refresh comments list</a></div>
            </div>
            <a id="addcomments" href="#addcomments"></a>
                <?php comment_form( array(
                    'title_reply_before' => '<h3 id="reply-title" class="title-bottom">',
                    'title_reply_after'  => '</h3>',
                    'class_submit'      => 'btn'
                ) ); // Loads the comment form. ?>
        </div>
    <?php endif; // End check for comments. ?>
</div><!-- #comments-->
<?php
// If comments are closed and there are comments, let's leave a little note, shall we?
if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
<?php endif; ?>
