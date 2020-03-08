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
        admOptionValue = document.getElementById("personaAfectada").value;
        if(admOptionValue == nameSelect.value){
            document.getElementById("divpersonaAfectada").style.display = "block";
        }
        else{
            document.getElementById("divpersonaAfectada").style.display = "none";
        }
        // ******************
        admOptionValue = document.getElementById("entornAfectat").value;
        if(admOptionValue == nameSelect.value){
            document.getElementById("diventornAfectat").style.display = "block";
        }
        else{
            document.getElementById("diventornAfectat").style.display = "none";
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
        document.getElementById("divpersonaAfectada").style.display = "none";
        document.getElementById("diventornAfectat").style.display = "none";
        document.getElementById("divalertantVip").style.display = "none";
    }
}