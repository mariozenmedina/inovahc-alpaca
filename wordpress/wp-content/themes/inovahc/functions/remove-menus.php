<?php

//REMOVE MENUS
function remove_menus(){
  
  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'plugins.php' );                //Plugins
  remove_menu_page( 'tools.php' );                  //Tools
  remove_menu_page( 'options-general.php' );        //Settings
  
}
if(!current_user_can( 'administrator' )){
add_action( 'admin_menu', 'remove_menus' );
}