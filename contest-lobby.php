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
	<div class="filter row">
		<div class="filter-1">
			<div>Contest Name</div>
				<input type="text"  placeholder="Search...">
		</div>
		<div class="filter-2 filter-style-btn">
			<div>Scoring</div>
			<div id="entryFee-dropdown-from" class="ps-dropdown small" data-filter-type="min" data-selected-entry-value="0">
					<a class="dropdown-filter" data-toggle="dropdown" aria-expanded="true">Style<span class="fa fa-caret-down"></span></a>
					<ul class="dropdown-menu filter-menu" role="menu" aria-labelledby="entry-fee-dropdown-from">
							<li><div class="style-filter-item first"><div class="all">ALL<input type="checkbox" checked="checked" /></div> </div></li>
							<li><div class="style-filter-item"><div class="dk">DK<input type="checkbox" /> </div> </div></li>
							<li><div class="style-filter-item"><div class="fd">FD<input type="checkbox" /></div> </div></li>
							<li><div class="style-filter-item"><div class="fdr">FDr<input type="checkbox" /></div> </div></li>
						</ul>
					</div>
		</div>

		<div class="filter-3" data-filters-dropdown="entryFee">
            <div>Entry Fee</div>
            <div id="entryFee-dropdown-from" class="ps-dropdown small" data-filter-type="min" data-selected-entry-value="0">
                <a class="dropdown-filter" data-toggle="dropdown" aria-expanded="true">Free<span class="fa fa-caret-down"></span></a>
                <ul class="dropdown-menu filter-menu" role="menu" aria-labelledby="entry-fee-dropdown-from">
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
                <ul class="dropdown-menu filter-menu" role="menu" aria-labelledby="entry-fee-dropdown-to">
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



	</div>
</div>
<div class="container">
	<div class="row">

	</div>
</div>

<?php require('includes/footer.php');?>
