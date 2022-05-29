<link rel="stylesheet" href="list.css">
<?php
echo '最近登入資料：</br>';
require_once 'connect.php';
$form = "SELECT `username`,`logintime` FROM  `qwer`  ORDER BY `logintime` DESC LIMIT 10";
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
        <th>user</th>
        <th>logintime</th>
    </tr>
    <?php
    foreach ($answer as $value => $a) :
        echo '<tr>';
        echo '<td>' . ($value + 1) . '</td>';
    ?>
    <td><a href="hi.php?id=<?php echo $a['username']; ?>"><?php echo $a['username']; ?></a></td>
    <?php
        echo '<td>' . $a['logintime'] . '</td>';
        echo '</tr>';
    endforeach;
    mysqli_close($connect);
    ?>
</table>