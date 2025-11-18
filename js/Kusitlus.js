//vastus 1
function ansambleid(){
    let abba=document.getElementById("abba");
    let Moderntalking=document.getElementById("Moderntalking");
    let Queen=document.getElementById("Queen");
    let nirvana=document.getElementById("nirvana");

    let v1 = document.getElementById("vastus1");

    let valik="";
    if(abba.checked){
        valik+=abba.value+", ";
    }
    if(Moderntalking.checked){
        valik+=Moderntalking.value+", ";
    }
    if(Queen.checked){
        valik+=Queen.value+", ";
    }
    if(nirvana.checked){
        valik+=nirvana.value+", ";
    }
    v1.innerHTML="Sa valisid "+valik;
}

//Vastus 2
function SinuArvade(){
    let arvate=document.getElementById("arvate");
    let v2=document.getElementById("vastus2");

    v2.innerText="Sa kirjutasid: "+arvate.value;
}
//vastus 3
function sliderLuugub(){
    let v4 = document.getElementById("vastus3");
    let slider = document.getElementById("slider");

    v4.innerText = "Sa kuulad muusikat " + slider.value + " tundi päevas";
}

//vastus 4

function valiRadio(){
    let ei = document.getElementById("ei");
    let jah = document.getElementById("jah");
    let v4=document.getElementById("vastus4");

    if (ei.checked) {
        v4.innerHTML = ei.value;

    } else if (jah.checked) {
        v4.innerHTML = jah.value;

    } else {
        v4.innerHTML = "Palun vali oma vastus!";
    }
}

//vastus 5
function kirjutajaamu(){
    let grupp=document.getElementById("grupp");
    let v5=document.getElementById("vastus5");

    v5.innerText="Sa kirjutasid: "+grupp.value;
}
//vastus 6
//vastus 6 - ИСПРАВЛЕННАЯ ВЕРСИЯ
function valiStiil(){
    let rock=document.getElementById("rock");
    let hardrock=document.getElementById("hardrock");
    let metall=document.getElementById("metall");
    let newrock=document.getElementById("newrock");
    let newmetall=document.getElementById("newmetall");
    let heavymetall=document.getElementById("heavymetall");
    let rockandroll=document.getElementById("rockandroll");

    let v6 = document.getElementById("vastus6");

    let valik2="";

    if(rock.checked){
        valik2=rock.value;
    }
    else if(hardrock.checked){
        valik2=hardrock.value;
    }
    else if(metall.checked){
        valik2=metall.value;
    }
    else if(newrock.checked){
        valik2=newrock.value;
    }
    else if(newmetall.checked){
        valik2=newmetall.value;
    }
    else if (heavymetall.checked){
        valik2=heavymetall.value;
    }
    else if(rockandroll.checked){
        valik2=rockandroll.value;
    }

    v6.innerHTML="Sa kõige rohkem kuulad: "+valik2;
}
// Salvesta vastused
function saadaVastused(){
    let abba=document.getElementById("abba");
    let Moderntalking=document.getElementById("Moderntalking");
    let Queen=document.getElementById("Queen");
    let nirvana=document.getElementById("nirvana");
    let ansamblid="";

    if(abba.checked){ ansamblid+=abba.value+", "; }
    if(Moderntalking.checked){ ansamblid+=Moderntalking.value+", "; }
    if(Queen.checked){ ansamblid+=Queen.value+", "; }
    if(nirvana.checked){ ansamblid+=nirvana.value+", "; }

    let arvamus=document.getElementById("arvate").value;

    let tunnid=document.getElementById("slider").value;

    let jah=document.getElementById("jah");
    let ei=document.getElementById("ei");
    let raadio="";
    if(jah.checked){ raadio=jah.value; }
    else if(ei.checked){ raadio=ei.value; }
    else{ raadio="Pole valitud"; }

    let jaamad=document.getElementById("grupp").value;

    let rock=document.getElementById("rock");
    let hardrock=document.getElementById("hardrock");
    let metall=document.getElementById("metall");
    let heavymetall=document.getElementById("heavymetall");
    let newmetall=document.getElementById("newmetall");
    let newrock=document.getElementById("newrock");
    let rockandroll=document.getElementById("rockandroll");
    let stiil="";

    if(rock.checked){ stiil+=rock.value; }
    if(hardrock.checked){ stiil+=hardrock.value; }
    if(metall.checked){ stiil+=metall.value; }
    if(heavymetall.checked){ stiil+=heavymetall.value; }
    if(newmetall.checked){ stiil+=newmetall.value; }
    if(newrock.checked){ stiil+=newrock.value; }
    if(rockandroll.checked){ stiil+=rockandroll.value; }

    let kokku=document.getElementById("kokkuvote");
    kokku.innerText=
        "Ansamblid: " + ansamblid + "\n" +
        "Arvamus: " + arvamus + "\n" +
        "Tunnid: " + tunnid + "\n" +
        "Raadio: " + raadio + "\n" +
        "Jaamad: " + jaamad + "\n" +
        "Stiil: " + stiil;
}
//Puhastamine
function puhasta() {
    document.getElementById("abba").checked = false;
    document.getElementById("Moderntalking").checked = false;
    document.getElementById("Queen").checked = false;
    document.getElementById("nirvana").checked = false;
    document.getElementById("jah").checked = false;
    document.getElementById("ei").checked = false;
    document.getElementById("arvate").value = "";
    document.getElementById("grupp").value = "";
    document.getElementById("slider").value = 0;
    document.getElementById("vastus1").innerText = "";
    document.getElementById("vastus2").innerText = "";
    document.getElementById("vastus3").innerText = "";
    document.getElementById("vastus4").innerText = "";
    document.getElementById("vastus5").innerText = "";
    document.getElementById("vastus6").innerText = "";
    document.getElementById("kokkuvote").innerText = "";
}