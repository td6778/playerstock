function home(){
    window.location.href = 'index.html';
}
$(function () {
  $('[data-toggle="popover"]').popover()
});

function addPlayer(pid,posid,playerfullname, opp, fppg, salary){
  var playerpid = document.getElementById(pid);
  var qbpid = document.getElementById("qb-pid");
  var qbplayer = document.getElementById("qb-player");
  var qbopp = document.getElementById("qb-opp");
  var qbfppg = document.getElementById("qb-fppg");
  var qboprk = document.getElementById("qb-oprk");
  var qbsalary = document.getElementById("qb-salary");
  var qbclose = document.getElementById("qb-close");
    if(qbplayer.innerHTML === "") {
    playerpid.classList.remove("show-block");
    playerpid.classList.add("hidden");
    qbpid.innerHTML = pid;
    qbplayer.innerHTML = playerfullname;
    qbopp.innerHTML = opp;
    qbfppg.innerHTML = fppg;
    qbsalary.innerHTML = '$' + salary.toLocaleString();
    qbclose.classList.remove("hidden");
  } else {
    console.log("Position Filled");
  }
}

function removePlayer(lineupPos) {
  var pid = document.getElementById(lineupPos + "-pid").innerHTML;
  var playerpid = document.getElementById(pid);
  document.getElementById(lineupPos + "-player").innerHTML = "";
  document.getElementById(lineupPos + "-opp").innerHTML = "";
  document.getElementById(lineupPos + "-fppg").innerHTML = "";
  document.getElementById(lineupPos + "-oprk").innerHTML = "";
  document.getElementById(lineupPos + "-salary").innerHTML = "";
  document.getElementById("qb-close").classList.add("hidden");
  playerpid.classList.remove("hidden");
  playerpid.classList.add("show-block");

}
