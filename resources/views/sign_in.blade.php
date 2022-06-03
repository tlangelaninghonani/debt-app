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
            <div class="top-banner">
                <div class="banner-content">
                    <span class="slogan">Pay what <span class="slogan-primary-color">you</span> can afford</span>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="text-align-center">
                <span class="slogan">Sign in</span>
            </div>
            <div class="breaker"></div>
            <div class="">
                <form id="signinform" action="/sign_in" method="POST">
                    @csrf
                    @method("POST")
                    <div class="input-contain">
                        <input type="number" id="phonenumber" name="phonenumber" autocomplete="off" value="" placeholder="Type your Phone number">
                    </div>
                    <div class="breaker"></div>
                    <div class="display-flex-align">
                        <div class="input-contain w-100">
                            <input type="password" id="password" name="password" autocomplete="off" value="" placeholder="Type your Password">
                        </div>
                        <div class="text-align-center">
                            <span class="material-icons-sharp">
                            replay
                            </span><br>
                            <span>Reset</span>
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div class="display-flex-space-between mid-gap">
                        <div class="text-align-center" onclick="redirect('/sign_up')">
                            <span class="nowrap">Sign up</span>
                        </div>
                        <button type="button" class="primal-color display-flex-center" onclick="submitForm('signinform')">
                            <span>Sign in</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('components.pull_to_refresh')
</body>
</html>