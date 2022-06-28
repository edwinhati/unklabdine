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
    <?php echo date('G')+8?>
<form action="/rate/store" method="post">
@csrf
    <h2>information</h2>
    <input type="text" placeholder="responden" name="responden[]" value='edwin'><br>
    <h2>environment</h2>
    <input style="display: none;" type="text" name="id[]" value="{{$ide}}">
    <input type="text" name="comments[]" value="test">
    <input type="text" name="rating[]" value="4">
    <h2>service</h2>
    <input style="display: none;" type="text" name="id[]" value="{{$ids}}">
    <input type="text" name="comments[]" value="test">
    <input type="text" name="rating[]" value="4">
    <h2>food</h2>
    <input style="display: none;" type="text" name="id[]" value="{{$idf}}">
    <input type="text" name="comments[]" value="test">
    <input type="text" name="rating[]" value="4">

    <input type="submit" value="submit">
</form>

</body>
</html>