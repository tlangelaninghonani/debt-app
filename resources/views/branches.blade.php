<!DOCTYPE html>
<html lang="en">
@include('components.address_bar_color')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
    <link rel="stylesheet" href="{{ $links['desktopCss'] }}">
    <script src="{{ $links['desktopJs'] }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pulltorefreshjs/0.1.22/index.umd.js" integrity="sha512-c08RNGquBScVDxl/Yf50kga+4ZEI/xuqjBxwFUTFjnRn4Zoz1qcd2m5e/E+Pi+2b0O+lwDPz+J9N3ZzHTbnxHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title></title>
</head>
<body>
    @include("components.menu")
    @include("components.loader")
    <div class="observer"></div>
    <div class="header">
        @include("components.header")
    </div>
    <div class="container">
        <div class="text-align-center">
            <!--<img src="/svg/444.svg" class="ill-svg" alt=""><br>-->
            <span class="material-symbols-sharp icon-big">
            store
            </span>
            <div class="breaker"></div>
        </div>
        <div class="display-flex-space-between">
            <div class="display-flex">
                
                <div>
                    <span class="slogan">Giyani, Limpopo</span><br>

                    <span class="primary-color">Headquarters</span><br>
                    <span>CBD, near Mopani Spar</span><br>
                    <span class="primary-color">08:30 PM - 17:00 PM</span>
                </div>
            </div>
            <a href="https://goo.gl/maps/tTWwFhcM8bG7GFHb9" target="_blank">
                <span class="material-symbols-sharp action-icon">
                my_location
                </span>
            </a>
        </div>
        <div class="breaker"></div>
        <div class="display-flex-space-between">
            <div class="display-flex">
                
                <div>
                    <span class="slogan">Polokwane, Limpopo</span><br>

                    <span>19 Library Gardens Cnr Hans Van Rensburg & Grobler Polokwane Central, Polokwane, 0700</span><br>
                    <span class="primary-color">08:30 PM - 17:00 PM</span>
                </div>
            </div>
            <a href="https://goo.gl/maps/cipZyWgF4Sprtt8n8">
                <span class="material-symbols-sharp action-icon">
                my_location
                </span>
            </a>
        </div>
        <div class="breaker"></div>
        <div class="display-flex-space-between">
            <div class="display-flex">
                
                <div>
                    <span class="slogan">Pretoria, Gauteng</span><br>

                    <span>Office 0118 Banking Towers, 190 Thabo Sehume Street Pretoria CBD, Pretoria, 0002</span><br>
                    <span class="primary-color">08:30 PM - 17:00 PM</span>
                </div>
            </div>
            <a href="https://goo.gl/maps/31gMhB8KrieQV6248">
                <span class="material-symbols-sharp action-icon">
                my_location
                </span>
            </a>
        </div>
    </div>
</body>
</html>