<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add new record</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <form action="controller.php" method="POST">
        <table class="table">
            <tr>
                <td>First name:</td>
                <td><input type="text" name="first_name"/></td>
            </tr>
            <tr>
                <td>Last name:</td>
                <td><input type="text" name="last_name"/></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email"/></td>
            </tr>
            <tr>
                <td><input type="submit" value="Back" name="back"/></td>
                <td><input type="submit" value="Save" name="add_save"/></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
