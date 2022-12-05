<head>
<meta name="yandex-verification" content="b1e0db8d9bc52b90" />
</head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- HopeNess -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7164817697493111"
     data-ad-slot="5609608587"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?
$url = $_SERVER['REQUEST_URI'];
//hund forms auth
if ($_GET['action'] == "join") {
	if ($_POST['subm']) {
		if ($_POST['pass'] == "yourselfpassword228arikkeysuperloxyou" || $_POST['pass'] == "Свойпароль228эрикключсуперлохты" || $_POST['pass'] == "") {
			setcookie("auth", "jeffrey");
            $_SESSION['auth'] = "123";
       echo "всё норм!";
			header('location: /');
		} else echo "Wrong data";
	} else echo "Not send data";
}


 if ($url == "/exit") setcookie("auth", "", time() - 3600);
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<meta charset="utf-8">
<script async>
    window.scrollTo(0, 0);
    $(window).on('load', function () {
    var _loading_spinner=setInterval(function(){if(document.readyState=='complete'){
  var $page_loading = document.getElementById('cssload-pgloading'),
      $body = document.body || document.getElementsByTagName('body')[0],
      speed = 300, delay = 300;
        
  if((typeof $page_loading != 'undefined') && ($page_loading != null)){
    setTimeout(function(){
      var transition = 'opacity ' + speed.toString() + 'ms ease',
          removeCssClass = function(obj, className){
            obj.className = obj.className.replace(className, '').replace('  ', ' ');
          };
      ['-webkit-transition','-moz-transition','transition'].forEach(function(prefix){
        $page_loading.style[prefix] = transition;
      });
      $page_loading.style['opacity'] = '0';
      $page_loading.style['filter']  = 'alpha(opacity=0)'; 
      removeCssClass($body, 'noscroll');
      setTimeout(function(){
        $page_loading.parentNode.removeChild($page_loading);
      }, speed + 10);
    }, delay);
  }
  clearInterval(_loading_spinner);
}},10);
});
</script> 
<div id="cssload-pgloading">
	<div class="cssload-loadingwrap">
		<ul class="cssload-bokeh">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>
<style>
body.noscroll {
min-height:100%;
width: 100%;
overflow:hidden;
}
#cssload-pgloading {
    background: white;
    width: 100%;
    height: 100%;
    position: fixed;
    }

#cssload-pgloading:after {
		content: "";
		z-index: -1;
		position: absolute;
		top: 0; right: 0; bottom: 0; left: 0;
}
#cssload-pgloading .cssload-loadingwrap {position:absolute;top:45%;bottom:45%;left:25%;right:25%;}
#cssload-pgloading .cssload-bokeh {
		font-size: 97px;
		width: 1em;
		height: 1em;
		position: relative;
		margin: 0 auto;
		list-style: none;
		padding:0;
		border-radius: 50%;
		-o-border-radius: 50%;
		-ms-border-radius: 50%;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
}

#cssload-pgloading .cssload-bokeh li {
		position: absolute;
		width: .2em;
		height: .2em;
		border-radius: 50%;
		-o-border-radius: 50%;
		-ms-border-radius: 50%;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
}

#cssload-pgloading .cssload-bokeh li:nth-child(1) {
		left: 50%;
		top: 0;
		margin: 0 0 0 -.1em;
		background: rgb(0,193,118);
		transform-origin: 50% 250%;
		-o-transform-origin: 50% 250%;
		-ms-transform-origin: 50% 250%;
		-webkit-transform-origin: 50% 250%;
		-moz-transform-origin: 50% 250%;
		animation: 
				cssload-rota 1.64s linear infinite,
				cssload-opa 5.32s ease-in-out infinite alternate;
		-o-animation: 
				cssload-rota 1.64s linear infinite,
				cssload-opa 5.32s ease-in-out infinite alternate;
		-ms-animation: 
				cssload-rota 1.64s linear infinite,
				cssload-opa 5.32s ease-in-out infinite alternate;
		-webkit-animation: 
				cssload-rota 1.64s linear infinite,
				cssload-opa 5.32s ease-in-out infinite alternate;
		-moz-animation: 
				cssload-rota 1.64s linear infinite,
				cssload-opa 5.32s ease-in-out infinite alternate;
}

#cssload-pgloading .cssload-bokeh li:nth-child(2) {
		top: 50%; 
		right: 0;
		margin: -.1em 0 0 0;
		background: rgb(255,0,60);
		transform-origin: -150% 50%;
		-o-transform-origin: -150% 50%;
		-ms-transform-origin: -150% 50%;
		-webkit-transform-origin: -150% 50%;
		-moz-transform-origin: -150% 50%;
		animation: 
				cssload-rota 2.7s linear infinite,
				cssload-opa 6.22s ease-in-out infinite alternate;
		-o-animation: 
				cssload-rota 2.7s linear infinite,
				cssload-opa 6.22s ease-in-out infinite alternate;
		-ms-animation: 
				cssload-rota 2.7s linear infinite,
				cssload-opa 6.22s ease-in-out infinite alternate;
		-webkit-animation: 
				cssload-rota 2.7s linear infinite,
				cssload-opa 6.22s ease-in-out infinite alternate;
		-moz-animation: 
				cssload-rota 2.7s linear infinite,
				cssload-opa 6.22s ease-in-out infinite alternate;
}

#cssload-pgloading .cssload-bokeh li:nth-child(3) {
		left: 50%; 
		bottom: 0;
		margin: 0 0 0 -.1em;
		background: rgb(250,190,40);
		transform-origin: 50% -150%;
		-o-transform-origin: 50% -150%;
		-ms-transform-origin: 50% -150%;
		-webkit-transform-origin: 50% -150%;
		-moz-transform-origin: 50% -150%;
		animation: 
				cssload-rota 2.1s linear infinite,
				cssload-opa 7.42s ease-in-out infinite alternate;
		-o-animation: 
				cssload-rota 2.1s linear infinite,
				cssload-opa 7.42s ease-in-out infinite alternate;
		-ms-animation: 
				cssload-rota 2.1s linear infinite,
				cssload-opa 7.42s ease-in-out infinite alternate;
		-webkit-animation: 
				cssload-rota 2.1s linear infinite,
				cssload-opa 7.42s ease-in-out infinite alternate;
		-moz-animation: 
				cssload-rota 2.1s linear infinite,
				cssload-opa 7.42s ease-in-out infinite alternate;
}

#cssload-pgloading .cssload-bokeh li:nth-child(4) {
		top: 50%; 
		left: 0;
		margin: -.1em 0 0 0;
		background: rgb(136,193,0);
		transform-origin: 250% 50%;
		-o-transform-origin: 250% 50%;
		-ms-transform-origin: 250% 50%;
		-webkit-transform-origin: 250% 50%;
		-moz-transform-origin: 250% 50%;
		animation: 
				cssload-rota 2.49s linear infinite,
				cssload-opa 7.61s ease-in-out infinite alternate;
		-o-animation: 
				cssload-rota 2.49s linear infinite,
				cssload-opa 7.61s ease-in-out infinite alternate;
		-ms-animation: 
				cssload-rota 2.49s linear infinite,
				cssload-opa 7.61s ease-in-out infinite alternate;
		-webkit-animation: 
				cssload-rota 2.49s linear infinite,
				cssload-opa 7.61s ease-in-out infinite alternate;
		-moz-animation: 
				cssload-rota 2.49s linear infinite,
				cssload-opa 7.61s ease-in-out infinite alternate;
}







@keyframes cssload-rota {
		from { }
		to { transform: rotate(360deg); }
}

@-o-keyframes cssload-rota {
		from { }
		to { -o-transform: rotate(360deg); }
}

@-ms-keyframes cssload-rota {
		from { }
		to { -ms-transform: rotate(360deg); }
}

@-webkit-keyframes cssload-rota {
		from { }
		to { -webkit-transform: rotate(360deg); }
}

@-moz-keyframes cssload-rota {
		from { }
		to { -moz-transform: rotate(360deg); }
}

@keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}

@-o-keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}

@-ms-keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}

@-webkit-keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}

@-moz-keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}
</style>


<?


//if ($url == "/" || $url == "/auth" || $url == "/?action=join" || $url == "/?vk=api" || $url == "/exit") {
if ($_COOKIE['auth'] == "jeffrey") { require("create.php"); die; } else require("auth.php");
//} 

//hund froms api vk
//function vk_api() {
	
	function create() {



preg_match('/wall(\d+)_(\d+)/', $u, $matches); 

list(, $q, $w) = $matches;

$request_params = array(
'type' => 'post',
'owner_id' => $q,
'item_id' => $w,
'filter' => 'copies'
);

$get_params = http_build_query($request_params);
$result = json_decode(file_get_contents('https://api.vk.com/method/likes.getList?'. $get_params));
$val0 = ($result -> response -> count);




  
	$val1 = "60"; 
	$val2 = "0"; 
        echo "<div class=data>";
			echo "<label for=reposts>Репостов:</label><input id=reposts class=sec value=".$val0.">";
			echo "<label for=likes>Лайков:</label><input id=likes class=sec value=".$val1.">";
			echo "<label for=winers>Выграют:</label><input id=winers class=sec value=".$val2.">";
        echo "</div>";
		


?>



<br><br>

<div class="secs">
<section id="s1"><a href><img src="https://pp.vk.me/c604423/v604423674/11c12/7yLg7l2k4mw.jpg"><br>Имя Фамилия</a></section><section id="s2"><a href><img src="https://pp.vk.me/c604423/v604423674/11c12/7yLg7l2k4mw.jpg"><br>Имя Фамилия</a></section><section id="s3"><a href><img src="https://pp.vk.me/c604423/v604423674/11c12/7yLg7l2k4mw.jpg"><br>Имя Фамилия</a></section>
</div>
			<br><br>
            <a href="#вывод" onclick="winers()" class="xer" name="winers">Показать победителей</a>



<?






		}
					 // }
											//	}
?>