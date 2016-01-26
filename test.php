<!DOCTYPE html>
<html>
<head>
	<style>
	
	div.upload{
		width: 70px;
		height:70px;
		background-color: #75eff2;
		text-align: center;
		color:#fff;
		font-size: 3em;
		transition:0.1s;
		cursor:pointer;
	}

	div.upload:hover{
		background-color: #3399cc;
	}

	div.upload input{
		border:1px solid black;
		position: relative;
		top:-60px;
		width:70px;
		height:70px;
		opacity:0;
		cursor: pointer;
	}


	</style>


	<body>
		<center>

			<img id = "blah" src = "Images/someone.png" alt = "your image" />

			<form id="form1" runat="server">

				<div class = "upload">...
					<input type="file" name="fileToUpload" id="fileToUpload" />
				</div>
				<input type = "submit" value="Go!" />
			</form>


		</center>
	</body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script>

	function readURL(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blah').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#fileToUpload").change(function(){
		readURL(this);
	});

	</script>
	</html> 