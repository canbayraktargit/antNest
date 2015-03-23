<?php 
    include './php/main.php';
?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ant Nest</title>
            
        <!-- css libraries -->
        <link rel="stylesheet" type="text/css" href="libs/jquery-ui-1.11.4/jquery-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="libs/jquery-ui-1.11.4/jquery-ui.structure.min.css" />
        <link rel="stylesheet" type="text/css" href="libs/jquery-ui-1.11.4/jquery-ui.theme.min.css" />
        <link rel="stylesheet" type="text/css" href="libs/fullPage.js-master/jquery.fullPage.css" />
        <link rel="stylesheet" type="text/css" href="libs/bootstrap-3.3.2-dist/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="libs/bootstrap-3.3.2-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="libs/animate.css" />
        <link rel="stylesheet" type="text/css" href="css/antNest.css" />
        
        <!-- js libraries -->
        <script src="libs/jquery-1.11.2.min.js"></script>
        <script src="libs/jquery-ui-1.11.4/jquery-ui.min.js"></script>
        <script src="libs/fullPage.js-master/vendors/jquery.slimscroll.min.js"></script>
        <script src="libs/fullPage.js-master/jquery.fullPage.min.js"></script>
        <script src="libs/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
        <script src="js/antNest.js"></script>
        
    </head>
    <body>
        <!-- html part will be rendered here -->
        <?php 
            include './php/initialize.php';
        ?>
        <!-- navbar template -->
        <nav id="navbar" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                
                <!-- navbar minimized part -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">AntNest</a>
                </div>
                
                <!-- navbar collapsed part  also same with main menu-->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li data-menuanchor="firstPage"><a href="#firstPage">First section</a></li>
                        
                        <!-- dropdown template start -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                        <!-- dropdown end -->
                        
                        <li data-menuanchor="secondPage"><a href="#secondPage">Second section</a></li>
                        <li data-menuanchor="thirdPage"><a href="#thirdPage">Third section</a></li>
                        
                        <!-- search bar template start -->
                        <li>
                            <form class="navbar-form" role="search">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="searchContent" class="form-control" placeholder="Ara...">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default">Ara</button>
                                        </span>
                                    </div>
                                </div>    
                            </form>
                        </li>
                        <!-- search bar end -->
                        
                    </ul><!-- navbar-right -->
                </div><!-- collapse -->
            </div><!-- container fluid -->
        </nav><!-- navbar main -->
        
        
        <div id="fullpage">
           
            <!-- section with carousel -->
            <div class="section">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        
                        <!-- carousel item template -->
                        <div class="item active">
                            <img src="image/background2.jpg" class="carousel-cover" alt="...">
                            <div class="carousel-caption">
                                hey1
                            </div>
                        </div>
                        <!-- carousel item end -->
                        
                        <div class="item">
                            <img src="image/background.jpg" class="carousel-cover" alt="...">
                            <div class="carousel-caption">
                                hey2
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="section">
                <div class="fpSlide" data-anchor="slide1"> Slide 1 </div>
                <div class="fpSlide" data-anchor="slide2">
                    <h1>
                        Matematik ile ilgili kavramları ve kavramlar arası ilişkileri anlayabilme; kuramsal ve uygulamalı bilgilere sahip olabilme
                        Matematik bilgilerini diğer disiplinlere uygulayabilme
                        Bilim ve mühendisliğe  ait problemleri tanımlama, modelleme ve çözümleyebilme
                        Çok disiplinli gruplarda çalışabilme ve/veya liderlik yapabilme
                        Problem çözmek için algoritma ve bilgisayar programı yazma,  kullanma ve sayısal çözümleri görselleştirebilme
                        Mesleki ve etik sorumluluk anlayışına sahip olabilme
                        Türkçe ve/veya İngilizce etkin yazılı ve sözlü iletişim kurabilme
                        Matematiksel düşünme ve ispat tekniklerini öğrenme ve uygulayabilme
                        Hayat boyu öğrenimin önemini kavrama ve uygulayabilme
                        Matematiğin  güncel ve çağdaş konularını araştırabilme
                        Matematik ile ilgili ileri düzeydeki bir çalışmayı bağımsız olarak yürütebilme
                        Alanı ile ilgili konularda düşüncelerini ve sorunlara ilişkin çözüm önerilerini yazılı ve sözlü olarak aktarabilme
                        Matematik ile ilgili kavramları ve kavramlar arası ilişkileri anlayabilme; kuramsal ve uygulamalı bilgilere sahip olabilme
                        Matematik bilgilerini diğer disiplinlere uygulayabilme
                        Bilim ve mühendisliğe  ait problemleri tanımlama, modelleme ve çözümleyebilme
                        Çok disiplinli gruplarda çalışabilme ve/veya liderlik yapabilme
                        Problem çözmek için algoritma ve bilgisayar
                    </h1>
                    <h2>
                        Matematik ile ilgili kavramları ve kavramlar arası ilişkileri anlayabilme; kuramsal ve uygulamalı bilgilere sahip olabilme
                        Matematik bilgilerini diğer disiplinlere uygulayabilme
                        Bilim ve mühendisliğe  ait problemleri tanımlama, modelleme ve çözümleyebilme
                        Çok disiplinli gruplarda çalışabilme ve/veya liderlik yapabilme
                        Problem çözmek için algoritma ve bilgisayar programı yazma,  kullanma ve sayısal çözümleri görselleştirebilme
                        Mesleki ve etik sorumluluk anlayışına sahip olabilme
                        Türkçe ve/veya İngilizce etkin yazılı ve sözlü iletişim kurabilme
                        Matematiksel düşünme ve ispat tekniklerini öğrenme ve uygulayabilme
                        Hayat boyu öğrenimin önemini kavrama ve uygulayabilme
                        Matematiğin  güncel ve çağdaş konularını araştırabilme
                        Matematik ile ilgili ileri düzeydeki bir çalışmayı bağımsız olarak yürütebilme
                        Alanı ile ilgili konularda düşüncelerini ve sorunlara ilişkin çözüm önerilerini yazılı ve sözlü olarak aktarabilme
                        Matematik ile ilgili kavramları ve kavramlar arası ilişkileri anlayabilme; kuramsal ve uygulamalı bilgilere sahip olabilme
                        Matematik bilgilerini diğer disiplinlere uygulayabilme
                        Bilim ve mühendisliğe  ait problemleri tanımlama, modelleme ve çözümleyebilme
                        Çok disiplinli gruplarda çalışabilme ve/veya liderlik yapabilme
                        Problem çözmek için algoritma ve bilgisayar
                    </h2>
                </div>
                <div class="fpSlide" data-anchor="slide3"> Slide 3 </div>
                <div class="fpSlide" data-anchor="slide4"> Slide 4 </div>
            </div>
            <div class="section">
                <h1>
                Matematik ile ilgili kavramları ve kavramlar arası ilişkileri anlayabilme; kuramsal ve uygulamalı bilgilere sahip olabilme
                Matematik bilgilerini diğer disiplinlere uygulayabilme
                Bilim ve mühendisliğe  ait problemleri tanımlama, modelleme ve çözümleyebilme
                Çok disiplinli gruplarda çalışabilme ve/veya liderlik yapabilme
                Problem çözmek için algoritma ve bilgisayar programı yazma,  kullanma ve sayısal çözümleri görselleştirebilme
                Mesleki ve etik sorumluluk anlayışına sahip olabilme
                Türkçe ve/veya İngilizce etkin yazılı ve sözlü iletişim kurabilme
                Matematiksel düşünme ve ispat tekniklerini öğrenme ve uygulayabilme
                Hayat boyu öğrenimin önemini kavrama ve uygulayabilme
                Matematiğin  güncel ve çağdaş konularını araştırabilme
                Matematik ile ilgili ileri düzeydeki bir çalışmayı bağımsız olarak yürütebilme
                Alanı ile ilgili konularda düşüncelerini ve sorunlara ilişkin çözüm önerilerini yazılı ve sözlü olarak aktarabilme
                Matematik ile ilgili kavramları ve kavramlar arası ilişkileri anlayabilme; kuramsal ve uygulamalı bilgilere sahip olabilme
                Matematik bilgilerini diğer disiplinlere uygulayabilme
                Bilim ve mühendisliğe  ait problemleri tanımlama, modelleme ve çözümleyebilme
                Çok disiplinli gruplarda çalışabilme ve/veya liderlik yapabilme
                Problem çözmek için algoritma ve bilgisayar
                </h1>
                <h2>
                
                Matematik ile ilgili kavramları ve kavramlar arası ilişkileri anlayabilme; kuramsal ve uygulamalı bilgilere sahip olabilme
                Matematik bilgilerini diğer disiplinlere uygulayabilme
                Bilim ve mühendisliğe  ait problemleri tanımlama, modelleme ve çözümleyebilme
                Çok disiplinli gruplarda çalışabilme ve/veya liderlik yapabilme
                Problem çözmek için algoritma ve bilgisayar programı yazma,  kullanma ve sayısal çözümleri görselleştirebilme
                Mesleki ve etik sorumluluk anlayışına sahip olabilme
                Türkçe ve/veya İngilizce etkin yazılı ve sözlü iletişim kurabilme
                Matematiksel düşünme ve ispat tekniklerini öğrenme ve uygulayabilme
                Hayat boyu öğrenimin önemini kavrama ve uygulayabilme
                Matematiğin  güncel ve çağdaş konularını araştırabilme
                Matematik ile ilgili ileri düzeydeki bir çalışmayı bağımsız olarak yürütebilme
                Alanı ile ilgili konularda düşüncelerini ve sorunlara ilişkin çözüm önerilerini yazılı ve sözlü olarak aktarabilme
                Matematik ile ilgili kavramları ve kavramlar arası ilişkileri anlayabilme; kuramsal ve uygulamalı bilgilere sahip olabilme
                Matematik bilgilerini diğer disiplinlere uygulayabilme
                Bilim ve mühendisliğe  ait problemleri tanımlama, modelleme ve çözümleyebilme
                Çok disiplinli gruplarda çalışabilme ve/veya liderlik yapabilme
                Problem çözmek için algoritma ve bilgisayar
                </h2>
            </div>
        </div>
    </body>
</html>
