@if(Session::has("error"))
    <div class="error-message display-flex-center" id="errormessage">
        <div class="padding w-100">
            <div class="text-align-center">
                <div class="text-align-center">
                    <img src="/svg/128.svg" class="ill-svg" alt=""><br>
                </div>
                <span class="slogan">Something went <span class="slogan-primary-color">wrong</span></span><br>
                <div class="breaker"></div>
                <span>{{ Session::get("errormessage") }}</span>
                <div class="breaker"></div>
                <div>
                    <span class="material-symbols-sharp action-icon" style="border-radius: 38% 62% 62% 38% / 45% 52% 48% 55%" onclick="showHideElement('errormessage', 'none')">
                    replay
                    </span>
                </div>
            </div>
        </div>
    </div>
    {{ Session::forget("errormessage") }}
    {{ Session::forget("error") }}
@endif