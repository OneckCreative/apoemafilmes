<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
		include 'db/dbsetup.php'; //contains DB connection string and global variables
        session_start();
        //Creates a unique refering value/token
        $_SESSION["unique_referer"] = generateRandomString();		
		//SQL Select Statements
		$sqlSetup = mysqli_query($db_conn, "SELECT title, author, keywords, description, headercode, googleanalytics, portfolioheading FROM setup");
		$rowSetup  = mysqli_fetch_array($sqlSetup);		
		$sqlLanding = mysqli_query($db_conn, "SELECT heading, introtext, skills, image FROM landing");
		$rowLanding = mysqli_fetch_array($sqlLanding);		
		$sqlAbout = mysqli_query($db_conn, "SELECT heading, content FROM aboutus");
		$rowAbout = mysqli_fetch_array($sqlAbout);		
		$sqlFooter = mysqli_query($db_conn, "SELECT heading, content FROM footer");
		$rowFooter = mysqli_fetch_array($sqlFooter);		
		$sqlContact = mysqli_query($db_conn, "SELECT heading, email, sendtoemail, address, city, state, zipcode, phone FROM contactus");
		$rowContact = mysqli_fetch_array($sqlContact);		
		$sqlSocial = mysqli_query($db_conn, "SELECT heading, facebook, twitter, linkedin, google, github FROM socialmedia");
		$rowSocial = mysqli_fetch_array($sqlSocial);		
		$sqlPages = mysqli_query($db_conn,"SELECT id, title, idyoutube, category, thumbnail, content, active, datetime FROM pages WHERE active=1 ORDER BY datetime DESC"); //uses while loop		
		$sqlPagesActive = mysqli_query($db_conn,"SELECT id, title, thumbnail, content, active FROM pages WHERE active=1"); //uses while loop
	?>
        <title>
            <?php echo $rowSetup["title"];?>
        </title>
        <meta charset="utf-8">
        <meta name="revisit-after" content="1 day">
        <meta name="robots" content="index">
        <meta name="language" content="Portuguese">
        <meta name="author" content="<?php echo $rowSetup[" author "];?>">
        <meta name="copyright" content="Apoema Filmes">
        <meta name="doc-class" content="Completed">
        <meta name="rating" content="general">
        <meta http-equiv="expires" content="never">
        <meta http-equiv="content-language" content="pt-BR">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/animate.min.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/lightbox.css" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">
        <link id="css-preset" href="assets/css/presets/preset1.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/images/favicon/site.webmanifest">
        <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#3b4c54">
        <link rel="shortcut icon" href="/images/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#3b4c54">
        <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <meta name="description" content="<?php echo $rowSetup[" description "];?>">
        <meta name="image" content="https://apoemafilmes.com.br/og-image.jpg">
        <meta itemprop="name" content="Apoema Filmes">
        <meta itemprop="description" content="<?php echo $rowSetup[" description "];?>">
        <meta itemprop="image" content="https://apoemafilmes.com.br/og-image.jpg">
        <meta name="og:title" content="Apoema Filmes">
        <meta name="og:description" content="<?php echo $rowSetup[" description "];?>">
        <meta name="og:image" content="https://apoemafilmes.com.br/og-image.jpg">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta name="og:url" content="https://apoemafilmes.com.br">
        <meta name="og:site_name" content="Apoema Filmes">
        <meta name="og:locale" content="pt_BR">
        <meta name="og:type" content="website">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
        <?php
		//Custom CSS
		if ($customCss_url !="") {
			echo "<link href='".$customCss_url."' rel='stylesheet' type='text/css'>";
		}
		//Custom header code
		echo $rowSetup["headercode"]."\n";		
		//Google Analytics tracking code
		if ($rowSetup["googleanalytics"]) {
			$googleID = $rowSetup["googleanalytics"];
        ?>
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', '<?php echo $googleID ?>']);
                _gaq.push(['_trackPageview']);
                (function () {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();
            </script>
            <?php 
	} 
	?>
</head>

<body id="page-top" class="index">
    <header id="home">
        <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(assets/images/slider/1.jpg)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">Seja Bem Vindo <span>Apoema Filmes</span></h1>
                        <p class="animated fadeInRightBig">Conheça mais sobre nós</p> <a data-scroll class="btn btn-start animated fadeInUpBig" href="#about-us">Iniciar</a> </div>
                </div>
                <div class="item" style="background-image: url(assets/images/slider/2.jpg)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">use nossa <span>Criatividade</span></h1>
                        <p class="animated fadeInRightBig">Veja nossos tratablhos </p> <a data-scroll class="btn btn-start animated fadeInUpBig" href="#about-us">Iniciar</a> </div>
                </div>
                <div class="item" style="background-image: url(assets/images/slider/3.jpg)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">Enxergamos <span> Além </span></h1>
                        <p class="animated fadeInRightBig">Publicidade - Corporativo - Eventos sociais - Videoclips</p> <a data-scroll class="btn btn-start animated fadeInUpBig" href="#about-us">Iniciar</a> </div>
                </div>
            </div> <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a> <a id="tohash" href="#about-us"><i class="fa fa-angle-down"></i></a> </div>
        <!--/#home-slider-->
        <div class="main-nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="index.php"> <img class="img-responsive" src="assets/images/logo.svg" alt="Apoema Filmes"> </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="scroll active"><a href="#home">Home</a></li>
                        <li class="scroll"><a href="#about-us">Quem Somos</a></li>
                        <li class="scroll"><a href="#portfolio">Portfolio</a></li>
                        <li class="scroll"><a href="#contact">Contato</a></li>
                        <a href="#contact">
                            <?php echo $rowContact["heading"];?>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
        <!--/#main-nav-->
    </header>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text"> <span class="name"><?php echo $rowLanding["introtext"];?></span> <span class="skills"><?php echo $rowLanding["skills"];?></span> </div>
                </div>
            </div>
        </div>
    </header>
    <section id="about-us" class="parallax">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-center col-md-offset-2">
                    <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <br>
                        <br>
                        <h2><?php echo $rowAbout["heading"];?></h2>
                        <?php echo $rowAbout["content"];?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2><?php echo $rowSetup["portfolioheading"];?></h2> </div>
            </div>
            <div class="row space" data-wow-duration="700ms" data-wow-delay="200ms">
                <div align="center">
                    <button class="btn btn-start animated fadeInUpBig filter-button" data-filter="all">Todos</button>
                    <button class="btn btn-start animated fadeInUpBig filter-button" data-filter="filmes">Filmes</button>
                    <button class="btn btn-start animated fadeInUpBig filter-button" data-filter="publicidade">Publicidade</button>
                    <button class="btn btn-start animated fadeInUpBig filter-button" data-filter="corporativo">Corporativo</button>
                    <button class="btn btn-start animated fadeInUpBig filter-button" data-filter="eventossociais">Eventos Sociais</button>
                    <button class="btn btn-start animated fadeInUpBig filter-button" data-filter="videoclips">Videoclips</button>
                    <button class="btn btn-start animated fadeInUpBig filter-button" data-filter="360">360º</button>
                    <button class="btn btn-start animated fadeInUpBig filter-button" data-filter="imagesaereas">Imagens Aéreas</button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <?php while ($rowPages  = mysqli_fetch_array($sqlPages)) { ?>
                    <div class="col-sm-3">
                        <?php 
                                            if ($rowPages["idyoutube"] != "") {                                                
                                                echo '<div class="folio-item wow fadeInRightBig filter'.$rowPages["category"].'data-wow-duration="1000ms" data-wow-delay="300ms">';
                                            }
                                            ?>
                            <div class="folio-image">
                                <?php 
                                            if ($rowPages["idyoutube"] != "") {                                                
                                                echo '<img src="https://img.youtube.com/vi/'.$rowPages["idyoutube"].'/hqdefault.jpg"/>';
                                            }
                                            ?> </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <div class="folio-info">
                                            <?php 
                                            if ($rowPages["title"] != "") {
                                                echo "<h3>".$rowPages["title"]."</h3>";
                                            }
                                            ?> </div>
                                        <div class="folio-overview"> <span class="folio-expand">
                                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-search-plus"></i></a>
                                            </span> </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
            <?php }	?>
        </div>
        </div>
    </section>
    
    
        <section id="contact">
        <div id="contact-us" class="parallax">
            <div class="container">
                <div class="row">
                    <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h2><?php echo $rowContact["heading"];?></h2>
                        <p>PREENCHA O FORMULÁRIO ABAIXO </p>
                    </div>
                </div>
                <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="row">
                        <div class="col-sm-6">
                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Nome" required> </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="e-mail" required> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Assunto" required> </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Mensagem" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-submit btn-block">Enviar</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <p>A Apoema está disposta a te ajudar!
                                    <br /> Mande um email para nossa central de relacionamento
                                    <br /> Solicite um orçamento sem compromisso, tire suas dúvidas ou mande sua opiião </p>
                                <ul class="address">
                                    <li><i class="fa fa-phone"></i> <span> Telefones:</span> 11 4329-8123 / 11 94890-6751 </li>
                                    <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:contato@apoemafilmes.com.br"> contato@apoemafilmes.com.br</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $rowContact["heading"];?></h2>
                    <hr class="star-primary"> </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" method="post" action="mail/contact_me.php">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" name="name" maxlength="25" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" maxlength="25" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" name="phone" maxlength="25" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" name="message" maxlength="255" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <input type="hidden" name="sendToEmail" value="<?php echo $rowContact[" sendtoemail "];?>"/>
                        <input type="hidden" id="referer" name="referer" value="<?php echo $_SESSION[" unique_referer "]; ?>"/>
                        <br>
                        <?php
							if ($_GET["msgsent"]=="thankyou") {
								echo "<div id='success'><div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true' onclick=\"window.location.href='index.php#contact'\">×</button><strong>Your message has been sent. </strong></div></div>";
							} elseif ($_GET["msgsent"]=="error") {
								echo "<div id='success'><div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true' onclick=\"window.location.href='index.php#contact'\">×</button><strong>An error occured while sending your message. </strong></div></div>";
							}
						?>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Send</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>
                            <?php
                        	if (!empty($rowContact["address"])) {
                        		echo $rowContact["address"]."<br>";
                        	}
	                        if (!empty($rowContact["city"])) {
	                        	echo $rowContact["city"].", ";
	                        }
	                        if (!empty($rowContact["state"])) {
	                        	echo $rowContact["state"]."<br>";
	                        }
	                        if (!empty($rowContact["phone"])) {
	                        	echo $rowContact["phone"]."<br>";
	                        }
	                        if (!empty($rowContact["email"])) {
	                        	echo $rowContact["email"];
	                        }
                        ?>
                        </p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3><?php echo $rowSocial["heading"];?></h3>
                        <ul class="list-inline">
                            <?php
									if (!empty($rowSocial["facebook"])){
										echo "<li><a href=".$rowSocial["facebook"]." class='btn-social btn-outline'><i class='fa fa-fw fa-facebook'></i></a></li>";
									}

									if (!empty($rowSocial["google"])){
										echo "<li><a href=".$rowSocial["google"]." class='btn-social btn-outline'><i class='fa fa-fw fa-google-plus'></i></a></li>";
									}

									if (!empty($rowSocial["github"])){
										echo "<li><a href=".$rowSocial["github"]." class='btn-social btn-outline'><i class='fa fa-fw fa-github'></i></a></li>";
									}

									if (!empty($rowSocial["twitter"])){
										echo "<li><a href=".$rowSocial["twitter"]." class='btn-social btn-outline'><i class='fa fa-fw fa-twitter'></i></a></li>";
									}

									if (!empty($rowSocial["linkedin"])){
										echo "<li><a href=".$rowSocial["linkedin"]." class='btn-social btn-outline'><i class='fa fa-fw fa-linkedin'></i></a></li>";
									}
								?>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3><?php echo $rowFooter["heading"];?></h3>
                        <?php echo $rowFooter["content"];?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12"> Copyright &copy;
                        <?php echo $_SERVER['HTTP_HOST']."&nbsp;".date("Y");?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
    
        <footer id="footer">
        <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="container text-center">
                <div class="footer-logo">
                    <a href="index.php"><img class="img-responsive" src="assets/images/logo-min.png" alt="Apoema Filmes"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>&copy; 2016 Apoema Filmes.</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="pull-right">Design by <a href="//oneck.com.br/" target="_blank">Oneck Creative</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top"> <i class="fa fa-chevron-up"></i> </a>
    </div>
    <?php
	while ($rowPagesActive  = mysqli_fetch_array($sqlPagesActive)) {
?>
        <!-- Portfolio Modals -->
        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $rowPagesActive[" id "];?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"> </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2><?php echo $rowPagesActive["title"];?></h2>
                                <hr class="star-primary">
                                <?php 
	                            if ($rowPagesActive["thumbnail"] != "") {
	                                echo "<img src='uploads/".$rowPagesActive["thumbnail"]."' class='img-responsive img-centered' alt=''>";
	                            } else {
	                                echo "<img src='assets/img/portfolio/cake.png' class='img-responsive' alt=''>";
	                            }
                            ?>
                                    <?php echo $rowPagesActive["content"];?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
	} 
?>
            <script type="text/javascript" src="assets/js/jquery.js"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
            <script type="text/javascript" src="assets/js/jquery.inview.min.js"></script>
            <script type="text/javascript" src="assets/js/wow.min.js"></script>
            <script type="text/javascript" src="assets/js/mousescroll.js"></script>
            <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
            <script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
            <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
            <script type="text/javascript" src="assets/js/main.js"></script>
            <script>
                $(document).ready(function () {
                    $(".filter-button").click(function () {
                        var value = $(this).attr('data-filter');
                        if (value == "all") {
                            //$('.filter').removeClass('hidden');
                            $('.filter').show('1000');
                        }
                        else {
                            // $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                            // $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                            $(".filter").not('.' + value).hide('3000');
                            $('.filter').filter('.' + value).show('3000');
                        }
                    });
                    if ($(".filter-button").removeClass("active")) {
                        $(this).removeClass("active");
                    }
                    $(this).addClass("active");
                });
            </script>
</body>

</html>
<?php
	//close all db connections
	mysqli_close($db_conn);
	die();
?>