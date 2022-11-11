<!DOCTYPE html>
<html lang="en">
@include('components.address_bar_color')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
    <link rel="stylesheet" href="{{ $links['desktopCss'] }}">
    <script src="{{ $links['desktopJs'] }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pulltorefreshjs/0.1.22/index.umd.js" integrity="sha512-c08RNGquBScVDxl/Yf50kga+4ZEI/xuqjBxwFUTFjnRn4Zoz1qcd2m5e/E+Pi+2b0O+lwDPz+J9N3ZzHTbnxHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title></title>
</head>
<body >
    <!--<div class="design-container">
        <div class="logo-background" style="transform: scale(1.5) rotate(20deg)">
            @include("components.logo")
        </div>
    </div>-->
    <style>
        .binder{
            display: flex;
            align-items: center;
        }

        .left{
            width: 200px;
            height: 100px;
            background-color: red;
            border-top-right-radius: 40px;
        }

        .right{
            width: 200px;
            height: 100px;
            background-color: black;
            border-top-left-radius: 40px;
        }

        .center{
            width: 100px;
            height: 100px;
            background-color: white;
            border-bottom-right-radius: 100%;
            border-bottom-left-radius: 100%;
        }

    </style>
    <div class="binder">
        <div class="left"></div>
        <div class="center"></div>
        <div class="right"></div>
    </div>
</body>
</html>