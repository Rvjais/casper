<?php
// header.php - Common header with topbar, logo, and navigation
// $basePath must be set before including this file
// $pageSlug should be set to identify the current page for active menu state
if (!isset($basePath)) $basePath = '';
if (!isset($pageSlug)) $pageSlug = '';
?>
<div id="wrap_all">
<header aria-label="Header" class="all_colors header_color dark_bg_color av_header_top av_logo_left av_main_nav_header av_menu_right av_slim av_header_sticky av_header_shrinking_disabled av_header_stretch_disabled av_mobile_menu_phone av_header_transparency av_header_glassy av_header_searchicon_disabled av_header_unstick_top_disabled av_minimal_header av_bottom_nav_disabled av_header_border_disabled" data-av_shrink_factor="50" id="header" itemscope="itemscope" itemtype="https://schema.org/WPHeader" role="banner">
<div class="container_wrap container_wrap_meta av_secondary_right av_extra_header_active av_phone_active_left" id="header_meta">
<div class="container">
<div class="phone-info"><div><a href="tel:1-305-434-2647" id="phone-click" style="font-size:16px; color:white !important;">(305) 434-2647</a></div></div> </div>
</div>
<div class="container_wrap container_wrap_logo" id="header_main">
<div class="container av-logo-container" style=""><div class="inner-container"><span class="logo avia-standard-logo"><a aria-label="casa privee" class="" href="<?php echo $basePath; ?>index.php" title="casa privee"><img alt="Casa PrivÃ©e - Brickell, Miami" height="100" sizes="(max-width: 474px) 100vw, 474px" src="<?php echo $basePath; ?>wp-content/uploads/2025/03/688f6ae35447e04a20a55c7127bd479d_1200_80.webp" title="casa privee" width="300"/></a></span><nav class="main_menu" data-selectname="Select a page" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement" role="navigation"><div class="avia-menu av-main-nav-wrap"><ul class="menu av-main-nav" id="avia-menu" role="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-top-level menu-item-top-level-1 dropdown_ul_available" id="menu-item-1247" role="menuitem"><a href="#" itemprop="url" style="" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">About</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span><span class="dropdown_available"></span></a>
<ul class="sub-menu" style="display: block; opacity: 0; visibility: hidden;">
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='about-us') echo ' current_page_item current-menu-item'; ?>" id="menu-item-1468" role="menuitem"><a href="<?php echo $basePath; ?>pages/about-us.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">About Us</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='overview') echo ' current_page_item current-menu-item'; ?>" id="menu-item-1808" role="menuitem"><a href="<?php echo $basePath; ?>pages/overview.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">Overview</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='about-bankole-johnson') echo ' current_page_item current-menu-item'; ?>" id="menu-item-1467" role="menuitem"><a href="<?php echo $basePath; ?>pages/about-bankole-johnson.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">Meet Dr. Bankole Johnson</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='depression-treatment') echo ' current_page_item current-menu-item'; ?>" id="menu-item-2019" role="menuitem"><a href="<?php echo $basePath; ?>pages/depression-treatment.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">Depression</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='our-approach') echo ' current_page_item current-menu-item'; ?>" id="menu-item-290" role="menuitem"><a href="<?php echo $basePath; ?>pages/our-approach.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">Our Approach</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='insights') echo ' current_page_item current-menu-item'; ?>" id="menu-item-1249" role="menuitem"><a href="<?php echo $basePath; ?>pages/insights.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">Insights</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='media') echo ' current_page_item current-menu-item'; ?>" id="menu-item-1248" role="menuitem"><a href="<?php echo $basePath; ?>pages/media.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">Media</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='podcasts') echo ' current_page_item current-menu-item'; ?>" id="menu-item-1275" role="menuitem"><a href="<?php echo $basePath; ?>pages/podcasts.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">Podcasts</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='publications') echo ' current_page_item current-menu-item'; ?>" id="menu-item-1933" role="menuitem"><a href="<?php echo $basePath; ?>pages/publications.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">Publications</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-2<?php if($pageSlug=='unparalleled-testing') echo ' current_page_item current-menu-item'; ?>" id="menu-item-1539" role="menuitem"><a href="<?php echo $basePath; ?>pages/unparalleled-testing.php" itemprop="url" style="" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">Medical Testing</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-top-level menu-item-top-level-3 dropdown_ul_available<?php if($pageSlug=='treatment-programs') echo ' current_page_item current-menu-item'; ?>" id="menu-item-1164" role="menuitem"><a href="<?php echo $basePath; ?>pages/treatment-programs.php" itemprop="url" style="" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">Treatment Programs</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span><span class="dropdown_available"></span></a>
<ul class="sub-menu" style="display: block; opacity: 0; visibility: hidden;">
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='drug-addiction-rehabilitation') echo ' current_page_item current-menu-item'; ?>" id="menu-item-2294" role="menuitem"><a href="<?php echo $basePath; ?>pages/drug-addiction-rehabilitation.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">Alcohol &amp; Drug Rehabilitation</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='neurostar-tms-therapy') echo ' current_page_item current-menu-item'; ?>" id="menu-item-377" role="menuitem"><a href="<?php echo $basePath; ?>pages/neurostar-tms-therapy.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">NeuroStar TMS Therapy</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='hyperbaric-oxygen-therapy-hbot') echo ' current_page_item current-menu-item'; ?>" id="menu-item-887" role="menuitem"><a href="<?php echo $basePath; ?>pages/hyperbaric-oxygen-therapy-hbot.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">Hyperbaric Oxygen Therapy</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='da-vinci-theralight-360') echo ' current_page_item current-menu-item'; ?>" id="menu-item-955" role="menuitem"><a href="<?php echo $basePath; ?>pages/da-vinci-theralight-360.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">TheraLight 360</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='super-human-protocol') echo ' current_page_item current-menu-item'; ?>" id="menu-item-908" role="menuitem"><a href="<?php echo $basePath; ?>pages/super-human-protocol.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">Super Human Protocol</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page<?php if($pageSlug=='emsella') echo ' current_page_item current-menu-item'; ?>" id="menu-item-1022" role="menuitem"><a href="<?php echo $basePath; ?>pages/emsella.php" itemprop="url" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">EmSella</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-top-level menu-item-top-level-4<?php if($pageSlug=='contact-us') echo ' current_page_item current-menu-item'; ?>" id="menu-item-783" role="menuitem"><a href="<?php echo $basePath; ?>pages/contact-us.php" itemprop="url" style="" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">Contact Us</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom av-menu-button av-menu-button-bordered menu-item-top-level menu-item-top-level-5" id="menu-item-406" role="menuitem"><a href="https://casaprivee.as.me/schedule/b07ae107" itemprop="url" style="" tabindex="0"><span class="avia-bullet"></span><span class="avia-menu-text">BOOK AN APPOINTMENT</span><span class="avia-menu-fx"><span class="avia-arrow-wrap"><span class="avia-arrow"></span></span></span></a></li>
<li class="av-burger-menu-main menu-item-avia-special" role="menuitem">
<a aria-hidden="false" aria-label="Menu" href="#" style="">
<span class="av-hamburger av-hamburger--spin av-js-hamburger">
<span class="av-hamburger-box">
<span class="av-hamburger-inner"></span>
<strong>Menu</strong>
</span>
</span>
<span class="avia_hidden_link_text">Menu</span>
</a>
</li></ul></div></nav></div> </div>
<!-- end container_wrap-->
</div>
<style id="casper-navbar-and-cards-fix">
/* ===== NAVBAR & LOGO OVERLAP FIX ===== */
#top #header_main {
    height: 90px !important;
    line-height: 90px !important;
}
#top #header_main .container.av-logo-container,
#top #header_main .inner-container {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    width: 100% !important;
    max-width: 1310px !important;
    height: 90px !important;
    box-sizing: border-box !important;
    margin: 0 auto !important;
    padding: 0 30px !important;
}
#top .logo {
    position: relative !important;
    display: flex !important;
    align-items: center !important;
    flex-shrink: 0 !important;
    max-width: 220px !important;
    height: 100% !important;
    left: auto !important;
    right: auto !important;
    top: auto !important;
    bottom: auto !important;
    float: none !important;
    margin: 0 !important;
    z-index: 5 !important;
}
#top .logo a {
    display: flex !important;
    align-items: center !important;
    height: 100% !important;
}
#top .logo img {
    max-height: 52px !important;
    max-width: 220px !important;
    width: auto !important;
    height: auto !important;
    object-fit: contain !important;
    display: block !important;
    margin: 0 !important;
}
#top .main_menu {
    position: relative !important;
    display: flex !important;
    align-items: center !important;
    margin-left: auto !important;
    right: auto !important;
    left: auto !important;
    float: none !important;
    z-index: 10 !important;
    height: 100% !important;
}
#top .avia-menu.av-main-nav-wrap ul.av-main-nav {
    display: flex !important;
    align-items: center !important;
    height: 100% !important;
    margin: 0 !important;
    padding: 0 !important;
    gap: 4px !important;
    list-style: none !important;
}
#top .avia-menu.av-main-nav-wrap ul.av-main-nav > li > a {
    padding: 0 12px !important;
    font-size: 13.5px !important;
    font-weight: 500 !important;
    letter-spacing: 0.5px !important;
    line-height: 90px !important;
    height: 90px !important;
    display: flex !important;
    align-items: center !important;
    white-space: nowrap !important;
    color: #ffffff !important;
}
#top .avia-menu.av-main-nav-wrap ul.av-main-nav > li.av-menu-button > a {
    height: 38px !important;
    line-height: 38px !important;
    padding: 0 16px !important;
    margin: auto 0 auto 10px !important;
    font-size: 12px !important;
    font-weight: 600 !important;
    border: 1px solid #ffffff !important;
    border-radius: 3px !important;
}
#top .main_menu .menu-item-has-children:hover > .sub-menu {
    display: block !important;
    opacity: 1 !important;
    visibility: visible !important;
}
#top .main_menu .sub-menu {
    position: absolute !important;
    top: 100% !important;
    left: 0 !important;
    background: #111111 !important;
    min-width: 230px !important;
    box-shadow: 0 8px 20px rgba(0,0,0,0.5) !important;
    border-top: 2px solid #d39592 !important;
    padding: 8px 0 !important;
    z-index: 9999 !important;
    transition: opacity 0.2s ease, visibility 0.2s ease !important;
}
#top .main_menu .sub-menu li a {
    padding: 10px 18px !important;
    font-size: 13px !important;
    line-height: 1.4 !important;
    height: auto !important;
    display: block !important;
    color: #e0e0e0 !important;
    white-space: nowrap !important;
}
#top .main_menu .sub-menu li a:hover {
    background-color: #222222 !important;
    color: #d39592 !important;
}

/* ===== FEATURE CARDS HEIGHT & PADDING FIX ===== */
#top #av_section_3 .flex_column_table,
#top .flex_column_table:has(.three-box-hover) {
    display: flex !important;
    flex-wrap: nowrap !important;
    gap: 20px !important;
    width: 100% !important;
    table-layout: auto !important;
    margin-top: 20px !important;
    margin-bottom: 20px !important;
}
#top #av_section_3 .av-flex-placeholder,
#top .flex_column_table:has(.three-box-hover) .av-flex-placeholder {
    display: none !important;
}
#top #av_section_3 .flex_column.three-box-hover,
#top .flex_column.three-box-hover {
    flex: 1 1 0 !important;
    width: auto !important;
    margin: 0 !important;
    padding: 35px 25px !important;
    min-height: 380px !important;
    max-height: 480px !important;
    box-sizing: border-box !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    text-align: center !important;
    border-radius: 8px !important;
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease !important;
}
#top .three-box-hover:hover {
    background-color: #d39592 !important;
    transform: translateY(-4px) !important;
    box-shadow: 0 15px 30px rgba(0,0,0,0.3) !important;
}
#top .three-box-hover .avia-image-container {
    margin: 0 0 15px 0 !important;
}
#top .three-box-hover .avia-image-container img {
    height: 52px !important;
    max-height: 52px !important;
    width: auto !important;
    object-fit: contain !important;
}
#top .three-box-hover .av-special-heading {
    padding-bottom: 8px !important;
    margin-bottom: 10px !important;
}
#top .three-box-hover .av-special-heading h4 {
    font-size: 18px !important;
    line-height: 1.35 !important;
    font-weight: 600 !important;
    color: #ffffff !important;
}
#top .three-box-hover .avia_textblock,
#top .three-box-hover .avia_textblock p {
    font-size: 14.5px !important;
    line-height: 1.55 !important;
    color: #f0f0f0 !important;
    margin: 0 !important;
}

@media only screen and (max-width: 989px) {
    #top #header_main .container.av-logo-container,
    #top #header_main .inner-container {
        padding: 0 15px !important;
    }
    #top .logo img {
        max-height: 42px !important;
        max-width: 170px !important;
    }
    #top .avia-menu.av-main-nav-wrap ul.av-main-nav > li > a {
        padding: 0 8px !important;
        font-size: 12px !important;
    }
    #top #av_section_3 .flex_column_table,
    #top .flex_column_table:has(.three-box-hover) {
        flex-direction: column !important;
    }
    #top #av_section_3 .flex_column.three-box-hover,
    #top .flex_column.three-box-hover {
        min-height: auto !important;
        max-height: none !important;
        margin-bottom: 20px !important;
        width: 100% !important;
    }
}
</style>
<div class="header_bg"></div>
<!-- end header -->
</header>