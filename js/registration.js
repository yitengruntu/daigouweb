function checkExistedEmail(){
  var xmlhttp = new XMLHttpRequest();
  var email = document.getElementById('email').value;
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var myArr = JSON.parse(xmlhttp.responseText);
        document.getElementById("emailerror").innerHTML=myArr;
    }
  };
  var url="checkExistedEmail.php";
  url=url+"?email="+email;
  xmlhttp.open("GET",url,true);
  xmlhttp.send(null);
  if(myArr = "") return true;
  else return false;
}

function checkPassword(){
  var password = document.getElementById('password').value;
  if(/\W+/.test(password) || password.length<8 || password.length>16){
        document.getElementById('passworderror').innerHTML="密码应为8-16位字母或数字";
        return false;
    }
  document.getElementById('passworderror').innerHTML="";
    return true;
}
function checkRePassword(){
  var repassword = document.getElementById('repassword').value;
  if(repassword!=document.getElementById('password').value){
    document.getElementById('repassworderror').innerHTML="与输入的密码不一致";
        return false;
    }
  document.getElementById('repassworderror').innerHTML="";
    return true;
}

function checkAll(){
  if(document.getElementById('emailerror').innerHTML!=""){
    alert("Invalid Information");
    return false;
  }
  if(!checkUsername()||!checkPassword()||!checkRePassword()||!checkFullname()||!checkStreet()||!checkEmail()||!checkStudentname()||!checkClass()||!checkCard()||!checkDate()){
    checkUsername();
    checkPassword();
    checkRePassword();
    checkFullname();
    checkStreet();
    checkEmail();
    checkStudentname();
    checkClass();
    checkCard();
    checkDate();
    alert("Invalid Information");
  return false;
}
  return true;
}
