<!-- <?php 
	//使用双重循环遍历二维数组
	$product=array(
			array("苹果","2kg","43"),
			array("西瓜","8kg","80"),
			array("香蕉","3kg","64")
		);
	//外部循环
	for($i=0;$i<count($product);$i++){
		//内部循环
		for($j=0;$j<count($product[$i]);$j++){
			echo $product[$i][$j]."|";
		};
		echo "<br/>";
	}
?> -->
<!-- <?php 
	//使用foreach进行的对自定义键的数组的遍历
	$product=array(
			array("产品"=>"苹果","质量"=>"2kg","价格"=>"43"),
			array("产品"=>"西瓜","质量"=>"8kg","价格"=>"80"),
			array("产品"=>"香蕉","质量"=>"3kg","价格"=>"64")
		);
	for($i=0;$i<count($product);$i++){
		foreach($product[$i] as $key=>$value){
			echo $key."--".$value."|";
		};
		echo "<br/>";
	}
?> -->
<!-- <?php 
 	$product=array(
			array("产品"=>"苹果","质量"=>"2kg","价格"=>"43"),
			array("产品"=>"西瓜","质量"=>"8kg","价格"=>"80"),
			array("产品"=>"香蕉","质量"=>"3kg","价格"=>"64")
		);
 	for($i=0;$i<count($product);$i++){
 		//使用each如果第一条有数据则取出来；使用！将数组变成数字
 		//使用list将取出来的数据拆开包装成一个数组并且赋值
 		while(!!list($key,$value)=each($product[$i])){
 			echo $key."**".$value."|";
 		}
 		echo "<br/>";
 	}
 ?> -->
<!--  <?php 
 	//对数组进行排序处理
 	$fruit=array("bananer","orange","allpe");
 	print_r($fruit);
 	echo "<br/>";
 	// $reNew=sort($fruit);
 	// 先排序 想要保持关键字的排序的话需要使用asort
 	sort($fruit);
 	//输出原数据
 	print_r($fruit);
 	echo "<br/>";
 	print_r($fruit);
 ?>  -->
 <!-- <?php 
 	$numbers=array(2,12);
 	sort($number,SORT_STRING);
 	print_r($numbers);
 ?> -->
 <?php
 	$useName=array("武器");
 	print_r($useName);
 	echo "<br/>";
 	array_unshift($useName,"李炎恢");
 	print_r($useName);
  ?>