<!-- <?php
	define(NAMBER, 100);
	echo NAMBER;
	// echo phpinfo();
	$name=$Http_POST['tireplay'];//表单提交后经过php得到
	echo $name;
?>
 -->
<!--  <?php
    //初始化素组
	$number=array("李彦宏","马云","李炎恢");
	echo $number[0];
 ?>
 -->
 <!-- <?php 
 	//自定义键数组
 	$userNumber=array('baidu'=>'李炎恢','taobao'=>'马云','360'=>'周鸿祎','alibaba');
 	// for($i=0;$i<=3;$i++){
 	// 	echo $userNumber[$i]."<br/>";
 	// }
 	//print_r($userNumber);
 	//echo $userNumber["360"];
 	
 ?> -->
 <!-- <?php 
 	//创建一个数组 包含一个元素
 	$userAges=array("武器"=>"19");
 	//打印出其年龄
 	echo $userAges["武器"];
 ?> -->
<!-- <?php 
	//不使用array关键字来创建数组
	$userAges["武器"]=19;
	$userAges["李彦辉"]=30;
	$userAges["小明"]=40;
	print_r($userAges);
?> -->
<!-- <?php
	$useName=array("baidu"=>"李彦宏","360"=>"周鸿祎","taobao"=>"马云");
	foreach($useName as $key=>$value ){
		echo $key.岁."-".$value."<br/>";
	}
?>	 -->
<!-- <?php 
	//创建一个数组 加上索引自定义键
	$useAge=array("武器"=>"10","李炎恢"=>"27","胡新鹏"=>"80");
	//打印出数组
	print_r($useAge);
	//使用foreach遍历含有键的数组
	foreach($useAge as $key=>$value){
		echo $key."的年龄"."--".$value;
	}
?> -->
<!-- <?php
	$userAges=array("武器"=>"19","李炎恢"=>"20","马云"=>"37");
	//print_r(each($userAges));
	//使用each函数 第一次包装第一个元素的数组 多次使用时一个个向后推移
	//使用while循环打印出数组的值
	while(!!$a=each($userAges)){
		echo($a[key]."--".$a[value]."<br/>");
	};
?> -->
<!-- <?php
	//创建一个数组并赋值
	$a=array("aaa","bbb","ccc","ddd");
	//print_r($a);
	//使用list函数将数组元素拆分并赋值；
	list($var1,$var2)=$a;
	echo $var2;
?> -->
<!-- <?php
	$a=array("武器"=>"19","李炎恢"=>"20","马云"=>"37");
	//使用list和each数组，each之后得到含有0,1,key,value的新的数组
	//再使用list取得0(key),1(value)的值分别赋值
	//print_r(each($a));
	list($name,$age)=each($a);
	echo "$name--$age";
?> -->

<!-- <?php 
//reset数组重复得到第一个数据
	$a=array("武器"=>"19","李炎恢"=>"20","马云"=>"37","zhao"=>"37");
	//将数组各个元素拆开
	$b=each($a);
	//得到value和key的值并输出
	echo $b[key].$b[value]."<br/>";
	$c=each($a);
	echo $c[0].$c[1]."<br/>";
	reset($a);
	$d=each($a);
	echo $d[key].$d[value],"<br/>";
	list($var1,$var2)=each($a);
	echo "$var1-$var2";
?> -->
<!-- <?php 
//使用array_unique去除重复值的数据
	$a=array("武器"=>"19","李炎恢"=>"20","马云"=>"37","zhao"=>"37");
	print_r($a);
	echo "<br/>";
	$new=array_unique($a);
	print_r($new);
?> -->
<?php
	$numbers=array(
			array("苹果","2","31.7"),
			array("香蕉","3","64.9"),
			array("芒果","4","76.8")
		);
	for($i=0;$i<count($numbers);$i++){
		for($j=0;$j<count($numbers[$i]);$j++){
			echo $numbers[$i][$j].'|';
		}
		echo "<br/>";	
	}
?>