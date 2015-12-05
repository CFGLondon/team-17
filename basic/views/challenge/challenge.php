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
  <h1>Challenge</h1>
  <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <label for="forename">Forename</label>
        <input name="forename" type="text" class="form-control" id="forename" placeholder="Forename">
      </div>
      <div class="form-group">
        <label for="surname">Surname</label>
        <input name="surname" type="text" class="form-control" id="surname" placeholder="Surname">
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <div class="input-group input-append date" id="datePicker">
          <input type="text" class="form-control" name="date" />
          <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        <label for="pot">Pot</label>
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input name="pot" type="text" class="form-control" id="pot" placeholder="Amount">
          <div class="input-group-addon">.00</div>
        </div>
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input name="phone" type="phone" class="form-control" id="phone" placeholder="e.g. 07770000777">
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="e.g. john.doe@example.com">
      </div>
    </div>
    </div>
  </div><!--/row-->
</div>