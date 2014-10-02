function validate()
{
// deklrarirame kato promenliva vsqka edna forma
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

user=document.getElementById("user");
email=document.getElementById("email");
pass=document.getElementById("pass");
object=document.getElementById("object");
// begin proverkata :)
if(user.value=="") { alert("Моля, въведете име."); user.focus(); return false; }
if(email.value=="") { alert("Моля, въведете Email."); email.focus(); return false; }
if(pass.value=="") { alert("Моля, въведете Парола."); pass.focus(); return false; }
if(object.value=="") { alert("Моля, въведете бект."); object.focus(); return false; }
if(reg.test(email.value)==false) { alert("Моля, въведете валиден Email."); email.value=""; email.focus(); return false; }
// begin proverkata :)
return true;
}