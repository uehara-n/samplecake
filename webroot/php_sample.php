<?php
//GETリクエスト：データがURLで引き渡される　■検索
//POSTリクエスト：データがURLで引き渡されない　■ログイン
?>

<!-- フォームからデータを送信、受け取る -->
<?php
//isset (  )の中身に、データがセットされていれば真を返し、なければ偽を返し処理が実行されない
  if(isset($_POST['comment'])){
  $comment = $_Colt['comment'];
  echo $comment;
}
?>
<form action="index.php" method="post">
  <input type="text" name="comment/">
  <input type="submit" value="送信/">
</form>
