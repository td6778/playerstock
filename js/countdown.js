// Set the date we're counting down to
var countDownDate = new Date("Sept 7, 2017 20:30:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("start1").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("start1").innerHTML = "0:00:00";
    }
}, 1000);

// Set the date we're counting down to
var countDownDate2 = new Date("Sept 9, 2017 13:00:00").getTime();

// Update the count down every 1 second
var x2 = setInterval(function() {

    // Get todays date and time
    var now2 = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance2 = countDownDate2 - now2;
    
    // Time calculations for days, hours, minutes and seconds
    var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));
    var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("start2").innerHTML = days2 + "d " + hours2 + "h "
    + minutes2 + "m " + seconds2 + "s ";
    
    // If the count down is over, write some text 
    if (distance2 < 0) {
        clearInterval(x);
        document.getElementById("start2").innerHTML = "0:00:00";
    }
}, 1000);

// Set the date we're counting down to
var countDownDate3 = new Date("Sept 9, 2017 16:25:00").getTime();

// Update the count down every 1 second
var x3 = setInterval(function() {

    // Get todays date and time
    var now3 = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance3 = countDownDate3 - now3;
    
    // Time calculations for days, hours, minutes and seconds
    var days3 = Math.floor(distance3 / (1000 * 60 * 60 * 24));
    var hours3 = Math.floor((distance3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes3 = Math.floor((distance3 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds3 = Math.floor((distance3 % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("start3").innerHTML = days3 + "d " + hours3 + "h "
    + minutes3 + "m " + seconds3 + "s ";
    
    // If the count down is over, write some text 
    if (distance3 < 0) {
        clearInterval(x);
        document.getElementById("start3").innerHTML = "0:00:00";
    }
}, 1000);

