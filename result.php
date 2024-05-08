<title>Результат поиска</title>
<?php
$link = mysqli_connect("inline", "root", "", "inline");
if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}

$substr = $_POST["field"];
if (strlen($substr) < 3) {
    echo "Слишком короткая строка для поиска";
} else {
    $sql = "SELECT posts.title, comments.body AS comment FROM posts JOIN comments ON posts.id = comments.postId WHERE comments.body LIKE '%$substr%';";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo "<pre>" . json_encode($rows, JSON_PRETTY_PRINT) . "<pre/>";
}
