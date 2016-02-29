function validate() {
    var userName = document.forms["submitform"]["userName"].value;
    var password = document.forms["submitform"]["password"].value;
    var numApple = document.forms["submitform"]["apple"].value;
    var numBanana = document.forms["submitform"]["banana"].value;
    var numOrange = document.forms["submitform"]["orange"].value;
    var stopSubmit = true;  
    
    if (userName.indexOf("@") == -1 || userName.indexOf(".") == -1) {
        alert("User name must be in the form of an email address (name@domain.com)");
        stopSubmit = false;
    };
    
    if (password == "") {
        alert("password field cannot be blank");
        stopSubmit = false;
    };
    
    if (numApple == "" || numBanana == "" || numOrange == "") {
        alert("Quantities cannot be blank");
        stopSubmit = false;
    } else if (numApple < 0 || numBanana < 0 || numOrange < 0) {
        alert("Quantities cannot be negative");
        stopSubmit = false;
    };
    
    if (document.forms["submitform"]["shipping"].value == "") {
        alert("must pick a shipping option");
        stopSubmit = false;
    };
    
    if (stopSubmit == false) {
        return false;
    };
}