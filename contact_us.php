<!DOCTYPE html>
<html>
    <head>
        <style>
            .container {
	max-width: 640px;
	margin: 150px auto;
	background: #fff;
	border-radius: 8px;
	padding: 100px;
}
.comment {
	display: block;
	transition: all 1s;
}
.commentClicked {
	min-height: 0px;
	border: 1px solid #eee;
	border-radius: 5px;
	padding: 5px 10px
}
.container textarea {
	width: 100%;
	border: none;
	background: #E8E8E8;
	padding: 5px 10px;
	height: 50%;
	border-radius: 5px 5px 0px 0px;
	border-bottom: 2px solid #016BA8;
	transition: all 0.5s;
	margin-top: 15px;
}
button.primaryContained {
	background: #016ba8;
	color: #fff;
	padding: 10px 10px;
	border: none;
	margin-top: 0px;
	cursor: pointer;
	text-transform: uppercase;
	letter-spacing: 4px;
	box-shadow: 0px 2px 6px 0px rgba(0, 0, 0, 0.25);
	transition: 1s all;
	font-size: 10px;
	border-radius: 5px;
}
button.primaryContained:hover {
	background: #9201A8;
}
</style>
</head>
<body>
        <section id="app">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="comment">
        <p v-for="items in item" v-text="items"></p>
          </div><!--End Comment-->
          </div><!--End col -->
          </div><!-- End row -->
      <div class="row">
        <div class="col-6">
      <textarea type="text" class="input" placeholder="Write a comment" v-model="newItem" @keyup.enter="addItem()"></textarea>
          <button v-on:click="addItem()" class='primaryContained float-right' type="submit">Add Comment</button>
        </div><!-- End col -->
      </div><!--End Row -->
    </div><!--End Container -->
  </section><!-- end App -->
  <!-- Vue JS -->
<!-- Vue JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js'></script>
<!-- jQuery -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>
    $(document).ready(function(){ 
 
 $(".primaryContained").on('click', function(){
 $(".comment").addClass("commentClicked");
});//end click
$("textarea").on('keyup.enter', function(){
 $(".comment").addClass("commentClicked");
});//end keyup
});//End Function

new Vue({
 el: "#app",
 data:{
    title: 'Add a comment',
   newItem: '',
   item: [],
 },
 methods:{
   addItem  (){
   this.item.push(this.newItem);
     this.newItem = "";
   }
}

});
</script>
</body>
</html>

<?php

	$page="contact_us";
	$title="Reach us";
	require_once('header.php');
	
?>


<div class="col-md-60 address">
			<?php
				$query="select * from reach_us where uid=1";
				$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
				$contactetails=mysqli_fetch_assoc($result);
				mysqli_free_result($result);
			?>
			
				<div class="panel panel-default">
				  <div class="panel-heading">Address</div>
				  <div class="panel-body">
					  <div class="jumbotron">
						<p><?php echo $contactetails['nm']; ?></p>
						<p><?php echo $contactetails['add1']; ?></p>
						<p><?php if($contactetails['add2']!="") 
						{
							echo $contactetails['add2'];
						}
						else
							echo "";
						?></p>
						<p><?php echo $contactetails['city']; ?></p>
						<p><?php echo $contactetails['zipcode']; ?></p>
						<p><?php echo $contactetails['state']; ?></p>
						<br/>
						<p>Contact No: <?php echo $contactetails['contact_no']; ?></p>
					  </div>
				</div>
				 </div>
				</div>
			</div>

			<p>
<form method="post">
<input type="submit" value="Page Up" />
</form>
</p>