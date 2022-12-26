let welcome;  
let date = new Date();  
let hour = date.getHours();  
let minute = date.getMinutes();  
let second = date.getSeconds();  
if (minute < 10) {  
  minute = "0" + minute;  
}  
if (second < 10) {  
  second = "0" + second;  
}  
if (hour < 12) {  
  welcome = "Good morning"; 
} else if (hour < 17) {  
  welcome = "Good afternoon";  
} else {  
  welcome = "Good evening";  
}

console.log(`The time is ${hour}:${minute}:${second}`)

const greeting = document.querySelector(".greeting");
greeting.innerHTML = welcome;
