@if(Session::has("error"))
    <div class="error-message display-flex-center" id="errormessage">
        <div class="padding w-100">
            <div class="text-align-center">
                <span class="material-icons-sharp icon-big">
                error
                </span>
                <div class="breaker"></div>
                <span class="slogan">Something went <span class="slogan-primary-color">wrong</span></span><br>
                <div class="breaker"></div>
                <span>{{ Session::get("errormessage") }}</span>
                <div class="breaker"></div>
                <div>
                    <button onclick="showHideElement('errormessage', 'none')">
                        <span>Got it</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{ Session::forget("errormessage") }}
    {{ Session::forget("error") }}
@endif