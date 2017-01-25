var ajastin=5000;//Sulkijan odotusaika 5000ms
var c=0;
function muuta(d){
    if(c==0){//Jos mitään ei ole klikattu
        d.parentNode.className=d.parentNode.className+"valikko_klikattu";//Lisätään klikatun elementin isäntä-elementille class valikko_klikattu
        c=d;//Vaihdetaan viimeksi klikattu(var c) nyt auki olevaksi objektiksi
    }
    else if(c==d){//Jos klikataan toisen kerran samaa objektia
        d.parentNode.className=d.parentNode.className.replace(/\bvalikko_klikattu\b/,'');//Ja class 'valikko_klikattu' aikaisemmin klikatulta elementiltä
        c=0;//Asetetaan viimeksi klikattu(var c) nollaksi
    }
    else{//Muutoin on klikattu jotain muuta kuin mikä on auki. Silloin asetetaan nyt klikatulle class 'valikko_klikattu' ja poistetaan se auki olevalta objektilta
        d.parentNode.className=d.parentNode.className+"valikko_klikattu";//Lisätään klikatun elementin isäntä-elementille class valikko_klikattu
        c.parentNode.className=c.parentNode.className.replace(/\bvalikko_klikattu\b/,'');//Ja poistetaan se aikaisemmalta elementiltä
        c=d;//Vaihdetaan viimeksi klikattu(var c) nyt auki olevaksi objektiksi
    }
}
