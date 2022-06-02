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
        <span class="header-title">Shecdule a meeting</span>
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
        <div class="text-align-center">
            <span class="material-icons-sharp icon-big google-meet">
            videocam
            </span> 
            <div class="breaker"></div>
            <span>Schedule a <span class="primary-color">Virtual Meeting</span> with a Debt Counsellor on <br> <span class="title-small">Google Meet</span></span>
            <div class="family">
                <div class="text-align-center">
                    <img class="profile-pic-small" src="https://journalauto.com/wp-content/uploads/2022/04/Ford-Trucks.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="title-small">Matt</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" src="https://static01.nyt.com/images/2019/11/17/books/review/17Salam/Salam1-superJumbo.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="title-small">Jenette</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" src="https://i.pinimg.com/1200x/48/8e/a6/488ea65cf658b72083423cec3a87a6e2.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="title-small">James</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" src="https://cdn.goodgallery.com/cf0ef39c-1c83-45f8-b905-c091160e555c/s/0800/2fpgxh16/female-professional-portrait-gray-backdrop.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="title-small">Marry</span><br>
                    <span>Debt Counsellor</span>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-align">
                <select name="" id="">
                    @for($i = 8; $i <= 17; $i++)
                        @if($i < 17)
                            @if($i < 10)
                                <option value="0{{ $i }}:00 PM">0{{ $i }}:00 PM</option>
                                <option value="0{{ $i }}:30 PM">0{{ $i }}:30 PM</option>
                            @else
                                <option value="{{ $i }}:00 PM">{{ $i }}:00 PM</option>
                                <option value="{{ $i }}:30 PM">{{ $i }}:30 PM</option>
                            @endif
                        @endif
                    @endfor
                </select>
            </div>
            <div class="breaker"></div>
            <button>
                <span>Schedule a meeting</span>
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