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
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row['codepalette'] ?></td>
                <td><?php echo $row['codeabarre'] ?></td>
            </tr>
        <?php } ?>
    </table>
<?php
}
mysqli_close($conn);
?>