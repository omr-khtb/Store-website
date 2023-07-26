let Name, E_Mail, Phone_Number, Message;

window.onload = function () {
    Name = document.getElementById("Name");
    E_Mail = document.getElementById("E_Mail");
    Phone_Number = document.getElementById("Contact");
    Message = document.getElementById("Message");
}

function Validate() {
    var x = Validate_Name();
    var y = Validate_Contact_Number();
    var z = Validate_E_Mail();
    if (x != true || y != true || z != true) {
        return false;
    }
    else {
        return true;
    }
}

function Validate_Name() {
    let X = Name.value, Ct = 0;
    for (let i = 0; i < X.length; i++) {
        for (let j = 0; j < 10; j++) {
            if (X[i] == j) {
                Ct++;
            }
        }
    }
    if (Ct == 0) {
        return true;
    }
    else {
        window.alert("Enter Valid Name");
        return false;
    }
}

function Validate_E_Mail() {
    let X = E_Mail.value, Ct = 0;
    for (let i = 0; i < X.length; i++) {
        if (X[i] == '@' || X[i] == '.') {
            Ct++;
        }
    }
    if (Ct >= 2) {
        return true;
    }
    else {
        window.alert("Enter Valid E-Mail");
        return false;
    }
}

function Validate_Contact_Number() {
    let X = Phone_Number.value, Ct = 0;
    if (X.length > 11) {
        window.alert("Enter Valid Phone Number");
        return false;
    }
    for (let i = 0; i < X.length; i++) {
        for (let j = 0; j < 10; j++) {
            if (X[i] == j) {
                Ct++;
            }
        }
    }
    if (Ct == 11) {
        return true;
    }
    else {
        window.alert("Enter Valid Phone Number");
        return false;
    }
}