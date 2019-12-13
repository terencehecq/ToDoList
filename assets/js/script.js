let archiver = document.getElementById("archiver");


archiver.addEventListener("click", async (e) => {
    // e.preventDefault();
    try{
        let response = await fetch("tasks.json"); 
        let tasks = await response.json();
        
        
        console.log(tasks);

        // console.log(boolean);

        // if(picSrc !== ""){
        //     document.getElementById("author-pic").style.backgroundImage = `url(${picSrc})`;
        // }else{
        //     document.getElementById("author-pic").style.backgroundImage = `url(https://originalcreators.dk/wp-content/uploads/2018/05/person-placeholder.png)`;
        // }
    
    } catch(e){
        console.log(e);
    }
})