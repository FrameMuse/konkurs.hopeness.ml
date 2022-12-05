<?

 ?>
<? //include('read_cache.php'); ?>
<? if (!$_COOKIE['auth'] == "jeffrey"): ?>
<? require("head.php"); ?>
<body class="noscroll">
<div id="outercont" class="clearfix">
    <div id="innercont" class="clearfix">
	
		<div id="content" class="bodycontainer clearfix">
			<form method="post" action="?action=join">
            <input class="input" type="submit" name="subm" value="Авторизация">
			</form>
			
<!-- organization without a cool abbreviation 
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7164817697493111"
     data-ad-slot="3643175788"
     data-ad-format="auto"></ins>
<script async>
(adsbygoogle = window.adsbygoogle || []).push({});
</script> -->			
		<div id="copyright" class="bodycontainer clearfix">
			<div id="socialmedia" class="clearfix">
				<ul>
					<li><a title="" href="https://www.facebook.com/" rel="external"><span class="fa fa-facebook"></span></a></li>
					<li><a title="" href="https://twitter.com/" rel="external"><span class="fa fa-twitter"></span></a></li>
					<li><a title="" href="https://plus.google.com/" rel="external"><span class="fa fa-google-plus"></span></a></li>
					<li><a title="" href="https://vk.com/jeffreysimps" rel="external"><span class="fa fa-vk"></span></a></li>

				</ul>
			</div>
			<a href="http://pr-cy.ru/a/konkurs.hopeness.ml" target="_blank">
  <img src="https://s.pr-cy.ru/counters/konkurs.hopeness.ml" alt="Счетчик PR-CY.Rank">
</a>
			<p>&copy; Copyright 2015-<?=date('20y')?> <a href="https://www.HopeNess.ml" rel="external">HopeNess</a> All rights recived. | Все права защищены. | Jeffrey@ Official Site</p>
			
		</div>

	</div>
</div>
	</div>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
</body>
</html>
<? //include('write_cache.php'); ?>
<? endif; ?>