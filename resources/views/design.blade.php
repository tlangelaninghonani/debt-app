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
<!--<style>
    :root{
        --primary-color-thick: #fd3f00;
        --primary-color-exp: #fd7600;
        --primary-color: #fd7600;
    }
    
</style>-->
<style>
    .vid-container{
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .big-gap{
        gap: 100px;
    }

    .stores img{
        width: 20px
    }
</style>
<body>
    <!--<div class="vid-container display-flex-center">
        <div id="frame1" class="display-none">
            <div class="text-align-center">
                <span class="material-symbols-sharp " style="font-size: 200px !important">
                cookie
                </span><br>
                <div class="breaker"></div>
                <span style="font-size: 60px">Bit more than you can <span style="font-size: 60px; color: #fd7600">chew</span>?</span>
            </div>
        </div>
        <div id="frame2" class="">
            <div class="display-flex-align big-gap">
                <span style="font-size: 60px">Get a <br> <span style="font-size: 60px; color: #fd7600">Debt <br> Counselling</span> <br> that <br> works</span>
                <img src="/frame0.svg" alt="">
            </div>
        </div>
        <div id="frame3" class="display-none">
            <div class="display-flex-align big-gap">
                <span style="font-size: 60px">Do it <br> all at the <br> <span style="font-size: 60px; color: #fd7600">palm of <br> your hand</span></span>
                <img src="/frame3.svg" alt="">
            </div>
        </div>
        <div id="frame4" class="display-none">
            <div class="display-flex-align big-gap">
                <div class="text-align-center">
                    <span style="font-size: 60px">App <br> coming <br> <span style="font-size: 60px; color: #fd7600">soon</span></span>
                    <div class="breaker"></div>
                    <div class="display-flex-center mid-gap">
                        <div class="stores display-flex-center">
                            <img src="/google_play.svg" alt="">
                            <span>Google play</span>
                        </div>
                        <div class="stores display-flex-center">
                            <img src="/app_store.svg" alt="">
                            <span>Apple store</span>
                        </div>
                    </div>
                </div>
                <img src="/frame2.svg" alt="">
            </div>
        </div>
    </div>-->
    <div class="design-container">
        <div class="logo-background" style="transform: scale(2) rotate(20deg)">
            @include("components.logo")
        </div>
    </div>
</body>
</html>