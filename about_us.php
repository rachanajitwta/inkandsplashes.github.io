<?php
		$page="aboutus";
		$title="About us";
		
		include('Admin/conn.php');
		$query="select * from pages where page_nm='about_us'";
		$result=mysqli_query($link,$query)  or die("Error fetching data.".mysqli_error($link));
		$row=mysqli_fetch_assoc($result);
		$desc=$row['page_desc'];
		
?>
		
            
                <div class="panel panel-default">
				  
                  <div class="panel-body">
                    
                        <?php echo $desc; ?>
                   
                  </div>
                </div>
             
            
		
          
<?php
	require('footer.php');
?>