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
    @include("components.error")
    @include("components.loader")
    <div class="position-fixed">
        <div class="padding">
            <div class="top-banner-2">
                <div class="banner-content">
                    <span class="slogan">Let us be your <span class="slogan-primary-color">Helping Hand</span></span>
                </div>
            </div>
            <div class="breaker"></div>
            <span class="slogan">Personal</span>
            <div class="breaker"></div>
            <div class="">
                <form action="/sign_up" method="POST">
                    @csrf
                    @method("POST")
                    <div class="input-contain">
                        <input type="text" id="firstname" name="firstname" autocomplete="off" value="" placeholder="Type your First name">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="lastname" name="lastname" autocomplete="off" value="" placeholder="Type your Last name">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="number" id="phonenumber" name="phonenumber" autocomplete="off" value="" placeholder="Type your Phone number">
                    </div>
                    <span>You will use your phone number and a password to Sign in</span>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="email" name="emailaddress" autocomplete="off" value="" placeholder="Type your Email address">
                    </div>
                    <div class="breaker"></div>
                    <span class="slogan">Setup a <span class="slogan-primary-color">Sign in</span> password</span><br>
                    <span>Password should be at least 6 characters long</span>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="password" id="password" name="password" autocomplete="off" value="" placeholder="Type your Password">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="password" id="confirmpassword" name="confirmpassword" autocomplete="off" value="" placeholder="Repeat your Password">
                    </div>
                    <div class="breaker"></div>
                    <div class="display-flex-space-between mid-gap">
                        <div class="text-align-center" onclick="redirect('/sign_in')">
                            <span class="nowrap">Sign in</span>
                        </div>
                        <button class="primal-color display-flex-center">
                            <span>Sign up</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="breaker"></div>
            <hr>
            <div class="breaker"></div>
            <div class="display-flex-center">
                <span class="nowrap">Twitter</span>
                &#183;
                <span class="nowrap">Facebook</span>
                &#183;
                <span class="nowrap">LinkedIn</span>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-center">
                <span class="material-icons-sharp">
                alternate_email
                </span>
                <span>The <span class="primary-color">Halping Hand</span> Debt Counsellors</span>
            </div>
        </div>
    </div>
    @include('components.pull_to_refresh')
</body>
</html>