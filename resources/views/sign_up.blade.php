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
                    <div>
                    <div class="display-flex-center position-relative">
                            <div class="logo-back"></div>
                            <img class="logo-img-abs" src="/logo_refactored.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="breaker"></div>
            <span class="slogan">Personal</span>
            <div class="breaker"></div>
            <div class="">
                <form id="signupform" action="/sign_up" method="POST">
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
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="email" id="email" name="emailaddress" autocomplete="off" value="" placeholder="Type your Email address">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <select name="gender" id="gender" class="w-100">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
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
                        <button type="button" class="primal-color display-flex-center" onclick="submitForm('signupform')">
                            <span>Sign up</span>
                        </button>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap" onclick="redirect('/sign_in')">Sign in instead</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>