<!DOCTYPE html>
<html>
<head> 
    <meta name="swift-page-name" id="swift-page-name" content="home">
    <meta name="swift-page-section" id="swift-section-name" content="home">
    <meta name="msapplication-tileimage" content="//abs.twimg.com/favicons/win8-tile-144.png">
    <meta name="msapplication-tilecolor" content="#00aced">
</head>
<body > 
    <div style="max-width: 680px ; margin: 3% auto ;">
        <div style=" padding: 4%; background-color: #fff; border: 0.5px solid #ddd; border-bottom: 6px solid #ddd;">

            <div>
                <img style="height: 50px; float: right;" src="http://dummyimage.com/800x600/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                <h1 style="font-size: 50px; color: grey; margin: 0; letter-spacing: 5px; font-weight: bold">AMB</h1>
                <small>Plateforme de gestion de parc Auto-Moto-Bateau</small>
            </div>
            <br><br>

            <h2 style="color: #00cc00; text-align: center;">Votre demande a été accepté !</h2>

            <span><b>Cher <?= $this->name() ?>,</b> </span>
            <p><?= $demande  ?> emise <?= depuis($this->created) ?> a abouti. Elle vient d'être approuvé .</p><br>

            <p>Pour plus d'informations, veuillez vous adresser aux responsables des circuits de validations des demandes!</p><br>

            <table>
                <tbody>
                    <tr style="margin-bottom: 2%;">
                        <td class="gras"> Objet de la demande :</td>
                        <td><b><?= $this->objet ?></b></td>
                    </tr>
                    <tr style="margin-bottom: 2%;">
                        <td class="gras"> Détails :</td>
                        <td><b><?= $this->comment ?></b></td>
                    </tr>
                    <tr style="margin-bottom: 2%;">
                        <td class="gras"> Demande approuvée à :</td>
                        <td><b><?= datelong($this->date_approuve) ?></b></td>
                    </tr>
                </tbody>
            </table>
            <br>


            <div style="text-align: right;">
                <h4 style="margin: 5px auto" >Cordialement,</h4>
                <small style="text-align: right; color: grey;">AMB | Plateforme de gestion de parc Auto-Moto-Bateau</small>
            </div>
        </div>
        <br>
        
        <?php include(__DIR__."/templates/footer.php"); ?>

    </div>
</body>
</html>


