var popupConfig = new Array;
 
//Ejemplo de uso:
// popupLinkConfig["nombreClase"] = new Array ( "target", "width=100, height=100, scrollbars=yes, resizable=yes, status=yes, toolbar=yes, location=yes,menubar=yes");
 
popupConfig["popup"] = new Array("", "width=640,height=480,scrollbar=yes,menubar=yes");
popupConfig["popupbig"] = new Array("", "width=800,height=650,resizable=yes");
 
window.onload = initPage;
 
function initPage() {
    initPopupLinks();
}
 
function initPopupLinks() {
    if (!document.getElementsByTagName) return true;
    var pageLinks = document.getElementsByTagName("a");
    for (var i = 0; i < pageLinks.length; i++) {
        if (((pageLinks[i].className != null) &&
         (pageLinks[i].className != "")) ||
        ((pageLinks[i].parentNode.className != null) &&
         (pageLinks[i].parentNode.className != ""))) {
            var linkClass = " " + pageLinks[i].className + " ";
            if ((linkClass == "  ") && (pageLinks[i].parentNode.className != "")) {
                linkClass = " " + pageLinks[i].parentNode.className + " ";
            }
            for (var theKey in popupConfig) {
                if (linkClass.indexOf(" " + theKey + " ") > -1) {
                    if ((pageLinks[i].target == "") || (pageLinks[i].target == null)) {
                        pageLinks[i].target = (popupConfig[theKey][0] != "") ? popupConfig[theKey][0] : theKey;
                    }
                    pageLinks[i].settings = popupConfig[theKey][1];
                    pageLinks[i].onclick = popUp;
                }
            }
        }
    }
    return true;
}
function popUp() {
    newWin = window.open(this.href, this.target, this.settings);
    newWin.focus();
    return false;
}