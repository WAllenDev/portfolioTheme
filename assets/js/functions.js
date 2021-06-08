function ready(callbackFunction){
    if(document.readyState != 'loading'){
        callbackFunction(e)
    } else {
        document.addEventListener("DOMContentLoaded", callbackFunction)
    }
}
ready(e => {
    let nav = document.getElementById("navigation-sticky").getElementsByTagName("nav")[0];
    let scrollingElement = document.getElementsByTagName('body')[0];

    function navLocation(){
        if (scrollingElement.scrollTop > 0) {
            nav.setAttribute('class','nav-scrolling');
        } else {
            nav.setAttribute('class','nav-top');
        }
    }
    scrollingElement.addEventListener('scroll', navLocation);
})