document.querySelector('#addtask').addEventListener('keyup', function(e){
    if(e.keyCode == 13){
        console.log(this.value)
        this.value = "";
    }
})
