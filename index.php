<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha512-Dop/vW3iOtayerlYAqCgkVr2aTr2ErwwTYOvRFUpzl2VhCMJyjQF0Q9TjUXIo6JhuM/3i0vVEt2e/7QQmnHQqw==" crossorigin="anonymous">
</head>
<body>
    <form action="result.php" method="POST">
        <div class="container">
            <div class = "form-group row">
                <label for="field">Поиск:</label>
                <input class="form-control" type="text" name="field" placeholder="Пример: laudanti">
            </div>
            <input class="btn btn-default row" type="submit" value="Найти">
        </div>
    </form>
</body>
</html>