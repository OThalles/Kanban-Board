@extends('layouts.default', ['title' => 'Kanban'])


<div class="container">
@section('header')
<x-header/>
@endsection


    @section('content')
    @if(count($data) > 0)
        <div class="newKanban">
            <div class="warns-container">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="warn">
                            <p id="text-error">{{$error}}</p>
                        </div>
                    @endforeach
            @endif
            </div>
            <form action="{{route('newTask', ['kanban_id' => Request::segment(2)])}}" method="POST" class="form-task-container">
            @csrf
            <p>Titulo</p>
            <input type="text" name="title" placeholder="Título da tarefa" class="default-input title spaced" autocomplete="off">
            <p>Objetivo da tarefa</p>
            <input type="text" name="body" class="default-input spaced" id="addtask" placeholder="Insira uma tarefa ao Kanban" autocomplete="off" >
            <button id="savechanges" class="button-option savechanges" type="submit">Inserir tarefa</button>
            </form>
        </div>
        <div class="content-container">
            <?php $stages = [0 => 'A FAZER',
                             1 => 'EM PROGRESSO',
                             2 => 'FINALIZADO']; ?>

            @foreach($statuses as $key => $status)
                <x-StateBox :name="$stages[$status->stage]" :colortitle="$status->color" wip=""/>
            @endforeach
            {{-- <x-StateBox name="EM PROGRESSO" input="" colortitle='#f4a259' wip="3/4"/>
            <x-StateBox name="TERMINADO" input="" colortitle='#7ae582' wip=""/> --}}

        </div>
    @endif
    @endsection

</div>

<script src="{{asset('assets/js/kanban.js')}}" type="text/javascript"></script>
