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
<body>
    @include("components.menu")
    @include("components.loader")
    <div class="observer"></div>
    <div class="header">
        @include("components.header")
    </div>
    <div class="position-fixed display-flex-center">
        <div class="container">
            <!--<div class="display-flex-center">
                <div class="status position-relative">
                    <div class="text-align-center">
                        <span class="number-big nowrap">A</span><br>
                        <span>Status <br> code</span>
                    </div>
                </div>
            </div>
            <script>
                elementBorder(".status", "feint")
            </script>-->
            <div class="display-flex-center">
                <div class="circle-badge position-relative">
                    <div class="text-align-center">
                        <span class="material-symbols-sharp icon-mid">
                        whatshot
                        </span><br>
                        <div class="breaker"></div>
                        <span class="number-big nowrap">A</span><br>
                        <span>Status code</span>
                    </div>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="text-align-center">
                <span class="slogan">Application</span>
                <div class="breaker"></div>
                <span>Applied for Debt Counselling</span>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-center">
            <div class="button-style">
                <div class="text-align-center">
                    <span class="material-symbols-sharp">
                    open_in_new
                    </span><br>
                    <span>Learn more</span> 
                </div>
                <div class="text-align-center">
                    <span class="material-symbols-sharp">
                    call
                    </span><br>
                    <span>Contact us</span> 
                </div>
            </div>
        </div>
    </div>
    @include("components.nav_bottom")
</body>
</html>