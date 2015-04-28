
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
    </style>

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Profil</a></li>
            <li><a href="/potensi-daerah">Potensi Daerah</a></li>
            <li><a href="/ringkasan-apbd">Ringkasan APBD</a></li>
            <li class="active"><a href="/pad">PAD</a></li>
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
          <div id="map-container" class="col-md-8"></div>
          <div id="FixDivSideRight" class="col-md-4">
              <table class="table table-bordered">
              <tr>
                <th>35 Kecamatan</th>
              </tr>
              <tr>
                <td>Porter</td>
              </tr>
              <tr>
                <td>Hall</td>
              </tr>
              <tr>
                <td>Dexter</td>
              </tr>
              <tr>
                <td>Dolan</td>
              </tr>
              <tr>
                <td>Moses</td>
              </tr>
              <tr>
                <td>Basil</td>
              </tr>
              <tr>
                <td>Noble</td>
              </tr>
              <tr>
                <td>Denton</td>
              </tr>
              <tr>
                <td>Ezekiel</td>
              </tr>
              <tr>
                <td>Mark</td>
              </tr>
              <tr>
                <td>Denton</td>
              </tr>
              <tr>
                <td>Ezekiel</td>
              </tr>
              <tr>
                <td>Mark</td>
              </tr>
              </table>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered">
          <tr>
            <th>Pajak</th>
            <th>Jumlah</th>
          </tr>
          <tr>
            <td>Oleg</td>
            <td>1</td>
          </tr>
          <tr>
            <td>Ross</td>
            <td>2</td>
          </tr>
          <tr>
            <td>Brianna</td>
            <td>3</td>
          </tr>
          <tr>
            <td>Amanda</td>
            <td>4</td>
          </tr>
          <tr>
            <td>Preston</td>
            <td>5</td>
          </tr>
          <tr>
            <td>Ivory</td>
            <td>6</td>
          </tr>
          <tr>
            <td>Laurel</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Sybill</td>
            <td>8</td>
          </tr>
          <tr>
            <td>Jermaine</td>
            <td>9</td>
          </tr>
          <tr>
            <td>Emily</td>
            <td>10</td>
          </tr>
          <tr>
            <td>Veronica</td>
            <td>11</td>
          </tr>
          <tr>
            <td>Denise</td>
            <td>12</td>
          </tr>
          <tr>
            <td>Melissa</td>
            <td>13</td>
          </tr>
          <tr>
            <td>Jolene</td>
            <td>14</td>
          </tr>
          <tr>
            <td>Germaine</td>
            <td>15</td>
          </tr>
          <tr>
            <td>Justina</td>
            <td>16</td>
          </tr>
          <tr>
            <td>Vladimir</td>
            <td>17</td>
          </tr>
          <tr>
            <td>Amery</td>
            <td>18</td>
          </tr>
          <tr>
            <td>Yen</td>
            <td>19</td>
          </tr>
          <tr>
            <td>Daquan</td>
            <td>20</td>
          </tr>
          </table>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="{{ asset('packages/bootstrap/js/bootstrap.min.js')}}"></script>
    <script>  
 
      function init_map() {
    var var_location = new google.maps.LatLng(45.430817,12.331516);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
 
    var var_marker = new google.maps.Marker({
      position: var_location,
            map: var_map,
      title:"Venice"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
    var_marker.setMap(var_map); 
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>
  </body>
</html>
