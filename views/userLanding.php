<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>

    <?php if ($_SESSION['username']) : ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="userLandingpage.php"><?= $_SESSION['username']; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="userLandingpage.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daily.update.php?id=<?= $_SESSION['id']; ?>">Add Update</a>
                    </li>



                </ul>

            </div>
        </nav>

        <?php foreach ($posts as $p) : ?>

            <div class="col-12 col-lg-4 d-flex justify-content-center">

                <div class="card text-white bg-dark mt-5">

                    <div class="card-body" style="width: 18rem;">

                        
                        <p class="card-text"><?php echo $p['daily_update']; ?>.</p>

                        <div class='d-flex mt-2 justify-content-center align-items-center'>

                            <?php if($p['created_date'] == date('Y-m-d')) : ?>

                            <a href="views/edit.php?id=<?= $data['id'] ?>" class="  btn-light btn-sm">edit</a>
                            
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
                        <?php endforeach; ?>


                    <?php else : ?>
                        <?php header('Location: login.php'); ?>



                    <?php endif; ?>










                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>