<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rmx
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
	<style>
		.cir-link{display:none;}		
		.rmx-content{min-height: 0 !important;}
	</style>
	<?php
	$add_image_form = '';
	if (function_exists("get_cir_upload_field")) { $add_image_form = get_cir_upload_field(); }

	add_filter('comment_form_fields', 'kama_reorder_comment_fields' );
	function kama_reorder_comment_fields( $fields ){
		// die(print_r( $fields )); // посмотрим какие поля есть

		$new_fields = array(); // сюда соберем поля в новом порядке

		$myorder = array('author','email', 'comment'); // нужный порядок

		foreach( $myorder as $key ){
			$new_fields[ $key ] = $fields[ $key ];
			unset( $fields[ $key ] );
		}

		// если остались еще какие-то поля добавим их в конец
		if( $fields )
			foreach( $fields as $key => $val )
				$new_fields[ $key ] = $val;

		return $new_fields;
	}

	$field_args = array(
		'title_reply'          => 'Оставить отзыв',
		'label_submit'         => 'Отправить отзыв',
		'comment_notes_after'  => $add_image_form,
	);
	comment_form($field_args);
	?>
</div><!-- #comments -->
