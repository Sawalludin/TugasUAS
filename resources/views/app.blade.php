<!doctype html>
<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css" rel="stylesheet"/>
	
	</head>
<body>
	<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">KursKu</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Kurs Mata Uang</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Kurs Mata Uang</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="row">
      	<div class="col m12">
      	 <table>
	        <thead>
	          <tr>
	              <th data-field="id">Mata Uang</th>
	              <th data-field="name">Jual</th>
	              <th data-field="price">Beli</th>
	          </tr>
	        </thead>
	        <tbody id="kursTableBody">
	          
	        </tbody>
	      </table>
	            
	      </div>	
      </div>
      
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
      
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Keterangan</h5>
          <p class="grey-text text-lighten-4">Biarin simple yang penting nyambung ke API :V </p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="#!">Sawalludin</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="{{ url('/js/jquery.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$.getJSON("{{url('/kursjson')}}", function(hasil){
				console.log(hasil);
				html = "";
				$.each(hasil.Data, function(key, value){
					console.log(key);
					html = html+"<tr><td>"+key+"</td><td>Rp. "+value.Jual+"</td><td>Rp. "+value.Beli+"</td></tr>";
				});
				$("#kursTableBody").html(html);
			});
		});
	</script>
</body>
</html>