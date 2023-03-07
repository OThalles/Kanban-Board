const newKanban = document.querySelector('.newkanban');
const closeButton = document.querySelector('.popup-close');
const popUp = document.querySelector('.popup-container');
const saveButton = document.querySelector('.savechanges');

const token = document.querySelector('meta[name="_token"]').getAttribute('content')

newKanban.addEventListener('click', function(){
     popUp.style.display = 'flex';
})

closeButton.addEventListener('click', function(){
    popUp.style.display = 'none'

})

function newKanbanElement(){
    table = document.querySelector('home-table');

}
