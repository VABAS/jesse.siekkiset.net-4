<section id="linkkivinkit">
    <h1>Linkkivinkit</h1>
    <p class="align_justify">
    Tältä sivulta köytyy linkkejä tämän sivuston ulkopuolelle. <strong>Kaikki linkit aukeavat uuteen ikkunaan/välilehteen.</strong>
    <br>Pyrin pitämään listan ajantasalla ja poistamaan kuolleet tai epäilyttäväksi muuttuneet linkit pikaisesti.
    Mikäli täältä löytyy linkki sivustoosi ja haluat että se poistetaan, otan luonnollisesti toiveesi huomioon ja poistan linkityksen.
    Pistä vaan postia tiedot sivulta löytyvään sähköpostiosoitteeseen(jompaan kumpaan) tai palautelomakkeella.
    <br>Lukon kuva (<span class="https"></span>) linkin edessä tarkoittaa että sivusto käyttää suojattua https-yhteyttä.
    </p>
    <?php
      //$linkit=array();
      $linkit=hae_linkit($kieli);
     ?>
    <div class="vasen_palsta">
        <section>
            <h2>Muiden kotisivuja</h2>
            <?php echo $linkit['muiden_kotisivuja']; ?>
        </section>
        <section>
            <h2>Teattereita</h2>
            <?php echo $linkit['teattereita']; ?>
        </section>
        <section>
            <h2>Muita linkkejä</h2>
            <h3>Palvelut</h3>
            <?php echo $linkit['muita-palvelut']; ?>
            <h3>Uutiset</h3>
            <?php echo $linkit['muita-uutiset']; ?>
            <h3>Viihde</h3>
            <?php echo $linkit['muita-viihde']; ?>
        </section>
    </div>
    <div class="oikea_palsta">
        <section>
            <h2>Linux linkkejä</h2>
            <h3>Yleistä</h3>
            <?php echo $linkit['linux_linkkeja-yleista']; ?>
            <h3>Jakeluita</h3>
            <?php echo $linkit['linux_linkkeja-jakeluita']; ?>
        </section>
        <section>
            <h2>Ohjelmia</h2>
            <h3>Grafiikka</h3>
            <?php echo $linkit['ohjelmia-grafiikka']; ?>
            <h3>Musiikki/&Auml;änet</h3>
            <?php echo $linkit['ohjelmia-musiikkiaanet']; ?>
            <h3>Ohjelmistokehitys</h3>
            <?php echo $linkit['ohjelmia-ohjelmistokehitys']; ?>
            <h3>Muita ohjelmia</h3>
            <?php echo $linkit['ohjelmia-muita_ohjelmia']; ?>
        </section>
    </div>
</section>
