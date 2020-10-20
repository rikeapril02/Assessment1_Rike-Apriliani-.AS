<?php
  $laptop=array(array('merek'=> 'Apple',
       'ram' => '8',
       'harddisk' => '512',
       'usb_type_c' => TRUE,
       'harga' => '2000000'),
    array('merek' => 'Asus',
        'ram' => '16',
        'harddisk' => '512',
        'usb_type_c' => 'FALSE',
        'harga' => '1800000'),
    array('merek' => 'Lenovo',
              'ram' => '8',
              'harddisk'   => '256',
              'usb_type_c' => TRUE,
              'harga' => '8000000' ),
);
     
    echo "<table border='1' cellpadding='2'>";
    echo "<thead>
          <th colspan='4'><b>DATA LAPTOP</b></th>
          </thead>
          <thead>
          <th><b>Nama</b></th>
          <th><b>RAM</b></th>
          <th><b>Harddisk</b></th>
          <th><b>Usb Type C</b></th>
          <th><b>Harga (Rp)</b></th>
          </thead>";
    
    for($x=0;$x<count($laptop);$x++){
        echo "<tr>";
        echo "<td>".$laptop[$x]['merek']."</td>";
        echo "<td>".$laptop[$x]['ram']."</td>";  
        echo "<td>".$laptop[$x]['harddisk']."</td>";  
        echo "<td>".$laptop[$x]['usb_type_c']."</td>"; 
        echo "<td>".$laptop[$x]['harga']."</td>";
           
        echo "</tr>";
    }
    
  
$merek ="";
$ketemu  = FALSE;
for($i=0;$i<count($laptop);$i++) {
    if($laptop[$i]["merek"] == $merek){
        $ketemu = TRUE;
        break;
    }
}

if($ketemu == TRUE){
    echo "Data $merek berhasil ditemukan";
}
else{
    echo "Data $merek tidak dapat ditemukan";
}


?>
