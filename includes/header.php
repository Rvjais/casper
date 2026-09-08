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
<div class="header_bg"></div>
<!-- end header -->
</header>