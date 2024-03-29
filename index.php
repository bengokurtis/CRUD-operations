<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Create</title>
</head>
<body>

<div class="container">
    <form action="php/create.php"
            method="POST">
        <h4 class="display-4 text-center">Create</h4><hr><br>

        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?> 
        </div> 
        <?php } ?>

        <div class="form-group">
                <label for="name" class="form-label">Your name</label>
                <input type="name" 
                        class="form-control" 
                        id="name"
                        name="name"
                        value= "<?php if(isset($_GET['name'])) echo ($_GET['name']); ?> "
                        placeholder="Name">
        </div>

                <div class="form-group">
                <label for="email" class="form-label">Your email</label>
                <input type="email" 
                        class="form-control" 
                        id="email"
                        name="email"
                        value= "<?php if(isset($_GET['email'])) echo ($_GET['email']); ?> "
                        placeholder="Email">
                </div>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

    <button type="submit" 
            class="btn btn-primary"
            name="create">Create</button>
            <a href="read.php" class="link-primary">View</a>
    </form>
</div> 
</body>
</html>