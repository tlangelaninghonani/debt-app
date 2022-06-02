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
        <span class="header-title">Profile</span>
        <div class="display-flex-align mid-gap">
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
    <div class="container view-bottom">
        <div class="position-relative radius">
            <div class="text-align-center">
                <div class="display-flex-center">
                    <img class="profile-pic-mid" src="https://www.capitalcdc.com/public/upload/files/general/West_Texas_-_Jason_Bigham.jpg" alt="">
                    <div>
                        <div class="text-align-center">
                            <span class="material-icons-sharp ">
                            edit
                            </span><br>
                            <span>Edit</span>
                        </div>
                        <div class="breaker"></div>
                        <div class="text-align-center">
                            <span class="material-icons-sharp ">
                            delete
                            </span><br>
                            <span>Remove</span>
                        </div>
                    </div>
                </div>
                <div class="breaker"></div>
                <div>
                    <span class="slogan-small">{{ $account->first_name." ".$account->last_name }}</span><br>
                    <span>Phone number - <span>{{ $account->phone_number }}</span></span><br>
                    <span>Email address - <span>{{ $account->email_address }}</span></span><br>
                </div>
            </div>
            <div class="breaker"></div>
            <hr>
            <div class="breaker"></div>
            <span class="slogan">Personal</span>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="text" id="firstname" name="idnumber" autocomplete="off" value="{{ $account->first_name }}" placeholder="Type your First name">
            </div>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="text" id="lastname" name="lastname" autocomplete="off" value="{{ $account->last_name }}" placeholder="Type your Last name">
            </div>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="text" id="phonenumber" name="phonenumber" autocomplete="off" value="{{ $account->phone_number }}" placeholder="Type your Phone number">
            </div>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="text" id="email" name="email" autocomplete="off" value="{{ $account->email }}" placeholder="Type your Email address">
            </div>
            <div class="breaker"></div>
            <span class="slogan">Change your password</span>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="text" id="password" name="password" autocomplete="off" value="" placeholder="Type your Password">
            </div>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="text" id="confirmpassword" name="confirmpassword" autocomplete="off" value="" placeholder="Repeat your password">
            </div>
            <div class="breaker"></div>
            <button class="primal-color display-flex-center">
                <span>Update changes</span>
            </button>
        </div>
    </div>
    @include("components.nav_bottom")
    <script>
        observer.observe(document.querySelector(".observer"));
    </script>
    @include('components.pull_to_refresh')
</body>
</html>