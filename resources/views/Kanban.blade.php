@extends('layouts.default', ['title' => 'Kanban'])


<div class="container">
@section('header')
<x-header/>
@endsection


    @section('content')
    @if(count($data) > 0)
        <div class="newKanban">
            <div class="warns-container">
                <div class="warn">
                    <p id="text-warn"></p>
                </div>

            </div>
            <form id="addtask" class="form-task-container">
            @csrf
            <p>Titulo</p>
            <input type="text" name="title" placeholder="Título da tarefa" class="default-input title spaced" id="tasktitle" autocomplete="off">
            <p>Objetivo da tarefa</p>
            <input type="text" name="body" class="default-input spaced" placeholder="Insira uma tarefa ao Kanban" id="taskbody" autocomplete="off" >
            <button id="savechanges" class="button-option savechanges" type="submit">Inserir tarefa</button>
            </form>
        </div>
        <div class="content-container">
            <?php $stages = [0 => 'A FAZER',
                             1 => 'EM PROGRESSO',
                             2 => 'FINALIZADO']; ?>

            {{-- @foreach($statuses as $key => $status)
                <x-StateBox :name="$stages[$status->stage]" :colortitle="$status->color" :tasks="$tasks" wip="" :statusid="$status->id"/>
            @endforeach --}}
            <x-StateBox name="Á FAZER" input="" colortitle="RED" :tasks="$pendingTasks" wip="" statusid="1"/>
            <x-StateBox name="EM PROGRESSO" input="" colortitle='#f4a259' :tasks="$inProgressTasks" wip="3/4" statusid="2"/>
            <x-StateBox name="TERMINADO" input="" colortitle='#7ae582' :tasks="$finalizedTasks" wip="" statusid="3"/>

        </div>
    @endif
    @endsection

    @section('footer')
        <script >
            var kanban = "{{$kanban_id}}"
        </script>
        <script src="{{asset('assets/js/kanban.js')}}"></script>
    @endsection
</div>

