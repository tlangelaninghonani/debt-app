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
                    <img src="/svg/448.svg" class="ill-svg" alt=""><br>
                </div>
                <span class="slogan">Meeting scheduled</span>
                <div class="breaker"></div>
                <span>Date - <span class="primary-color">{{ $meeting->meeting_date }}</span></span><br>
                <span>Time - <span class="primary-color">{{ $meeting->meeting_time }}</span></span><br>
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
    <div class="header">
        @include("components.header")
    </div>
    <div class="container view-bottom">
        @if($meeting)
            <div class="text-align-center">
                <img src="/svg/448.svg" class="ill-svg" alt=""><br>
                <div class="breaker"></div>
                <span class="slogan">Meeting scheduled</span>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-center"> 
                <span class="material-symbols-sharp icon-mid">
                event
                </span>
                <div>
                    <span>Date - <span class="primary-color">{{ $meeting->meeting_date }}</span></span><br>
                    <span>Time - <span class="primary-color">{{ $meeting->meeting_time }}</span></span><br>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="family">
                <div class="text-align-center">
                    <img class="profile-pic-small" style="border-radius: 38% 62% 62% 38% / 45% 52% 48% 55%" src="https://imageio.forbes.com/specials-images/imageserve/5c33a1554bbe6f7020fb2fd2/0x0.jpg?format=jpg&crop=1909,1909,x865,y206,safe&fit=crop" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">Mahlori</span><br>
                    <span><span class="primary-color">Lead</span> Debt Counsellor</span>
                </div>
                <div class="text-align-center"> 
                    <img class="profile-pic-small" style="border-radius: 60% 40% 38% 62% / 39% 29% 71% 61%" src="https://static01.nyt.com/images/2019/11/17/books/review/17Salam/Salam1-superJumbo.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">Jenette</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" style="border-radius: 37% 63% 38% 62% / 26% 38% 62% 74%" src="https://i.pinimg.com/1200x/48/8e/a6/488ea65cf658b72083423cec3a87a6e2.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">James</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" style="border-radius: 37% 63% 38% 62% / 26% 38% 62% 74%" src="https://cdn.goodgallery.com/cf0ef39c-1c83-45f8-b905-c091160e555c/s/0800/2fpgxh16/female-professional-portrait-gray-backdrop.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">Marry</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" style="border-radius: 64% 36% 48% 52% / 53% 61% 39% 47%" src="https://journalauto.com/wp-content/uploads/2022/04/Ford-Trucks.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">Matt</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" style="border-radius: 55% 45% 45% 55% / 64% 65% 35% 36%" src="http://calemazoo.com/wp-content/uploads/2015/10/Businessman1.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">Conan</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" style="border-radius: 74% 26% 25% 75% / 60% 66% 34% 40%" src="https://www.bethesdaheadshots.com/wp-content/uploads/2021/06/gaitherburg-md-headshot-photographer-1.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">Jerry</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" style="border-radius: 33% 67% 75% 25% / 69% 53% 47% 31%" src="http://my.chatham.edu/tools/_centers/cwe/_images/_speaker/JuliaTakeda.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">Samatha</span><br>
                    <span>Debt Counsellor</span>
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
                <img src="/svg/149.svg" class="ill-svg" alt=""><br>
            </div>
            <div class="breaker"></div>
            <div class="text-align-center">
                <span>Schedule a virtual meeting with a debt counsellor on <span class="primary-color">Google Meet</span></span>
            </div>
            <div class="breaker"></div>
            <div class="family">
                <div class="text-align-center">
                    <img class="profile-pic-small" style="border-radius: 38% 62% 62% 38% / 45% 52% 48% 55%" src="https://imageio.forbes.com/specials-images/imageserve/5c33a1554bbe6f7020fb2fd2/0x0.jpg?format=jpg&crop=1909,1909,x865,y206,safe&fit=crop" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">Mahlori</span><br>
                    <span><span class="primary-color">Lead</span> Debt Counsellor</span>
                </div>
                <div class="text-align-center"> 
                    <img class="profile-pic-small" style="border-radius: 60% 40% 38% 62% / 39% 29% 71% 61%" src="https://static01.nyt.com/images/2019/11/17/books/review/17Salam/Salam1-superJumbo.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">Jenette</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" style="border-radius: 37% 63% 38% 62% / 26% 38% 62% 74%" src="https://i.pinimg.com/1200x/48/8e/a6/488ea65cf658b72083423cec3a87a6e2.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">James</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" style="border-radius: 37% 63% 38% 62% / 26% 38% 62% 74%" src="https://cdn.goodgallery.com/cf0ef39c-1c83-45f8-b905-c091160e555c/s/0800/2fpgxh16/female-professional-portrait-gray-backdrop.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">Marry</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" style="border-radius: 64% 36% 48% 52% / 53% 61% 39% 47%" src="https://journalauto.com/wp-content/uploads/2022/04/Ford-Trucks.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">Matt</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" style="border-radius: 55% 45% 45% 55% / 64% 65% 35% 36%" src="http://calemazoo.com/wp-content/uploads/2015/10/Businessman1.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">Conan</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" style="border-radius: 74% 26% 25% 75% / 60% 66% 34% 40%" src="https://www.bethesdaheadshots.com/wp-content/uploads/2021/06/gaitherburg-md-headshot-photographer-1.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">Jerry</span><br>
                    <span>Debt Counsellor</span>
                </div>
                <div class="text-align-center">
                    <img class="profile-pic-small" style="border-radius: 33% 67% 75% 25% / 69% 53% 47% 31%" src="http://my.chatham.edu/tools/_centers/cwe/_images/_speaker/JuliaTakeda.jpg" alt="">
                    <div class="breaker"></div>
                    <span class="slogan">Samatha</span><br>
                    <span>Debt Counsellor</span>
                </div>
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