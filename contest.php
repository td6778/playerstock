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
  <div class="col-6"> Left Col</div>
  <div class="col-6"> Right Col</div>
  </div>
</div>



<?php require('includes/footer.php');?>
