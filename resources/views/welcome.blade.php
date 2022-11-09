<script>
     if(! navigator.onLine){
        window.location.href = "/offline";
    }
</script>
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
@include("components.loader")
<body> 
    <div class="top-banner-welcome">
        <div class="logo-background-mobile-binder">
            <div class="logo-background-mobile">
                @include("components.logo")
            </div>
        </div>
    </div>
    <div class="container display-flex-center">
        <div class="text-align-center">
            <div>
                <span class="slogan">The <span class="slogan-primary-color">Helping Hand</span> Debt Counsellors</span>
                <div class="breaker"></div>
                <div>
                    <span>Do you feel as if you've bitten off more than you can chew? The <span class="primary-color">Helping Hand</span> Debt Councellors can offer you a debt solution that works</span>
                    <div class="breaker"></div>
                    <span class="material-symbols-sharp action-icon" style="border-radius: 38% 62% 62% 38% / 45% 52% 48% 55%" onclick="redirect('/sign_in')">
                    east
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>