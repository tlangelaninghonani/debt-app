<script>
     if(! navigator.onLine){
        window.location.href = "/offline";
    }
</script>
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
@include("components.loader")
<body class="position-relative"> 
    <!--<div class="dots position-fixed blur">
        <div class="dot-1"></div>

        <div class="dot-3"></div>
    </div>-->
    <div class="container position-fixed display-flex-center">
        <div class="text-align-center">
            <div>
                <div class="display-flex-center">
                    <img class="logo-img" src="/logo_refactored.png" alt="">
                </div>
                <div class="breaker"></div>
                <span class="slogan">The <span class="slogan-primary-color">Helping Hand</span> Debt Counsellors</span>
                <div class="breaker"></div>
                <div class="curved-top">
                    <span>Do you feel as if you've bitten off more than you can chew? The <span class="primary-color">Helping Hand</span> Debt Councellors can offer you a debt solution that works</span>
                    <div class="breaker"></div>
                    <div class="display-flex-end">
                        <button class="display-flex-center" onclick="(redirect('/sign_in'))">
                            <span>Get started</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>