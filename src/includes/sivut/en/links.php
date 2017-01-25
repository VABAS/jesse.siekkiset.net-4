<section id="linkkivinkit">
    <h1>Links</h1>
    <p class="align_justify">
    From this page you can find links leading outside of this site. <strong>All links open into new window/tab</strong>
    <br>I try to keep this list up-to-date and remove dead or suspicious turns taking links as soon as possible.
    If there is links to your site and you want it to be removed, I respect your demand and remove the link.
    Just drop me email to one of the addresses found at about-page or through feedback-form.
    <br>Lock sign (<span class="https"></span>) in front of the link indicates that the site linked uses secure https-protocol.
    </p>
    <?php
      $linkit=hae_linkit($kieli);
     ?>
    <div class="vasen_palsta">
        <section>
            <h2>Home pages of others</h2>
            <?php echo $linkit['muiden_kotisivuja']; ?>
        </section>
        <section>
            <h2>Theaters</h2>
            <?php echo $linkit['teattereita']; ?>
        </section>
        <section>
            <h2>Other links</h2>
            <h3>Services</h3>
            <?php echo $linkit['muita-palvelut']; ?>
            <h3>News</h3>
            <?php echo $linkit['muita-uutiset']; ?>
            <h3>Entertainment</h3>
            <?php echo $linkit['muita-viihde']; ?>
        </section>
    </div>
    <div class="oikea_palsta">
        <section>
            <h2>Linux links</h2>
            <h3>General</h3>
            <?php echo $linkit['linux_linkkeja-yleista']; ?>
            <h3>Distributions</h3>
            <?php echo $linkit['linux_linkkeja-jakeluita']; ?>
        </section>
        <section>
            <h2>Applications</h2>
            <h3>Graphis</h3>
            <?php echo $linkit['ohjelmia-grafiikka']; ?>
            <h3>Music/Sound</h3>
            <?php echo $linkit['ohjelmia-musiikkiaanet']; ?>
            <h3>Software development</h3>
            <?php echo $linkit['ohjelmia-ohjelmistokehitys']; ?>
            <h3>Other programs</h3>
            <?php echo $linkit['ohjelmia-muita_ohjelmia']; ?>
        </section>
    </div>
</section>
