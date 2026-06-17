<!DOCTYPE html>
<html>
    <head>
        <title>Gallery</title>
        <link rel="stylesheet" href="master.css">
    </head>
    <body>
        <?php include "nav.php"; ?>
            <br><br>
        <section>
            <?php
                for ($i=1; $i<=16; $i++) {
                    echo "
                        <img src='images/img - $i.jpeg'>
                    ";
                    if ($i % 4 == 0) {
                        echo "<br>";
                    }
                }
            ?>
        </section>
    </body>
</html>