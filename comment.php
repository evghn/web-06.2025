<?php

const FILE_COMMENT = "comment.db";
$login = "";
if (!file_exists(FILE_COMMENT)) { 
    file_put_contents(FILE_COMMENT, "");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["send"])) {
        // $comment = trim(strip_tags($_POST["login"])); // очистка параметра
        $comment = $_POST["comment"];
        $login = trim(strip_tags($_POST["login"]));
        if ($comment && $login) {
            
            $s = "$login (" . date("d.m.Y H:i:s") . "): <br>"
                . "<div>$comment</div>#@#";
            
            file_put_contents(FILE_COMMENT, htmlspecialchars($s), FILE_APPEND);
        }
    }

    header("Location: " . $_SERVER["SCRIPT_NAME"]);
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <div>
            <label>
                Логин:
                <input type="text" name="login" value="<?= $login ?>">
            </label>
        </div>
        <div>
            <label>
                Комментарий:
                <textarea name="comment"></textarea>
            </label>
        </div>
        <div>
            <input type="submit" value="Вход" name="send">
        </div>
    </form>

    <?php 
        $comments = "";
        $comments = file_get_contents(FILE_COMMENT);
        $comments = explode("#@#", $comments);               
    ?>

        <?php if ($comments[0]): ?>            
            <?php $comments = array_reverse($comments) ?>
            <?php foreach ($comments as $comment): ?>
                <?php if ($comment): ?>
                    <div style="border: 1px solid #eee; margin: 10px 0;padding: 7px;" >
                        <?= htmlspecialchars_decode($comment) ?>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        <?php else: ?>
            <div>
                Комментариев пока нет....
            </div>
        <?php endif ?>
    
    

    
</body>

</html>