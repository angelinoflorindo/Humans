import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;


Alpine.start();


// all selection

var alert_carta = document.getElementById("alert_carta")
var birthday = document.getElementById("birthday")

var carta_seguinte= document.getElementById("carta-seguinte")
var carta_voltar = document.getElementById("carta-voltar")
var report1 = document.getElementById("report1")   
var report2 = document.getElementById("report2")





// all begginng

window.onload = ()=>{
    report2.hidden =  true;
}


// data de nascimento
 
birthday.onmousemove = ()=>{
    alert_carta.hidden=false
}
birthday.onmouseout = ()=>{
    alert_carta.hidden=true
}

// carta de apresentação
carta_seguinte.onclick = ()=>{ 
    report1.hidden = true;
    report2.hidden = false
}

carta_voltar.onclick = ()=>{
    report1.hidden = false;
    report2.hidden = true
}
 


