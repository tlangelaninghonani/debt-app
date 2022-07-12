var googleIcons = document.createElement("link");
googleIcons.rel = "stylesheet";
googleIcons.href = "https://fonts.googleapis.com/icon?family=Material+Icons+Outlined";

var googleIconsRound = document.createElement("link");
googleIconsRound.rel = "stylesheet";
googleIconsRound.href = "https://fonts.googleapis.com/icon?family=Material+Icons+Round";

var googleIconsSharp = document.createElement("link");
googleIconsSharp.rel = "stylesheet";
googleIconsSharp.href = "https://fonts.googleapis.com/icon?family=Material+Icons+Sharp";

var googleIconsSymbols = document.createElement("link");
googleIconsSymbols.rel = "stylesheet";
googleIconsSymbols.href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@40,600,1,-25";

var jQuery = document.createElement("script");
jQuery.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js";

document.getElementsByTagName("head")[0].appendChild(googleIcons);
document.getElementsByTagName("head")[0].appendChild(googleIconsRound);
document.getElementsByTagName("head")[0].appendChild(googleIconsSharp);
document.getElementsByTagName("head")[0].appendChild(googleIconsSymbols);
document.getElementsByTagName("head")[0].appendChild(jQuery);

function loader(){
    document.querySelector(".loader-binder").style.display = "flex";
}

function redirect(path){
    loader();
    location.href = path;
}

function redirectBack(){
    loader();
    history.back();
}

function refreshPage(){
    loader();
    location.reload();
}

function submitForm(formId){
    loader();
    document.querySelector("#"+formId).submit();
}

function showHideElement(id, styleDisplay){
    document.querySelector("#"+id).style.display = styleDisplay;
}

function menu(mode){
    if(mode == "open"){
        document.querySelector("#menu").style.width = "60%";
        document.querySelector("#menu").style.right = "0";
    }else{
        document.querySelector("#menu").style.width = "0";
        document.querySelector("#menu").style.right = "-60px";
    }
}