var googleIconsOutlined = document.createElement("link");
googleIconsOutlined.rel = "stylesheet";
googleIconsOutlined.href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0";

var googleIconsSharp = document.createElement("link");
googleIconsSharp.rel = "stylesheet";
googleIconsSharp.href = "https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0";

var googleIcons = document.createElement("link");
googleIcons.rel = "stylesheet";
googleIcons.href = "https://fonts.googleapis.com/icon?family=Material+Icons+Sharp";

var jQuery = document.createElement("script");
jQuery.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js";

document.getElementsByTagName("head")[0].appendChild(googleIcons);
document.getElementsByTagName("head")[0].appendChild(googleIconsOutlined);
document.getElementsByTagName("head")[0].appendChild(googleIconsSharp);
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

var popupHeight = "60vh";

function showHidePopup(id, styleDisplay, delay = false){

    if(delay){

        setTimeout(() => {

            if(styleDisplay !== "none"){
        
                document.querySelector(".popup").style.display = "block";
            }else{
        
                document.querySelector(".popup").style.display = "none";
            }

            document.querySelector("#"+id).style.display = styleDisplay;
        }, 200);
    }else{

        if(styleDisplay !== "none"){
        
            document.querySelector(".popup").style.display = "block";
        }else{
    
            document.querySelector(".popup").style.display = "none";
        }

        document.querySelector("#"+id).style.display = styleDisplay;
    }
}

function menu(mode){

    if(mode == "open"){

        document.querySelector("#menu").style.width = "100%";
    }else{
        
        document.querySelector("#menu").style.width = "0";
        document.querySelector("#menu").style.right = "0";
        document.querySelector("#menu").style.padding = "0";
    }
}

var observeMerital = false;

function elementObserve(mode, id){

    var observer = new IntersectionObserver(function(entries) {

        if(observeMerital){
            if(entries[0].isIntersecting === true){

                if(mode === "meritalobserver"){
                    document.querySelector("#meritalobserverfloat").style.display = "none";
                    document.querySelector("#meritalobserverstatic").style.display = "block";
                }
            }else{
                
                if(mode === "meritalobserver"){
                    document.querySelector("#meritalobserverfloat").style.display = "flex";
                    document.querySelector("#meritalobserverstatic").style.display = "none";
                }
            }
        }
        
            
    }, { threshold: [0.50] });

    observer.observe(document.querySelector("#" + id));
}

function stopApplyIconBorderInterval(interval){
    
    clearInterval(interval);
}

function elementBorder(elementId, color = "primary", multiple = false){

    return

    var applyIconBorderInterval = setInterval(() => {

        if(multiple === true){

            const element = elementId;

            if(element !== null){
        
                stopApplyIconBorderInterval(applyIconBorderInterval);
                var border = ["top", "right", "bottom", "left"];
                
                if(color === "primary"){
                    element.classList.add("border-" + border[Math.floor(Math.random()*border.length)] + "-color");
                }else if(color === "feint"){
                    element.classList.add("border-" + border[Math.floor(Math.random()*border.length)] + "-color-feint");
                }
            }
        }else{
            const element = document.querySelector(elementId);
            if(element !== null){
        
                stopApplyIconBorderInterval(applyIconBorderInterval);
                var border = ["top", "right", "bottom", "left"];
                
                if(color === "primary"){
                    element.classList.add("border-" + border[Math.floor(Math.random()*border.length)] + "-color");
                }else if(color === "feint"){
                    element.classList.add("border-" + border[Math.floor(Math.random()*border.length)] + "-color-feint");
                }
            }
        }
    }, 100);
    
}