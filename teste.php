<?php 
include(conexao.php);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jsDatePick Javascript example</title>
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- 

	Copyright 2010 Itamar Arjuan
	jsDatePick is distributed under the terms of the GNU General Public License.
	
	****************************************************************************************

	Copy paste these 2 lines of code to every page you want the calendar to be available at
-->
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<!-- 
	OR if you want to use the calendar in a right-to-left website
	just use the other CSS file instead and don't forget to switch g_jsDatePickDirectionality variable to "rtl"!
	
	<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.css" />
-->
<script type="text/javascript" src="bibliotecaAjax.js"></script>
<script type="text/javascript" src="funcao.js"></script>
<script type="text/javascript" src="jquery.1.4.2.js"></script>
<script type="text/javascript" src="jsDatePick.jquery.min.1.3.js"></script>
<!-- 
	After you copied those 2 lines of code , make sure you take also the files into the same folder :-)
    Next step will be to set the appropriate statement to "start-up" the calendar on the needed HTML element.
    
    This example is of the direct HTML appending calendar version which can be used
    in two ways. with a stripped mode or without.
    
    BUT - in both cases , it simply attaches to an HTML element and stays there.    
    
    When used in this way , you will have to make a javascript function that will be registered
    as an event handler of the clicking action on each day.
    
    This is done easily like shown in the example.
-->
<script type="text/javascript">
	window.onload = function(){		
		
		g_globalObject = new JsDatePick({
			useMode:1,
			isStripped:true,
			target:"div3_example"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		
		g_globalObject.setOnSelectedDelegate(function(){
			var obj = g_globalObject.getSelectedDay();
			var data =obj.day + "/" + obj.month + "/" + obj.year;
			
			obtemData(data);
			
			
		});
		
		
		
		g_globalObject2 = new JsDatePick({
			useMode:1,
			isStripped:false,
			target:"div4_example",
			cellColorScheme:"beige"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		
		g_globalObject2.setOnSelectedDelegate(function(){
			var obj = g_globalObject2.getSelectedDay();
			alert("a date was just selected and the date is : " + obj.day + "/" + obj.month + "/" + obj.year);
			document.getElementById("div3_example_result").innerHTML = obj.day + "/" + obj.month + "/" + obj.year;
		});		
		
	};
</script>

</head>
<body>
	<div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Reserva de Sala</a>
          <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setor <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="setor-aula.html">Aula</a></li>
                <li><a href="setor-aula.html">Laboratório</a></li>
                <li><a href="setor-aula.html">Reunião</a></li>
              </ul>
            </li>
            <li><a href="moderacao.html"><span class="badge pull-right">42</span>Notificações</a></li>
          </ul>
        </div><!--/.nav-collapse -->
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Matricula" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
 <div class="container">
    <div class="jumbotron">
      <div class="container">
        <h1>Hello!</h1>
        <p>This is a web application for booking  meeting rooms.</p>
        <form action="javascript:void%200">
          <select id="set" name="setor" size="1">
            <?php
              $res = mysqli_query($conexao,"SELECT cod_setor, nome FROM setor WHERE 1");
              $total = mysqli_num_rows($res);
              for($i=0;$i<$total;i++){
                $dados = mysqli_fetch_row($res);
                $cod = $dados[0];
                $nome = $dados[1];
                echo "<option  value=\"$cod\">$nome</option>";
              }
            ?>
          </select>
        </form>
        <p><a class="btn btn-primary btn-lg" role="button" href="login.html">Login &raquo;</a></p>
      </div>
    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
    <center><div id="div3_example" style="margin:10px 0 30px 0; border:dashed 1px red; width:205px; height:230px;">
    	
    </div>

    <div id="date" style="height:20px; line-height:20px; margin:10px 0 0 0; border:dashed 1px #666;"></div>
    </center>

    <!-- Table -->
    <table class="table">
      <thead>
          <tr>
            <th>Hora</th>
            <th><a href="info-sala.html">Sala 101</a></th>
            <th><a href="info-sala.html">Sala 201</a></th>
            <th><a href="info-sala.html">Sala 301</a></th>
          </tr>
        </thead>
      <tbody>
          <tr>
            <td>7:00</td>
            <td><a href="solicita-reserva.html">reserve</td></a>
            <td><a href="solicita-reserva.html">reserve</td></a>
            <td><a href="solicita-reserva.html">reserve</td></a>
          </tr>
          <tr>
            <td>8:00</td>
            <td><a href="reserva.html">Jacob</a></td>
            <td><a href="reserva.html">Thornton</a></td>
            <td><a href="reserva.html">@fat</a></td>
          </tr>
          <tr>
            <td>9:00</td>
            <td><a href="reserva.html">Larry</a></td>
            <td><a href="reserva.html">the Bird</a></td>
            <td><a href="reserva.html">@twitter</a></td>
          </tr>
        </tbody>
    </table>
  </div>
</div>
 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
        
</body>
</html>