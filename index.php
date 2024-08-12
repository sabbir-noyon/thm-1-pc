<?php
/*
This is Header Area
*/
?>

<!DOCTYPE html>
<html lang=<?php language_attributes() ?> class='no-js'>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

    <div id="header_area" class="<?php echo get_theme_mod('sab_pc_menu_position') ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a>
                        <img src="<?php echo get_theme_mod('sab_pc_logo') ?>" alt="logo">
                    </a>

                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'main_menu',
                            'menu_id' => 'nav'
                        )
                    ) ?>

                </div>

                <!-- <ul id="nav">
                   
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Media</a></li>
                    <li>
                        <a href="#">Services</a>
                        <ul>
                            <li><a href="#">Dropdown Menu</a></li>
                            <li><a href="#">Dropdown Menu</a></li>
                            <li><a href="#"> Nested Dropdown Menu</a></li>
                            <ul>
                                <li><a href="#">Nested Dropdown Menu</a></li>
                                <li><a href="#">Nested Dropdown Menu</a></li>
                                <li><a href="#">Nested Dropdown Menu</a></li>
                            </ul>
                            <li><a href="#">Dropdown Menu</a></li>
                            <li><a href="#">Dropdown Menu</a></li>
                            <li><a href="#">Dropdown Menu</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Download</a></li>
                </ul> -->

            </div>
        </div>
    </div>




    <?php wp_footer(); ?>
</body>

</html>