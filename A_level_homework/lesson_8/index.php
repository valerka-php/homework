<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="main.css" rel="stylesheet">
</head>
<body >

<form class="row g-3 form" action="index.php" method="post">
    <div class="col-md-6" >
        <label for="inputEmail4" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Surname</label>
        <input type="text" class="form-control" name="surname"  required>
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email"  required>
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4" name="password"  required>
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address"  required>
    </div>
    <div class="col-12">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity" name="city"  required>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>

<p>
    <?php
    if (isset($_POST['name'])){
        echo 'name =>' . $_POST['name'] . '<br>';
        echo'surname =>' .  $_POST['surname'] . '<br>';
        echo 'email =>' . $_POST['email'] . '<br>';
        echo 'address =>' . $_POST['address'] . '<br>';
        echo 'city =>' . $_POST['city'] . '<br>';

    }
    ?>
</p>

</body>
</html>


