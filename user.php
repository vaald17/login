<?php
/* session_start();
if (isset($_SESSION['user'])) {
    echo('Вы вошли как ' . $_SESSION['user']['nick']);
} else {
    echo('Вы не авторизованы.');
} */


/* $array = ['row1' => 'string_1', 'row2' => 'string_2'];
$arr = ['user' => 'admin', 'password' => 'admin', 'array' => $array];
?>
<pre><?php var_dump($arr) ?></pre>
<?php */
/* var_dump($_SERVER); */


foreach ($_COOKIE as $key => $value) { ?>
    <table border="1px">
        <tbody>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
        </tbody>
    </table>
<?php }

/* echo $_SERVER('REMOTE_ADDR'); */


$ip_address = $_SERVER['REMOTE_ADDR'];
echo $ip_address;

/* $num = 0;
foreach ($_SERVER as $key=>$value) { ?>
    <table border="1px">
        <tr>
            <td><?= ++$num ?></td>
            <td><?= $key?></td>
            <td><?= $value?></td>
        </tr>
    </table>
<?php }  */



/* session_start();
foreach ($_SESSION['user'] as $key => $value) { ?>
    <table border="1px">
        <tbody>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
        </tbody>
    </table>
<?php } ?> */