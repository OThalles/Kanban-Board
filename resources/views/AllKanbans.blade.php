@extends('layouts.default', ['title' => 'Meus Kanbans'])

@section('header')
<x-header/>
@endsection

@section('content')
<div class="popup-container">
    <div class="popup">
        <div class="popup-close">
            <img src="{{asset('assets/images/x-icon.png')}}" width="50px" height="50px" alt="">
        </div>
        <div class="popup-items-container">

            <div class="popup-item">
                <p >Nome do novo Kanban</p>
                <form action="{{route('newKanban')}}" method="POST">
                    @csrf
                    <input dusk="inputNewKanban" type="text" name="name" placeholder="Digite o nome do novo Kanban" class="default-input" id="popup-input">
                    <button class="button-option savechanges">Salvar</button>
                </form>
            </div>

        </div>
    </div>
</div>
    <div class="AllKanbans-container">
        <div class="warns-container">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="warn">
                        <p id="text-error">{{$error}}</p>
                    </div>
                @endforeach
        @endif
        </div>
        <div class="AllKanbans-options">
            <div class="button-option newkanban" id="newKanban">
                Criar novo Kanban
            </div>
        </div>

        <div class="AllKanbans-wrapper">
            @if(!empty($data))

            <table class="home-table" cellspacing="0">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Criado em</th>
                    <th>Modificado em</th>
                    <th>Ação</th>
                </tr>
                @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>
                      <a href="{{route('kanban', ['id' => $item->id])}}" id="kanban-name"> {{$item->name}} </a>
                    </td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>
                        <div class="button-option">
                            Deletar
                        </div>
                        <div class="button-option">
                            Modificar
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
            @endif

        </div>

    </div>
<script type="text/javascript" src="{{asset('assets/js/index.js')}}"></script>
@endsection
