
function trocar(){
let ft_f="./imgs/f.png";
let ft_m ="./imgs/m.png";
    let ft = document.getElementById("sexo").value
    let alterada = document.getElementById("escolher")

if(ft=="Homen"){
 alterada.src=ft_m;
}else if(ft=="Mulher"){
  alterada.src=ft_f;
}else{
    alterada.src= "./imgs/rtte.png";
}
}

