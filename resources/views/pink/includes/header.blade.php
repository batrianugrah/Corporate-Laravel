<head>

    <meta charset="UTF-8" />
    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />
    <meta name="description" content="{{ isset($meta_desc) ? $meta_desc : '' }}">
    <meta name="keywords" content="{{ isset($keywords) ? $keywords : '' }}">


    <title>Pink Rio - {{ $title or '' }}</title>

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/images/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/images/favicon.ico" />
    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset(env('THEME')) }}/apple-touch-icon-144x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset(env('THEME')) }}/apple-touch-icon-114x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset(env('THEME')) }}/apple-touch-icon-72x.png" />
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset(env('THEME')) }}/apple-touch-icon-57x.png" />
    <!-- [favicon] end -->

    <!-- CSSs -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset(env('THEME')) }}/css/reset.css" /> <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset(env('THEME')) }}/style.css" /> <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" id="max-width-1024-css" href="{{ asset(env('THEME')) }}/css/max-width-1024.css" type="text/css" media="screen and (max-width: 1240px)" />
    <link rel="stylesheet" id="max-width-768-css" href="{{ asset(env('THEME')) }}/css/max-width-768.css" type="text/css" media="screen and (max-width: 987px)" />
    <link rel="stylesheet" id="max-width-480-css" href="{{ asset(env('THEME')) }}/css/max-width-480.css" type="text/css" media="screen and (max-width: 480px)" />
    <link rel="stylesheet" id="max-width-320-css" href="{{ asset(env('THEME')) }}/css/max-width-320.css" type="text/css" media="screen and (max-width: 320px)" />

    <!-- CSSs Plugin -->
    <link rel="stylesheet" id="thickbox-css" href="{{ asset(env('THEME')) }}/css/thickbox.css" type="text/css" media="all" />
    <link rel="stylesheet" id="styles-minified-css" href="{{ asset(env('THEME')) }}/css/style-minifield.css" type="text/css" media="all" />
    <link rel="stylesheet" id="buttons" href="{{ asset(env('THEME')) }}/css/buttons.css" type="text/css" media="all" />
    <link rel="stylesheet" id="cache-custom-css" href="{{ asset(env('THEME')) }}/css/cache-custom.css" type="text/css" media="all" />
    <link rel="stylesheet" id="custom-css" href="{{ asset(env('THEME')) }}/css/custom.css" type="text/css" media="all" />

    <!-- FONTs -->
    <link rel="stylesheet" id="google-fonts-css" href="http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed%3A300%7CRokkitt%7CShadows+Into+Light%7CAbel%7CDamion%7CMontez&amp;ver=3.4.2" type="text/css" media="all" />
    <link rel='stylesheet' href='{{ asset(env('THEME')) }}/css/font-awesome.css' type='text/css' media='all' />

    <!-- JAVASCRIPTs -->
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/comment-reply.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.quicksand.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.tipsy.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.cycle.min.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.anythingslider.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.eislideshow.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.easing.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.aw-showcase.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/layerslider.kreaturamedia.jquery-min.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/shortcodes.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.colorbox-min.js"></script> <!-- nav -->
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.tweetable.js"></script>

</head>