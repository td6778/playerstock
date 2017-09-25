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
        <p>$0 IN CASH PRIZES ARE UP FOR GRABS. MULTI ENTRY FORMAT WITH A 5 ENTRY MAX PER PLAYER.</p>
        <p class="draft-btn"><a class="btn btn-challenge">Challenge Friends</a></p>
      </div>
      <div class="col-4 draft-text">
        <h2>GAME TIME: OCT 11 @ 7:30 PM ET </h2>
        <h3>LIVE IN: 00:26:18</h3>
      </div>
      <div class="col-3 draft-text">
        <p>ENTRIES: 73 / 1000<br/>
          ENTRY FEE: FREE<br/>
          PRIZE PAYOUT: $0</p>
      </div>

    </div>
    <div class="social-share">
      <div class="icon social fb">
        <a href="#" target="_blank">
          <i aria-hidden="true" class="fa fa-facebook">&nbsp;</i>
        </a>
      </div>
      <div class="icon social tw">
        <a href="#" target="_blank">
          <i aria-hidden="true" class="fa fa-twitter">&nbsp;</i>
        </a>
      </div>
      <div class="icon social gp">
        <a href="#" target="_blank">
          <i aria-hidden="true" class="fa fa-google-plus">&nbsp;</i>
        </a>
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
    <div class="row"><h3 class="table-heading">Player Pool</div>
    <div class="row">
      <div class="col-12">
        <!-- **************************** Bootstrap 4 Tabs ******************* -->
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
  <div class="tab-content" id="draftTabContent">
    <div role="tabpanel" class="tab-pane fade show active" id="qb" aria-labelledby="home-tab" aria-expanded="false">
      QBs
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

  <!-- **************************** Bootstrap 4 Tabs ******************* -->



    </div><!-- end col-8 -->
  </div><!-- end row 1 -->
    <div class="row">Row 2</div>
    <div class="row">Row 3</div>
  </div><!-- end left col -->
  <div class="col-6">
    <div class="row">Row 1</div>
    <div class="row">Row 2</div>
    <div class="row">Row 3</div>
  </div><!-- end right col -->
  </div>
</div>



<?php require('includes/footer.php');?>
