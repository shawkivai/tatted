<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.webisir.com/the-tattooist/index-one-page by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 16:39:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
        <title>Tatted - Tattoo Removal Service</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/global.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
        <link href="{!!url('css/jquery-ui.autocomplete.css')!!}" rel="stylesheet">
        <script src="{!!url('/js/jquery.min.js')!!}"></script>
        <script src="{!!url('/js/jquery-ui.min.js')!!}"></script>
    </head>
    <body class="one-page">

        <div class="wrapper">

            <header id="master-header" class="full-screen overlayed" style="height:16%">

                <div class="bg-overlay"></div>
                <div id="media-container"></div>
                <div class="top-header">
                    @yield('menu')
  
                    

                </div>
            </header>

        <div id="app">
            <main>
                @yield('content')
            </main>
        </div>

            <script src="{!!url('/js/jquery.min.js')!!}"></script>
            <script src="{!!url('/js/jquery-ui.min.js')!!}"></script>
            <script src="{!!url('/js/common.js')!!}"></script>
            <script src="{!!url('/js/config.js')!!}"></script>
            <script src="{!!url('/js/main.js')!!}"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
</body>
</html>
