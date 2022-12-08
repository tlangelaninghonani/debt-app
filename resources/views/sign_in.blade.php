<!DOCTYPE html>
<html lang="en">
@include('components.address_bar_color')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
    <link rel="stylesheet" href="{{ $links['desktopCss'] }}">
    <script src="{{ $links['desktopJs'] }}"></script>
    <link rel="stylesheet" href="https://use.typekit.net/bxs7qjl.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pulltorefreshjs/0.1.22/index.umd.js" integrity="sha512-c08RNGquBScVDxl/Yf50kga+4ZEI/xuqjBxwFUTFjnRn4Zoz1qcd2m5e/E+Pi+2b0O+lwDPz+J9N3ZzHTbnxHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title></title>
</head>
@include("components.error")
@include("components.loader")
<div class="popup">
    <form id="confirmaccountform" action="/confirm_account" method="POST" class="display-none">
        @csrf
        @method("POST")
    </form>
    <div id="accountdetect" class="display-none">
        <span>Is this you?</span>
        <div class="breaker"></div>
        <div class="display-flex-align div-ini-normal">
            <span class="material-symbols-sharp">
            account_circle
            </span>
            <div>
                <span>Tlangelani Nghonani</span><br>
                <span>0677228944</span>
            </div>
        </div>
        <div class="breaker"></div>
        <button class="button-icon-space" onclick="submitForm('confirmaccountform')">
            <span>Yes, this is me</span>
            <span class="material-symbols-sharp">
            done
            </span>
        </button>
        <div class="breaker"></div>
        <div class="text-align-center">
            <span class="nowrap" onclick="showHidePopup('accountdetect', 'none')">Switch account</span>
        </div>
    </div>
</div>
@if(Cookie::has("signed"))
    <script>
        showHidePopup('accountdetect', 'block');
    </script>
@endif
<div class="header">
    <span>Sign in</span>
    @include("components.find_a_branch") 
    <span class="material-symbols-sharp" onclick="refreshPage()">
    refresh
    </span>
</div>
<body>
    <!--<div class="top-banner-sign-in">
        <div class="logo-background-mobile-binder">
            <div class="logo-background-mobile">
                @include("components.logo")
            </div>
        </div>
    </div>-->
    <div class="container w-100">
        <div class="top-design">
            <div class="w-100">
                <img src="/smart_logo.png" class="logo-svg" alt=""><br>
                <div class="breaker"></div>
                <span>Sign in with your <span>phone number</span> and <span>password</span></span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="text-align-center">
        <span class="slogan">Sign <span class="slogan">in</span></span>
        </div>
        <div class="breaker"></div>
        <div class="">
            <form id="signinform" action="/sign_in" method="POST">
                @csrf
                @method("POST")
                <div class="input-contain">
                    <input type="number" id="phonenumber" name="phonenumber" autocomplete="off" value="" placeholder="Type your phone number">
                </div>
                <div class="breaker"></div>
                <div class="display-flex-align">
                    <div class="input-contain w-100">
                        <input type="password" id="password" name="password" autocomplete="off" value="" placeholder="Type your password">
                    </div>
                    <div class="text-align-center">
                        <span class="material-symbols-sharp">
                        restart_alt
                        </span><br>
                        <span>Reset</span>
                    </div>
                </div>
                <div class="breaker"></div>
                <div>
                    <button type="button" class="button-icon-space" onclick="submitForm('signinform')">
                        <span>Sign in</span>
                        <span class="material-symbols-sharp">
                        east
                        </span>
                    </button>
                </div>
                <div class="breaker"></div>
                <div class="text-align-center">
                    <span class="nowrap" onclick="redirect('/sign_up')">Sign <span>up</span> instead</span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>