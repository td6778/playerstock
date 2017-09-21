<?php require('includes/header.php');?>
<?php require('includes/navigation.php');?>
<?php require('includes/error-reporting.php');?>

<div class="container">
	<div class="row">
		<div class="card card-1" style="width: 20rem;">
			<div class="card-footer-text"><a href="#">Learn More</a></div>
		</div><!-- end card -->
		<div class="card card-2 card-text" style="width: 20rem;">
			<div class="card-block card-text-header">
				<span class="neon-green">Daily Fantasy </span><span class="white">Football</span>
				<div class="card-text-content">
					<span class="white">Beta Testing Tournaments</span>
				</div>
			</div>
			<div class="footer white card-footer-text">Late <span class="neon-green">2017</span></div>
		</div><!-- end card -->
		<div class="card card-3" style="width: 20rem;">
			<div class="card-footer-text white">Daily Fantasy <span class="neon-orange">Basketball</span>
				<div class="white card-smaller-text">Coming Soon</div>
			</div>
		</div><!-- end card -->
	</div><!-- end row -->
</div><!-- end container -->
<div class="container">
	<div class="row">
		<div class="col-3 create-menu">
				<a href="#"><i class="fa fa-trophy brand-color2" aria-hidden="true">&nbsp;</i> Create a Contest</a>
		</div>
		<div class="col-3 create-menu">
				<a href="#"><i class="fa fa-file-text brand-color2" aria-hidden="true">&nbsp;</i> Create a Lineup</a>
		</div>
		<div class="col-3 create-menu">
				<a href="#"><i class="fa fa-info-circle brand-color2" aria-hidden="true">&nbsp;</i> Rules &amp; How-To</a>
		</div>
		<div class="col-3 create-menu end">
				<a href="#"><i class="fa fa-user-plus brand-color2" aria-hidden="true">&nbsp;</i> Refer a Friend</a>
		</div>
	</div>
</div>
<div class="container">
	<div class="filter row">
		<div class="filter-1">
			<div class="filter-label">Contest Name</div>
				<input type="text"  placeholder="Search...">
		</div>
		<div class="filter-2 filter-style-btn">
			<div  class="filter-label">Contest Type</div>
			<div id="contestType-dropdown" class="ps-dropdown small" data-filter-type="contest" data-selected-entry-value="All">
					<a class="dropdown-type" data-toggle="dropdown" aria-expanded="true">All<span class="fa fa-caret-down"></span></a>
					<ul class="dropdown-menu type-menu" role="menu" aria-labelledby="contest-type-dropdown-from">
						<li><a href="#" data-entry-value="all" data-entry-type="entryMin">All</a></li>
						<li><a href="#" data-entry-value="featured" data-entry-type="entryMin">Featured</a></li>
						<li><a href="#" data-entry-value="tournaments" data-entry-type="entryMin">Tournaments</a></li>
						<li><a href="#" data-entry-value="head2head" data-entry-type="entryMin">Head to Head</a></li>
						<li><a href="#" data-entry-value="5050" data-entry-type="entryMin">50/50 &amp; Double Ups</a></li>
						<li><a href="#" data-entry-value="multiply" data-entry-type="entryMin">Multipliers</a></li>
						<li><a href="#" data-entry-value="satellite" data-entry-type="entryMin">Satellites &amp; Qualifiers</a></li>
						</ul>
					</div>
		</div>
		<div class="filter-3 filter-style-btn">
			<div class="filter-label">Scoring</div>
			<div id="scoring-dropdown" class="ps-dropdown small" data-filter-type="style" data-selected-entry-value="All">
					<a class="dropdown-filter" data-toggle="dropdown" aria-expanded="true">Style<span class="fa fa-caret-down"></span></a>
					<ul class="dropdown-menu style-menu" role="menu" aria-labelledby="entry-fee-dropdown-from">
							<li><div class="style-filter-item first"><div class="all">ALL<input type="checkbox" checked="checked" /></div> </div></li>
							<li><div class="style-filter-item"><div class="dk">DK<input type="checkbox" /> </div> </div></li>
							<li><div class="style-filter-item"><div class="fd">FD<input type="checkbox" /></div> </div></li>
							<li><div class="style-filter-item"><div class="fdr">FDr<input type="checkbox" /></div> </div></li>
						</ul>
					</div>
		</div>

		<div class="filter-4" data-filters-dropdown="entryFee">
            <div class="filter-label">Entry Fee</div>
            <div id="entryFee-dropdown-from" class="ps-dropdown small" data-filter-type="min" data-selected-entry-value="0">
                <a class="dropdown-filter" data-toggle="dropdown" aria-expanded="true">Free<span class="fa fa-caret-down"></span></a>
                <ul class="dropdown-menu entry-menu" role="menu" aria-labelledby="entry-fee-dropdown-from">
                    <li><a href="#" data-entry-value="0" data-entry-type="entryMin">Free</a></li>
                    <li><a href="#" data-entry-value="0.25" data-entry-type="entryMin">$.25</a></li>
                    <li><a href="#" data-entry-value="1" data-entry-type="entryMin">$1</a></li>
                    <li><a href="#" data-entry-value="2" data-entry-type="entryMin">$2</a></li>
                    <li><a href="#" data-entry-value="3" data-entry-type="entryMin">$3</a></li>
                    <li><a href="#" data-entry-value="5" data-entry-type="entryMin">$5</a></li>
                    <li><a href="#" data-entry-value="10" data-entry-type="entryMin">$10</a></li>
                    <li><a href="#" data-entry-value="30" data-entry-type="entryMin">$30</a></li>
                    <li><a href="#" data-entry-value="50" data-entry-type="entryMin">$50</a></li>
                    <li><a href="#" data-entry-value="100" data-entry-type="entryMin">$100</a></li>
                    <li><a href="#" data-entry-value="200" data-entry-type="entryMin">$200</a></li>
                    <li><a href="#" data-entry-value="500" data-entry-type="entryMin">$500</a></li>
                    <li><a href="#" data-entry-value="1000" data-entry-type="entryMin">$1,000+</a></li>
                </ul>
            </div>
            <span class="between-dropdowns">to</span>
            <div id="entryFee-dropdown-to" class="ps-dropdown small" data-filter-type="max" data-selected-entry-value="null">
                <a class="dropdown-filter" data-toggle="dropdown" aria-expanded="true">$1,000+<span class="fa fa-caret-down"></span></a>
                <ul class="dropdown-menu entry-menu" role="menu" aria-labelledby="entry-fee-dropdown-to">
                    <li><a href="#" data-entry-value="0" data-entry-type="entryMax">Free</a></li>
                    <li><a href="#" data-entry-value="0.25" data-entry-type="entryMax">$.25</a></li>
                    <li><a href="#" data-entry-value="1" data-entry-type="entryMax">$1</a></li>
                    <li><a href="#" data-entry-value="2" data-entry-type="entryMax">$2</a></li>
                    <li><a href="#" data-entry-value="3" data-entry-type="entryMax">$3</a></li>
                    <li><a href="#" data-entry-value="5" data-entry-type="entryMax">$5</a></li>
                    <li><a href="#" data-entry-value="10" data-entry-type="entryMax">$10</a></li>
                    <li><a href="#" data-entry-value="30" data-entry-type="entryMax">$30</a></li>
                    <li><a href="#" data-entry-value="50" data-entry-type="entryMax">$50</a></li>
                    <li><a href="#" data-entry-value="100" data-entry-type="entryMax">$100</a></li>
                    <li><a href="#" data-entry-value="200" data-entry-type="entryMax">$200</a></li>
                    <li><a href="#" data-entry-value="500" data-entry-type="entryMax">$500</a></li>
                    <li><a href="#" data-entry-value="1000" data-entry-type="entryMax">$1,000+</a></li>
                </ul>
            </div>
        </div>

		<div class="filter-5" data-filters-dropdown="fieldSize">
            <div class="filter-label">Field Size</div>
            <div id="fieldSize-dropdown-from" class="ps-dropdown small" data-filter-type="min" data-selected-entry-value="0">
                <a class="dropdown-field" data-toggle="dropdown" aria-expanded="true">3<span class="fa fa-caret-down"></span></a>
                <ul class="dropdown-menu field-menu" role="menu" aria-labelledby="field-size-dropdown-from">
                    <li><a href="#" data-entry-value="3" data-entry-type="entryMin">3</a></li>
                    <li><a href="#" data-entry-value="5" data-entry-type="entryMin">5</a></li>
                    <li><a href="#" data-entry-value="10" data-entry-type="entryMin">10</a></li>
                    <li><a href="#" data-entry-value="20" data-entry-type="entryMin">20</a></li>
                    <li><a href="#" data-entry-value="50" data-entry-type="entryMin">50</a></li>
                    <li><a href="#" data-entry-value="100" data-entry-type="entryMin">100</a></li>
                    <li><a href="#" data-entry-value="1000" data-entry-type="entryMin">1000+</a></li>
                </ul>
            </div>
            <span class="between-dropdowns">to</span>
            <div id="fieldSize-dropdown-to" class="ps-dropdown small" data-filter-type="max" data-selected-entry-value="null">
                <a class="dropdown-field" data-toggle="dropdown" aria-expanded="true">1,000+<span class="fa fa-caret-down"></span></a>
                <ul class="dropdown-menu field-menu" role="menu" aria-labelledby="field-size-dropdown-to">
                    <li><a href="#" data-entry-value="1000" data-entry-type="entryMax">1000+</a></li>
                    <li><a href="#" data-entry-value="100" data-entry-type="entryMax">100</a></li>
                    <li><a href="#" data-entry-value="50" data-entry-type="entryMax">50</a></li>
                    <li><a href="#" data-entry-value="20" data-entry-type="entryMax">20</a></li>
                    <li><a href="#" data-entry-value="10" data-entry-type="entryMax">10</a></li>
                    <li><a href="#" data-entry-value="5" data-entry-type="entryMax">5</a></li>
                    <li><a href="#" data-entry-value="3" data-entry-type="entryMax">3</a></li>
                </ul>
            </div>
        </div>

		<div class="filter-6">
			<div class="filter-label">Experience Level</div>
		<div>
			<label class="checkbox-inline">
		      <input type="checkbox" value="" checked="checked">Beginner
		    </label>
		    <label class="checkbox-inline checkbox-last">
		      <input type="checkbox" value="" checked="checked">Advanced
		    </label>
		</div>
		</div>


	</div>
</div>
<div class="container lobby-table-header">
	<div class="row ">
			<div class="contest-name-header col-4">
				Contest Name
			</div>
			<div class="contest-style-header col-1">
				Style
			</div>
			<div class="contest-entry-header col-1">
				Entry Fee
			</div>
			<div class="contest-field-header col-2">
				Entries
			</div>
			<div class="contest-prize-header col-1">
				<span>Prizes</span>
			</div>
			<div class="contest-style-header col-2">
				Live
			</div>
			<div class="contest-entry-header col-1">
				&nbsp;
			</div>
		</div>
</div>
<div class="container lobby-table">
	<div class="row table-row">
	        <div class="contest-name col-4">
	            <div class="table-icon">
	                <i class="ion-ios-americanfootball">&nbsp;</i>
	            </div>
	            <a href="#">NFL Legends Alpha Testing Tournament 1-10112017-PS-0x0cbd23defshdffw2100120130</a>
	        </div>
	        <div class="contest-style col-1">
	            <div class="dk"><a href="#">DK</a></div>
	        </div>
	        <div class="contest-entry col-1">
	            $3
	        </div>
	        <div class="contest-field col-2">
	            <div class="field-of">55555</div>
	            /
	            <div class="field-to">Unlimited</div>
	        </div>
	        <div class="contest-prize col-1">
	            <a href="#">$2700</a>
	        </div>
	        <div class="contest-live col-2">
	            <a href="#">Thu. 10/11 7:30p</a>
	        </div>
	        <div class="contest-entry col-1">
				<div class="contest-enter">
					<i class="fa fa-file-text" aria-hidden="true"></i>
	            	<a class="btn-enter" href="#">ENTER</a>
				</div>
	        </div>
	    </div>

		<?php require('includes/sample-data.php');?>
</div>

<?php require('includes/footer.php');?>
