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
        <p class="draft-btn"><a class="btn btn-challenge">Challenge Friends</a></p>
      </div>
      <div class="col-4 draft-text">
        <h2>GAME TIME: DEC 10 @ 1:00 PM ET </h2>
        <h3>LIVE IN: 00:00:00</h3>
      </div>
      <div class="col-3 draft-text">
        <p>ENTRIES: 0 / 1000<br/>
          ENTRY FEE: FREE<br/>
          PRIZE PAYOUT: $0</p>
      </div>

    </div>
    <div class="game-list styled clearfix">
      <div class="col-md-12">
        <div class="row">
          <div class="col-2 game-block-all">
          <div class="game-block selected">
            <div class="game">
              <a class="all-games">All Games</a>
            </div>
          </div>
        </div>
          <div class="scrolling-box col-10">
            <div class="games-holder">
              <?php require('includes/alpha-testing-teams.php');?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row vs-20">
  <div class="col-6">
    <div class="row draft-table-heading">
        <h3 class="table-heading">Player Pool</h3>
        <input class="draft-table-search" placeholder="Search..." type="text">
      </div>
    <div class="row">
      <div class="col-12">
        <!-- **************************** Start Player Pool Tabs ******************* -->
<div class="draft-contest-tabs" role="tabpanel">
  <ul class="nav nav-tabs" id="draftTabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active draft-tabs" id="qb-tab" data-toggle="tab" href="#qb" role="tab" aria-controls="home" aria-expanded="false">QB</a>
    </li>
    <li class="nav-item">
      <a class="nav-link draft-tabs" id="profile-tab" data-toggle="tab" href="#rb" role="tab" aria-controls="profile" aria-expanded="false">RB</a>
    </li>
    <li class="nav-item">
      <a class="nav-link draft-tabs" id="profile-tab" data-toggle="tab" href="#wr" role="tab" aria-controls="profile" aria-expanded="false">WR</a>
    </li>
    <li class="nav-item">
      <a class="nav-link draft-tabs" id="profile-tab" data-toggle="tab" href="#te" role="tab" aria-controls="profile" aria-expanded="false">TE</a>
    </li>
    <li class="nav-item">
      <a class="nav-link draft-tabs" id="profile-tab" data-toggle="tab" href="#flex" role="tab" aria-controls="profile" aria-expanded="false">FLEX</a>
    </li>
    <li class="nav-item">
      <a class="nav-link draft-tabs" id="profile-tab" data-toggle="tab" href="#dst" role="tab" aria-controls="profile" aria-expanded="false">DST</a>
    </li>
    <li class="nav-item">
      <a class="nav-link draft-tabs" id="profile-tab" data-toggle="tab" href="#all" role="tab" aria-controls="profile" aria-expanded="false">ALL</a>
    </li>
  </ul>
  <div class="psTableHeader">
    <div class="pshead dt-pos">POS</div>
    <div class="pshead dt-player">Player</div>
    <div class="pshead dt-opp">OPP</div>
    <div class="pshead dt-fppg">FPPG</div>
    <div class="pshead dt-oprk">OPRK</div>
    <div class="pshead dt-salary">salary</div>
    <div class="pshead dt-add">&nbsp;</div>
  </div>
  <div class="tab-content" id="draftTabContent">
    <div role="tabpanel" class="tab-pane fade show active" id="qb" aria-labelledby="home-tab" aria-expanded="false">
      <div class="draftTableData">
        <div class="dtdata dt-pos">QB</div>
        <div class="dtdata dt-player">J. Montana</div>
        <div class="dtdata dt-opp">SF @ --</div>
        <div class="dtdata dt-fppg">19.57</div>
        <div class="dtdata dt-oprk">----</div>
        <div class="dtdata dt-salary">$10,500</div>
        <div class="dtdata dt-add"><i class="fa fa-plus-square" aria-hidden="true"></i></div>
      </div>
      <?php require('includes/draft-table-data.php');?>
    </div>
    <div class="tab-pane fade" id="rb" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
      RBs
    </div>
    <div class="tab-pane fade" id="wr" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
      WRs
    </div>
    <div class="tab-pane fade" id="te" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
      TEs
    </div>
    <div class="tab-pane fade" id="flex" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
      FLEXs
    </div>
    <div class="tab-pane fade" id="dst" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
      DSTs
    </div>
    <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
      All
    </div>
  </div>
</div>
      <!-- **************************** End Player Pool Tabs ******************* -->



    </div><!-- end col-8 -->
  </div><!-- end row 1 -->
    <div class="row draft-table-options">
      <div class="col-7">
      <input type="checkbox" checked="checked" /><span class="aap-label"> Auto Advance Positions</span>
    </div>
      <div class="col-5 draft-table-option-links">
        <a href="#">Glossary</a>
        <a href="#">Scoring</a>
        <a href="#">Export to CSV</a>
      </div>
    </div>
    <div class="row"><!-- Row 3 --></div>
  </div><!-- end left col -->
  <div class="col-6">
    <div class="row ps-table-header vs-30">
      <div class="col-4"><h3>Lineup</h3></div>
      <div class="col-4 avg-rem-div">
        <span class="avg-rem-txt">Avg. Rem./Player:</span>
        <span class="avg-rem neon-green bold numbers">$5,555</span>
      </div>
      <div class="col-4 rem-salary-div">
        <span class="avg-rem-txt">Rem. Salary:&nbsp;</span>
        <span class="avg-rem neon-green bold numbers">$50,000</span>
      </div>
    </div>
    <div class="psTableHeader">
      <div class="pshead dt-pos">POS</div>
      <div class="pshead dt-player">Player</div>
      <div class="pshead dt-opp">OPP</div>
      <div class="pshead dt-fppg">FPPG</div>
      <div class="pshead dt-oprk">OPRK</div>
      <div class="pshead dt-salary">salary</div>
      <div class="pshead dt-add">&nbsp;</div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">QB</div>
      <div class="dtdata dt-player">J. Montana</div>
      <div class="dtdata dt-opp">SF @ --</div>
      <div class="dtdata dt-fppg">19.57</div>
      <div class="dtdata dt-oprk">----</div>
      <div class="dtdata dt-salary">$10,500</div>
      <div style="display:inline-block;" class="dtdata dt-rmv"><i  class="fa fa-window-close" aria-hidden="true"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">RB</div>
      <div class="dtdata dt-player"></div>
      <div class="dtdata dt-opp"></div>
      <div class="dtdata dt-fppg"></div>
      <div class="dtdata dt-oprk"></div>
      <div class="dtdata dt-salary"></div>
      <div class="dtdata dt-rmv"><i class="fa fa-window-close" aria-hidden="true"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">RB</div>
      <div class="dtdata dt-player"></div>
      <div class="dtdata dt-opp"></div>
      <div class="dtdata dt-fppg"></div>
      <div class="dtdata dt-oprk"></div>
      <div class="dtdata dt-salary"></div>
      <div class="dtdata dt-rmv"><i class="fa fa-window-close" aria-hidden="true"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">WR</div>
      <div class="dtdata dt-player"></div>
      <div class="dtdata dt-opp"></div>
      <div class="dtdata dt-fppg"></div>
      <div class="dtdata dt-oprk"></div>
      <div class="dtdata dt-salary"></div>
      <div class="dtdata dt-rmv"><i class="fa fa-window-close" aria-hidden="true"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">WR</div>
      <div class="dtdata dt-player"></div>
      <div class="dtdata dt-opp"></div>
      <div class="dtdata dt-fppg"></div>
      <div class="dtdata dt-oprk"></div>
      <div class="dtdata dt-salary"></div>
      <div class="dtdata dt-rmv"><i class="fa fa-window-close" aria-hidden="true"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">WR</div>
      <div class="dtdata dt-player"></div>
      <div class="dtdata dt-opp"></div>
      <div class="dtdata dt-fppg"></div>
      <div class="dtdata dt-oprk"></div>
      <div class="dtdata dt-salary"></div>
      <div class="dtdata dt-rmv"><i class="fa fa-window-close" aria-hidden="true"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">TE</div>
      <div class="dtdata dt-player"></div>
      <div class="dtdata dt-opp"></div>
      <div class="dtdata dt-fppg"></div>
      <div class="dtdata dt-oprk"></div>
      <div class="dtdata dt-salary"></div>
      <div class="dtdata dt-rmv"><i class="fa fa-window-close" aria-hidden="true"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">FLEX</div>
      <div class="dtdata dt-player"></div>
      <div class="dtdata dt-opp"></div>
      <div class="dtdata dt-fppg"></div>
      <div class="dtdata dt-oprk"></div>
      <div class="dtdata dt-salary"></div>
      <div class="dtdata dt-rmv"><i class="fa fa-window-close" aria-hidden="true"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">DST</div>
      <div class="dtdata dt-player"></div>
      <div class="dtdata dt-opp"></div>
      <div class="dtdata dt-fppg"></div>
      <div class="dtdata dt-oprk"></div>
      <div class="dtdata dt-salary"></div>
      <div class="dtdata dt-rmv"><i class="fa fa-window-close" aria-hidden="true"></i></div>
    </div>
    <div class="row"><!--Row 2 --></div>
    <div class="row">
        <div class="col-5">
          <a href="#" class="btn btn-clear">CLEAR</a>
          <a href="#" class="btn btn-import">IMPORT</a>
        </div>
        <div class="col-3">
          <!-- middle col -->
        </div>
        <div class="col-4 submit-contest-btn">
          <a href="mycontests.php" class="btn btn-submit">ENTER&nbsp;&nbsp;<span id="contestFee" class="contest-fee-border">FREE</span></a>
        </div>
    </div>
  </div><!-- end right col -->
  </div>
</div>



<?php require('includes/footer.php');?>
