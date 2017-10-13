<?php require('includes/dbconnection.php');?>
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
              <?php $sql = "SELECT * FROM teams t LEFT JOIN stadiums s ON t.stadiumID = s.stadiumID LEFT JOIN surfaces f ON s.surfaceID = f.surfaceID LEFT JOIN roofs r ON s.roofID = r.roofID ORDER BY team_name";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                  $teamID = $row["teamID"];
                  $capacity = number_format($row["capacity"]);
                echo "<div class=\"game-block\">
                  <div class=\"game\"><div class=\"information\">

                    <i class=\"fa fa-info-circle\" tabindex=\"0\" data-toggle=\"popover\" data-trigger=\"focus\" data-html=\"true\"
                    title=\"" . $row["stadium_name"] ."\" data-content=\"<b>" . $row["stadium_city"] .  ", " .  $row["stadium_state"] .  "</b> <br/> Capacity: " . $capacity . "<br/>Surface: " . $row["surface_type"] .  "<br/>Roof: " . $row["roof_type"] .  "\"></i>


                    <table class=\"table branded headless game\">
                      <tbody>
                        <tr>
                          <td class=\"team-names\">" . $row["team_name"] . "</td>
                        </tr>
                        <tr>
                          <td class=\"team-names\">Legends</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div id=\"teamID" . $row["teamID"] .  "\" class=\"footer\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#depthChartModal" .  $row["teamID"] . "\">Depth Charts &nbsp;</a></div>
                </div>
                </div>";
              }
          } else {
              echo "0 results";
          }
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <?php $sql = "SELECT * FROM teams";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {

            echo "<div class=\"modal fade\" id=\"depthChartModal" . $row["teamID"] ."\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">" . $row["team_city"] . " " . $row["team_name"] . "</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                      <span aria-hidden=\"true\">&times;</span>
                    </button>
                  </div>
                  <div class=\"modal-body\"><div class=\"psTableHeader modalHeader\">
                      <div class=\"pshead dt-pos\">POS</div>
                      <div class=\"pshead dt-player\">Player</div>
                      <div class=\"pshead dt-fppg\">FPPG</div>
                      <div class=\"pshead dt-salary\">salary</div>
                      <div class=\"pshead dt-add modal-add\">&nbsp;</div>
                    </div>";
                  $teamID = $row["teamID"];
                  $sql2 = "SELECT * FROM legends_player WHERE teamID=$teamID AND  posID = 1";
                  $result2 = mysqli_query($conn, $sql2);
                  while($row = mysqli_fetch_assoc($result2)) {
                    $salary = number_format($row["salary"]);
                    echo "<div class=\"draftTableData modalData\">
                      <div class=\"dtdata dt-pos\">QB</div>
                      <div class=\"dtdata dt-player\">" . $row["player_first"] . " " . $row["player_last"] ."</div>
                      <div class=\"dtdata dt-fppg\">" . $row["fppg"] . "</div>
                      <div class=\"dtdata dt-salary\">" . "$" . $salary . "</div>
                      <div class=\"dtdata dt-add modal-add\"><i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i></div>
                    </div>";
                  }
                  $sql3 = "SELECT * FROM legends_player WHERE teamID=$teamID AND  posID = 2";
                  $result3 = mysqli_query($conn, $sql3);
                  while($row = mysqli_fetch_assoc($result3)) {
                    $salary = number_format($row["salary"]);
                    echo "<div class=\"draftTableData modalData\">
                      <div class=\"dtdata dt-pos\">RB</div>
                      <div class=\"dtdata dt-player\">" . $row["player_first"] . " " . $row["player_last"] ."</div>
                      <div class=\"dtdata dt-fppg\">" . $row["fppg"] . "</div>
                      <div class=\"dtdata dt-salary\">" . "$" . $salary . "</div>
                      <div class=\"dtdata dt-add modal-add\"><i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i></div>
                    </div>";
                  }
                  $sql4 = "SELECT * FROM legends_player WHERE teamID=$teamID AND  posID = 3";
                  $result4 = mysqli_query($conn, $sql4);
                  while($row = mysqli_fetch_assoc($result4)) {
                    $salary = number_format($row["salary"]);
                    echo "<div class=\"draftTableData modalData\">
                      <div class=\"dtdata dt-pos\">WR</div>
                      <div class=\"dtdata dt-player\">" . $row["player_first"] . " " . $row["player_last"] ."</div>
                      <div class=\"dtdata dt-fppg\">" . $row["fppg"] . "</div>
                      <div class=\"dtdata dt-salary\">" . "$" . $salary . "</div>
                      <div class=\"dtdata dt-add modal-add\"><i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i></div>
                    </div>";
                  }
                  $sql5 = "SELECT * FROM legends_player WHERE teamID=$teamID AND  posID = 4";
                  $result5 = mysqli_query($conn, $sql5);
                  while($row = mysqli_fetch_assoc($result5)) {
                    $salary = number_format($row["salary"]);
                    echo "<div class=\"draftTableData modalData\">
                      <div class=\"dtdata dt-pos\">TE</div>
                      <div class=\"dtdata dt-player\">" . $row["player_first"] . " " . $row["player_last"] ."</div>
                      <div class=\"dtdata dt-fppg\">" . $row["fppg"] . "</div>
                      <div class=\"dtdata dt-salary\">" . "$" . $salary . "</div>
                      <div class=\"dtdata dt-add modal-add\"><i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i></div>
                    </div>";
                  }
                  echo
                  "</div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                  </div>
                </div>
              </div>
            </div>";
              }
          } else {
              echo "0 results";
          }
              ?>




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

      <?php $sql = "SELECT * FROM legends_player l LEFT JOIN teams t ON l.teamID = t.teamID  WHERE posID = 1 ORDER BY salary DESC, fppg DESC";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $salary = number_format($row["salary"]);
        $playerfullname = $row["player_first"] . " " . $row["player_last"];
        $qbargs = $row["playerID"] . "," . $row["posID"] . ",'" . $playerfullname . "','" . $row["abbrv"] . "'," . $row["fppg"] . ","  . $row["salary"];
        echo "<div id=\"" . $row["playerID"] . "\" class=\"draftTableData show-block\">
          <div class=\"dtdata dt-pos\">QB</div>
          <div class=\"dtdata dt-player\">" . $playerfullname ."</div>
          <div class=\"dtdata dt-opp\">" . $row["abbrv"] . " @ --</div>
          <div class=\"dtdata dt-fppg\">" . $row["fppg"] . "</div>
          <div class=\"dtdata dt-oprk\">----</div>
          <div class=\"dtdata dt-salary\">" . "$" . $salary . "</div>
          <div class=\"dtdata dt-add\"><i class=\"fa fa-plus-square show-block\" aria-hidden=\"true\" onclick=\"addPlayer(" . $qbargs . ")\"></i></div>
        </div>";
      }
  } else {
      echo "0 results";
  }
      ?>
    </div>
    <div class="tab-pane fade" id="rb" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
      <?php $sql = "SELECT * FROM legends_player l LEFT JOIN teams t ON l.teamID = t.teamID  WHERE posID = 2 ORDER BY salary DESC, fppg DESC";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $salary = number_format($row["salary"]);
        $playerfullname = $row["player_first"] . " " . $row["player_last"];
        $rbargs = $row["playerID"] . "," . $row["posID"] . ",'" . $playerfullname . "','" . $row["abbrv"] . "'," . $row["fppg"] . ","  . $row["salary"];
        echo "<div id=\"" . $row["playerID"] . "\" class=\"draftTableData show-block\">
          <div class=\"dtdata dt-pos\">RB</div>
          <div class=\"dtdata dt-player\">" . $row["player_first"] . " " . $row["player_last"] ."</div>
          <div class=\"dtdata dt-opp\">" . $row["abbrv"] . " @ --</div>
          <div class=\"dtdata dt-fppg\">" . $row["fppg"] . "</div>
          <div class=\"dtdata dt-oprk\">----</div>
          <div class=\"dtdata dt-salary\">" . "$" . $salary . "</div>
          <div class=\"dtdata dt-add\"><i class=\"fa fa-plus-square show-block\" aria-hidden=\"true\" onclick=\"addPlayer(" . $rbargs . ")\"></i></div>
        </div>";
      }
  } else {
      echo "0 results";
  }
      ?>
    </div>
    <div class="tab-pane fade" id="wr" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
      <?php $sql = "SELECT * FROM legends_player l LEFT JOIN teams t ON l.teamID = t.teamID  WHERE posID = 3 ORDER BY salary DESC, fppg DESC";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $salary = number_format($row["salary"]);
        $playerfullname = $row["player_first"] . " " . $row["player_last"];
        $wrargs = $row["playerID"] . "," . $row["posID"] . ",'" . $playerfullname . "','" . $row["abbrv"] . "'," . $row["fppg"] . ","  . $row["salary"];
        echo "<div id=\"" . $row["playerID"] . "\" class=\"draftTableData show-block\">
          <div class=\"dtdata dt-pos\">WR</div>
          <div class=\"dtdata dt-player\">" . $row["player_first"] . " " . $row["player_last"] ."</div>
          <div class=\"dtdata dt-opp\">" . $row["abbrv"] . " @ --</div>
          <div class=\"dtdata dt-fppg\">" . $row["fppg"] . "</div>
          <div class=\"dtdata dt-oprk\">----</div>
          <div class=\"dtdata dt-salary\">" . "$" . $salary . "</div>
          <div class=\"dtdata dt-add\"><i class=\"fa fa-plus-square show-block\" aria-hidden=\"true\" onclick=\"addPlayer(" . $wrargs . ")\"></i></div>
        </div>";
      }
  } else {
      echo "0 results";
  }
      ?>
    </div>
    <div class="tab-pane fade" id="te" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
      <?php $sql = "SELECT * FROM legends_player l LEFT JOIN teams t ON l.teamID = t.teamID  WHERE posID = 4 ORDER BY salary DESC, fppg DESC";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $salary = number_format($row["salary"]);
        $playerfullname = $row["player_first"] . " " . $row["player_last"];
        $teargs = $row["playerID"] . "," . $row["posID"] . ",'" . $playerfullname . "','" . $row["abbrv"] . "'," . $row["fppg"] . ","  . $row["salary"];
        echo "<div id=\"" . $row["playerID"] . "\" class=\"draftTableData show-block\">
          <div class=\"dtdata dt-pos\">TE</div>
          <div class=\"dtdata dt-player\">" . $row["player_first"] . " " . $row["player_last"] ."</div>
          <div class=\"dtdata dt-opp\">" . $row["abbrv"] . " @ --</div>
          <div class=\"dtdata dt-fppg\">" . $row["fppg"] . "</div>
          <div class=\"dtdata dt-oprk\">----</div>
          <div class=\"dtdata dt-salary\">" . "$" . $salary . "</div>
          <div class=\"dtdata dt-add\"><i class=\"fa fa-plus-square show-block\" aria-hidden=\"true\" onclick=\"addPlayer(" . $teargs . ")\"></i></div>
        </div>";
      }
  } else {
      echo "0 results";
  }
      ?>
    </div>
    <div class="tab-pane fade" id="flex" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
      <?php $sql = "SELECT * FROM legends_player l LEFT JOIN teams t ON l.teamID = t.teamID  WHERE posID = 2 OR posID = 3 OR posID = 4 ORDER BY salary DESC, fppg DESC";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $salary = number_format($row["salary"]);
        $playerfullname = $row["player_first"] . " " . $row["player_last"];
        $flexargs = $row["playerID"] . "," . $row["posID"] . ",'" . $playerfullname . "','" . $row["abbrv"] . "'," . $row["fppg"] . ","  . $row["salary"];
        echo "<div id=\"" . $row["playerID"] . "flex\" class=\"draftTableData show-block\">

          <div class=\"dtdata dt-pos\">";

          if($row["posID"] === "2") {
            echo "RB";
          } elseif ($row["posID"] === "3") {
          echo "WR";
          }  else {
              echo "TE";
          }

          echo "</div>


          <div class=\"dtdata dt-player\">" . $row["player_first"] . " " . $row["player_last"] ."</div>
          <div class=\"dtdata dt-opp\">" . $row["abbrv"] . " @ --</div>
          <div class=\"dtdata dt-fppg\">" . $row["fppg"] . "</div>
          <div class=\"dtdata dt-oprk\">----</div>
          <div class=\"dtdata dt-salary\">" . "$" . $salary . "</div>
          <div class=\"dtdata dt-add\"><i class=\"fa fa-plus-square show-block\" aria-hidden=\"true\" onclick=\"addPlayer(" . $flexargs . ")\"></i></div>
        </div>";
      }
  } else {
      echo "0 results";
  }
      ?>
    </div>
    <div class="tab-pane fade" id="dst" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
      <?php $sql = "SELECT * FROM legends_dst";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $salary = number_format($row["dst_salary"]);
        $playerfullname = $row["dst_year"] . " " . $row["dst_team"];
        $dstargs = $row["dstID"] . ",5,'" . $playerfullname . "','" . $row["dst_abbrv"] . "'," . $row["dst_fppg"] . ","  . $row["dst_salary"];
        echo "<div class=\"draftTableData\">
          <div class=\"dtdata dt-pos\">DST</div>
          <div class=\"dtdata dt-player\">" . $row["dst_year"] . " " . $row["dst_team"] ."</div>
          <div class=\"dtdata dt-opp\">" . $row["dst_abbrv"] . " @ --</div>
          <div class=\"dtdata dt-fppg\">" . $row["dst_fppg"] . "</div>
          <div class=\"dtdata dt-oprk\">----</div>
          <div class=\"dtdata dt-salary\">" . "$" . $salary . "</div>
          <div class=\"dtdata dt-add\"><i class=\"fa fa-plus-square show-block\" aria-hidden=\"true\" onclick=\"addPlayer(" . $dstargs . ")\"></i></div>
        </div>";
      }
  } else {
      echo "0 results";
  }
      ?>
    </div>
    <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
      <?php $sql = "SELECT * FROM legends_player l LEFT JOIN teams t ON l.teamID = t.teamID ORDER BY salary DESC, fppg DESC";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $salary = number_format($row["salary"]);
        $playerfullname = $row["player_first"] . " " . $row["player_last"];
        $allargs = $row["playerID"] . "," . $row["posID"] . ",'" . $playerfullname . "','" . $row["abbrv"] . "'," . $row["fppg"] . ","  . $row["salary"];
        echo "<div id=\"" . $row["playerID"] . "all\" class=\"draftTableData show-block\">
          <div class=\"dtdata dt-pos\">";

          if($row["posID"] === "1") {
            echo "QB";
          } elseif ($row["posID"] === "2") {
            echo "RB";
          }  elseif ($row["posID"] === "3") {
            echo "WR";
          } else {
              echo "TE";
          }

           echo "</div>
          <div class=\"dtdata dt-player\">" . $row["player_first"] . " " . $row["player_last"] ."</div>
          <div class=\"dtdata dt-opp\">" . $row["abbrv"] . " @ --</div>
          <div class=\"dtdata dt-fppg\">" . $row["fppg"] . "</div>
          <div class=\"dtdata dt-oprk\">----</div>
          <div class=\"dtdata dt-salary\">" . "$" . $salary . "</div>
          <div class=\"dtdata dt-add\"><i class=\"fa fa-plus-square show-block\" aria-hidden=\"true\" onclick=\"addPlayer(" . $allargs . ")\"></i></div>
        </div>";
      }
  } else {
      echo "0 results";
  }
      ?>
    </div>
  </div>
</div>
      <!-- **************************** End Player Pool Tabs ******************* -->



    </div><!-- end col-8 -->
  </div><!-- end row 1 -->
    <div class="row draft-table-options">
      <div class="col-7">
      <input id="aap" type="checkbox" checked="checked" /><span class="aap-label"> Auto Advance Positions</span>
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
        <span class="avg-rem neon-green bold numbers">$<span id="avgRemain">5,555</span></span>
      </div>
      <div class="col-4 rem-salary-div">
        <span class="avg-rem-txt">Rem. Salary:&nbsp;</span>
        <span class="avg-rem neon-green bold numbers">$<span id="salRemain">50,000</span></span>
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
      <div id="qb-pid" class="hidden"></div>
      <div id="qb-player" class="dtdata dt-player"></div>
      <div id="qb-opp" class="dtdata dt-opp"></div>
      <div id="qb-fppg" class="dtdata dt-fppg"></div>
      <div id="qb-oprk" class="dtdata dt-oprk"></div>
      <div id="qb-salary" class="dtdata dt-salary"></div>
      <div style="display:inline-block;" class="dtdata dt-rmv"><i id="qb-close" class="fa fa-window-close hidden" aria-hidden="true" onclick="removePlayer('qb')"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">RB</div>
      <div id="rb1-pid" class="hidden"></div>
      <div id="rb1-player" class="dtdata dt-player"></div>
      <div id="rb1-opp" class="dtdata dt-opp"></div>
      <div id="rb1-fppg" class="dtdata dt-fppg"></div>
      <div id="rb1-oprk" class="dtdata dt-oprk"></div>
      <div id="rb1-salary" class="dtdata dt-salary"></div>
      <div style="display:inline-block;" class="dtdata dt-rmv"><i id="rb1-close" class="fa fa-window-close hidden" aria-hidden="true" onclick="removePlayer('rb1')"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">RB</div>
      <div id="rb2-pid" class="hidden"></div>
      <div id="rb2-player" class="dtdata dt-player"></div>
      <div id="rb2-opp" class="dtdata dt-opp"></div>
      <div id="rb2-fppg" class="dtdata dt-fppg"></div>
      <div id="rb2-oprk" class="dtdata dt-oprk"></div>
      <div id="rb2-salary" class="dtdata dt-salary"></div>
      <div style="display:inline-block;" class="dtdata dt-rmv"><i id="rb2-close" class="fa fa-window-close hidden" aria-hidden="true" onclick="removePlayer('rb2')"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">WR</div>
      <div id="wr1-pid" class="hidden"></div>
      <div id="wr1-player" class="dtdata dt-player"></div>
      <div id="wr1-opp" class="dtdata dt-opp"></div>
      <div id="wr1-fppg" class="dtdata dt-fppg"></div>
      <div id="wr1-oprk" class="dtdata dt-oprk"></div>
      <div id="wr1-salary" class="dtdata dt-salary"></div>
      <div style="display:inline-block;" class="dtdata dt-rmv"><i id="wr1-close" class="fa fa-window-close hidden" aria-hidden="true" onclick="removePlayer('wr1')"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">WR</div>
      <div id="wr2-pid" class="hidden"></div>
      <div id="wr2-player" class="dtdata dt-player"></div>
      <div id="wr2-opp" class="dtdata dt-opp"></div>
      <div id="wr2-fppg" class="dtdata dt-fppg"></div>
      <div id="wr2-oprk" class="dtdata dt-oprk"></div>
      <div id="wr2-salary" class="dtdata dt-salary"></div>
      <div style="display:inline-block;" class="dtdata dt-rmv"><i id="wr2-close" class="fa fa-window-close hidden" aria-hidden="true" onclick="removePlayer('wr2')"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">WR</div>
      <div id="wr3-pid" class="hidden"></div>
      <div id="wr3-player" class="dtdata dt-player"></div>
      <div id="wr3-opp" class="dtdata dt-opp"></div>
      <div id="wr3-fppg" class="dtdata dt-fppg"></div>
      <div id="wr3-oprk" class="dtdata dt-oprk"></div>
      <div id="wr3-salary" class="dtdata dt-salary"></div>
      <div style="display:inline-block;" class="dtdata dt-rmv"><i id="wr3-close" class="fa fa-window-close hidden" aria-hidden="true" onclick="removePlayer('wr3')"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">TE</div>
      <div id="te-pid" class="hidden"></div>
      <div id="te-player" class="dtdata dt-player"></div>
      <div id="te-opp" class="dtdata dt-opp"></div>
      <div id="te-fppg" class="dtdata dt-fppg"></div>
      <div id="te-oprk" class="dtdata dt-oprk"></div>
      <div id="te-salary" class="dtdata dt-salary"></div>
      <div style="display:inline-block;" class="dtdata dt-rmv"><i id="te-close" class="fa fa-window-close hidden" aria-hidden="true" onclick="removePlayer('te')"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">FLEX</div>
      <div id="flex-pid" class="hidden"></div>
      <div id="flex-player" class="dtdata dt-player"></div>
      <div id="flex-opp" class="dtdata dt-opp"></div>
      <div id="flex-fppg" class="dtdata dt-fppg"></div>
      <div id="flex-oprk" class="dtdata dt-oprk"></div>
      <div id="flex-salary" class="dtdata dt-salary"></div>
      <div style="display:inline-block;" class="dtdata dt-rmv"><i id="flex-close" class="fa fa-window-close hidden" aria-hidden="true" onclick="removePlayer('flex')"></i></div>
    </div>
    <div class="draftTableData">
      <div class="dtdata dt-pos">DST</div>
      <div id="dst-pid" class="hidden"></div>
      <div id="dst-player" class="dtdata dt-player"></div>
      <div id="dst-opp" class="dtdata dt-opp"></div>
      <div id="dst-fppg" class="dtdata dt-fppg"></div>
      <div id="dst-oprk" class="dtdata dt-oprk"></div>
      <div id="dst-salary" class="dtdata dt-salary"></div>
      <div style="display:inline-block;" class="dtdata dt-rmv"><i id="dst-close" class="fa fa-window-close hidden" aria-hidden="true" onclick="removePlayer('dst')"></i></div>
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
