<!doctype html>
<html lang="fr-FR">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>PRODIGIT SERVICES | Création de site internet pas cher, Référencement</title>
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
            "page_location": "https:\/\/ofaweb.fr\/"
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
        href='wp-content/plugins/woocommerce-payments/dist/blocks-checkout5152.css?ver=1.0' media='all' />
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
        href='wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-public3a79.css?ver=3.1.8'
        media='all' />
    <link rel='stylesheet' id='cookie-law-info-gdpr-css'
        href='wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-gdpr3a79.css?ver=3.1.8'
        media='all' />
    <link rel='stylesheet' id='maz-loader-mazloader-google-font-css'
        href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C700&amp;display=swap&amp;ver=6.4.3'
        media='all' />
    <link rel='stylesheet' id='maz-loader-css'
        href='wp-content/plugins/maz-loader/media/public/css/mazloader91ce.css?ver=1.5.0' media='all' />
    <link rel='stylesheet' id='swpm.common-css'
        href='wp-content/plugins/simple-membership/css/swpm.commonc1f9.css?ver=4.4.2' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='wp-content/plugins/woocommerce/assets/css/woocommerce-layoutdb31.css?ver=8.6.0' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreendb31.css?ver=8.6.0'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='wp-content/plugins/woocommerce/assets/css/woocommercedb31.css?ver=8.6.0' media='all' />
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='wp-job-manager-job-listings-css'
        href='wp-content/plugins/wp-job-manager/assets/dist/css/job-listings7d5b.css?ver=598383a28ac5f9f156e4'
        media='all' />
    <link rel='stylesheet' id='parent-style-css' href='wp-content/themes/hello-elementor/style84fc.css?ver=6.4.3'
        media='all' />
    <link rel='stylesheet' id='child-style-css' href='wp-content/themes/hello-elementor-child/style84fc.css?ver=6.4.3'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-css' href='wp-content/themes/hello-elementor/style.min41fe.css?ver=3.0.1'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
        href='wp-content/themes/hello-elementor/theme.min41fe.css?ver=3.0.1' media='all' />
    <link rel='stylesheet' id='hello-elementor-header-footer-css'
        href='wp-content/themes/hello-elementor/header-footer.min41fe.css?ver=3.0.1' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='wp-content/plugins/elementor/assets/css/frontend-lite.min34a7.css?ver=3.19.2' media='all' />
    <link rel='stylesheet' id='eael-general-css'
        href='wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min4dc9.css?ver=5.9.9'
        media='all' />
    <link rel='stylesheet' id='eael-504-css'
        href='wp-content/uploads/essential-addons-elementor/eael-504abcd.css?ver=1705313081' media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min50c3.css?ver=5.27.0'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min48f5.css?ver=5.3.6' media='all' />
    <link rel='stylesheet' id='elementor-post-79-css'
        href='wp-content/uploads/elementor/css/post-79557c.css?ver=1707561995' media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='wp-content/plugins/elementor-pro/assets/css/frontend-lite.min34a7.css?ver=3.19.2' media='all' />
    <link rel='stylesheet' id='elementor-post-504-css'
        href='wp-content/uploads/elementor/css/post-5047877.css?ver=1707735481' media='all' />
    <link rel='stylesheet' id='elementor-post-409-css'
        href='wp-content/uploads/elementor/css/post-409e1fb.css?ver=1707561996' media='all' />
    <link rel='stylesheet' id='elementor-post-2460-css'
        href='wp-content/uploads/elementor/css/post-2460e1fb.css?ver=1707561996' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRighteous%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CZilla+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
    <script src="wp-includes/js/dist/vendor/regenerator-runtime.min6c85.js?ver=0.14.0" id="regenerator-runtime-js"></script>
    <script src="wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0" id="wp-polyfill-js"></script>
    <script src="wp-includes/js/dist/hooks.min2ebd.js?ver=c6aec9a8d4e5a5d543a1" id="wp-hooks-js"></script>
    <script src="/stats.wp.com/w2dfa.js?ver=202407" id="woo-tracks-js"></script>
    <script src="wp-content/plugins/google-analytics-dashboard-for-wp/assets/js/frontend-gtag.min7d6a.js?ver=7.24.3"
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
    <script src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
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
    <script src="wp-content/plugins/cookie-law-info/legacy/public/js/cookie-law-info-public3a79.js?ver=3.1.8"
        id="cookie-law-info-js"></script>
    <script src="wp-content/plugins/maz-loader/media/public/js/mazloader91ce.js?ver=1.5.0" id="maz-loader-js"></script>
    <script src="wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minc154.js?ver=2.7.0-wc.8.6.0"
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
    <script src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.mindb31.js?ver=8.6.0" id="wc-add-to-cart-js"
        defer data-wp-strategy="defer"></script>
    <script src="wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min305e.js?ver=2.1.4-wc.8.6.0"
        id="js-cookie-js" defer data-wp-strategy="defer"></script>
    <script id="woocommerce-js-extra">
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
    </script>
    <script src="wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.mindb31.js?ver=8.6.0" id="woocommerce-js"
        defer data-wp-strategy="defer"></script>
    <script id="WCPAY_ASSETS-js-extra">
        var wcpayAssets = {
            "url": "https:\/\/ofaweb.fr\/wp-content\/plugins\/woocommerce-payments\/dist\/"
        };
    </script>
    <link rel="https://api.w.org/" href="wp-json/" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/504.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <meta name="generator" content="WordPress 6.4.3" />
    <meta name="generator" content="WooCommerce 8.6.0" />
    <link rel='shortlink' href='/' />
    <link rel="alternate" type="application/json+oembed"
        href="wp-json/oembed/1.0/embed0efa.json?url=https%3A%2F%2Fofaweb.fr%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embed0313?url=https%3A%2F%2Fofaweb.fr%2F&amp;format=xml" />
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
            document, 'script', '/connect.facebook.net/en_US/fbevents.js');
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
    <link rel="canonical" href="/" />
    <meta name="twitter:image" content="https://ofaweb.fr/wp-content/uploads/2021/01/header-ofaweb.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@twitter.com/ofa_web" />
    <meta name="twitter:domain" content="PRODIGIT SERVICES - Création site internet" />
    <meta name="twitter:description"
        content="Spécialisé dans la création de site internet pas cher, PRODIGIT SERVICES vous propose de créer votre site internet sécurisé à prix bas en Île-de-France." />
    <meta name="twitter:title" content="PRODIGIT SERVICES | Création de site internet pas cher, Référencement" />
    <meta property="fb:admins" content="facebook.com/ofaweb" />
    <meta property="og:image" content="https://ofaweb.fr/wp-content/uploads/2021/01/header-ofaweb.png" />
    <meta property="og:site_name" content="PRODIGIT SERVICES - Création site internet" />
    <meta property="og:description"
        content="Spécialisé dans la création de site internet pas cher, PRODIGIT SERVICES vous propose de créer votre site internet sécurisé à prix bas en Île-de-France." />
    <meta property="og:url" content="https://ofaweb.fr/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="PRODIGIT SERVICES | Création de site internet pas cher, Référencement" />
    <meta name="description"
        content="Spécialisé dans la création de site internet pas cher, PRODIGIT SERVICES vous propose de créer votre site internet sécurisé à prix bas en Île-de-France." />
    <meta name="title" content="PRODIGIT SERVICES | Création de site internet pas cher, Référencement" />
    <meta name="robots" content="index,follow" />
    <link rel="icon" href="wp-content/uploads/2023/01/cropped-favicon2-32x32.png" sizes="32x32" />
    <link rel="icon" href="wp-content/uploads/2023/01/cropped-favicon2-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="wp-content/uploads/2023/01/cropped-favicon2-180x180.png" />
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
    class="home page-template page-template-elementor_header_footer page page-id-504 wp-custom-logo theme-hello-elementor woocommerce-no-js hello-elementor-child elementor-default elementor-template-full-width elementor-kit-79 elementor-page elementor-page-504 elementor-page-2639">
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
                                </style>
                                <a href="/">
                                    <img fetchpriority="high" width="1249" height="485" src="/img/logo.png"
                                        class="attachment-full size-full wp-image-3951"
                                        alt="logo - PRODIGIT SERVICES - Création site internet" srcset=""
                                        sizes="(max-width: 1249px) 100vw, 1249px" />
                                </a>
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
                                    href="wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min.css">
                                <nav
                                    class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
                                    <ul id="menu-1-a769af4" class="elementor-nav-menu">
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-504 current_page_item menu-item-562">
                                            <a href="/" aria-current="page"
                                                class="elementor-item elementor-item-active">Accueil</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-3007">
                                            <a href="/#services_section" aria-current="page"
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
                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1697">
                                            <a href="/#realisations" aria-current="page"
                                                class="elementor-item elementor-item-anchor">Réalisations</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3008">
                                            <a href="/tarifs" class="elementor-item">Tarifs</a>
                                        </li>
                                        {{--  <li
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
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-504 current_page_item menu-item-562">
                                            <a href="/" aria-current="page"
                                                class="elementor-item elementor-item-active"
                                                tabindex="-1">Accueil</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-3007">
                                            <a href="/#services_section" aria-current="page"
                                                class="elementor-item elementor-item-anchor"
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
                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1697">
                                            <a href="/#realisations" aria-current="page"
                                                class="elementor-item elementor-item-anchor"
                                                tabindex="-1">Réalisations</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3008">
                                            <a href="/tarifs" class="elementor-item" tabindex="-1">Tarifs</a>
                                        </li>
                                        {{--  <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3289">
                                            <a href="/blog" class="elementor-item" tabindex="-1">Blog</a>
                                        </li> --}}
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
    <div data-elementor-type="wp-page" data-elementor-id="504" class="elementor elementor-504"
        data-elementor-post-type="page">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-81b5fc5 elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
            data-id="81b5fc5" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;animation&quot;:&quot;none&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5ef6337 p-0"
                    data-id="5ef6337" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-70f1c12 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="70f1c12" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-367d5e4"
                                    data-id="367d5e4" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-3faae88 elementor-hidden-mobile elementor-widget elementor-widget-spacer"
                                            data-id="3faae88" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.19.0 - 07-02-2024 */
                                                    .elementor-column .elementor-spacer-inner {
                                                        height: var(--spacer-size)
                                                    }

                                                    .e-con {
                                                        --container-widget-width: 100%
                                                    }

                                                    .e-con-inner>.elementor-widget-spacer,
                                                    .e-con>.elementor-widget-spacer {
                                                        width: var(--container-widget-width, var(--spacer-size));
                                                        --align-self: var(--container-widget-align-self, initial);
                                                        --flex-shrink: 0
                                                    }

                                                    .e-con-inner>.elementor-widget-spacer>.elementor-widget-container,
                                                    .e-con>.elementor-widget-spacer>.elementor-widget-container {
                                                        height: 100%;
                                                        width: 100%
                                                    }

                                                    .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,
                                                    .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer {
                                                        height: 100%
                                                    }

                                                    .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,
                                                    .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner {
                                                        height: var(--container-widget-height, var(--spacer-size))
                                                    }

                                                    .e-con-inner>.elementor-widget-spacer.elementor-widget-empty,
                                                    .e-con>.elementor-widget-spacer.elementor-widget-empty {
                                                        position: relative;
                                                        min-height: 22px;
                                                        min-width: 22px
                                                    }

                                                    .e-con-inner>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon,
                                                    .e-con>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon {
                                                        position: absolute;
                                                        top: 0;
                                                        bottom: 0;
                                                        left: 0;
                                                        right: 0;
                                                        margin: auto;
                                                        padding: 0;
                                                        width: 22px;
                                                        height: 22px
                                                    }
                                                </style>
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-e1dc873 elementor-hidden-mobile elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="e1dc873" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}"
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
                                                <h1 class="elementor-heading-title elementor-size-large">Créer votre
                                                    site internet</h1>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-56a2c8f elementor-hidden-mobile elementor-widget elementor-widget-text-editor"
                                            data-id="56a2c8f" data-element_type="widget"
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
                                                <div class="flex flex-grow flex-col max-w-full">
                                                    <div class="min-h-[20px] text-message flex flex-col items-start gap-3 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto"
                                                        data-message-author-role="assistant"
                                                        data-message-id="ce2854f3-0e23-4264-99cc-48dbb6782cb0">
                                                        <div
                                                            class="markdown prose w-full break-words dark:prose-invert dark">
                                                            <p>Chez PRODIGIT SERVICES, nous sommes des experts en
                                                                création de site
                                                                internet, offrant des solutions abordables qui allient
                                                                qualité et sécurité. Notre expertise en création de site
                                                                internet vous assure une visibilité optimale en ligne
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p><strong> </strong></p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4a73978 elementor-mobile-align-center elementor-align-center elementor-hidden-mobile elementor-invisible elementor-widget elementor-widget-button"
                                            data-id="4a73978" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper"> <a
                                                        class="elementor-button elementor-button-link elementor-size-md"
                                                        href="/#partenaire"> <span
                                                            class="elementor-button-content-wrapper"> <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <i aria-hidden="true" class="far fa-handshake"></i>
                                                            </span> <span class="elementor-button-text">Dévenir
                                                                Partenaire</span> </span> </a></div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-9556f49 header-bounce elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image"
                                            data-id="9556f49" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:1000}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img decoding="async"
                                                    src="wp-content/uploads/elementor/thumbs/header-ofaweb-pgq54nbk70wva17cewgkyxv6yr5jmuouhh7s89hga4.png"
                                                    title="Création site internet PRODIGIT SERVICES"
                                                    alt="Création site internet PRODIGIT SERVICES" loading="lazy" />
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-bfd59f4 elementor-hidden-mobile elementor-widget elementor-widget-spacer"
                                            data-id="bfd59f4" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-605b636 elementor-icon-list--layout-inline elementor-mobile-align-left elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list"
                                            data-id="605b636" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;rollIn&quot;,&quot;_animation_mobile&quot;:&quot;jello&quot;}"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <link rel="stylesheet"
                                                    href="wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                                <ul class="elementor-icon-list-items elementor-inline-items">
                                                    <li class="elementor-icon-list-item elementor-inline-item"> <span
                                                            class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                                class="fas fa-long-arrow-alt-right"></i> </span> <span
                                                            class="elementor-icon-list-text">Création et refonte site
                                                            internet</span></li>
                                                    <li class="elementor-icon-list-item elementor-inline-item"> <span
                                                            class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                                class="fas fa-long-arrow-alt-right"></i> </span> <span
                                                            class="elementor-icon-list-text">Maintenance et
                                                            Référencement</span></li>
                                                    <li class="elementor-icon-list-item elementor-inline-item"> <span
                                                            class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                                class="fas fa-long-arrow-alt-right"></i> </span> <span
                                                            class="elementor-icon-list-text">Création Logo sur
                                                            mesure</span></li>
                                                    <li class="elementor-icon-list-item elementor-inline-item"> <span
                                                            class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                                class="fas fa-long-arrow-alt-right"></i> </span> <span
                                                            class="elementor-icon-list-text">Génération de
                                                            leads/clients</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-c20d9cb elementor-mobile-align-center elementor-align-center elementor-hidden-desktop elementor-hidden-tablet elementor-invisible elementor-widget elementor-widget-button"
                                            data-id="c20d9cb" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper"> <a
                                                        class="elementor-button elementor-button-link elementor-size-md"
                                                        href="/#partenaire"> <span
                                                            class="elementor-button-content-wrapper"> <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <i aria-hidden="true" class="far fa-handshake"></i>
                                                            </span> <span class="elementor-button-text">Dévenir
                                                                Partenaire</span> </span> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3be732c"
                                    data-id="3be732c" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-afa2067 elementor-hidden-mobile elementor-widget elementor-widget-spacer"
                                            data-id="afa2067" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-d060f06 header-bounce elementor-hidden-mobile elementor-widget elementor-widget-image"
                                            data-id="d060f06" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:1000}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img decoding="async"
                                                    src="wp-content/uploads/elementor/thumbs/header-ofaweb-pgq54nbk70wva17cewgkyxv6yr5jmuouhh7s89hga4.png"
                                                    title="Création site internet PRODIGIT SERVICES"
                                                    alt="Création site internet PRODIGIT SERVICES" loading="lazy" />
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-632e338 elementor-widget elementor-widget-heading"
                                            data-id="632e338" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Soumettre
                                                    rapidement un projet</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-d5ee82f elementor-button-align-center elementor-widget elementor-widget-form"
                                            data-id="d5ee82f" data-element_type="widget"
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
                                                <form class="elementor-form" method="post" name="Projet rapide">
                                                    <input type="hidden" name="post_id" value="504" /> <input
                                                        type="hidden" name="form_id" value="d5ee82f" /> <input
                                                        type="hidden" name="referer_title"
                                                        value="PRODIGIT SERVICES | Création de site internet pas cher, Référencement" />
                                                    <input type="hidden" name="queried_id" value="504" />
                                                    <div class="elementor-form-fields-wrapper elementor-labels-">
                                                        <div
                                                            class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-50 elementor-field-required">
                                                            <label for="form-field-email"
                                                                class="elementor-field-label elementor-screen-only">
                                                                Email </label> <input size="1" type="email"
                                                                name="form_fields[email]" id="form-field-email"
                                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                                placeholder="Votre email" required="required"
                                                                aria-required="true">
                                                        </div>
                                                        <div
                                                            class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-name elementor-col-50 elementor-field-required">
                                                            <label for="form-field-name"
                                                                class="elementor-field-label elementor-screen-only">
                                                                Statut </label>
                                                            <div
                                                                class="elementor-field elementor-select-wrapper remove-before ">
                                                                <div class="select-caret-down-wrapper"> <i
                                                                        aria-hidden="true"
                                                                        class="eicon-caret-down"></i></div> <select
                                                                    name="form_fields[name]" id="form-field-name"
                                                                    class="elementor-field-textual elementor-size-sm"
                                                                    required="required" aria-required="true">
                                                                    <option value="Votre statut ?">Votre statut ?
                                                                    </option>
                                                                    <option value="Particulier">Particulier</option>
                                                                    <option value="Entreprise">Entreprise</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-telephone elementor-col-50 elementor-field-required">
                                                            <label for="form-field-telephone"
                                                                class="elementor-field-label elementor-screen-only">
                                                                Téléphone </label> <input size="1"
                                                                type="text" name="form_fields[telephone]"
                                                                id="form-field-telephone"
                                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                                placeholder="Téléphone" required="required"
                                                                aria-required="true">
                                                        </div>
                                                        <div
                                                            class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-field_59f0603 elementor-col-50 elementor-field-required">
                                                            <label for="form-field-field_59f0603"
                                                                class="elementor-field-label elementor-screen-only">
                                                                services </label>
                                                            <div
                                                                class="elementor-field elementor-select-wrapper remove-before ">
                                                                <div class="select-caret-down-wrapper"> <i
                                                                        aria-hidden="true"
                                                                        class="eicon-caret-down"></i></div> <select
                                                                    name="form_fields[field_59f0603]"
                                                                    id="form-field-field_59f0603"
                                                                    class="elementor-field-textual elementor-size-sm"
                                                                    required="required" aria-required="true">
                                                                    <option value="Service souhaité ?">Service souhaité
                                                                        ?</option>
                                                                    <option value="Site vitrine">Site vitrine</option>
                                                                    <option value="Boutique en ligne">Boutique en ligne
                                                                    </option>
                                                                    <option value="Refonte de site">Refonte de site
                                                                    </option>
                                                                    <option value="Maintenance &amp; Sécurité">
                                                                        Maintenance &amp; Sécurité</option>
                                                                    <option value="Référencement">Référencement
                                                                    </option>
                                                                    <option value="Création de logo">Création de logo
                                                                    </option>
                                                                    <option value="Générer des clients">Générer des
                                                                        clients</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-field-type-recaptcha_v3 elementor-field-group elementor-column elementor-field-group-reCaptcha_index elementor-col-100 recaptcha_v3-bottomright">
                                                            <div class="elementor-field"
                                                                id="form-field-reCaptcha_index">
                                                                <div class="elementor-g-recaptcha"
                                                                    data-sitekey="6LcZZesUAAAAADc5N8bF27XoG7OvHMY10jnsGFdN"
                                                                    data-type="v3" data-action="Form"
                                                                    data-badge="bottomright" data-size="invisible">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                            <button type="submit"
                                                                class="elementor-button elementor-size-lg"> <span>
                                                                    <span
                                                                        class="elementor-align-icon-right elementor-button-icon">
                                                                        <i aria-hidden="true"
                                                                            class="fas fa-rocket"></i> </span> <span
                                                                        class="elementor-button-text">Soumettre
                                                                        !</span> </span> </button>
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
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-3546d522 elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="3546d522" data-element_type="section" id="about_section"
            data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;background_background&quot;:&quot;gradient&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-766e8df6 p-0"
                    data-id="766e8df6" data-element_type="column"
                    data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-592af5d0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="592af5d0" data-element_type="section"
                            data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2171cebe elementor-invisible"
                                    data-id="2171cebe" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4295ce97 elementor-widget elementor-widget-heading"
                                            data-id="4295ce97" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Présentation
                                                    PRODIGIT SERVICES</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-65601a0 elementor-widget elementor-widget-text-editor"
                                            data-id="65601a0" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p><strong>PRODIGIT SERVICES, spécialiste en création de site internet,
                                                        vous
                                                        propose des solutions abordables pour concrétiser votre projet
                                                        en ligne tout en respectant votre budget. </strong></p>
                                                <p><strong>Nous transformons votre vision en un puissant outil de
                                                        communication et de commerce grâce à nos services professionnels
                                                        de création de site internet. Notre expertise en matière de
                                                        référencement SEO assure également une visibilité optimale pour
                                                        votre site web, renforçant ainsi votre présence en ligne et vos
                                                        opportunités commerciales.</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-19f87b2a"
                                    data-id="19f87b2a" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_tablet&quot;:&quot;none&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-132670c5 elementor-invisible elementor-widget elementor-widget-image"
                                            data-id="132670c5" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;bounceInRight&quot;,&quot;_animation_mobile&quot;:&quot;fadeIn&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img decoding="async"
                                                    width="540" height="410"
                                                    src="wp-content/uploads/2023/12/new-gf.gif"
                                                    class="attachment-full size-full wp-image-4926"
                                                    alt="Business en ligne - Création site internet - PRODIGIT SERVICES" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-a3156de elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
            data-id="a3156de" data-element_type="section" id="partenaire"
            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-87a95b6"
                    data-id="87a95b6" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-67af9b0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="67af9b0" data-element_type="section"
                            data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4366e59 elementor-invisible"
                                    data-id="4366e59" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-5ba588d elementor-invisible elementor-widget elementor-widget-image"
                                            data-id="5ba588d" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;bounceInRight&quot;,&quot;_animation_mobile&quot;:&quot;fadeIn&quot;,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateX_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateX_direction&quot;:&quot;negative&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_translateX_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;motion_fx_translateX_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img decoding="async"
                                                    width="4000" height="4000"
                                                    src="wp-content/uploads/2022/11/AdobeStock_532858176.png"
                                                    class="attachment-full size-full wp-image-3492"
                                                    alt="Icone Web - PRODIGIT SERVICES - Création site internet"
                                                    srcset="https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_532858176.png 4000w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_532858176-300x300.png 300w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_532858176-1024x1024.png 1024w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_532858176-150x150.png 150w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_532858176-768x768.png 768w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_532858176-1536x1536.png 1536w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_532858176-2048x2048.png 2048w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_532858176-600x600.png 600w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_532858176-100x100.png 100w"
                                                    sizes="(max-width: 4000px) 100vw, 4000px" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-af4af58"
                                    data-id="af4af58" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-f422046 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="f422046" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h1 class="elementor-heading-title elementor-size-large">Vous êtes
                                                    indépendant/freelance ?</h1>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0c38ae3 elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="0c38ae3" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h1 class="elementor-heading-title elementor-size-large">Gagnez très
                                                    facilement des clients en devenant directement notre partenaire</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-546a5d4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="546a5d4" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-360fa08"
                                    data-id="360fa08" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-0a6ce26 elementor-mobile-align-center elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
                                            data-id="0a6ce26" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper"> <a
                                                        class="elementor-button elementor-button-link elementor-size-md"
                                                        href="/devenir-partenaire"> <span
                                                            class="elementor-button-content-wrapper"> <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <i aria-hidden="true" class="far fa-handshake"></i>
                                                            </span> <span class="elementor-button-text">Dévenir
                                                                Partenaire</span> </span> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d75fcd1"
                                    data-id="d75fcd1" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-577bdda elementor-mobile-align-center elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
                                            data-id="577bdda" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper"> <a
                                                        class="elementor-button elementor-button-link elementor-size-md"
                                                        href="/trouver-un-client"> <span
                                                            class="elementor-button-content-wrapper"> <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <i aria-hidden="true" class="fas fa-search"></i>
                                                            </span> <span class="elementor-button-text">Trouver un
                                                                client</span> </span> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-2fd4c6d elementor-widget elementor-widget-spacer"
                            data-id="2fd4c6d" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-bdb4d09 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="bdb4d09" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-28b4278"
                    data-id="28b4278" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-bf25b19 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="bf25b19" data-element_type="section"
                            data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f385eac"
                                    data-id="f385eac" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_tablet&quot;:&quot;none&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-3655103 elementor-widget elementor-widget-heading"
                                            data-id="3655103" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Gérer votre
                                                    fiche d'établissement Google</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-a53cdf9 elementor-widget elementor-widget-text-editor"
                                            data-id="a53cdf9" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Optimisez votre SEO et attirez davantage de clients en perfectionnant
                                                    votre fiche d&#8217;établissement Google.</p>
                                                <p>Gérez efficacement votre réputation en ligne pour renforcer votre
                                                    référencement naturel et accroître votre visibilité.</p>
                                                <p>La fiche d&#8217;établissement Google se complète avec votre site
                                                    internet, donc ne négligez pas la création de votre site internet.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-9a2c54e elementor-mobile-align-center elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
                                            data-id="9a2c54e" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper"> <a
                                                        class="elementor-button elementor-button-link elementor-size-md"
                                                        href="/google-my-business"> <span
                                                            class="elementor-button-content-wrapper"> <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <i aria-hidden="true" class="fab fa-google"></i>
                                                            </span> <span class="elementor-button-text">Découvrir la
                                                                fiche Google</span> </span> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-54f150c elementor-invisible"
                                    data-id="54f150c" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-e460ed4 elementor-invisible elementor-widget elementor-widget-image"
                                            data-id="e460ed4" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;bounceInRight&quot;,&quot;_animation_mobile&quot;:&quot;fadeIn&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img decoding="async"
                                                    src="wp-content/uploads/elementor/thumbs/gmb-info-pt5hgy5hjsslys6yj1lxquhs8qro23lofhmch5gn8y.webp"
                                                    title="Google My Businnes &#8211; PRODIGIT SERVICES"
                                                    alt="Google My Businnes - PRODIGIT SERVICES" loading="lazy" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-363ede5f elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="363ede5f" data-element_type="section" id="services_section"
            data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;gradient&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3bdee39 p-0"
                    data-id="3bdee39" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-3d9b5da0 elementor-widget__width-auto elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-image"
                            data-id="3d9b5da0" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container"> <img loading="lazy" decoding="async"
                                    width="64" height="62" src="wp-content/uploads/2020/08/Shape-1.png"
                                    class="attachment-large size-large wp-image-193"
                                    alt="PRODIGIT SERVICES triangle" /></div>
                        </div>
                        <div class="elementor-element elementor-element-2f6b3951 elementor-widget__width-auto elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-image"
                            data-id="2f6b3951" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation_mobile&quot;:&quot;fadeIn&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container"> <img loading="lazy" decoding="async"
                                    width="180" height="170" src="wp-content/uploads/2020/08/Group-1-copy-4.png"
                                    class="attachment-large size-large wp-image-200" alt="PRODIGIT SERVICES filtre" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-82a2679 elementor-widget__width-initial elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-spacer"
                            data-id="82a2679" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                            data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-c6fa536 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                            data-id="c6fa536" data-element_type="section"
                            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-221cd28"
                                    data-id="221cd28" data-element_type="column">
                                    <div class="elementor-widget-wrap"></div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-683ccee"
                                    data-id="683ccee" data-element_type="column"
                                    data-settings="{&quot;animation_mobile&quot;:&quot;none&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-05c0049 elementor-widget elementor-widget-heading"
                                            data-id="05c0049" data-element_type="widget"
                                            data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Nos
                                                    services</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0ffb450 elementor-widget elementor-widget-text-editor"
                                            data-id="0ffb450" data-element_type="widget"
                                            data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInDown&quot;}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Nous mettons à votre disposition tout notre savoir-faire pour vos
                                                    sites internet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3c84dc8"
                                    data-id="3c84dc8" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-d7d1918 elementor-hidden-mobile elementor-invisible elementor-widget elementor-widget-image"
                                            data-id="d7d1918" data-element_type="widget"
                                            data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_scale_effect&quot;:&quot;yes&quot;,&quot;motion_fx_scale_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:7,&quot;sizes&quot;:[]},&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.2,&quot;sizes&quot;:[]},&quot;motion_fx_tilt_effect&quot;:&quot;yes&quot;,&quot;motion_fx_tilt_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.7,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;bounceIn&quot;,&quot;motion_fx_scale_direction&quot;:&quot;out-in&quot;,&quot;motion_fx_scale_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:20,&quot;end&quot;:80}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img loading="lazy"
                                                    decoding="async" width="225" height="225"
                                                    src="wp-content/uploads/2021/12/1.png"
                                                    class="attachment-large size-large wp-image-2383"
                                                    alt="PRODIGIT SERVICES - Creation site, internet - Bulle"
                                                    srcset="https://ofaweb.fr/wp-content/uploads/2021/12/1.png 225w, https://ofaweb.fr/wp-content/uploads/2021/12/1-100x100.png 100w, https://ofaweb.fr/wp-content/uploads/2021/12/1-150x150.png 150w"
                                                    sizes="(max-width: 225px) 100vw, 225px" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-8bca33c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="8bca33c" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-dd4bf93"
                                    data-id="dd4bf93" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-a6ba915 eael-infobox-shape-radius eael-infobox-hover-img-shape-circle elementor-invisible elementor-widget elementor-widget-eael-info-box"
                                            data-id="a6ba915" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="eael-info-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="eael-infobox icon-on-left">
                                                    <div class="infobox-icon"> <img decoding="async"
                                                            src="wp-content/uploads/2023/01/AdobeStock_532597938-1024x1024-1.png"
                                                            alt="Icone Web - PRODIGIT SERVICES - Création site internet">
                                                    </div>
                                                    <div class="infobox-content">
                                                        <h4 class="title">Création site internet</h4>
                                                        <p>La création de site internet, même pour les budgets
                                                            restreints, est notre spécialité. Nous nous dédions à
                                                            élaborer soigneusement votre présence en ligne, garantissant
                                                            qualité et accessibilité.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-60ac732 eael-infobox-shape-radius eael-infobox-hover-img-shape-circle elementor-invisible elementor-widget elementor-widget-eael-info-box"
                                            data-id="60ac732" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="eael-info-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="eael-infobox icon-on-left">
                                                    <div class="infobox-icon"> <img decoding="async"
                                                            src="wp-content/uploads/2023/01/AdobeStock_532597902-1024x1024-1.png"
                                                            alt="Icone Web - PRODIGIT SERVICES - Création site internet">
                                                    </div>
                                                    <div class="infobox-content">
                                                        <h4 class="title">Maintenance et sécurité</h4>
                                                        <p>Maintenance et sécurité sont au cœur de nos services : nous
                                                            protégeons votre site internet en minimisant les risques de
                                                            piratage et en préservant ses performances optimales.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-e9c5292 eael-infobox-shape-radius eael-infobox-hover-img-shape-circle elementor-invisible elementor-widget elementor-widget-eael-info-box"
                                            data-id="e9c5292" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="eael-info-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="eael-infobox icon-on-left">
                                                    <div class="infobox-icon"> <img decoding="async"
                                                            src="wp-content/uploads/2022/11/AdobeStock_540409266-e1671623040762.png"
                                                            alt="Icone Web - PRODIGIT SERVICES - Création site internet">
                                                    </div>
                                                    <div class="infobox-content">
                                                        <h4 class="title">Création de logo</h4>
                                                        <p>Obtenez un logo personnalisé ou généré pour renforcer votre
                                                            identité professionnelle. Notre service de design vise à
                                                            élaborer un logo distinctif qui reflète parfaitement votre
                                                            marque et améliore votre image.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4ede334"
                                    data-id="4ede334" data-element_type="column">
                                    <div class="elementor-widget-wrap"></div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bfe1848"
                                    data-id="bfe1848" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4fa6f0b eael-infobox-shape-radius eael-infobox-hover-img-shape-circle elementor-invisible elementor-widget elementor-widget-eael-info-box"
                                            data-id="4fa6f0b" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="eael-info-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="eael-infobox icon-on-left">
                                                    <div class="infobox-icon"> <img decoding="async"
                                                            src="wp-content/uploads/elementor/thumbs/AdobeStock_529736630-1024x1024-1-q0saxv0q8dbynyn6m7gh0wst02zyp3417tvv58u1ac.png"
                                                            alt="Icone Web - PRODIGIT SERVICES - Création site internet">
                                                    </div>
                                                    <div class="infobox-content">
                                                        <h4 class="title">Refonte site internet</h4>
                                                        <p>La refonte de site internet est notre expertise : nous
                                                            revitalisons votre site web avec des modifications de
                                                            contenu sur mesure, répondant précisément à vos besoins.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-cdfe860 eael-infobox-shape-radius eael-infobox-hover-img-shape-circle elementor-invisible elementor-widget elementor-widget-eael-info-box"
                                            data-id="cdfe860" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="eael-info-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="eael-infobox icon-on-left">
                                                    <div class="infobox-icon"> <img decoding="async"
                                                            src="wp-content/uploads/2023/01/AdobeStock_539360218-1024x1024-1.png"
                                                            alt="Icone Web - PRODIGIT SERVICES - Création site internet">
                                                    </div>
                                                    <div class="infobox-content">
                                                        <h4 class="title">Référencement</h4>
                                                        <p> Nous travaillons à augmenter votre audience et à optimiser
                                                            votre référencement pour une meilleure position sur Google.
                                                            En mettant l'accent sur des stratégies de référencement
                                                            efficaces.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2897e8f eael-infobox-shape-radius eael-infobox-hover-img-shape-circle elementor-invisible elementor-widget elementor-widget-eael-info-box"
                                            data-id="2897e8f" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="eael-info-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="eael-infobox icon-on-left">
                                                    <div class="infobox-icon"> <img decoding="async"
                                                            src="wp-content/uploads/2022/11/AdobeStock_529736415-e1671623075956.png"
                                                            alt="Icone Web - PRODIGIT SERVICES - Création site internet">
                                                    </div>
                                                    <div class="infobox-content">
                                                        <h4 class="title">Générez des leads/clients</h4>
                                                        <p>Nous vous assistons dans l'identification et l'attraction de
                                                            clients potentiellement intéressés par vos produits ou
                                                            services, en ciblant efficacement ceux qui correspondent le
                                                            mieux à votre offre.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-4ae22913 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="4ae22913" data-element_type="section" id="portfolio_section"
            data-settings="{&quot;animation_mobile&quot;:&quot;none&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5fb6551b p-0"
                    data-id="5fb6551b" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-34880ca0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="34880ca0" data-element_type="section" id="realisations"
                            data-settings="{&quot;animation_mobile&quot;:&quot;none&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2a5e870a elementor-invisible"
                                    data-id="2a5e870a" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-30ff5381 elementor-widget elementor-widget-heading"
                                            data-id="30ff5381" data-element_type="widget"
                                            data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Nos
                                                    réalisations</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2ad92c27 elementor-widget elementor-widget-text-editor"
                                            data-id="2ad92c27" data-element_type="widget"
                                            data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInDown&quot;}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Découvrez notre portfolio de projets, allant de la création de  site
                                                    internet à leur gestion performante et sécurisée, assurée par une
                                                    maintenance rigoureuse.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-54e2bb3e"
                                    data-id="54e2bb3e" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-77b4afc elementor-widget elementor-widget-image"
                                            data-id="77b4afc" data-element_type="widget"
                                            data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateX_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateX_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:97}},&quot;motion_fx_scale_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;motion_fx_translateX_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;motion_fx_scale_direction&quot;:&quot;out-in&quot;,&quot;motion_fx_scale_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;motion_fx_scale_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:20,&quot;end&quot;:80}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img loading="lazy"
                                                    decoding="async" width="150" height="128"
                                                    src="wp-content/uploads/2023/04/CREATIVIP_TOP_94-min.png"
                                                    class="attachment-full size-full wp-image-4286"
                                                    alt="logo astro - PRODIGIT SERVICES" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-f454d3d eael-fg-hoverer-content-align-left elementor-invisible elementor-widget elementor-widget-eael-filterable-gallery"
                            data-id="f454d3d" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;pagination&quot;:&quot;yes&quot;,&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;,&quot;photo_gallery&quot;:&quot;yes&quot;}"
                            data-widget_type="eael-filterable-gallery.default">
                            <div class="elementor-widget-container">
                                <style id="eael-fg-inline-css-f454d3d">
                                    @media only screen and (max-width: 2399px) {
                                        .elementor-element.elementor-element-f454d3d .eael-filterable-gallery-item-wrap {
                                            width: 33.333333333333%;
                                        }
                                    }

                                    @media only screen and (max-width: 1024px) {
                                        .elementor-element.elementor-element-f454d3d .eael-filterable-gallery-item-wrap {
                                            width: 50%;
                                        }
                                    }

                                    @media only screen and (max-width: 767px) {
                                        .elementor-element.elementor-element-f454d3d .eael-filterable-gallery-item-wrap {
                                            width: 100%;
                                        }
                                    }
                                </style>
                                <div id="eael-filter-gallery-wrapper-f454d3d" class="eael-filter-gallery-wrapper"
                                    data-layout-mode="hoverer"
                                    data-breakpoints="{&quot;mobile&quot;:{&quot;label&quot;:&quot;Portrait mobile&quot;,&quot;value&quot;:767,&quot;default_value&quot;:767,&quot;direction&quot;:&quot;max&quot;,&quot;is_enabled&quot;:true},&quot;mobile_extra&quot;:{&quot;label&quot;:&quot;Mobile Paysage&quot;,&quot;value&quot;:880,&quot;default_value&quot;:880,&quot;direction&quot;:&quot;max&quot;,&quot;is_enabled&quot;:false},&quot;tablet&quot;:{&quot;label&quot;:&quot;Tablette en mode portrait&quot;,&quot;value&quot;:1024,&quot;default_value&quot;:1024,&quot;direction&quot;:&quot;max&quot;,&quot;is_enabled&quot;:true},&quot;tablet_extra&quot;:{&quot;label&quot;:&quot;Tablette en mode paysage&quot;,&quot;value&quot;:1200,&quot;default_value&quot;:1200,&quot;direction&quot;:&quot;max&quot;,&quot;is_enabled&quot;:false},&quot;laptop&quot;:{&quot;label&quot;:&quot;Portable&quot;,&quot;value&quot;:1366,&quot;default_value&quot;:1366,&quot;direction&quot;:&quot;max&quot;,&quot;is_enabled&quot;:false},&quot;widescreen&quot;:{&quot;label&quot;:&quot;\u00c9cran large&quot;,&quot;value&quot;:2400,&quot;default_value&quot;:2400,&quot;direction&quot;:&quot;min&quot;,&quot;is_enabled&quot;:false}}"
                                    data-default_control_key="0" data-custom_default_control="">
                                    {{-- <div class="eael-filter-gallery-control">
                                        <ul>
                                            <li data-load-more-status="0" data-first-init="1"
                                                class="control all-control  active " data-filter="*">Tous</li>
                                            <li data-load-more-status="0" data-first-init="0" class="control "
                                                data-filter=".eael-cf-création-de-site-internet">Création de site
                                                internet</li>
                                            <li data-load-more-status="0" data-first-init="0" class="control "
                                                data-filter=".eael-cf-maintenance-et-sécurité">Maintenance et Sécurité
                                            </li>
                                        </ul>
                                    </div> --}}
                                    <div class="eael-filter-gallery-container eael-filter-gallery-grid"
                                        data-images-per-page="6" data-total-gallery-items="37"
                                        data-nomore-item-text="No more items!"
                                        data-settings="{&quot;grid_style&quot;:&quot;grid&quot;,&quot;popup&quot;:&quot;buttons&quot;,&quot;duration&quot;:500,&quot;gallery_enabled&quot;:&quot;yes&quot;,&quot;video_gallery_yt_privacy&quot;:&quot;&quot;,&quot;control_all_text&quot;:&quot;Tous&quot;,&quot;post_id&quot;:504,&quot;widget_id&quot;:&quot;f454d3d&quot;}"
                                        data-search-all=""
                                        data-gallery-items=""
                                        data-init-show="6">
                                        <div
                                            class="eael-filterable-gallery-item-wrap eael-cf-maintenance-et-sécurité">
                                            <div class="eael-gallery-grid-item"><a href="https://iffcom.fr/">
                                                    <div class="gallery-item-thumbnail-wrap"><img decoding="async"
                                                            src="wp-content/uploads/2023/12/ioasis.png"
                                                            data-lazy-src="https://ofaweb.fr/wp-content/uploads/2023/12/ioasis.png"
                                                            alt="Réalisation - Création Site internet - Référencement - Maintenance - Prodigit"
                                                            class="gallery-item-thumbnail"></div>
                                                    <div
                                                        class="gallery-item-caption-wrap caption-style-hoverer eael-slide-up">
                                                        <div class="gallery-item-hoverer-bg"></div>
                                                        <div class="gallery-item-caption-over">
                                                            <h5 class="fg-item-title">I Oasis</h5>
                                                            <div class="fg-item-content">
                                                                <p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id"
                                                                        dir="auto">Site Vitrine - V</span>otre
                                                                    partenaire de formation en réalité virtuelle.
                                                                </p>
                                                                <p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id"
                                                                        dir="auto"> </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></a></div>
                                        </div>
                                        <div
                                            class="eael-filterable-gallery-item-wrap eael-cf-création-de-site-internet eael-cf-maintenance-et-sécurité">
                                            <div class="eael-gallery-grid-item"><a href="https://iffen.fr/">
                                                    <div class="gallery-item-thumbnail-wrap"><img decoding="async"
                                                            src="wp-content/uploads/2023/12/iffen.png"
                                                            data-lazy-src="https://ofaweb.fr/wp-content/uploads/2023/12/iffen.png"
                                                            alt="Réalisation - Création Site internet - Référencement - Maintenance - Prodigit"
                                                            class="gallery-item-thumbnail"></div>
                                                    <div
                                                        class="gallery-item-caption-wrap caption-style-hoverer eael-slide-up">
                                                        <div class="gallery-item-hoverer-bg"></div>
                                                        <div class="gallery-item-caption-over">
                                                            <h5 class="fg-item-title">IFFEN</h5>
                                                            <div class="fg-item-content">
                                                                <p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id"
                                                                        dir="auto">Site Vitrine - </span>Institut
                                                                    français de Formation en Énergétique</p>
                                                                <p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id"
                                                                        dir="auto"> </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></a></div>
                                        </div>
                                        <div
                                            class="eael-filterable-gallery-item-wrap eael-cf-maintenance-et-sécurité">
                                            <div class="eael-gallery-grid-item"><a href="https://iffcom.fr/">
                                                    <div class="gallery-item-thumbnail-wrap"><img decoding="async"
                                                            src="wp-content/uploads/2023/12/iffcom.png"
                                                            data-lazy-src="https://ofaweb.fr/wp-content/uploads/2023/12/iffcom.png"
                                                            alt="Réalisation - Création Site internet - Référencement - Maintenance - Prodigit"
                                                            class="gallery-item-thumbnail"></div>
                                                    <div
                                                        class="gallery-item-caption-wrap caption-style-hoverer eael-slide-up">
                                                        <div class="gallery-item-hoverer-bg"></div>
                                                        <div class="gallery-item-caption-over">
                                                            <h5 class="fg-item-title">IFFCOM</h5>
                                                            <div class="fg-item-content">
                                                                <p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id"
                                                                        dir="auto">Site Vitrine - IFFCOM vous
                                                                        accompagne dans votre formation et votre
                                                                        réussite.<br /></span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></a></div>
                                        </div>
                                        <div
                                            class="eael-filterable-gallery-item-wrap eael-cf-création-de-site-internet eael-cf-maintenance-et-sécurité">
                                            <div class="eael-gallery-grid-item"><a
                                                    href="https://vendome-formation.fr/">
                                                    <div class="gallery-item-thumbnail-wrap"><img decoding="async"
                                                            src="wp-content/uploads/2023/12/vendome.png"
                                                            data-lazy-src="https://ofaweb.fr/wp-content/uploads/2023/12/vendome.png"
                                                            alt="Réalisation - Création Site internet - Référencement - Maintenance - Prodigit"
                                                            class="gallery-item-thumbnail"></div>
                                                    <div
                                                        class="gallery-item-caption-wrap caption-style-hoverer eael-slide-up">
                                                        <div class="gallery-item-hoverer-bg"></div>
                                                        <div class="gallery-item-caption-over">
                                                            <h5 class="fg-item-title">Vendome Formation</h5>
                                                            <div class="fg-item-content">
                                                                <p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id"
                                                                        dir="auto">Site Vitrine - Conçu dans le
                                                                        but de vous délivrer un enseignement optimal
                                                                        dans des conditions ultra-modernes et adaptées à
                                                                        votre environnement.<br /></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></a></div>
                                        </div>
                                        <div
                                            class="eael-filterable-gallery-item-wrap eael-cf-création-de-site-internet">
                                            <div class="eael-gallery-grid-item"><a href="https://lindacollins.fr/">
                                                    <div class="gallery-item-thumbnail-wrap"><img decoding="async"
                                                            src="wp-content/uploads/2021/12/lindacollins-affiche.png"
                                                            data-lazy-src="https://ofaweb.fr/wp-content/uploads/2021/12/lindacollins-affiche.png"
                                                            alt="Linda Collins - Prodigit - Creation site internet"
                                                            class="gallery-item-thumbnail">
                                                    </div>
                                                    <div
                                                        class="gallery-item-caption-wrap caption-style-hoverer eael-slide-up">
                                                        <div class="gallery-item-hoverer-bg"></div>
                                                        <div class="gallery-item-caption-over">
                                                            <h5 class="fg-item-title">Linda Collins Beauty</h5>
                                                            <div class="fg-item-content">
                                                                <p>Site Vitrine - Institut de beauté</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></a></div>
                                        </div>
                                        <div
                                            class="eael-filterable-gallery-item-wrap eael-cf-création-de-site-internet">
                                            <div class="eael-gallery-grid-item"><a href="https://mindrh.fr/">
                                                    <div class="gallery-item-thumbnail-wrap"><img decoding="async"
                                                            src="wp-content/uploads/2021/12/mindrh-affiche.png"
                                                            data-lazy-src="https://ofaweb.fr/wp-content/uploads/2021/12/mindrh-affiche.png"
                                                            alt="Mindrh - Prodigit - Creation site internet"
                                                            class="gallery-item-thumbnail"></div>
                                                    <div
                                                        class="gallery-item-caption-wrap caption-style-hoverer eael-slide-up">
                                                        <div class="gallery-item-hoverer-bg"></div>
                                                        <div class="gallery-item-caption-over">
                                                            <h5 class="fg-item-title">MindRh - Cabinet de recrutement
                                                            </h5>
                                                            <div class="fg-item-content">
                                                                <p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id"
                                                                        dir="auto">Site vitrine - Cabinet de
                                                                        recrutement<br /></span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></a></div>
                                        </div>
                                    </div>
                                    <div class="eael-filterable-gallery-loadmore"> <a href="/realisations"
                                            class="eael-gallery-load-more elementor-button elementor-size-lg"> <span
                                                class="eael-btn-loader"></span> <span
                                                class="eael-filterable-gallery-load-more-text"> Voir plus
                                            </span> <span
                                                class="eael-filterable-gallery-load-more-icon fg-load-more-icon-right fas fa-plus-square"
                                                aria-hidden="true"></span> </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-8e3d622 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            data-id="8e3d622" data-element_type="section"
            data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;gradient&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e134dc4 p-0"
                    data-id="e134dc4" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-7efe896 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                            data-id="7efe896" data-element_type="section"
                            data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7941bb6"
                                    data-id="7941bb6" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2ae95eb elementor-hidden-mobile elementor-invisible elementor-widget elementor-widget-image"
                                            data-id="2ae95eb" data-element_type="widget"
                                            data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_scale_effect&quot;:&quot;yes&quot;,&quot;motion_fx_scale_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;bounceIn&quot;,&quot;motion_fx_scale_direction&quot;:&quot;out-in&quot;,&quot;motion_fx_scale_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:20,&quot;end&quot;:80}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img loading="lazy"
                                                    decoding="async" width="358" height="359"
                                                    src="wp-content/uploads/2021/12/6.png"
                                                    class="attachment-large size-large wp-image-2384"
                                                    alt="PRODIGIT SERVICES - Creation site internet - Bulle"
                                                    srcset="https://ofaweb.fr/wp-content/uploads/2021/12/6.png 358w, https://ofaweb.fr/wp-content/uploads/2021/12/6-300x300.png 300w, https://ofaweb.fr/wp-content/uploads/2021/12/6-100x100.png 100w, https://ofaweb.fr/wp-content/uploads/2021/12/6-150x150.png 150w, https://ofaweb.fr/wp-content/uploads/2021/12/6-230x231.png 230w, https://ofaweb.fr/wp-content/uploads/2021/12/6-350x351.png 350w"
                                                    sizes="(max-width: 358px) 100vw, 358px" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4a9ca64"
                                    data-id="4a9ca64" data-element_type="column"
                                    data-settings="{&quot;animation_mobile&quot;:&quot;none&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-7f451cf elementor-widget elementor-widget-heading"
                                            data-id="7f451cf" data-element_type="widget"
                                            data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Pourquoi
                                                    nous choisir</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-72a8482 elementor-widget elementor-widget-text-editor"
                                            data-id="72a8482" data-element_type="widget"
                                            data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInDown&quot;}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="flex flex-grow flex-col max-w-full">
                                                    <div class="min-h-[20px] text-message flex flex-col items-start gap-3 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto"
                                                        data-message-author-role="assistant"
                                                        data-message-id="3b8b9a10-e66d-419e-9918-278b30b6849b">
                                                        <div
                                                            class="markdown prose w-full break-words dark:prose-invert dark">
                                                            <p>Il est crucial de confier la création de site internet et
                                                                sa maintenance à une entreprise compétente, capable de
                                                                valoriser votre présence digitale tout en simplifiant le
                                                                processus pour vous.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-11e71db"
                                    data-id="11e71db" data-element_type="column">
                                    <div class="elementor-widget-wrap"></div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-0065242 elementor-widget__width-auto elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-image"
                            data-id="0065242" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container"> <img loading="lazy" decoding="async"
                                    width="64" height="62" src="wp-content/uploads/2020/08/Shape-1.png"
                                    class="attachment-large size-large wp-image-193"
                                    alt="PRODIGIT SERVICES triangle" /></div>
                        </div>
                        <div class="elementor-element elementor-element-e9ea932 elementor-widget__width-auto elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-image"
                            data-id="e9ea932" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation_mobile&quot;:&quot;fadeIn&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container"> <img loading="lazy" decoding="async"
                                    width="180" height="170"
                                    src="wp-content/uploads/2020/08/Group-1-copy-4.png"
                                    class="attachment-large size-large wp-image-200"
                                    alt="PRODIGIT SERVICES filtre" /></div>
                        </div>
                        <div class="elementor-element elementor-element-fce682d elementor-widget__width-initial elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-spacer"
                            data-id="fce682d" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                            data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-ebaf3cb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="ebaf3cb" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-78ae66f"
                                    data-id="78ae66f" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2038293 eael-infobox-shape-radius eael-infobox-hover-img-shape-circle elementor-invisible elementor-widget elementor-widget-eael-info-box"
                                            data-id="2038293" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="eael-info-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="eael-infobox icon-on-left">
                                                    <div class="infobox-icon"> <img decoding="async"
                                                            src="wp-content/uploads/2023/01/AdobeStock_541730598-1024x1024-1-e1681566962347.png"
                                                            alt="Icone Web - PRODIGIT SERVICES - Création site internet">
                                                    </div>
                                                    <div class="infobox-content">
                                                        <h4 class="title">Prix très abordable</h4>
                                                        <p>Rassurez-vous, même avec un budget limité, nous sommes dédiés
                                                            à concrétiser vos projets avec succès.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2f7fa99 eael-infobox-shape-radius eael-infobox-hover-img-shape-circle elementor-invisible elementor-widget elementor-widget-eael-info-box"
                                            data-id="2f7fa99" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="eael-info-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="eael-infobox icon-on-left">
                                                    <div class="infobox-icon"> <img decoding="async"
                                                            src="wp-content/uploads/2023/01/AdobeStock_521654850-1024x1024-1.png"
                                                            alt="Icone Web - PRODIGIT SERVICES - Création site internet">
                                                    </div>
                                                    <div class="infobox-content">
                                                        <h4 class="title">Assistance 24h/24</h4>
                                                        <p>Nous restons à votre disposition pour répondre à toutes vos
                                                            questions, même après la finalisation de votre projet.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b6bcced"
                                    data-id="b6bcced" data-element_type="column">
                                    <div class="elementor-widget-wrap"></div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-cc7f2be"
                                    data-id="cc7f2be" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-c415834 eael-infobox-shape-radius eael-infobox-hover-img-shape-circle elementor-invisible elementor-widget elementor-widget-eael-info-box"
                                            data-id="c415834" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="eael-info-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="eael-infobox icon-on-left">
                                                    <div class="infobox-icon"> <img decoding="async"
                                                            src="wp-content/uploads/elementor/thumbs/AdobeStock_546480017-1024x1024-1-q0say6asidreja6sscbzutyc4pgd9gct9dpowkdb7o.png"
                                                            alt="Icone Web - PRODIGIT SERVICES - Création site internet">
                                                    </div>
                                                    <div class="infobox-content">
                                                        <h4 class="title">Un site responsive</h4>
                                                        <p>Votre site sera conçu pour être parfaitement adapté à tous
                                                            les types d'écrans, que ce soit sur smartphone, tablette, et
                                                            autres appareils.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-317f49c eael-infobox-shape-radius eael-infobox-hover-img-shape-circle elementor-invisible elementor-widget elementor-widget-eael-info-box"
                                            data-id="317f49c" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="eael-info-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="eael-infobox icon-on-left">
                                                    <div class="infobox-icon"> <img decoding="async"
                                                            src="wp-content/uploads/2023/01/AdobeStock_521655065-1024x1024-1.png"
                                                            alt="Icone Web - PRODIGIT SERVICES - Création site internet">
                                                    </div>
                                                    <div class="infobox-content">
                                                        <h4 class="title">Service sécurisé</h4>
                                                        <p>Nous restons à votre disposition pour répondre à toutes vos
                                                            questions, même après la finalisation de votre projet.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section
            class="elementor-section elementor-top-section elementor-element elementor-element-b74909b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="b74909b" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3375960"
                    data-id="3375960" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-c0856c7 elementor-widget elementor-widget-heading"
                            data-id="c0856c7" data-element_type="widget"
                            data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">La Boutique Web</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-8b4d1a2 elementor-widget elementor-widget-text-editor"
                            data-id="8b4d1a2" data-element_type="widget"
                            data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInDown&quot;}"
                            data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>Lancez la création de votre site internet, bénéficiez de formations adaptées et
                                    confiez-nous la gestion de votre site web.</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9f95b59 elementor-mobile-align-center elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
                            data-id="9f95b59" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                            data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper"> <a
                                        class="elementor-button elementor-button-link elementor-size-sm"
                                        href="/la-boutique-web"> <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-icon elementor-align-icon-left"> <i
                                                    aria-hidden="true" class="far fa-newspaper"></i> </span> <span
                                                class="elementor-button-text">Voir la boutique web</span> </span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-23bb4f6e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="23bb4f6e" data-element_type="section"
            data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;background_background&quot;:&quot;gradient&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c50fd8f p-0"
                    data-id="7c50fd8f" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-2462c36b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="2462c36b" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4c863667"
                                    data-id="4c863667" data-element_type="column">
                                    <div class="elementor-widget-wrap"></div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5f418200"
                                    data-id="5f418200" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-6d7bf9ce elementor-widget elementor-widget-heading"
                                            data-id="6d7bf9ce" data-element_type="widget"
                                            data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    Contactez-nous !</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3feabf99 elementor-widget elementor-widget-text-editor"
                                            data-id="3feabf99" data-element_type="widget"
                                            data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInDown&quot;}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Pour toute question ou demande de devis, contactez PRODIGIT SERVICES,
                                                    votre
                                                    partenaire expert en solutions web, amélioration de business en
                                                    ligne et en création de site internet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2028a2fe"
                                    data-id="2028a2fe" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-92e0f49 elementor-hidden-mobile elementor-invisible elementor-widget elementor-widget-image"
                                            data-id="92e0f49" data-element_type="widget"
                                            data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_scale_effect&quot;:&quot;yes&quot;,&quot;motion_fx_scale_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:7,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;motion_fx_scale_direction&quot;:&quot;out-in&quot;,&quot;motion_fx_scale_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:20,&quot;end&quot;:80}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img loading="lazy"
                                                    decoding="async" width="225" height="225"
                                                    src="wp-content/uploads/2021/12/1.png"
                                                    class="attachment-large size-large wp-image-2383"
                                                    alt="PRODIGIT SERVICES - Creation site, internet - Bulle"
                                                    srcset="https://ofaweb.fr/wp-content/uploads/2021/12/1.png 225w, https://ofaweb.fr/wp-content/uploads/2021/12/1-100x100.png 100w, https://ofaweb.fr/wp-content/uploads/2021/12/1-150x150.png 150w"
                                                    sizes="(max-width: 225px) 100vw, 225px" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-dbeb268 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="dbeb268" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-429f7cf"
                                    data-id="429f7cf" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-783b9a8 elementor-invisible elementor-widget elementor-widget-image"
                                            data-id="783b9a8" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;zoomInDown&quot;,&quot;_animation_mobile&quot;:&quot;bounceInDown&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img loading="lazy"
                                                    decoding="async" width="640" height="640"
                                                    src="wp-content/uploads/2023/12/developer.gif"
                                                    class="attachment-full size-full wp-image-4917"
                                                    alt="Webmaster - Création site internet - PRODIGIT SERVICES" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a5761b6"
                                    data-id="a5761b6" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-7ee73bf elementor-widget elementor-widget-image"
                                            data-id="7ee73bf" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img loading="lazy"
                                                    decoding="async" width="800" height="800"
                                                    src="wp-content/uploads/2022/11/AdobeStock_529736415-1024x1024.png"
                                                    class="attachment-large size-large wp-image-3481"
                                                    alt="Icone Web - PRODIGIT SERVICES - Création site internet"
                                                    srcset="https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_529736415-1024x1024.png 1024w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_529736415-e1671623075956-300x300.png 300w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_529736415-e1671623075956-150x150.png 150w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_529736415-e1671623075956-768x768.png 768w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_529736415-1536x1536.png 1536w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_529736415-2048x2048.png 2048w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_529736415-e1671623075956-600x600.png 600w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_529736415-e1671623075956-100x100.png 100w, https://ofaweb.fr/wp-content/uploads/2022/11/AdobeStock_529736415-e1671623075956.png 1000w"
                                                    sizes="(max-width: 800px) 100vw, 800px" /></div>
                                        </div>
                                        <div class="elementor-element elementor-element-89c4b51 elementor-mobile-align-center elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
                                            data-id="89c4b51" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper"> <a
                                                        class="elementor-button elementor-button-link elementor-size-lg"
                                                        href="/contact"> <span
                                                            class="elementor-button-content-wrapper"> <span
                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                <i aria-hidden="true"
                                                                    class="far fa-calendar-alt"></i> </span> <span
                                                                class="elementor-button-text">Nous contacter</span>
                                                        </span> </a></div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-be7c54e elementor-widget elementor-widget-image"
                                            data-id="be7c54e" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img loading="lazy"
                                                    decoding="async" width="38" height="38"
                                                    src="wp-content/uploads/2020/08/485ca102-ellipse-135.png"
                                                    class="attachment-large size-large wp-image-276"
                                                    alt="PRODIGIT SERVICES point" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-2fc673a elementor-widget__width-auto elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-image"
                            data-id="2fc673a" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container"> <img loading="lazy" decoding="async"
                                    width="170" height="180"
                                    src="wp-content/uploads/2020/08/Group-1-copy.png"
                                    class="attachment-large size-large wp-image-192"
                                    alt="PRODIGIT SERVICES filtre" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section
            class="elementor-section elementor-top-section elementor-element elementor-element-a21d8d6 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            data-id="a21d8d6" data-element_type="section"
            data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;background_background&quot;:&quot;gradient&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0ccdc7a p-0"
                    data-id="0ccdc7a" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-7b5a6da elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="7b5a6da" data-element_type="section"
                            data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a376864 elementor-invisible"
                                    data-id="a376864" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-0fb416b elementor-widget elementor-widget-heading"
                                            data-id="0fb416b" data-element_type="widget"
                                            data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Notre
                                                    équipe</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2ad008f elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                            data-id="2ad008f" data-element_type="widget"
                                            data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInDown&quot;}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="flex flex-grow flex-col max-w-full">
                                                    <div class="min-h-[20px] text-message flex flex-col items-start gap-3 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto"
                                                        data-message-author-role="assistant"
                                                        data-message-id="51a4a568-58da-4409-b879-ce6a2ef1b4df">
                                                        <div
                                                            class="markdown prose w-full break-words dark:prose-invert dark">
                                                            <p>Notre équipe, spécialisée dans la création de site
                                                                internet et la gestion de la présence en ligne, déploie
                                                                tous les moyens nécessaires pour concrétiser vos projets
                                                                numériques avec succès.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-1 flex justify-start gap-3 empty:hidden">
                                                    <div
                                                        class="text-gray-400 flex self-end lg:self-center justify-center lg:justify-start mt-0 gap-1 visible">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-39ef090 elementor-widget elementor-widget-heading"
                                            data-id="39ef090" data-element_type="widget"
                                            data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-default">Ils nous
                                                    ont fait confiance</h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-eb611f8 elementor-widget elementor-widget-shortcode"
                                            data-id="eb611f8" data-element_type="widget"
                                            data-widget_type="shortcode.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-shortcode">
                                                    <div class="ti-widget ti-goog" data-layout-id="4"
                                                        data-set-id="drop-shadow" data-pid=""
                                                        data-pager-autoplay-timeout="6"
                                                        data-review-target-width="300" data-language="fr">
                                                        <div class="ti-widget-container ti-col-3">
                                                            <div class="ti-reviews-container">
                                                                <div class="ti-controls">
                                                                    <div class="ti-next"></div>
                                                                    <div class="ti-prev"></div>
                                                                </div>
                                                                <div class="ti-reviews-container-wrapper">
                                                                    <div data-empty="0"
                                                                        class="ti-review-item source-Google">
                                                                        <div class="ti-inner">
                                                                            <div class="ti-review-header">
                                                                                <div class="ti-profile-img"> <img
                                                                                        decoding="async"
                                                                                        src="https://lh3.googleusercontent.com/a/AAcHTteZUFS73cD1LK5KzCfu_4XdQF6wi3hiH4YMB8tWGqrU=s120-c-rp-mo-br100"
                                                                                        alt="hubert DIDIER" /></div>
                                                                                <div class="ti-profile-details">
                                                                                    <div class="ti-name"> hubert
                                                                                        DIDIER</div>
                                                                                    <div class="ti-date">7. Juillet,
                                                                                        2023.</div>
                                                                                </div>
                                                                            </div> <span class="ti-stars"><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span></span>
                                                                            <div
                                                                                class="ti-review-text-container ti-review-content">
                                                                                Service pour debeugage de site internet
                                                                                nikel, rapide. Merci David !</div> <span
                                                                                class="ti-read-more"
                                                                                data-container=".ti-review-content"
                                                                                data-collapse-text="Cacher"
                                                                                data-open-text="Lire la suite"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div data-empty="0"
                                                                        class="ti-review-item source-Google">
                                                                        <div class="ti-inner">
                                                                            <div class="ti-review-header">
                                                                                <div class="ti-profile-img"> <img
                                                                                        decoding="async"
                                                                                        src="https://lh3.googleusercontent.com/a-/AD_cMMT6oFT5YKEQudw7vT_QV8rTypj-e8gDQeaAsyXxHB6wXmM=s120-c-rp-mo-br100"
                                                                                        alt="RVM2005" /></div>
                                                                                <div class="ti-profile-details">
                                                                                    <div class="ti-name"> RVM2005
                                                                                    </div>
                                                                                    <div class="ti-date">6. Juillet,
                                                                                        2023.</div>
                                                                                </div>
                                                                            </div> <span class="ti-stars"><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span></span>
                                                                            <div
                                                                                class="ti-review-text-container ti-review-content">
                                                                                Personne très aimable, compréhensible,
                                                                                bonne relation. Je recommande. Ancien
                                                                                stagiaire en DESIGN.</div> <span
                                                                                class="ti-read-more"
                                                                                data-container=".ti-review-content"
                                                                                data-collapse-text="Cacher"
                                                                                data-open-text="Lire la suite"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div data-empty="0"
                                                                        class="ti-review-item source-Google">
                                                                        <div class="ti-inner">
                                                                            <div class="ti-review-header">
                                                                                <div class="ti-profile-img"> <img
                                                                                        decoding="async"
                                                                                        src="https://lh3.googleusercontent.com/a/AAcHTtfD3rzVmU-3Z7Fqbcw-0FN3LO7qufxo5M1rvyrqUIPA=s120-c-rp-mo-br100"
                                                                                        alt="Michael Naim" /></div>
                                                                                <div class="ti-profile-details">
                                                                                    <div class="ti-name"> Michael Naim
                                                                                    </div>
                                                                                    <div class="ti-date">4. Juillet,
                                                                                        2023.</div>
                                                                                </div>
                                                                            </div> <span class="ti-stars"><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span></span>
                                                                            <div
                                                                                class="ti-review-text-container ti-review-content">
                                                                                parfait</div> <span
                                                                                class="ti-read-more"
                                                                                data-container=".ti-review-content"
                                                                                data-collapse-text="Cacher"
                                                                                data-open-text="Lire la suite"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div data-empty="0"
                                                                        class="ti-review-item source-Google">
                                                                        <div class="ti-inner">
                                                                            <div class="ti-review-header">
                                                                                <div class="ti-profile-img"> <img
                                                                                        decoding="async"
                                                                                        src="https://lh3.googleusercontent.com/a/AAcHTteOYEPtTy9Vtzj6ikrtkBzuu6fw__fo97n8u_FwVYEq=s120-c-rp-mo-br100"
                                                                                        alt="Claire Xu" /></div>
                                                                                <div class="ti-profile-details">
                                                                                    <div class="ti-name"> Claire Xu
                                                                                    </div>
                                                                                    <div class="ti-date">3. Juillet,
                                                                                        2023.</div>
                                                                                </div>
                                                                            </div> <span class="ti-stars"><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span></span>
                                                                            <div
                                                                                class="ti-review-text-container ti-review-content">
                                                                                Très bonne expérience en tant que
                                                                                stagiaire. J'ai effectué un stage de 2
                                                                                mois dans cette entreprise, qui m'a
                                                                                permis d'avoir une expérience très
                                                                                enrichissante. J'ai appris et découvert
                                                                                de nouvelles choses. Mon maître de stage
                                                                                très sympathique et toujours disponible
                                                                                si nous avons des questions. Et
                                                                                n'hésitez pas à postuler, il recrute des
                                                                                stagiaires !</div> <span
                                                                                class="ti-read-more"
                                                                                data-container=".ti-review-content"
                                                                                data-collapse-text="Cacher"
                                                                                data-open-text="Lire la suite"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div data-empty="0"
                                                                        class="ti-review-item source-Google">
                                                                        <div class="ti-inner">
                                                                            <div class="ti-review-header">
                                                                                <div class="ti-profile-img"> <img
                                                                                        decoding="async"
                                                                                        src="https://lh3.googleusercontent.com/a-/AD_cMMQ0zcfgfzyOAO7hwZAMCeB1Ldkn2CxIJmb40uxqMHm60iPz=s120-c-rp-mo-ba5-br100"
                                                                                        alt="Victoria Flamingo Beauty" />
                                                                                </div>
                                                                                <div class="ti-profile-details">
                                                                                    <div class="ti-name"> Victoria
                                                                                        Flamingo Beauty</div>
                                                                                    <div class="ti-date">15. Juin,
                                                                                        2023.</div>
                                                                                </div>
                                                                            </div> <span class="ti-stars"><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span></span>
                                                                            <div
                                                                                class="ti-review-text-container ti-review-content">
                                                                                Très bon webmasteur qui s'occupe de mon
                                                                                site pro. je recommande les yeux fermés
                                                                                😋👌</div> <span class="ti-read-more"
                                                                                data-container=".ti-review-content"
                                                                                data-collapse-text="Cacher"
                                                                                data-open-text="Lire la suite"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div data-empty="0"
                                                                        class="ti-review-item source-Google">
                                                                        <div class="ti-inner">
                                                                            <div class="ti-review-header">
                                                                                <div class="ti-profile-img"> <img
                                                                                        decoding="async"
                                                                                        src="https://lh3.googleusercontent.com/a-/AD_cMMTN50EARlmiTWE40KqEV2LNarZWKT3PVX6qIIxQtud1vzo=s120-c-rp-mo-br100"
                                                                                        alt="Natercia VICENTE" />
                                                                                </div>
                                                                                <div class="ti-profile-details">
                                                                                    <div class="ti-name"> Natercia
                                                                                        VICENTE</div>
                                                                                    <div class="ti-date">9. Juin,
                                                                                        2023.</div>
                                                                                </div>
                                                                            </div> <span class="ti-stars"><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span></span>
                                                                            <div
                                                                                class="ti-review-text-container ti-review-content">
                                                                                Bonjour, la personne au téléphone très
                                                                                aimable. Pour information, prend des
                                                                                stagiaires en télétravail 100% et ça
                                                                                s'est un plus surtout pour la distance.
                                                                            </div> <span class="ti-read-more"
                                                                                data-container=".ti-review-content"
                                                                                data-collapse-text="Cacher"
                                                                                data-open-text="Lire la suite"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div data-empty="0"
                                                                        class="ti-review-item source-Google">
                                                                        <div class="ti-inner">
                                                                            <div class="ti-review-header">
                                                                                <div class="ti-profile-img"> <img
                                                                                        decoding="async"
                                                                                        src="https://lh3.googleusercontent.com/a/AAcHTtcj-fBHOzohP9vqtGRHQGLmHUXsFmkKgMCjleZMyJSd=s120-c-rp-mo-br100"
                                                                                        alt="Nishida Ayuko" /></div>
                                                                                <div class="ti-profile-details">
                                                                                    <div class="ti-name"> Nishida
                                                                                        Ayuko</div>
                                                                                    <div class="ti-date">6. Juin,
                                                                                        2023.</div>
                                                                                </div>
                                                                            </div> <span class="ti-stars"><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span></span>
                                                                            <div
                                                                                class="ti-review-text-container ti-review-content">
                                                                                Rapide et efficace. Merci !</div> <span
                                                                                class="ti-read-more"
                                                                                data-container=".ti-review-content"
                                                                                data-collapse-text="Cacher"
                                                                                data-open-text="Lire la suite"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div data-empty="0"
                                                                        class="ti-review-item source-Google">
                                                                        <div class="ti-inner">
                                                                            <div class="ti-review-header">
                                                                                <div class="ti-profile-img"> <img
                                                                                        decoding="async"
                                                                                        src="https://lh3.googleusercontent.com/a-/AD_cMMQTzPAnkj3ccdb-yUht2Z7P9ft-_7eXIklomp2zOgMD4kU=s120-c-rp-mo-ba2-br100"
                                                                                        alt="Arnaud" /></div>
                                                                                <div class="ti-profile-details">
                                                                                    <div class="ti-name"> Arnaud</div>
                                                                                    <div class="ti-date">30. Mai,
                                                                                        2023.</div>
                                                                                </div>
                                                                            </div> <span class="ti-stars"><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span></span>
                                                                            <div
                                                                                class="ti-review-text-container ti-review-content">
                                                                                Webmaster de qualité qui a su réparer
                                                                                une faille sur mon site internet très
                                                                                rapidement ! Merci</div> <span
                                                                                class="ti-read-more"
                                                                                data-container=".ti-review-content"
                                                                                data-collapse-text="Cacher"
                                                                                data-open-text="Lire la suite"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div data-empty="0"
                                                                        class="ti-review-item source-Google">
                                                                        <div class="ti-inner">
                                                                            <div class="ti-review-header">
                                                                                <div class="ti-profile-img"> <img
                                                                                        decoding="async"
                                                                                        src="https://lh3.googleusercontent.com/a/AAcHTtdqs_sBeeH8O2n6mnegKarbcEfALK_ZzzhGCx8KnMAr=s120-c-rp-mo-br100"
                                                                                        alt="Menhouk AMARA" /></div>
                                                                                <div class="ti-profile-details">
                                                                                    <div class="ti-name"> Menhouk
                                                                                        AMARA</div>
                                                                                    <div class="ti-date">18. Mai,
                                                                                        2023.</div>
                                                                                </div>
                                                                            </div> <span class="ti-stars"><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span></span>
                                                                            <div
                                                                                class="ti-review-text-container ti-review-content">
                                                                                Merci à PRODIGIT SERVICES pour ses
                                                                                formations et
                                                                                ses conseils.</div> <span
                                                                                class="ti-read-more"
                                                                                data-container=".ti-review-content"
                                                                                data-collapse-text="Cacher"
                                                                                data-open-text="Lire la suite"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div data-empty="0"
                                                                        class="ti-review-item source-Google">
                                                                        <div class="ti-inner">
                                                                            <div class="ti-review-header">
                                                                                <div class="ti-profile-img"> <img
                                                                                        decoding="async"
                                                                                        src="https://lh3.googleusercontent.com/a/AAcHTte9rQhTvYL52LnZ8V-yJrUVNfbgvzM934JadhY67NPH=s120-c-rp-mo-br100"
                                                                                        alt="bérangère Louchart" />
                                                                                </div>
                                                                                <div class="ti-profile-details">
                                                                                    <div class="ti-name"> bérangère
                                                                                        Louchart</div>
                                                                                    <div class="ti-date">4. Mai, 2023.
                                                                                    </div>
                                                                                </div>
                                                                            </div> <span class="ti-stars"><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span><span
                                                                                    class="ti-star f"></span></span>
                                                                            <div
                                                                                class="ti-review-text-container ti-review-content">
                                                                                Très contente des services de Mr
                                                                                Laroura. Novice en informatique, il a su
                                                                                régler le problème de mon site internet
                                                                                avec patience et sympathie en quelques
                                                                                minutes. Je recommande</div> <span
                                                                                class="ti-read-more"
                                                                                data-container=".ti-review-content"
                                                                                data-collapse-text="Cacher"
                                                                                data-open-text="Lire la suite"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ti-controls-line">
                                                                    <div class="dot"></div>
                                                                </div>
                                                            </div>
                                                            <div class="ti-footer">
                                                                <div class="ti-rating-text"> <span
                                                                        class="nowrap">Évaluation
                                                                        <strong>Google</strong> : </span><span
                                                                        class="nowrap"><strong>4.9</strong> sur 5,
                                                                    </span><span class="nowrap">Basée sur <strong>45
                                                                            avis</strong></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4e63dfc elementor-widget elementor-widget-spacer"
                                            data-id="4e63dfc" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7cd1fa6"
                                    data-id="7cd1fa6" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;none&quot;}">
                                    <div class="elementor-widget-wrap"></div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d157291 elementor-invisible"
                                    data-id="d157291" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;lightSpeedIn&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-a1ae204 elementor-widget__width-auto elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-image"
                                            data-id="a1ae204" data-element_type="widget"
                                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img loading="lazy"
                                                    decoding="async" width="149" height="151"
                                                    src="wp-content/uploads/2020/08/user1.png"
                                                    class="attachment-large size-large wp-image-212"
                                                    alt="PRODIGIT SERVICES equipe"
                                                    srcset="https://ofaweb.fr/wp-content/uploads/2020/08/user1.png 149w, https://ofaweb.fr/wp-content/uploads/2020/08/user1-100x100.png 100w"
                                                    sizes="(max-width: 149px) 100vw, 149px" /></div>
                                        </div>
                                        <div class="elementor-element elementor-element-4666540 elementor-widget__width-auto elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-image"
                                            data-id="4666540" data-element_type="widget"
                                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img loading="lazy"
                                                    decoding="async" width="149" height="151"
                                                    src="wp-content/uploads/2020/08/user3.png"
                                                    class="attachment-large size-large wp-image-213"
                                                    alt="PRODIGIT SERVICES equipe"
                                                    srcset="https://ofaweb.fr/wp-content/uploads/2020/08/user3.png 149w, https://ofaweb.fr/wp-content/uploads/2020/08/user3-100x100.png 100w"
                                                    sizes="(max-width: 149px) 100vw, 149px" /></div>
                                        </div>
                                        <div class="elementor-element elementor-element-4a3ea0a elementor-widget elementor-widget-eael-testimonial"
                                            data-id="4a3ea0a" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}"
                                            data-widget_type="eael-testimonial.default">
                                            <div class="elementor-widget-container">
                                                <div id="eael-testimonial-4a3ea0a"
                                                    class="eael-testimonial-item clearfix  content-top-icon-title-inline rating-five">
                                                    <div class="eael-testimonial-content eael-testimonial-inline-bio">
                                                        <div class="eael-testimonial-image">
                                                            <figure><img loading="lazy" decoding="async"
                                                                    width="424" height="372"
                                                                    src="wp-content/uploads/2022/06/ofavatar.png"
                                                                    class="attachment-full size-full wp-image-3158"
                                                                    alt="PRODIGIT SERVICES - Avatar"
                                                                    srcset="https://ofaweb.fr/wp-content/uploads/2022/06/ofavatar.png 424w, https://ofaweb.fr/wp-content/uploads/2022/06/ofavatar-300x263.png 300w"
                                                                    sizes="(max-width: 424px) 100vw, 424px" />
                                                            </figure>
                                                        </div>
                                                        <div class="bio-text">
                                                            <p class="eael-testimonial-user"
                                                                style="display: block; float: none;">David Laroura</p>
                                                            <p class="eael-testimonial-user-company">Fondateur - OFA
                                                                Web</p>
                                                        </div>
                                                        <ul class="testimonial-star-rating">
                                                            <li><i class="fas fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fas fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fas fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fas fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fas fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="eael-testimonial-content">
                                                        <div class="eael-testimonial-text">
                                                            <p><strong>Webmaster - Chargé de communication</strong><span
                                                                    style="text-decoration: underline;"><br /></span>
                                                            </p>
                                                            <p><a href="https://www.linkedin.com/company/ofa-web"><img
                                                                        loading="lazy" decoding="async"
                                                                        class="alignright"
                                                                        src="wp-content/uploads/2021/01/logo-linkedin.png"
                                                                        alt="linkedin" width="37"
                                                                        height="37" /></a><a
                                                                    href="https://partnernetwork.ionos.fr/partner/ofa.web"><br /><img
                                                                        loading="lazy" decoding="async"
                                                                        class="aligncenter"
                                                                        src="https://images-2.partnerportal.ionos.fr/items/576b7c3e-b889-4c81-a72e-453753d2709e/profiles/68d64ae2-04ab-4628-ac7f-d55998e14e76/badges/normal_white"
                                                                        alt="IONOS - Partenaire officiel"
                                                                        width="150" height="88" /></a></p>
                                                        </div>
                                                    </div> <span class="eael-testimonial-quote"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ef21c70 elementor-widget__width-auto elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-image"
                                            data-id="ef21c70" data-element_type="widget"
                                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img loading="lazy"
                                                    decoding="async" width="149" height="151"
                                                    src="wp-content/uploads/2020/08/user4.png"
                                                    class="attachment-large size-large wp-image-214"
                                                    alt="PRODIGIT SERVICES equipe"
                                                    srcset="https://ofaweb.fr/wp-content/uploads/2020/08/user4.png 149w, https://ofaweb.fr/wp-content/uploads/2020/08/user4-100x100.png 100w"
                                                    sizes="(max-width: 149px) 100vw, 149px" /></div>
                                        </div>
                                        <div class="elementor-element elementor-element-c550b6e elementor-widget__width-auto elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-image"
                                            data-id="c550b6e" data-element_type="widget"
                                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img loading="lazy"
                                                    decoding="async" width="149" height="151"
                                                    src="wp-content/uploads/2020/08/user2.png"
                                                    class="attachment-large size-large wp-image-215"
                                                    alt="PRODIGIT SERVICES equipe"
                                                    srcset="https://ofaweb.fr/wp-content/uploads/2020/08/user2.png 149w, https://ofaweb.fr/wp-content/uploads/2020/08/user2-100x100.png 100w"
                                                    sizes="(max-width: 149px) 100vw, 149px" /></div>
                                        </div>
                                        <div class="elementor-element elementor-element-c550b6e elementor-widget__width-auto elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-image"
                                            data-id="c550b6e" data-element_type="widget"
                                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container"> <img loading="lazy"
                                                    decoding="async" width="149" height="151"
                                                    src="/img/free.jpg"
                                                    class="attachment-large size-large wp-image-215"
                                                    alt="PRODIGIT SERVICES equipe"
                                                    sizes="(max-width: 149px) 100vw, 149px" /></div>
                                        </div>
                                        <div class="elementor-element elementor-element-8f1e28b elementor-widget elementor-widget-spacer"
                                            data-id="8f1e28b" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section> --}}
    </div>

    @include('footer')

    <script type="text/template" id="tmpl-unavailable-variation-template"><p>Désolé, ce produit n&rsquo;est pas disponible. Veuillez choisir une combinaison différente.</p></script>
    <link rel='stylesheet' id='font-awesome-5-all-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min4dc9.css?ver=5.9.9' media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'
        href='wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min4dc9.css?ver=5.9.9'
        media='all' />
    <link rel='stylesheet' id='ti-widget-css-google-css'
        href='wp-content/uploads/trustindex-google-widgetf9e2.css?ver=1705826583' media='all' />
    <link rel='stylesheet' id='e-animations-css'
        href='wp-content/plugins/elementor/assets/lib/animations/animations.min34a7.css?ver=3.19.2'
        media='all' />
    <link rel='stylesheet' id='photoswipe-css'
        href='wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.mindb31.css?ver=8.6.0'
        media='all' />
    <link rel='stylesheet' id='photoswipe-default-skin-css'
        href='wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.mindb31.css?ver=8.6.0'
        media='all' />
    <script src="wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.mindb31.js?ver=8.6.0"
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
    <script src="wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.mindb31.js?ver=8.6.0"
        id="wc-order-attribution-js"></script>
    <script id="eael-general-js-extra">
        var localize = {
            "ajaxurl": "https:\/\/ofaweb.fr\/wp-admin\/admin-ajax.php",
            "nonce": "ec996460cf",
            "i18n": {
                "added": "Added ",
                "compare": "Compare",
                "loading": "Loading..."
            },
            "eael_translate_text": {
                "required_text": "is a required field",
                "invalid_text": "Invalid",
                "billing_text": "Billing",
                "shipping_text": "Shipping",
                "fg_mfp_counter_text": "of"
            },
            "page_permalink": "https:\/\/ofaweb.fr\/",
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
        src="wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min4dc9.js?ver=5.9.9"
        id="eael-general-js"></script>
    <script src="wp-content/uploads/essential-addons-elementor/eael-504abcd.js?ver=1705313081" id="eael-504-js"></script>
    <script src="wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min1576.js?ver=1.2.1"
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
    <script src="wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.mindb31.js?ver=8.6.0"
        id="wc-cart-fragments-js" defer data-wp-strategy="defer"></script>
    <script src="/www.google.com/recaptcha/api39d4.js?render=explicit&amp;ver=3.19.2" id="elementor-recaptcha_v3-api-js">
    </script>
    <script src="wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min4dc9.js?ver=5.9.9"
        id="font-awesome-4-shim-js"></script>
    <script defer async src="/cdn.trustindex.io/loader84fc.js?ver=6.4.3" id="trustindex-js-js"></script>
    <script id="trustindex-js-js-after">
        (function ti_init() {
            if (typeof Trustindex == "undefined") {
                setTimeout(ti_init, 1985);
                return false;
            }
            if (typeof Trustindex.pager_inited != "undefined") {
                return false;
            }
            Trustindex.init_pager(document.querySelectorAll(".ti-widget"));
        })();
    </script>
    <script src="wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0" id="imagesloaded-js"></script>
    <script src="wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min34a7.js?ver=3.19.2"
        id="elementor-pro-webpack-runtime-js"></script>
    <script src="wp-content/plugins/elementor/assets/js/webpack.runtime.min34a7.js?ver=3.19.2"
        id="elementor-webpack-runtime-js"></script>
    <script src="wp-content/plugins/elementor/assets/js/frontend-modules.min34a7.js?ver=3.19.2"
        id="elementor-frontend-modules-js"></script>
    <script src="wp-includes/js/dist/i18n.minf92f.js?ver=7701b0c3857f914212ef" id="wp-i18n-js"></script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script id="elementor-pro-frontend-js-before">
        var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/ofaweb.fr\/wp-admin\/admin-ajax.php",
            "nonce": "f921f45665",
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
                    "fragments_nonce": "f1f5a892d6"
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
    <script src="wp-content/plugins/elementor-pro/assets/js/frontend.min34a7.js?ver=3.19.2" id="elementor-pro-frontend-js">
    </script>
    <script src="wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script src="wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js"></script>
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
                "id": 504,
                "title": "OFA%20Web%20%7C%20Cr%C3%A9ation%20de%20site%20internet%20pas%20cher%2C%20R%C3%A9f%C3%A9rencement",
                "excerpt": "",
                "featuredImage": "https:\/\/ofaweb.fr\/wp-content\/uploads\/2021\/01\/header-ofaweb.png"
            }
        };
    </script>
    <script src="wp-content/plugins/elementor/assets/js/frontend.min34a7.js?ver=3.19.2" id="elementor-frontend-js"></script>
    <script src="wp-content/plugins/elementor-pro/assets/js/elements-handlers.min34a7.js?ver=3.19.2"
        id="pro-elements-handlers-js"></script>
    <script src="wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min34a7.js?ver=3.19.2" id="e-sticky-js">
    </script>
    <script src="wp-includes/js/underscore.mind584.js?ver=1.13.4" id="underscore-js"></script>
    <script id="wp-util-js-extra">
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
    </script>
    <script src="wp-includes/js/wp-util.min84fc.js?ver=6.4.3" id="wp-util-js"></script>
    <script id="wpforms-elementor-js-extra">
        var wpformsElementorVars = {
            "captcha_provider": "recaptcha",
            "recaptcha_type": "v2"
        };
    </script>
    <script src="wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min36c7.js?ver=1.8.6.4"
        id="wpforms-elementor-js"></script>
    <script src="wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min2d95.js?ver=1.7.21-wc.8.6.0" id="zoom-js"
        defer data-wp-strategy="defer"></script>
    <script src="wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.minaf9e.js?ver=2.7.2-wc.8.6.0"
        id="flexslider-js" defer data-wp-strategy="defer"></script>
    <script src="wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.minaeaa.js?ver=4.1.1-wc.8.6.0"
        id="photoswipe-js" defer data-wp-strategy="defer"></script>
    <script src="wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.minaeaa.js?ver=4.1.1-wc.8.6.0"
        id="photoswipe-ui-default-js" defer data-wp-strategy="defer"></script>
    <script id="wc-add-to-cart-variation-js-extra">
        var wc_add_to_cart_variation_params = {
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_no_matching_variations_text": "D\u00e9sol\u00e9, aucun produit ne r\u00e9pond \u00e0 vos crit\u00e8res. Veuillez choisir une combinaison diff\u00e9rente.",
            "i18n_make_a_selection_text": "Veuillez s\u00e9lectionner des options du produit avant de l\u2019ajouter \u00e0 votre panier.",
            "i18n_unavailable_text": "D\u00e9sol\u00e9, ce produit n\u2019est pas disponible. Veuillez choisir une combinaison diff\u00e9rente."
        };
    </script>
    <script src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.mindb31.js?ver=8.6.0"
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
    <script src="wp-content/plugins/woocommerce/assets/js/frontend/single-product.mindb31.js?ver=8.6.0"
        id="wc-single-product-js" defer data-wp-strategy="defer"></script>
</body>

</html>
