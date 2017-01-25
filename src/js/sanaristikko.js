function lataa_uudelleen(){
    if(confirm('Haluatko aloittaa alusta?'))location.reload();
}
function randomi_kirjain(){//Palauttaa randomin kirjaimen aakkosista
    var kirjaimet=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","Å","Ä","Ö"];
    return kirjaimet[Math.floor((Math.random() * kirjaimet.length))];
}
var valitut=[];
function valittujen_maara(){//Palauttaa valittujen kirjainten määrän
    return valitut.length;
}
var ratkottu=false;
function ratko(){
    if(confirm("Haluatko varmasti näyttää vastaukset? Et voi jatkaa täyttämistä kun ratkaisut ovat näkyvissä. Jos tulit toisiin aatoksiin napsauta peruuta/cancel")){
        var kaikki=document.getElementsByClassName('käytössä');
        for(var i=0;i<kaikki.length;i++) kaikki[i].style="background-color:yellow;";
        ratkottu=true;
    }
}
function klikki(elementti,x,y){//Elementin klikkaus
    if(ratkottu) return
    function valinta_validi(){
        var vm_v=valittujen_maara()-1;
        if(valittujen_maara()==0) return true;
        else if(valittujen_maara()==1){
            x_muutos=Math.abs(valitut[vm_v][1]-x);
            y_muutos=Math.abs(valitut[vm_v][2]-y);
            if((x_muutos+y_muutos)>=1 && (x_muutos+y_muutos)<=2) return true;
            else return false;
        }
        else{
            x_muutos=valitut[vm_v][1]-x;
            y_muutos=valitut[vm_v][2]-y;
            x_muutos_vaadittu=valitut[vm_v-1][1]-valitut[vm_v][1];
            y_muutos_vaadittu=valitut[vm_v-1][2]-valitut[vm_v][2];
            if(x_muutos==x_muutos_vaadittu && y_muutos==y_muutos_vaadittu) return true;
            else return false;
        }
    }
    if(valinta_validi()){
        elementti.style="background-color:red;font-weight:bold;";
        valitut[valittujen_maara()]=[elementti.innerHTML,x,y,elementti];
        document.getElementById('sana').innerHTML="";
        for(var i=0;i<valittujen_maara();i++){
            document.getElementById('sana').innerHTML=document.getElementById('sana').innerHTML+valitut[i][0];
        }
    }
    else alert("Valitse peräkkäisiä kirjaimia!");
}
var sanat=["AKVAARIO","INSINÖÖRI","AUTO","MOOTTORITIE","ESITYSTEKNIIKKA","VALOASENNUS","VAUVANRUOKA","IHME","PUHELIN","TIETOKONE","OTUS","ONNI","KOIRA","PIANO","MUSIIKKI","LIHAPULLAKASTIKE","SAUNA","KIRJA","KOULU","JÄÄKIEKKO","JAVASCRIPT"];
sanat.sort();
function sana_oikein(sana){//Tarkistaa onko sana oikein
    for(var i=0;i<sanat.length;i++){
        if(sana==sanat[i]) return true;
    }
    return false;
}
function validoi(){
    var sana=document.getElementById('sana').innerHTML;
    if(!(sana=="")){
        if(sana_oikein(sana)){
            alert("Sana oli oikein");
            for(var i=0;i<valittujen_maara();i++){
                valitut[i][3].style="background-color:green;";
            }
            document.getElementById(sana).style="text-decoration:line-through;color:grey;";
        }
        else {
            alert("Sana "+sana+" ei ole listassa");
            for(var i=0;i<valittujen_maara();i++){
                valitut[i][3].style="";
            }
        }
        valitut=[];
        document.getElementById('sana').innerHTML="";
    }
}
window.onload=function(){
    var koko=25;
    var sisalto="<table class='align_center'>";
    for(var i=0;i<koko;i++){
        sisalto=sisalto+"<tr>";
        for(var i2=0;i2<koko;i2++){
            sisalto=sisalto+"<td id='kirjain"+i+"-"+i2+"' onclick='klikki(this,"+i+","+i2+")'>"+randomi_kirjain()+"</td>";
        }
        sisalto=sisalto+"</tr>\n";
    }
    sisalto=sisalto+"\n</table>";
    document.getElementById('peli').innerHTML=sisalto;
    //Asetetaan sanat tauluun
    for(var i=0;i<sanat.length;i++){
        var t=true;
        while(t){
            var rand_x=Math.floor((Math.random() * koko));
            var rand_y=Math.floor((Math.random() * koko));
            var suunta=Math.floor((Math.random() * 8));
            var sanan_pituus=sanat[i].length;
            if(suunta==0){//Ylhäältä alas
                if(!(rand_x+sanan_pituus>=koko)){
                    var kaytossa=false;
                    for(var i2=0;i2<sanan_pituus;i2++){//Häiritsevän päällekkäisyyden esto
                        var ruutu=document.getElementById('kirjain'+(rand_x+i2)+"-"+rand_y);
                        if(ruutu.className=="käytössä" && ruutu.innerHTML!=sanat[i][i2]) kaytossa=true;
                    }
                    if(!kaytossa){
                        for(var i2=0;i2<sanan_pituus;i2++){
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).innerHTML=sanat[i][i2];
                            //document.getElementById('kirjain'+rand_x+"-"+rand_y).style="background-color:yellow";
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).className="käytössä";
                            rand_x++;
                            t=false;
                        }
                    }
                }
            }
            else if(suunta==1){//Vasemmalta oikealle
                if(!(rand_y+sanan_pituus>=koko)){
                    var kaytossa=false;
                    for(var i2=0;i2<sanan_pituus;i2++){//Häiritsevän päällekkäisyyden esto
                        var ruutu=document.getElementById('kirjain'+rand_x+"-"+(rand_y+i2));
                        if(ruutu.className=="käytössä" && ruutu.innerHTML!=sanat[i][i2]) kaytossa=true;
                    }
                    if(!kaytossa){
                        for(var i2=0;i2<sanan_pituus;i2++){
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).innerHTML=sanat[i][i2];
                            //document.getElementById('kirjain'+rand_x+"-"+rand_y).style="background-color:yellow";
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).className="käytössä";
                            rand_y++;
                            t=false;
                        }
                    }
                }
            }
            else if(suunta==2){//Alhaalta ylös
                if(!(rand_x-sanan_pituus<0)){
                    var kaytossa=false;
                    for(var i2=sanan_pituus-1;i2>-1;i2--){//Häiritsevän päällekkäisyyden esto
                        var ruutu=document.getElementById('kirjain'+(rand_x-i2)+"-"+rand_y);
                        if(ruutu.className=="käytössä" && ruutu.innerHTML!=sanat[i][i2]) kaytossa=true;
                    }
                    if(!kaytossa){
                        for(var i2=0;i2<sanan_pituus;i2++){
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).innerHTML=sanat[i][i2];
                            //document.getElementById('kirjain'+rand_x+"-"+rand_y).style="background-color:yellow";
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).className="käytössä";
                            rand_x--;
                            t=false;
                        }
                    }
                }
            }
            else if(suunta==3){//Oikealta vasemmalle
                if(!(rand_y-sanan_pituus<0)){
                    var kaytossa=false;
                    for(var i2=sanan_pituus-1;i2>-1;i2--){//Häiritsevän päällekkäisyyden esto
                        var ruutu=document.getElementById('kirjain'+rand_x+"-"+(rand_y-i2));
                        if(ruutu.className=="käytössä" && ruutu.innerHTML!=sanat[i][i2]) kaytossa=true;
                    }
                    if(!kaytossa){
                        for(var i2=0;i2<sanan_pituus;i2++){
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).innerHTML=sanat[i][i2];
                            //document.getElementById('kirjain'+rand_x+"-"+rand_y).style="background-color:yellow";
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).className="käytössä";
                            rand_y--;
                            t=false;
                        }
                    }
                }
            }
            else if(suunta==4){//Oikealle alaviistoon
                if(!(rand_x+sanan_pituus>=koko) && !(rand_y+sanan_pituus>=koko)){
                    var kaytossa=false;
                    for(var i2=0;i2<sanan_pituus;i2++){//Häiritsevän päällekkäisyyden esto
                        var ruutu=document.getElementById('kirjain'+(rand_x+i2)+"-"+(rand_y+i2));
                        if(ruutu.className=="käytössä" && ruutu.innerHTML!=sanat[i][i2]) kaytossa=true;
                    }
                    if(!kaytossa){
                        for(var i2=0;i2<sanan_pituus;i2++){
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).innerHTML=sanat[i][i2];
                            //document.getElementById('kirjain'+rand_x+"-"+rand_y).style="background-color:yellow";
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).className="käytössä";
                            rand_x++;
                            rand_y++;
                            t=false;
                        }
                    }
                }
            }
            else if(suunta==5){//Vasemmalle yläviistoon
                if(!(rand_x-sanan_pituus<0) && !(rand_y-sanan_pituus<0)){
                    var kaytossa=false;
                    for(var i2=sanan_pituus-1;i2>-1;i2--){//Häiritsevän päällekkäisyyden esto
                        var ruutu=document.getElementById('kirjain'+(rand_x-i2)+"-"+(rand_y-i2));
                        if(ruutu.className=="käytössä" && ruutu.innerHTML!=sanat[i][i2]) kaytossa=true;
                    }
                    if(!kaytossa){
                        for(var i2=0;i2<sanan_pituus;i2++){
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).innerHTML=sanat[i][i2];
                            //document.getElementById('kirjain'+rand_x+"-"+rand_y).style="background-color:yellow";
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).className="käytössä";
                            rand_x--;
                            rand_y--;
                            t=false;
                        }
                    }
                }
            }
            else if(suunta==6){//Vasemmalle alaviistoon
                if(!(rand_x+sanan_pituus>=koko) && !(rand_y-sanan_pituus<0)){
                    var kaytossa=false;
                    for(var i2=0;i2<sanan_pituus;i2++){//Häiritsevän päällekkäisyyden esto
                        var ruutu=document.getElementById('kirjain'+(rand_x+i2)+"-"+(rand_y-i2));
                        if(ruutu.className=="käytössä" && ruutu.innerHTML!=sanat[i][i2]) kaytossa=true;
                    }
                    if(!kaytossa){
                        for(var i2=0;i2<sanan_pituus;i2++){
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).innerHTML=sanat[i][i2];
                            //document.getElementById('kirjain'+rand_x+"-"+rand_y).style="background-color:yellow";
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).className="käytössä";
                            rand_x++;
                            rand_y--;
                            t=false;
                        }
                    }
                }
            }
            else if(suunta==7){//Oikealle yläviistoon
                if(!(rand_x-sanan_pituus<0) && !(rand_y+sanan_pituus>=koko)){
                    var kaytossa=false;
                    for(var i2=0;i2<sanan_pituus;i2++){//Häiritsevän päällekkäisyyden esto
                        var ruutu=document.getElementById('kirjain'+(rand_x-i2)+"-"+(rand_y+i2));
                        if(ruutu.className=="käytössä" && ruutu.innerHTML!=sanat[i][i2]) kaytossa=true;
                    }
                    if(!kaytossa){
                        for(var i2=0;i2<sanan_pituus;i2++){
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).innerHTML=sanat[i][i2];
                            //document.getElementById('kirjain'+rand_x+"-"+rand_y).style="background-color:yellow";
                            document.getElementById('kirjain'+rand_x+"-"+rand_y).className="käytössä";
                            rand_x--;
                            rand_y++;
                            t=false;
                        }
                    }
                }
            }
        }
        //Kirjoitetaan sana sanalistaan
        var sanalista=document.getElementById('sanalista');
        sanalista.innerHTML=sanalista.innerHTML+"<class id='"+sanat[i]+"'>"+sanat[i]+"</class><br>";
    }
}
