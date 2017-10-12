function home(){
    window.location.href = 'index.html';
}
$(function () {
  $('[data-toggle="popover"]').popover()
});

function addPlayer(pid,posid,playerfullname, opp, fppg, salary){

  var playerpid = document.getElementById(pid);
  var pospid = document.getElementById(pos + "-pid");
  var posplayer = document.getElementById(pos + "-player");
  var posopp = document.getElementById(pos + "-opp");
  var posfppg = document.getElementById(pos + "-fppg");
  var posoprk = document.getElementById(pos + "-oprk");
  var possalary = document.getElementById(pos + "-salary");
  var posclose = document.getElementById(pos + "-close");
    if(posplayer.innerHTML === "") {
    playerpid.classList.remove("show-block");
    playerpid.classList.add("hidden");
    pospid.innerHTML = pid;
    posplayer.innerHTML = playerfullname;
    posopp.innerHTML = opp;
    posfppg.innerHTML = fppg;
    possalary.innerHTML = '$' + salary.toLocaleString();
    posclose.classList.remove("hidden");

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
