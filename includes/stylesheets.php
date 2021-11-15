<?php
$cssDir = "assets/framework1.0/css"; // folder where all CSS files live

//Link each page to its CSS file
$styles = [
    'home.php' => 'home.css',
    'about.php' => 'about.css',
    'contact.php' => 'contact.css',
];

?>
<!-- CSS common to all template pages updated-->
<link rel="stylesheet" type="text/css" href="<?="$cssDir/main.min.css?v=5"?>">

<!-- Logic for if $styles[$current_page] doesn't exist 
<link rel="stylesheet" type="text/css" href="<?="$cssDir/$styles[$current_page]?v=1"?>">-->