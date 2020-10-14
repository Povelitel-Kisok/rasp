<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Расписание</title>
  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <link href="css/mdb.min.css" type="text/css" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <link rel="shortcut icon" href="img/logo1.png" type="image/png">
 </head>
 <body>
<?php
	require_once 'php/phpQuery.php';
	$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  
	$file=file_get_contents('https://s.kubsau.ru/?type_schedule=3&val=310%D1%8D%D0%BA', false, stream_context_create($arrContextOptions));
	$doc = phpQuery::newDocument($file);
	$text = $doc->find('.h2-responsive strong');
	echo $text;
	$text = $doc->find('.card.card-sched:eq(0)');
	echo $text;
	
	$file=file_get_contents('https://s.kubsau.ru/?type_schedule=3&val=403%D1%8D%D0%BA', false, stream_context_create($arrContextOptions));
	$doc = phpQuery::newDocument($file);
	$text = $doc->find('.h2-responsive strong');
	echo $text;
	$text = $doc->find('.card.card-sched:eq(0)');
	echo $text;
	
	$file=file_get_contents('https://s.kubsau.ru/?type_schedule=1&val=%D0%9F%D0%981821', false, stream_context_create($arrContextOptions));
	$doc = phpQuery::newDocument($file);
	$text = $doc->find('.h2-responsive strong');
	echo $text;
	$text = $doc->find('.card.card-sched:eq(0)');
	echo $text;
	
	$file=file_get_contents('https://s.kubsau.ru/?type_schedule=1&val=%D0%91%D0%981801', false, stream_context_create($arrContextOptions));
	$doc = phpQuery::newDocument($file);
	$text = $doc->find('.h2-responsive strong');
	echo $text;
	$text = $doc->find('.card.card-sched:eq(0)');
	echo $text;
?>
</body>
</html>