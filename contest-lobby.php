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
			<div class="input-group">
				<input type="text"  placeholder="Search Contests...">
			</div>
		</div>
		<div class="filter-2 filter-style-btn">
			<div class="input-group-btn ">
				<button type="button" class="btn btn-secondary dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Style
				</button>
				<div class="dropdown-menu filter-style-dropdown">
					<div class="dropdown-item"><span class="all">ALL</span> <input type="checkbox" checked="checked"/></div>
					<div class="dropdown-item"><span class="dk">DK</span> <input type="checkbox" /></div>
					<div class="dropdown-item"><span class="fd">FD</span> <input type="checkbox" /></div>
					<div class="dropdown-item"><span class="fdr">FDr</span> <input type="checkbox" /></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">

	</div>
</div>

<?php require('includes/footer.php');?>
