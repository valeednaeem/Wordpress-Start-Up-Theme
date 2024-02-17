<?php

    // DB Query Functions - Start

    // Connection Aurguments
    $dbHost         = "";
    $dbName         = "";
    $dbUser         = "";
    $dbPass         = "";

    // Functional Aurguments
    $query          = "";
    $qType          = "";
    $tblName        = "";
    $args           = array();
    $cond           = array();

    // DB Functions

    // Initialization of Database
    function init($dbHost, $dbName, $dbUser, $dbPass) {
        $conn = new mysqli($dbHost, $dbUser, $dbPass);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else
        {
            $conn->select_db($dbName);
        }
    }

    function selectAll($tblName) {
        $query = "SELECT * FROM ".$tblName.";";
        return $conn->query($query);
    }

    function selectCondAnd($tblName, $cond) {
        $query = "SELECT FROM ".$tblName." WHERE ";
        foreach($cond as $key => $val) {
            $query .= $key ." = '".$val."' AND ";
        }
        $query = rtrim($query, " AND ");
        return $conn->query($query);
    }

    function selectCondOr($tblName, $cond) {
        $query = "SELECT FROM ".$tblName." WHERE ";
        foreach($cond as $key => $val) {
            $query .= $key ." = '".$val."' OR ";
        }
        $query = rtrim($query, " OR ");
        return $conn->query($query);
    }

    function insert($tblName, $args) {
        $query = "INSERT INTO ".$tblName." (";
        foreach($args as $key => $val) {
            $query .= $key."', ";
        }
        $query = rtrim($query, ", ");
        $query .= ") VALUES(";
        foreach($cond as $key => $val) {
            $query .= $val."', ";
        }
        $query = rtrim($query, ", ");
        $query .= ");";
        return $conn->query($query);
    }

    function delAll($tblName) {
        $query = "DELETE FROM ".$tblName.";";
        return $conn->query($query);
    }

    function delCondAnd($tblName, $cond) {
        $query = "DELETE FROM ".$tblName." WHERE ";
        foreach($cond as $key => $val) {
            $query .= $key."='".$val."' AND ";
        }
        $query .= rtrim($query, " AND ");
        $query .= ";";
        return $conn->query($query);
    }

    function delCondOr($tblName, $cond) {
        $query = "DELETE FROM ".$tblName." WHERE ";
        foreach($cond as $key => $val) {
            $query .= $key."='".$val."' OR ";
        }
        $query .= rtrim($query, " OR ");
        $query .= ";";
        return $conn->query($query);
    }

    function updateAnd($tblName, $cond, $args) {
        $query = "UPDATE ".$tblName." SET ";
        foreach($args as $key => $val) {
            $query .= $key." = '".$val."', ";
        }
        $query .= rtrim($query, ", ");
        $query .= " WHERE ";
        foreach($cond as $key => $val) {
            $query .= $key." = ".$val." AND ";
        }
        $query .= rtrim($query, " AND ");
        $query .= ";";
        return $conn->query($query);
    }

    function updateOr($tblName, $cond, $args) {
        $query = "UPDATE ".$tblName." SET ";
        foreach($args as $key => $val) {
            $query .= $key." = '".$val."', ";
        }
        $query .= rtrim($query, ", ");
        $query .= " WHERE ";
        foreach($cond as $key => $val) {
            $query .= $key." = ".$val." OR ";
        }
        $query .= rtrim($query, " OR ");
        $query .= ";";
        return $conn->query($query);
    }

    // DB Query Functions - End

    register_nav_menus( 
        array(
            'main-menu'                 => 'Main Menu',
            'footer-menu'               => 'Footer Menu',
            'sidebar-menu'              => 'Sidebar Menu',
            'product-categories-menu'   => 'Product Categories'
        )
    );


    function add_custom_menu_classes($classes, $item, $args) {
        // Check if it's the menu you want to target
        if ($args->theme_location == 'main-menu') {
            // Add your custom class to the array
            $classes[] = 'main-menu-item';
        } elseif ($args->theme_location == 'footer-menu') {
            $classes[] = 'footer-menu-item';
        } elseif ($args->theme_location == 'sidebar-menu') {
            $classes[] = 'sidebar-menu-item';
        } elseif ($args->theme_location == 'product-categories-menu') {
            $classes[] = 'product-categories-menu-item';
        }

        return $classes;
    }

    add_filter('nav_menu_css_class', 'add_custom_menu_classes', 10, 3);

    //add_theme_support('admin-bar');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('custom-logo');
    add_theme_support('featured-content');
    //add_theme_support('html5');
    add_theme_support('menus');
    //add_theme_support('post-formats');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');

    add_post_type_support('page','excerpt');

    if(function_exists('register_sidebar'))
    {

        // Register Sidebar on the Left Sidebar
        register_sidebar(
            array(
                'name'            => 'Left Sidebar Widget Area',
                'id'              => 'leftsidebar',
                'before_widget'   => '<div id="%1$s" class="widget %2$s">',
                'after_widget'    => '</div>',
                'before_title'    => '<h3>',
                'after_title'     => '</h3>'
            )
        );

        // Register Sidebar on the Right Sidebar
        register_sidebar(
            array(
                'name'            => 'Right Sidebar Widget Area',
                'id'              => 'rightsidebar',
                'before_widget'   => '<div id="%1$s" class="widget %2$s">',
                'after_widget'    => '</div>',
                'before_title'    => '<h3>',
                'after_title'     => '</h3>'

            )
        );

        // Register Sidebar 1 on the Footer
        register_sidebar(
            array(
                'name'            => 'Footer 1 Sidebar Widget Area',
                'id'              => 'footer1sidebar',
                'before_widget'   => '<div id="%1$s" class="widget %2$s">',
                'after_widget'    => '</div>',
                'before_title'    => '<h3>',
                'after_title'     => '</h3>'

            )
        );

        // Register Sidebar 2 on the Footer
        register_sidebar(
            array(
                'name'            => 'Footer 2 Sidebar Widget Area',
                'id'              => 'footer2sidebar',
                'before_widget'   => '<div id="%1$s" class="widget %2$s">',
                'after_widget'    => '</div>',
                'before_title'    => '<h3>',
                'after_title'     => '</h3>'

            )
        );

        // Register Sidebar 3 on the Footer
        register_sidebar(
            array(
                'name'            => 'Footer 3 Sidebar Widget Area',
                'id'              => 'footer3sidebar',
                'before_widget'   => '<div id="%1$s" class="widget %2$s">',
                'after_widget'    => '</div>',
                'before_title'    => '<h3>',
                'after_title'     => '</h3>'

            )
        );

        // Register Sidebar 4 on the Footer
        register_sidebar(
            array(
                'name'            => 'Footer 4 Sidebar Widget Area',
                'id'              => 'footer4sidebar',
                'before_widget'   => '<div id="%1$s" class="widget %2$s">',
                'after_widget'    => '</div>',
                'before_title'    => '<h3>',
                'after_title'     => '</h3>'

            )
        );

        // Register Sidebar 5 on the Footer
        register_sidebar(
            array(
                'name'            => 'Footer 5 Sidebar Widget Area',
                'id'              => 'footer5sidebar',
                'before_widget'   => '<div id="%1$s" class="widget %2$s">',
                'after_widget'    => '</div>',
                'before_title'    => '<h3>',
                'after_title'     => '</h3>'

            )
        );

    }
?>