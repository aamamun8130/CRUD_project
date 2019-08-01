function $(id) {
    return document.getElementById(id);
}


function validateForm() {

    var term = document.forms["myForm"]["term"];

    if (!(term.checked)) {

        $("cond").innerHTML = "You must accept terms and conditions!";
    }
    else {
        $("cond").innerHTML = "";


    }


}


function unValidation() {
    //var fname = document.forms["myForm"]["fname"].value;
    var fname = $("uunn").value;
    if (fname == "") {
        $("un").innerHTML = "Name can't be empty";
    }

    else if (fname.length < 5) {

        $("un").innerHTML = "Name can't be <5 character!";
    }
    else if (fname.length >= 5) {

        $("un").innerHTML = "";
    }


}

function emailValidation() {
    var email = document.forms["myForm"]["email"].value;
    if (email == "") {

        $("em").innerHTML = "Email can not be blank!";
    }
    else {

        $("em").innerHTML = "";
    }

}

function passValidation() {
    var pass = document.forms["myForm"]["pass"].value;
    var repass = document.forms["myForm"]["repass"].value;
    if (pass != repass) {
        $("pw").innerHTML = "Password mismatched!";
    }
    else {
        $("pw").innerHTML = "";

    }

}

function ageValidation() {
    var age = document.forms["myForm"]["age"].value;

    if (age == "") {

        $("ag").innerHTML = "Age blank! not accept.";
    }
    else if (age < 18) {

        $("ag").innerHTML = "Sorry you are under age!";
    }
    else {
        $("ag").innerHTML = "";


    }

}

