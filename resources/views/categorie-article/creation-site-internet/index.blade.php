<!doctype html><html lang="fr-FR">
<!-- Mirrored from ofaweb.fr/categorie-article/creation-site-internet/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2024 08:44:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="profile" href="https://gmpg.org/xfn/11"><title>création site internet &#8211; Prodigit &#8211; Création site internet</title><meta name='robots' content='max-image-preview:large' /><link rel='dns-prefetch' href='http://stats.wp.com/' /><link rel='dns-prefetch' href='http://fonts.googleapis.com/' /><link rel="alternate" type="application/rss+xml" title="Prodigit - Création site internet &raquo; Flux" href="../../feed" /><link rel="alternate" type="application/rss+xml" title="Prodigit - Création site internet &raquo; Flux des commentaires" href="../../comments/feed" /><link rel="alternate" type="application/rss+xml" title="Prodigit - Création site internet &raquo; Flux de la catégorie création site internet" href="feed" />  <script src="http://www.googletagmanager.com/gtag/js?id=G-51QCQQT870"  data-cfasync="false" data-wpfc-render="false" async></script> <script data-cfasync="false" data-wpfc-render="false">var em_version = '7.24.3';
				var em_track_user = true;
				var em_no_track_reason = '';
								var ExactMetricsDefaultLocations = {"page_location":"https:\/\/ofaweb.fr\/categorie-article\/creation-site-internet\/"};
				if ( typeof ExactMetricsPrivacyGuardFilter === 'function' ) {
					var ExactMetricsLocations = (typeof ExactMetricsExcludeQuery === 'object') ? ExactMetricsPrivacyGuardFilter( ExactMetricsExcludeQuery ) : ExactMetricsPrivacyGuardFilter( ExactMetricsDefaultLocations );
				} else {
					var ExactMetricsLocations = (typeof ExactMetricsExcludeQuery === 'object') ? ExactMetricsExcludeQuery : ExactMetricsDefaultLocations;
				}

								var disableStrs = [
										'ga-disable-G-51QCQQT870',
									];

				/* Function to detect opted out users */
				function __gtagTrackerIsOptedOut() {
					for (var index = 0; index < disableStrs.length; index++) {
						if (document.cookie.indexOf(disableStrs[index] + '=true') > -1) {
							return true;
						}
					}

					return false;
				}

				/* Disable tracking if the opt-out cookie exists. */
				if (__gtagTrackerIsOptedOut()) {
					for (var index = 0; index < disableStrs.length; index++) {
						window[disableStrs[index]] = true;
					}
				}

				/* Opt-out function */
				function __gtagTrackerOptout() {
					for (var index = 0; index < disableStrs.length; index++) {
						document.cookie = disableStrs[index] + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
						window[disableStrs[index]] = true;
					}
				}

				if ('undefined' === typeof gaOptout) {
					function gaOptout() {
						__gtagTrackerOptout();
					}
				}
								window.dataLayer = window.dataLayer || [];

				window.ExactMetricsDualTracker = {
					helpers: {},
					trackers: {},
				};
				if (em_track_user) {
					function __gtagDataLayer() {
						dataLayer.push(arguments);
					}

					function __gtagTracker(type, name, parameters) {
						if (!parameters) {
							parameters = {};
						}

						if (parameters.send_to) {
							__gtagDataLayer.apply(null, arguments);
							return;
						}

						if (type === 'event') {
														parameters.send_to = exactmetrics_frontend.v4_id;
							var hookName = name;
							if (typeof parameters['event_category'] !== 'undefined') {
								hookName = parameters['event_category'] + ':' + name;
							}

							if (typeof ExactMetricsDualTracker.trackers[hookName] !== 'undefined') {
								ExactMetricsDualTracker.trackers[hookName](parameters);
							} else {
								__gtagDataLayer('event', name, parameters);
							}
							
						} else {
							__gtagDataLayer.apply(null, arguments);
						}
					}

					__gtagTracker('js', new Date());
					__gtagTracker('set', {
						'developer_id.dNDMyYj': true,
											});
					if ( ExactMetricsLocations.page_location ) {
						__gtagTracker('set', ExactMetricsLocations);
					}
										__gtagTracker('config', 'G-51QCQQT870', {"forceSSL":"true","link_attribution":"true"} );
															window.gtag = __gtagTracker;										(function () {
						/* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
						/* ga and __gaTracker compatibility shim. */
						var noopfn = function () {
							return null;
						};
						var newtracker = function () {
							return new Tracker();
						};
						var Tracker = function () {
							return null;
						};
						var p = Tracker.prototype;
						p.get = noopfn;
						p.set = noopfn;
						p.send = function () {
							var args = Array.prototype.slice.call(arguments);
							args.unshift('send');
							__gaTracker.apply(null, args);
						};
						var __gaTracker = function () {
							var len = arguments.length;
							if (len === 0) {
								return;
							}
							var f = arguments[len - 1];
							if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
								if ('send' === arguments[0]) {
									var hitConverted, hitObject = false, action;
									if ('event' === arguments[1]) {
										if ('undefined' !== typeof arguments[3]) {
											hitObject = {
												'eventAction': arguments[3],
												'eventCategory': arguments[2],
												'eventLabel': arguments[4],
												'value': arguments[5] ? arguments[5] : 1,
											}
										}
									}
									if ('pageview' === arguments[1]) {
										if ('undefined' !== typeof arguments[2]) {
											hitObject = {
												'eventAction': 'page_view',
												'page_path': arguments[2],
											}
										}
									}
									if (typeof arguments[2] === 'object') {
										hitObject = arguments[2];
									}
									if (typeof arguments[5] === 'object') {
										Object.assign(hitObject, arguments[5]);
									}
									if ('undefined' !== typeof arguments[1].hitType) {
										hitObject = arguments[1];
										if ('pageview' === hitObject.hitType) {
											hitObject.eventAction = 'page_view';
										}
									}
									if (hitObject) {
										action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject.eventAction;
										hitConverted = mapArgs(hitObject);
										__gtagTracker('event', action, hitConverted);
									}
								}
								return;
							}

							function mapArgs(args) {
								var arg, hit = {};
								var gaMap = {
									'eventCategory': 'event_category',
									'eventAction': 'event_action',
									'eventLabel': 'event_label',
									'eventValue': 'event_value',
									'nonInteraction': 'non_interaction',
									'timingCategory': 'event_category',
									'timingVar': 'name',
									'timingValue': 'value',
									'timingLabel': 'event_label',
									'page': 'page_path',
									'location': 'page_location',
									'title': 'page_title',
									'referrer' : 'page_referrer',
								};
								for (arg in args) {
																		if (!(!args.hasOwnProperty(arg) || !gaMap.hasOwnProperty(arg))) {
										hit[gaMap[arg]] = args[arg];
									} else {
										hit[arg] = args[arg];
									}
								}
								return hit;
							}

							try {
								f.hitCallback();
							} catch (ex) {
							}
						};
						__gaTracker.create = newtracker;
						__gaTracker.getByName = newtracker;
						__gaTracker.getAll = function () {
							return [];
						};
						__gaTracker.remove = noopfn;
						__gaTracker.loaded = true;
						window['__gaTracker'] = __gaTracker;
					})();
									} else {
										console.log("");
					(function () {
						function __gtagTracker() {
							return null;
						}

						window['__gtagTracker'] = __gtagTracker;
						window['gtag'] = __gtagTracker;
					})();
									}</script>  <script>window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/ofaweb.fr\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);</script> <link rel='stylesheet' id='wc-blocks-checkout-style-css' href='../../wp-content/plugins/woocommerce-payments/dist/blocks-checkout5152.css?ver=1.0' media='all' /><style id='wp-emoji-styles-inline-css'>img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}</style><link rel='stylesheet' id='wp-block-library-css' href='../../wp-includes/css/dist/block-library/style.min84fc.css?ver=6.4.3' media='all' /><style id='classic-theme-styles-inline-css'>/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}</style><style id='global-styles-inline-css'>body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}</style><link rel='stylesheet' id='cookie-law-info-css' href='../../wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-public3a79.css?ver=3.1.8' media='all' /><link rel='stylesheet' id='cookie-law-info-gdpr-css' href='../../wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-gdpr3a79.css?ver=3.1.8' media='all' /><link rel='stylesheet' id='maz-loader-mazloader-google-font-css' href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C700&amp;display=swap&amp;ver=6.4.3' media='all' /><link rel='stylesheet' id='maz-loader-css' href='../../wp-content/plugins/maz-loader/media/public/css/mazloader91ce.css?ver=1.5.0' media='all' /><link rel='stylesheet' id='swpm.common-css' href='../../wp-content/plugins/simple-membership/css/swpm.commonc1f9.css?ver=4.4.2' media='all' /><link rel='stylesheet' id='woocommerce-layout-css' href='../../wp-content/plugins/woocommerce/assets/css/woocommerce-layoutdb31.css?ver=8.6.0' media='all' /><link rel='stylesheet' id='woocommerce-smallscreen-css' href='../../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreendb31.css?ver=8.6.0' media='only screen and (max-width: 768px)' /><link rel='stylesheet' id='woocommerce-general-css' href='../../wp-content/plugins/woocommerce/assets/css/woocommercedb31.css?ver=8.6.0' media='all' /><style id='woocommerce-inline-inline-css'>.woocommerce form .form-row .required { visibility: visible; }</style><link rel='stylesheet' id='wp-job-manager-job-listings-css' href='../../wp-content/plugins/wp-job-manager/assets/dist/css/job-listings7d5b.css?ver=598383a28ac5f9f156e4' media='all' /><link rel='stylesheet' id='parent-style-css' href='../../wp-content/themes/hello-elementor/style84fc.css?ver=6.4.3' media='all' /><link rel='stylesheet' id='child-style-css' href='../../wp-content/themes/hello-elementor-child/style84fc.css?ver=6.4.3' media='all' /><link rel='stylesheet' id='hello-elementor-css' href='../../wp-content/themes/hello-elementor/style.min41fe.css?ver=3.0.1' media='all' /><link rel='stylesheet' id='hello-elementor-theme-style-css' href='../../wp-content/themes/hello-elementor/theme.min41fe.css?ver=3.0.1' media='all' /><link rel='stylesheet' id='hello-elementor-header-footer-css' href='../../wp-content/themes/hello-elementor/header-footer.min41fe.css?ver=3.0.1' media='all' /><link rel='stylesheet' id='elementor-icons-css' href='../../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min50c3.css?ver=5.27.0' media='all' /><link rel='stylesheet' id='elementor-frontend-css' href='../../wp-content/plugins/elementor/assets/css/frontend-lite.min34a7.css?ver=3.19.2' media='all' /><link rel='stylesheet' id='swiper-css' href='../../wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min48f5.css?ver=5.3.6' media='all' /><link rel='stylesheet' id='elementor-post-79-css' href='../../wp-content/uploads/elementor/css/post-79557c.css?ver=1707561995' media='all' /><link rel='stylesheet' id='elementor-pro-css' href='../../wp-content/plugins/elementor-pro/assets/css/frontend-lite.min34a7.css?ver=3.19.2' media='all' /><link rel='stylesheet' id='elementor-post-409-css' href='../../wp-content/uploads/elementor/css/post-409e1fb.css?ver=1707561996' media='all' /><link rel='stylesheet' id='elementor-post-2460-css' href='../../wp-content/uploads/elementor/css/post-2460e1fb.css?ver=1707561996' media='all' /><link rel='stylesheet' id='eael-general-css' href='../../wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min4dc9.css?ver=5.9.9' media='all' /><link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRighteous%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CZilla+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.3' media='all' /><link rel='stylesheet' id='elementor-icons-shared-0-css' href='../../wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3' media='all' /><link rel='stylesheet' id='elementor-icons-fa-solid-css' href='../../wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' media='all' /><link rel='stylesheet' id='elementor-icons-fa-brands-css' href='../../wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3' media='all' /><link rel='stylesheet' id='elementor-icons-fa-regular-css' href='../../wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3' media='all' /><link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script src="../../wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2" id="wp-polyfill-inert-js"></script> <script src="../../wp-includes/js/dist/vendor/regenerator-runtime.min6c85.js?ver=0.14.0" id="regenerator-runtime-js"></script> <script src="../../wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0" id="wp-polyfill-js"></script> <script src="../../wp-includes/js/dist/hooks.min2ebd.js?ver=c6aec9a8d4e5a5d543a1" id="wp-hooks-js"></script> <script src="../../../stats.wp.com/w2dfa.js?ver=202407" id="woo-tracks-js"></script> <script src="../../wp-content/plugins/google-analytics-dashboard-for-wp/assets/js/frontend-gtag.min7d6a.js?ver=7.24.3" id="exactmetrics-frontend-script-js"></script> <script data-cfasync="false" data-wpfc-render="false" id='exactmetrics-frontend-script-js-extra'>var exactmetrics_frontend = {"js_events_tracking":"true","download_extensions":"doc,pdf,ppt,zip,xls,docx,pptx,xlsx","inbound_paths":"[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]","home_url":"https:\/\/ofaweb.fr","hash_tracking":"false","v4_id":"G-51QCQQT870"};</script> <script src="../../wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script> <script src="../../wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script> <script id="cookie-law-info-js-extra">var Cli_Data = {"nn_cookie_ids":[],"cookielist":[],"non_necessary_cookies":[],"ccpaEnabled":"","ccpaRegionBased":"","ccpaBarEnabled":"","strictlyEnabled":["necessary","obligatoire"],"ccpaType":"gdpr","js_blocking":"1","custom_integration":"","triggerDomRefresh":"","secure_cookies":""};
var cli_cookiebar_settings = {"animate_speed_hide":"500","animate_speed_show":"500","background":"#FFF","border":"#b1a6a6c2","border_on":"","button_1_button_colour":"#61a229","button_1_button_hover":"#4e8221","button_1_link_colour":"#fff","button_1_as_button":"1","button_1_new_win":"","button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#8224e3","button_2_as_button":"","button_2_hidebar":"","button_3_button_colour":"#3566bb","button_3_button_hover":"#2a5296","button_3_link_colour":"#fff","button_3_as_button":"1","button_3_new_win":"","button_4_button_colour":"#000","button_4_button_hover":"#000000","button_4_link_colour":"#8224e3","button_4_as_button":"","button_7_button_colour":"#61a229","button_7_button_hover":"#4e8221","button_7_link_colour":"#fff","button_7_as_button":"1","button_7_new_win":"","font_family":"inherit","header_fix":"","notify_animate_hide":"1","notify_animate_show":"","notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"bottom","scroll_close":"","scroll_close_reload":"","accept_close_reload":"","reject_close_reload":"","showagain_tab":"","showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#333333","show_once_yn":"","show_once":"10000","logging_on":"","as_popup":"","popup_overlay":"1","bar_heading_text":"","cookie_bar_as":"banner","popup_showagain_position":"bottom-right","widget_position":"left"};
var log_object = {"ajax_url":"https:\/\/ofaweb.fr\/wp-admin\/admin-ajax.php"};</script> <script src="../../wp-content/plugins/cookie-law-info/legacy/public/js/cookie-law-info-public3a79.js?ver=3.1.8" id="cookie-law-info-js"></script> <script src="../../wp-content/plugins/maz-loader/media/public/js/mazloader91ce.js?ver=1.5.0" id="maz-loader-js"></script> <script src="../../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minc154.js?ver=2.7.0-wc.8.6.0" id="jquery-blockui-js" defer data-wp-strategy="defer"></script> <script id="wc-add-to-cart-js-extra">var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Voir le panier","cart_url":"https:\/\/ofaweb.fr\/panier\/","is_cart":"","cart_redirect_after_add":"no"};</script> <script src="../../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.mindb31.js?ver=8.6.0" id="wc-add-to-cart-js" defer data-wp-strategy="defer"></script> <script src="../../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min305e.js?ver=2.1.4-wc.8.6.0" id="js-cookie-js" defer data-wp-strategy="defer"></script> <script id="woocommerce-js-extra">var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};</script> <script src="../../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.mindb31.js?ver=8.6.0" id="woocommerce-js" defer data-wp-strategy="defer"></script> <script id="WCPAY_ASSETS-js-extra">var wcpayAssets = {"url":"https:\/\/ofaweb.fr\/wp-content\/plugins\/woocommerce-payments\/dist\/"};</script> <link rel="https://api.w.org/" href="../../wp-json" /><link rel="alternate" type="application/json" href="../../wp-json/wp/v2/categories/41.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc0db0.php?rsd" /><meta name="generator" content="WordPress 6.4.3" /><meta name="generator" content="WooCommerce 8.6.0" /> <script type="text/javascript">jQuery(document).ready(function($) {
                $('#respond').html('<div class="swpm-login-to-comment-msg">Veuillez vous connecter pour laisser un commentaire.</div>');
            });</script> <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript><meta name="generator" content="Elementor 3.19.2; features: e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-auto"> <script  type="text/javascript">!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
					n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
					n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
					t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
					document,'script','../../../connect.facebook.net/en_US/fbevents.js');</script>  <script  type="text/javascript">fbq('init', '397328092319940', {}, {
    "agent": "woocommerce-8.6.0-3.1.10"
});

				fbq( 'track', 'PageView', {
    "source": "woocommerce",
    "version": "8.6.0",
    "pluginVersion": "3.1.10"
} );

				document.addEventListener( 'DOMContentLoaded', function() {
					jQuery && jQuery( function( $ ) {
						// Insert placeholder for events injected when a product is added to the cart through AJAX.
						$( document.body ).append( '<div class=\"wc-facebook-pixel-event-placeholder\"></div>' );
					} );
				}, false );</script> <link rel="canonical" href="index.html" /><meta name="twitter:image" content="https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in.webp" /><meta name="twitter:card" content="summary" /><meta name="twitter:site" content="@twitter.com/ofa_web" /><meta name="twitter:domain" content="Prodigit - Création site internet" /><meta name="twitter:title" content="création site internet" /><meta property="fb:admins" content="facebook.com/ofaweb" /><meta property="og:image" content="https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in.webp" /><meta property="og:site_name" content="Prodigit - Création site internet" /><meta property="og:url" content="https://ofaweb.fr/categorie-article/creation-site-internet/" /><meta property="og:type" content="object" /><meta property="og:title" content="création site internet" /><meta name="title" content="création site internet" /><meta name="robots" content="index,follow" /><link rel="icon" href="../../wp-content/uploads/2023/01/cropped-favicon2-32x32.png" sizes="32x32" /><link rel="icon" href="../../wp-content/uploads/2023/01/cropped-favicon2-192x192.png" sizes="192x192" /><link rel="apple-touch-icon" href="../../wp-content/uploads/2023/01/cropped-favicon2-180x180.png" /><meta name="msapplication-TileImage" content="https://ofaweb.fr/wp-content/uploads/2023/01/cropped-favicon2-270x270.png" /><style id="wp-custom-css">h1, h2{
	color: white;
}

/*panier quantité*/
:is(.elementor-widget-wc-add-to-cart, .woocommerce div.product .elementor-widget-wc-add-to-cart) .quantity .qty{
	width: 7em !important;
}
/**/

/*.header-2 {
opacity: 0;
 -moz-transition: opacity .25s ease-out!important;
  -webkit-transition: opacity .25s ease-out!important;
  transition: opacity .25s ease-out!important;
}


.elementor-sticky--effects.header-2  {
	opacity: 1 !important;
}*/

body, html {
overflow-x: hidden;
}

.elementor{
		overflow: hidden !important;
}

/* point*/
.wps_wpr_shortcode_wrapper, .elementor-shortcode b {
	color: #fff !important;
}


/* Job listing */
.awsm-job-post-title{
	color: #9b51e0 !important
}

.awsm-job-specification-label, .awsm-job-specification-term{
	color: #fff !important;
}

.awsm-job-form-inner h2{
	color: #9b51e0 !important;
}

.awsm-job-icon-certificate, .awsm-job-specification-item, .awsm-job-specification-type, .awsm-job-icon-building, .awsm-job-icon-calendar-times-o{
	color: #fff !important;
}

/* recaptcha v3 */

.grecaptcha-logo{
	display: none !important;
}

.grecaptcha-badge{
	display: none !important
}

#wp-chatbot-chat-container{
	right: 20px !important;
}

.wp-chatbot-mobile-full-screen{
	right: 20px !important;
}


.e-atc-qty-button-holder{
	  margin-bottom: 5% !important;

}

/*Job Manager*/
.post-4665 h1{
	margin-top: 10%;
}

.company_header .name{
	color: #9E43FF;
}

.job_description{
	color: white;
}


.application_button{
	background-color: #9E43FF;
	color: white;
	border: 0
}

.single_job_listing{
		margin-bottom: 10%;
	}

.application_details{
	color: white;
}

.single_job_listing .location{
	display: none;
}

/*Fin Job Manager*/

/*Job Manager

.job_manager .job_listings{
	background-color: white;
	border: 0 !important;
	border-radius: 20px;
}

.job_manager h5{
	font-weight: bold;
	color: white;
	font-size: 50px;
} 

.job_listings h3{
		font-weight: bold;
	font-size: 50px;
} 

.job_listings .location{
	display: none !important;
}

.wp-widget-widget_recent_jobs.default{
	border: 0;
}

.rp4wp-related-job_listing > ul li.job_listing, .rp4wp-related-job_listing > ul li.no_job_listings_found, ul.job_listings li.job_listing, ul.job_listings li.no_job_listings_found{
	border: 0;
}

*/</style><style id="wpforms-css-vars-root">:root {
					--wpforms-field-border-radius: 3px;
--wpforms-field-background-color: #ffffff;
--wpforms-field-border-color: rgba( 0, 0, 0, 0.25 );
--wpforms-field-text-color: rgba( 0, 0, 0, 0.7 );
--wpforms-label-color: rgba( 0, 0, 0, 0.85 );
--wpforms-label-sublabel-color: rgba( 0, 0, 0, 0.55 );
--wpforms-label-error-color: #d63637;
--wpforms-button-border-radius: 3px;
--wpforms-button-background-color: #066aab;
--wpforms-button-text-color: #ffffff;
--wpforms-field-size-input-height: 43px;
--wpforms-field-size-input-spacing: 15px;
--wpforms-field-size-font-size: 16px;
--wpforms-field-size-line-height: 19px;
--wpforms-field-size-padding-h: 14px;
--wpforms-field-size-checkbox-size: 16px;
--wpforms-field-size-sublabel-spacing: 5px;
--wpforms-field-size-icon-size: 1;
--wpforms-label-size-font-size: 16px;
--wpforms-label-size-line-height: 19px;
--wpforms-label-size-sublabel-font-size: 14px;
--wpforms-label-size-sublabel-line-height: 17px;
--wpforms-button-size-font-size: 17px;
--wpforms-button-size-height: 41px;
--wpforms-button-size-padding-h: 15px;
--wpforms-button-size-margin-top: 10px;

				}</style></head><body class="archive category category-creation-site-internet category-41 wp-custom-logo theme-hello-elementor woocommerce-no-js hello-elementor-child elementor-default elementor-kit-79"> <a class="skip-link screen-reader-text" href="#content">Aller au contenu</a><div data-elementor-type="header" data-elementor-id="409" class="elementor elementor-409 elementor-location-header" data-elementor-post-type="elementor_library"><section class="elementor-section elementor-top-section elementor-element elementor-element-3d192c58 elementor-section-content-middle header-1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3d192c58" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_effects_offset&quot;:100,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0}"><div class="elementor-background-overlay"></div><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-25ae9a5a" data-id="25ae9a5a" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-99d0fee elementor-widget elementor-widget-image" data-id="99d0fee" data-element_type="widget" data-widget_type="image.default"><div class="elementor-widget-container"><style>/*! elementor - v3.19.0 - 07-02-2024 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style><a href="/"> <img fetchpriority="high" width="1249" height="485" src="../../wp-content/uploads/2023/01/cropped-Fichier-4.png" class="attachment-full size-full wp-image-3951" alt="logo - Prodigit - Création site internet" srcset="https://ofaweb.fr/wp-content/uploads/2023/01/cropped-Fichier-4.png 1249w, https://ofaweb.fr/wp-content/uploads/2023/01/cropped-Fichier-4-300x116.png 300w, https://ofaweb.fr/wp-content/uploads/2023/01/cropped-Fichier-4-1024x398.png 1024w, https://ofaweb.fr/wp-content/uploads/2023/01/cropped-Fichier-4-768x298.png 768w, https://ofaweb.fr/wp-content/uploads/2023/01/cropped-Fichier-4-600x233.png 600w" sizes="(max-width: 1249px) 100vw, 1249px" /> </a></div></div></div></div><div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-48521cf5" data-id="48521cf5" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-a769af4 elementor-nav-menu__align-center elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-nav-menu--dropdown-tablet elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="a769af4" data-element_type="widget" data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default"><div class="elementor-widget-container"><link rel="stylesheet" href="../../wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min.css"><nav class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none"><ul id="menu-1-a769af4" class="elementor-nav-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-562"><a href="/" class="elementor-item">Accueil</a></li><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-3007"><a href="/#services_section" class="elementor-item elementor-item-anchor">Services</a><ul class="sub-menu elementor-nav-menu--dropdown"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4490"><a href="../../formations" class="elementor-sub-item">Formations</a></li><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4491"><a href="../../maintenance-referencement" class="elementor-sub-item">Maintenance &#038; Référencement</a></li></ul></li><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1697"><a href="/#realisations" class="elementor-item elementor-item-anchor">Réalisations</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3008"><a href="../../tarifs" class="elementor-item">Tarifs</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3289"><a href="../../blog" class="elementor-item">Blog</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-565"><a href="../../contact" class="elementor-item">Contact</a></li></ul></nav><div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Permuter le menu" aria-expanded="false"> <i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open fas fa-stream"></i><i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close eicon-close"></i> <span class="elementor-screen-only">Menu</span></div><nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true"><ul id="menu-2-a769af4" class="elementor-nav-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-562"><a href="/" class="elementor-item" tabindex="-1">Accueil</a></li><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-3007"><a href="/#services_section" class="elementor-item elementor-item-anchor" tabindex="-1">Services</a><ul class="sub-menu elementor-nav-menu--dropdown"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4490"><a href="../../formations" class="elementor-sub-item" tabindex="-1">Formations</a></li><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4491"><a href="../../maintenance-referencement" class="elementor-sub-item" tabindex="-1">Maintenance &#038; Référencement</a></li></ul></li><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1697"><a href="/#realisations" class="elementor-item elementor-item-anchor" tabindex="-1">Réalisations</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3008"><a href="../../tarifs" class="elementor-item" tabindex="-1">Tarifs</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3289"><a href="../../blog" class="elementor-item" tabindex="-1">Blog</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-565"><a href="../../contact" class="elementor-item" tabindex="-1">Contact</a></li></ul></nav></div></div></div></div><div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-9df6901" data-id="9df6901" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-d4a59d0 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="d4a59d0" data-element_type="widget" data-widget_type="icon-box.default"><div class="elementor-widget-container"><link rel="stylesheet" href="../../wp-content/plugins/elementor/assets/css/widget-icon-box.min.css"><div class="elementor-icon-box-wrapper"><div class="elementor-icon-box-icon"> <a href="../../mon-compte" class="elementor-icon elementor-animation-" tabindex="-1"> <i aria-hidden="true" class="fas fa-user-astronaut"></i> </a></div><div class="elementor-icon-box-content"><div class="elementor-icon-box-title"> <a href="../../mon-compte" > Compte </a></div></div></div></div></div></div></div><div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-c29a5a9" data-id="c29a5a9" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-8c31366 animated-slow elementor-view-default elementor-position-top elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="8c31366" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceIn&quot;}" data-widget_type="icon-box.default"><div class="elementor-widget-container"><div class="elementor-icon-box-wrapper"><div class="elementor-icon-box-icon"> <a href="../../mon-projet" class="elementor-icon elementor-animation-" tabindex="-1"> <i aria-hidden="true" class="fab fa-rocketchat"></i> </a></div><div class="elementor-icon-box-content"><div class="elementor-icon-box-title"> <a href="../../mon-projet" > Devis/Projet </a></div></div></div></div></div></div></div><div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-03902f0" data-id="03902f0" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-69c497b elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="69c497b" data-element_type="widget" data-widget_type="icon-box.default"><div class="elementor-widget-container"><div class="elementor-icon-box-wrapper"><div class="elementor-icon-box-icon"> <a href="../../la-boutique-web" class="elementor-icon elementor-animation-" tabindex="-1"> <i aria-hidden="true" class="fas fa-store"></i> </a></div><div class="elementor-icon-box-content"><div class="elementor-icon-box-title"> <a href="../../la-boutique-web" > Boutique </a></div></div></div></div></div></div></div><div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-cbe495a" data-id="cbe495a" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-eededce toggle-icon--basket-solid elementor-menu-cart--cart-type-mini-cart elementor-menu-cart--empty-indicator-hide elementor-menu-cart--items-indicator-bubble elementor-menu-cart--show-remove-button-yes elementor-widget elementor-widget-woocommerce-menu-cart" data-id="eededce" data-element_type="widget" data-settings="{&quot;cart_type&quot;:&quot;mini-cart&quot;,&quot;open_cart&quot;:&quot;click&quot;,&quot;automatically_open_cart&quot;:&quot;no&quot;}" data-widget_type="woocommerce-menu-cart.default"><div class="elementor-widget-container"><link rel="stylesheet" href="../../wp-content/plugins/elementor-pro/assets/css/widget-woocommerce.min.css"><div class="elementor-menu-cart__wrapper"><div class="elementor-menu-cart__toggle_wrapper"><div class="elementor-menu-cart__container elementor-lightbox" aria-hidden="true"><div class="elementor-menu-cart__main" aria-hidden="true"><div class="elementor-menu-cart__close-button"></div><div class="widget_shopping_cart_content"></div></div></div><div class="elementor-menu-cart__toggle elementor-button-wrapper"> <a id="elementor-menu-cart__toggle_button" href="#" class="elementor-menu-cart__toggle_button elementor-button elementor-size-sm" aria-expanded="false"> <span class="elementor-button-text"><span class="woocommerce-Price-amount amount"><bdi>0,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span> <span class="elementor-button-icon"> <span class="elementor-button-icon-qty" data-counter="0">0</span> <i class="eicon-basket-solid"></i> <span class="elementor-screen-only">Panier</span> </span> </a></div></div></div></div></div></div></div><div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-f0f895f" data-id="f0f895f" data-element_type="column"><div class="elementor-widget-wrap"></div></div></div></section></div><main id="content" class="site-main"><header class="page-header"><h1 class="entry-title">Catégorie : <span>création site internet</span></h1></header><div class="page-content"><article class="post"><h2 class="entry-title"><a href="../../creation-de-site-internet-pas-cher-guide-complet-avec-wordpress-et-ofa-web">Création de Site Internet Pas Cher : Guide Complet avec WordPress et Prodigit</a></h2><a href="../../creation-de-site-internet-pas-cher-guide-complet-avec-wordpress-et-ofa-web"><img width="800" height="800" src="../../wp-content/uploads/2024/02/DALL%c2%b7E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in.webp" class="attachment-large size-large wp-post-image" alt="Création site internet pas cher avec Wordpress et Prodigit" decoding="async" srcset="https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in.webp 1024w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in-300x300.webp 300w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in-150x150.webp 150w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in-768x768.webp 768w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in-600x600.webp 600w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in-100x100.webp 100w" sizes="(max-width: 800px) 100vw, 800px" /></a><p>La création d&#8217;un site internet ne doit pas nécessairement être une entreprise coûteuse. Avec des outils tels que WordPress et les services d&#8217;une agence web compétente comme Prodigit, il est tout à fait possible de lancer un site web professionnel et abordable. Cet article vous guidera à travers les étapes clés et les bonnes [&hellip;]</p></article><article class="post"><h2 class="entry-title"><a href="../../creation-de-site-internet-explorez-les-meilleures-solutions-pour-votre-presence-en-ligne">Création de Site Internet: Explorez les Meilleures Solutions pour Votre Présence en Ligne</a></h2><a href="../../creation-de-site-internet-explorez-les-meilleures-solutions-pour-votre-presence-en-ligne"><img width="800" height="457" src="../../wp-content/uploads/2024/02/DALL%c2%b7E-2024-02-01-12.10.55-An-illustrative-3D-digital-collage-representing-different-methods-of-website-creation.-The-image-is-divided-into-three-sections-with-a-3D-perspective-1024x585.2a4" class="attachment-large size-large wp-post-image" alt="Création site internet - Différentes méthodes - Prodigit" decoding="async" srcset="https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-01-12.10.55-An-illustrative-3D-digital-collage-representing-different-methods-of-website-creation.-The-image-is-divided-into-three-sections-with-a-3D-perspective-1024x585.png 1024w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-01-12.10.55-An-illustrative-3D-digital-collage-representing-different-methods-of-website-creation.-The-image-is-divided-into-three-sections-with-a-3D-perspective-300x171.png 300w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-01-12.10.55-An-illustrative-3D-digital-collage-representing-different-methods-of-website-creation.-The-image-is-divided-into-three-sections-with-a-3D-perspective-768x439.png 768w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-01-12.10.55-An-illustrative-3D-digital-collage-representing-different-methods-of-website-creation.-The-image-is-divided-into-three-sections-with-a-3D-perspective-1536x878.png 1536w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-01-12.10.55-An-illustrative-3D-digital-collage-representing-different-methods-of-website-creation.-The-image-is-divided-into-three-sections-with-a-3D-perspective-600x343.png 600w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-01-12.10.55-An-illustrative-3D-digital-collage-representing-different-methods-of-website-creation.-The-image-is-divided-into-three-sections-with-a-3D-perspective.png 1792w" sizes="(max-width: 800px) 100vw, 800px" /></a><p>Dans l&#8217;ère numérique d&#8217;aujourd&#8217;hui, une présence en ligne efficace est cruciale pour le succès de toute entreprise ou projet personnel. La création d&#8217;un site internet est une étape fondamentale pour atteindre cet objectif. Cependant, avec l&#8217;abondance des options disponibles, choisir la bonne solution peut sembler complexe. Dans cet article, nous allons explorer les différents types [&hellip;]</p></article><article class="post"><h2 class="entry-title"><a href="../../creation-site-internet-a-petit-prix-economiser-avec-ofa-web">Création Site Internet à Petit Prix : Économiser avec Prodigit</a></h2><a href="../../creation-site-internet-a-petit-prix-economiser-avec-ofa-web"><img width="800" height="800" src="../../wp-content/uploads/2024/01/DALL%c2%b7E-2024-01-21-10.00.11-A-visually-engaging-and-modern-website-displayed-on-a-computer-screen-with-graphics-symbolizing-cost-effectiveness-such-as-a-piggy-bank-or-coins-su.png" class="attachment-large size-large wp-post-image" alt="Création site internet à petit Prix - Prodigit" decoding="async" srcset="https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-21-10.00.11-A-visually-engaging-and-modern-website-displayed-on-a-computer-screen-with-graphics-symbolizing-cost-effectiveness-such-as-a-piggy-bank-or-coins-su.png 1024w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-21-10.00.11-A-visually-engaging-and-modern-website-displayed-on-a-computer-screen-with-graphics-symbolizing-cost-effectiveness-such-as-a-piggy-bank-or-coins-su-300x300.png 300w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-21-10.00.11-A-visually-engaging-and-modern-website-displayed-on-a-computer-screen-with-graphics-symbolizing-cost-effectiveness-such-as-a-piggy-bank-or-coins-su-150x150.png 150w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-21-10.00.11-A-visually-engaging-and-modern-website-displayed-on-a-computer-screen-with-graphics-symbolizing-cost-effectiveness-such-as-a-piggy-bank-or-coins-su-768x768.png 768w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-21-10.00.11-A-visually-engaging-and-modern-website-displayed-on-a-computer-screen-with-graphics-symbolizing-cost-effectiveness-such-as-a-piggy-bank-or-coins-su-600x600.png 600w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-21-10.00.11-A-visually-engaging-and-modern-website-displayed-on-a-computer-screen-with-graphics-symbolizing-cost-effectiveness-such-as-a-piggy-bank-or-coins-su-100x100.png 100w" sizes="(max-width: 800px) 100vw, 800px" /></a><p>Introduction à la Création de Sites Internet Abordables Dans l&#8217;ère numérique actuelle, la création d&#8217;un site internet est devenue une nécessité incontournable pour toute entreprise souhaitant prospérer et étendre son influence. Cependant, les coûts associés à la conception d&#8217;un site web professionnel semblent prohibitifs pour beaucoup, surtout pour les petites entreprises ou les entrepreneurs individuels. [&hellip;]</p></article><article class="post"><h2 class="entry-title"><a href="../../creer-un-site-internet-en-2024-cle-de-la-visibilite-et-de-la-croissance-digitale">Créer un Site Internet en 2024 : Clé de la Visibilité et de la Croissance Digitale</a></h2><a href="../../creer-un-site-internet-en-2024-cle-de-la-visibilite-et-de-la-croissance-digitale"><img width="800" height="800" src="../../wp-content/uploads/2024/01/DALL%c2%b7E-2024-01-12-11.46.05-A-sleek-and-modern-website-interface-displayed-on-a-computer-screen-symbolizing-the-digital-transformation-and-online-presence-of-businesses-in-2024.png" class="attachment-large size-large wp-post-image" alt="Création site internet 2024 - Prodigit" decoding="async" srcset="https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-12-11.46.05-A-sleek-and-modern-website-interface-displayed-on-a-computer-screen-symbolizing-the-digital-transformation-and-online-presence-of-businesses-in-2024.png 1024w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-12-11.46.05-A-sleek-and-modern-website-interface-displayed-on-a-computer-screen-symbolizing-the-digital-transformation-and-online-presence-of-businesses-in-2024-300x300.png 300w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-12-11.46.05-A-sleek-and-modern-website-interface-displayed-on-a-computer-screen-symbolizing-the-digital-transformation-and-online-presence-of-businesses-in-2024-150x150.png 150w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-12-11.46.05-A-sleek-and-modern-website-interface-displayed-on-a-computer-screen-symbolizing-the-digital-transformation-and-online-presence-of-businesses-in-2024-768x768.png 768w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-12-11.46.05-A-sleek-and-modern-website-interface-displayed-on-a-computer-screen-symbolizing-the-digital-transformation-and-online-presence-of-businesses-in-2024-600x600.png 600w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-12-11.46.05-A-sleek-and-modern-website-interface-displayed-on-a-computer-screen-symbolizing-the-digital-transformation-and-online-presence-of-businesses-in-2024-100x100.png 100w" sizes="(max-width: 800px) 100vw, 800px" /></a><p>Introduction : En 2024, la présence en ligne est devenue un impératif pour toute entreprise cherchant à prospérer dans un environnement commercial de plus en plus numérisé. La création d&#8217;un site internet est un pilier fondamental pour améliorer la visibilité, simplifier la gestion, digitaliser les activités et booster le business. Amélioration de la Visibilité : [&hellip;]</p></article><article class="post"><h2 class="entry-title"><a href="../../revolution-numerique-2024-propulsez-votre-business-en-ligne-avec-un-site-web-innovant">Révolution Numérique 2024 : Propulsez Votre Business en Ligne avec un Site Web Innovant</a></h2><a href="../../revolution-numerique-2024-propulsez-votre-business-en-ligne-avec-un-site-web-innovant"><img width="800" height="800" src="../../wp-content/uploads/2024/01/DALL%c2%b7E-2024-01-05-12.29.58-The-same-futuristic-image-depicting-the-concept-of-website-creation-in-2024-but-with-the-addition-of-the-year-2024-prominently-displayed-in-a-moder.png" class="attachment-large size-large wp-post-image" alt="Création site internet à petit Prix - Prodigit" decoding="async" srcset="https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-05-12.29.58-The-same-futuristic-image-depicting-the-concept-of-website-creation-in-2024-but-with-the-addition-of-the-year-2024-prominently-displayed-in-a-moder.png 1024w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-05-12.29.58-The-same-futuristic-image-depicting-the-concept-of-website-creation-in-2024-but-with-the-addition-of-the-year-2024-prominently-displayed-in-a-moder-300x300.png 300w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-05-12.29.58-The-same-futuristic-image-depicting-the-concept-of-website-creation-in-2024-but-with-the-addition-of-the-year-2024-prominently-displayed-in-a-moder-150x150.png 150w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-05-12.29.58-The-same-futuristic-image-depicting-the-concept-of-website-creation-in-2024-but-with-the-addition-of-the-year-2024-prominently-displayed-in-a-moder-768x768.png 768w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-05-12.29.58-The-same-futuristic-image-depicting-the-concept-of-website-creation-in-2024-but-with-the-addition-of-the-year-2024-prominently-displayed-in-a-moder-600x600.png 600w, https://ofaweb.fr/wp-content/uploads/2024/01/DALL·E-2024-01-05-12.29.58-The-same-futuristic-image-depicting-the-concept-of-website-creation-in-2024-but-with-the-addition-of-the-year-2024-prominently-displayed-in-a-moder-100x100.png 100w" sizes="(max-width: 800px) 100vw, 800px" /></a><p>En 2024, la création d&#8217;un site internet est devenue une étape incontournable pour toute entreprise cherchant à établir sa présence dans le monde numérique. Avec la montée en puissance du commerce électronique et l&#8217;évolution constante des technologies, avoir un site web n&#8217;est plus une option, mais une nécessité absolue pour rester compétitif. L&#8217;Impact de la [&hellip;]</p></article><article class="post"><h2 class="entry-title"><a href="../../reinventez-votre-presence-en-ligne-la-magie-de-la-refonte-de-site-web-pour-un-impact-seo-inegale">Réinventez Votre Présence en Ligne : La Magie de la Refonte de Site Web pour un Impact SEO Inégalé</a></h2><a href="../../reinventez-votre-presence-en-ligne-la-magie-de-la-refonte-de-site-web-pour-un-impact-seo-inegale"><img width="800" height="800" src="../../wp-content/uploads/2023/12/DALL%c2%b7E-2023-12-25-12.14.57-A-visually-appealing-and-modern-image-representing-the-transformation-and-modernization-of-a-website-symbolizing-website-redesign-and-its-impact-on-S.png" class="attachment-large size-large wp-post-image" alt="Référencement - Création site internet - Prodigit" decoding="async" srcset="https://ofaweb.fr/wp-content/uploads/2023/12/DALL·E-2023-12-25-12.14.57-A-visually-appealing-and-modern-image-representing-the-transformation-and-modernization-of-a-website-symbolizing-website-redesign-and-its-impact-on-S.png 1024w, https://ofaweb.fr/wp-content/uploads/2023/12/DALL·E-2023-12-25-12.14.57-A-visually-appealing-and-modern-image-representing-the-transformation-and-modernization-of-a-website-symbolizing-website-redesign-and-its-impact-on-S-300x300.png 300w, https://ofaweb.fr/wp-content/uploads/2023/12/DALL·E-2023-12-25-12.14.57-A-visually-appealing-and-modern-image-representing-the-transformation-and-modernization-of-a-website-symbolizing-website-redesign-and-its-impact-on-S-150x150.png 150w, https://ofaweb.fr/wp-content/uploads/2023/12/DALL·E-2023-12-25-12.14.57-A-visually-appealing-and-modern-image-representing-the-transformation-and-modernization-of-a-website-symbolizing-website-redesign-and-its-impact-on-S-768x768.png 768w, https://ofaweb.fr/wp-content/uploads/2023/12/DALL·E-2023-12-25-12.14.57-A-visually-appealing-and-modern-image-representing-the-transformation-and-modernization-of-a-website-symbolizing-website-redesign-and-its-impact-on-S-600x600.png 600w, https://ofaweb.fr/wp-content/uploads/2023/12/DALL·E-2023-12-25-12.14.57-A-visually-appealing-and-modern-image-representing-the-transformation-and-modernization-of-a-website-symbolizing-website-redesign-and-its-impact-on-S-100x100.png 100w" sizes="(max-width: 800px) 100vw, 800px" /></a><p>Introduction : Dans l&#8217;univers numérique en constante évolution, la refonte de votre site internet n&#8217;est pas simplement une mise à jour esthétique, c&#8217;est une renaissance stratégique. Cet article explore pourquoi et comment une refonte de site peut revitaliser votre présence en ligne et booster significativement votre SEO. Pourquoi la Refonte ? La Refonte en Action [&hellip;]</p></article><article class="post"><h2 class="entry-title"><a href="../../cms-en-action-comment-wordpress-revolutionne-le-referencement-web-en-2023">CMS en Action : Comment WordPress Révolutionne le Référencement Web en 2023</a></h2><a href="../../cms-en-action-comment-wordpress-revolutionne-le-referencement-web-en-2023"><img width="800" height="534" src="../../wp-content/uploads/2023/10/scott-graham-5fNmWej4tAA-unsplash-1024x683.jpg" class="attachment-large size-large wp-post-image" alt="Business en ligne - Création site internet - Prodigit" decoding="async" srcset="https://ofaweb.fr/wp-content/uploads/2023/10/scott-graham-5fNmWej4tAA-unsplash-1024x683.jpg 1024w, https://ofaweb.fr/wp-content/uploads/2023/10/scott-graham-5fNmWej4tAA-unsplash-300x200.jpg 300w, https://ofaweb.fr/wp-content/uploads/2023/10/scott-graham-5fNmWej4tAA-unsplash-768x513.jpg 768w, https://ofaweb.fr/wp-content/uploads/2023/10/scott-graham-5fNmWej4tAA-unsplash-1536x1025.jpg 1536w, https://ofaweb.fr/wp-content/uploads/2023/10/scott-graham-5fNmWej4tAA-unsplash-2048x1367.jpg 2048w, https://ofaweb.fr/wp-content/uploads/2023/10/scott-graham-5fNmWej4tAA-unsplash-600x400.jpg 600w" sizes="(max-width: 800px) 100vw, 800px" /></a><p>L&#8217;univers en constante évolution du référencement (SEO) est constamment influencé par des facteurs variés. En 2023, WordPress, l&#8217;un des CMS (systèmes de gestion de contenu) les plus populaires au monde, joue un rôle crucial dans la révolution du référencement web. Ce CMS polyvalent et puissant offre de nombreuses fonctionnalités qui peuvent considérablement améliorer la visibilité [&hellip;]</p></article><article class="post"><h2 class="entry-title"><a href="../../les-signes-revelateurs-pour-une-refonte-de-votre-site-internet">Les signes révélateurs pour une refonte de votre site internet</a></h2><a href="../../les-signes-revelateurs-pour-une-refonte-de-votre-site-internet"><img width="800" height="800" src="../../wp-content/uploads/2023/07/pexels-ovan-57690-1024x1024.jpg" class="attachment-large size-large wp-post-image" alt="Web design - Prodigit" decoding="async" srcset="https://ofaweb.fr/wp-content/uploads/2023/07/pexels-ovan-57690-1024x1024.jpg 1024w, https://ofaweb.fr/wp-content/uploads/2023/07/pexels-ovan-57690-300x300.jpg 300w, https://ofaweb.fr/wp-content/uploads/2023/07/pexels-ovan-57690-150x150.jpg 150w, https://ofaweb.fr/wp-content/uploads/2023/07/pexels-ovan-57690-768x768.jpg 768w, https://ofaweb.fr/wp-content/uploads/2023/07/pexels-ovan-57690-1536x1536.jpg 1536w, https://ofaweb.fr/wp-content/uploads/2023/07/pexels-ovan-57690-2048x2048.jpg 2048w, https://ofaweb.fr/wp-content/uploads/2023/07/pexels-ovan-57690-600x600.jpg 600w, https://ofaweb.fr/wp-content/uploads/2023/07/pexels-ovan-57690-100x100.jpg 100w" sizes="(max-width: 800px) 100vw, 800px" /></a><p>L&#8217;importance d&#8217;une refonte de site web : Votre site web joue un rôle essentiel dans la génération de leads, la conversion des visiteurs en clients et la construction de votre image de marque. Cependant, avec l&#8217;évolution rapide de la technologie et des attentes des utilisateurs, il peut être nécessaire de le refondre pour rester compétitif [&hellip;]</p></article><article class="post"><h2 class="entry-title"><a href="../../pourquoi-la-maintenance-de-son-site-internet-est-elle-importante">Pourquoi la maintenance de son site internet est-elle importante ?</a></h2><a href="../../pourquoi-la-maintenance-de-son-site-internet-est-elle-importante"><img width="800" height="546" src="../../wp-content/uploads/2023/05/Capture-decran-2023-05-25-a-14.16.44.png" class="attachment-large size-large wp-post-image" alt="Maintenance Site Internet" decoding="async" srcset="https://ofaweb.fr/wp-content/uploads/2023/05/Capture-decran-2023-05-25-a-14.16.44.png 844w, https://ofaweb.fr/wp-content/uploads/2023/05/Capture-decran-2023-05-25-a-14.16.44-300x205.png 300w, https://ofaweb.fr/wp-content/uploads/2023/05/Capture-decran-2023-05-25-a-14.16.44-768x524.png 768w, https://ofaweb.fr/wp-content/uploads/2023/05/Capture-decran-2023-05-25-a-14.16.44-600x409.png 600w" sizes="(max-width: 800px) 100vw, 800px" /></a><p>Quelles sont les raisons ? Tout d’abord, un site internet non entretenu peut être sujet à de nombreuses attaques informatiques ou de virus. Mais cela peut être évité par une maintenance régulière du système de sécurité ainsi que la correction des failles de sécurité. La maintenance régulière pourrait aussi permettre aux clients une meilleure expérience [&hellip;]</p></article><article class="post"><h2 class="entry-title"><a href="../../avec-wordpress-et-woocommerce-facilitez-la-creation-de-votre-boutique-en-ligne">Avec WordPress et WooCommerce, facilitez la création de votre boutique en ligne</a></h2><a href="../../avec-wordpress-et-woocommerce-facilitez-la-creation-de-votre-boutique-en-ligne"><img width="585" height="439" src="../../wp-content/uploads/2023/01/10-1-e1675156052807.png" class="attachment-large size-large wp-post-image" alt="WooCommerce - WordPress - Création site internet" decoding="async" srcset="https://ofaweb.fr/wp-content/uploads/2023/01/10-1-e1675156052807.png 585w, https://ofaweb.fr/wp-content/uploads/2023/01/10-1-e1675156052807-300x225.png 300w" sizes="(max-width: 585px) 100vw, 585px" /></a><p>En utilisant WooCommerce avec WordPress, vous pouvez créer et gérer une boutique en ligne&#8230;</p></article></div><nav class="pagination"><div class="nav-previous"><a href="page/2" ><span class="meta-nav">&larr;</span> plus ancien</a></div><div class="nav-next"></div></nav></main><div data-elementor-type="footer" data-elementor-id="2460" class="elementor elementor-2460 elementor-location-footer" data-elementor-post-type="elementor_library"><section class="elementor-section elementor-top-section elementor-element elementor-element-55b4b07f elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="55b4b07f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d0aea91" data-id="d0aea91" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><section class="elementor-section elementor-inner-section elementor-element elementor-element-63b9071c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="63b9071c" data-element_type="section"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-55c7bd5f" data-id="55c7bd5f" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-1b2161b3 elementor-widget elementor-widget-image" data-id="1b2161b3" data-element_type="widget" data-widget_type="image.default"><div class="elementor-widget-container"> <img src="../../wp-content/uploads/elementor/thumbs/Fichier-2-q12yymo2am9du2vdsctfta3hrgg511trlrsn438g0u.png" title="logo &#8211; Prodigit &#8211; Création site internet" alt="logo - Prodigit - Création site internet" loading="lazy" /></div></div><div class="elementor-element elementor-element-5c824a63 elementor-widget elementor-widget-text-editor" data-id="5c824a63" data-element_type="widget" data-widget_type="text-editor.default"><div class="elementor-widget-container"><style>/*! elementor - v3.19.0 - 07-02-2024 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style><p><a href="https://partnernetwork.ionos.fr/partner/ofa.web"><br /><img class="aligncenter" src="https://images-2.partnerportal.ionos.fr/items/576b7c3e-b889-4c81-a72e-453753d2709e/profiles/68d64ae2-04ab-4628-ac7f-d55998e14e76/badges/normal_white" alt="IONOS - Partenaire officiel" width="103" height="60" /></a></p><p><a title="" href="https://www.francenum.gouv.fr/activateurs/ofa-web" target="_blank" rel="noopener"><img loading="lazy" class="wp-image-4593 aligncenter" src="../../wp-content/uploads/2023/07/marques-filles-Activateur-300x273.jpg" alt="" width="105" height="96" /></a></p><p><a title="" href="https://lespepitestech.com/startup-de-la-french-tech/ofa-web" target="_blank" rel="noopener"><img loading="lazy" class="wp-image-4590 aligncenter" src="../../wp-content/uploads/2023/07/Logo-LPT-Entier-01-white.png" alt="" width="97" height="90" /></a></p></div></div></div></div><div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1ec1e09" data-id="1ec1e09" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-7ce7fed elementor-widget elementor-widget-heading" data-id="7ce7fed" data-element_type="widget" data-widget_type="heading.default"><div class="elementor-widget-container"><style>/*! elementor - v3.19.0 - 07-02-2024 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default"><u>Aide Et supports</u></h2></div></div><div class="elementor-element elementor-element-3a2d0e22 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="3a2d0e22" data-element_type="widget" data-widget_type="icon-list.default"><div class="elementor-widget-container"><link rel="stylesheet" href="../../wp-content/plugins/elementor/assets/css/widget-icon-list.min.css"><ul class="elementor-icon-list-items"><li class="elementor-icon-list-item"> <a href="../../comment-ca-marche"> <span class="elementor-icon-list-text">Comment ça marche ?</span> </a></li><li class="elementor-icon-list-item"> <a href="../../foire-aux-questions"> <span class="elementor-icon-list-text">Foire aux questions</span> </a></li><li class="elementor-icon-list-item"> <a href="../../trouver-un-client"> <span class="elementor-icon-list-text">Trouver un client</span> </a></li><li class="elementor-icon-list-item"> <a href="../../blog"> <span class="elementor-icon-list-text">Blog</span> </a></li></ul></div></div><div class="elementor-element elementor-element-09e43d4 elementor-mobile-align-center elementor-align-center elementor-invisible elementor-widget elementor-widget-button" data-id="09e43d4" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="button.default"><div class="elementor-widget-container"><div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-md" href="../../devenir-partenaire"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon elementor-align-icon-left"> <i aria-hidden="true" class="far fa-handshake"></i> </span> <span class="elementor-button-text">Dévenir Partenaire</span> </span> </a></div></div></div><div class="elementor-element elementor-element-dd8e1fd elementor-hidden-tablet elementor-widget elementor-widget-heading" data-id="dd8e1fd" data-element_type="widget" data-widget_type="heading.default"><div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default">Newsletter</h2></div></div><div class="elementor-element elementor-element-9f22ade elementor-hidden-tablet elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="9f22ade" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Suivant&quot;,&quot;step_previous_label&quot;:&quot;Pr\u00e9c\u00e9dent&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default"><div class="elementor-widget-container"><style>/*! elementor-pro - v3.19.0 - 07-02-2024 */
.elementor-button.elementor-hidden,.elementor-hidden{display:none}.e-form__step{width:100%}.e-form__step:not(.elementor-hidden){display:flex;flex-wrap:wrap}.e-form__buttons{flex-wrap:wrap}.e-form__buttons,.e-form__buttons__wrapper{display:flex}.e-form__indicators{display:flex;justify-content:space-between;align-items:center;flex-wrap:nowrap;font-size:13px;margin-bottom:var(--e-form-steps-indicators-spacing)}.e-form__indicators__indicator{display:flex;flex-direction:column;align-items:center;justify-content:center;flex-basis:0;padding:0 var(--e-form-steps-divider-gap)}.e-form__indicators__indicator__progress{width:100%;position:relative;background-color:var(--e-form-steps-indicator-progress-background-color);border-radius:var(--e-form-steps-indicator-progress-border-radius);overflow:hidden}.e-form__indicators__indicator__progress__meter{width:var(--e-form-steps-indicator-progress-meter-width,0);height:var(--e-form-steps-indicator-progress-height);line-height:var(--e-form-steps-indicator-progress-height);padding-right:15px;border-radius:var(--e-form-steps-indicator-progress-border-radius);background-color:var(--e-form-steps-indicator-progress-color);color:var(--e-form-steps-indicator-progress-meter-color);text-align:right;transition:width .1s linear}.e-form__indicators__indicator:first-child{padding-left:0}.e-form__indicators__indicator:last-child{padding-right:0}.e-form__indicators__indicator--state-inactive{color:var(--e-form-steps-indicator-inactive-primary-color,#c2cbd2)}.e-form__indicators__indicator--state-inactive [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-inactive-secondary-color,#fff)}.e-form__indicators__indicator--state-inactive object,.e-form__indicators__indicator--state-inactive svg{fill:var(--e-form-steps-indicator-inactive-primary-color,#c2cbd2)}.e-form__indicators__indicator--state-active{color:var(--e-form-steps-indicator-active-primary-color,#39b54a);border-color:var(--e-form-steps-indicator-active-secondary-color,#fff)}.e-form__indicators__indicator--state-active [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-active-secondary-color,#fff)}.e-form__indicators__indicator--state-active object,.e-form__indicators__indicator--state-active svg{fill:var(--e-form-steps-indicator-active-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed{color:var(--e-form-steps-indicator-completed-secondary-color,#fff)}.e-form__indicators__indicator--state-completed [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-completed-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed .e-form__indicators__indicator__label{color:var(--e-form-steps-indicator-completed-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed .e-form__indicators__indicator--shape-none{color:var(--e-form-steps-indicator-completed-primary-color,#39b54a);background-color:initial}.e-form__indicators__indicator--state-completed object,.e-form__indicators__indicator--state-completed svg{fill:var(--e-form-steps-indicator-completed-secondary-color,#fff)}.e-form__indicators__indicator__icon{width:var(--e-form-steps-indicator-padding,30px);height:var(--e-form-steps-indicator-padding,30px);font-size:var(--e-form-steps-indicator-icon-size);border-width:1px;border-style:solid;display:flex;justify-content:center;align-items:center;overflow:hidden;margin-bottom:10px}.e-form__indicators__indicator__icon img,.e-form__indicators__indicator__icon object,.e-form__indicators__indicator__icon svg{width:var(--e-form-steps-indicator-icon-size);height:auto}.e-form__indicators__indicator__icon .e-font-icon-svg{height:1em}.e-form__indicators__indicator__number{width:var(--e-form-steps-indicator-padding,30px);height:var(--e-form-steps-indicator-padding,30px);border-width:1px;border-style:solid;display:flex;justify-content:center;align-items:center;margin-bottom:10px}.e-form__indicators__indicator--shape-circle{border-radius:50%}.e-form__indicators__indicator--shape-square{border-radius:0}.e-form__indicators__indicator--shape-rounded{border-radius:5px}.e-form__indicators__indicator--shape-none{border:0}.e-form__indicators__indicator__label{text-align:center}.e-form__indicators__indicator__separator{width:100%;height:var(--e-form-steps-divider-width);background-color:#babfc5}.e-form__indicators--type-icon,.e-form__indicators--type-icon_text,.e-form__indicators--type-number,.e-form__indicators--type-number_text{align-items:flex-start}.e-form__indicators--type-icon .e-form__indicators__indicator__separator,.e-form__indicators--type-icon_text .e-form__indicators__indicator__separator,.e-form__indicators--type-number .e-form__indicators__indicator__separator,.e-form__indicators--type-number_text .e-form__indicators__indicator__separator{margin-top:calc(var(--e-form-steps-indicator-padding, 30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2)}.elementor-field-type-hidden{display:none}.elementor-field-type-html{display:inline-block}.elementor-field-type-tel input{direction:inherit}.elementor-login .elementor-lost-password,.elementor-login .elementor-remember-me{font-size:.85em}.elementor-field-type-recaptcha_v3 .elementor-field-label{display:none}.elementor-field-type-recaptcha_v3 .grecaptcha-badge{z-index:1}.elementor-button .elementor-form-spinner{order:3}.elementor-form .elementor-button>span{display:flex;justify-content:center;align-items:center}.elementor-form .elementor-button .elementor-button-text{white-space:normal;flex-grow:0}.elementor-form .elementor-button svg{height:auto}.elementor-form .elementor-button .e-font-icon-svg{height:1em}.elementor-select-wrapper .select-caret-down-wrapper{position:absolute;top:50%;transform:translateY(-50%);inset-inline-end:10px;pointer-events:none;font-size:11px}.elementor-select-wrapper .select-caret-down-wrapper svg{display:unset;width:1em;aspect-ratio:unset;fill:currentColor}.elementor-select-wrapper .select-caret-down-wrapper i{font-size:19px;line-height:2}.elementor-select-wrapper.remove-before:before{content:""!important}</style><form class="elementor-form" method="post" name="Newsletter"> <input type="hidden" name="post_id" value="2460"/> <input type="hidden" name="form_id" value="9f22ade"/> <input type="hidden" name="referer_title" value="création site internet" /><div class="elementor-form-fields-wrapper elementor-labels-"><div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required"> <label for="form-field-name" class="elementor-field-label elementor-screen-only"> Email </label> <input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Adresse Mail" required="required" aria-required="true"></div><div class="elementor-field-type-recaptcha_v3 elementor-field-group elementor-column elementor-field-group-field_3f7954e elementor-col-100 recaptcha_v3-bottomright"><div class="elementor-field" id="form-field-field_3f7954e"><div class="elementor-g-recaptcha" data-sitekey="6LcZZesUAAAAADc5N8bF27XoG7OvHMY10jnsGFdN" data-type="v3" data-action="Form" data-badge="bottomright" data-size="invisible"></div></div></div><div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons"> <button type="submit" class="elementor-button elementor-size-sm"> <span > <span class="elementor-align-icon-left elementor-button-icon"> <i aria-hidden="true" class="far fa-paper-plane"></i> </span> <span class="elementor-button-text">M'informer sur les nouveautés</span> </span> </button></div></div></form></div></div></div></div><div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-796881ca" data-id="796881ca" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-45ba3ac elementor-widget elementor-widget-heading" data-id="45ba3ac" data-element_type="widget" data-widget_type="heading.default"><div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default"><u>Liens rapides</u></h2></div></div><div class="elementor-element elementor-element-35ff97d0 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="35ff97d0" data-element_type="widget" data-widget_type="icon-list.default"><div class="elementor-widget-container"><ul class="elementor-icon-list-items"><li class="elementor-icon-list-item"> <a href="/#realisations"> <span class="elementor-icon-list-text">Nos réalisations</span> </a></li><li class="elementor-icon-list-item"> <a href="../../tarifs"> <span class="elementor-icon-list-text">Tarifs</span> </a></li><li class="elementor-icon-list-item"> <a href="../../mon-projet"> <span class="elementor-icon-list-text">Devis/Projet</span> </a></li><li class="elementor-icon-list-item"> <a href="../../google-my-business"> <span class="elementor-icon-list-text">Google My Business</span> </a></li><li class="elementor-icon-list-item"> <a href="../../la-boutique-web"> <span class="elementor-icon-list-text">La Boutique Web</span> </a></li><li class="elementor-icon-list-item"> <a href="../../contact"> <span class="elementor-icon-list-text">Contact</span> </a></li></ul></div></div><div class="elementor-element elementor-element-d621152 elementor-widget elementor-widget-text-editor" data-id="d621152" data-element_type="widget" data-widget_type="text-editor.default"><div class="elementor-widget-container"><p><a href="https://g.page/r/CTmioBrRANiEEAg/review" data-wp-editing="1"><br /><img loading="lazy" class=" wp-image-3162 aligncenter" src="../../wp-content/uploads/2022/06/Avis-Google-My-Business.png" alt="Google Avis - Prodigit" width="199" height="82" /></a></p></div></div></div></div><div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3fdf1e6e" data-id="3fdf1e6e" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-34e6de14 elementor-widget elementor-widget-heading" data-id="34e6de14" data-element_type="widget" data-widget_type="heading.default"><div class="elementor-widget-container"><h2 class="elementor-heading-title elementor-size-default"><u>Nous contacter</u></h2></div></div><div class="elementor-element elementor-element-b2f036f elementor-widget elementor-widget-text-editor" data-id="b2f036f" data-element_type="widget" data-widget_type="text-editor.default"><div class="elementor-widget-container"><center><img loading="lazy" class="alignnone  wp-image-246" src="../../wp-content/uploads/2020/08/c9b7ffa8-perf-wp-theme-mail-2.svg" alt="" width="23" height="23" />  contact@prodigit.fr</center><p> </p></div></div><div class="elementor-element elementor-element-3ab24264 elementor-widget elementor-widget-text-editor" data-id="3ab24264" data-element_type="widget" data-widget_type="text-editor.default"><div class="elementor-widget-container"><center><img loading="lazy" class="alignnone wp-image-247" src="../../wp-content/uploads/2020/08/fcbe8d3e-perf-wp-theme-phone-2.svg" alt="" width="23" height="28" />  09 70 70 79 39</center></div></div><div class="elementor-element elementor-element-8938b2f elementor-grid-1 elementor-hidden-tablet elementor-grid-tablet-1 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-card-shadow-yes elementor-posts__hover-gradient elementor-widget elementor-widget-posts" data-id="8938b2f" data-element_type="widget" data-settings="{&quot;cards_columns&quot;:&quot;1&quot;,&quot;cards_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;cards_columns_tablet&quot;:&quot;1&quot;,&quot;cards_columns_mobile&quot;:&quot;1&quot;,&quot;cards_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;cards_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="posts.cards"><div class="elementor-widget-container"><link rel="stylesheet" href="../../wp-content/plugins/elementor-pro/assets/css/widget-posts.min.css"><div class="elementor-posts-container elementor-posts elementor-posts--skin-cards elementor-grid"><article class="elementor-post elementor-grid-item post-4979 post type-post status-publish format-standard has-post-thumbnail hentry category-creation-site-internet category-wordpress"><div class="elementor-post__card"> <a class="elementor-post__thumbnail__link" href="../../creation-de-site-internet-pas-cher-guide-complet-avec-wordpress-et-ofa-web" tabindex="-1" ><div class="elementor-post__thumbnail"><img loading="lazy" width="1024" height="1024" src="../../wp-content/uploads/2024/02/DALL%c2%b7E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in.webp" class="attachment-full size-full wp-image-4980" alt="Création site internet pas cher avec Wordpress et Prodigit" decoding="async" srcset="https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in.webp 1024w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in-300x300.webp 300w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in-150x150.webp 150w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in-768x768.webp 768w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in-600x600.webp 600w, https://ofaweb.fr/wp-content/uploads/2024/02/DALL·E-2024-02-12-10.59.11-A-vibrant-and-engaging-digital-collage-showcasing-the-process-of-creating-an-affordable-website.-The-image-features-a-laptop-displaying-a-WordPress-in-100x100.webp 100w" sizes="(max-width: 1024px) 100vw, 1024px" /></div></a><div class="elementor-post__badge">création site internet</div><div class="elementor-post__text"><h2 class="elementor-post__title"> <a href="../../creation-de-site-internet-pas-cher-guide-complet-avec-wordpress-et-ofa-web" > Création de Site Internet Pas Cher : Guide Complet avec WordPress et Prodigit </a></h2> <a class="elementor-post__read-more" href="../../creation-de-site-internet-pas-cher-guide-complet-avec-wordpress-et-ofa-web" aria-label="En savoir plus sur Création de Site Internet Pas Cher : Guide Complet avec WordPress et Prodigit" tabindex="-1" > Lire la suite » </a></div></div></article></div></div></div></div></div></div></section><section class="elementor-section elementor-inner-section elementor-element elementor-element-26f9bb8b elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="26f9bb8b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2740d031" data-id="2740d031" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-1ec97205 elementor-widget elementor-widget-text-editor" data-id="1ec97205" data-element_type="widget" data-widget_type="text-editor.default"><div class="elementor-widget-container"><p>Prodigit © One For All | 2019 &#8211; 2023.</p></div></div></div></div><div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-563c690f" data-id="563c690f" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-770dba1a elementor-widget elementor-widget-text-editor" data-id="770dba1a" data-element_type="widget" data-widget_type="text-editor.default"><div class="elementor-widget-container"><p><a href="../../politique-de-confidentialite" target="_blank" rel="noopener"><span style="color: #ffffff;">Politique de confidentialité</span></a></p></div></div></div></div><div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2b46474" data-id="2b46474" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-2d0a0566 elementor-widget elementor-widget-text-editor" data-id="2d0a0566" data-element_type="widget" data-widget_type="text-editor.default"><div class="elementor-widget-container"><p><a href="../../mentions-legales" target="_blank" rel="noopener"><span style="color: #ffffff;">Mentions légales</span></a></p></div></div></div></div><div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-272317ba" data-id="272317ba" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-35d5642a elementor-shape-circle elementor-widget__width-initial elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="35d5642a" data-element_type="widget" data-widget_type="social-icons.default"><div class="elementor-widget-container"><style>/*! elementor - v3.19.0 - 07-02-2024 */
.elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container{line-height:1;font-size:0}.elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid{display:inline-grid}.elementor-widget-social-icons .elementor-grid{grid-column-gap:var(--grid-column-gap,5px);grid-row-gap:var(--grid-row-gap,5px);grid-template-columns:var(--grid-template-columns);justify-content:var(--justify-content,center);justify-items:var(--justify-content,center)}.elementor-icon.elementor-social-icon{font-size:var(--icon-size,25px);line-height:var(--icon-size,25px);width:calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em));height:calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em))}.elementor-social-icon{--e-social-icon-icon-color:#fff;display:inline-flex;background-color:#69727d;align-items:center;justify-content:center;text-align:center;cursor:pointer}.elementor-social-icon i{color:var(--e-social-icon-icon-color)}.elementor-social-icon svg{fill:var(--e-social-icon-icon-color)}.elementor-social-icon:last-child{margin:0}.elementor-social-icon:hover{opacity:.9;color:#fff}.elementor-social-icon-android{background-color:#a4c639}.elementor-social-icon-apple{background-color:#999}.elementor-social-icon-behance{background-color:#1769ff}.elementor-social-icon-bitbucket{background-color:#205081}.elementor-social-icon-codepen{background-color:#000}.elementor-social-icon-delicious{background-color:#39f}.elementor-social-icon-deviantart{background-color:#05cc47}.elementor-social-icon-digg{background-color:#005be2}.elementor-social-icon-dribbble{background-color:#ea4c89}.elementor-social-icon-elementor{background-color:#d30c5c}.elementor-social-icon-envelope{background-color:#ea4335}.elementor-social-icon-facebook,.elementor-social-icon-facebook-f{background-color:#3b5998}.elementor-social-icon-flickr{background-color:#0063dc}.elementor-social-icon-foursquare{background-color:#2d5be3}.elementor-social-icon-free-code-camp,.elementor-social-icon-freecodecamp{background-color:#006400}.elementor-social-icon-github{background-color:#333}.elementor-social-icon-gitlab{background-color:#e24329}.elementor-social-icon-globe{background-color:#69727d}.elementor-social-icon-google-plus,.elementor-social-icon-google-plus-g{background-color:#dd4b39}.elementor-social-icon-houzz{background-color:#7ac142}.elementor-social-icon-instagram{background-color:#262626}.elementor-social-icon-jsfiddle{background-color:#487aa2}.elementor-social-icon-link{background-color:#818a91}.elementor-social-icon-linkedin,.elementor-social-icon-linkedin-in{background-color:#0077b5}.elementor-social-icon-medium{background-color:#00ab6b}.elementor-social-icon-meetup{background-color:#ec1c40}.elementor-social-icon-mixcloud{background-color:#273a4b}.elementor-social-icon-odnoklassniki{background-color:#f4731c}.elementor-social-icon-pinterest{background-color:#bd081c}.elementor-social-icon-product-hunt{background-color:#da552f}.elementor-social-icon-reddit{background-color:#ff4500}.elementor-social-icon-rss{background-color:#f26522}.elementor-social-icon-shopping-cart{background-color:#4caf50}.elementor-social-icon-skype{background-color:#00aff0}.elementor-social-icon-slideshare{background-color:#0077b5}.elementor-social-icon-snapchat{background-color:#fffc00}.elementor-social-icon-soundcloud{background-color:#f80}.elementor-social-icon-spotify{background-color:#2ebd59}.elementor-social-icon-stack-overflow{background-color:#fe7a15}.elementor-social-icon-steam{background-color:#00adee}.elementor-social-icon-stumbleupon{background-color:#eb4924}.elementor-social-icon-telegram{background-color:#2ca5e0}.elementor-social-icon-thumb-tack{background-color:#1aa1d8}.elementor-social-icon-tripadvisor{background-color:#589442}.elementor-social-icon-tumblr{background-color:#35465c}.elementor-social-icon-twitch{background-color:#6441a5}.elementor-social-icon-twitter{background-color:#1da1f2}.elementor-social-icon-viber{background-color:#665cac}.elementor-social-icon-vimeo{background-color:#1ab7ea}.elementor-social-icon-vk{background-color:#45668e}.elementor-social-icon-weibo{background-color:#dd2430}.elementor-social-icon-weixin{background-color:#31a918}.elementor-social-icon-whatsapp{background-color:#25d366}.elementor-social-icon-wordpress{background-color:#21759b}.elementor-social-icon-xing{background-color:#026466}.elementor-social-icon-yelp{background-color:#af0606}.elementor-social-icon-youtube{background-color:#cd201f}.elementor-social-icon-500px{background-color:#0099e5}.elementor-shape-rounded .elementor-icon.elementor-social-icon{border-radius:10%}.elementor-shape-circle .elementor-icon.elementor-social-icon{border-radius:50%}</style><div class="elementor-social-icons-wrapper elementor-grid"> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-square elementor-repeater-item-a7b433b" href="https://www.facebook.com/OFAWeb/" target="_blank"> <span class="elementor-screen-only">Facebook-square</span> <i class="fab fa-facebook-square"></i> </a> </span> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-c1343cc" href="https://www.instagram.com/ofaweb/" target="_blank"> <span class="elementor-screen-only">Instagram</span> <i class="fab fa-instagram"></i> </a> </span> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-4d38929" href="https://twitter.com/ofa_web" target="_blank"> <span class="elementor-screen-only">Twitter</span> <i class="fab fa-twitter"></i> </a> </span> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-snapchat elementor-repeater-item-9578845" href="https://www.snapchat.com/add/ofaweb?share_id=fbqzu9PHpis&amp;locale=fr-FR" target="_blank"> <span class="elementor-screen-only">Snapchat</span> <i class="fab fa-snapchat"></i> </a> </span> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-tiktok elementor-repeater-item-43b2315" href="https://www.tiktok.com/@prodigit" target="_blank"> <span class="elementor-screen-only">Tiktok</span> <i class="fab fa-tiktok"></i> </a> </span> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-06d3821" href="https://www.linkedin.com/company/ofa-web" target="_blank"> <span class="elementor-screen-only">Linkedin</span> <i class="fab fa-linkedin"></i> </a> </span> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-821f0b0" href="https://www.youtube.com/channel/UC9HmqFOP6aZepJhIfIsHsvg" target="_blank"> <span class="elementor-screen-only">Youtube</span> <i class="fab fa-youtube"></i> </a> </span></div></div></div></div></div></div></section><div class="elementor-element elementor-element-bf6a5e9 elementor-widget elementor-widget-html" data-id="bf6a5e9" data-element_type="widget" data-widget_type="html.default"><div class="elementor-widget-container"><head><meta charset="UTF-8"><style>@media only screen and (min-width: 701px) {


.container {
  position: fixed;
  bottom: 25px; /* la hauteur du bouton plus une marge */
  right: 50px; /* la largeur du bouton plus une marge */
  /* autres styles... */
  display: none; /* Commencez avec le conteneur caché */
  background-color: white;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.25);
  border-radius: 15px;
  margin: 70px auto;
  padding: 5px 10px;
  max-width: 35%;
  transform-origin: bottom right; /* Assurez-vous que l'animation part du bouton */
}

.help-button img {
  width: 70px;   
}

.help-button {
    position: relative;
    /* Autres styles de votre bouton */
}

}

@media only screen and (max-width: 700px) {


.container {
  position: fixed;
  bottom: 10px; /* la hauteur du bouton plus une marge */
  right: 0; /* la largeur du bouton plus une marge */
  /* autres styles... */
  display: none; /* Commencez avec le conteneur caché */
  background-color: white;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.25);
  border-radius: 15px;
  margin: 70px auto;
  padding: 5px 10px;
  min-width: 100%;
  transform-origin: bottom right; /* Assurez-vous que l'animation part du bouton */
}
.help-button img {
  width: 50px;   
}
}


* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background-color: #000;
}

body,
button,
input,
select {
  font-family: Source Sans Pro, sans-serif;
}

/*nom*/

.name-tag {
  font-size: 0.8em; /* Taille de police plus petite */
  margin-bottom: 15px;
}

.name-user {
  text-align: right;
  margin-left: auto;
}

.name-bot {
  text-align: left;
  margin-right: auto;
}

/*bulle utilisateur*/

.chat-bubble {
  max-width: 70%;
  margin-bottom: 10px;
  padding: 10px;
  border-radius: 20px;
  word-wrap: break-word;

}

.user {
  background-color: #77b3f880; /* Couleur de fond pour les bulles de l'utilisateur */
  text-align: right;
  margin-left: auto; /* Aligner à droite */
}


.bot-response {
    font-size: 17px;
    line-height: 24px;
    border-radius: 20px;
    word-wrap: break-word;
    max-width: fit-content;
    padding: 15px 17px;
  background-color: #a693c7;
    color: rgb(0, 0, 0);
    margin-top: 10px;
}

.text[text-first] {
  border-bottom-left-radius: 5px;
  margin-top: 0;
}

.text[text-middle] {
  border-bottom-left-radius: 5px;
  border-top-left-radius: 5px;
}

.text[text-last] {
  border-top-left-radius: 5px;
}

.massage[data-user="true"] {
  display: flex;
  justify-content: flex-end;
}

.msgCaption {
  padding: 0 25px 10px !important;
  padding-top: 10px !important;
}

.user-response {
    background: rgb(0, 102, 255);
    color: rgb(255, 255, 255);
    font-size: 17px;
    line-height: 24px;
    border-radius: 20px;
    max-width: 250px;
    padding: 15px 17px;
    border-bottom-right-radius: 5px;
    word-break: break-all;
    white-space: normal;
}

.massage {
  padding: 0 25px 0px;
}



.captionBot img {
  width: 38px;
  height: 38px;
  border-radius: 100%;
}

.captionBot {
  display: flex;
  justify-content: space-between;
  padding: 0 25px;
  width: 117px;
  font-size: 14px;
  color: rgb(24, 25, 25);
}

a {
  text-decoration: none;
}


.InputMSG {
  outline: none;
  border: none;
  width: 100%;
  height: 50px;
  padding-left: 15px;
  font-size: 1.1rem;
}

.InputMSG::placeholder {
  font-size: 1.1rem;
  color: rgb(155, 166, 178);
}

.BoxSentMSG {
  display: flex;
  align-items: center;
  width: 100%;
  height: 50px;
}

.send-button {
background-color:#633ea1;
color: white;
border: none;
border-radius: 10%;
width: 30px;
height: 30px;
cursor: pointer;
font-size: 16px;
display: flex;
justify-content: center;
align-items: center;
margin: 10px;
}

.send-icon {
  display: flex;
  background-color: white;
  width: 26px;
  height: 26px;
  margin: 0 13px;
  cursor: pointer;
}

.ContentChat {
  background: rgb(234, 238, 243);
  width: 100%;
  height: 250px;
  overflow-y: scroll;
  padding: 20px;
}

.ContentChat::before {
  content: "";
  display: block;
  height: 20px;
  width: 100%;
}

.ContentChat::after {
  content: "";
  display: block;
  height: 20px;
  width: 100%;
}

.AvatarBot {
  display: grid;
  position: relative;
  justify-content: center;
  align-items: center;
}

.AvatarBot:after {
  content: "";
  display: block;
  width: 9px;
  height: 9px;
  border-radius: 100%;
  border: 1px solid rgb(255, 255, 255);
  background: rgb(105, 222, 64);
  position: absolute;
  bottom: 1px;
  right: 1px;
}

.InfoBot {
  margin-left: 17px;
}

.status {
  color: rgb(155, 166, 179);
}

.TitleBot {
  font-size: 24px;
  font-weight: 600;
  white-space: nowrap;
}

.AvatarBot img {
  width: 95px;
  height: 100%;
}

.top {
  display: flex;
  align-items: center;
  height: 120px;
  width: 100%;
  padding-left: 13px;
  -webkit-box-shadow: 0 9.5px 12.7px 0 rgba(0, 0, 0, 0.05);
  box-shadow: 0 9.5px 12.7px 0 rgba(0, 0, 0, 0.05);
}



.InputMSG:valid ~ .send-icon svg path {
  fill: #0066ff;
}

.none {
  display: none;
}

/**/

.tooltip {
    visibility: visible;
    width: auto; /* Largeur automatique en fonction du contenu */
    background-color: #f8f8f8; /* Couleur de fond claire */
    color: #333; /* Couleur de texte foncée */
    text-align: center;
    border-radius: 6px; /* Bords arrondis */
    padding: 8px 10px; /* Padding intérieur */
    position: absolute;
    z-index: 1;
    bottom: 110%;
    left: 50%;
    transform: translateX(-50%); /* Centrer horizontalement */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Ombre subtile */
    font-size: 0.9em; /* Taille de police ajustée */
    opacity: 1;
    white-space: nowrap; /* Empêcher le texte de passer à la ligne suivante */
}

/* Flèche de la bulle */
.tooltip::after {
    content: "";
    position: absolute;
    top: 100%; /* En bas de la bulle */
    left: 50%; /* Centrer la flèche */
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #f8f8f8 transparent transparent transparent; /* Flèche de la même couleur que la bulle */
}

#help-button{
background-color: #ffffff00;
}

.help-button {
  position: fixed;
  background-color: #ffffff00 !important;
  bottom: 0px;
  right: 30px;
  border: none;
    cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  /*animation: MoveUpDown 1.5s
  linear infinite;*/
  margin-bottom: 20px;
}

.help-button:hover {
  background-color: #ffffff00;
}



/*
@keyframes MoveUpDown {
0% {
  bottom: 0px;
}
20% {
  bottom: 5px;
}
  40% {
  bottom: 2px;
}
  60% {
  bottom: -4px
  }
      80% {
  bottom: -5px
  }
      100% {
  bottom: -1px
  }
}*/



#choiceButtons {
display: grid;
grid-template-columns: repeat(2, 1fr); /* Deux colonnes de largeur égale */
gap: 0 10px; /* Espacement entre les boutons */
margin-bottom: 20px; /* Espace avant le bouton 'Revenir' */
}




/*choice button*/
.choice-buttons{
text-align: center;
display: grid;
grid-template-columns: repeat(2, 1fr); /* Deux colonnes de largeur égale */
gap: 10px; /* Espacement entre les boutons */
margin-bottom: 20px; /* Espace avant le bouton 'Revenir' */
}

.choice-buttons button {
background-color: #633ea1; /* Couleur de fond du bouton */
color: white; /* Couleur du texte */
font-weight: 700;
border: none; /* Pas de bordure */
border-radius: 20px; /* Bords arrondis */
padding: 10px 20px; /* Espacement intérieur */
margin: 5px; /* Marge extérieure */
cursor: pointer; /* Curseur pointeur */
font-size: 13px; /* Taille de police */
transition: background-color 0.3s; /* Transition pour l'effet de survol */
text-align: center;
width: 100%; /* Les boutons occupent toute la largeur de la colonne */
}

.choice-buttons button:hover {
background-color: darken(#633ea180, 10%); /* Assombrir la couleur au survol */

}
/*Bulle de reponses*/
.bot-avatar {
width: 50px; /* Taille réduite de l'avatar */
height: 50px;
border-radius: 50%;
position: absolute; /* Position absolue pour le placer en dehors de la bulle */
left: -65px; /* Positionnement à gauche de la bulle */
top: 50%;
transform: translateY(-50%);
}

.bot-response {
background-color: #633ea140; /* Couleur de fond de la bulle */
border-radius: 15px; /* Bords arrondis pour la forme de bulle */
padding: 10px 20px; /* Espacement intérieur pour le texte */
margin: 10px 40px; /* Marge autour de la bulle */
max-width: 90%; /* Largeur maximale de la bulle */
word-wrap: break-word; /* Pour éviter le débordement de texte */
position: relative; /* Nécessaire pour la flèche de bulle */
left: 20px; /* Espace à gauche */
box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2); /* Ombre pour un effet 3D */
display: flex; /* Utiliser flexbox pour aligner l'avatar et le message */
align-items: center; /* Centrer les éléments verticalement */
}

.bot-response .text {
flex-grow: 1; /* Permettre au texte de prendre l'espace restant */
/* ... autres styles ... */
}

/* Flèche de la bulle */
.bot-response::before {
content: '';
position: absolute;
top: 50%;
left: -10px; /* Positionnement à gauche de la bulle */
border-width: 5px 10px 5px 0; /* Créer une petite flèche */
border-style: solid;
border-color: transparent #633ea140 transparent transparent;
transform: translateY(-50%);
}


/*footer et effacer*/
.clear-chat-button {
background-color: #633ea1; /* Couleur de fond */
color: white; /* Couleur du texte */
border: none; /* Pas de bordure */
border-radius: 10px; /* Bords arrondis */
padding: 5px 10px; /* Padding intérieur */
font-size: 14px; /* Taille du texte */
cursor: pointer; /* Style du curseur */
margin-left: 10px; /* Marge à gauche */
}

.reduce-button {
    position: absolute;
    top: 5px;
    right: 5px;
    background-color: #f1f1f100;
    border: none;
    cursor: pointer;
    padding: 5px 10px;
    font-size: 20px;
    color: grey;
}

.reduce-button:hover {
    background-color: #dddddd00;
}


/*bouton revenir*/
.back-button {
background-color: rgb(40, 126, 240) !important; /* Couleur différente pour se distinguer */
color: #fff !important;
display: block; /* Assurez-vous que le bouton est un bloc pour appliquer la marge automatique */
margin: 20px auto; /* Centrage horizontal */
}

/*loader*/
.loader {
display: inline-block;
}

.loader-dot {
height: 5px;
width: 5px;
margin: 0 2px;
background-color: black;
border-radius: 50%;
display: inline-block;
/* Animation */
animation: dotFlashing 1s infinite linear alternate;
animation-delay: 0s;
}

.loader-dot:nth-child(2) {
animation-delay: 0.2s;
}

.loader-dot:nth-child(3) {
animation-delay: 0.4s;
}

@keyframes dotFlashing {
0% {
    background-color: black;
}
50%,
100% {
    background-color: transparent;
}
}
/*ouverture fermeture fenetre*/

@keyframes breatheIn {
  0% { transform: scale(1); opacity: 1; }
  100% { transform: scale(0); opacity: 0; }
}

@keyframes breatheOut {
  0% { transform: scale(0); opacity: 0; }
  100% { transform: scale(1); opacity: 1; }
}




@keyframes pulse {
0% {
    transform: scale(1);
}
50% {
    transform: scale(1.5);
}
100% {
    transform: scale(1);
}
}


/**/</style></head><div class="container"> <button id="reduceButton" class="reduce-button">x</button><div class="top"><div class="AvatarBot"> <img src="../../wp-content/uploads/2023/01/OFA-Bot-1.gif" alt="OX1"></div><div class="InfoBot"><p class="TitleBot">IA: OX-1</p> <button id="clearChat" class="clear-chat-button">Effacer la conversation</button></div></div><div class="ContentChat"></div><div id="choiceButtons" class="choice-buttons"></div><div class="BoxSentMSG "> <input type="text " placeholder="Ecrivez votre message ici ! " class="InputMSG " required> <button class="send-button">➤</button></div></div> <button id="helpButton" class="help-button"> <img src="../../wp-content/uploads/2023/01/OFA-Bot-1.gif" alt="Besoin d'une assistance ?"> <span class="tooltip" id="tooltip">Besoin d'aide ?</span></button> <script>document.addEventListener('DOMContentLoaded', function() {
    var container = document.querySelector('.container');
    container.style.display = 'none';
});

document.getElementById('reduceButton').addEventListener('click', function() {
    var tooltip = document.getElementById('tooltip');
    var container = document.querySelector('.container');
    if (container.style.display === 'block' || container.style.display === '') {
        container.style.animation = 'breatheIn 0.5s forwards';
        setTimeout(function() {
            container.style.display = 'none';
            tooltip.style.display = 'block';
        }, 500);
    } else {
        container.style.display = 'block';
        tooltip.style.display = "none";
        container.style.animation = 'breatheOut 0.5s forwards';
    }
});

document.getElementById('helpButton').addEventListener('click', function() {
    var tooltip = document.getElementById('tooltip');
    var container = document.querySelector('.container');
    if (container.style.display === 'block' || container.style.display === '') {
        container.style.animation = 'breatheIn 0.5s forwards';
        setTimeout(function() {
            container.style.display = 'none';
            tooltip.style.display = 'block';
        }, 500);
    } else {
        tooltip.style.display = 'none';
        container.style.display = 'block';
        container.style.animation = 'breatheOut 0.5s forwards';
    }
});
/*-------------*/
document.addEventListener('DOMContentLoaded', function() {
    displayInitialBotMessage();
    displayMainChoices();
});

function displayInitialBotMessage() {
    addBotMessage("Salut ! Que puis-je faire pour vous ?");
}

function displayMainChoices() {
    changeBotImg("normal");
    displayChoiceButtons(["Nos Services", "Les Tarifs", "Devis/Projet", "Aide & Support"]);
}

function displayChoiceButtons(choices, showBackButton = false) {
  let buttonsContainer = document.getElementById('choiceButtons');
  buttonsContainer.innerHTML = '';

  choices.forEach(choice => {
      let button = document.createElement('button');
      button.textContent = choice;
      button.addEventListener('click', () => handleChoiceClick(choice));
      buttonsContainer.appendChild(button);
  });


  // Ajouter un bouton 'Revenir' seulement si demandé
  if (showBackButton) {
      let backButton = document.createElement('button');
      backButton.textContent = "Revenir";
      backButton.classList.add('back-button'); // Classe spéciale pour le style
      backButton.addEventListener('click', displayMainChoices);
      buttonsContainer.appendChild(backButton);
  }
}


function handleChoiceClick(choice) {
    switch (choice) {
        case "Nos Services":
            displayChoiceButtons(["Site Internet", "Maintenance/Référencement", "Logo", "Générer des clients"], true);
            break;
        case "Les Tarifs":
            displayChoiceButtons(["Je suis une Entreprise", "Je suis un(e) Particulier(e)"], true);
            break;
        case "Devis/Projet":
            displayChoiceButtons(["Obtenir un devis", "Soumettre un projet"], true);
            break;
        case "Aide & Support":
            displayChoiceButtons(["Devenir Partenaire", "Recrutement", "Des questions ?", "Nous contacter"], true);
            break;
        // Gérer les sous-choix
        default:
            handleSubChoice(choice);
            break;
    }
}

function handleSubChoice(choice) {
    changeBotImg("happy");

    // Afficher le choix de l'utilisateur dans la conversation
    addChatBubble("<b>Choix: </b>" + choice, "user");
    
    let response = "";
    switch (choice) {
        case "Site Internet":
            response = "Nous concevons méticuleusement votre site web, même avec un budget limité. Nous rénovons intégralement votre site internet. Vos contenus sont modifiés selon vos besoins et préférences. <a href='../../tarifs'>Voir les tarifs</a> ou <a href='../../mon-projet'>Soumettre un projet</a>";
            break;
        case "Maintenance/Référencement":
            response = "Nous assurons la sécurité de votre site en minimisant les risques de piratage et en préservant ses performances. Nous œuvrons également à accroître votre audience pour améliorer votre classement sur Google. <a href='../../maintenance-referencement'>Voir les tarifs</a>";
            break;
        case "Logo":
            response = "Obtenez votre logo, généré ou sur mesure, afin d'avoir une identité plus professionnelle. <a href='../../tarifs'>Voir les tarifs</a> ou <a href='../../mon-projet'>Soumettre un projet</a>";
            break;
        case "Générer des clients":
            response = "Nous vous assistons dans la recherche de clients susceptibles d'être attirés par vos produits ou services. (service en cours de création...)";
            break;
        case "Je suis une Entreprise":
            response = "Consultez nos tarifs attractifs pour les entreprises et découvrez l'excellent rapport qualité-prix de nos services, offrant de nombreux avantages à des coûts compétitifs. <a href='../../tarifs'>Voir les tarifs</a> ou <a href='../../mon-projet'>Soumettre un projet</a>";
            break;
        case "Je suis un(e) Particulier(e)":
            response = "Jetez un œil à nos tarifs avantageux pour les entreprises et découvrez comment ils offrent un excellent rapport qualité-prix, accompagnés de nombreux avantages. Pour les particuliers, nos prix sont encore plus abordables, reflétant notre engagement à fournir des services de qualité à des coûts accessibles à tous. <a href='../../tarifs'>Voir les tarifs</a> ou <a href='../../mon-projet'>Soumettre un projet</a>";
            break;
        case "Obtenir un devis":
            response = "Recevez promptement un devis pour estimer le coût de vos projets. Pour cela, vous avez le choix : nous contacter directement ou soumettre votre projet en ligne. Plus vous fournirez de détails, plus notre estimation sera précise. <a href='../../contact'>Nous contacter</a> ou <a href='../../mon-projet'>Soumettre un projet</a>";
            break;
        case "Soumettre un projet":
            response = "Présentez-nous votre projet en détail pour nous permettre de comprendre vos attentes et objectifs futurs. Cela nous aidera à vous fournir une estimation précise des coûts et des délais associés. <a href='../../mon-projet'>Soumettre un projet</a>";
            break;
        case "Devenir Partenaire":
            response = "En devenant partenaire, simplifiez votre acquisition de clients. Selon le plan que vous choisissez, vous aurez l'opportunité de percevoir des commissions directes sur les clients d'Prodigit. <a href='../../tarifs'>Voir les tarifs</a> ou <a href='../../devenir-partenaire'>Devenir partenaire</a>";
            break;
        case "Recrutement":
            response = "Pour le recrutement, Prodigit s'investit dans l'accueil de stagiaires spécialisés dans le web, le développement et le design, pour des stages d'une durée maximale de deux mois. Actuellement, nous ne proposons pas encore de places pour des alternants au sein de notre entreprise. <a href='../../contact'>Nous contacter</a>";
            break;
        case "Des questions ?":
            response = "Pour toute interrogation, nous vous invitons à consulter notre foire aux questions, où vous trouverez les réponses aux questions les plus couramment posées. <a href='../../page-introuvable'>Voir la FAQ</a>";
            break;
        case "Nous contacter":
            response = "Si vous devez nous contacter pour diverses raisons, n'hésitez pas à le faire ! <a href='../../contact'>Nous contacter</a>";
            break;
        default:
            response = "Je ne suis pas sûre de vous comprendre, choisissez les bons mots clés pour que je puisse comprendre plus facilement votre demande.";
            changeBotImg("confused");
    }
    addBotMessage(response);
}



/*elementMSG.classList.add("bot-response");*/


/*effacer conversation*/
document.getElementById('clearChat').addEventListener('click', function() {
    changeBotImg("normal");
  var allMessages = document.querySelectorAll(".ContentChat .massage, .ContentChat .name-tag, .ContentChat .chat-bubble");
  let isFirstBotMessageKept = false;

  allMessages.forEach(function(message) {
      // Conserver le premier message du bot
      if (!isFirstBotMessageKept && message.classList.contains('bot-response')) {
          isFirstBotMessageKept = true;
      } else {
          message.remove();
      }
  });
});

function changeBotImg(etat) {
    let robotImage = document.querySelector('.AvatarBot img');
    switch (etat) {
        case "normal":
        robotImage.src = "../../wp-content/uploads/2023/12/robot.gif";
        break;
        case "happy":
        robotImage.src = "../../wp-content/uploads/2023/12/robot-happy.gif";
            break;
        case "confused":
        robotImage.src = "../../wp-content/uploads/2023/12/robot-confused.gif";
            break;
        default:
        robotImage.src = "../../wp-content/uploads/2023/12/robot.gif";
                    break;
    }
}

/*avatar bot*/
function addBotMessage(message) {
  let ContentChat = document.getElementsByClassName("ContentChat")[0];

  // Créer et ajouter le loader
  let loader = document.createElement("div");
  loader.classList.add("loader");
  for (let i = 0; i < 3; i++) {
      let dot = document.createElement("div");
      dot.classList.add("loader-dot");
      loader.appendChild(dot);
  }
  ContentChat.appendChild(loader);

  // Attendre 2 secondes avant d'afficher le message du bot
  setTimeout(function() {
      // Supprimer le loader
      loader.remove();

      // Créer le conteneur pour la bulle de conversation et le nom
      let bubbleContainer = document.createElement('div');
      bubbleContainer.classList.add("bubble-container", "bot");

      // Ajouter le message du bot avec l'avatar
      let elementMSG = document.createElement("div");
      elementMSG.classList.add("massage", "bot-response");
      elementMSG.innerHTML = `
          <img src="https://ofaweb.fr/wp-content/uploads/2023/12/chatbot.png" alt="OX1" class="bot-avatar">
          <div class="text">${message}</div>`;
      bubbleContainer.appendChild(elementMSG);

      // Ajouter le nom du bot
      /*let botNameTag = document.createElement('div');
      botNameTag.classList.add("name-tag", "name-bot");
      botNameTag.textContent = "OX1";
      bubbleContainer.appendChild(botNameTag);*/

      // Ajouter le conteneur complet au ContentChat
      ContentChat.appendChild(bubbleContainer);
      bubbleContainer.scrollIntoView({ behavior: "smooth" });
  }, 2000); // Délai de 2 secondes
}

/*Algo Ecrire message */

/*Buttone nvoi */

  
const botResponses = {
    // Exemples de réponses et mots-clés
    "Site Internet": {
      response: "Nous concevons méticuleusement votre site web, même avec un budget limité. Nous rénovons intégralement votre site internet. Vos contenus sont modifiés selon vos besoins et préférences. <a href='https://ofaweb.fr/tarifs'>Voir les tarifs</a> ou <a href='https://ofaweb.fr/mon-projet'>Soumettre un projet</a>",
      keywords: ["site", "internet", "web"]
    },
    "Maintenance/Référencement": {
      response: "Nous assurons la sécurité de votre site en minimisant les risques de piratage et en préservant ses performances. Nous œuvrons également à accroître votre audience pour améliorer votre classement sur Google. <a href='https://ofaweb.fr/maintenance-referencement'>Voir les tarifs</a>",
      keywords: ["maintenance", "référencement", "seo"]
    },
    "Logo": {
      response: "Obtenez votre logo, généré ou sur mesure, afin d'avoir une identité plus professionnelle. <a href='https://ofaweb.fr/tarifs'>Voir les tarifs</a> ou <a href='https://ofaweb.fr/mon-projet'>Soumettre un projet</a>",
      keywords: ["logo", "identité", "marque"]
    },
    "Générer des clients": {
      response: "Nous vous assistons dans la recherche de clients susceptibles d'être attirés par vos produits ou services. (service en cours de création...)",
      keywords: ["générer", "clients", "acquisition"]
    },
    "Je suis une Entreprise": {
      response: "Consultez nos tarifs attractifs pour les entreprises et découvrez l'excellent rapport qualité-prix de nos services, offrant de nombreux avantages à des coûts compétitifs. <a href='https://ofaweb.fr/tarifs'>Voir les tarifs</a> ou <a href='https://ofaweb.fr/mon-projet'>Soumettre un projet</a>",
      keywords: ["entreprise", "business", "professionnel"]
    },
    "Je suis un(e) Particulier(e)": {
      response: "Jetez un œil à nos tarifs avantageux pour les entreprises et découvrez comment ils offrent un excellent rapport qualité-prix, accompagnés de nombreux avantages. Pour les particuliers, nos prix sont encore plus abordables, reflétant notre engagement à fournir des services de qualité à des coûts accessibles à tous. <a href='https://ofaweb.fr/tarifs'>Voir les tarifs</a> ou <a href='https://ofaweb.fr/mon-projet'>Soumettre un projet</a>",
      keywords: ["particulier", "individuel", "personnel"]
    },
    "Obtenir un devis": {
      response: "Recevez promptement un devis pour estimer le coût de vos projets. Pour cela, vous avez le choix : nous contacter directement ou soumettre votre projet en ligne. Plus vous fournirez de détails, plus notre estimation sera précise. <a href='https://ofaweb.fr/contact'>Nous contacter</a> ou <a href='https://ofaweb.fr/mon-projet'>Soumettre un projet</a>",
      keywords: ["devis", "estimation", "projet"]
    },
    "Soumettre un projet": {
      response: "Présentez-nous votre projet en détail pour nous permettre de comprendre vos attentes et objectifs futurs. Cela nous aidera à vous fournir une estimation précise des coûts et des délais associés. <a href='https://ofaweb.fr/mon-projet'>Soumettre un projet</a>",
      keywords: ["soumettre", "projet", "proposition"]
    },
    "Devenir Partenaire": {
      response: "En devenant partenaire, simplifiez votre acquisition de clients. Selon le plan que vous choisissez, vous aurez l'opportunité de percevoir des commissions directes sur les clients d'Prodigit. <a href='https://ofaweb.fr/tarifs'>Voir les tarifs</a> ou <a href='https://ofaweb.fr/devenir-partenaire'>Devenir partenaire</a>",
      keywords: ["partenaire", "collaboration", "affiliation"]
    },
    "Recrutement": {
      response: "Pour le recrutement, Prodigit s'investit dans l'accueil de stagiaires spécialisés dans le web, le développement et le design, pour des stages d'une durée maximale de deux mois. Actuellement, nous ne proposons pas encore de places pour des alternants au sein de notre entreprise. <a href='https://ofaweb.fr/contact'>Nous contacter</a>",
      keywords: ["recrutement", "emploi", "carrière"]
    },
    "Des questions ?": {
      response: "Pour toute interrogation, nous vous invitons à consulter notre foire aux questions, où vous trouverez les réponses aux questions les plus couramment posées. <a href='https://ofaweb.fr/faq'>Voir la FAQ</a>",
      keywords: ["questions", "aide", "support"]
    },
    "Nous contacter": {
      response: "Si vous devez nous contacter pour diverses raisons, n'hésitez pas à le faire ! <a href='https://ofaweb.fr/contact'>Nous contacter</a>",
      keywords: ["contacter", "support", "aide"]
    },
    // Ajoutez d'autres réponses ici si nécessaire
  };
  

function findBestBotResponse(userInput) {
  let lowerInput = userInput.toLowerCase();
  let bestMatch = { score: 0, choice: null };

  for (let choice in botResponses) {
      let matchScore = botResponses[choice].keywords.filter(keyword => lowerInput.includes(keyword)).length;

      if (matchScore > bestMatch.score) {
          bestMatch = { score: matchScore, choice: botResponses[choice].response };
      }
  }

  return bestMatch.choice;
}

function sendUserMessage() {
  let inputField = document.querySelector('.InputMSG');
  let userInput = inputField.value.trim();

  if (!userInput) {
      return; // Ne rien faire si le champ est vide
  }

  // Ajouter le message de l'utilisateur à l'interface de chat
  addChatBubble(userInput, "user");

  let matchedChoice = findBestBotResponse(userInput);

  if (matchedChoice) {
    addBotMessage(matchedChoice);
    changeBotImg("happy");
  } else {
      addBotMessage("Je ne suis pas sûr de comprendre. Pouvez-vous reformuler ?");
      changeBotImg("confused");
  }

  inputField.value = ''; // Effacer le champ après l'envoi
}


// Gestionnaire d'événements pour le bouton d'envoi
document.querySelector('.send-button').addEventListener('click', sendUserMessage);

// Gestionnaire d'événements pour la touche "Entrée"
document.querySelector('.InputMSG').addEventListener('keydown', function(event) {
    if (event.key === 'Enter' || event.keyCode === 13) {
        event.preventDefault(); // Empêcher le comportement par défaut (saut de ligne ou soumission de formulaire)
        sendUserMessage();
    }
});

function addChatBubble(message, sender) {
  let ContentChat = document.querySelector('.ContentChat');
  let bubble = document.createElement('div');
  bubble.classList.add("chat-bubble", sender);
  bubble.innerHTML = `<div class="text">${message}</div>`;

     // Ajouter une balise pour le nom
     let nameTag = document.createElement('div');
     nameTag.classList.add("name-tag", sender === "user" ? "name-user" : "name-user");
     nameTag.textContent = sender === "user" ? "Vous" : "Vous";
 
     // Ajouter la bulle et le nom dans le conteneur de chat
     ContentChat.appendChild(bubble);
     ContentChat.appendChild(nameTag);
     nameTag.scrollIntoView({ behavior: "smooth" });
 }</script> </div></div><div class="elementor-element elementor-element-3b4f384e elementor-widget__width-initial elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-spacer" data-id="3b4f384e" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="spacer.default"><div class="elementor-widget-container"><style>/*! elementor - v3.19.0 - 07-02-2024 */
.elementor-column .elementor-spacer-inner{height:var(--spacer-size)}.e-con{--container-widget-width:100%}.e-con-inner>.elementor-widget-spacer,.e-con>.elementor-widget-spacer{width:var(--container-widget-width,var(--spacer-size));--align-self:var(--container-widget-align-self,initial);--flex-shrink:0}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,.e-con>.elementor-widget-spacer>.elementor-widget-container{height:100%;width:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer{height:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner{height:var(--container-widget-height,var(--spacer-size))}.e-con-inner>.elementor-widget-spacer.elementor-widget-empty,.e-con>.elementor-widget-spacer.elementor-widget-empty{position:relative;min-height:22px;min-width:22px}.e-con-inner>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon,.e-con>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon{position:absolute;top:0;bottom:0;left:0;right:0;margin:auto;padding:0;width:22px;height:22px}</style><div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div></div></div></div></div></div></section></div><div id="cookie-law-info-bar" data-nosnippet="true"><span><div class="cli-bar-container cli-style-v2"><div class="cli-bar-message">Nous utilisons des cookies sur notre site Web pour vous offrir l'expérience la plus pertinente en mémorisant vos préférences et les visites répétées. En cliquant sur «Accepter», vous consentez à l'utilisation de TOUS les cookies.</div><div class="cli-bar-btn_container"><a href="../../politique-de-confidentialite" id="CONSTANT_OPEN_URL" target="_blank" class="cli-plugin-main-link" style="margin:0px 10px 0px 5px">Politique de confidentialité</a><a role='button' data-cli_action="accept" id="cookie_action_close_header" class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header cli_action_button wt-cli-accept-btn">ACCEPTER</a></div></div></span></div><div id="cookie-law-info-again" data-nosnippet="true"><span id="cookie_hdr_showagain">Privacy &amp; Cookies Policy</span></div><div class="cli-modal" data-nosnippet="true" id="cliSettingsPopup" tabindex="-1" role="dialog" aria-labelledby="cliSettingsPopup" aria-hidden="true"><div class="cli-modal-dialog" role="document"><div class="cli-modal-content cli-bar-popup"> <button type="button" class="cli-modal-close" id="cliModalClose"> <svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"></path><path d="M0 0h24v24h-24z" fill="none"></path></svg> <span class="wt-cli-sr-only">Fermer</span> </button><div class="cli-modal-body"><div class="cli-container-fluid cli-tab-container"><div class="cli-row"><div class="cli-col-12 cli-align-items-stretch cli-px-0"><div class="cli-privacy-overview"><h4>Privacy Overview</h4><div class="cli-privacy-content"><div class="cli-privacy-content-text">This website uses cookies to improve your experience while you navigate through the website. Out of these cookies, the cookies that are categorized as necessary are stored on your browser as they are essential for the working of basic functionalities of the website. We also use third-party cookies that help us analyze and understand how you use this website. These cookies will be stored in your browser only with your consent. You also have the option to opt-out of these cookies. But opting out of some of these cookies may have an effect on your browsing experience.</div></div> <a class="cli-privacy-readmore" aria-label="Voir plus" role="button" data-readmore-text="Voir plus" data-readless-text="Voir moins"></a></div></div><div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container"><div class="cli-tab-section"><div class="cli-tab-header"> <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="necessary" data-toggle="cli-toggle-tab"> Necessary </a><div class="wt-cli-necessary-checkbox"> <input type="checkbox" class="cli-user-preference-checkbox"  id="wt-cli-checkbox-necessary" data-id="checkbox-necessary" checked="checked"  /> <label class="form-check-label" for="wt-cli-checkbox-necessary">Necessary</label></div> <span class="cli-necessary-caption">Toujours activé</span></div><div class="cli-tab-content"><div class="cli-tab-pane cli-fade" data-id="necessary"><div class="wt-cli-cookie-description"> Necessary cookies are absolutely essential for the website to function properly. This category only includes cookies that ensures basic functionalities and security features of the website. These cookies do not store any personal information.</div></div></div></div><div class="cli-tab-section"><div class="cli-tab-header"> <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="non-necessary" data-toggle="cli-toggle-tab"> Non-necessary </a><div class="cli-switch"> <input type="checkbox" id="wt-cli-checkbox-non-necessary" class="cli-user-preference-checkbox"  data-id="checkbox-non-necessary" checked='checked' /> <label for="wt-cli-checkbox-non-necessary" class="cli-slider" data-cli-enable="Activé" data-cli-disable="Désactivé"><span class="wt-cli-sr-only">Non-necessary</span></label></div></div><div class="cli-tab-content"><div class="cli-tab-pane cli-fade" data-id="non-necessary"><div class="wt-cli-cookie-description"> Any cookies that may not be particularly necessary for the website to function and is used specifically to collect user personal data via analytics, ads, other embedded contents are termed as non-necessary cookies. It is mandatory to procure user consent prior to running these cookies on your website.</div></div></div></div></div></div></div></div><div class="cli-modal-footer"><div class="wt-cli-element cli-container-fluid cli-tab-container"><div class="cli-row"><div class="cli-col-12 cli-align-items-stretch cli-px-0"><div class="cli-tab-footer wt-cli-privacy-overview-actions"> <a id="wt-cli-privacy-save-btn" role="button" tabindex="0" data-cli-action="accept" class="wt-cli-privacy-btn cli_setting_save_button wt-cli-privacy-accept-btn cli-btn">Enregistrer &amp; appliquer</a></div></div></div></div></div></div></div></div><div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div><div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div><div class="mazloader-items"><div
 id="mazloader-item-2"
 class="mazloader-item bg_img_type_cover bg_img_position_center_center dc_desktop dc_tablet dc_smartphone"
 data-settings="{&quot;minimum_loading_time&quot;:500,&quot;duration&quot;:1000,&quot;delay&quot;:0,&quot;show_on_homepage&quot;:&quot;off&quot;}"
 data-appearance="{&quot;disable_page_scroll&quot;:true}"
 data-loader-id="2"
 style="background:#ffffff;" 			><div class="mazloader-item-overlay "></div><div class="mazloader-items-wrapper  position_center"><div
 class="mazloader-item-image"
 > <img src="../../wp-content/uploads/2023/01/OFA-Bot-2.gif" style="width:300px;border-radius:0%;"  alt="OFA Bot - Assistance Virtuel - IA - Prodigit" /></div><div
 class="mazloader-item-icon"
 style="margin:0 0 0 0;" ><div  style="padding:0px 0px 0px 0px;" > <img src="../../wp-content/plugins/maz-loader/media/public/img/svg/6.svg" alt="preloader image" /></div></div></div></div></div> <noscript> <img
 height="1"
 width="1"
 style="display:none"
 alt="fbpx"
 src="https://www.facebook.com/tr?id=397328092319940&amp;ev=PageView&amp;noscript=1"
 /> </noscript>  <script>(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();</script> <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"><div class="pswp__bg"></div><div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar"><div class="pswp__counter"></div> <button class="pswp__button pswp__button--close" aria-label="Fermer (Echap)"></button> <button class="pswp__button pswp__button--share" aria-label="Partagez"></button> <button class="pswp__button pswp__button--fs" aria-label="Basculer en plein écran"></button> <button class="pswp__button pswp__button--zoom" aria-label="Zoomer/Dézoomer"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div> <button class="pswp__button pswp__button--arrow--left" aria-label="Précédent (flèche  gauche)"></button> <button class="pswp__button pswp__button--arrow--right" aria-label="Suivant (flèche droite)"></button><div class="pswp__caption"><div class="pswp__caption__center"></div></div></div></div></div> 
	
	 <script type="text/template" id="tmpl-unavailable-variation-template"><p>Désolé, ce produit n&rsquo;est pas disponible. Veuillez choisir une combinaison différente.</p></script> <link rel='stylesheet' id='e-animations-css' href='../../wp-content/plugins/elementor/assets/lib/animations/animations.min34a7.css?ver=3.19.2' media='all' /><link rel='stylesheet' id='photoswipe-css' href='../../wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.mindb31.css?ver=8.6.0' media='all' /><link rel='stylesheet' id='photoswipe-default-skin-css' href='../../wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.mindb31.css?ver=8.6.0' media='all' /> <script src="../../wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.mindb31.js?ver=8.6.0" id="sourcebuster-js-js"></script> <script id="wc-order-attribution-js-extra">var wc_order_attribution = {"params":{"lifetime":1.0e-5,"session":30,"ajaxurl":"https:\/\/ofaweb.fr\/wp-admin\/admin-ajax.php","prefix":"wc_order_attribution_","allowTracking":true},"fields":{"source_type":"current.typ","referrer":"current_add.rf","utm_campaign":"current.cmp","utm_source":"current.src","utm_medium":"current.mdm","utm_content":"current.cnt","utm_id":"current.id","utm_term":"current.trm","session_entry":"current_add.ep","session_start_time":"current_add.fd","session_pages":"session.pgs","session_count":"udata.vst","user_agent":"udata.uag"}};</script> <script src="../../wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.mindb31.js?ver=8.6.0" id="wc-order-attribution-js"></script> <script id="eael-general-js-extra">var localize = {"ajaxurl":"https:\/\/ofaweb.fr\/wp-admin\/admin-ajax.php","nonce":"ec996460cf","i18n":{"added":"Added ","compare":"Compare","loading":"Loading..."},"eael_translate_text":{"required_text":"is a required field","invalid_text":"Invalid","billing_text":"Billing","shipping_text":"Shipping","fg_mfp_counter_text":"of"},"page_permalink":"https:\/\/ofaweb.fr\/creation-de-site-internet-pas-cher-guide-complet-avec-wordpress-et-ofa-web\/","cart_redirectition":"no","cart_page_url":"https:\/\/ofaweb.fr\/panier\/","el_breakpoints":{"mobile":{"label":"Portrait mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Paysage","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablette en mode portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablette en mode paysage","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Portable","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"\u00c9cran large","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}};</script> <script src="../../wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min4dc9.js?ver=5.9.9" id="eael-general-js"></script> <script src="../../wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min1576.js?ver=1.2.1" id="smartmenus-js"></script> <script id="wc-cart-fragments-js-extra">var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_b418349ede369371fd1722a0ba239e12","fragment_name":"wc_fragments_b418349ede369371fd1722a0ba239e12","request_timeout":"5000"};</script> <script src="../../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.mindb31.js?ver=8.6.0" id="wc-cart-fragments-js" defer data-wp-strategy="defer"></script> <script src="../../../www.google.com/recaptcha/api39d4.js?render=explicit&amp;ver=3.19.2" id="elementor-recaptcha_v3-api-js"></script> <script src="../../wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0" id="imagesloaded-js"></script> <script src="../../wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min34a7.js?ver=3.19.2" id="elementor-pro-webpack-runtime-js"></script> <script src="../../wp-content/plugins/elementor/assets/js/webpack.runtime.min34a7.js?ver=3.19.2" id="elementor-webpack-runtime-js"></script> <script src="../../wp-content/plugins/elementor/assets/js/frontend-modules.min34a7.js?ver=3.19.2" id="elementor-frontend-modules-js"></script> <script src="../../wp-includes/js/dist/i18n.minf92f.js?ver=7701b0c3857f914212ef" id="wp-i18n-js"></script> <script id="wp-i18n-js-after">wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );</script> <script id="elementor-pro-frontend-js-before">var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/ofaweb.fr\/wp-admin\/admin-ajax.php","nonce":"f921f45665","urls":{"assets":"https:\/\/ofaweb.fr\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/ofaweb.fr\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"woocommerce":{"menu_cart":{"cart_page_url":"https:\/\/ofaweb.fr\/panier\/","checkout_page_url":"https:\/\/ofaweb.fr\/commander\/","fragments_nonce":"f1f5a892d6"}},"facebook_sdk":{"lang":"fr_FR","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/ofaweb.fr\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};</script> <script src="../../wp-content/plugins/elementor-pro/assets/js/frontend.min34a7.js?ver=3.19.2" id="elementor-pro-frontend-js"></script> <script src="../../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2" id="elementor-waypoints-js"></script> <script src="../../wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js"></script> <script id="elementor-frontend-js-before">var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Partager sur Facebook","shareOnTwitter":"Partager sur Twitter","pinIt":"L\u2019\u00e9pingler","download":"T\u00e9l\u00e9charger","downloadImage":"T\u00e9l\u00e9charger une image","fullscreen":"Plein \u00e9cran","zoom":"Zoom","share":"Partager","playVideo":"Lire la vid\u00e9o","previous":"Pr\u00e9c\u00e9dent","next":"Suivant","close":"Fermer","a11yCarouselWrapperAriaLabel":"Carousel | Scroll horizontal: Fl\u00e8che gauche & droite","a11yCarouselPrevSlideMessage":"Diapositive pr\u00e9c\u00e9dente","a11yCarouselNextSlideMessage":"Diapositive suivante","a11yCarouselFirstSlideMessage":"Ceci est la premi\u00e8re diapositive","a11yCarouselLastSlideMessage":"Ceci est la derni\u00e8re diapositive","a11yCarouselPaginationBulletMessage":"Aller \u00e0 la diapositive"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Portrait mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Paysage","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablette en mode portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablette en mode paysage","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Portable","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"\u00c9cran large","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.19.2","is_static":false,"experimentalFeatures":{"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"additional_custom_breakpoints":true,"theme_builder_v2":true,"block_editor_assets_optimize":true,"ai-layout":true,"landing-pages":true,"e_image_loading_optimization":true,"e_global_styleguide":true,"page-transitions":true,"notes":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/ofaweb.fr\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper-container","settings":{"editorPreferences":[]},"kit":{"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","woocommerce_notices_elements":[]},"post":{"id":0,"title":"cr\u00e9ation site internet &#8211; Prodigit &#8211; Cr\u00e9ation site internet","excerpt":""}};</script> <script src="../../wp-content/plugins/elementor/assets/js/frontend.min34a7.js?ver=3.19.2" id="elementor-frontend-js"></script> <script src="../../wp-content/plugins/elementor-pro/assets/js/elements-handlers.min34a7.js?ver=3.19.2" id="pro-elements-handlers-js"></script> <script src="../../wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min34a7.js?ver=3.19.2" id="e-sticky-js"></script> <script src="../../wp-includes/js/underscore.mind584.js?ver=1.13.4" id="underscore-js"></script> <script id="wp-util-js-extra">var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};</script> <script src="../../wp-includes/js/wp-util.min84fc.js?ver=6.4.3" id="wp-util-js"></script> <script id="wpforms-elementor-js-extra">var wpformsElementorVars = {"captcha_provider":"recaptcha","recaptcha_type":"v2"};</script> <script src="../../wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min36c7.js?ver=1.8.6.4" id="wpforms-elementor-js"></script> <script src="../../wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min2d95.js?ver=1.7.21-wc.8.6.0" id="zoom-js" defer data-wp-strategy="defer"></script> <script src="../../wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.minaf9e.js?ver=2.7.2-wc.8.6.0" id="flexslider-js" defer data-wp-strategy="defer"></script> <script src="../../wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.minaeaa.js?ver=4.1.1-wc.8.6.0" id="photoswipe-js" defer data-wp-strategy="defer"></script> <script src="../../wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.minaeaa.js?ver=4.1.1-wc.8.6.0" id="photoswipe-ui-default-js" defer data-wp-strategy="defer"></script> <script id="wc-add-to-cart-variation-js-extra">var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"D\u00e9sol\u00e9, aucun produit ne r\u00e9pond \u00e0 vos crit\u00e8res. Veuillez choisir une combinaison diff\u00e9rente.","i18n_make_a_selection_text":"Veuillez s\u00e9lectionner des options du produit avant de l\u2019ajouter \u00e0 votre panier.","i18n_unavailable_text":"D\u00e9sol\u00e9, ce produit n\u2019est pas disponible. Veuillez choisir une combinaison diff\u00e9rente."};</script> <script src="../../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.mindb31.js?ver=8.6.0" id="wc-add-to-cart-variation-js" defer data-wp-strategy="defer"></script> <script id="wc-single-product-js-extra">var wc_single_product_params = {"i18n_required_rating_text":"Veuillez s\u00e9lectionner une note","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};</script> <script src="../../wp-content/plugins/woocommerce/assets/js/frontend/single-product.mindb31.js?ver=8.6.0" id="wc-single-product-js" defer data-wp-strategy="defer"></script> </body>
<!-- Mirrored from ofaweb.fr/categorie-article/creation-site-internet/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2024 08:44:29 GMT -->
</html><!-- Cache Enabler by KeyCDN @ Fri, 16 Feb 2024 20:50:11 GMT (https-index.html) -->