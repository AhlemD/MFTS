<?php
$dbhost='localhost';
$dbname='datasave';
$dbusername='root';
$dbpass='';
$mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

if(isset($_POST['Ajouter']))
{
  $codeabarre=$_POST['codeabarre'];
  $codepalette=$_POST['codepalette'];
  $emplacement=$_POST['emplacement'];
  $emplacementparzone=$_POST['emplacementparzone'];
  if ($emplacement=='Stock MP'){
    $result=mysqli_query($mysqli,"INSERT INTO stockmp VALUES(NULL, '$codeabarre', '$codepalette', '$emplacement', '$emplacementparzone', CURRENT_TIMESTAMP)");
  }elseif ($emplacement=='Stock PF'){
    $result=mysqli_query($mysqli,"INSERT INTO stockpf VALUES(NULL, '$codeabarre', '$codepalette', '$emplacement', '$emplacementparzone', CURRENT_TIMESTAMP)");
  } elseif($emplacement=='production'){
    $result=mysqli_query($mysqli,"INSERT INTO production VALUES(NULL, '$codeabarre', '$codepalette', '$emplacement', '$emplacementparzone', CURRENT_TIMESTAMP)");
  }
  
  
  if ($result)
  {
    echo '<div id="message">La matière a été ajoutée avec succès</div>';
    echo '<script>setTimeout(function() { document.getElementById("message").remove(); }, 3000);</script>';
  }
  else {
    echo '<div id="message">Failed</div>';
  }
}

mysqli_close($mysqli);
?>