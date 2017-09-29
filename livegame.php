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
                <div id="fixed-thumb-size-demo" class="default-skin scrollable" tabindex="-1">
                  <div class="scroll-bar vertical" style="height: 200px; display: block;">
                    <div class="thumb" style="top: 150px; height: 50px;"></div>
                  </div>
                  <div class="viewport" style="height: 200px; width: 400px;">
                    <div class="overview" style="top: -106px; left: 0px;">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed,
                      lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                      Quisque
                      semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed
                      posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel
                      tempus
                      metus leo non est. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque.
                      Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus
                      eget
                      nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam rhoncus, urna quam viverra nisi,
                      in
                      interdum massa nibh nec erat.
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed,
                      lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                      Quisque
                      semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed
                      posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel
                      tempus
                      metus leo non est. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque.
                      Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus
                      eget
                      nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam rhoncus, urna quam viverra nisi,
                      in
                      interdum massa nibh nec erat.
                    </div>
                  </div>
                  <div class="scroll-bar horizontal" style="width: 400px; display: block;">
                    <div class="thumb" style="left: 0px; width: 60px;"></div>
                  </div>
                </div>

                <!-- <table class="ps-table standings-table">
                  <thead>
                    <th class="tbl-pos">Rank</th>
                    <th class="tbl-name">Team Name</th>
                    <th class="tbl-fpts">FPTS</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="tbl-pos">31577th</td>
                      <td class="tbl-name">MyTeamName</td>
                      <td class="tbl-fpts">275.92</td>
                    </tr>

                  </tbody>
                </table> -->
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
