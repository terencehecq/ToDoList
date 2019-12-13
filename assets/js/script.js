let archiver = document.getElementById("archiver");
let toDo = document.querySelectorAll(".toDo");
let checked = 0;

archiver.disabled = true;

toDo.forEach(elem => {
    elem.addEventListener("click", ()=>{
        if(elem.checked){
            elem.parentElement.classList.add("valid");
            checked += 1;
        }else{
            elem.parentElement.classList.remove("valid");
            checked -= 1;
            
        }
        if(checked<1){
            archiver.disabled = true;
        }else{
            archiver.disabled = false;
        }
    })
});


archiver.addEventListener("click", (e)=>{
    e.preventDefault();
    document.getElementById('checklist').submit();
})