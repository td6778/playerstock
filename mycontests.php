<?php require('includes/header.php');?>
<?php require('includes/navigation.php');?>
<?php require('includes/error-reporting.php');?>
<div class="container mycontest-container">
  <div class="row mycontest-row">
      <div class="col-4 mycontest-header">
        <h1>MY CONTESTS</h1>
        <div class="mycontest-options">
        <label><input type="radio" name="global-status" value="Live" checked="checked"> <span class="mycontest-option active">Live</span></label>
        <label><input type="radio" name="global-status" value="Upcoming"> <span class="mycontest-option">Upcoming</span></label>
        <label><input type="radio" name="global-status" value="History"> <span class="mycontest-option">History</span></label>
        </div>
      </div>
      <div class="col-4 mycontest-header">
        <div class="mycontest-winning">
          <h4> Currently Winning:</h4>
          <div class="scoreboard scoreboard-text neon-green">$0</div>
        </div>
      </div>
      <div class="col-2 mycontest-data">
        <div class="mycontest-contests">Live Entries:<span class="data-value">0</span></div>
        <div class="mycontest-entries">Upcoming Contests:<span class="data-value">0</span></div>
        <div class="mycontest-lineups">Historical Lineups:<span class="data-value">0</span></div>
      </div>
      <div class="col-2 mycontest-data mycontest-link-div">
        <div class="mycontest-links create-contest">
        <a href="#"><i class="fa fa-trophy" aria-hidden="true">&nbsp;</i> Create a Contest</a>
        </div>
        <div class="mycontest-links create-lineup">
        <a href="#"><i class="fa fa-file-text" aria-hidden="true">&nbsp;</i> Create a Lineup</a>
        </div>
      </div>
  </div>
  <div class="row mycontest-row">
    <div class="col-2 mycontest-header">
      <h2>Group By:</h2>
    </div>
    <div class="col-10 mycontest-header">
      <button class="btn btn-grey active">Contest</button>
      <button class="btn btn-grey">Lineup</button>
      <button class="btn btn-grey">Sport</button>
      <button class="btn btn-grey">Entry Fee</button>
    </div>
  </div>
  <div class="container mycontest-table-header">
  	<div class="row ">
      <div class="mycontest-name-header col-4">
        Contest Name
      </div>
      <div class="mycontest-live-header col-1">
        &nbsp;
      </div>
      <div class="mycontest-style-header col-1">
        Style
      </div>
      <div class="mycontest-place-header col-1">
        Place
      </div>
      <div class="mycontest-winning-header col-1">
        <span>Winnings</span>
      </div>
      <div class="mycontest-points-header col-1">
        FPTS
      </div>
      <div class="mycontest-remaining-header col-1">
        Remaining
      </div>
      <div class="mycontest-entry-header col-1">
        Entry Fee
      </div>
      <div class="mycontest-prize-header col-1">
        Top Prize
      </div>
  		</div>
  </div>
  <div class="container mycontest-table">
  	<div class="row table-row">
  	        <div class="contest-name col-4">
  	            <div class="table-icon">
  	                <i class="ion-ios-americanfootball">&nbsp;</i>
  	            </div>
  	            <a href="#">NFL Legends Alpha Testing Tournament 1-10112017-PS-0x0cbd23defshdffw2100120130</a>
  	        </div>
            <div class="mycontest-live col-1">
                <div class="mycontest-live-div">
    					 	<a class="btn-live" href="livegame.php">Live
                <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
    				</div>
  	        <div class="contest-style col-1">
  	            <div class="dk"><a href="#">DK</a></div>
  	        </div>
  	         <div class="mycontest-place col-1">
  	           55555
  	        </div>
  	        <div class="mycontest-prize col-1">
  	            $999999
  	        </div>
  	        <div class="mycontest-points col-1">
  	           999
  	        </div>
  	        <div class="mycontest-remaining col-1">
                360
            </div>
            <div class="mycontest-entry col-1">
  	            $3
  	        </div>
            <div class="mycontest-prize col-1">
  	           $100,000
  	        </div>
  	        </div>
  	    </div>
  </div>



</div>





<?php require('includes/footer.php');?>
