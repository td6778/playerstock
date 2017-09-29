<?php require('includes/header.php');?>
<?php require('includes/navigation.php');?>
<?php require('includes/error-reporting.php');?>
<div class="container draft-container">

  <div class="row draft-row">
      <div class="col-12 draft-header">
        <h1><i class="ion-ios-americanfootball">&nbsp;</i> NFL Legends Alpha Testing Tournament</h1>
      </div>
  </div>
  <div class="row draft-row">
      <div class="col-5 draft-text draft-desc">
        <p>OUR FIRST ALPHA TEST TOURNAMENT! ENTRY BY INVITE ONLY, MAX 5 ENTRIES PER INVITE CODE. THIS CONTEST IS FOR TESTING ONLY, NO PRIZES WILL BE AWARDED.</p>
        <p><a href="#">Full Contest Rules &amp; Prizes</a></p>
      </div>
      <div class="col-4 draft-text">
        <h2>GAME TIME: DEC 10 @ 1:00 PM ET </h2>
        <h3 class="brand-color2">IN PROGRESS</h3>
      </div>
      <div class="col-3 draft-text">
        <ul class="ul-inline">
          <li>ENTRIES: 0 / 1000</li>
          <li>ENTRY FEE: FREE</li>
          <li>PRIZE PAYOUT: $0</li>
        </ul>

        <ul class="ul-inline">
          <li>TEAMS: 120988</li>
          <li>POSTIONS PAID: 2055</li>
          <li>PRIZE PAYOUT: $0</li>
        </ul>
      </div>

    </div>
    <div class="game-list styled clearfix">
      <div class="col-md-12">
        <div class="row">
           <div class="scrolling-box col-12">
            <div class="games-holder">
              <?php require('includes/alpha-testing-teams.php');?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row vs-20">
    <div class="col-3">
        <div class="quick-view">Quick View</div>
        <div class="standings"><h5>STANDINGS</h5></div>
    </div>
    <div class="col-9">
      <div class="row draft-lineup-header">
        <div class="col-3"><h3>LIVE SCORING</h3></div>
        <div class="col-2">
          Team: MyTeamName
        </div>
        <div class="col-2 ">
          Rank: 31577th
        </div>
        <div class="col-2 ">
          YTP: 9
        </div>
        <div class="col-2 ">
          PMR: 360
        </div>
      </div>
        <table class="ps-table">
          <thead>
            <th>POS</th>
            <th>Player</th>
            <th class="th-draft-pct">Draft %</th>
            <th>Game</th>
            <th>Scoring</th>
            <th>FPTS</th>
          </thead>
          <tbody>
            <tr>
              <td>QB</td>
              <td>Joe Montana</td>
              <td class="td-draft-pct">25%</td>
              <td class="td-game"><div>SF <br> All Pros</div></td>
              <td class="td-scoring">2 PaTD, 183 PaYds, 1 RuTD, 16 RuYds</td>
              <td>22.92</td>
            </tr>
          </tbody>
        </table>

    </div>
  </div>


</div>



<?php require('includes/footer.php');?>
