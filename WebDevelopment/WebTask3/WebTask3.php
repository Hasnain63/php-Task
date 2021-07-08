<h1>Factorial</h1>
<?php
	function getfactorial($x) {

	}
	echo getfactorial(3);
?>
<hr>
<?php /*Following HTML + PHP Code Generates Chess Board. Use Loops to create 
black and white chess boxes. Chess Board should contain 8 Rows and 8 Columns
*/   ?>
<h1>Chess Board</h1>
<table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
	<?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
 ?>
<?php 
function createChessBoard() {
	for($row=1;$row<=8;$row++)  
	{  
		//Write Code here to create Chess Board Dynamically using Loops 
	}  
} 
createChessBoard();
?>  
</table>