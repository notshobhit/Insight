<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	$targ_w = $targ_h = 150;
	$jpeg_quality = 120;

    //CHANGE:
	$src = 'Images/bobby.jpg';
	
    $img_r = imagecreatefromjpeg($src);
	$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

	imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
	$targ_w,$targ_h,$_POST['w'],$_POST['h']);

//	header('Content-type: image/jpeg');
//	imagejpeg($dst_r,null,$jpeg_quality);

    header("Location: new1.php?q=".$dst_r);

	exit(0);
}
// If not a POST request, display page below:
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upload profile pcture</title>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        <script src="js/jquery.js"></script>
        <script src="js/jquery.Jcrop.js"></script>
        <link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />

        <script type="text/javascript">

        $(function(){

            $('#crop').Jcrop({
                    aspectRatio: 1,
                    onSelect: updateCoords
                });
            });

            function updateCoords(c){

                $('#x').val(c.x);
                $('#y').val(c.y);
                $('#w').val(c.w);
                $('#h').val(c.h);
            
            };

            function checkCoords(){

                if (parseInt($('#w').val())) return true;
                
                alert('Please select a crop region then press submit.');
                return false;
            
            };

        </script>
        

        <style type="text/css">
        #target {
            background-color: #ccc;
            width: 500px;
            height: 330px;
            font-size: 24px;
            display: block;
          }

        #crop{
            width: 50%;
            height: 50%;
          }

        </style>

    </head>
    

    <body>
        <!-- This is the image we're attaching Jcrop to -->
        <img src="Images/bobby.jpg" id="crop" />


        <!-- This is the form that our event handler fills -->
        <form action="uploadImage.php" method="post" onsubmit="return checkCoords();">
            <input type="hidden" id="x" name="x" />
            <input type="hidden" id="y" name="y" />
            <input type="hidden" id="w" name="w" />
            <input type="hidden" id="h" name="h" />
            <input type="submit" value="Crop Image" class="btn btn-large btn-inverse" />
        </form>

                  
        </div>
    </body>

    <script>
        /*function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#crop').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });
        */
    </script>

</html>
