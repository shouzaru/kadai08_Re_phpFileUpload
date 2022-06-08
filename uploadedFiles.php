<?php
require_once "./dbc.php";
$pdo = dbc();
$file = getAllFile();

//データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM file_table2');
$status = $stmt->execute();

//データ表示
$view = '';
if($status === false){
    $error = $stmt->errorInfo();
    exit('SQLerror:' . print_r($error, true));
}else{
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= '<p>';
        $view .= $result['dateInput'] . '</p>';
        $view .= '<img src="';
        $view .= $result['file_path'] . '" alt="">';
        $view .= '<p>';
        $view .= h($result['caption']) . '</p>';
        

        $view .= '<a href="detail.php?id=' .$result['id'] . ' ">';  //クリックするとidを読む
        $view .= '【更新】';
        $view .= '</a>';
    
        $view .= '<a href="delete.php?id=' .$result['id'] . ' ">';  //クリックするとidを読む
        $view .= '【削除】';
        $view .= '</a>';
        $view .= '</p>';
        $view .= '<hr>';

    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>アップロード済みファイル</title>
</head>
<body>

<div>
        <table>
            <tr>
                <th>ファイルのアップロード：</th>
                <td><a href="./form.php">こちらから</a></td>
            </tr>
        </table>
    </div>
<div>
    <hr>
    <h2>アップロード済みのファイル一覧</h2>
    <hr>
    <?= $view ?>




</div>
    
</body>
</html>
