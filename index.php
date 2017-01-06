<?php 
    if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
    if(!defined('DIR_INC')) define('DIR_INC', __DIR__ . DS . 'inc' . DS );
    if(!defined('ROOT')) define('ROOT', __DIR__ . DS );
    if(!defined('DIR_IMG')) define('DIR_IMG', __DIR__ . DS . 'img' . DS );
    
    if(file_exists(DIR_INC . 'head.html')) include DIR_INC . 'head.html';
?>
  <body class="main">
      <!-- Header Container -->
        <?php if(file_exists(DIR_INC . 'header-container.html')) include DIR_INC . 'header-container.html'; ?>
      <!-- END Header Container -->
      <!-- Menu Container -->
        <?php include 'inc' . DS . 'menu.html';?>
      <!-- END Menu Container -->
      <!-- Offer Container -->
        <?php if(file_exists(DIR_INC . 'offer-main.html')) include DIR_INC . 'offer-main.html'; ?>
       <!-- END Offer-main Container -->
      <!-- Left SideBar Container -->
        <?php if(file_exists(DIR_INC . 'left-sidebar.html')) include DIR_INC . 'left-sidebar.html'; ?>
      <!-- END Left SideBar Container -->
      <!-- Right SideBar Container -->
        <?php if(file_exists(DIR_INC . 'right-sidebar.html')) include DIR_INC . 'right-sidebar.html'; ?>
      <!-- END Right SideBar Container -->
      <!-- Center Container -->
        <?php if(file_exists(DIR_INC . 'center-container.html')) include DIR_INC . 'center-container.html'; ?>
      <!-- END Center Container -->
      <!-- Footer -->
        <?php if(file_exists(DIR_INC . 'footer.html')) include DIR_INC . 'footer.html'; ?>
      <!-- END Footer -->
      <!-- js inc add START -->
        <?php if(file_exists(DIR_INC . 'script.html')) include DIR_INC . 'script.html'; ?>
      <!-- END js inc -->
  </body>
</html>