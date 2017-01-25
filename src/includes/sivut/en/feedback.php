<script src='https://www.google.com/recaptcha/api.js'></script>
<section class="align_center" style="width:350px;">
<h1>Feedback form</h1>
<b>(Fields marked with star are mandatory)</b>
    <form method="post" onsubmit="return validoi()" action="/en/feedbacksubmit/">
        <span style="display:block; margin-bottom:5px;">
            Subject of feedback  <span style="color:red;">*</span><br>
            <select style="width:300px;margin-top:2px;" name="otsikko">
                <option value="Yleinen">General feedback</option>
                <option value="Virhe">Error report</option>
            </select>
        </span>
        <span style="display:block; margin-bottom:5px;">
            Free heading
            <br><input placeholder="Additional heading" type="text" name="totsikko" style="width:295px;">
        </span>
        <span style="display:block; margin-bottom:5px;">
            Name
            <br><input placeholder="Your name" type="text" name="nimi" style="width:295px;margin-top:2px;">
        </span>
        <span style="display:block; margin-bottom:5px;">
            Email <span style="color:red;">*</span>
            <br><input placeholder="account@domain" type="email" name="maili" style="width:295px;margin-top:2px;" required>
        </span>
        <span style="display:block; margin-bottom:5px;">
            Message <span style="color:red;">*</span>
            <br><textarea name="viesti" style="width:295px;height:100px;margin-top:2px;" required></textarea>
        </span>
        <div style="display:block; margin-bottom:5px;" class="g-recaptcha" data-sitekey="6LcWJxETAAAAADmHrZ-n76hTuYsVX5tDwC7uVGBK"></div>
        <span style="display:block; margin-bottom:5px;">
            <input style="width:150px;margin-top:2px;" type="submit" value="Send">
            <input style="width:150px;margin-top:2px;" type="reset" value="Clear">
        </span>
    </form>
    <?php
        if($_GET['err']=="rc") echo "<script>alert('Captcha validation failed!')</script>";
    ?>
    <script><!-- Validointi scripti -->
        function validoi(){
            var c = grecaptcha.getResponse();
        if(c.length==0){
            alert("Verify that you are not robot!");
            return false;
        }
        else{
            return true;
        }
        }
    </script>
</section>
