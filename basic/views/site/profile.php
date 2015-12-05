<?php
$this->title = 'Run 4 Good | My Profile';
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="jumbotron">
  <div class="container">
    <div class="col-lg-6">
      <div class="col-lg-4">
        <?= Html::img('@web/img/bengio.jpg', array('class' => 'img-circle', 'width' => '150', 'height' => '150')); ?>
      </div>
      <div class="col-lg-8">
        <p>HERO</p>
        <h2>Yoshua Bengio</h2>
        <p>
          6 Dec 2015<br>
          Do It for Charity Text Santa Run
        </p>
      </div>
    </div>
    <div class="col-lg-6">
      <p><a class="btn btn-success btn-lg" href="#" role="button">Challenge me</a></p>
      <p><a class="btn btn-warning btn-lg" href="<?= Url::to(['/support']) ?>" role="button">Support me</a></p>
    </div>
  </div>
</div>
<div class="container">
<div class="row">
  <canvas id="time-container" class="col-lg-12" height="100"></canvas>
  <ul class="nav nav-pills nav-justified">
    <li role="presentation" class="active"><a href="#">TIME</a></li>
    <li role="presentation"><a href="#">DISTANCE</a></li>
    <li role="presentation"><a href="#">CALORIES</a></li>
  </ul>
</div><!--/row-->
</div>