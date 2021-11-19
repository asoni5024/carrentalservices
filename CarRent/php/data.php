<?php
//create your database and table then connect 
include("config.php");
 

$sql = "SELECT a.*
		,b.category
		,c.sub_cat_1
		,d.sub_cat_2
		FROM `productinfo` a 
		inner join category b on b.id = a.category
		inner join sub_category_1 c on c.id = a.sub_cat_1
		inner join sub_category_2 d on d.id = a.sub_cat_2
		Where a.status = 1 ORDER BY a.id DESC";
$run = mysqli_query($mysqli, $sql);
$chk = mysqli_num_rows($run);
if($chk>0)
{
	header("Content-Type: JSON");
	while($row = mysqli_fetch_assoc($run))
		{
			
                                          
			$data[] =array(
				'name'=>$row['name'],
				'category'=>$row['category'],
				'sub_cat_1'=>$row['sub_cat_1'],
				'sub_cat_2'=>$row['sub_cat_2'],
				'rs'=>$row['rs'],
				'size'=>$row['size'],
				'img1'=>$row['img1'],
				'img2'=>$row['img2'],
				'img3'=>$row['img3'],
				'img4'=>$row['img4'],
				'img5'=>$row['img5']
				
				
			);
			
		}
}

echo json_encode($data,JSON_PRETTY_PRINT);
 
 
?>