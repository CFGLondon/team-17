<?php
use yii\helpers\Html;
$this->title = "You Bought Miles";

$date = $motivated['by'];
$distance = $motivated['run'];
$time = $motivated['in'];
$donationVal = $motivated['prize'];
?>

<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class='col-md-5'>
				<h3>
					<?="You promise that if $distance miles are ran by $date, in less than $time minutes, you will donate $$donationVal.00."?>
				</h3>
			</div>
		</div>
	</div>
</div>