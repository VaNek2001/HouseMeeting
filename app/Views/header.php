<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ССМД</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<header class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary bg-primary">
        <div class="container-md">
            <a class="navbar-brand" href="#">
                <img src="https://i.ibb.co/gzHM6N6/Feed-25-citypng-transformed.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                ССМД
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/owners">Владельцы</a>
                    </li>
                </ul>


                <?php
                if (!$data['user'])
                {
                    echo '<form class="d-flex" method="post" action="/login">';
                    echo '<input class="form-control me-2" type="text" placeholder="Логин" name="login" aria-label="Логин"/>';
                    echo '<input class="form-control me-2" type="password" placeholder="Пароль" name="password" aria-label="Пароль"/>';
                    echo '<button class="btn btn-outline-light" type="submit">Войти</button>';

                    echo '</form>';
                }
                else {
                    echo '<a class="nav-link" href="#" style="color: lightgrey;" >Привет, ' . $data['user']->login . ' </a>';
                    echo '<a class="btn btn-outline-light " href="/logout">Выйти</a>';

                }
                ?>

            </div>
        </div>
    </nav>
</header>

<div class="modal fade in" id="messageModal"  tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <?php if($data['message']){echo $data['message'];} ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>