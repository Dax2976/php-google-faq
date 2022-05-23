<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Google FAQ</title>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex align-items-center">
                    <div class="grey  align-items-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1280px-Google_2015_logo.svg.png" alt="" class="w_10">
                        <h3 class="m-0"><a href="#" class="grey text-black">Privacy & Termini</a></h3>
                    </div>
                </div>
            </div>
            <div class="row p-2">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <ul class="navbar-nav border-bottom w-100">
                            <li class="nav-item">
                                <a class="nav_link grey" href="#">Introduzione</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav_link grey" href="#">Norme sulla privacy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav_link grey " href="#">Termini di servizio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav_link grey" href="#">Tecnologie</a>
                            </li>
                           <li class="nav-item active">
                                <a class="nav_link grey" href="#">Domande frequenti</a>
                            </li>
                        </ul>
                    </nav> 
                </div>
            </div>
        </div>
    </header>
    <div class="container-md">
        <?php include('database.php');
        
        ?>
    </div>
</body>
</html>


<style>
    

    .grey{
        color:grey;
        text-decoration:none;
    }

    .w_10{
        width: 10%;
    }

    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .nav_link {
        color: gray;
        padding-right: 0.5rem;
        padding-left: 0.5rem;
        display: block;
        padding: 0.5rem 1rem;
        text-decoration: none;
    }
    .nav_link:hover {
        color: blue;
        border-bottom: 2px solid blue;
    }
</style>