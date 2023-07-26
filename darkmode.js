
var falg = 0;
function dark() {
  var body = document.body;
  var text = document.getElementsByTagName("h1");
  var text1 = document.getElementsByTagName("p");
  var text2 = document.getElementById("dark");
  if (falg == 0)
  {
    body.classList.toggle("dark-mode");
    for (i = 0, len = text.length; i < len; i++) {
      text[i].style.color = 'white';
    }
    for (i = 0, len = text1.length; i < len; i++) {
      text1[i].style.color = 'white';
    }
    for (i = 0, len = text2.length; i < len; i++) {
      text2[i].style.color = 'white';
    }
    falg = 1;
  }else{
    body.classList.toggle("dark-mode");
    for (i = 0, len = text.length; i < len; i++) {
      text[i].style.color = 'black';
    }
    for (i = 0, len = text1.length; i < len; i++) {
      text1[i].style.color = 'black';
    }
    for (i = 0, len = text2.length; i < len; i++) {
      text2[i].style.color = 'black';
    }
    falg =0;
    
  }
  
}

