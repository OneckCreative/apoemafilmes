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
        $sqlSlider= mysqli_query($db_conn, "SELECT heading, urlbg, h1, h1span, h2, h2span, h3, h3span, p1, p2, p3, urllink, botao FROM slider");
        $rowSlider  = mysqli_fetch_array($sqlSlider);
    
		$sqlAbout = mysqli_query($db_conn, "SELECT heading, content FROM aboutus");
		$rowAbout = mysqli_fetch_array($sqlAbout);		
		$sqlFooter = mysqli_query($db_conn, "SELECT heading, content FROM footer");
		$rowFooter = mysqli_fetch_array($sqlFooter);		
		$sqlContact = mysqli_query($db_conn, "SELECT heading, email, sendtoemail, address, city, state, zipcode, description, phone FROM contactus");
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
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="<?php echo $rowSetup[" keywords "];?>">
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
        <script src="assets/js/lity.js"></script>
        <link href="assets/css/lity.css" rel="stylesheet" />
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
                <div class="vimeo-wrapper">
                    <iframe src="https://player.vimeo.com/video/<?php echo $rowSlider["urlbg"];?>?background=1&autoplay=1&loop=1&byline=0&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <div class="item active">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig"><?php echo $rowSlider["h1"];?> <span><?php echo $rowSlider["h1span"];?></span></h1>
                        <p class="animated fadeInRightBig"><?php echo $rowSlider["p1"];?></p>
                    </div>
                </div>
                <div class="item">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig"><?php echo $rowSlider["h2"];?> <span><?php echo $rowSlider["h2span"];?></span></h1>
                        <p class="animated fadeInRightBig"><?php echo $rowSlider["p2"];?></p>
                    </div>
                </div>
                <div class="item">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig"><?php echo $rowSlider["h3"];?> <span> <?php echo $rowSlider["h3span"];?> </span></h1>
                        <p class="animated fadeInRightBig"><?php echo $rowSlider["p3"];?></p>
                    </div>
                </div>
            </div>
            <p class="botao"><a data-fancybox="" data-ratio="2" href="https://vimeo.com/<?php echo $rowSlider["urllink"];?>"><?php echo $rowSlider["botao"];?></a></p>
            <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a> 
            <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a> 
            <a id="tohash" href="#about-us"><i class="fa fa-angle-down"></i></a> 
        </div>
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
                    <a class="filtro filter-button" data-filter="all">Todos</a>| 
                    <a class="filtro filter-button" data-filter="filmes">Filmes</a> | 
                    <a class="filtro filter-button" data-filter="publicidade">Publicidade</a> | 
                    <a class="filtro filter-button" data-filter="corporativo">Corporativo</a> | 
                    <a class="filtro filter-button" data-filter="eventossociais">Eventos Sociais</a> | 
                    <a class="filtro filter-button" data-filter="videoclips">Videoclips</a> | 
                    <a class="filtro filter-button" data-filter="360">360º</a> | 
                    <a class="filtro filter-button" data-filter="imagesaereas">Imagens Aéreas</a> 
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <?php
				while ($rowPages  = mysqli_fetch_array($sqlPages)) {
			?>
                    <div class="col-md-3 filter <?php echo $rowPages["category"];?>">
                        <div class="card"> 
                            <a data-fancybox="gallery" data-ratio="2" href="https://vimeo.com/<?php echo $rowPages["idyoutube"];?>">
            					<?php 
						if ($rowPages["thumbnail"] != "") {
							echo "<img src='uploads/".$rowPages["thumbnail"]."' class='img-responsive' title='".$rowPages["title"]."' alt='".$rowPages["title"]."'>";
						} else {
							echo "<img src='img/no-image.png' class='img-responsive' title='".$rowPages["title"]."' alt='".$rowPages["title"]."'>";
						}
					?>

                        </a>
                        </div>
                    </div>
                    <?php 
				} 
			?>
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
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Nome" required> </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" class="form-control" placeholder="e-mail" required> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Número de telefone" id="phone" name="phone" class="form-control" required> </div>
                                <div class="form-group">
                                    <textarea id="message" name="message" class="form-control" rows="4" placeholder="Mensagem" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-submit btn-block">Enviar</button>
                                </div>
                                <?php
							if ($_GET["msgsent"]=="thankyou") {
								echo "<div id='success'><div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true' onclick=\"window.location.href='index.php#contact'\">×</button><strong>Mensagem enviada. </strong></div></div>";
							} elseif ($_GET["msgsent"]=="error") {
								echo "<div id='success'><div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true' onclick=\"window.location.href='index.php#contact'\">×</button><strong>ocorreu um erro, tente novamente mais tarde. </strong></div></div>";
							}
						?>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <?php
                        	if (!empty($rowContact["description"])) {
                        		echo $rowContact["description"]."<br>";
                        	}
                            if (!empty($rowContact["phone"])) {
                        		echo "<i class=\"fa fa-phone\"></i> <span> Telefones: </span>".$rowContact["phone"]."</a><br>";
                        	}
                            if (!empty($rowContact["email"])) {
                        		echo "<i class=\"fa fa-envelope\"></i> <span> Email: </span><a href=".$rowContact["email"].">".$rowContact["email"]."</a>";
                        	}

                        ?>
                                    <hr />
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="container text-center">
                <div class="footer-logo">
                    <a href="index.php"><img class="img-responsive" src="assets/images/logo-min.png" alt="Apoema Filmes"></a>
                </div>
                <div class="scroll-top page-scroll">
        <a class="btn " href="#page-top"> <i class="fa fa-chevron-up"></i> </a>
    </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p> Copyright &copy; Apoema Filmes 2019 </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="pull-right">Design by <a href="//oneck.com.br/" target="_blank">Oneck Creative</a></p>
                    </div>
                </div>
            </div>
            
        </div>
            
    </footer>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="assets/js/jquery.inview.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/js/mousescroll.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
    <script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
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