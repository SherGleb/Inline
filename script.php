<?php
$link = mysqli_connect("inline", "root", "", "inline");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
} else {
    $posts = file_get_contents('https://jsonplaceholder.typicode.com/posts');
    $posts = json_decode($posts, true);
    $posts_amount = 0;
    foreach ($posts as $post) {
        $sql = "INSERT INTO posts (id, userId, title, body) VALUES ($post[id], $post[userId], '$post[title]', '$post[body]')";
        $result = mysqli_query($link, $sql);
        if ($result == false) {
            print("Произошла ошибка при выполнении запроса");
        } else {
            $posts_amount += 1;
        }
    };

    $comments = file_get_contents('https://jsonplaceholder.typicode.com/comments');
    $comments = json_decode($comments, true);
    $comments_amount = 0;
    foreach ($comments as $comment) {
        $sql = "INSERT INTO comments (id, postId, name, email, body) VALUES ($comment[id], $comment[postId], '$comment[name]', '$comment[email]', '$comment[body]')";
        $result = mysqli_query($link, $sql);
        if ($result == false) {
            print("Произошла ошибка при выполнении запроса");
        } else {
            $comments_amount += 1;
        }
    };

    print("Загружено $posts_amount записей и $comments_amount комментариев");
}
