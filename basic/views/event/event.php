<?php
$this->title = 'Run 4 Good';
use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\MapAsset;
use app\assets\MapGlobals;
use app\assets\ChartAsset;
MapAsset::register($this);
MapGlobals::register($this);
ChartAsset::register($this);
?>
<div class="jumbotron" style="background: url('img/banner-event.png'); background-size: cover; height: 600px">
  <div class="container text-center">
    <h1 style="color: white">Do It for Charity Text Santa Run</h1>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Join</a></p>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h2>Event details</h2>
      <p>
        Date: 6 Dec 2015<br>
        Location: Victoria Park, London<br>
        Pot: £20<br>
        Detail: Join us and run for the children!
      </p>
    </div>
    <div class="col-lg-6 text-center">
      <h2>Participants</h2>
      <?php for ($j = 0; $j < 4; $j++) { ?>
        <div class="col-sm-3">
          <a href="<?= Url::to(['/site/profile']) ?>"><?= Html::img('@web/img/bengio.jpg', array('class' => 'img-circle', 'width' => '60', 'height' => '60')); ?></a>
          <p>Bengio</p>
          <?= Html::img('@web/img/zoubin.jpg', array('class' => 'img-circle', 'width' => '60', 'height' => '60')); ?>
          <p>Zoubin</p>
        </div>
        <?php } ?>
        <a href="#" class="btn btn-lg btn-primary">Invite others</a>
    </div>
  </div><!--/row-->
  <div class="row">
    <div class="col-lg-12">
      <!-- The map -->
      <div id="map-here" onload='init();' class="col-lg-12" style="height: 400px; margin-top: 20px"></div>
    </div>
    <div class="col-lg-4">
      <!-- Leaderboard -->
    </div>
  </div>
</div>
