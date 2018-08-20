<div class="comments-wrap">

<div id="comments" class="row">
    <div class="col-full">

        <h3 class="h2">
        <?php 
        $philosophy_cm = get_comments_number(); 

        if($philosophy_cm <=1){
            echo $philosophy_cm ." ".__("Comment","philosohpy");
        }else{
            echo $philosophy_cm ." ".__("Comments","philosohpy");
        }
        
        ?>
        </h3>

        <!-- commentlist -->
        <ol class="commentlist">

           <?php wp_list_comments(  ); ?>
        </ol> <!-- end commentlist -->


        <!-- respond
        ================================================== -->
        <div class="respond">

            <h3 class="h2">Add Comment</h3>

           <?php 
           comment_form( );
           ?>
        </div> <!-- end respond -->

    </div> <!-- end col-full -->

</div> <!-- end row comments -->
</div> <!-- end comments-wrap -->
