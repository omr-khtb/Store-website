
function validate() {
  pw = document.getElementById("pswdss").value;
  user = document.getElementById("userss").value;
  email = document.getElementById("emailss").value;
  document.getElementsByTagName("p").innerHTML = "no";
  //check empty password field  
  if (user == "") {
    document.getElementById("message").innerHTML = "**Fill the Name field please!";
    return false;
  }
  if (email == "") {
    document.getElementById("message").innerHTML = "**Fill the E-mail please!";
    return false;
  }
  if (pw == "") {
    document.getElementById("message").innerHTML = "**Fill the password please!";
    return false;
  }
  //minimum password length validation  
  if (pw.length < 8) {
    document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
    return false;
  }

  //maximum length of password validation  
  if (pw.length > 15) {
    document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
    return false;
  } else {
  }
  var i, j, flagspecial = 0, flagcapital = 0, flagsmall = 0, flagnumeric = 0, flagcof = 0;
  var paswdspecial = "~`!@#$%^&*()-_+={}[]|\\/:;\"'<>,.?";
  var pascapital = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  var passmall = "abcdefghijklmnopqrstuvwxyz";
  var numeric = "123456789"; var correctpass = 0;
  var sm = 0;
  for (i = 0; i < pw.length; i++) {
    for (j = 0; j < paswdspecial.length; j++) {
      if (pw[i] == paswdspecial[j]) {
        console.log("contains special!")
        flagspecial = 1;
      }
    }
    for (j = 0; j < pascapital.length; j++) {
      if (pw[i] == pascapital[j]) {
        flagcapital = 1;
      }
    }
    for (j = 0; j < passmall.length; j++) {
      if (pw[i] == passmall[j]) {
        flagsmall = 1;
      }
    }
    for (j = 0; j < numeric.length; j++) {
      if (pw[i] == numeric[j]) {
        flagnumeric = 1;
      }
    }
    sm++;
  }
  if (flagspecial != 1) {
    document.getElementById("message").innerHTML = "Password must contain at least one numeric digit and a special character";
    return false;
  }
  else if (flagcapital != 1) {
    document.getElementById("message").innerHTML = "Password must contain at least capital letter ";
    return false;
  }
  else if (flagsmall != 1) {
    document.getElementById("message").innerHTML = "Password must contain at least one small letter ";
    return false;
  }
  else if (flagnumeric != 1) {
    document.getElementById("message").innerHTML = "Password must contain one digit at least";
    return false;
  }
  else if (flagcof == 1) {
    document.getElementById("message").innerHTML = "Passowrds must be the same!";
    return false;
  }
  else {
    return true;
  }


}
