<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test insert</title>
</head>
<body>
    <h1>test</h1>
    <form action="/rate/store" method="POST">
        @csrf
        <input type="text" placeholder="id" name="id"></input><br>
        <input type="text" placeholder="responden" name="responden"></input><br>
        <input type="text" placeholder="comments" name="comments"></input><br>
        <input type="text" placeholder="rating" name="rating"></input><br>
        <input type="text" placeholder="type" name="type"></input><br>
        <input type="text" placeholder="mealtime" name="mealtime"></input><br>
        <input type="submit" value="store">
    </form>
</body>
</html>