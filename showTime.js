var now,hours,minutes,seconds,timeValue;
var clock = document.getElementById("clock");
function showtime(){
        now = new Date();
        hours = now.getHours();
        minutes = now.getMinutes();
        seconds = now.getSeconds();
        timeValue = (hours >= 12) ? "PM " : "AM ";
        timeValue += ((hours > 12) ? hours - 12 : hours) + ":";
        timeValue += ((minutes < 10) ? "0" : "") + minutes + ":";
        timeValue += ((seconds < 10) ? "0" : "") + seconds;
        clock.innerHTML = timeValue;
        setTimeout("showtime()",100);
}
showtime();
