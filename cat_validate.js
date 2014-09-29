function validate()
{
// deklrarirame kato promenliva vsqka edna forma

name_cat=document.getElementById("name_cat");
// begin proverkata :)
if(name_cat.value=="") { alert("Моля, въведете име на категорията."); user.focus(); return false; }
// begin proverkata :)
return true;
}