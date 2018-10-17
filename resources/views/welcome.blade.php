<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Instascan &ndash; Demo</title>
        <link rel="icon" type="image/png" href="{{ asset('instascan/images/favicon.png', true) }}">
        <link rel="stylesheet" href="{{ asset('instascan/css/style.css', true) }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <a href="https://github.com/schmich/instascan"><img style="position: absolute; top: 0; right: 0; border: 0; z-index: 1" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>
    <div id="app">
      <div class="preview-container">
        <video id="preview"></video>
      </div>
    </div>

    <script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js', true) }}"></script>
    <script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js', true) }}"></script>
    <script type="text/javascript" src="{{ asset('https://rawgit.com/schmich/instascan-builds/master/instascan.min.js', true) }}"></script>

    <script type="text/javascript" src="{{ asset('instascan/js/app.js', true) }}"></script>


    <script type="text/javascript">
              let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
              scanner.addListener('scan', function (code) {
                  console.log(code);
              });
              Instascan.Camera.getCameras().then(function (cameras) {
                  if (cameras.length > 0) {
                      scanner.start(cameras[0]);
                  } else {
                      console.error('No cameras found.');
                  }
              }).catch(function (e) {
                  console.error(e);
              });
          </script>
    </body>
</html>
