<?php

    /*           LIKE OF A POST:           */


    //get number of likes:                    
        $query = "SELECT `likes` FROM `posts` WHERE `id` = '$postId'";
        $r = mysql_fetch_assoc(mysql_query($query));

    //check if post is liked:
        if (file_exists("../likeData/".$postId.".txt")){
            $handle = fopen("../likeData/".$postId.".txt", "r");
            if(filesize("../likeData/".$postId.".txt") == 0)
                $contents = 0;
            else
                $contents = fread($handle, filesize("../likeData/".$postId.".txt"));


            if(strstr($contents, $_SESSION['id'])){
                $likeStat = "liked";
                $likes = $r['likes'];
                //$tdLike = '<td class="like" liked="yes" style="color: rgb(171, 171, 171); cursor: auto;">Liked | '.$likes.'</td>';
            }
            else{
                $likeStat = "none";
                $likes = "";
                //$tdLike = ($_SESSION['id'] == $row['poster']) ? '<td class="like" postId="'.$postId.'">Like | '.$likes.'</td>' : '<td class="like" postId="'.$postId.'">Like</td>';
            }
        }
    else{ //file doesnt exist: 0 likes
        $likeStat = "none";
        $likes = "";
    }
    //$tdLike = ($_SESSION['id'] == $row['poster']) ? '<td class="like" postId="'.$postId.'">Like | '.$likes.'</td>' : '<td class="like" postId="'.$postId.'">Like</td>';

?>