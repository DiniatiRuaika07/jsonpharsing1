<!DOCTYPE html>
<html lang="en">
<head>
</head>
	<body>
<?php 
	$url_json = file_get_contents("http://api.kalau.web.id/api/absen?nip=14650015&tgs=2016-01-01&tge=2016-10-30");
	$json_object = json_decode($url_json);

    ?>
<br>
<div class="container">
<div class="kotak">
<h3>Data Absensi Mobile</h3>
<br>          
  <table border = "1">
     <thead>
         <th >id</th>
         <th >nip</th>
         <th >latitude</th>
         <th >longitude</th>
         <th rowspan="2">Presensi ke</th>
         <th >Photo</th>
         <th >Macaddress</th>
         <th rowspan="2">Created at</th>

     </thead>
     <tbody>
         <tr>
            <td><?php echo $json_object->presensi->data_absensi_mobile[0]->id?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[0]->nip?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[0]->latitude?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[0]->longitude?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[0]->presensi_ke?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[0]->photo?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[0]->macaddress?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[0]->created_at?></td>
            </tr>
            <tr>
                <td><?php echo $json_object->presensi->data_absensi_mobile[1]->id?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[1]->nip?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[1]->latitude?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[1]->longitude?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[1]->presensi_ke?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[1]->photo?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[1]->macaddress?></td>
            <td><?php echo$json_object->presensi->data_absensi_mobile[1]->created_at?></td>
            </tr>
     </tbody>
   
 </table>
  </div>
  </div>
  <br>
<div class="container">
<div class="kotak">
  <h3> Data Absensi Finger  </h3>
  <br>
<table border="1">
<center>
     <thead>
         <th>Finger id</th>
         <th>Nip</th>
         <th>Tag Date</th>
         <th>Finger Ip</th>

     </thead>
     <tbody>
         <tr>
            <td><?php echo $json_object->presensi->data_absensi_finger[0]->finger_id?></td>
            <td><?php echo$json_object->presensi->data_absensi_finger[0]->nip?></td>
            <td><?php echo$json_object->presensi->data_absensi_finger[0]->tag_date?></td>
            <td><?php echo$json_object->presensi->data_absensi_finger[0]->finger_ip?></td>
            </tr>
     </tbody>
     </center>
 </table>
  </div>
  </div>
</body>
</html>
