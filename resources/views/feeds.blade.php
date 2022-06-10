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
        <span class="header-title">Feeds</span>
        <div class="display-flex-align mid-gap" style="padding-top: 2px">
            <!--<span class="material-icons-sharp">
            notifications
            </span>-->
            <span class="material-icons-sharp" onclick="menu('open')">
            more_horiz
            </span>
        </div>
    </div>
    <div class="container">
        <div class="feeds view-bottom">
            <div class="display-flex-align search input-contain">
                <input type="text" id="search" name="search" autocomplete="off" value="">
                <label class="placeholder-text">
                    <div class="text">Search feeds</div>
                </label>
                <span class="material-icons-sharp" style="padding-top: 3px">
                search
                </span>
            </div>
            <script>
                document.querySelector("#search").addEventListener("keyup", () => {
                    document.querySelector("#search").setAttribute("value", document.querySelector("#search").value);
                });
            </script>
            <p>
                <span class="kanit-mid">Hello Tlangelani</span><br>
                <span>Welcome to The Helping Hand Debt Counsellors, we are here to help all the way</span><br>
            </p>
            <p>
                <span class="kanit-mid">Hello Tlangelani</span><br>
                <span>Welcome to The Helping Hand Debt Counsellors, we are here to help all the way</span><br>
            </p>
            <p>
                <span class="kanit-mid">Hello Tlangelani</span><br>
                <span>Welcome to The Helping Hand Debt Counsellors, we are here to help all the way</span><br>
            </p>
            <p>
                <span class="kanit-mid">Hello Tlangelani</span><br>
                <span>Welcome to The Helping Hand Debt Counsellors, we are here to help all the way</span><br>
            </p>
            <p>
                <span class="kanit-mid">Hello Tlangelani</span><br>
                <span>Welcome to The Helping Hand Debt Counsellors, we are here to help all the way</span><br>
            </p>
            <p>
                <span class="kanit-mid">Hello Tlangelani</span><br>
                <span>Welcome to The Helping Hand Debt Counsellors, we are here to help all the way</span><br>
            </p>
            <p>
                <span class="kanit-mid">Hello Tlangelani</span><br>
                <span>Welcome to The Helping Hand Debt Counsellors, we are here to help all the way</span><br>
            </p>
            <p>
                <span class="kanit-mid">Hello Tlangelani</span><br>
                <span>Welcome to The Helping Hand Debt Counsellors, we are here to help all the way</span><br>
            </p>
        </div>
    </div>
    <div class="bottom-nav display-flex-space-between">
        <div class="text-align-center" onclick="redirect('/home')">
            <span class="material-icons-sharp">
            home
            </span><br>
            <span class="helvetica">Home</span>
        </div>
        <div class="text-align-center" onclick="redirect('/status')">
            <span class="material-icons-sharp">
            watch_later
            </span><br>
            <span class="helvetica">Status</span>
        </div>
        <div class="text-align-center position-relative" onclick="redirect('/apply')">
            <span class="material-icons-sharp debt-apply">
            folder
            </span>
            <span class="material-icons-sharp" style="color: white">
            folder
            </span><br>
            <span class="helvetica">Apply</span>
        </div>
        <div class="text-align-center" onclick="redirect('/feeds')">
            <span class="material-icons-sharp">
            forum
            </span><br>
            <span class="helvetica">Feeds</span>
        </div>
        <div class="text-align-center" onclick="redirect('/profile')">
            <span class="material-icons-sharp">
            account_circle
            </span><br>
            <span class="helvetica">Profile</span>
        </div>
    </div>
    @include('components.pull_to_refresh')
</body>
</html>