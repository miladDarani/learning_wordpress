<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Breathe Easy Website">
    <meta name="author" content="Milad Darani">

    <title>Breathe Easy</title>



    <?php wp_head(); ?>
</head>


<body>
  
<header>

<div class="top-bar" id="top-menu" >

<div class="pw-pharmacy-wrap pw-search-summary container">
    <div class="page-search-summary">

        <div class="no-results-msg"><p></p></div>
        <div class=" search-box grid-container">

            <form autocomplete="off" action="/" class="pwire-search-form drug-search-form pw-search-autocomplete grid-x" method="get">
                <div class="pwire-search-name small-12 medium-auto cell">
                    <input type="text" placeholder="Search for medication" name="s"  autocomplete="off" class="top-search ui-autocomplete-input placeholder">
                 </div>
           
            <div class="pwire-search-button small-12 medium-3 large-3 cell">
                <input type="submit" class="button menu-button" value="search">
            </div>

            </form>
        </div>
    </div>
</div>

  <div class="top-bar-right">

      <?php wp_nav_menu(
          array(
            'theme_location' => 'top-menu',
            'menu_class' => 'menu align-right contact-us',
          )
      );
      ?>  

  </div>  

</div>  



<div class="title-bar hide-for-medium hide-for-large">

  <div class="mobile-nav">
    <button class="menu-icon" data-toggle="menu"></button>
  </div>
</div>
<div class="top-bar y-main-nav" id="menu" data-toggler='5argwi-toggler' data-animate="slide-in-left slide-out-left">
  <div class="top-bar-title">
    <div class="hide-menu" data-responsive-toggle="menu">
      <button type="button" class="y-main-nav__close button" data-toggle>
        <i class="fa fa-angle-left" aria-hidden="true"></i>
      </button>
    </div>
   
    <img class="hide-for-small-only" src="http://breatheasy/wp-content/uploads/2020/04/leaf-svgrepo-com.png" alt='logo'>

  </div>

  <div class="top-bar-right">
    


        <?php 
            wp_nav_menu( 
        array(
           'theme_location' => 'below-menu',
           'menu_class' => 'below nested vertical menu medium-horizontal align-right',
          ) 
        ); 

           

    ?> 
    
  </div>
</div>
  

  
</header>