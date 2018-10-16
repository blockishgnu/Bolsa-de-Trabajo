<?php
include("../connect.php");
$username=$_POST['username'];

$result=mysqli_query($con,"SELECT * FROM sab_cv WHERE username='".$username."'");
while($row=mysqli_fetch_array($result)){


echo "
<tr>
";
if($row['formato']=='PDF'){
  echo "<th><i class='fa fa-file-pdf-o' aria-hidden='true'></i> PDF
  <br>
  <br>
  </th>";
}else{
    echo "<th><i class='fa fa-file-word-o' aria-hidden='true'></i> WORD
    <br>
    <br>
    </th>";
}

echo "
<th>
<a href='descargar.php?idcv=".$row['idcv']."' class='descargar'>DESCARGAR</a>
<br>
<br>
</th>
</tr>

";

}

 ?>
