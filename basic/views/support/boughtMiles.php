<?php
use yii\helpers\Html;
$this->title = "You Bought Miles";

$numMiles = $boughtMiles['buy'];
$donationVal = $boughtMiles['for'];
?>

<div class="jumbotron">
	<div class="container">
		<div class="row">
			<h3>
				<?="You sponsored $numMiles miles."?>
				<?=Html::beginTag('br')?>
				<?="You promise to donate $$donationVal.00"?>
			</h3>
		</div>
	</div>
</div>