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

            <h2 style="color: #23B2DBFF; text-align: center;">Nouvelle demande </h2>

           
            <span><b>Cher <?= $responsable  ?>,</b> </span>
            <p><?= $demande  ?> vous ai soumis pour approbation .</p><br>

            <p>Pour plus d'informations, veuillez vous connecter sur l'application de gestion de parc automobile avec vos accès habituels!</p><br>

            <table>
                <tbody>
                    <tr style="margin-bottom: 2%;">
                        <td class="gras"> Objet de la demande :</td>
                        <td><b><?= $this->objet ?></b></td>
                    </tr>
                    <tr style="margin-bottom: 2%;">
                        <td class="gras"> Détails / Explication :</td>
                        <td><b><?= $this->comment ?></b></td>
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


