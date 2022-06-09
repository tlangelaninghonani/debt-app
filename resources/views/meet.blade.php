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
    @if(Session::has("success"))
        <div class="applied" id="applied">
            <div class="text-align-center w-100">
                <span class="material-icons-sharp icon-big">
                done
                </span>
                <div class="breaker"></div>
                <span class="slogan-small">Meeting scheduled</span>
                <div class="breaker"></div>
                <span>Date - <span class="dark">{{ $meeting->meeting_date }}</span></span><br>
                <span>Time - <span class="dark">{{ $meeting->meeting_time }}</span></span><br>
                <div class="breaker"></div>
                <div class="display-flex-end" onclick="redirect('/meet')">
                    <button class="display-flex-center">
                        <span>Done</span>
                    </button>
                </div>
            </div>
        </div>
        {{ Session::forget("success") }}
    @endif
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
            @if($meeting)
                <span class="slogan-small"><span class="slogan-small-color">Meeting</span> scheduled</span>
                <div class="breaker"></div>
                <span>Date - <span class="dark">{{ $meeting->meeting_date }}</span></span><br>
                <span>Time - <span class="dark">{{ $meeting->meeting_time }}</span></span><br>
                <div class="breaker"></div>
                <form id="meetcancelform" action="/meet/cancel" method="POST">
                    @csrf
                    @method("POST")
                    <button type="button" onclick="submitForm('meetcancelform')">
                        <span>Cancel meeting</span>
                    </button>
                </form>
            @else
                <span>Schedule a <span class="primary-color">Virtual Meeting</span> with a Debt Counsellor on Google Meet</span>
                <!--<div class="breaker"></div>
                <span class="slogan-small">Debt counsellors</span>
                <div class="family">
                    <div class="text-align-center">
                        <img class="profile-pic-small" src="https://imageio.forbes.com/specials-images/imageserve/5c33a1554bbe6f7020fb2fd2/0x0.jpg?format=jpg&crop=1909,1909,x865,y206,safe&fit=crop" alt="">
                        <div class="breaker"></div>
                        <span class="title-small">Mahlori</span><br>
                        <span>Lead Debt Counsellor</span>
                    </div>
                    <div class="vert-seperator"></div>
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
                    <div class="text-align-center">
                        <img class="profile-pic-small" src="https://journalauto.com/wp-content/uploads/2022/04/Ford-Trucks.jpg" alt="">
                        <div class="breaker"></div>
                        <span class="title-small">Matt</span><br>
                        <span>Debt Counsellor</span>
                    </div>
                    <div class="text-align-center">
                        <img class="profile-pic-small" src="http://calemazoo.com/wp-content/uploads/2015/10/Businessman1.jpg" alt="">
                        <div class="breaker"></div>
                        <span class="title-small">Conan</span><br>
                        <span>Debt Counsellor</span>
                    </div>
                    <div class="text-align-center">
                        <img class="profile-pic-small" src="https://www.bethesdaheadshots.com/wp-content/uploads/2021/06/gaitherburg-md-headshot-photographer-1.jpg" alt="">
                        <div class="breaker"></div>
                        <span class="title-small">Jerry</span><br>
                        <span>Debt Counsellor</span>
                    </div>
                    <div class="text-align-center">
                        <img class="profile-pic-small" src="http://my.chatham.edu/tools/_centers/cwe/_images/_speaker/JuliaTakeda.jpg" alt="">
                        <div class="breaker"></div>
                        <span class="title-small">Samatha</span><br>
                        <span>Debt Counsellor</span>
                    </div>
                </div>-->
                <div class="breaker"></div>
                <div class="text-align-left">
                    <span class="slogan-small">Meeting date and time</span>
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
                    <button type="button" onclick="submitForm('meetform')">
                        <span>Schedule a meeting</span>
                    </button>
                </form>
            @endif
        </div>
    </div>
    @include("components.nav_bottom")
</body>
</html>