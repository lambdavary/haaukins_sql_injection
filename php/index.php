<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
require_once ("config.php");
?>
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">HACK ME!</div>
            </div>

            <div style="padding-top:30px" class="panel-body">

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" method="POST" class="form-horizontal" role="form" action="login.php">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="passwd" placeholder="password">
                    </div>

                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">

                            <input id="btn-login" class="btn btn-success" type="submit"></input>
                            <?php
                            /*if (isset($_SESSION['flag'])) {
                                echo "<span>The information you have entered is incorrect!</span>";
                            }
                            if (isset($_SESSION['mal_code'])) {
                                echo "<span>Username cannot include these characters: ' - ; - * and whitespace !!!</span>";
                            }
                            if (isset($_SESSION['new_record'])) {
                                echo "<span>You signed successfully</span>";
                            }
                            if (isset($_SESSION['update_new_record'])) {
                                echo "<span>Information updated successfully</span>";
                            }*/
                            ?>


                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
</div>
