<?php
// scripts.php - Common bottom scripts
if (!isset($basePath)) $basePath = '';
?>
<a aria-hidden="true" class="avia-svg-icon avia-font-svg_entypo-fontello" data-av_iconset="svg_entypo-fontello" data-av_svg_icon="up-open" href="#top" id="scroll-top-link" tabindex="-1" title="Scroll to top">
<svg aria-describedby="av-svg-desc-1" aria-hidden="true" aria-labelledby="av-svg-title-1" height="32" preserveaspectratio="xMidYMid meet" role="graphics-symbol" version="1.1" viewbox="0 0 19 32" width="19" xmlns="http://www.w3.org/2000/svg">
<title id="av-svg-title-1">Scroll to top</title>
<desc id="av-svg-desc-1">Scroll to top</desc>
<path d="M18.048 18.24q0.512 0.512 0.512 1.312t-0.512 1.312q-1.216 1.216-2.496 0l-6.272-6.016-6.272 6.016q-1.28 1.216-2.496 0-0.512-0.512-0.512-1.312t0.512-1.312l7.488-7.168q0.512-0.512 1.28-0.512t1.28 0.512z"></path>
</svg> <span class="avia_hidden_link_text">Scroll to top</span>
</a>
<div id="fb-root"></div>
<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/enfold-child/*","/wp-content/themes/enfold/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
<div class="msgmsg-box-wpcp hideme" id="wpcp-error-message"><span>error: </span>Content is protected !!</div>
<script>
	var timeout_result;
	function show_wpcp_message(smessage)
	{
		if (smessage !== "")
			{
			var smessage_text = '<span>Alert: </span>'+smessage;
			document.getElementById("wpcp-error-message").innerHTML = smessage_text;
			document.getElementById("wpcp-error-message").className = "msgmsg-box-wpcp warning-wpcp showme";
			clearTimeout(timeout_result);
			timeout_result = setTimeout(hide_message, 3000);
			}
	}
	function hide_message()
	{
		document.getElementById("wpcp-error-message").className = "msgmsg-box-wpcp warning-wpcp hideme";
	}
	</script>
<style>
	@media print {
	body * {display: none !important;}
		body:after {
		content: "You are not allowed to print preview this page, Thank you"; }
	}
	</style>
<style type="text/css">
	#wpcp-error-message {
	    direction: ltr;
	    text-align: center;
	    transition: opacity 900ms ease 0s;
	    z-index: 99999999;
	}
	.hideme {
    	opacity:0;
    	visibility: hidden;
	}
	.showme {
    	opacity:1;
    	visibility: visible;
	}
	.msgmsg-box-wpcp {
		border:1px solid #f5aca6;
		border-radius: 10px;
		color: #555;
		font-family: Tahoma;
		font-size: 11px;
		margin: 10px;
		padding: 10px 36px;
		position: fixed;
		width: 255px;
		top: 50%;
  		left: 50%;
  		margin-top: -10px;
  		margin-left: -130px;
  		-webkit-box-shadow: 0px 0px 34px 2px rgba(242,191,191,1);
		-moz-box-shadow: 0px 0px 34px 2px rgba(242,191,191,1);
		box-shadow: 0px 0px 34px 2px rgba(242,191,191,1);
	}
	.msgmsg-box-wpcp span {
		font-weight:bold;
		text-transform:uppercase;
	}
		.warning-wpcp {
		background:#ffecec url('https://www.casaprivee.com/wp-content/plugins/wp-content-copy-protector/images/warning.png') no-repeat 10px 50%;
	}
    </style>
<script>
  window.onload = function() {
      var links = document.querySelectorAll('img, a ,div[title]');
      for (var i = 0; i < links.length; i++) {
          var link = links[i];
          link.onmouseover = function() {
              this.setAttribute("org_title", this.title);
              this.title = "";
          };
          link.onmouseout = function() {
              this.title = this.getAttribute("org_title");
          };
      }
  };
</script>
<script type="text/javascript">
 /* <![CDATA[ */  
var avia_framework_globals = avia_framework_globals || {};
    avia_framework_globals.frameworkUrl = 'https://www.casaprivee.com/wp-content/themes/enfold/framework/';
    avia_framework_globals.installedAt = 'https://www.casaprivee.com/wp-content/themes/enfold/';
    avia_framework_globals.ajaxurl = 'https://www.casaprivee.com/wp-admin/admin-ajax.php';
/* ]]> */ 
</script>
<script id="avia-waypoints-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/js/waypoints/waypoints.min.js"></script>
<script id="avia-default-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/js/avia.min.js"></script>
<script id="avia-shortcodes-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/js/shortcodes.min.js"></script>
<script id="avia-module-gallery-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/gallery/gallery.min.js"></script>
<script id="avia-module-iconlist-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/iconlist/iconlist.min.js"></script>
<script id="avia-module-tabs-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/tabs/tabs.min.js"></script>
<script id="avia-module-slideshow-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/slideshow/slideshow.min.js"></script>
<script id="avia-module-testimonials-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/testimonials/testimonials.min.js"></script>
<script id="avia-module-toggles-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/toggles/toggles.min.js"></script>
<script id="avia-module-slideshow-video-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/slideshow/slideshow-video.min.js"></script>
<script id="avia-module-video-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/config-templatebuilder/avia-shortcodes/video/video.min.js"></script>
<script id="avia-hamburger-menu-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/js/avia-snippet-hamburger-menu.min.js"></script>
<script id="avia-parallax-support-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/js/avia-snippet-parallax.min.js"></script>
<script id="avia-fold-unfold-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/js/avia-snippet-fold-unfold.min.js"></script>
<script id="avia-popup-js-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/js/aviapopup/jquery.magnific-popup.min.js"></script>
<script id="avia-lightbox-activation-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/js/avia-snippet-lightbox.min.js"></script>
<script id="avia-megamenu-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/js/avia-snippet-megamenu.min.js"></script>
<script id="avia-sticky-header-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/js/avia-snippet-sticky-header.min.js"></script>
<script id="avia-footer-effects-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/js/avia-snippet-footer-effects.min.js"></script>
<script id="avia-widget-js-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/js/avia-snippet-widget.min.js"></script>
<script id="avia_blocks_front_script-js" src="<?php echo $basePath; ?>wp-content/themes/enfold/config-gutenberg/js/avia_blocks_front.min.js"></script>
<script id="googlesitekit-consent-mode-js" src="<?php echo $basePath; ?>wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-consent-mode-86cb52dcb9f2b27ed244.js"></script>
<script id="googlesitekit-events-provider-content-events-js-before">
window._googlesitekit = window._googlesitekit || {};
window._googlesitekit.contentEvents = {"postID":1350,"isSinglePost":false};
//# sourceURL=googlesitekit-events-provider-content-events-js-before
</script>
<script defer="" id="googlesitekit-events-provider-content-events-js" src="<?php echo $basePath; ?>wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-events-provider-content-events-33078016c5e1e9f07c35.js"></script>
<script defer="" id="googlesitekit-events-provider-wpforms-js" src="<?php echo $basePath; ?>wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-events-provider-wpforms-063cb453c64ecfd3dafe.js"></script>
<script id="wp-consent-api-js-extra">
var consent_api = {"consent_type":"","waitfor_consent_hook":"","cookie_expiration":"30","cookie_prefix":"wp_consent","services":[]};
//# sourceURL=wp-consent-api-js-extra
</script>
<script id="wp-consent-api-js" src="<?php echo $basePath; ?>wp-content/plugins/wp-consent-api/assets/js/wp-consent-api.min.js"></script>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),
                _trfd.push({'tccl.baseHost':'secureserver.net'}),
                _trfd.push({'ap':'wpaas_v2'},
                    {'server':'49ba96214bac'},
                    {'pod':'c26-prod-p3-us-west-2'},
                                        {'xid':'45676799'},
                    {'wp':'7.0.4'},
                    {'php':'8.2.33'},
                    {'loggedin':'0'},
                    {'cdn':'1'},
                    {'builder':'wp-classic-editor'},
                    {'theme':'enfold'},
                    {'wds':'0'},
                    {'wp_alloptions_count':'533'},
                    {'wp_alloptions_bytes':'282375'},
                    {'gdl_coming_soon_page':'0'}
                    , {'appid':'588061'}                 );
            var trafficScript = document.createElement('script'); trafficScript.src = 'https://img1.wsimg.com/signals/js/clients/scc-c2/scc-c2.min.js'; window.document.head.appendChild(trafficScript);</script>
<script>window.addEventListener('click', function (elem) { var _elem$target, _elem$target$dataset, _window, _window$_trfq; return (elem === null || elem === void 0 ? void 0 : (_elem$target = elem.target) === null || _elem$target === void 0 ? void 0 : (_elem$target$dataset = _elem$target.dataset) === null || _elem$target$dataset === void 0 ? void 0 : _elem$target$dataset.eid) && ((_window = window) === null || _window === void 0 ? void 0 : (_window$_trfq = _window._trfq) === null || _window$_trfq === void 0 ? void 0 : _window$_trfq.push(["cmdLogEvent", "click", elem.target.dataset.eid]));});</script>
<script onload="window.tti.calculateTTI()" src="<?php echo $basePath; ?>_external/img1.wsimg.com/traffic-assets/js/tccl-tti.min.js"></script>

</body>
</html>