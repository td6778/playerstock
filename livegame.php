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
        <div class="quick-view mnh-100">
          <h6>QUICK VIEW</h6>
          <div class="quick-view-data">
            <span class="qv-team">MyTeamName:</span><span class="qv-pts"> 275.92 pts</span>
            <span class="qv-place">31577th</span>
          </div>
        </div>
        <div class="quick-view vs-20">
          <div class="row">
            <div class="col-6">
              <h6>STANDINGS</h6>
            </div>
            <div class="col-6 standings-search">
              <input type="text" placeholder="Find a rival.." />
            </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="ss-button">
                <a href="#">Go To My Team(s)</a>
                </div>
              </div>
              <div class="col-6 standings-search">
                  <div class="ss-checkbox">
                    <input type="checkbox" />
                    <span >Show Only Mine</span>
                  </div>
              </div>
              </div>
              <div class="row standings-row">
                <div class="psTableHeader standings-table">
                  <div class="pshead st-rank">RANK</div>
                  <div class="pshead st-name">TEAM NAME</div>
                  <div class="pshead st-pmr">PMR</div>
                  <div class="pshead st-fpts">FPTS</div>
                </div>
              </div>
              <div class="row standings-row standings-table-container">
                <div class="standings-table-data">
                  <div class="stdata st-rank">1</div>
                  <div class="stdata st-name">MyTeamName1</div>
                  <div class="stdata st-pmr">360</div>
                  <div class="stdata st-fpts">167.78</div>
                </div>
                <div class="standings-table-data even">
                  <div class="stdata st-rank">1</div>
                  <div class="stdata st-name">MyTeamName1</div>
                  <div class="stdata st-pmr">360</div>
                  <div class="stdata st-fpts">167.78</div>
                </div>
                <?php require('includes/alpha-standings-data.php');?>
              </div>
        </div>
    </div>
    <div class="col-9">
      <div class="row ps-table-header">
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
            <th class="tbl-pos">POS</th>
            <th class="tbl-name">Player</th>
            <th class="tbl-draft-pct">Draft %</th>
            <th class="tbl-game">Game</th>
            <th class="tbl-scoring">Scoring</th>
            <th class="tbl-fpts">FPTS</th>
          </thead>
          <tbody>
            <tr>
              <td class="tbl-pos">QB</td>
              <td class="tbl-name">Joe Montana</td>
              <td class="tbl-draft-pct td-draft-pct">25%</td>
              <td class="tbl-game td-game"><div>SF <br> All Pros</div></td>
              <td class="tbl-scoring td-scoring">2 PaTD, 183 PaYds, 1 RuTD, 16 RuYds</td>
              <td class="tbl-fpts">22.92</td>
            </tr>

            <?php require('includes/alpha-livescoring-data.php');?>

          </tbody>
          <tfoot>
            <tr class="no-border">
              <td colspan="4">&nbsp;</td>
              <td class="tbl-border-bottom tbl-footer-label">TOTAL FANTASY POINTS:</td>
              <td class="tbl-border-bottom tbl-footer-fpts">275.92</td>
            </tr>
          </tfoot>
        </table>

    </div>
  </div>


</div>



<?php require('includes/footer.php');?>
