<?php  $page_title = "Mining Guide"; include ('header.php'); ?>

	<div class="row text-center">
		<img class="svg-quickstart" src="assets/img/misc/quick-start.svg" />
	</div>

	<div class="row row-nomargin">
		<div class="col-md-12 text-center">
			<h2><?php echo $Locale->getText("mineguide.title"); ?></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<ol>
				<li>
					<b><?php echo $Locale->getText("mineguide.step1"); ?></b>
					<br>
					<?php echo $Locale->getText("mineguide.step1_desc"); ?>
				</li>
				<li>
					<b><?php echo $Locale->getText("mineguide.step2"); ?></b>
					<div class="row">
						<div class="col-md-6">
							<h4 class="nomargin"><?php echo $Locale->getText("mineguide.step2_poollist"); ?></h4>
							<ul>
							    <li>
							    	<a href="https://peercoin.ecoining.com/">Ecoining</a> -  1% fee, Dynamic PPLNS Payment System
							    </li>
							    <li>
							    	<a href="https://ppcoin.d7.lt/">D7</a> -  1.5% fee, PPLNS: payout per share of the last N rounds
							    </li>
							    <li>
							    	<a href="http://ppc.fixx.ru/">Fixx</a> -  Donation only, PPLNS: payout per share of the last N rounds
							    </li>
						    </ul>
						</div>
						<div class="col-md-6">
							<h4 class="nomargin"><?php echo $Locale->getText("mineguide.step2_multipoollist"); ?></h4>
							<ul>
      							<li>
        							<a href="https://www.coinotron.com/coinotron/">Coinotron</a> - Pay Per Share: 12% fee, Round-Based Pay Per Share: 2%
      							</li>
      							<li>
        							<a href="http://www.multipool.us/">Multipool.us</a> - 1.5% fee, Pay Per Share
      							</li>
    						</ul>
						</div>
					</div>
				</li>
				<li>
					<b><?php echo $Locale->getText("mineguide.step3"); ?></b><br>
					<?php echo $Locale->getText("mineguide.step3_desc"); ?>
				</li>
			</ol>
		</div>
	</div>
</div>
<?php include ('footer.php'); ?>
