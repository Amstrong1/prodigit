<!doctype html>
<html lang="fr-FR">
<!-- Mirrored from ofaweb.fr/mon-projet/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2024 08:27:07 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Mon Projet - PRODIGIT SERVICES | Création de site internet | Devis</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='http://stats.wp.com/' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel="alternate" type="application/rss+xml" title="PRODIGIT SERVICES - Création site internet &raquo; Flux"
        href="/feed" />
    <link rel="alternate" type="application/rss+xml"
        title="PRODIGIT SERVICES - Création site internet &raquo; Flux des commentaires" href="/comments/feed" />
    <script src="http://www.googletagmanager.com/gtag/js?id=G-51QCQQT870" data-cfasync="false" data-wpfc-render="false"
        async></script>
    <script data-cfasync="false" data-wpfc-render="false">
        var em_version = '7.24.3';
        var em_track_user = true;
        var em_no_track_reason = '';
        var ExactMetricsDefaultLocations = {
            "page_location": "https:\/\/ofaweb.fr\/mon-projet\/",
            "page_referrer": "https:\/\/ofaweb.fr\/mon-compte\/"
        };
        if (typeof ExactMetricsPrivacyGuardFilter === 'function') {
            var ExactMetricsLocations = (typeof ExactMetricsExcludeQuery === 'object') ? ExactMetricsPrivacyGuardFilter(
                ExactMetricsExcludeQuery) : ExactMetricsPrivacyGuardFilter(ExactMetricsDefaultLocations);
        } else {
            var ExactMetricsLocations = (typeof ExactMetricsExcludeQuery === 'object') ? ExactMetricsExcludeQuery :
                ExactMetricsDefaultLocations;
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
            if (ExactMetricsLocations.page_location) {
                __gtagTracker('set', ExactMetricsLocations);
            }
            __gtagTracker('config', 'G-51QCQQT870', {
                "forceSSL": "true",
                "link_attribution": "true"
            });
            window.gtag = __gtagTracker;
            (function() {
                /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
                /* ga and __gaTracker compatibility shim. */
                var noopfn = function() {
                    return null;
                };
                var newtracker = function() {
                    return new Tracker();
                };
                var Tracker = function() {
                    return null;
                };
                var p = Tracker.prototype;
                p.get = noopfn;
                p.set = noopfn;
                p.send = function() {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift('send');
                    __gaTracker.apply(null, args);
                };
                var __gaTracker = function() {
                    var len = arguments.length;
                    if (len === 0) {
                        return;
                    }
                    var f = arguments[len - 1];
                    if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
                        if ('send' === arguments[0]) {
                            var hitConverted, hitObject = false,
                                action;
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
                                action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject
                                    .eventAction;
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
                            'referrer': 'page_referrer',
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
                    } catch (ex) {}
                };
                __gaTracker.create = newtracker;
                __gaTracker.getByName = newtracker;
                __gaTracker.getAll = function() {
                    return [];
                };
                __gaTracker.remove = noopfn;
                __gaTracker.loaded = true;
                window['__gaTracker'] = __gaTracker;
            })();
        } else {
            console.log("");
            (function() {
                function __gtagTracker() {
                    return null;
                }

                window['__gtagTracker'] = __gtagTracker;
                window['gtag'] = __gtagTracker;
            })();
        }
    </script>
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/ofaweb.fr\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='wc-blocks-checkout-style-css'
        href='/wp-content/plugins/woocommerce-payments/dist/blocks-checkout5152.css?ver=1.0' media='all' />
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='cookie-law-info-css'
        href='/wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-public3a79.css?ver=3.1.8'
        media='all' />
    <link rel='stylesheet' id='cookie-law-info-gdpr-css'
        href='/wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-gdpr3a79.css?ver=3.1.8'
        media='all' />
    <link rel='stylesheet' id='maz-loader-mazloader-google-font-css'
        href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C700&amp;display=swap&amp;ver=6.4.3'
        media='all' />
    <link rel='stylesheet' id='maz-loader-css'
        href='/wp-content/plugins/maz-loader/media/public/css/mazloader91ce.css?ver=1.5.0' media='all' />
    <link rel='stylesheet' id='swpm.common-css'
        href='/wp-content/plugins/simple-membership/css/swpm.commonc1f9.css?ver=4.4.2' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='/wp-content/plugins/woocommerce/assets/css/woocommerce-layoutdb31.css?ver=8.6.0' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreendb31.css?ver=8.6.0'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='/wp-content/plugins/woocommerce/assets/css/woocommercedb31.css?ver=8.6.0' media='all' />
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='wp-job-manager-job-listings-css'
        href='/wp-content/plugins/wp-job-manager/assets/dist/css/job-listings7d5b.css?ver=598383a28ac5f9f156e4'
        media='all' />
    <link rel='stylesheet' id='parent-style-css' href='/wp-content/themes/hello-elementor/style84fc.css?ver=6.4.3'
        media='all' />
    <link rel='stylesheet' id='child-style-css' href='/wp-content/themes/hello-elementor-child/style84fc.css?ver=6.4.3'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-css'
        href='/wp-content/themes/hello-elementor/style.min41fe.css?ver=3.0.1' media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
        href='/wp-content/themes/hello-elementor/theme.min41fe.css?ver=3.0.1' media='all' />
    <link rel='stylesheet' id='hello-elementor-header-footer-css'
        href='/wp-content/themes/hello-elementor/header-footer.min41fe.css?ver=3.0.1' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='/wp-content/plugins/elementor/assets/css/frontend-lite.min34a7.css?ver=3.19.2' media='all' />
    <link rel='stylesheet' id='eael-general-css'
        href='/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min4dc9.css?ver=5.9.9'
        media='all' />
    <link rel='stylesheet' id='eael-3009-css'
        href='/wp-content/uploads/essential-addons-elementor/eael-3009d3da.css?ver=1706030076' media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min50c3.css?ver=5.27.0'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min48f5.css?ver=5.3.6' media='all' />
    <link rel='stylesheet' id='elementor-post-79-css'
        href='/wp-content/uploads/elementor/css/post-79557c.css?ver=1707561995' media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min34a7.css?ver=3.19.2' media='all' />
    <link rel='stylesheet' id='elementor-post-3009-css'
        href='/wp-content/uploads/elementor/css/post-3009a486.css?ver=1707566161' media='all' />
    <link rel='stylesheet' id='elementor-post-409-css'
        href='/wp-content/uploads/elementor/css/post-409e1fb.css?ver=1707561996' media='all' />
    <link rel='stylesheet' id='elementor-post-2460-css'
        href='/wp-content/uploads/elementor/css/post-2460e1fb.css?ver=1707561996' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CZilla+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRighteous%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
        href='/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
        href='/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="/wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
    <script src="/wp-includes/js/dist/vendor/regenerator-runtime.min6c85.js?ver=0.14.0" id="regenerator-runtime-js">
    </script>
    <script src="/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0" id="wp-polyfill-js"></script>
    <script src="/wp-includes/js/dist/hooks.min2ebd.js?ver=c6aec9a8d4e5a5d543a1" id="wp-hooks-js"></script>
    <script src="//stats.wp.com/w2dfa.js?ver=202407" id="woo-tracks-js"></script>
    <script src="/wp-content/plugins/google-analytics-dashboard-for-wp/assets/js/frontend-gtag.min7d6a.js?ver=7.24.3"
        id="exactmetrics-frontend-script-js"></script>
    <script data-cfasync="false" data-wpfc-render="false" id='exactmetrics-frontend-script-js-extra'>
        var exactmetrics_frontend = {
            "js_events_tracking": "true",
            "download_extensions": "doc,pdf,ppt,zip,xls,docx,pptx,xlsx",
            "inbound_paths": "[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]",
            "home_url": "https:\/\/ofaweb.fr",
            "hash_tracking": "false",
            "v4_id": "G-51QCQQT870"
        };
    </script>
    <script src="/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script id="cookie-law-info-js-extra">
        var Cli_Data = {
            "nn_cookie_ids": [],
            "cookielist": [],
            "non_necessary_cookies": [],
            "ccpaEnabled": "",
            "ccpaRegionBased": "",
            "ccpaBarEnabled": "",
            "strictlyEnabled": ["necessary", "obligatoire"],
            "ccpaType": "gdpr",
            "js_blocking": "1",
            "custom_integration": "",
            "triggerDomRefresh": "",
            "secure_cookies": ""
        };
        var cli_cookiebar_settings = {
            "animate_speed_hide": "500",
            "animate_speed_show": "500",
            "background": "#FFF",
            "border": "#b1a6a6c2",
            "border_on": "",
            "button_1_button_colour": "#61a229",
            "button_1_button_hover": "#4e8221",
            "button_1_link_colour": "#fff",
            "button_1_as_button": "1",
            "button_1_new_win": "",
            "button_2_button_colour": "#333",
            "button_2_button_hover": "#292929",
            "button_2_link_colour": "#8224e3",
            "button_2_as_button": "",
            "button_2_hidebar": "",
            "button_3_button_colour": "#3566bb",
            "button_3_button_hover": "#2a5296",
            "button_3_link_colour": "#fff",
            "button_3_as_button": "1",
            "button_3_new_win": "",
            "button_4_button_colour": "#000",
            "button_4_button_hover": "#000000",
            "button_4_link_colour": "#8224e3",
            "button_4_as_button": "",
            "button_7_button_colour": "#61a229",
            "button_7_button_hover": "#4e8221",
            "button_7_link_colour": "#fff",
            "button_7_as_button": "1",
            "button_7_new_win": "",
            "font_family": "inherit",
            "header_fix": "",
            "notify_animate_hide": "1",
            "notify_animate_show": "",
            "notify_div_id": "#cookie-law-info-bar",
            "notify_position_horizontal": "right",
            "notify_position_vertical": "bottom",
            "scroll_close": "",
            "scroll_close_reload": "",
            "accept_close_reload": "",
            "reject_close_reload": "",
            "showagain_tab": "",
            "showagain_background": "#fff",
            "showagain_border": "#000",
            "showagain_div_id": "#cookie-law-info-again",
            "showagain_x_position": "100px",
            "text": "#333333",
            "show_once_yn": "",
            "show_once": "10000",
            "logging_on": "",
            "as_popup": "",
            "popup_overlay": "1",
            "bar_heading_text": "",
            "cookie_bar_as": "banner",
            "popup_showagain_position": "bottom-right",
            "widget_position": "left"
        };
        var log_object = {
            "ajax_url": "https:\/\/ofaweb.fr\/wp-admin\/admin-ajax.php"
        };
    </script>
    <script src="/wp-content/plugins/cookie-law-info/legacy/public/js/cookie-law-info-public3a79.js?ver=3.1.8"
        id="cookie-law-info-js"></script>
    <script src="/wp-content/plugins/maz-loader/media/public/js/mazloader91ce.js?ver=1.5.0" id="maz-loader-js"></script>
    <script src="/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minc154.js?ver=2.7.0-wc.8.6.0"
        id="jquery-blockui-js" defer data-wp-strategy="defer"></script>
    <script id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "Voir le panier",
            "cart_url": "https:\/\/ofaweb.fr\/panier\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
    </script>
    <script src="/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.mindb31.js?ver=8.6.0" id="wc-add-to-cart-js"
        defer data-wp-strategy="defer"></script>
    <script src="/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min305e.js?ver=2.1.4-wc.8.6.0"
        id="js-cookie-js" defer data-wp-strategy="defer"></script>
    <script id="woocommerce-js-extra">
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
    </script>
    <script src="/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.mindb31.js?ver=8.6.0" id="woocommerce-js"
        defer data-wp-strategy="defer"></script>
    <script id="WCPAY_ASSETS-js-extra">
        var wcpayAssets = {
            "url": "https:\/\/ofaweb.fr\/wp-content\/plugins\/woocommerce-payments\/dist\/"
        };
    </script>
    <link rel="https://api.w.org/" href="/wp-json" />
    <link rel="alternate" type="application/json" href="/wp-json/wp/v2/pages/3009.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/xmlrpc0db0.php?rsd" />
    <meta name="generator" content="WordPress 6.4.3" />
    <meta name="generator" content="WooCommerce 8.6.0" />
    <link rel='shortlink' href='/indexf65c.html?p=3009' />
    <link rel="alternate" type="application/json+oembed"
        href="/wp-json/oembed/1.0/embed5a3f.json?url=https%3A%2F%2Fofaweb.fr%2Fmon-projet%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="/wp-json/oembed/1.0/embed9cb3?url=https%3A%2F%2Fofaweb.fr%2Fmon-projet%2F&amp;format=xml" />
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#respond').html(
                '<div class="swpm-login-to-comment-msg">Veuillez vous connecter pour laisser un commentaire.</div>'
            );
        });
    </script> <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.19.2; features: e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <script type="text/javascript">
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');
    </script>
    <script type="text/javascript">
        fbq('init', '397328092319940', {}, {
            "agent": "woocommerce-8.6.0-3.1.10"
        });

        fbq('track', 'PageView', {
            "source": "woocommerce",
            "version": "8.6.0",
            "pluginVersion": "3.1.10"
        });

        document.addEventListener('DOMContentLoaded', function() {
            jQuery && jQuery(function($) {
                // Insert placeholder for events injected when a product is added to the cart through AJAX.
                $(document.body).append('<div class=\"wc-facebook-pixel-event-placeholder\"></div>');
            });
        }, false);
    </script>
    <link rel="canonical" href="index.html" />
    <meta name="description"
        content="Spécialisé dans la création de site internet, PRODIGIT SERVICES vous propose de créer votre site, contactez-nous facilement pour avoir un devis gratuit" />
    <meta name="title" content="Mon Projet - PRODIGIT SERVICES | Création de site internet | Devis" />
    <meta name="robots" content="index,follow" />
    <link rel="icon" href="/wp-content/uploads/2023/01/cropped-favicon2-32x32.png" sizes="32x32" />
    <link rel="icon" href="/wp-content/uploads/2023/01/cropped-favicon2-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="/wp-content/uploads/2023/01/cropped-favicon2-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://ofaweb.fr/wp-content/uploads/2023/01/cropped-favicon2-270x270.png" />
    <style id="wp-custom-css">
        h1,
        h2 {
            color: white;
        }

        /*panier quantité*/
        :is(.elementor-widget-wc-add-to-cart, .woocommerce div.product .elementor-widget-wc-add-to-cart) .quantity .qty {
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

        body,
        html {
            overflow-x: hidden;
        }

        .elementor {
            overflow: hidden !important;
        }

        /* point*/
        .wps_wpr_shortcode_wrapper,
        .elementor-shortcode b {
            color: #fff !important;
        }


        /* Job listing */
        .awsm-job-post-title {
            color: #9b51e0 !important
        }

        .awsm-job-specification-label,
        .awsm-job-specification-term {
            color: #fff !important;
        }

        .awsm-job-form-inner h2 {
            color: #9b51e0 !important;
        }

        .awsm-job-icon-certificate,
        .awsm-job-specification-item,
        .awsm-job-specification-type,
        .awsm-job-icon-building,
        .awsm-job-icon-calendar-times-o {
            color: #fff !important;
        }

        /* recaptcha v3 */

        .grecaptcha-logo {
            display: none !important;
        }

        .grecaptcha-badge {
            display: none !important
        }

        #wp-chatbot-chat-container {
            right: 20px !important;
        }

        .wp-chatbot-mobile-full-screen {
            right: 20px !important;
        }


        .e-atc-qty-button-holder {
            margin-bottom: 5% !important;

        }

        /*Job Manager*/
        .post-4665 h1 {
            margin-top: 10%;
        }

        .company_header .name {
            color: #9E43FF;
        }

        .job_description {
            color: white;
        }


        .application_button {
            background-color: #9E43FF;
            color: white;
            border: 0
        }

        .single_job_listing {
            margin-bottom: 10%;
        }

        .application_details {
            color: white;
        }

        .single_job_listing .location {
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

*/
    </style>
    <style id="wpforms-css-vars-root">
        :root {
            --wpforms-field-border-radius: 3px;
            --wpforms-field-background-color: #ffffff;
            --wpforms-field-border-color: rgba(0, 0, 0, 0.25);
            --wpforms-field-text-color: rgba(0, 0, 0, 0.7);
            --wpforms-label-color: rgba(0, 0, 0, 0.85);
            --wpforms-label-sublabel-color: rgba(0, 0, 0, 0.55);
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

        }
    </style>
</head>

<body
    class="page-template page-template-elementor_header_footer page page-id-3009 wp-custom-logo theme-hello-elementor woocommerce-no-js hello-elementor-child elementor-default elementor-template-full-width elementor-kit-79 elementor-page elementor-page-3009 elementor-page-2639">
    <a class="skip-link screen-reader-text" href="#content">Aller au contenu</a>
    <div data-elementor-type="header" data-elementor-id="409"
        class="elementor elementor-409 elementor-location-header" data-elementor-post-type="elementor_library">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-3d192c58 elementor-section-content-middle header-1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="3d192c58" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_effects_offset&quot;:100,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-25ae9a5a"
                    data-id="25ae9a5a" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-99d0fee elementor-widget elementor-widget-image"
                            data-id="99d0fee" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <style>
                                    /*! elementor - v3.19.0 - 07-02-2024 */
                                    .elementor-widget-image {
                                        text-align: center
                                    }

                                    .elementor-widget-image a {
                                        display: inline-block
                                    }

                                    .elementor-widget-image a img[src$=".svg"] {
                                        width: 48px
                                    }

                                    .elementor-widget-image img {
                                        vertical-align: middle;
                                        display: inline-block
                                    }
                                </style><a href="/"> <img fetchpriority="high" width="1249" height="485"
                                        src="/img/logo.png" class="attachment-full size-full wp-image-3951"
                                        alt="logo - PRODIGIT SERVICES - Création site internet"
                                        sizes="(max-width: 1249px) 100vw, 1249px" /> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-48521cf5"
                    data-id="48521cf5" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-a769af4 elementor-nav-menu__align-center elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-nav-menu--dropdown-tablet elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                            data-id="a769af4" data-element_type="widget"
                            data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                            data-widget_type="nav-menu.default">
                            <div class="elementor-widget-container">
                                <link rel="stylesheet"
                                    href="/wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min.css">
                                <nav
                                    class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
                                    <ul id="menu-1-a769af4" class="elementor-nav-menu">
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-562">
                                            <a href="/" class="elementor-item">Accueil</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-3007">
                                            <a href="/#services_section"
                                                class="elementor-item elementor-item-anchor">Services</a>
                                            {{-- <ul class="sub-menu elementor-nav-menu--dropdown">
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4490">
                                                    <a href="/formations"
                                                        class="elementor-sub-item">Formations</a></li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4491">
                                                    <a href="/maintenance-referencement"
                                                        class="elementor-sub-item">Maintenance &#038; Référencement</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1697">
                                            <a href="/#realisations"
                                                class="elementor-item elementor-item-anchor">Réalisations</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3008">
                                            <a href="/tarifs" class="elementor-item">Tarifs</a>
                                        </li>
                                        {{-- <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3289">
                                            <a href="/blog" class="elementor-item">Blog</a></li> --}}
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-565">
                                            <a href="/contact" class="elementor-item">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="elementor-menu-toggle" role="button" tabindex="0"
                                    aria-label="Permuter le menu" aria-expanded="false"> <i aria-hidden="true"
                                        role="presentation"
                                        class="elementor-menu-toggle__icon--open fas fa-stream"></i><i
                                        aria-hidden="true" role="presentation"
                                        class="elementor-menu-toggle__icon--close eicon-close"></i> <span
                                        class="elementor-screen-only">Menu</span></div>
                                <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                    aria-hidden="true">
                                    <ul id="menu-2-a769af4" class="elementor-nav-menu">
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-562">
                                            <a href="/" class="elementor-item" tabindex="-1">Accueil</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-3007">
                                            <a href="/#services_section" class="elementor-item elementor-item-anchor"
                                                tabindex="-1">Services</a>
                                            {{-- <ul class="sub-menu elementor-nav-menu--dropdown">
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4490">
                                                    <a href="/formations" class="elementor-sub-item"
                                                        tabindex="-1">Formations</a></li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4491">
                                                    <a href="/maintenance-referencement"
                                                        class="elementor-sub-item" tabindex="-1">Maintenance &#038;
                                                        Référencement</a></li>
                                            </ul> --}}
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1697">
                                            <a href="/#realisations" class="elementor-item elementor-item-anchor"
                                                tabindex="-1">Réalisations</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3008">
                                            <a href="/tarifs" class="elementor-item" tabindex="-1">Tarifs</a>
                                        </li>
                                        {{-- <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3289">
                                            <a href="/blog" class="elementor-item"
                                                tabindex="-1">Blog</a></li> --}}
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-565">
                                            <a href="/contact" class="elementor-item" tabindex="-1">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div data-elementor-type="wp-page" data-elementor-id="3009" class="elementor elementor-3009"
        data-elementor-post-type="page">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-12eda24c elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="12eda24c" data-element_type="section" id="contact_section"
            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-298fe0ab p-0"
                    data-id="298fe0ab" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-1340b462 elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-phone elementor-invisible elementor-widget elementor-widget-image"
                            data-id="1340b462" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container"> <img decoding="async" width="159"
                                    height="206" src="/wp-content/uploads/2023/01/OFA-Bot-1.gif"
                                    class="attachment-full size-full wp-image-3791"
                                    alt="OFA Bot - Assistance Virtuel - IA - PRODIGIT SERVICES" /></div>
                        </div>
                        <div class="elementor-element elementor-element-3bb4444a elementor-widget__width-auto elementor-absolute elementor-hidden-phone elementor-hidden-tablet elementor-widget elementor-widget-image"
                            data-id="3bb4444a" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container"> <img decoding="async" width="170"
                                    height="180" src="/wp-content/uploads/2020/08/Group-1-copy-1.png"
                                    class="attachment-large size-large wp-image-573" alt="PRODIGIT SERVICES filtre" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-854390b elementor-widget__width-auto elementor-absolute elementor-hidden-phone elementor-hidden-tablet elementor-widget elementor-widget-image"
                            data-id="854390b" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container"> <img loading="lazy" decoding="async"
                                    width="64" height="62"
                                    src="/wp-content/uploads/2020/08/Shape-1-copy-4-1.png"
                                    class="attachment-large size-large wp-image-574"
                                    alt="PRODIGIT SERVICES triangle" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-4087cf7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="4087cf7" data-element_type="section"
            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4797cbf"
                    data-id="4797cbf" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-71279e5c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                            data-id="71279e5c" data-element_type="section"
                            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2cd9f494"
                                    data-id="2cd9f494" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-b27affb eael-tooltip-align-center elementor-widget elementor-widget-eael-tooltip"
                                            data-id="b27affb" data-element_type="widget"
                                            data-widget_type="eael-tooltip.default">
                                            <div class="elementor-widget-container">
                                                <div class="eael-tooltip"> <span class="eael-tooltip-content"
                                                        tabindex="0" aria-describedby="tooltip-text-b27affb"><img
                                                            decoding="async"
                                                            src="/wp-content/uploads/2023/01/OFA-Bot-1.gif"
                                                            alt="OFA Bot - Assistance Virtuel - IA - PRODIGIT SERVICES"></span>
                                                    <span id="tooltip-text-b27affb"
                                                        class="eael-tooltip-text eael-tooltip-top" role="tooltip">
                                                        <p><strong>Demandez-moi de l'aide en bas à droite de votre
                                                                écran.</strong></p>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4d2f9b6"
                                    data-id="4d2f9b6" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-840cdc9 elementor-widget elementor-widget-heading"
                                            data-id="840cdc9" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.19.0 - 07-02-2024 */
                                                    .elementor-heading-title {
                                                        padding: 0;
                                                        margin: 0;
                                                        line-height: 1
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                        color: inherit;
                                                        font-size: inherit;
                                                        line-height: inherit
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                        font-size: 15px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                        font-size: 19px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                        font-size: 29px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                        font-size: 39px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                        font-size: 59px
                                                    }
                                                </style>
                                                <h2 class="elementor-heading-title elementor-size-default">Soumettre le
                                                    projet</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3fca1fa8 elementor-widget elementor-widget-text-editor"
                                            data-id="3fca1fa8" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.19.0 - 07-02-2024 */
                                                    .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                        background-color: #69727d;
                                                        color: #fff
                                                    }

                                                    .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                        color: #69727d;
                                                        border: 3px solid;
                                                        background-color: transparent
                                                    }

                                                    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                        margin-top: 8px
                                                    }

                                                    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                        width: 1em;
                                                        height: 1em
                                                    }

                                                    .elementor-widget-text-editor .elementor-drop-cap {
                                                        float: left;
                                                        text-align: center;
                                                        line-height: 1;
                                                        font-size: 50px
                                                    }

                                                    .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                        display: inline-block
                                                    }
                                                </style>
                                                <p>Ce formulaire sera le cahier des charges de votre projet, veuillez
                                                    être très précis en donnant vos informations, plus vous êtes précis
                                                    plus vite votre projet sera réalisé. Un devis vous sera envoyé
                                                    rapidement après la soumission de ce formulaire.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2247eeea"
                                    data-id="2247eeea" data-element_type="column">
                                    <div class="elementor-widget-wrap"></div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-6b2ec881 elementor-button-align-stretch elementor-widget elementor-widget-form"
                            data-id="6b2ec881" data-element_type="widget"
                            data-settings="{&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                            data-widget_type="form.default">
                            <div class="elementor-widget-container">
                                <style>
                                    /*! elementor-pro - v3.19.0 - 07-02-2024 */
                                    .elementor-button.elementor-hidden,
                                    .elementor-hidden {
                                        display: none
                                    }

                                    .e-form__step {
                                        width: 100%
                                    }

                                    .e-form__step:not(.elementor-hidden) {
                                        display: flex;
                                        flex-wrap: wrap
                                    }

                                    .e-form__buttons {
                                        flex-wrap: wrap
                                    }

                                    .e-form__buttons,
                                    .e-form__buttons__wrapper {
                                        display: flex
                                    }

                                    .e-form__indicators {
                                        display: flex;
                                        justify-content: space-between;
                                        align-items: center;
                                        flex-wrap: nowrap;
                                        font-size: 13px;
                                        margin-bottom: var(--e-form-steps-indicators-spacing)
                                    }

                                    .e-form__indicators__indicator {
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                        justify-content: center;
                                        flex-basis: 0;
                                        padding: 0 var(--e-form-steps-divider-gap)
                                    }

                                    .e-form__indicators__indicator__progress {
                                        width: 100%;
                                        position: relative;
                                        background-color: var(--e-form-steps-indicator-progress-background-color);
                                        border-radius: var(--e-form-steps-indicator-progress-border-radius);
                                        overflow: hidden
                                    }

                                    .e-form__indicators__indicator__progress__meter {
                                        width: var(--e-form-steps-indicator-progress-meter-width, 0);
                                        height: var(--e-form-steps-indicator-progress-height);
                                        line-height: var(--e-form-steps-indicator-progress-height);
                                        padding-right: 15px;
                                        border-radius: var(--e-form-steps-indicator-progress-border-radius);
                                        background-color: var(--e-form-steps-indicator-progress-color);
                                        color: var(--e-form-steps-indicator-progress-meter-color);
                                        text-align: right;
                                        transition: width .1s linear
                                    }

                                    .e-form__indicators__indicator:first-child {
                                        padding-left: 0
                                    }

                                    .e-form__indicators__indicator:last-child {
                                        padding-right: 0
                                    }

                                    .e-form__indicators__indicator--state-inactive {
                                        color: var(--e-form-steps-indicator-inactive-primary-color, #c2cbd2)
                                    }

                                    .e-form__indicators__indicator--state-inactive [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                        background-color: var(--e-form-steps-indicator-inactive-secondary-color, #fff)
                                    }

                                    .e-form__indicators__indicator--state-inactive object,
                                    .e-form__indicators__indicator--state-inactive svg {
                                        fill: var(--e-form-steps-indicator-inactive-primary-color, #c2cbd2)
                                    }

                                    .e-form__indicators__indicator--state-active {
                                        color: var(--e-form-steps-indicator-active-primary-color, #39b54a);
                                        border-color: var(--e-form-steps-indicator-active-secondary-color, #fff)
                                    }

                                    .e-form__indicators__indicator--state-active [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                        background-color: var(--e-form-steps-indicator-active-secondary-color, #fff)
                                    }

                                    .e-form__indicators__indicator--state-active object,
                                    .e-form__indicators__indicator--state-active svg {
                                        fill: var(--e-form-steps-indicator-active-primary-color, #39b54a)
                                    }

                                    .e-form__indicators__indicator--state-completed {
                                        color: var(--e-form-steps-indicator-completed-secondary-color, #fff)
                                    }

                                    .e-form__indicators__indicator--state-completed [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                        background-color: var(--e-form-steps-indicator-completed-primary-color, #39b54a)
                                    }

                                    .e-form__indicators__indicator--state-completed .e-form__indicators__indicator__label {
                                        color: var(--e-form-steps-indicator-completed-primary-color, #39b54a)
                                    }

                                    .e-form__indicators__indicator--state-completed .e-form__indicators__indicator--shape-none {
                                        color: var(--e-form-steps-indicator-completed-primary-color, #39b54a);
                                        background-color: initial
                                    }

                                    .e-form__indicators__indicator--state-completed object,
                                    .e-form__indicators__indicator--state-completed svg {
                                        fill: var(--e-form-steps-indicator-completed-secondary-color, #fff)
                                    }

                                    .e-form__indicators__indicator__icon {
                                        width: var(--e-form-steps-indicator-padding, 30px);
                                        height: var(--e-form-steps-indicator-padding, 30px);
                                        font-size: var(--e-form-steps-indicator-icon-size);
                                        border-width: 1px;
                                        border-style: solid;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        overflow: hidden;
                                        margin-bottom: 10px
                                    }

                                    .e-form__indicators__indicator__icon img,
                                    .e-form__indicators__indicator__icon object,
                                    .e-form__indicators__indicator__icon svg {
                                        width: var(--e-form-steps-indicator-icon-size);
                                        height: auto
                                    }

                                    .e-form__indicators__indicator__icon .e-font-icon-svg {
                                        height: 1em
                                    }

                                    .e-form__indicators__indicator__number {
                                        width: var(--e-form-steps-indicator-padding, 30px);
                                        height: var(--e-form-steps-indicator-padding, 30px);
                                        border-width: 1px;
                                        border-style: solid;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        margin-bottom: 10px
                                    }

                                    .e-form__indicators__indicator--shape-circle {
                                        border-radius: 50%
                                    }

                                    .e-form__indicators__indicator--shape-square {
                                        border-radius: 0
                                    }

                                    .e-form__indicators__indicator--shape-rounded {
                                        border-radius: 5px
                                    }

                                    .e-form__indicators__indicator--shape-none {
                                        border: 0
                                    }

                                    .e-form__indicators__indicator__label {
                                        text-align: center
                                    }

                                    .e-form__indicators__indicator__separator {
                                        width: 100%;
                                        height: var(--e-form-steps-divider-width);
                                        background-color: #babfc5
                                    }

                                    .e-form__indicators--type-icon,
                                    .e-form__indicators--type-icon_text,
                                    .e-form__indicators--type-number,
                                    .e-form__indicators--type-number_text {
                                        align-items: flex-start
                                    }

                                    .e-form__indicators--type-icon .e-form__indicators__indicator__separator,
                                    .e-form__indicators--type-icon_text .e-form__indicators__indicator__separator,
                                    .e-form__indicators--type-number .e-form__indicators__indicator__separator,
                                    .e-form__indicators--type-number_text .e-form__indicators__indicator__separator {
                                        margin-top: calc(var(--e-form-steps-indicator-padding, 30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2)
                                    }

                                    .elementor-field-type-hidden {
                                        display: none
                                    }

                                    .elementor-field-type-html {
                                        display: inline-block
                                    }

                                    .elementor-field-type-tel input {
                                        direction: inherit
                                    }

                                    .elementor-login .elementor-lost-password,
                                    .elementor-login .elementor-remember-me {
                                        font-size: .85em
                                    }

                                    .elementor-field-type-recaptcha_v3 .elementor-field-label {
                                        display: none
                                    }

                                    .elementor-field-type-recaptcha_v3 .grecaptcha-badge {
                                        z-index: 1
                                    }

                                    .elementor-button .elementor-form-spinner {
                                        order: 3
                                    }

                                    .elementor-form .elementor-button>span {
                                        display: flex;
                                        justify-content: center;
                                        align-items: center
                                    }

                                    .elementor-form .elementor-button .elementor-button-text {
                                        white-space: normal;
                                        flex-grow: 0
                                    }

                                    .elementor-form .elementor-button svg {
                                        height: auto
                                    }

                                    .elementor-form .elementor-button .e-font-icon-svg {
                                        height: 1em
                                    }

                                    .elementor-select-wrapper .select-caret-down-wrapper {
                                        position: absolute;
                                        top: 50%;
                                        transform: translateY(-50%);
                                        inset-inline-end: 10px;
                                        pointer-events: none;
                                        font-size: 11px
                                    }

                                    .elementor-select-wrapper .select-caret-down-wrapper svg {
                                        display: unset;
                                        width: 1em;
                                        aspect-ratio: unset;
                                        fill: currentColor
                                    }

                                    .elementor-select-wrapper .select-caret-down-wrapper i {
                                        font-size: 19px;
                                        line-height: 2
                                    }

                                    .elementor-select-wrapper.remove-before:before {
                                        content: "" !important
                                    }
                                </style>
                                <form action="/projet" method="post" name="Client">
                                    <div class="elementor-form-fields-wrapper elementor-labels-above">
                                        <div
                                            class="elementor-field-type-step elementor-field-group elementor-column elementor-field-group-field_54891a1 elementor-col-100">
                                            <div class="e-field-step elementor-hidden" data-label="Client"
                                                data-previousButton="" data-nextButton="Suivant" data-iconUrl=""
                                                data-iconLibrary="fas fa-star" data-icon=""></div>
                                        </div>
                                        <div
                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_2876437 elementor-col-50 elementor-field-required elementor-mark-required">
                                            <label for="form-field-field_2876437" class="elementor-field-label"> Nom
                                            </label> <input size="1" type="text" name="name"
                                                id="form-field-field_2876437"
                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                placeholder="Votre Nom" required="required" aria-required="true">
                                        </div>
                                        <div
                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_24a95d7 elementor-col-50 elementor-field-required elementor-mark-required">
                                            <label for="form-field-field_24a95d7" class="elementor-field-label">
                                                Prénom </label> <input size="1" type="text" name="firstname"
                                                id="form-field-field_24a95d7"
                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                placeholder="Votre Prénom" required="required" aria-required="true">
                                        </div>
                                        <div
                                            class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-field_d4cdd3f elementor-col-50 elementor-field-required elementor-mark-required">
                                            <label for="form-field-field_d4cdd3f" class="elementor-field-label"> Email
                                            </label> <input size="1" type="email" name="email"
                                                id="form-field-field_d4cdd3f"
                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                placeholder="Votre Mail" required="required" aria-required="true">
                                        </div>
                                        <div
                                            class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-field_2c69afc elementor-col-50 elementor-field-required elementor-mark-required">
                                            <label for="form-field-field_2c69afc" class="elementor-field-label">
                                                Téléphone </label> <input size="1" type="tel"
                                                name="tel" id="form-field-field_2c69afc"
                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                placeholder="Votre téléphone" required="required"
                                                aria-required="true" pattern="[0-9()#&amp;+*-=.]+"
                                                title="Seuls les caractères de numéros de téléphone (#, -, *, etc.) sont acceptés.">
                                        </div>
                                        <div
                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_7fcf58b elementor-col-50">
                                            <label for="form-field-field_7fcf58b" class="elementor-field-label"> Nom
                                                Entreprise </label> <input size="1" type="text"
                                                name="company" id="form-field-field_7fcf58b"
                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                placeholder="Nom Entreprise">
                                        </div>
                                        <div
                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_9ac897b elementor-col-50">
                                            <label for="form-field-field_9ac897b" class="elementor-field-label"> SIRET
                                                Entreprise </label> <input size="1" type="text"
                                                name="siret" id="form-field-field_9ac897b"
                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                placeholder="SIRET (Entreprise)">
                                        </div>
                                        <div
                                            class="elementor-field-type-step elementor-field-group elementor-column elementor-field-group-field_b0a75e5 elementor-col-100">
                                            <div class="e-field-step elementor-hidden" data-label="Projet"
                                                data-previousButton="Précédent" data-nextButton="Suivant"
                                                data-iconUrl="" data-iconLibrary="fas fa-star" data-icon=""></div>
                                        </div>
                                        <div
                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_5d62d07 elementor-col-50 elementor-field-required elementor-mark-required">
                                            <label for="form-field-field_5d62d07" class="elementor-field-label"> Nom
                                                Projet </label> <input size="1" type="text"
                                                name="project_name" id="form-field-field_5d62d07"
                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                placeholder="Nom Projet" required="required" aria-required="true">
                                        </div>
                                        <div
                                            class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_4390f16 elementor-col-50 elementor-field-required elementor-mark-required">
                                            <label for="form-field-field_4390f16" class="elementor-field-label"> Type
                                                Projet </label>
                                            <div class="elementor-field elementor-select-wrapper remove-before ">
                                                <div class="select-caret-down-wrapper"> <i aria-hidden="true"
                                                        class="eicon-caret-down"></i></div> <select name="service"
                                                    id="form-field-field_4390f16"
                                                    class="elementor-field-textual elementor-size-sm"
                                                    required="required" aria-required="true">
                                                    <option value="Site internet (vitrine)">Site internet (vitrine)
                                                    </option>
                                                    <option value="Site internet (e-commerce)">Site internet
                                                        (e-commerce)</option>
                                                    <option value="Maintenance &amp; Sécurité">Maintenance &amp;
                                                        Sécurité</option>
                                                    <option value="Référencement">Référencement</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-field_823533a elementor-col-100 elementor-field-required elementor-mark-required">
                                            <label for="form-field-field_823533a" class="elementor-field-label">
                                                Déscription Projet </label>
                                            <textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="description"
                                                id="form-field-field_823533a" rows="5" placeholder="Déscription  Projet" required="required"
                                                aria-required="true"></textarea>
                                        </div>
                                        <div
                                            class="elementor-field-type-step elementor-field-group elementor-column elementor-field-group-field_25961cd elementor-col-100">
                                            <div class="e-field-step elementor-hidden" data-label="Complémentaire"
                                                data-previousButton="Précédent" data-nextButton="" data-iconUrl=""
                                                data-iconLibrary="fas fa-star" data-icon=""></div>
                                        </div>
                                        <div
                                            class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_1a456c8 elementor-col-50 elementor-field-required elementor-mark-required">
                                            <label for="form-field-field_1a456c8" class="elementor-field-label">
                                                Paiements </label>
                                            <div class="elementor-field elementor-select-wrapper remove-before ">
                                                <div class="select-caret-down-wrapper"> <i aria-hidden="true"
                                                        class="eicon-caret-down"></i></div> <select name="paiement"
                                                    id="form-field-field_1a456c8"
                                                    class="elementor-field-textual elementor-size-sm"
                                                    required="required" aria-required="true">
                                                    <option value="Paiement sur le site">Paiement sur le site</option>
                                                    <option value="Virement (en 1x)">Virement (en 1x)</option>
                                                    <option value="Virement (en 2x)">Virement (en 2x)</option>
                                                    <option value="Virement (en 3x)">Virement (en 3x)</option>
                                                    <option value="Virement (en 4x)">Virement (en 4x)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_a4f3e68 elementor-col-50 elementor-field-required elementor-mark-required">
                                            <label for="form-field-field_a4f3e68" class="elementor-field-label">
                                                Délais </label>
                                            <div class="elementor-field elementor-select-wrapper remove-before ">
                                                <div class="select-caret-down-wrapper"> <i aria-hidden="true"
                                                        class="eicon-caret-down"></i></div> <select name="delai"
                                                    id="form-field-field_a4f3e68"
                                                    class="elementor-field-textual elementor-size-sm"
                                                    required="required" aria-required="true">
                                                    <option value="Aucun">Aucun</option>
                                                    <option value="1 Mois">1 Mois</option>
                                                    <option value="2 Mois">2 Mois</option>
                                                    <option value="3 Mois">3 Mois</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_d21b7d1 elementor-col-50 elementor-field-required elementor-mark-required">
                                            <label for="form-field-field_d21b7d1" class="elementor-field-label"> Nom
                                                Hebergeur </label>
                                            <div class="elementor-field elementor-select-wrapper remove-before ">
                                                <div class="select-caret-down-wrapper"> <i aria-hidden="true"
                                                        class="eicon-caret-down"></i></div> <select name="hoster"
                                                    id="form-field-field_d21b7d1"
                                                    class="elementor-field-textual elementor-size-sm"
                                                    required="required" aria-required="true">
                                                    <option value="Aucun">Aucun</option>
                                                    <option value="IONOS">IONOS</option>
                                                    <option value="OVH">OVH</option>
                                                    <option value="Google">Google</option>
                                                    <option value="Autres">Autres</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-field-type-url elementor-field-group elementor-column elementor-field-group-field_f279fd3 elementor-col-50">
                                            <label for="form-field-field_f279fd3" class="elementor-field-label"> Nom
                                                de domaine </label> <input size="1" type="url"
                                                name="domain" id="form-field-field_f279fd3"
                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                placeholder="Nom de domaine (facultatif)">
                                        </div>
                                        <div
                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_bdef53a elementor-col-50">
                                            <label for="form-field-field_bdef53a" class="elementor-field-label">
                                                Parrain </label> <input size="1" type="text" name="parrain"
                                                id="form-field-field_bdef53a"
                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                placeholder="Qui vous a recommandé PRODIGIT SERVICES ?">
                                        </div>

                                        <div
                                            class="elementor-field-type-upload elementor-field-group elementor-column elementor-field-group-field_f1e1c35 elementor-col-50">
                                            <label for="form-field-field_f1e1c35" class="elementor-field-label">
                                                Charte graphique, Images, Photos, Logo, etc </label> <input type="file"
                                                name="attachment[]" id="form-field-field_f1e1c35"
                                                class="elementor-field elementor-size-sm  elementor-upload-field"
                                                multiple="multiple" data-maxsize="64"
                                                data-maxsize-message="Ce fichier dépasse la taille maximale autorisée.">
                                        </div>
                                        <div
                                            class="elementor-field-type-recaptcha_v3 elementor-field-group elementor-column elementor-field-group-field_967b19e elementor-col-100 recaptcha_v3-bottomright">
                                            <div class="elementor-field" id="form-field-field_967b19e">
                                                <div class="elementor-g-recaptcha"
                                                    data-sitekey="6LcZZesUAAAAADc5N8bF27XoG7OvHMY10jnsGFdN"
                                                    data-type="v3" data-action="Form" data-badge="bottomright"
                                                    data-size="invisible"></div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                            <button type="submit" class="elementor-button elementor-size-md"> <span>
                                                    <span class="elementor-align-icon-right elementor-button-icon"> <i
                                                            aria-hidden="true" class="fas fa-space-shuttle"></i>
                                                    </span> <span class="elementor-button-text">Soummettre le
                                                        Projet</span> </span> </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('footer')

    <script>
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div> <button class="pswp__button pswp__button--close"
                        aria-label="Fermer (Echap)"></button> <button class="pswp__button pswp__button--share"
                        aria-label="Partagez"></button> <button class="pswp__button pswp__button--fs"
                        aria-label="Basculer en plein écran"></button> <button class="pswp__button pswp__button--zoom"
                        aria-label="Zoomer/Dézoomer"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div> <button class="pswp__button pswp__button--arrow--left"
                    aria-label="Précédent (flèche  gauche)"></button> <button
                    class="pswp__button pswp__button--arrow--right" aria-label="Suivant (flèche droite)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/template" id="tmpl-unavailable-variation-template"><p>Désolé, ce produit n&rsquo;est pas disponible. Veuillez choisir une combinaison différente.</p></script>
    <link rel='stylesheet' id='e-animations-css'
        href='/wp-content/plugins/elementor/assets/lib/animations/animations.min34a7.css?ver=3.19.2' media='all' />
    <link rel='stylesheet' id='photoswipe-css'
        href='/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.mindb31.css?ver=8.6.0'
        media='all' />
    <link rel='stylesheet' id='photoswipe-default-skin-css'
        href='/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.mindb31.css?ver=8.6.0'
        media='all' />
    <script src="/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.mindb31.js?ver=8.6.0"
        id="sourcebuster-js-js"></script>
    <script id="wc-order-attribution-js-extra">
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0e-5,
                "session": 30,
                "ajaxurl": "https:\/\/ofaweb.fr\/wp-admin\/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": true
            },
            "fields": {
                "source_type": "current.typ",
                "referrer": "current_add.rf",
                "utm_campaign": "current.cmp",
                "utm_source": "current.src",
                "utm_medium": "current.mdm",
                "utm_content": "current.cnt",
                "utm_id": "current.id",
                "utm_term": "current.trm",
                "session_entry": "current_add.ep",
                "session_start_time": "current_add.fd",
                "session_pages": "session.pgs",
                "session_count": "udata.vst",
                "user_agent": "udata.uag"
            }
        };
    </script>
    <script src="/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.mindb31.js?ver=8.6.0"
        id="wc-order-attribution-js"></script>
    <script id="eael-general-js-extra">
        var localize = {
            "ajaxurl": "https:\/\/ofaweb.fr\/wp-admin\/admin-ajax.php",
            "nonce": "7166e29841",
            "i18n": {
                "added": "Added ",
                "compare": "Compare",
                "loading": "Loading/."
            },
            "eael_translate_text": {
                "required_text": "is a required field",
                "invalid_text": "Invalid",
                "billing_text": "Billing",
                "shipping_text": "Shipping",
                "fg_mfp_counter_text": "of"
            },
            "page_permalink": "https:\/\/ofaweb.fr\/mon-projet\/",
            "cart_redirectition": "no",
            "cart_page_url": "https:\/\/ofaweb.fr\/panier\/",
            "el_breakpoints": {
                "mobile": {
                    "label": "Portrait mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Paysage",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablette en mode portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablette en mode paysage",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Portable",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "\u00c9cran large",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        };
    </script>
    <script
        src="/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min4dc9.js?ver=5.9.9"
        id="eael-general-js"></script>
    <script src="/wp-content/uploads/essential-addons-elementor/eael-3009d3da.js?ver=1706030076" id="eael-3009-js"></script>
    <script src="/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min1576.js?ver=1.2.1"
        id="smartmenus-js"></script>
    <script id="wc-cart-fragments-js-extra">
        var wc_cart_fragments_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_b418349ede369371fd1722a0ba239e12",
            "fragment_name": "wc_fragments_b418349ede369371fd1722a0ba239e12",
            "request_timeout": "5000"
        };
    </script>
    <script src="/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.mindb31.js?ver=8.6.0"
        id="wc-cart-fragments-js" defer data-wp-strategy="defer"></script>
    <script src="//www.google.com/recaptcha/api39d4.js?render=explicit&amp;ver=3.19.2" id="elementor-recaptcha_v3-api-js">
    </script>
    <script src="/wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0" id="imagesloaded-js"></script>
    <script src="/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min34a7.js?ver=3.19.2"
        id="elementor-pro-webpack-runtime-js"></script>
    <script src="/wp-content/plugins/elementor/assets/js/webpack.runtime.min34a7.js?ver=3.19.2"
        id="elementor-webpack-runtime-js"></script>
    <script src="/wp-content/plugins/elementor/assets/js/frontend-modules.min34a7.js?ver=3.19.2"
        id="elementor-frontend-modules-js"></script>
    <script src="/wp-includes/js/dist/i18n.minf92f.js?ver=7701b0c3857f914212ef" id="wp-i18n-js"></script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script id="elementor-pro-frontend-js-before">
        var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/ofaweb.fr\/wp-admin\/admin-ajax.php",
            "nonce": "fbd4235bce",
            "urls": {
                "assets": "https:\/\/ofaweb.fr\/wp-content\/plugins\/elementor-pro\/assets\/",
                "rest": "https:\/\/ofaweb.fr\/wp-json\/"
            },
            "shareButtonsNetworks": {
                "facebook": {
                    "title": "Facebook",
                    "has_counter": true
                },
                "twitter": {
                    "title": "Twitter"
                },
                "linkedin": {
                    "title": "LinkedIn",
                    "has_counter": true
                },
                "pinterest": {
                    "title": "Pinterest",
                    "has_counter": true
                },
                "reddit": {
                    "title": "Reddit",
                    "has_counter": true
                },
                "vk": {
                    "title": "VK",
                    "has_counter": true
                },
                "odnoklassniki": {
                    "title": "OK",
                    "has_counter": true
                },
                "tumblr": {
                    "title": "Tumblr"
                },
                "digg": {
                    "title": "Digg"
                },
                "skype": {
                    "title": "Skype"
                },
                "stumbleupon": {
                    "title": "StumbleUpon",
                    "has_counter": true
                },
                "mix": {
                    "title": "Mix"
                },
                "telegram": {
                    "title": "Telegram"
                },
                "pocket": {
                    "title": "Pocket",
                    "has_counter": true
                },
                "xing": {
                    "title": "XING",
                    "has_counter": true
                },
                "whatsapp": {
                    "title": "WhatsApp"
                },
                "email": {
                    "title": "Email"
                },
                "print": {
                    "title": "Print"
                }
            },
            "woocommerce": {
                "menu_cart": {
                    "cart_page_url": "https:\/\/ofaweb.fr\/panier\/",
                    "checkout_page_url": "https:\/\/ofaweb.fr\/commander\/",
                    "fragments_nonce": "228e11903f"
                }
            },
            "facebook_sdk": {
                "lang": "fr_FR",
                "app_id": ""
            },
            "lottie": {
                "defaultAnimationUrl": "https:\/\/ofaweb.fr\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
            }
        };
    </script>
    <script src="/wp-content/plugins/elementor-pro/assets/js/frontend.min34a7.js?ver=3.19.2" id="elementor-pro-frontend-js">
    </script>
    <script src="/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script src="/wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Partager sur Facebook",
                "shareOnTwitter": "Partager sur Twitter",
                "pinIt": "L\u2019\u00e9pingler",
                "download": "T\u00e9l\u00e9charger",
                "downloadImage": "T\u00e9l\u00e9charger une image",
                "fullscreen": "Plein \u00e9cran",
                "zoom": "Zoom",
                "share": "Partager",
                "playVideo": "Lire la vid\u00e9o",
                "previous": "Pr\u00e9c\u00e9dent",
                "next": "Suivant",
                "close": "Fermer",
                "a11yCarouselWrapperAriaLabel": "Carousel | Scroll horizontal: Fl\u00e8che gauche & droite",
                "a11yCarouselPrevSlideMessage": "Diapositive pr\u00e9c\u00e9dente",
                "a11yCarouselNextSlideMessage": "Diapositive suivante",
                "a11yCarouselFirstSlideMessage": "Ceci est la premi\u00e8re diapositive",
                "a11yCarouselLastSlideMessage": "Ceci est la derni\u00e8re diapositive",
                "a11yCarouselPaginationBulletMessage": "Aller \u00e0 la diapositive"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Portrait mobile",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Paysage",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablette en mode portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablette en mode paysage",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Portable",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "\u00c9cran large",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.19.2",
            "is_static": false,
            "experimentalFeatures": {
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "additional_custom_breakpoints": true,
                "theme_builder_v2": true,
                "block_editor_assets_optimize": true,
                "ai-layout": true,
                "landing-pages": true,
                "e_image_loading_optimization": true,
                "e_global_styleguide": true,
                "page-transitions": true,
                "notes": true,
                "form-submissions": true,
                "e_scroll_snap": true
            },
            "urls": {
                "assets": "https:\/\/ofaweb.fr\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper-container",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "body_background_background": "classic",
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description",
                "woocommerce_notices_elements": []
            },
            "post": {
                "id": 3009,
                "title": "Mon%20Projet%20-%20OFA%20Web%20%7C%20Cr%C3%A9ation%20de%20site%20internet%20%7C%20Devis",
                "excerpt": "",
                "featuredImage": "https:\/\/ofaweb.fr\/wp-content\/uploads\/2021\/01\/profil.jpg"
            }
        };
    </script>
    <script src="/wp-content/plugins/elementor/assets/js/frontend.min34a7.js?ver=3.19.2" id="elementor-frontend-js">
    </script>
    <script src="/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min34a7.js?ver=3.19.2"
        id="pro-elements-handlers-js"></script>
    <script src="/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min34a7.js?ver=3.19.2" id="e-sticky-js">
    </script>
    <script src="/wp-includes/js/underscore.mind584.js?ver=1.13.4" id="underscore-js"></script>
    <script id="wp-util-js-extra">
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
    </script>
    <script src="/wp-includes/js/wp-util.min84fc.js?ver=6.4.3" id="wp-util-js"></script>
    <script id="wpforms-elementor-js-extra">
        var wpformsElementorVars = {
            "captcha_provider": "recaptcha",
            "recaptcha_type": "v2"
        };
    </script>
    <script src="/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min36c7.js?ver=1.8.6.4"
        id="wpforms-elementor-js"></script>
    <script src="/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min2d95.js?ver=1.7.21-wc.8.6.0" id="zoom-js"
        defer data-wp-strategy="defer"></script>
    <script src="/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.minaf9e.js?ver=2.7.2-wc.8.6.0"
        id="flexslider-js" defer data-wp-strategy="defer"></script>
    <script src="/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.minaeaa.js?ver=4.1.1-wc.8.6.0"
        id="photoswipe-js" defer data-wp-strategy="defer"></script>
    <script src="/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.minaeaa.js?ver=4.1.1-wc.8.6.0"
        id="photoswipe-ui-default-js" defer data-wp-strategy="defer"></script>
    <script id="wc-add-to-cart-variation-js-extra">
        var wc_add_to_cart_variation_params = {
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_no_matching_variations_text": "D\u00e9sol\u00e9, aucun produit ne r\u00e9pond \u00e0 vos crit\u00e8res. Veuillez choisir une combinaison diff\u00e9rente.",
            "i18n_make_a_selection_text": "Veuillez s\u00e9lectionner des options du produit avant de l\u2019ajouter \u00e0 votre panier.",
            "i18n_unavailable_text": "D\u00e9sol\u00e9, ce produit n\u2019est pas disponible. Veuillez choisir une combinaison diff\u00e9rente."
        };
    </script>
    <script src="/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.mindb31.js?ver=8.6.0"
        id="wc-add-to-cart-variation-js" defer data-wp-strategy="defer"></script>
    <script id="wc-single-product-js-extra">
        var wc_single_product_params = {
            "i18n_required_rating_text": "Veuillez s\u00e9lectionner une note",
            "review_rating_required": "yes",
            "flexslider": {
                "rtl": false,
                "animation": "slide",
                "smoothHeight": true,
                "directionNav": false,
                "controlNav": "thumbnails",
                "slideshow": false,
                "animationSpeed": 500,
                "animationLoop": false,
                "allowOneSlide": false
            },
            "zoom_enabled": "1",
            "zoom_options": [],
            "photoswipe_enabled": "1",
            "photoswipe_options": {
                "shareEl": false,
                "closeOnScroll": false,
                "history": false,
                "hideAnimationDuration": 0,
                "showAnimationDuration": 0
            },
            "flexslider_enabled": "1"
        };
    </script>
    <script src="/wp-content/plugins/woocommerce/assets/js/frontend/single-product.mindb31.js?ver=8.6.0"
        id="wc-single-product-js" defer data-wp-strategy="defer"></script>
</body>
<!-- Mirrored from ofaweb.fr/mon-projet/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2024 08:27:20 GMT -->

</html><!-- Cache Enabler by KeyCDN @ Sun, 18 Feb 2024 12:51:23 GMT (https-index.html) -->