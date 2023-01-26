@extends('layouts.default', ['title' => 'Kanban'])


<div class="container">
@section('header')
<x-header/>
@endsection


    @section('content')
    <div class="newKanban">
        <p>Titulo</p>
        <input type="text" placeholder="Título da tarefa" class="addtask title" autocomplete="off">
        <p>Objetivo da tarefa</p>
        <input type="text" name="kanbanbody" class="addtask" id="addtask" placeholder="Insira uma tarefa ao Kanban" autocomplete="off" >
    </div>
    <div class="content-container">
        <x-StateBox name="Á FAZER" input="Y" colortitle='#4361ee' wip=""/>
        <x-StateBox name="EM PROGRESSO" input="" colortitle='#f4a259' wip="3/4"/>
        <x-StateBox name="TERMINADO" input="" colortitle='#7ae582' wip=""/>
    </div>
    @endsection

</div>
