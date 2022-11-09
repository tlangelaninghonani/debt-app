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
    @include("components.error")
    @include("components.loader")
    <!--<div class="top-banner-sign-up">
        <div class="logo-background-mobile-binder">
            <div class="logo-background-mobile">
                @include("components.logo")
            </div>
        </div>
    </div>-->
    <div class="top-design">
        <div class="w-100">
            <img src="/svg/logo.svg" class="logo-svg" alt=""><br>
            <div class="breaker"></div>
            <span>We will be with you <span class="primary-color">all</span> the way</span>
        </div>
    </div>
    <div class="container-not-top">
        <span class="slogan">Personal</span>
        <div class="breaker"></div>
        <div class="">
            <form id="signupform" action="/sign_up" method="POST">
                @csrf
                @method("POST")
                <div class="input-contain">
                    <input type="text" id="firstname" name="firstname" autocomplete="off" value="" placeholder="Type your first name">
                </div>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="text" id="lastname" name="lastname" autocomplete="off" value="" placeholder="Type your last name">
                </div>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="number" id="phonenumber" name="phonenumber" autocomplete="off" value="" placeholder="Type your phone number">
                </div>
                <div class="breaker"></div>
                <div class="input-contain" style="padding-right: var(--padding)">
                    <input type="email" id="email" name="emailaddress" autocomplete="off" value="" placeholder="Type your email address">
                    <span class="side-message">Optional</span>
                </div>
                <div class="breaker"></div>
                <div class="input-contain">
                    <select name="gender" id="gender" class="w-100">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="breaker"></div>
                <span class="slogan">Setup a <span class="slogan-primary-color">password</span></span><br>
                <div class="breaker"></div>
                <span>Password should be at least 6 characters long</span>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="password" id="password" name="password" autocomplete="off" value="" placeholder="Type your password">
                </div>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="password" id="confirmpassword" name="confirmpassword" autocomplete="off" value="" placeholder="Repeat your password">
                </div>
                <div class="breaker"></div>
                <div class="display-flex-space-between mid-gap">
                    <button type="button" class="button-icon-space" onclick="submitForm('signupform')">
                        <span>Sign up</span>
                        <span class="material-symbols-sharp">
                        east
                        </span>
                    </button>
                </div>
                <div class="breaker"></div>
                <div class="text-align-center">
                    <span class="nowrap" onclick="redirect('/sign_in')">Sign in instead</span>
                </div>
            </form>
        </div>
    </div>
    <img src="/svg/bottom_mountain.svg" class="bottom-mountain-normal" alt=""><br>
</body>
</html>