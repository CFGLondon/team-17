<?php
$this->title = 'Run 4 Good';
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="jumbotron">
  <div class="container text-center">
    <h1>NO CHILD BORN TO DIE</h1>
    <p>
      Join us at a range of running and walking events across the country from marathons to
      5,000 metres where you can increase your fitness, meet a personal challenge, or just have
      lots of fun while raising money for children in need across the world and here at home.
    </p>
  </div>
</div>
<div class="container">
  <div class="row">
    <?php for ($i = 0; $i < 6; $i++) { ?>
    <div class="col-lg-4" style="margin-bottom: 20px">
      <small>6 Dec 2015</small>
      <h2>Do It for Charity<br>Text Santa Run</h2>
      <p>Victoria Park, London</p>
      <p>
        Distance: 5km and 10km routes available<br>
        Registration fee: £22, Santa Suits provided!<br>
        Minimum fundraising target: £100
      </p>
      <hr>
      <div class="text-center">
        <?php for ($j = 0; $j < 4; $j++) { ?>
        <div class="col-sm-3">
          <a href="<?= Url::to(['/site/profile']) ?>"><?= Html::img('@web/img/bengio.jpg', array('class' => 'img-circle', 'width' => '60', 'height' => '60')); ?></a>
          <p>Bengio</p>
          <?= Html::img('@web/img/zoubin.jpg', array('class' => 'img-circle', 'width' => '60', 'height' => '60')); ?>
          <p>Zoubin</p>
        </div>
        <?php } ?>
        <a href="<?= Url::to(['/event']) ?>" class="btn btn-lg btn-primary">Join Us</a>
      </div>
    </div>
    <?php } ?>
  </div><!--/row-->
</div>