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
    <div class="display-flex-center">
        <div class="container-not-top w-100">
            <div class="display-flex-center">
                <div class="installment-status">
                    <div class="text-align-center">
                        <i class="ph-chart-pie-slice icon-exp-big"></i><br>
                        <div class="breaker"></div>
                        <span>Reduced to</span><br>
                        <span class="number-big">R 5 600.00</span><br>
                        <span>From <span>R 10 000.00</span></span>
                    </div>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="text-align-center">
                <span>Download your latest statement</span>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-space-between">
                <div class="margin-ini-feint">
                    <div class="display-flex-align">
                        <i class="ph-file icon-exp-mid"></i><br>
                        <div>
                            <span class="bold">Latest statement</span><br>
                            <span>20 - Nov - 2022</span>
                        </div>
                    </div>
                </div> 
                <div class="text-align-center">
                    <i class="ph-cloud-arrow-down icon-exp-small"></i><br>
                    <span class="my-font-align">Download</span>
                </div>
            </div>
        </div>
    </div>
    @include("components.nav_bottom")
</body>
</html>