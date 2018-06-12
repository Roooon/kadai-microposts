<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Booklist</title>
    </head>
    <body>
<?php
    // ホームデータ送受信確認用コード(本番では削除)
    print '<div style="background-color: skyblue;">';
    print '<p>動作確認用:</p>';
    print_r($_POST);
    print '</div>';
    ?>
    
      <a href="booklist.php"><h1>Booklist</h1></a>
      <h2>書籍の登録フォーム</h2>
      <form action="booklist.php" method="POST">
          <input type="text" name"book_title" placeholder="書籍タイトルを入力" required>
          <input type="submit" name="submit_add_book" value="登録">
      </form>
      <h2>登録された書籍一覧</h2>
      <ul>
        　<?php //登録された書籍タイトルの数だけループ　開始 ?>
        　   <li><?php //print 書籍タイトル; ?><li>
        　<?php //ループ　終了?>
      </ul>
    </body>
</html>                  　