<?php
/**
 * Template part for displaying author detail
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$display_author_section = true;

if( $display_author_section == true ) {

?>
<div class="author-box">
    <div class="top-wrap clearfix">
        <div class="author-thumb">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 300 ); ?>
        </div>
        <div class="author-name">
            <h3 class="s-title"><?php echo esc_html( get_the_author() ); ?></h3>
            <?php
                                       
            $author_description = get_the_author_meta( 'description' );
                                       
            if( !empty( $author_description ) ) :
            
                ?>
                <p class="author-details">
                    <?php echo esc_html( $author_description ); ?>
                </p>
                <?php
                                       
            endif;
                                       
            ?>
        </div>
    </div>
</div><!--author-box-->
<?php
}
