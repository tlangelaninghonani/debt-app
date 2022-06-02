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
    @include("components.top_patcher")
    @include("components.loader")
    <div class="observer"></div>
    <div class="header display-flex-space-between">
        <span class="header-title">Status</span>
        <div class="display-flex-align mid-gap" style="padding-top: 2px">
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
                        <div class="loader-anim"></div>
                            <div class="text-align-center status-item">
                                <span class="number-mid">85</span><br>
                                <span>Percent</span>
                            </div>
                    </div>
                </div>
            </p>
            <br>
            <p>
                <span class="kanit-mid">Negotiation</span><br>
                <span>In the event that the <span class="kanit">consumer</span> is indeed over-indebted and so their application is accepted, the <span class="kanit">debt counsellor</span> and <span class="kanit">credit providers</span> enter into repayment negotiations going forward</span>
            </p>
        </div>
    </div>
    @include("components.nav_bottom")
    <script>
        observer.observe(document.querySelector(".observer"));
    </script>
    @include('components.pull_to_refresh')
</body>
</html>