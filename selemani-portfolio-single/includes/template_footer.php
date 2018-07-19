<p class="copyright">&copy;&nbsp;<?php
	//ini_set('date.timezone', 'Europe/London');
	$startYear = 2016;
	$thisYear = date('Y');
	if ($startYear == $thisYear){
		echo $startYear;
	}
	else {
		echo "{$thisYear}";
		//if example you want to display startyear and present year: use echo "{$starYear-$thisYear}";
	}
	echo "&nbsp;";?> <a href="#contacts" style="color:#eee;">Selemani Lusukama</a> - All Rights Reserved
</p>
	<a href="#home" class="go-top" title="Jump to the top">
		<span class="glyphicon glyphicon-chevron-up"></span>
	</a>