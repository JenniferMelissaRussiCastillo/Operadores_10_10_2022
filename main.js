addEventListener("DOMContentLoaded", (e)=>{
    let form= document.querySelector("#Mydata");
    form.addEventListener("submit", (e)=>{
        e.preventDefault();
        let data = Object.fromEntries(new FormData(e.targer));
        console.log(data);

    })

})