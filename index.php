<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Database</title>
        <link href="css/bootstrap.css" rel="stylesheet" >
    </head>
    <body>
        <div class="container">
            <form action="controller.php" method="POST">
                <input type="submit" value="Add new record" name="add" />
                <br/>
                <br/>
                <table class="table">
                    <thead><tr>
                            <?php
                            include './MySQLClass.php';

                            $mysql = new MySQLClass();

                            foreach ($mysql->getFieldNames() as $value) {
                                echo "<th>" . $value . "</th>\n";
                            }
                            echo "</tr></thead><tbody><tr>\n";
                            foreach ($mysql->getRows() as $value) {
                                echo $value;
                            }
                            ?>
                            </tbody>
                </table>

            </form>
        </div>
    </body>
</html>
