<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?php $title = "Dashboard" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>

<?php
    function display_data($UserInfo) {
    $output = '<table>';
        foreach($UserInfo as $key => $var) {
        $output .= '<tr>';
            foreach($var as $k => $v) {
            if ($key === 0) {
            $output .= '<td><strong>' . $k . '</strong></td>';
            } else {
            $output .= '<td>' . $v . '</td>';
            }
            }
            $output .= '</tr>';
        }
        $output .= '</table>';
    echo $output;}
?>
<?php include "includes/footer.view.php" ?>
</body>
</html>