<?php
/**
 * The template for displaying Comments.
 *
 *
 * @package Wysdom
 */
?>
<?php if ( ! post_password_required() ) { ?>
<div class="comments">
	<?php if (comments_open())  : ?>
	<?php if ($comments) : ?>
		<h5 class="uppercase"><?php printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s Comments', get_comments_number(), 'wysdom' ), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );?></h5>
		<ul class="comments-list">
			<?php wp_list_comments( 'type=comment&callback=wysdom_comment' ); ?>
		</ul>
	<?php endif; ?>								
	<hr>
	<h5 class="uppercase">Leave A Comment</h5>	
	<?php $comment_args = array( 'title_reply'=>'<h5 class="replayleft">Leave a reply</h5>', 'fields' => apply_filters( 'comment_form_default_fields', array( 'author' => '<input id="author" class="input-standard validate-required" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"  placeholder="Your Name" />',   'email'  => '<input id="email" name="email" class="input-standard validate-email validate-required" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="Email Address" />', 'url'    => '' ) ), 'comment_field' => '<textarea class="input-standard validate-required" id="comment" name="comment" placeholder="Your Message" rows="4" aria-required="true"></textarea>', 'comment_notes_after' => '', 'cancel_reply_link' => '<h5 class="replayright">Cancel reply</h5>', 'label_submit' => 'Leave Reply', 'comment_notes_before' => '', 'class_submit' => 'btn btn-sm'); ?>	
	<?php comment_form($comment_args); ?>
	<?php endif; ?>
 </div>
<?php } ?>