<title>Rekap Absensi Magang</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<div class="container">
<h1 class="page-header">Absensi Magang (Rekap) <small><?php date_default_timezone_set('Asia/Jakarta'); echo date("d-m-Y"); ?></small></h1>

<?php
include('connection.php');
?>

<div class="col-md-8"><a class="btn btn-default" onClick="window.print();return false">Print <span class="glyphicon glyphicon-print"></span>
</a><br><br>
<table class="table table-striped" border="2">
    <thead>
      <tr>
        <th><center>Nama</center></th>
        
        <th><center>Waktu</center></th>
      </tr>
    </thead>
    <tbody>
      <?php
    $query = mysql_query("select * from absen order by timestamp");
 
    
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
            
            <td><center><?php echo $data['nim']; ?></center></td>
            <td><center><?php echo $data['timestamp']; ?></center></td>
        </tr>
    <?php
    
    }
    ?>
    </tbody>
  </table>
  </div>
  </div>