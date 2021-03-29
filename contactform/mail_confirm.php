<!DOCTYPE html>
<html lang="ja">
<head>
    <!--文字コードをセット-->
    <meta charset="utf-8">
    <!--CSSの適用-->
    <link rel="stylesheet" href="style2.css">

    <!--タイトルを記入-->
    <title>お問い合わせフォーム</title>

</head>

<body>
    <h2>お問い合わせ内容確認</h2>

    <div class="confirm">
        <p>お問い合わせ内容はこちらで宜しいでしょうか？
        <br>よろしければ「送信する」ボタンを押して下さい。
        </p>

        <!--名前-->
        <p>名前
            <br>
            <?php echo $_POST['name']; ?>
        </p>

        <!--メールアドレス-->
        <p>メールアドレス
            <br>
            <?php echo $_POST['mail']; ?>
        </p>

        <!--年齢-->
        <p>年齢
            <br>
            <?php echo $_POST['age']; ?>歳
        </p>

        <!--コメント-->
        <p>コメント
            <br>
            <?php echo $_POST['comments']; ?>
        </p>

        <form action="index.html">
            <input type="submit" class="button1" value="戻って修正する"/>
        </form>

        <!--postをnameに格納して、insert.phpに引き渡す-->
        <form action="insert.php" method="post">
            <input type="submit" class="button2" value="登録する"/>
            <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
            <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
            <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
        </form>
        
    </div>
</body>


</html>