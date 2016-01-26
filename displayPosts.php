 <?php

require 'connectToLoginCreds.php';

function displayPosts($str){
    $display_query=$str;
    $select=mysql_query($display_query);

    //   IF NO POSTS:
    if(mysql_num_rows($select)==0)
        echo "<div id=\"noPosts\"><h1>Dayum...</h1><p>There are no new posts to show.";

    else{



        //---------GET DATA FROM DATABASE, SET TEXT TO DISPLAY--------
        while($row=mysql_fetch_assoc($select)){

        $p = $row["poster"];


        //   If users post:
        if($p === $_SESSION['id']){
            $fn = "You";
            $ln = "";
            $tens = ($row['anony'] == 1) ? "said (Anonymously):" : " said:";

        }

        //    not users post:
        else{

            $match_query="SELECT `firstname`,`lastname` from `login creds` where `email`='$p'";    
            $match_result=mysql_query($match_query);
            $match_row=mysql_fetch_assoc($match_result);

            //Check if post is anonymous:
            $fn = ($row['anony'] == 1) ? "Someone" : $match_row['firstname'];
            $ln = ($row['anony'] == 1) ? "" : $match_row['lastname'];

            $tens = " said:";
        }

        //Name of jpg file to display as poster:
        $pic_id = ($row['anony'] == 1) ? "Someone" : $row['poster'];

        //heading:
        $top = ($row['anony'] == 0) ? '<a class="userLinkToProfile" href="profilePage.php?profile='.$p.'">'.$fn.' '.$ln.'</a>'.$tens : $fn.' '.$ln.$tens;

        //ID Of post:
        $postId = $row['id'];



        //for time of post:
        require 'timeOfPost.php';
        
        //for likes:
        require 'likeOfPost.php';


        /*      post content:      */


        //htmlspecialchars is to escape html tags user may have typed in
        //str_replace is to replace the <br /> tags, converted by htmlspecialchars back to html tags
        $pc = str_replace("&lt;br /&gt;", "<br />", htmlspecialchars($row['posttext']));




        /*          Final echo of feed div:      */
        echo '<div class="feed" id='.$postId.'><div class="feedHead"><img src="ProfilePics/'.$pic_id.'.jpg"></img><p>'.$top.'<br /><span class="showTime">&nbsp;'.$displayTimeFormat.'</span></p></div><p class="postContent">'.$pc.'</p><div class="commentBox"><table> <tr>'.$tdLike.'<td class="dislike">Dislike</td><td class="share">Promote</td></tr> </table></div></div>';
        
        }//end of while

    }
}
?>