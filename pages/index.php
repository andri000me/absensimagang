<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ACCESS NET. LAB.</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Sukses -->
  <?php 
    if (!empty($_GET['message']) && $_GET['message'] == 'success') {
       echo '<div class="alert alert-success" role="alert">';
       echo '<center><h2>Berhasil Input!';
       echo '</h2></center></div>';
    }
  ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">ACCESS NETWORK LABORATORY</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="http://fb.me/accessnetlab" target="_blank"><center><i class="fa fa-facebook fa-3x"></i></center></a>
                        </li>
                        <li>
                            <a href="http://twitter.com/accessnetlab" target="_blank"><center><i class="fa fa-twitter fa-3x"></i></center></a>
                        </li>
                        <li>
                            <a href="http://instagram.com/accessnetlab" target="_blank"><center><i class="fa fa-instagram fa-3x"></i></center></a>
                        </li>
                        <li>
                            <a href="mailto:accessnetlab@gmail.com" target="_blank"><center><i class="fa fa-inbox fa-3x"></i></center></a>
                        </li>
                        <li>
                            <a href="http://access.lab.telkomuniversity.ac.id" target="_blank"><center><i class="fa fa-globe fa-3x"></i></center></a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Absensi Magang <small><?php date_default_timezone_set('Asia/Jakarta'); echo date("d-m-Y"); ?></small></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<br>
<form class="form-inline" role="form" action="put.php" method="post">
    <div class="form-group">
      <label for="nim">NIM : </label>
      <input required type="number" class="form-control" id="nim" name="nim" placeholder="NIM Kamu">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

<br><br><br>
<div class="col-md-6">
<div class="fb-page" data-href="https://www.facebook.com/accessnetlab/" data-tabs="timeline" data-width="800" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/accessnetlab/"><a href="https://www.facebook.com/accessnetlab/">Access Network Laboratory</a></blockquote></div></div>
</div>

<div class="col-md-6">
<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/AccessNetLab" data-widget-id="714492594927960065">Tweets by @AccessNetLab</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
