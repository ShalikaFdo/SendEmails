<html>
<head>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <title>Simple Email Example</title>
    <style type="text/css">
    .container {
        width: 300px;
        clear: both;
    }
    .container input {
        width: 100%;
        clear: both;
    }
	</style>
<!---<html comment>-->
	<script>
		$(document).ready(
			function() 
			{
					$('#sub').click(function(){
						var em = document.getElementById('email').value;
						var sub = document.getElementById('subject').value;
						var bd = document.getElementById('body').value;
						
						var dataString = 'email='+ em + '&subject=' + sub + '&body=' + bd;
						
						if(em=='' || sub=='' || bd==''){
							alert("please fill the empty fields");
						}
						else{
							$.ajax({
							type: "POST",
							url: "emailToCandidate.php",
							data: dataString,
							success: function(result){
								alert(result);
							}
							});
						}
						return false;
					});				
	        });
	</script>

</head>
<body>
<div class="container">
<form method="POST">
 <label>Email</label>
 <input type="text" id="email" name="mail"><br />
 <label>Subject</label>
 <input type="text" id="subject" name="sub"><br />
 <label>Body</label>
 <input type="text" id="body" name="content"><br><br />
 <input type="submit" id="sub" value="Send Email">
</form>
</div>
</body>
</html>