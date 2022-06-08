<div class="menu" id="menu">
    <div class="highlight" style="margin-top: -25px">
        <div class="display-flex-end">
            <span class="material-icons-sharp" onclick="menu('close')">
            close
            </span>
        </div>
        <div cl>
            <span class="slogan-small">{{ $account->first_name." ".$account->last_name }}</span><br>
            <span>Your status - <span>Application</span></span>
        </div>
    </div>
    <div class="breaker"></div>
    <div class="display-flex-align">
        <span class="material-icons-sharp">
        store
        </span>
        <span>Find a branch</span>
    </div>
    <div class="breaker"></div>
    <div class="display-flex-align">
        <span class="material-icons-sharp">
        favorite
        </span>
        <span>Refer to a friend</span>
    </div>
    <div class="breaker"></div>
    <div class="display-flex-align" onclick="redirect('/terms')">
        <span class="material-icons-sharp">
        policy
        </span>
        <span>Terms</span>
    </div>
    <div class="breaker"></div>
    <div class="display-flex-align" onclick="redirect('/sign_out')">
        <span class="material-icons-sharp">
        power_settings_new
        </span>
        <span>Sign out</span>
    </div>
</div>