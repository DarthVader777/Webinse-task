<?php
include_once 'php/Model.php';
$mysql = new Model();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Database</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
    <div class="col-sm-12">
        <input type="submit" value="Add new record" name="add" class="btn btn-default"/>
        <br/>
        <br/>
        <table class="table table-striped">
            <thead>
            <tr>
                <?php foreach($mysql->getFieldNames() as $value): ?>
                    <th><?php echo $value ?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach($mysql->getRows() as $row): ?>
                <?php $id = null; ?>
                <tr>
                    <?php foreach($row as $key => $value): ?>
                        <?php if($key === 'id'): ?>
                            <?php $id = $value; ?>
                        <?php endif; ?>
                        <td><?php echo $value ?></td>
                    <?php endforeach; ?>
                    <td>
                        <form action="php/controller.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                            <input type="submit" name="edit" value="Edit" class="btn btn-default"/>
                            <input type="submit" name="delete" value="Delete" class="btn btn-default"/>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
