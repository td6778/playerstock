function home(){
    window.location.href = 'index.html';
}


$(function () {
  $('[data-toggle="popover"]').popover()
});

var rowcount = 0;

function addPlayer(pid,posid,playerfullname, opp, fppg, salary) {
  switch (posid) {
    case 1:
        var pos = "qb";
      break;
    case 2:
        if(document.getElementById("rb1-player").innerHTML.trim().length === 0){
            var pos = "rb1";
        } else if (document.getElementById("rb2-player").innerHTML.trim().length === 0) {
          var pos = "rb2";
        } else {
          var pos = "flex";
        }
      break;
      case 3:
          if(document.getElementById("wr1-player").innerHTML.trim().length === 0){
              var pos = "wr1";
          } else if (document.getElementById("wr2-player").innerHTML.trim().length === 0) {
            var pos = "wr2";
          } else if (document.getElementById("wr3-player").innerHTML.trim().length === 0) {
            var pos = "wr3";
          } else {
            var pos = "flex";
          }
        break;
    case 4:
    if (document.getElementById("te-player").innerHTML.trim().length === 0) {
      var pos = "te";
    } else {
      var pos = "flex";
    }
      break;
    case 5:
          var pos = "dst";
      break;
    default: var pos ="";
  }
  var flexid = "";
  var playerpid = document.getElementById(pid);
  var flexid = document.getElementById(pid + "flex");
  var allid = document.getElementById(pid + "all");
  var modalid = document.getElementById(pid + "modal-click");
  var pospid = document.getElementById(pos + "-pid");
  var posplayer = document.getElementById(pos + "-player");
  var posopp = document.getElementById(pos + "-opp");
  var posfppg = document.getElementById(pos + "-fppg");
  var posoprk = document.getElementById(pos + "-oprk");
  var possalary = document.getElementById(pos + "-salary");
  var posclose = document.getElementById(pos + "-close");
    if(posplayer.innerHTML === "") {
    totalSalaryAdd(salary);
    playerpid.classList.remove("show-block");
    playerpid.classList.add("hidden");
    pospid.innerHTML = pid;
    posplayer.innerHTML = playerfullname;
    posopp.innerHTML = opp;
    posfppg.innerHTML = fppg;
    possalary.innerHTML = '$' + salary.toLocaleString();
    posclose.classList.remove("hidden");
    if(flexid){
      flexid.classList.remove("show-block");
      flexid.classList.add("hidden");
    }
    allid.classList.remove("show-block");
    allid.classList.add("hidden");
    modalid.onclick = null;
    rowcount++;
  } else {
    console.log("Position Filled");
  }
  averageRemaining();
}

function removePlayer(lineupPos) {
  var salary = document.getElementById(lineupPos + "-salary").innerHTML;
  totalSalaryMinus(salary);
  var pid = document.getElementById(lineupPos + "-pid").innerHTML;
  var playerpid = document.getElementById(pid);
  document.getElementById(lineupPos + "-pid").innerHTML = "";
  document.getElementById(lineupPos + "-player").innerHTML = "";
  document.getElementById(lineupPos + "-opp").innerHTML = "";
  document.getElementById(lineupPos + "-fppg").innerHTML = "";
  document.getElementById(lineupPos + "-oprk").innerHTML = "";
  document.getElementById(lineupPos + "-salary").innerHTML = "";
  document.getElementById(lineupPos + "-close").classList.add("hidden");
  playerpid.classList.remove("hidden");
  playerpid.classList.add("show-block");
  rowcount--;
  averageRemaining();

}


function totalSalaryAdd(s) {
  var innerSalRemain = document.getElementById("salRemain").innerHTML;
  var salRemain = parseFloat(innerSalRemain.replace(/[^0-9-.]/g, ''));
  salRemain = parseInt(salRemain);
  var playerSalary = s;
  var totalSal = salRemain - playerSalary;
  if(totalSal >= 0){
    document.getElementById("salRemain").innerHTML = totalSal.toLocaleString();
  } else {
    document.getElementById("salRemain").innerHTML = totalSal.toLocaleString();
    document.getElementById("avgSalSpan").classList.remove("neon-green");
    document.getElementById("avgSalSpan").classList.add("neon-red");
  }

}


function totalSalaryMinus(s) {
  var playerSalary = parseFloat(s.replace(/[^0-9-.]/g, ''));
  var innerSalRemain = document.getElementById("salRemain").innerHTML;
  var salRemain = parseFloat(innerSalRemain.replace(/[^0-9-.]/g, ''));
  salRemain = parseInt(salRemain);
  var totalSal = salRemain + playerSalary;
  if(totalSal >= 0){
    document.getElementById("salRemain").innerHTML = totalSal.toLocaleString();
    document.getElementById("avgSalSpan").classList.remove("neon-red");
    document.getElementById("avgSalSpan").classList.add("neon-green");
  } else {
    document.getElementById("salRemain").innerHTML = totalSal.toLocaleString();
  }
}

function averageRemaining(){
  var rows = 9 - rowcount;
  var innerSalRemain = document.getElementById("salRemain").innerHTML;
  var salRemain = parseFloat(innerSalRemain.replace(/[^0-9-.]/g, ''));
  salRemain = parseInt(salRemain);
  var averageRemainingSalary = salRemain/rows;
  averageRemainingSalary = Math.round(averageRemainingSalary);

  if(averageRemainingSalary <= 0){
    document.getElementById("avgRemain").innerHTML = averageRemainingSalary.toLocaleString();
    document.getElementById("avgRemSpan").classList.remove("neon-green");
    document.getElementById("avgRemSpan").classList.add("neon-red");
  } else {
    document.getElementById("avgRemain").innerHTML = averageRemainingSalary.toLocaleString();
    document.getElementById("avgRemSpan").classList.remove("neon-red");
    document.getElementById("avgRemSpan").classList.add("neon-green");
  }
}

//
