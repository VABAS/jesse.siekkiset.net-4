<style>
table{
    table-layout:fixed;
    border-collapse:collapse;
}
td{
    width:20px;
    height:20px;
    border:1px solid black;
    text-align:center;
}
</style>
<section>
    <h1>Sanaristikko</h1>
    <p>
        Sanat voivat olla vasemmalta oikealle, oikealta vasemmalle, ylhäältä alas, alhaalta ylös tai viistoon.
        Valitse kirjaimet yksi kerrallaan klikkaamalla niitä ja paina alhaalta "Validoi".
        Jos sana on oikein se jää näkyviin ruudukkoon ja yliviivaantuu listasta alhaalta.
    </p>
    <div id="peli"></div>
    <div><b>Sana:</b> <class id="sana"></class></div>
    <button onclick="validoi();">Validoi</button><button onclick="ratko();">Ratkaise</button><button onclick="if(confirm('Haluatko aloittaa alusta?'))location.reload();">Aloita alusta</button>
    <div><b>Etsittävät sanat:</b><br><class id="sanalista"></class></div>
</section>
