<?php
$this->title = 'Run 4 Good';
use yii\helpers\Html;
?>
<div class="jumbotron">
  <div class="container text-center">
    <?= Html::img('@web/img/bengio.jpg', array('class' => 'img-circle', 'width' => '100', 'height' => '100')); ?>
    <h3>Yoshua Bengio</h3>
    <p><a class="btn btn-warning btn-lg" href="#" role="button">Support me</a></p>
  </div>
</div>
<div class="container">
<div class="row">
  <div class="col-lg-4">
    <h2>Do Better</h2>
    <hr>
    <form>
      <div class="form-group">
        <label for="date">by</label>
        <div class="input-group">
          <input name="date" type="text" class="form-control" id="date" placeholder="YYYY-MM-DD">
          <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div>
        </div>
        
      </div>
      <div class="form-group">
        <label for="run">run</label>
        <div class="input-group">
          <input name="run" type="text" class="form-control" id="run" placeholder="">
          <div class="input-group-addon">miles</div>
        </div>
      </div>
      <div class="form-group">
        <label for="time">in</label>
        <div class="input-group">
          <input name="time" type="text" class="form-control" id="time" placeholder="">
          <div class="input-group-addon">minutes</div>
        </div>
      </div>
      <div class="form-group">
        <label for="prize">prize</label>
        <div class="input-group">
          <input name="prize" type="text" class="form-control" id="prize" placeholder="">
          <div class="input-group-addon"><span class="glyphicon glyphicon-gbp" aria-hidden="true"></div>
        </div>
      </div>
      <input class="btn btn-success" type="submit" value="£ Donate">
    </form>
  </div>

  <div class="col-lg-4">
    <h2>Buy a Mile</h2>
    <hr>
    <form>
      <div class="form-group">
        <label for="buy_mile">buy</label>
        <div class="input-group">
          <input name="buy_mile" type="text" class="form-control" id="buy_mile" placeholder="">
          <div class="input-group-addon">miles</div>
        </div>
      </div>
      <div class="form-group">
        <label for="buy_price">for</label>
        <div class="input-group">
          <input name="buy_price" style="border: 0; box-shadow: none" type="text" readonly class="form-control" id="buy_price" placeholder="" value="">
          <div class="input-group-addon"><span class="glyphicon glyphicon-gbp" aria-hidden="true"></div>
        </div>
      </div>
      <p>* 1 mile = £50</p>
      <input class="btn btn-success" type="submit" value="£ Donate">
    </form>
  </div>

  <div class="col-lg-4">
    <h2>Donate</h2>
    <hr>
    <form>
      <div class="form-group">
        <label for="donate">give</label>
        <div class="input-group">
          <input name="donate" type="text" class="form-control" id="donate" placeholder="" value="">
          <div class="input-group-addon"><span class="glyphicon glyphicon-gbp" aria-hidden="true"></div>
        </div>
      </div>
      <div class="form-group">
        <label for="message">Leave a message</label>
        <textarea name="message" class="form-control" rows="3"></textarea>
      </div>
      <input class="btn btn-success" type="submit" value="$ Donate">
    </form>
  </div>
</div><!--/row-->
</div>