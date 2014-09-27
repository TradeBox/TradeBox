function validate()
{
// deklrarirame kato promenliva vsqka edna forma
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

fname=document.getElementById("fname");
lname=document.getElementById("lname");
email=document.getElementById("email");
street=document.getElementById("street");
city=document.getElementById("city");
zip=document.getElementById("zip");
phone=document.getElementById("phone");
domain=document.getElementById("domain");
// begin proverkata :)
if(fname.value=="") { alert("Моля, въведете име."); fname.focus(); return false; }
if(lname.value=="") { alert("Моля, въведете фамилия."); lname.focus(); return false; }
if(email.value=="") { alert("Моля, въведете Email."); email.focus(); return false; }
if(street.value=="") { alert("Моля, въведете адрес."); street.focus(); return false; }
if(city.value=="") { alert("Моля, въведете град."); city.focus(); return false; }
if(zip.value=="") { alert("Моля, въведете пощ. код."); zip.focus(); return false; }
if(phone.value=="") { alert("Моля, въведете телефон."); phone.focus(); return false; }
if(reg.test(email.value)==false) { alert("Моля, въведете валиден Email."); email.value=""; email.focus(); return false; }
// begin proverkata :)
if(domain.value=="") { alert("Моля, въведете домейн."); domain.focus(); return false; }
if(domain.value.toString().search(/\.com/) != -1){
     alert("Моля, въведете само името на домейна (без .com)"); domain.focus(); return false;
}
if(domain.value.toString().search(/\.bg/) != -1){
     alert("Моля, въведете само името на домейна (без .BG)"); domain.focus(); return false;
}
if(domain.value.toString().search(/\.net/) != -1){
     alert("Моля, въведете само името на домейна (без .net)"); domain.focus(); return false;
}
if(domain.value.toString().search(/\./) != -1){
     alert("Моля, не въвеждайте 'точка' в домейна."); domain.focus(); return false;
}

return true;
}