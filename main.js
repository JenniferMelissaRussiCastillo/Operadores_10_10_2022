addEventListener("DOMContentLoaded", async()=>{
    let peticion = await fetch("https://jennifermelissarussicastillo.000webhostapp.com/Operadores_07_10_2022/api.php");
    let data = await peticion.text();
   // document.body.innerHTML = `<h1 style="background: blue; color: #fff; font-family: Arial, Helvetica, sans-serif; padding: 10px; border-radius: 5px;">${data}`;
    document.body.querySelector("#datos").innerHTML=data;
})