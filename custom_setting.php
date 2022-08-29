<h1>This is custom setting pages here</h1>

 <?php
 
  function custom_seting_fields(){
    add_settings_field('header_text','Header Text','header_calback','general' );
    register_setting( 'general','header_text'  );
  }
  add_action('admin_init','custom_seting_fields');





 function header_calback(){
    echo '<input type="text" class="regular_text" name="header_text" value="'.get_option('header_text').'">';
 }


 
 
 ?>

<form action="options.php" method ="post">
    <?php
      
    

        submit_button(  );
    ?>

</form>

<?php



?>