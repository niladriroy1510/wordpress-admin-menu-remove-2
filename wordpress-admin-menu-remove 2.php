<?php

function remove_menus(){  
  remove_menu_page( 'edit.php?post_type=dt_portfolios' ); 
  remove_menu_page( 'fw-extensions' ); 
  remove_submenu_page( 'themes.php', 'cs-framework' );
  remove_submenu_page( 'themes.php', 'theme-editor.php' );
}
add_action( 'admin_init', 'remove_menus' );
