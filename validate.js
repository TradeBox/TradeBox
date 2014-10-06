function validate()
{
// deklrarirame kato promenliva vsqka edna forma
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

fname=document.getElementById("name");
address=document.getElementById("address");
city=document.getElementById("city");
email=document.getElementById("contact_email");

customer_type=document.getElementById("customer_type");
eik=document.getElementById("eik");
manager=document.getElementById("manager");

if(fname.value=="") { alert("Моля, въведете име."); fname.focus(); return false; }
if(address.value=="") { alert("Моля, въведете адрес."); address.focus(); return false; }
if(city.value=="") { alert("Моля, въведете град."); city.focus(); return false; }
if(customer_type.value="company") {
   if(eik.value=="") { alert("Моля, въведете ЕИК."); eik.focus(); return false; }
    if(manager.value=="") { alert("Моля, въведете МОЛ."); manager.focus(); return false; }
}
if(email.value!="") {
   if(reg.test(email.value)==false) { alert("Моля, въведете валиден Email."); email.value=""; email.focus(); return false; } }

return true;
}