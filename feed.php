<?php
	

include_once("../LevelSkullFrameWork/Feed.01.php");
include_once("../LevelSkullFrameWork/MySQLi.01.php");
include_once("cx.php");

$sql = new MySQLiDL($cx);
$sql->Open();

$feed = new Feed($sql,"MySQL");

$query = "select 
		nbr, 
		case when isnull(title) then '' else title end as title, 
		case when isnull(txt) then '' else txt end as txt, 
		case when isnull(link) then '' else link end as link 
	from 
		articles 
	where 
		blog_nbr = 1 
	order by 
		nbr desc";
$data['articles'] = $feed->AssocArray($query);



echo json_encode($data);

?>