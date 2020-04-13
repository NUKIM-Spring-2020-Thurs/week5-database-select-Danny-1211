<?php 
	$link=@mysqli_connect('localhost','root','password','php2020');  //連結資料庫
		if(!$link){
			echo "連接錯誤"."<br/>";
		}else{
			echo "連接成功"."<br/>";
		}
     $SQL="SELECT * FROM employee";
   	if($result=mysqli_query($link,$SQL)){
   		  	echo "<table border='1'>";
   		  	echo "<tr>";
   		  	echo "<th>"."No"."</th>"."<th>"."Fname"."</th>"."<th>"."Minit"."</th>"."<th>"."Lname"."</th>"."<th>"."Bdate"."</th>"."<th>"."Address"."</th>"."<th>"."Sex"."</th>"."<th>"."Salary"."</th>";
   		  	echo "</tr>";
   	    while( $row = mysqli_fetch_assoc($result) ){ 
   		  		echo "<tr>";
        		echo  "<td>".$row["No"]."</td>"."<td>".$row["Fname"]."</td>"."<td>".$row["Minit"]."</td>"."<td>".$row["Lname"]."</td>"."<td>".$row["Bdate"]."</td>"."<td>".$row["Address"]."</td>"."<td>".$row["Sex"]."</td>"."<td>".$row["Salary"]."</td>";
      		  }
      		echo "</tr>";
      		echo "</table>";
   	}
?>