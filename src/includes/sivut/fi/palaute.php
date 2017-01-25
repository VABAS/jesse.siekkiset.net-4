<script src='https://www.google.com/recaptcha/api.js'></script>
<section class="align_center" style="width:350px;">
<h1>Palautelomake</h1>
<b>(Tähdellä merkityt kentät ovat pakollisia)</b>
    <form method="post" onsubmit="return validoi()" action="/fi/palautesub/">
        <span style="display:block; margin-bottom:5px;">
            Palautteen otsikko  <span style="color:red;">*</span><br>
            <select style="width:300px;margin-top:2px;" name="otsikko">
                <option value="Yleinen">Yleinen palaute</option>
                <option value="Virhe">Virheilmoitus</option>
            </select>
        </span>
        <span style="display:block; margin-bottom:5px;">
            Vapaa otsikko
            <br><input placeholder="Tarkempi otsikointi" type="text" name="totsikko" style="width:295px;">
        </span>
        <span style="display:block; margin-bottom:5px;">
            Nimi
            <br><input placeholder="Nimesi" type="text" name="nimi" style="width:295px;margin-top:2px;">
        </span>
        <span style="display:block; margin-bottom:5px;">
            Sähköpostiosoite <span style="color:red;">*</span>
            <br><input placeholder="tunnus@domain" type="email" name="maili" style="width:295px;margin-top:2px;" required>
        </span>
        <span style="display:block; margin-bottom:5px;">
            Viesti <span style="color:red;">*</span>
            <br><textarea name="viesti" style="width:295px;height:100px;margin-top:2px;" required></textarea>
        </span>
        <div style="display:block; margin-bottom:5px;" class="g-recaptcha" data-sitekey="6LcWJxETAAAAADmHrZ-n76hTuYsVX5tDwC7uVGBK"></div>
        <span style="display:block; margin-bottom:5px;">
            <input style="width:150px;margin-top:2px;" type="submit" value="Lähetä">
            <input style="width:150px;margin-top:2px;" type="reset" value="Tyhjennä">
        </span>
    </form>
    <?php
        if($_GET['err']=="rc") echo "<script>alert('Captchan validointi epäonnistui!')</script>";
    ?>
    <script><!-- Validointi scripti -->
        function validoi(){
            var c = grecaptcha.getResponse();
        if(c.length==0){
            alert("Vahvista ettet ole robotti!");
            return false;
        }
        else{
            return true;
        }
        }
    </script>
</section>
