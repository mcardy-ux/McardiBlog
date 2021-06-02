<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Blog Corporativo Mcardi Studios">
        <meta name="author" content="Juan David Cardenas">
        <title>{{ env('APP_NAME') }}  @yield('title')</title>
        <!-- Css -->
        <link rel="stylesheet" href="{{asset('js/action/plugins/goodlayers_core/plugins/combine/style.css')}}">
        <link rel="stylesheet" href="{{asset('js/action/plugins/goodlayers_core/include/css/page_builder.css')}}" >
        <link rel="stylesheet" href="{{asset('js/action/plugins/revslider/public/assets/css/settings.css')}}">
        <link rel="stylesheet" href="{{asset('js/action/plugins/zilla_likes/styles/zilla_likes.css')}}">
        <link rel="stylesheet" href="{{asset('css/style_core.css')}}">
        <link rel="stylesheet" href="{{asset('css/akea_style_custom.css')}}">

        <!-- Fonts -->
        <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700%2C800" type=text/css media=all>
        <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Montserrat" type=text/css media=all>
        <link rel=stylesheet href="https://fonts.googleapis.com/css?family=PT+Serif" type=text/css media=all>
        <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Open+Sans" type=text/css media=all>
        <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPT+Serif%3Aregular%2Citalic%2C700%2C700italic%7COpen+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&amp;subset=latin%2Clatin-ext%2Cdevanagari%2Ccyrillic-ext%2Cvietnamese%2Ccyrillic%2Cgreek-ext%2Cgreek" type=text/css media=all>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @include('sections.header')
        @yield('content')
        @include('sections.footer')
        @include('sections.social_media')
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                background-color: #fff;
            }
        </style>
    </head>
    <body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js akea-body akea-body-front akea-full  akea-with-sticky-navigation  akea-blockquote-style-1 gdlr-core-link-to-lightbox" data-home-url=index.html>
      


        <script src="{{asset('js/action/jquery/jquery.js')}}"></script>
        <script src="{{asset('js/action/jquery/jquery_migrate.min.js')}}"></script>
        <script>
            var zilla_likes = {
                "ajaxurl": ""
            };
        </script>
        <script src="{{asset('js/action/plugins/plugins/zilla_likes/scripts/zilla_likes.js')}}"></script>
        <script src="{{asset('js/action/plugins/plugins/goodlayers_core/plugins/combine/script.js')}}"></script>
        <script>
            var gdlr_core_pbf = {
                "admin": "",
                "video": {
                    "width": "640",
                    "height": "360"
                },
                "ajax_url": "#"
            };
        </script>
        <script src="{{asset('js/action/plugins/goodlayers_core/include/js/page_builder.js')}}"></script>
        <script src="{{asset('js/action/jquery/ui/effect.min.js')}}"></script>
        <script src="{{asset('js/action/script-core.js')}}"></script>


    </body>
</html>
