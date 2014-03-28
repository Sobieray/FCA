<footer class="row"><?php dynamic_sidebar("Footer"); ?></footer>
<a class="exit-off-canvas"></a>

  </div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/supersized.min.js"></script>
<script type="text/javascript">
      
  jQuery(function($){

    $.supersized({

      // Functionality
      slide_interval          :   3000,   // Length between transitions
      transition              :   1,      // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
      transition_speed    : 700,    // Speed of transition
           
      // Components             
      slide_links       : 'false',  // Individual links for each slide (Options: false, 'num', 'name', 'blank')
      slides          :   [     // Slideshow Images
      {image : '<?php echo get_template_directory_uri(); ?>/assets/img/FCAslideshow1.jpg'},
      {image : '<?php echo get_template_directory_uri(); ?>/assets/img/FCAslideshow2.jpg'},  
      {image : '<?php echo get_template_directory_uri(); ?>/assets/img/FCAslideshow3.jpg'},
      {image : '<?php echo get_template_directory_uri(); ?>/assets/img/FCAslideshow4.jpg'},
      {image : '<?php echo get_template_directory_uri(); ?>/assets/img/FCAslideshow5.jpg'},
      {image : '<?php echo get_template_directory_uri(); ?>/assets/img/FCAslideshow6.jpg'},
      ]

    });
  });
        
</script>
</body>
</html>