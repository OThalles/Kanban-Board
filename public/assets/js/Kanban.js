const token = document.querySelector('meta[name="_token"]').getAttribute('content')
console.log(token)
const warn = document.querySelector('.warn')

async function addTaskReq(url, method, data, token = null){
    const req = await fetch(url, {
        method: method,
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-Token': token
        },
        body: JSON.stringify(data)
        }
    )

    const res = await req.json();
    return res;
}



function addTaskAction(){
    document.querySelector('#addtask').addEventListener('submit', function(e){
        e.preventDefault();
        data = {
            title: this.title.value,
            body: this.body.value,
            kanban_id: kanban
        }

        addTaskReq('/newTask', 'POST', data, token).then(task => {

            if(task.hasOwnProperty('response')){
                let textWarn = "A tarefa "+ task.response.title+ " foi adicionada"
                addWarning(textWarn, 'success')
                addTaskElements(task.response.title, task.response.body)
            } else {
                addWarning('Ocorreu um erro', 'error')
            }

        })
    })

}

function addWarning(data, classe){
    const warnContainer = document.querySelector(".warns-container")
    const textwarn = document.querySelector("#text-warn")

    warn.classList.remove('success')
    warn.classList.remove('error')


    warnContainer.style.display = 'flex'
    warn.classList.toggle(classe)
    textwarn.textContent = data
}

function addTaskElements(title, body){
    newTask = document.createElement('div')
    newTask.className = "task"

    //Criação do título da tarefa
    newTaskTitle = document.createElement('div')
    newTaskTitle.className = "task-title"
    newTaskParagraph = document.createElement('p')
    newTitleText = document.createTextNode(title)
    newTaskParagraph.appendChild(newTitleText)
    newTaskTitle.appendChild(newTaskParagraph)

    newSeparation = document.createElement('hr')
    newSeparation.className = "taskelements-separation"

    //Criação do objetivo da tarefa
    newTaskBody = document.createElement('div')
    newTaskBody.className = "task-body"
    newBodyText = document.createTextNode(body)
    newTaskBody.appendChild(newBodyText)

    newTask.appendChild(newTaskTitle)
    newTask.appendChild(newSeparation)
    newTask.appendChild(newTaskBody)

    document.querySelector('.statebox-wrap').appendChild(newTask)



}


addTaskAction()

function createTasksInStatus(tasks){
    document.querySelectorAll(['data-id']).forEach(function(event){
        const id = event.getAttribute("data-id");
        const statusdata =  data
        var html = '<div class="task">                                                       '+
                   '    <div class="changestatus">                                           '+
                   '        <div class="changestatustext">                                   '+
                   '            <img src="{{asset("assets/images/row-right.png")}}" alt="">  '+
                   '        </div>                                                           '+
                   '</div>                                                                   '+
                   '<div class="task-title">                                                 '+
                   '    <p>Fazer rotas no laravel</p>                                        '+
                   '</div>                                                                   '+
                   '<hr class="taskelements-separation"/>                                    '+
                   '<div class="task-body">                                                  '+
                   '    Lorem ipsum dolor ame sit ipsum dolor ame sit                        '+
                   '</div>'
                   '</div>'

        event.insertAdjacentHTML('beforeend', html);
    })
}



getTasks()
