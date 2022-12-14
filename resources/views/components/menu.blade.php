<div class="menu" id="menu">
    <div class="container">
        <div class="display-flex-end">
            <i class="ph-x icon-exp-small" onclick="menu('close')"></i>
        </div>
        <div class="display-flex-align" onclick="redirect('/branches')">
            <i class="ph-storefront icon-exp-small"></i>
            <span class="my-font-align">Find a branch</span>
        </div>
        <div class="breaker"></div>
        <div class="display-flex-align" id="share">
            <i class="ph-share-network icon-exp-small" ></i>
            <span class="my-font-align">Refer to a friend</span>
        </div>
    </div>
    <div class="menu-footer">
        <button class="button-icon-space" onclick="redirect('/sign_out')">
            <span class="my-font-align">Sign out</span>
            <i class="ph-user-switch icon-exp-small"></i>
        </button>
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