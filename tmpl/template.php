<!DOCTYPE html>
<html>
<head>
    <title>JAZZY-COFFEE - <?php echo $site_title ; ?></title>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href=
    "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js">
    </script>
    <script src="static/bootstrap/js/bootstrap.min.js">
    </script>
    <link href="static/bootstrap/css/bootstrap.min.css" rel="stylesheet" type=
    "text/css">
    <link href="tmpl/styles.css" media="screen" rel="stylesheet" type=
    "text/css">
    <script>
    $(document).ready(function() {
         $('#accueil').fadeIn(2200);
        $('.scroll').on('click', function() { 
            var page = $(this).attr('href');
            var speed = 700; 
            $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); 
            return false;
        });
    });
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div id="header">
              <div id="logo">
                <a href="index.php"><img alt="logo" src=
                "static/images/logo-1.png"></a>
              </div>
            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">NOS ÉVENEMENTS</a>
                        <ul>
                            <li>
                                <a href="index.php?action=evenements-a-venir">À
                                venir</a>
                            </li>
                            <li>
                                <a href=
                                "index.php?action=evenements-passes">Passés</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?action=salle">LA SALLE</a>
                    </li>
                    <li>
                        <a href="index.php?action=galerie">GALERIE</a>
                    </li>
                    <li>
                        <a href="index.php?action=carte">NOTRE CARTE</a>
                    </li>
                    <li>
                        <a href="#">QUI SOMMES-NOUS?</a>
                        <ul>
                            <li>
                                <a href="index.php?action=histoire">Histoire du lieu</a>
                            </li>
                            <li>
                                <a href="index.php?action=equipe">Notre équipe</a>
                            </li>
                            <li>
                                <a href="index.php?action=contact">Contact</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
          </div>
        </div><?php echo $content ;?>
        <div class="row">
            <div class="col-md-12" id="footer">
                <p>JAZZY COFFEE, 32 rue de la Bourse 69002 LYON</p>
                <p><a href="index.php?action=mentions">Mentions Légales</a></p>
                <div class="social">
                    <a href="http://facebook.com/jazzycoffee" target=
                    "_blank"><i aria-hidden="true" class=
                    "fa fa-facebook-square fa-3x"></i></a>
                    <a href="http://twitter.com" target=
                    "_blank"><i aria-hidden="true" class=
                    "fa fa-twitter-square fa-3x"></i></a>

                    <a href="http://validator.w3.org/check?uri=referer" target="_blank"><i class="fa fa-html5 fa-3x" aria-hidden="true"></i></a>
                    <a href="http://jigsaw.w3.org/css-validator/validator?uri=jazzycoffee.colibre.org/tmpl/styles.css" target="_blank"><i class="fa fa-css3 fa-3x" aria-hidden="true"></i></a>
                    <a href="http://twitter.com" target=
                    "_blank"><i aria-hidden="true" class=
                    "fa fa-github-square fa-3x"></i></a>

                </div>
            </div>
        </div>
    </div><!--fin du container Ne pas toucher -->
</body>
</html>
