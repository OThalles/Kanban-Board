const newKanban = document.querySelector('.newkanban');
const closeButton = document.querySelector('.popup-close');
const popUp = document.querySelector('.popup-container');
const saveButton = document.querySelector('.savechanges');

const token = document.querySelector('meta[name="_token"]').getAttribute('content')

async function postData(url, data, token){

    const response = await fetch(url,{
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-Token': token
        },
        body: data
    }
    )
}

newKanban.addEventListener('click', function(){
     popUp.style.display = 'flex';
})

closeButton.addEventListener('click', function(){
    popUp.style.display = 'none'
})

saveButton.addEventListener('click', sendReq)

function sendReq(){

    const kanbanName = document.querySelector('#popup-input').value
    let data = {
        name:kanbanName
    }
    postData('/newKanban', JSON.stringify(data),token);
    popUp.style.display = 'none'

}
