<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>


<?php 	
$site= file_get_contents("http://www.haberturk.com/gundem");
$ara='@<div class="box-xs-6 box-sm-6 box-md-6 box-lg-6">(.*?)</div>@si';
preg_match_all($ara, $site, $matches);
foreach ($matches as $haberler) {
	foreach ($haberler as $haber) {
		echo $haber;
	}
}

?>
<script type="text/javascript">
	$('a').click(function(event){
		event.stopPropagation();
		event.preventDefault();
		var link=$(this).attr('href')
		window.location.href= "http://www.haberturk.com"+link;
		
	})
</script>
</body>
</html>