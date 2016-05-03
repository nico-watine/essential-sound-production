$(document).foundation();

// HEADER SHRINK
function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
	        shrinkOn = 10,
            header = document.querySelector("#logo-wrapper");
        if (distanceY > shrinkOn) {
            classie.add(header,"shrunk");
        } else {
            if (classie.has(header,"shrunk")) {
                classie.remove(header,"shrunk");
            }
        }
    });
}
window.onload = init();

// yo yo yo
/////// and a bottle of rum for checking minification (word?)

