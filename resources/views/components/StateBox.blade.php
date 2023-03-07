
<div class="statebox-wrap" data-id="{{$statusid}}">
    <div class="statebox-title" style="background-color: {{$colortitle}}">
        <h1>{{$name}} {{$wip}}</h1>
    </div>

    @foreach($tasks as $task)
        <div class="task">
            <div class="changestatus">
                <div class="changestatustext">
                    <p class="next-status-button">Passar para o próximo estágio</p>
                    <p class="deletetask">Deletar</p>
                </div>
            </div>
            <div class="task-title">
                <p>{{$task['title']}}</p>
            </div>
            <hr class="taskelements-separation"/>
            <div class="task-body">
                {{$task['body']}}
            </div>
        </div>
    @endforeach
</div>
