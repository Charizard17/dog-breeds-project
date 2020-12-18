function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

let myClickedElementArray = readCookie('my-favourite');
// myClickedElementArray = myClickedElementArray.split(",");

function saveClickedElement(clicked_element_id) {
    if (myClickedElementArray.includes(clicked_element_id) == false) {
        myClickedElementArray.push(clicked_element_id);

        var date = new Date();
        date.setTime(date.getTime() + 7 * 24 * 3600 * 1000);

        document.cookie = "my-favourite=" + myClickedElementArray + "; path=/;expires = " + date.toGMTString();
    }
}