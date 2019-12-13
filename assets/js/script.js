let archiver = document.getElementById("archiver");
let toDo = document.querySelectorAll(".toDo");

console.log(toDo);

toDo.forEach(elem => {
    elem.addEventListener("click", ()=>{
        elem.parentElement.classList.toggle("valid");
    })
});



// archiver.addEventListener("click", (e) => {
//     // e.preventDefault();
//     try{
//         let response = await fetch("tasks.json"); 
//         let tasks = await response.json();
        
        
//         console.log(tasks);

//         // console.log(boolean);

//         // if(picSrc !== ""){
//         //     document.getElementById("author-pic").style.backgroundImage = `url(${picSrc})`;
//         // }else{
//         //     document.getElementById("author-pic").style.backgroundImage = `url(https://originalcreators.dk/wp-content/uploads/2018/05/person-placeholder.png)`;
//         // }
    
//     } catch(e){
//         console.log(e);
//     }
// })