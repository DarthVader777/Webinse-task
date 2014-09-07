<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit record</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <form action="controller.php" method="POST">
        <table class="table">
            <tr>
                <td>First name:</td>
                <?php
                include './MySQLClass.php';
                $mysql = new MySQLClass();
                $values = $mysql->getRecordById($_GET['id']);
                echo "<td><input type=\"text\" name=\"first_name\" value=\"" . $values['first_name'] . "\" /></td>";

                echo " </tr>
                    <tr>
                        <td>Last name: </td>
                        <td><input type=\"text\" name=\"last_name\" value=\"" . $values['last_name'] . "\"/></td>";
                echo "</tr>
                    <tr>
                        <td>E-mail: </td>
                        <td><input type=\"text\" name=\"email\" value=\"" . $values['email'] . "\" /></td>";
                ?>
            </tr>
            <tr>
                <td><input type="submit" value="Back" name="back"/></td>
                <td><input type="submit" value="Save" name="edit_save"/></td>
            </tr>
            <input type="hidden" name="id" value="<?PHP echo $_GET['id']; ?>"/>
        </table>
    </form>
</div>
</body>
</html>
