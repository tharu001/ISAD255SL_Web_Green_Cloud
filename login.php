<?php require 'includes/header.php'; ?>
<?php require 'functions/connection.php'; ?>
<link href="Bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/index.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="Bootstrap/dist/js/jquery.min.js"></script>
<script type="text/javascript" src="Bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="css/login.css" rel="stylesheet">
<html>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="account-wall">
                    <div id="my-tab-content" class="tab-content">

                        <div class="tab-pane active" id="login">

                            <img class="profile-img"
                                 src=""
                                 alt="">

                            <form class="form-signin" action="checkuser.php" method="post">
                                <input name="UID" type="text" class="form-control" placeholder="Username" required
                                       autofocus>
                                <input name="pass" type="password" class="form-control" required>
                                <input type="submit" class="btn btn-lg btn-default btn-block" value="Sign In"/>
                            </form>
                            <div id="tabs" data-tabs="tabs">
                                <p class="text-center"><a href="register.php">Need an Account?</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>