var ajastin=5000;//Sulkijan odotusaika 5000ms
var c=0;
var sulkija;
function avaa(d){
    if(c==0){//Jos mitään ei ole klikattu
        d.parentNode.className=d.parentNode.className+"tt_klikattu";//Lisätään klikatun elementin isäntä-elementille class tt_klikattu
        c=d;//Vaihdetaan viimeksi klikattu(var c) nyt auki olevaksi objektiksi
        sulkija = setTimeout(avaa,ajastin,c);//Ajastetaan sulkeutuminen
    }
    else if(c==d){//Jos klikataan toisen kerran samaa objektia
        d.parentNode.className=d.parentNode.className.replace(/\btt_klikattu\b/,'');//Ja class 'tt_klikattu' aikaisemmin klikatulta elementiltä
        c=0;//Asetetaan viimeksi klikattu(var c) nollaksi
        clearTimeout(sulkija);//Tyhjennetään aikeisempi sulkija-ajastin
    }
    else{//Muutoin on klikattu jotain muuta kuin mikä on auki. Silloin asetetaan nyt klikatulle class 'tt_klikattu' ja poistetaan se auki olevalta objektilta
        d.parentNode.className=d.parentNode.className+"tt_klikattu";//Lisätään klikatun elementin isäntä-elementille class tt_klikattu
        c.parentNode.className=c.parentNode.className.replace(/\btt_klikattu\b/,'');//Ja poistetaan se aikaisemmalta elementiltä
        c=d;//Vaihdetaan viimeksi klikattu(var c) nyt auki olevaksi objektiksi
        clearTimeout(sulkija);//Tyhjennetään aikeisempi sulkija-ajastin
        sulkija = setTimeout(avaa,ajastin,c);//Ajastetaan sulkeutuminen
    }
}
