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
                <input type="text" name="name" placeholder="Digite o nome do novo Kanban" class="popup-input" id="popup-input">
            </div>
            <div class="button-option savechanges">Salvar</div>
        </div>
    </div>
</div>
    <div class="AllKanbans-container">
        <div class="AllKanbans-options">
            <div class="button-option newkanban">
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
                    <td>{{$item->name}}</td>
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
