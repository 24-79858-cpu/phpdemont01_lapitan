const username = document.getElementById('displayusername').innerText;
const userID = document.getElementById('displayuserid').innerText;
const userAdd = document.getElementById('displayuseraddress').innerText;
const userNum = document.getElementById('displayusernumber').innerText;
const userAge = document.getElementById('displayuserage').innerText;




function greetUser(){
    alert("Hello "+username+". "+"Your User ID is: " +userID+ ". "+ "You live in: "+userAdd+ ". "+ "Your Phone Number is: " +userNum+ ". "+ "You are "+userAge+ " years old"
    );
}

