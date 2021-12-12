let myform = document.getElementById('myform');
function test()
{
myform.addEventListener('submit',function(e)
{
 let myinput = document.getElementById('name');
 let myRegex = /^([A-Z])+([a-z])+$/;
 let myRegex2 = /^[a-zA-Z]+$/;
 let t=new Array();
 t=document.getElementById('name');
 if(myinput.value.trim()=="")
 {
     let myError = document.getElementById('error');
     myError.innerHTML ="the field are empty";
     myError.style.color='red';
     e.preventDefault();
 }
 else if (myRegex2.test(myinput.value)==false)
 {
    let myError = document.getElementById('error');
    myError.innerHTML ="Name must content character."
    myError.style.color='red';
    e.preventDefault();
 }
 else if (myRegex2.test(myinput.value)==true)
 {
    let myError = document.getElementById('error');
    myError.innerHTML ="validated."
    myError.style.color='green';
    e.preventDefault();
 }
 }
);
myform.addEventListener('submit',function(e)
{
 let myinput = document.getElementById('email');
 let myRegex = /^([A-Z])+([a-z])+$/;
 let myRegex2 = /[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/;
 let t=new Array();
 t=document.getElementById('email')
 if(myinput.value.trim()=="")
 {
     let myError = document.getElementById('error3');
     myError.innerHTML ="the field are empty";
     myError.style.color='red';
     e.preventDefault();
 }
 else if (myRegex2.test(myinput.value)==false)
 {
    let myError = document.getElementById('error3');
    myError.innerHTML ="Email must content @ and characters and point."
    myError.style.color='red';
    e.preventDefault();
 }
 else if (myRegex2.test(myinput.value)==true)
 {
    let myError = document.getElementById('error3');
    myError.innerHTML ="validated."
    myError.style.color='green';
    e.preventDefault();
 }
 }
);
myform.addEventListener('submit',function(e)
{
 let myinput = document.getElementById('subject1');
 let myRegex = /^([A-Z])+([a-z])+$/;
 let t=new Array();
 t=document.getElementById('subject1');
 if(myinput.value.trim()=="")
 {
     let myError = document.getElementById('error4');
     myError.innerHTML =" The name of event are empty"
     myError.style.color='red';
     e.preventDefault();
 }
 else if (myRegex.test(myinput.value)==false)
 {
    let myError = document.getElementById('error4');
    myError.innerHTML ="Name of event must contant character and start with upcase.";
    myError.style.color='red';
    e.preventDefault();
 }
 else if (myRegex.test(myinput.value)==true)
 {
    let myError = document.getElementById('error4');
    myError.innerHTML ="validated."
    myError.style.color='green';
    e.preventDefault();
 }
 }
);
myform.addEventListener('submit',function(e)
{
 let myinput = document.getElementById('subject2');
 let myRegex = /^([A-Z])+([a-z])+$/;
 let t=new Array();
 t=document.getElementById('subject2')
 if(myinput.value.trim()=="")
 {
     let myError = document.getElementById('error5');
     myError.innerHTML ="the field of subject are empty"
     myError.style.color='red';
     e.preventDefault();
 }
 else if (myRegex.test(myinput.value)==false)
 {
    let myError = document.getElementById('error5');
    myError.innerHTML ="subject must content  character and start with upcase."
    myError.style.color='red';
    e.preventDefault();
 }
 else if (myRegex.test(myinput.value)==true)
 {
    let myError = document.getElementById('error5');
    myError.innerHTML ="validated."
    myError.style.color='green';
    e.preventDefault();
 }
 }
);}