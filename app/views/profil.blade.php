
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pandeglang E-Gov</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('packages/bootstrap/css/bootstrap.min.css')}}" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('packages/bootstrap/css/navbar-fixed-top.css')}}" />
    <link rel="stylesheet" href="{{ asset('packages/bootstrap/css/carousel.css')}}" />
    <style>
      #map-container { height: 400px }

      #FixDivSideRight {
        height: 400px;
        overflow: auto;
      }
      
      /*
      .nav-justified-top {
        background-color: yellow;
      }

      .nav-justified-top li.active {
        background-color: red!important;
      }
      */
    </style>

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Profil</a></li>
            <li><a href="/potensi-daerah">Potensi Daerah</a></li>
            <li><a href="/ringkasan-apbd">Ringkasan APBD</a></li>
            <li><a href="/pad">PAD</a></li>
            <li><a href="/belanja-daerah">Belanja Daerah</a></li>
            <li><a href="/indikator-kerja">Indikator Kinerja</a></li>
          </ul>
          <div class="navbar-form navbar-right">
            <a href="#" class="btn btn-info" role="button">SUARA WARGA</a>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs nav-justified nav-justified-top">
              <li role="presentation" class="nav active"><a href="#sejarah" data-toggle="tab">SEJARAH SINGKAT</a></li>
              <li role="presentation" class="nav"><a href="#visimisi" data-toggle="tab">VISI & MISI</a></li>
              <li role="presentation" class="nav"><a href="#semboyan" data-toggle="tab">SEMBOYAN & LAMBANG</a></li>
              <li role="presentation" class="nav"><a href="#gambaran" data-toggle="tab">GAMBARAN UMUM</a></li>

          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
              <div class="tab-pane fade in active" id="sejarah">
                Content inside tab sejarah

                Lorem ipsum dolor sit amet, at cum mucius denique, at aperiam electram molestiae his. Mea cu constituto adipiscing disputando, est vitae principes at, odio elit ea ius. Mea at dolore scripta, ut qui modus corrumpit hendrerit. Malis adolescens interpretaris eu mei.

                Eum officiis assentior cu, per tale tota prompta et. Et fierent adolescens definiebas his, ea eirmod cotidieque est, ex commodo ancillae neglegentur nam. Ea prima scripta gloriatur usu, putant suavitate te nam, in vis ancillae accusamus disputationi. At diam molestie delectus quo. Omnesque pertinacia ex ius, ex sed facer epicuri tincidunt, vel ea choro congue cetero. Et pro movet detraxit, qui ei vidit minimum. Ei dictas facilis placerat eos, et graeci repudiandae qui, fuisset ancillae albucius ad quo.

                Principes scripserit persequeris eam ea. Cum eu rebum laoreet nusquam. Ad ius admodum disputando, mel et omnes omnesque conceptam. Cetero latine maiorum qui ea.

                Nullam hendrerit has id, sale electram mea ea, dolorum laoreet sed ei. Id accusata sententiae efficiendi nam, est minim putent no. Ea vis idque facilisis, eum reque saepe iracundia cu. Has utroque nusquam vituperata no, nec invidunt molestiae ut. No accumsan omittantur est, an mel utamur convenire suavitate.

                Te quodsi fabulas veritus pro. Cu vocent deserunt tractatos eos, natum decore eu his. Ad hinc iusto mea, veri sale cotidieque ne mei. Adhuc alienum an mel, nec ne nemore expetenda. Mediocrem reformidans ea mei.
              </div>
              <div class="tab-pane fade" id="visimisi">
                Content inside tab visi misi

                Lorem ipsum dolor sit amet, at cum mucius denique, at aperiam electram molestiae his. Mea cu constituto adipiscing disputando, est vitae principes at, odio elit ea ius. Mea at dolore scripta, ut qui modus corrumpit hendrerit. Malis adolescens interpretaris eu mei.

                Eum officiis assentior cu, per tale tota prompta et. Et fierent adolescens definiebas his, ea eirmod cotidieque est, ex commodo ancillae neglegentur nam. Ea prima scripta gloriatur usu, putant suavitate te nam, in vis ancillae accusamus disputationi. At diam molestie delectus quo. Omnesque pertinacia ex ius, ex sed facer epicuri tincidunt, vel ea choro congue cetero. Et pro movet detraxit, qui ei vidit minimum. Ei dictas facilis placerat eos, et graeci repudiandae qui, fuisset ancillae albucius ad quo.

                Principes scripserit persequeris eam ea. Cum eu rebum laoreet nusquam. Ad ius admodum disputando, mel et omnes omnesque conceptam. Cetero latine maiorum qui ea.

                Nullam hendrerit has id, sale electram mea ea, dolorum laoreet sed ei. Id accusata sententiae efficiendi nam, est minim putent no. Ea vis idque facilisis, eum reque saepe iracundia cu. Has utroque nusquam vituperata no, nec invidunt molestiae ut. No accumsan omittantur est, an mel utamur convenire suavitate.

                Te quodsi fabulas veritus pro. Cu vocent deserunt tractatos eos, natum decore eu his. Ad hinc iusto mea, veri sale cotidieque ne mei. Adhuc alienum an mel, nec ne nemore expetenda. Mediocrem reformidans ea mei.
              </div>
              <div class="tab-pane fade" id="semboyan">
                Content inside tab semboyan

                Lorem ipsum dolor sit amet, at cum mucius denique, at aperiam electram molestiae his. Mea cu constituto adipiscing disputando, est vitae principes at, odio elit ea ius. Mea at dolore scripta, ut qui modus corrumpit hendrerit. Malis adolescens interpretaris eu mei.

                Eum officiis assentior cu, per tale tota prompta et. Et fierent adolescens definiebas his, ea eirmod cotidieque est, ex commodo ancillae neglegentur nam. Ea prima scripta gloriatur usu, putant suavitate te nam, in vis ancillae accusamus disputationi. At diam molestie delectus quo. Omnesque pertinacia ex ius, ex sed facer epicuri tincidunt, vel ea choro congue cetero. Et pro movet detraxit, qui ei vidit minimum. Ei dictas facilis placerat eos, et graeci repudiandae qui, fuisset ancillae albucius ad quo.

                Principes scripserit persequeris eam ea. Cum eu rebum laoreet nusquam. Ad ius admodum disputando, mel et omnes omnesque conceptam. Cetero latine maiorum qui ea.

                Nullam hendrerit has id, sale electram mea ea, dolorum laoreet sed ei. Id accusata sententiae efficiendi nam, est minim putent no. Ea vis idque facilisis, eum reque saepe iracundia cu. Has utroque nusquam vituperata no, nec invidunt molestiae ut. No accumsan omittantur est, an mel utamur convenire suavitate.

                Te quodsi fabulas veritus pro. Cu vocent deserunt tractatos eos, natum decore eu his. Ad hinc iusto mea, veri sale cotidieque ne mei. Adhuc alienum an mel, nec ne nemore expetenda. Mediocrem reformidans ea mei.
              </div>
              <div class="tab-pane fade" id="gambaran">
                Content inside tab gambaran

                Lorem ipsum dolor sit amet, at cum mucius denique, at aperiam electram molestiae his. Mea cu constituto adipiscing disputando, est vitae principes at, odio elit ea ius. Mea at dolore scripta, ut qui modus corrumpit hendrerit. Malis adolescens interpretaris eu mei.

                Eum officiis assentior cu, per tale tota prompta et. Et fierent adolescens definiebas his, ea eirmod cotidieque est, ex commodo ancillae neglegentur nam. Ea prima scripta gloriatur usu, putant suavitate te nam, in vis ancillae accusamus disputationi. At diam molestie delectus quo. Omnesque pertinacia ex ius, ex sed facer epicuri tincidunt, vel ea choro congue cetero. Et pro movet detraxit, qui ei vidit minimum. Ei dictas facilis placerat eos, et graeci repudiandae qui, fuisset ancillae albucius ad quo.

                Principes scripserit persequeris eam ea. Cum eu rebum laoreet nusquam. Ad ius admodum disputando, mel et omnes omnesque conceptam. Cetero latine maiorum qui ea.

                Nullam hendrerit has id, sale electram mea ea, dolorum laoreet sed ei. Id accusata sententiae efficiendi nam, est minim putent no. Ea vis idque facilisis, eum reque saepe iracundia cu. Has utroque nusquam vituperata no, nec invidunt molestiae ut. No accumsan omittantur est, an mel utamur convenire suavitate.

                Te quodsi fabulas veritus pro. Cu vocent deserunt tractatos eos, natum decore eu his. Ad hinc iusto mea, veri sale cotidieque ne mei. Adhuc alienum an mel, nec ne nemore expetenda. Mediocrem reformidans ea mei.
              </div>
          </div>
        </div>
      </div>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 Pemda Pandeglang </p>
      </footer>
    </div> <!-- /container -->

  


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('components/jquery/jquery.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="{{ asset('packages/bootstrap/js/bootstrap.min.js')}}"></script>
  </body>
</html>
