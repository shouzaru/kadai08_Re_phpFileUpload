<?php
//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//   POSTデータ受信 → DB接続 → SQL実行 → 前ページへ戻る
//2. $id = POST["id"]を追加
//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更

$id = $_POST['id'];
require_once "./dbc.php";
// $file = getAllFile();

//1. POSTデータ取得
// $dateInput = $_POST['dateInput'];
$caption = filter_input(INPUT_POST, 'caption', FILTER_SANITIZE_SPECIAL_CHARS);

//2. DB接続します
$pdo = dbc();
//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE 
                            file_table2
                        SET 
                            caption = :caption,
                            update_time = sysdate()
                        WHERE
                            id = :id;
                            ');


// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
// $stmt->bindValue(':dateInput',date("Y-m-d", strtotime($dateInput)), PDO::PARAM_STR);  //参考：https://qiita.com/pei0804/items/ca70ad2a87edadb43d27
$stmt->bindValue(':caption',$caption, PDO::PARAM_STR);
$stmt->bindValue(':id',$id, PDO::PARAM_INT);

$status = $stmt->execute(); //実行


//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('form.php');
}