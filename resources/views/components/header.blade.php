<div class="header-container">
    <div class="header-wrapper">
        <div class="header-title">
            <h1>KanbanB</h1>
        </div>
        <div class="header-options">
            <li>Meus boards</li>
            <li>Perfil</li>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button>Sair</button>
            </form>
        </div>
    </div>
</div>


