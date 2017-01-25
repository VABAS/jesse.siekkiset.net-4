<p><br>02.12.2015</p>
<p style="color:red;font-weight:bold;">
    HUOM! Sivujen kehityksen mentyä eteenpäin nämä materiaalit eivät enää pidä kaikilta osin paikkaansa!
</p>
<section class="align_justify">
    <h1>Harjoitustyön loppuraportti</h1>
    <p>
        Sivut löytyvät osoitteesta <a href="http://jesse.siekkiset.net/">http://jesse.siekkiset.net/</a>
    </p>
    <section>
        <h2>Sivuston rakenne</h2>
        <section>
            <h3>Etusivu</h3>
            <p>
                Johdatus sivuston sisältöön sekä yleistiedot sivujen aiheesta, eli minusta itsestäni.
            </p>
        </section>
        <section>
            <h3>Harrastukset</h3>
            <p>
                Kertomuksia harrastuksistani ja miksi niistä pidän.
                Miten suhtaudun niihin sekä miten, missä ja milloin niitä harrastan.
            </p>
        </section>
        <section>
            <h3>Koulutus</h3>
            <p>
                Yleistiedot hankkimistani pätevyyksistä ja ammateista.
                Myös korttikoulutukset ja muu osaaminen lueteltuna.
            </p>
        </section>
        <section>
            <h3>Linkkivinkit</h3>
            <p>
                Linkkejä tämän sivuston ulkopuolelle esim. kavereiden kotisivuille tai muuten vaan (omasta mielestä:) kiinnostaviin sivuihin.
            </p>
        </section>
        <section>
            <h3>Tietoja</h3>
            <p>
                Omat yhteystiedot ja tietoja sivustosta kuten käytetyt tekniikat ja harjoitustyön yhteydessä tehty materiaali.
            </p>
        </section>
        <section>
            <h3>Palaute</h3>
            <p>
                Palautelomake joka lähettää palautteet minulle sähköpostilla.
                Käytössä Googlen captcha spammin estämiseksi.
            </p>
        </section>
    </section>
    <section>
        <h2>Tyylittelyt ja JavaScript</h2>
        <p>
            Sivuston tyylittelyt on jaettu erillisiin tiedostoihin. Jako on seuraava:
        </p>
        <ul class="lista_lappari">
            <li><a href="tyylit/elementit.css" target="_blank">Elementit</a> - Esim. &lt;main&gt;, &lt;section&gt;, &lt;h1&gt;, &lt;h2&gt; jne... poislukien &lt;nav&gt;</li>
            <li><a href="tyylit/valikko.css" target="_blank">Valikko</a> - Valikko(&lt;nav&gt;)-elementin määrittelyt, mouseoverit jne</li>
            <li><a href="tyylit/classt.css" target="_blank">Class-määrittelyt</a> - Näitä on paljon...</li>
            <li><a href="tyylit/idt.css" target="_blank">ID-määrittelyt</a></li>
        </ul>
        <p>
            Tällaisen jaon olen toteuttanut helpottaakseni hieman oikean asian löytämistä jos/kun muutoksia on tehtävä.
            Lisäksi yksittäisen tiedoston sisällä olen jaotellut toistensa kaltaiset tai muulla tavalla toisiinsa liittyvät määrittelyt lähekkäin ja kuvannut ryhmän tarkoituksen ja määrittelyt kommenteilla.
            <br>
            Sivusto sisältää pätkän javascriptiä jolla hoidettiin <a href="harrastukset" target="_blank">harrastukset</a>-sivulla et-produktioiden lisätietojen click-tapahtuman käsittely, koska tätä ei nykyisellään pysty toteuttamaan CSS- tai html-merkkauksessa.
            Kyseisen scriptin pääset näkemään <a href="js/harrastukset.js" target="_blank">tästä</a>.
        </p>
    </section>
    <section>
        <h2>Metatiedot</h2>
        <p>
            Sivustolla on jokaiselle sivulle annettu samat koneluettavassa muodossa olevat tiedot eli metatiedot.
            Metatiedot sisältävät seuraavaa:
        </p>
        <ul class="lista_lappari">
            <li>Charset - Merkistökoodaus: UTF-8</li>
            <li>Description - Kuvaus: Insinööriopiskelija Siekkisen kotisivut</li>
            <li>Keywords - Avainsanat: Jesse, Siekkinen, Kotisivut</li>
            <li>Author - Julkaisija/omistaja: Jesse Siekkinen</li>
            <li>Robots - Ohjeita hakuboteille: nofollow - pyytää että robotit eivät seuraisi linkkejä</li>
        </ul>
        <p>
            Olen itseasiassa aina ihmetellyt missä näitä metatietoja käytetään, koska esimerkiksi googlebot näyttää sivuston kuvauksen sivulla olevasta tekstistä.
            Löysin kuitenkin puolivahingossa hetki sitten ainakin yhden paikan jossa näitä tietoja käytetään :)
            Nimittäin esim. WhattsApp lisää linkittäessä sivuston kuvauksen juurikin metatietojen <i>Description</i>-kentän mukaan.
            Kuva alla.
            <br>
            <img src="/kuvat/wapp-meta.jpg" alt="WApp Meta">
            <br>
            Ja tämän jälkeen asiaa tarkemmin tutkiessani huomasin että myös Facebook käyttää näitä metatietoja kun linkittää sivustoon
            (ks kuva alla) ja hakee kuvauksen lisäksi myös <i>author</i>-kentän tiedot.
            <br>
            <img src="/kuvat/fb-meta.PNG" alt="FB Meta">
        </p>
    </section>
    <section>
        <h2>Testaamistulokset</h2>
        <p>
            Sivusto on vahvasti testattu toimivaksi Firefoxilla ja kuten olettaa saattaa, suurimmalla osalla selaimista sivut toimivat tämän myötä lähes täydellisesti.
            Internet Explorer aiheutti päänvaivaa esimerkiksi <a href="tiedot" target="_blank">tiedot</a>-sivun kanssa koska sillä on ilmeisesti oma tapansa käsitellä <i>float</i>-määriteltujen elementtien sijoittelua.
            Ongelma kuitenkin ratkesi lisäämällä CSS-määrittelyllä sivujen <i>main</i>-elementin jälkeen tyhjä elementti jolle määritettiin <i>clear:both</i> (ks kuva alla).
            <br><img src="/kuvat/iemulkkaus.png" alt="IE mulkkaus"><br>
            Sivut toimivatkin varmasti seuraavilla selaimilla (1.12.2015):
        </p>
        <ul class="lista_lappari">
            <li>Mozilla Firefox</li>
            <li>Google Chrome</li>
            <li>MS Edge</li>
            <li>MS Internet Explorer</li>
        </ul>
    </section>
    <section>
        <h2>Validointi</h2>
        <p>
            Kaikki aikaisemmin mainitut sivut ja tämä sivu menivät viimeisimmässä versiossa läpi W3C:n html5- ja CSS-validaattoreista.
            Seuraavassa kuvakaappaukset html-validaattorin tuloksista:
        </p>
            <div class="vasen_palsta">
                <section>
                    <h3>Etusivu</h3>
                    <img src="/materiaalit/validointi/etusivu_scaled.jpg" alt="Etusivun validointi">
                </section>
                <section>
                    <h3>Koulutus</h3>
                    <img src="/materiaalit/validointi/koulutus_scaled.jpg" alt="Koulutussivun validointi">
                </section>
                <section>
                    <h3>Tietoja</h3>
                    <img src="/materiaalit/validointi/tiedot_scaled.jpg" alt="Tietosivun validointi">
                </section>
                <section>
                    <h3>Kuvasivu</h3>
                    <img src="/materiaalit/validointi/kuvasivu_scaled.jpg" alt="Kuvasivun validointi">
                </section>
            </div>
            <div class="oikea_palsta">
                <section>
                    <h3>Harrastukset</h3>
                    <img src="/materiaalit/validointi/harrastukset_scaled.jpg" alt="Harrastussivun validointi">
                </section>
                <section>
                    <h3>Linkkivinkit</h3>
                    <img src="/materiaalit/validointi/linkkivinkit_scaled.jpg" alt="Linkkivinkkisivun validointi">
                </section>
                <section>
                    <h3>Palaute</h3>
                    <img src="/materiaalit/validointi/palaute_scaled.jpg" alt="Palautesivun validointi">
                </section>
                <section>
                    <h3>Loppuraportti (tämä sivu)</h3>
                    <img src="/materiaalit/validointi/loppuraportti_scaled.jpg" alt="Loppuraportin validointi">
                </section>
            </div>
        <p style="clear:both;">
            CSS-validoinnin voit suorittaa niin halutessasi <a href="https://jigsaw.w3.org/css-validator/validator?uri=jesse.siekkiset.net" target="_blank">tästä</a>.
        </p>
    </section>
    <section>
        <h2>Prosessin kuvaus</h2>
        <p>
            Projektin vaiheet olivat minun tapauksessani suurilta osin hyvin sulautuneet toisiinsa ja saattoivat vaihdella paikkoja.
            Kykenen kuitenkin erottelemaan ja järjestämään seuraavat vaiheet projektista (tunnit erittäin karkeita arvioita):
        </p>
        <ol>
            <li>Ideointi/Suunnittelu, 3-5h</li>
            <li>Tekninen toteutus, 10-15h</li>
            <li>Sisällön tuotto, 8-10h</li>
        </ol>
        <p>
            Näiden jälkeen tuli vielä "<i>jonkunlainen tekninen ja sisällöllinen hionta</i>"-vaihe jossa keskityin hiomaan kieliasua ja tekniikkaa sekä ensivaikutelmaa.
            Tähän vaiheeseen kuului myös sivujen vetäminen validaattorin lävitse ja tulleisiin virheisiin puuttuminen.
            Loppuraportin tekoon käytin muutaman tunnin.
        </p>
    </section>
    <section>
        <h2>Itsearviointi</h2>
        <section>
            <h3>Ulkonäkö</h3>
            <p>
                Olen luonnollisesti tehnyt sivut siten että ne miellyttävät vähintään omaa silmääni.
                Värimaailman olen ottanut suoraan aikaisemmilta kotisivuiltani, koska sen olen todennut hyväksi ja se miellyttää silmääni.
                Myös sivuston layout on osittain samaa perua.
                Muutoksiakin on kuitenkin paljon mm. otsikoiden tyylittelyssä ja kirjasimissa.
                <br>Ohjeissa pyydettiin ottamaan kantaa onko yritetty tehdä omaa sen sijaan, että käyttäisin harjoituksissa tehtyä 'leiskaa'.
                Olen tehnyt nämä sivut alusta alkaen itse ilman mitään ulkopuolista layout-ideointia ja tämän kaltainen layout miellyttää itseäni.
            </p>
        </section>
        <section>
            <h3>Sisältö</h3>
            <p>
                Kohderyhmässä on huomioitu alussa kohderyhmiksi asettamani kohderyhmät.
                <br>Kaikki sivut sisältävät jotain ja jotkut varsin runsaastikkin asiaa.
                Sivustolla on useita sivuja joita olen tehnyt omaksi tai valittujen henkilöiden huviksi ja joita en edes sisällytä tähän harjoitustyöhön koska en katso sen olevan olennaista.
                <br>Sivujen käyttö onnistuu tällä hetkellä niin mobiili- kuin työpöytäselaimillakin.
                Joskaan en ole varsinaisesti suunnitellut sivuja käytettäväksi mobiilissa eikä varsinaista mobiiliversioita sivuista ole olemassa.
                Olen kuitenkin testannut sivut myös muutamilla mobiiliselaimilla ja korjannut jos siihen on ollut tarvetta.
                Sanottakon että mobiiliversion rakennus olisi tarkoitus tehdä joskus tulevaisuudessa.
            </p>
        </section>
        <section>
            <h3>Tekniikka</h3>
            <p>
                Sivustolla on käytetty PHP-HTML5-CSS yhdistelmää, jota on maustettu muutamassa tapauksessa JavaScriptillä.
                Kaikki sivut vastaavat HTML5 standardia ja eivät tuota yhtäkään virhettä tai varoitusta ajettaessa W3C:n validaattorin lävitse.
                Myös CSS on validia ja tuottaa vihreän tuloksen validaattorista ajettaessa.
                Sivuston CSS-tiedostot on jaettu kehittäjää ajatellen eri tiedostoihin.
                Tästä tarkemmin aikaisemmassa tyyllittelyt osiossa.
                <br>Sivusto toimii pieniä ulkonäöllisiä poikkeamia lukuunottamatta täysin samalla tavalla kaikilla testatuilla selaimilla.
                <br>Käyttäjälle näkyvän sivun lisäksi olen oman henkisen hyvinvoinnin takaamiseksi pitänyt myös koodin selkeänä ja olen kommentoinut sitä parhaani mukaan.
                Olen ottanut koodin kommentoinnissa huomioon myös sivulle mahdollisesti eksyvät koodista kiinnostuneet kuten harjoitustyötä tarkastavan opettajan.
                Tästä syystä olen selittänyt esimerkiksi CSS-tiedostoissa varsin tarkasti ja joltain kannalta katsottuna ehkä jopa tarpeettoman tarkasti yksittäisiä määrittelyjä.
                <br>Sivut on suunniteltu toimimaan täysin samalla tavalla käyttäjän näyttöresoluutiosta riippumatta.
                Suuri tekijä tässä asiassa on sivujen sisällön määrittäminen pysyväleveyksiseksi (900px).
                Olen huomannut tämän tavan hyväksi ja sivut toimivat yhtäläisesti niin mobiili-resoluutiolla kuin muillakin.
                Joskin hyvin laajalla näytöllä varsinainen sivun sisältö jää kovin kapeaksi marginaalien syödessä ylimääräisen tilan, mutta eipä nettisivuja ole tarkoitus laajakuvanäytöille optimoidakkaan.
                <br>Alunpitäen tarkoituksenani ei ollut laisinkaan ottaa ulkoisia fontteja käyttöön.
                Sivustoa tehdessäni huomasin kuitenkin eri käyttöjärjestelmien oletusfonttien aiheuttavan muutoksia tekstin sijoittumiseen sivuilla häiritsevässä määrin.
                Tästä rohkaistuneena kävin kahlaamaan Googlen fonttivalikoimaa ja koriin tarttui <i>Libre Baskerville</i> ensimmäisen ja toisen tason otsikoille sekä <i>Lato</i> kaikelle muulle.
                Ajattelin että linkeillä voisi vielä etsiä omansa, mutta se ei ehtinyt tämän työn aikatauluun.
            </p>
        </section>
        <section>
            <h2>Lopuksi</h2>
            <p>
                Olen tehnyt sivuston vastaamaan tehtävänannossa määriteltyjä kriteerejä.
                <br>Edelliseen lauseeseen ja itsearviointiin tukeutuen ansaitsisin mielestäni arvosanan <?php /* 4,5 */ ?>--- koska
                <span style="display:block;text-indent:20px;color:green;">+ Olen kunnioittanut standardia</span>
                <span style="display:block;text-indent:20px;color:green;">+ Olen tehnyt grafiikat itse tai käyttänyt avointa materiaalia</span>
                <span style="display:block;text-indent:20px;color:green;">+ Olen kirjoittanut helposti luettavaa koodia</span>
                <span style="display:block;text-indent:20px;color:green;">+ Olen hylännyt omia virheellisiä tulkintojani, eli oppinut</span>
                <span style="display:block;text-indent:20px;color:red;">- sisällössä on paikoittain parannettavaa</span>
            </p>
        </section>
    </section>
</section>
