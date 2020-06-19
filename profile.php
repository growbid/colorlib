<?php include ('header.php'); ?>
<?php// get_header(); ?>
<hr>
<div class="container bootstrap snippet">
  <div class="row">
    <div class="col-sm-3"><!--left col-->
      <div class="text-center">
        <img src="images/icons/profile.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <p>Right a short bio</p>
        <!-- <input type="file" class="text-center center-block file-upload"> -->
      </div>
    </hr>


    <ul class="list-group">
      <li class="list-group-item text-muted" style="text-align: center;">Activity <i class="fa fa-dashboard fa-1x"></i></li>
      <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
      <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
      <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
      <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
    </ul> 

    <div class="panel panel-default">
      <div class="panel-heading" style="text-align: center;">Social Media</div>
      <div class="panel-body" style="text-align: center;">
        <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
      </div>
    </div>
  </div><!--/col-3-->

  <div class="col-sm-9">
    <ul class="nav nav-tabs">
      <li class="col-6 col-lg-1">
        <a data-toggle="tab" href="#home">Basic</a>
      </li>

      <li class="col-6 col-lg-11">
        <a data-toggle="tab" href="#messages">More</a>
      </li>
    </ul>


    <div class="tab-content col-12">
      <div class="tab-pane active" id="home">
        <p style="float: right;">
          <i class="fa fa-1x">
            <a href="Dashboard/index.html"><button type="button" class="btn btn-success btn-sm" style="margin-top: 3px;"><b>+ shop</b></button></a>
          </i>
        </p>
        <h4 style="margin-top: 8px;"><b>Sk Turan</b></h4>
        <hr>
        <table class="table">
          <tr>
            <td><label for="first_name"><h6><b>First name:</b> Sk</h6></label></td>
            <td><label for="last_name"><h6><b>Last name:</b> Turan</h6></label></td>
          </tr>

          <tr>
            <td><label for="first_name"><h6><b>Phone:</b></h6></label></td>
            <td><label for="last_name"><h6><b>Mobile:</b> 0193360793</h6></label></td>
          </tr>

          <tr>
            <td><label for="first_name"><h6><b>Blood:</b> +O</h6></label></td>
            <td><label for="last_name"><h6><b>Status:</b> Single</h6></label></td>
          </tr>

          <tr>
            <td><label for="first_name"><h6><b>Studied at: </b>Lions schoola and Collage Khulna</h6></label></td>
            <td><label for="last_name"><h6><b>Works at:</b> I don't work.</h6></label></td>
          </tr>

          <tr>
            <td><label for="first_name"><h6><b>Birth day: </b>20/05/1996</h6></label></td>
            <td><label for="last_name"><h6><b>Email: </b>turan38272@gmail.com</h6></label></td>
          </tr>
        </table>

        <div class="form-group">
          <div class="col-xs-12">
            <br>
            <button class="btn btn-md btn-primary" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Follow</button>
          </div>
        </div>

        <hr>
      </div><!--/tab-pane-->

      <div class="tab-pane" id="messages">
        <p style="float: right;">
          <i class="fa fa-1x">
            <a href="Dashboard/index.html"><button type="button" class="btn btn-success" style="margin-top: 8px;">Dashboard</button></a>
          </i>
        </p>
        <h2>Education</h2>
        <hr>
        <h1>Blank page, please input data!</h1>
      </div><!--/tab-pane-->

      <div class="tab-pane" id="settings">
        <h2>Settings</h2>
        <hr>
        <h1>Blank page, please input data!</h1>
      </div>

    </div><!--/tab-pane-->
  </div><!--/tab-content-->

</div><!--/col-9-->
</div><!--/row-->
<?php include ('footer.php'); ?>
<?php// get_footer(); ?>