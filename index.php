<!DOCTYPE html>
<html>

    <head>
        <title>フォームデータを自分に送る</title>
    </head>

    <body>
        <h1>フォームデータを自分に送る</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <label for="text">テキスト:</label>
            <input type="text" id="text" name="text">
            <br><br>
            <input type="submit" value="送信">
        </form>
        <br><br>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $text = $_POST["text"];
            echo "入力されたテキスト: " . $text;
        }
        ?>
    </body>

</html>