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
    <div class="display-flex-align" onclick="redirect('/branches')">
        <span class="material-icons-sharp">
        store
        </span>
        <span class="my-font-align">Find a branch</span>
    </div>
    <div class="breaker"></div>
    <div class="display-flex-align" id="share">
        <span class="material-icons-sharp">
        favorite
        </span>
        <span class="my-font-align">Refer to a friend</span>
    </div>
    <div class="breaker"></div>
    <div class="display-flex-align" onclick="redirect('/sign_out')">
        <span class="material-icons-sharp">
        power_settings_new
        </span>
        <span class="my-font-align">Sign out</span>
    </div>
</div>
<script>
    let shareButton = document.querySelector("#share");
    shareButton.addEventListener('click', event => {
        if (navigator.share) {
            navigator.share({
            title: "Do you feel as if you've bitten off more than you can chew? The Helping Hand Debt Councellors can offer you a debt solution that works",
            url: 'https://debt-counsellors-app.herokuapp.com/'
            }).then(() => {
            
            })
            .catch(console.error);
        } else {
            // fallback
        }
    });
</script>