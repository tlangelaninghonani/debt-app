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
        <span class="header-title">Home</span>
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
        <div class="display-flex-align mid-gap">
            @if($account->account_picture != "")
                <img class="profile-pic-small" src="/accounts/accounts_pictures/{{ $account->account_picture }}" alt="">
            @else
                <span class="material-icons-sharp empty-account">
                account_circle
                </span>
            @endif
            <div>
                <span class="slogan-small"><span class="slogan-small-color">Hi</span>, {{ $account->first_name." ".$account->last_name }}</span><br>
                <span>Your status - <span>Negotiation</span></span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="display-flex-space-between">
            <div class="installment">
                <div>
                    <span class="nowrap">Overall installment plan</span><br>
                    <span class="number-mid nowrap">R 8 000.00</span><br>
                    <span>From <span>R 15 000.00</span></span>
                </div>
            </div>
            <div class="text-align-center w-100 position-relative">
                <span class="material-icons-sharp edit-plan">
                edit
                </span>
                <span class="material-icons-sharp icon-mid">
                store
                </span><br>
                <span>Visit your nearest <span class="primary-color">branch</span> to edit your plan</span>
            </div>
        </div>
        <div class="breaker"></div>
        <span class="slogan">Indebted to</span>
        <div class="breaker"></div>
        <div>
            <div class="display-flex-align">
                <span class="material-icons-sharp icon-mid">
                business
                </span>
                <div>
                    <span class="title-small">Capitec Bank Limited</span><br>
                    <span>Indebt of <span>R 180 000.00</span></span>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-align">
                <span class="material-icons-sharp icon-mid">
                business
                </span>
                <div>
                    <span class="title-small">Mjinga Trade Centre</span><br>
                    <span>Indebt of <span>R 50 000.00</span></span>
                </div>
            </div>
        </div>
        <div class="breaker"></div>
        <span class="slogan">Our branches</span>
        <div class="breaker"></div>
        <div class="display-flex-space-between">
            <div class="display-flex">
                <span class="material-icons-sharp icon-mid">
                store
                </span>
                <div>
                    <span class="title-small">Giyani</span><br>
                    <span>CBD, near Mopani Spar</span><br>
                    <span>08:30 PM - 17:00 PM</span>
                </div>
            </div>
            <a href="https://goo.gl/maps/tTWwFhcM8bG7GFHb9" target="_blank">
                <span class="material-icons-sharp action-icon">
                my_location
                </span>
            </a>
        </div>
        <div class="breaker"></div>
        <div class="display-flex-space-between">
            <div class="display-flex">
                <span class="material-icons-sharp icon-mid">
                store
                </span>
                <div>
                    <span class="title-small">Polokwane Central</span><br>
                    <span>19 Library Gardens Cnr Schoeman and Grobler St</span><br>
                    <span>08:30 PM - 17:00 PM</span>
                </div>
            </div>
            <a href="https://goo.gl/maps/cipZyWgF4Sprtt8n8">
                <span class="material-icons-sharp action-icon">
                my_location
                </span>
            </a>
        </div>
        <div class="breaker"></div>
    </div>
    @include("components.nav_bottom")
    <script>
        observer.observe(document.querySelector(".observer"));
    </script>
    @include('components.pull_to_refresh')
</body>
</html>