
    <div class="auth-container">
            <div class="auth-wrapper">
                <div class="image-container">
                    <img src="{{asset('assets/svg/coworkers.svg')}}" alt="">
                </div>
                <div class="form-area">
                    <!--Checking if we are in the registration or login route-->

                    <h1>{{(Route::is('register')) ? 'Crie sua conta':'Entre agora'}}</h1>

                    <form action="{{(Route::is('register')) ? 'register':'login'}}" method="POST">
                        @csrf

                        @if(Route::is('register'));
                        <input type="text" name="name" placeholder="Digite seu nome" class="authinput" autocomplete="off">
                        <input type="password" name="confirmPassword" placeholder="Confirme sua senha" class="authinput" autocomplete="off">
                        @endif

                        <input type="text" name="email" placeholder="Digite seu email" class="authinput" autocomplete="off">
                        <input type="password" name="password" placeholder="Digite sua senha" class="authinput" autocomplete="off">

                        <button class="submitbutton">{{(Route::is('register')) ? 'Criar conta':'Fazer Login'}}</button>

                    </form>
                </div>
            </div>
    </div>


