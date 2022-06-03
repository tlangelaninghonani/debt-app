<div class="bottom-nav display-flex-space-between">
    <div class="text-align-center relative" onclick="redirect('/home')">
        @if(Route::getfacaderoot()->current()->uri() == "home")
            <div class="focused-nav"></div>
        @endif
        <span class="material-icons-sharp">
        home
        </span><br>
        <span class="helvetica">Home</span>
    </div>
    <div class="text-align-center relative" onclick="redirect('/status')">
        @if(Route::getfacaderoot()->current()->uri() == "status")
            <div class="focused-nav"></div>
        @endif
        <span class="material-icons-sharp">
        speed
        </span><br>
        <span class="helvetica">Status</span>
    </div>
    <div class="text-align-center relative" onclick="redirect('/apply')">
        @if(Route::getfacaderoot()->current()->uri() == "apply")
            <div class="focused-nav"></div>
        @endif
        <span class="material-icons-sharp">
        folder
        </span><br>
        <span class="helvetica">Apply</span>
    </div>
    <div class="text-align-center relative" onclick="redirect('/meet')">
        @if(Route::getfacaderoot()->current()->uri() == "meet")
            <div class="focused-nav"></div>
        @endif
        <span class="material-icons-sharp">
        videocam
        </span><br>
        <span class="helvetica">Meet</span>
    </div>
    <div class="text-align-center relative" onclick="redirect('/account')">
        @if(Route::getfacaderoot()->current()->uri() == "account")
            <div class="focused-nav"></div>
        @endif
        @if($account->account_picture !="")
            <img class="profile-pic-smallest" src="/accounts/accounts_pictures/{{ $account->account_picture }}" alt=""><br>
        @else
            <span class="material-icons-sharp">
            account_circle
            </span><br>
        @endif
        <span class="helvetica">Profile</span>
    </div>
</div>