<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Primo progetto PHP</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="container py-5">
  <h1>Il mio primo form con PHP!</h1>
  <form action="readUserInfo.php" method="POST">
    <!-- email -->
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
      name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <!-- password -->
    <!-- <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1"
      name="password">
    </div> -->
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Insert censored word</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"
      name="censoredWord"></textarea>
    </div>
    <!-- testo da modificare -->
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Example text area</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
      name="text"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>
</html>