<?php
require_once "./dbc.php";
$files = getAllFile();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>アップロードフォーム</title>
</head>
<body>
    <h1>日付をつけてファイルアップロード</h1>
    <form enctype="multipart/form-data" action="./file_upload.php" method="POST">
        <div class="file-up">
            <input type="date" name="dateInput" />
            <input type="file" name="img" />
        </div>
        <div>
            <textarea name="caption" placeholder="キャプション（140文字以下）" id="caption" cols="30" rows="10"></textarea>
        </div>
        <div class="submit">
            <input type="submit" class="btn" value="送信">
        </div>
    </form>

    <div>
        <hr>
        <table>
            <tr>
                <th>ファイル一覧を見る：</th>
                <td><a href="./uploadedFiles.php">こちら</a></td>
            </tr>
            <tr>
                <th>日付を選んでファイルを見る：</th>
                <td><a href="./selectDL.php">こちら</a></td>
            </tr>
        </table>
    </div>

    
</body>
</html>