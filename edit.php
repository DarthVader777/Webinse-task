<?php
include_once 'php/Model.php';
$mysql = new Model();
$id = $_GET['id'];
$values = $mysql->getRecordById($id);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?php if($id): ?>
        <title>Edit record <?php echo $id ?></title>
    <?php else: ?>
        <title>Add new record</title>
    <?php endif; ?>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Webinse Task</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="edit.php">Add new record</a></li>
        </ul>
    </div>
</div>

    <div class="container">
        <div class="col-sm-6">
            <form action="php/controller.php" method="POST">
                <table class="table table-striped">
                    <tr>
                        <td>First name:</td>
                        <td><input type="text" name="first_name" class="form-control" required="" autofocus=""
                                   value="<?php echo $values['first_name'] ?>"/></td>
                    </tr>
                    <tr>
                        <td>Last name:</td>
                        <td><input type="text" name="last_name" class="form-control" required="" autofocus=""
                                   value="<?php echo $values['last_name'] ?>"/></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type="email" name="email" class="form-control" placeholder="Email address"
                                   required="" autofocus="" value="<?php echo $values['email'] ?>"/></td>
                    </tr>
                </table>
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <input type="submit" value="Save" name="save" class="btn btn-default"/>
            </form>
        </div>
    </div>
</div>
</body>
</html>
