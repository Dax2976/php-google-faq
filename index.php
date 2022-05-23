<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Google FAQ</title>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex align-items-center">
                    <div class="grey align-items-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1280px-Google_2015_logo.svg.png" alt="" class="w_10">
                        <span class="m-0 p-2 fS3"><a href="#" class="grey text-black">Privacy & Termini</a></span>
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
    <div class="container pt-3">
        <?php include('database.php');
            foreach($database as $key){
                echo $key['domanda'];
                if(isset($key['domanda'])){
                    $domanda = $key['domanda'];
                    $risposta = $key['risposta'];
                    echo $risposta;
                }
            }
        ?>
    </div>
    <footer>
        <div class="bg-light container-fluid d-flex align-items-center">
            <ul class="d-flex m-0">
                <li><a href="#" class="grey">Google</a></li>
                <li><a href="#" class="grey">Tutto su Google</a></li>
                <li><a href="#" class="grey">Privacy</a></li>
                <li><a href="#" class="grey">Termini</a></li>
            </ul>
            <div class="js align-items-end">
                <div class="language-picker js-language-picker" data-trigger-class="btn btn--subtle">
                    <form action="" class="language-picker__form">
                        <label for="language-picker-select" class="grey">Select your language</label>
                        <select name="language-picker-select" id="language-picker-select">
                            <option lang="de" value="deutsch">Deutsch</option>
                            <option lang="en" value="english" selected>English</option>
                            <option lang="fr" value="francais">Français</option>
                            <option lang="it" value="italiano">Italiano</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>


<style>
    

    .grey{
        color:grey;
        text-decoration:none;
    }

    .w_10{
        width: 5%;
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

    .fS3{
        font-size: 28px;
    }

    ul{
        list-style: none;
    }

    li{
        padding:20px;
    }
</style>