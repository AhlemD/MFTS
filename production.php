<!DOCTYPE html>

<head>
    <title>FMTS</title>
    <link rel="stylesheet" href="../production/production.css">
</head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
  <div class="imgcontainer">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <p></p>
  </div>
  <div class="container">

<?php
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'gestion');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $query = "SELECT * FROM inser";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo 'erreur' . mysqli_error($conn);
        } else {
    ?>
    
        <table id="mm">
            <tr>
                <th>Palette</th>
                <th>matiére</th>
                
            </tr>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['codepalette'] ?></td>
                    <td><?php echo $row['codeabarre'] ?></td>
                    
                </tr>
            <?php } ?>
        </table>
    </div>
    <?php
        }
        mysqli_close($conn);
    ?>

</div>
  </form>
  </div>

  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>