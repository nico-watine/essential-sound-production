// This file is to show how 'app.js' is for importing all of the Foundation-specific files
// 'scripts.js' is a placehold file for any other script files
// 'scripts.js' is minified via codekit, not via 'npm run build'
// when 'npm run build' is executed, 'scripts-min.js' is simply copied over and not processed in any way

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