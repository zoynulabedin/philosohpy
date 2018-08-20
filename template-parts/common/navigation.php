<nav class="header__nav-wrap">

<h2 class="header__nav-heading h6">Site Navigation</h2>

<?php wp_nav_menu( [
    'theme_location' =>"topmenu",
    'menu_id'        =>"topmenu",
    'menu_class'     =>'header__nav'
] ); ?>

<!-- <ul class="header__nav">
    <li class="current"><a href="index.html" title="">Home</a></li>
    <li class="has-children">
        <a href="#0" title="">Categories</a>
        <ul class="sub-menu">
        <li><a href="category.html">Lifestyle</a></li>
        <li><a href="category.html">Health</a></li>
        <li><a href="category.html">Family</a></li>
        <li><a href="category.html">Management</a></li>
        <li><a href="category.html">Travel</a></li>
        <li><a href="category.html">Work</a></li>
        </ul>
    </li>
    <li class="has-children">
        <a href="#0" title="">Blog</a>
        <ul class="sub-menu">
        <li><a href="single-video.html">Video Post</a></li>
        <li><a href="single-audio.html">Audio Post</a></li>
        <li><a href="single-gallery.html">Gallery Post</a></li>
        <li><a href="single-standard.html">Standard Post</a></li>
        </ul>
    </li>
    <li><a href="style-guide.html" title="">Styles</a></li>
    <li><a href="about.html" title="">About</a></li>
    <li><a href="contact.html" title="">Contact</a></li>
</ul> end header__nav -->

<a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

</nav> <!-- end header__nav-wrap -->
