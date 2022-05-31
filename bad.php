<link rel="stylesheet" href="list.css">
<?php
echo '就有人想把你刪掉</br>';
require_once 'connect.php';
$form = "SELECT `badguy`,`killed` FROM  `bad` LIMIT 10";
$result = mysqli_query($connect, $form);
$answer = array();
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($a = mysqli_fetch_assoc($result)) {
            $answer[] = $a;
        }
    }
    mysqli_free_result($result);
}
?>
<table style="width:100%;">
    <tr>
        <th>No.</th>
        <th>bad</th>
        <th>孤兒</th>
    </tr>
    <?php
    foreach ($answer as $value => $a) :
        echo '<tr>';
        echo '<td>' . ($value + 1) . '</td>';
    ?>
    <td><?php echo $a['badguy']; ?></td>
    <?php
        echo '<td>' . $a['killed'] . '</td>';
        echo '</tr>';
    endforeach;
    mysqli_close($connect);
    ?>
</table>