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
    @if(Session::has("success"))
        <div class="applied" id="applied">
            <div class="text-align-center w-100">
                <div class="text-align-center">
                    <span class="material-symbols-sharp icon-big">
                    published_with_changes
                    </span><br>
                </div>
                <div class="breaker"></div>
                <span class="slogan">Meeting scheduled</span>
                <div class="breaker"></div>
                <span>Date - <span class="primary-color-exp">{{ $meeting->meeting_date }}</span></span><br>
                <span>Time - <span class="primary-color-exp">{{ $meeting->meeting_time }}</span></span><br>
                <div class="breaker"></div>
                <button class="button-icon-space" onclick="redirect('/meet')">
                    <span>Done</span>
                    <span class="material-symbols-sharp">
                    done
                    </span>
                </button>
            </div>
        </div>
        {{ Session::forget("success") }}
    @endif
    <div class="observer"></div>
    <div class="header">
        @include("components.header")
    </div>
    <div class="container view-bottom">
        @if($meeting)
            <div class="text-align-center">
                <!--<img src="/svg/448.svg" class="ill-svg" alt=""><br>-->
                <span class="material-symbols-sharp icon-big">
                published_with_changes
                </span>
                <div class="breaker"></div>
                <span class="slogan">Meeting scheduled</span>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-center"> 
                <span class="material-symbols-sharp icon-small">
                event
                </span>
                <div>
                    <span>Date - <span class="primary-color-exp">{{ $meeting->meeting_date }}</span></span><br>
                    <span>Time - <span class="primary-color-exp">{{ $meeting->meeting_time }}</span></span><br>
                </div>
            </div>
            <div class="breaker"></div>
            <form id="meetcancelform" action="/meet/cancel" method="POST">
                @csrf
                @method("POST")
                <button type="button" class="button-icon-space" onclick="submitForm('meetcancelform')">
                    <span>Cancel meeting</span>
                    <span class="material-symbols-sharp">
                    delete
                    </span>
                </button>
            </form>
        @else
            <div class="text-align-center">
                <!--<img src="/svg/149.svg" class="ill-svg" alt=""><br>-->
                <span class="material-symbols-sharp icon-big">
                videocam
                </span>
            </div>
            <div class="breaker"></div>
            <div class="text-align-center">
                <span>Schedule a virtual meeting with a debt counsellor on <span class="primary-color-exp">Google Meet</span></span>
            </div>
            <div class="breaker"></div>
            <form id="meetform" action="/meet" method="POST">
                @csrf
                @method("POST")
                <div class="display-flex-align">
                    <select name="time" id="">
                        @for($i = 9; $i <= 17; $i++)
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
                <div class="input-contain">
                    <select name="date" id="">
                        <option value="{{ date('d') }}">{{ date('d') }}</option>
                        <option value="{{ date('d', strtotime(date('d M Y'). '+1 days')) }}">{{ date('d', strtotime(date('d M Y'). "+1 days")) }}</option>
                        <option value="{{ date('d', strtotime(date('d M Y'). '+2 days')) }}">{{ date('d', strtotime(date('d M Y'). "+2 days")) }}</option>
                    </select>
                    <div style="margin-top: -1px">
                        <span>{{ date('F') }}</span>
                    </div>
                </div>
                <div class="breaker"></div>
                <button type="button" class="button-icon-space" onclick="submitForm('meetform')">
                    <span>Schedule</span>
                    <span class="material-symbols-sharp">
                    east
                    </span>
                </button>
            </form>
        @endif
        <script>
            for (let i = 0; i < document.querySelectorAll(".profile-pic-small").length; i++) {
                const element =  document.querySelectorAll(".profile-pic-small")[i];
                elementBorder(element, "primary", true)
            }
        </script>
    </div>
    @include("components.nav_bottom")
</body>
</html>