<!DOCTYPE html>
<html lang="en">
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
    <div class="header display-flex-space-between">
        <span class="header-title">Your status</span>
        <div class="display-flex-align mid-gap" style="padding-top: 2px">
            <span class="material-icons-sharp" onclick="refreshPage()">
            refresh
            </span>
            <span class="material-icons-sharp">
            notifications
            </span>
            <span class="material-icons-sharp" onclick="menu('open')">
            more_horiz
            </span>
        </div>
    </div>
    <div class="container">
        <div class="view-bottom">
            <p>
                <div class="display-flex-center">
                    <div class="status position-relative">
                        <div class="text-align-center">
                            <span class="number-mid nowrap">02</span><br>
                            <span>Percent</span>
                        </div>
                    </div>
                </div>
            </p>
            <br>
            <p>
                <div class="text-align-center">
                    <span class="slogan">Creditor notification</span>
                    <div class="breaker"></div>
                    <span>Debt Counsellor notifies <span class="dark">Credit Providers</span> and <span class="dark">Credit Bureau</span> of the consumers application for <span class="dark">Debt Review</span></span>
                </div>
            </p>
        </div>
    </div>
    @include("components.nav_bottom")
</body>
</html>