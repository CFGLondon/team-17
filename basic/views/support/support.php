<?php
$this->title = 'Run 4 Good';
?>
<div class="jumbotron">
  <div class="container">
    <h1>Hello, world!</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
  </div>
</div>
<div class="container">
<div class="row">
  <div class="col-lg-4">
    <h2>Do Better</h2>
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
          <div class="input-group-addon">$</div>
        </div>
      </div>
      <input class="btn btn-success" type="submit" value="$ Donate">
    </form>
  </div>

  <div class="col-lg-4">
    <h2>Buy a Mile</h2>
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
          <div class="input-group-addon">$</div>
        </div>
      </div>
      <p>* 1 mile = $50</p>
      <input class="btn btn-success" type="submit" value="$ Donate">
    </form>
  </div>

  <div class="col-lg-4">
    <h2>Donate</h2>
    <form>
      <div class="form-group">
        <label for="donate">give</label>
        <div class="input-group">
          <input name="donate" type="text" class="form-control" id="donate" placeholder="" value="">
          <div class="input-group-addon">$</div>
        </div>
      </div>
      <input class="btn btn-success" type="submit" value="$ Donate">
    </form>
  </div>
</div><!--/row-->
</div>