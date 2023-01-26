<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/homepage.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Kanban Board</title>
</head>
<body>
        <div class="top-area container">
            <div class="header-logo">
                <img src="{{asset('assets/images/KanbanLogo.png')}}" width="100" height="100" alt="">
            </div>
            <div class="header-item">
                <h1>Kanban</h1>
                <div class="top-buttons">
                <div class="menu-item">
                    <a href="{{route('register')}}">Criar conta</a>
                </div>
                <div class="menu-item">
                   <a href="{{route('login')}}">Entrar</a>
                </div>
                 </div>
            </div>

        </div>

        <div class="mid-area container">
            <div class="content">
                <div class="content-text">
                        <h1 class="main-text">Planeje seus projetos de
                            maneira efetiva com um Kanban Board! </h1>

                            <div class="default-button big-button">Começar</div>

                </div>
                <div class="svg">
                    <svg style="display:block"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="3" d="M0,96L360,288L720,224L1080,128L1440,96L1440,320L1080,320L720,320L360,320L0,320Z"></path></svg>
                </div>
            </div>
        </div>
{{--
        <div class="bottom-area container">
            <div class="footer">
                <div class="footer-item">
                    Github
                </div>
            </div>
        </div> --}}
</body>
</html>
