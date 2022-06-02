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
    <div class="text-align-center relative" onclick="redirect('/profile')">
        @if(Route::getfacaderoot()->current()->uri() == "profile")
            <div class="focused-nav"></div>
        @endif
        <span class="material-icons-sharp">
        account_circle
        </span><br>
        <span class="helvetica">Profile</span>
    </div>
</div>