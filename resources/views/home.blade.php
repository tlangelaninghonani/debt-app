<!DOCTYPE html>
<html lang="en">
@include('components.address_bar_color')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ $links['desktopCss'] }}">
    <script src="{{ $links['desktopJs'] }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pulltorefreshjs/0.1.22/index.umd.js" integrity="sha512-c08RNGquBScVDxl/Yf50kga+4ZEI/xuqjBxwFUTFjnRn4Zoz1qcd2m5e/E+Pi+2b0O+lwDPz+J9N3ZzHTbnxHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title></title>
</head>
<body>
    @include("components.menu")
    @include("components.loader")
    <div class="observer"></div>
    <div class="header-home">
        @include("components.header_banner_back")
    </div>
    <div class="home-container">
        <div class="greeting">
            <span class="slogan">Good morning <br> Tlangelani</span>
        </div>
        <div class="home-content">
            <div>
                <div class="installment">
                    <div class="text-align-center">
                        <span class="material-symbols-sharp icon-big">
                        task_alt
                        </span><br>
                        <div class="breaker"></div>
                        <span>Reduced to</span><br>
                        <span class="number-big">R 5 600.00</span><br>
                        <span>From <span>R 10 000.00</span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="float-bottom-right">
            <span class="material-symbols-sharp action-icon-opacity">
            domain
            </span><br>
            <span>Debts</span>
        </div>
    </div>
    @include("components.nav_bottom_home")
</body>
</html>