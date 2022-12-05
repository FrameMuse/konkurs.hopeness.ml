<? if ($_COOKIE['auth'] == "jeffrey"): ?>
<? //include('read_cache.php'); ?>
<? require("head.php"); ?>
<body class="noscroll">
<div id="outercont" class="clearfix">
    <div id="innercont" class="clearfix">
	
		<div id="content" class="bodycontainer clearfix">
			<h1></h1>
			<form method="post" action="?vk=api">
            <input class="input" type="submit" value="Создать конкурс" name="submity">
			<input class="input" type="text" placeholder="Введите wall-1234567_890" name="url">
			</form>
		<?



 if ($_GET['vk'] == "api" and $_POST['submity']) {

 $u = $_POST['url'];
 
preg_match('/wall-(\d+)_(\d+)/', $u, $matches); 

list(, $q, $w) = $matches;

	 foreach (array("copies", "likes") as &$val) { 
		 
	 echo $val;
$request_params = array(
'type' => 'post',
'owner_id' => -$q,
'item_id' => $w,
'filter' => $val
);

$get_params = http_build_query($request_params);
$result = json_decode(file_get_contents('https://api.vk.com/method/likes.getList?'. $get_params));
		 if ( isset($val0)) {
			 $val1 = ($result -> response -> count);
		 } else {
			 $val0 = ($result -> response -> count);
		 }
		 
var_dump($result);

	 }
  
	
	$val2 = "3"; 
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






		

 } else echo "Данные не отправлены";




?>
			<br><br>
			
<!-- organization without a cool abbreviation
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7164817697493111"
     data-ad-slot="3643175788"
     data-ad-format="auto"></ins>
<script async>
(adsbygoogle = window.adsbygoogle || []).push({});
</script> -->
			<br>
			<div id="socialmedia" class="clearfix">
				<ul>
<li><a href="/exit" rel="external">Удалить куки(auth)</a></li><br>
					<li><a href="https://www.facebook.com/" rel="external"><span class="fa fa-facebook"></span></a></li>
					<li><a href="https://twitter.com/" rel="external"><span class="fa fa-twitter"></span></a></li>
					<li><a href="https://plus.google.com/" rel="external"><span class="fa fa-google-plus"></span></a></li>
					<li><a  href="https://vk.com/jeffreysimps" rel="external"><span class="fa fa-vk"></span></a></li>
				</ul>
			</div>
			
		<div id="copyright" class="bodycontainer clearfix">
			<a href="http://pr-cy.ru/a/konkurs.hopeness.ml" target="_blank">
  <img src="https://s.pr-cy.ru/counters/konkurs.hopeness.ml" alt="Счетчик PR-CY.Rank">
</a>
			<p>&copy; Валерий Зинченко 2015-<?=date('20y')?> <a href="https://www.HopeNess.ml" rel="external">HopeNess</a> All rights recived. | Все права защищены. | Jeffrey@ Official Site</p>
			
		</div>

	</div>
</div>
	</div>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
</body>
</html>
<? include('write_cache.php'); ?>
<? endif; ?>