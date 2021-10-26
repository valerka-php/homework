<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .margin {
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<form  action="form.php" method="post">
    <input class="margin" type="number" name="days" placeholder="days" required> <br>
    <select class="margin" name="country">
        <option selected >Select your country</option>
        <option value="Italy">Italy</option>
        <option value="Turkey">Turkey</option>
        <option value="Egypt">Egypt</option>
    </select><br>
    <input class="margin" type="checkbox" name="discount" > Get discount 5% <br>
    <button> calculate cost </button>
</form>



</body>
</html>
