<?php

global $porto_settings;

$post_layout = 'medium-alt';
$featured_images = porto_get_featured_images();

$post_class = array();
$post_class[] = 'post post-' . $post_layout;
if ($porto_settings['post-title-style'] == 'without-icon')
    $post_class[] = 'post-title-simple';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>

    <div class="row">
        <?php if (count($featured_images)) : ?>
        <div class="col-sm-8 col-md-5">
            <?php
            // Post Slideshow
            $slideshow_type = get_post_meta($post->ID, 'slideshow_type', true);

            if (!$slideshow_type)
                $slideshow_type = 'images';

            if ($slideshow_type != 'none') : ?>
                <?php if ($slideshow_type == 'images') :
                    $featured_images = porto_get_featured_images();
                    $image_count = count($featured_images);

                    if ($image_count) :
                    ?>
                    <div class="post-image<?php if ($image_count == 1) echo ' single'; ?>">
                        <div class="post-slideshow porto-carousel owl-carousel" style="margin-bottom: 0px;">
                            <?php
                            foreach ($featured_images as $featured_image) {
                                $attachment_medium = porto_get_attachment($featured_image['attachment_id'], 'full');
                                $attachment = porto_get_attachment($featured_image['attachment_id']);
                                if ($attachment) {
                                    ?>
                                   <div>
                                        <div class="img-thumbnail">
                                            <img class="owl-lazy img-responsive" width="<?php echo $attachment_medium['width'] ?>" height="<?php echo $attachment_medium['height'] ?>" data-src="<?php echo $attachment_medium['src'] ?>" alt="<?php echo $attachment_medium['alt'] ?>" />
											
                                            <?php if ($porto_settings['post-zoom']) : ?>
                                                <span class="zoom" data-src="<?php echo $attachment['src'] ?>" data-title="<?php echo $attachment_medium['caption']; ?>"><i class="fa fa-search"></i></span>
                                            <?php endif; ?>
											
                                        </div>
										
										
										
                                    </div>
                                <?php
                                }
                            }
                            ?>
							
                        </div>
                        
                        <?php if (in_array('date', $porto_settings['post-metas'])) : ?><span class="blog-post-date background-color-primary text-color-light font-weight-bold"> <?php echo get_the_date('j') ?><span class="month-year font-weight-light"><?php echo get_the_date('M-y') ?></span></span><?php endif; ?>
						
                    </div>
					
                    <?php
                    endif;
                endif; ?>

                <?php
                if ($slideshow_type == 'video') {
                    $video_code = get_post_meta($post->ID, 'video_code', true);
                    if ($video_code) {
                        ?>
                        <div class="post-image single">
                            <div class="img-thumbnail fit-video">
                                <?php echo do_shortcode($video_code) ?>
                            </div>
                        </div>
						<div>
						<?php if (in_array('date', $porto_settings['post-metas'])) : ?><span class="blog-post-date background-color-primary text-color-light font-weight-bold"> <?php echo get_the_date('j') ?><span class="month-year font-weight-light"><?php echo get_the_date('M-y') ?></span></span><?php endif; ?>
						</div>
                    <?php
                    }
                }
            endif;
            ?>

        </div>
        <div class="col-sm-12 col-md-7">
            <?php else : ?>
            <div class="col-md-12">
                <?php endif; ?>

                <div class="post-content">

                    <h2 class="entry-title"><?php the_title() ?></h2>
		
                    <?php
                    porto_render_rich_snippets( false );
                    if ($porto_settings['blog-excerpt']) {
                        echo porto_get_excerpt( $porto_settings['blog-excerpt-length'], false );
                    } else {
                        echo '<div class="entry-content">';
                        the_content();
                        wp_link_pages( array(
                            'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'porto' ) . '</span>',
                            'after'       => '</div>',
                            'link_before' => '<span>',
                            'link_after'  => '</span>',
                            'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'porto' ) . ' </span>%',
                            'separator'   => '<span class="screen-reader-text">, </span>',
                        ) );
                        echo '</div>';
                    }
                    ?>

                </div>
				
				<div>
					<a class="btn btn-lg btn-borders btn-primary custom-border-radius font-weight-semibold text-uppercase m-t-lg" href="<?php echo esc_url( apply_filters( 'the_permalink', get_permalink() ) ) ?>"><?php _e('Read more', 'porto') ?></a>
				</div>
           
            </div>
        </div>
</article>