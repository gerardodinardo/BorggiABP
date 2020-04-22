// Vue.config.silent = false //eliminar error pagina en blanco al cargar
// window.addEventListener('load', abrirDesplegables, true);
// window.addEventListener('load', SetDate, false);

function abrirDesplegables(){
    document.getElementById("coll1").click();
    document.getElementById("coll").click();
    document.getElementById("coll3").click();
    document.getElementById("coll4").click();
    document.getElementById("coll5").click();    
    document.getElementById("coll6").click();
}

// function SetDate(){
//     var date = new Date();

//     var day = date.getDate();
//     var month = date.getMonth() + 1;
//     var year = date.getFullYear();
//     if (month < 10) month = "0" + month;
//     if (day < 10) day = "0" + day;

//     var today = year + "-" + month + "-" + day;


//     document.getElementById('myDate').value = today;
// }


// JS Para desplegar div tipo de alertant segun select menu
function admSelectCheck(nameSelect)
{
    console.log(nameSelect);
    if(nameSelect){
        admOptionValue = document.getElementById("centreSanitari").value;
        if(admOptionValue == nameSelect.value){
            document.getElementById("divcentreSanitari").style.display = "block";
        }
        else{
            document.getElementById("divcentreSanitari").style.display = "none";
        }
        // ******************
        admOptionValue = document.getElementById("alertantVip").value;
        if(admOptionValue == nameSelect.value){
            document.getElementById("divalertantVip").style.display = "block";
        }
        else{
            document.getElementById("divalertantVip").style.display = "none";
        }
    }
    else{
        document.getElementById("divcentreSanitari").style.display = "none";
        document.getElementById("divalertantVip").style.display = "none";
    }
}

