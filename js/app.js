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
    autoAdvancePosition(pos);
  } else {
    console.log("Position Filled");
    $('#alertPositionFilled').show();
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
  console.log(salRemain);
  if(salRemain !== 0){
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
  } else {
    document.getElementById("avgRemain").innerHTML = 0;
    document.getElementById("avgRemSpan").classList.remove("neon-red");
    document.getElementById("avgRemSpan").classList.add("neon-green");
  }

}

//
function hideAlertPositionFilled() {
    $('#alertPositionFilled').hide();
}

function autoAdvancePosition(pos) {
  var checkbox = document.getElementById("aap").checked;
  if(checkbox === true){
    switch (pos) {
      case "qb":
      document.getElementById("rb-tab").click();
      break;
      case "rb2":
      document.getElementById("wr-tab").click();
      break;
      case "wr3":
      document.getElementById("te-tab").click();
      break;
      case "te":
      document.getElementById("flex-tab").click();
      break;
      case "flex":
      document.getElementById("dst-tab").click();
      break;
      case "dst":
      document.getElementById("qb-tab").click();
      break;
    }
  }
}

function clearAll() {
  var pos = ["qb","rb1","rb2","wr1","wr2","wr3","te","flex","dst"];
  for(i = 0; i < pos.length; i++){
    var playerpid = document.getElementById(pos[i] + "-pid").innerHTML;
    if(playerpid !== ""){
    document.getElementById(pos[i] + "-pid").innerHTML = "";
    document.getElementById(pos[i] + "-player").innerHTML = "";
    document.getElementById(pos[i] + "-opp").innerHTML = "";
    document.getElementById(pos[i] + "-fppg").innerHTML = "";
    document.getElementById(pos[i] + "-oprk").innerHTML = "";
    document.getElementById(pos[i] + "-salary").innerHTML = "";
    document.getElementById(pos[i] + "-close").classList.add("hidden");
    document.getElementById(playerpid).classList.remove("hidden");
    document.getElementById(playerpid).classList.add("show-block");
  }
  }

  rowcount = 0;
  document.getElementById("avgRemain").innerHTML = "5,556";
  document.getElementById("avgRemSpan").classList.remove("neon-red");
  document.getElementById("avgRemSpan").classList.add("neon-green");
  document.getElementById("salRemain").innerHTML = "50,000";
  document.getElementById("avgSalSpan").classList.remove("neon-red");
  document.getElementById("avgSalSpan").classList.add("neon-green");
}
