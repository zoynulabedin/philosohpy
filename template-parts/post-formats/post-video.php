<?php 
$philosophy_video_soruce = "";
if(function_exists("the_field")){
$philosophy_video_soruce = get_field("source_link");
}
?>
<article class="masonry__brick entry format-video" data-aos="fade-up">
                        
                    <div class="entry__thumb video-image">
                        <a href="<?php echo esc_url($philosophy_video_soruce); ?>" data-lity>
                        <?php the_post_thumbnail("philosophy-image");?>
                        </a>
                    </div>
                    <?php get_template_part('template-parts/common/post/summary'); ?>

    
                </article> <!-- end article -->



                
