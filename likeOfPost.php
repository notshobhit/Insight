<?php

    /*           LIKE OF A POST:           */


    //get number of likes:                    
        $query = "SELECT `likes` FROM `posts` WHERE `id` = '$postId'";
        $r = mysql_fetch_assoc(mysql_query($query));
        $likes = $r['likes'];

    //check if post is liked:
        if (file_exists("likeData/".$postId.".txt")){
            $handle = fopen("likeData/".$postId.".txt", "r");
            if(filesize("likeData/".$postId.".txt") == 0)
                $contents = "";
            else
                $contents = fread($handle, filesize("likeData/".$postId.".txt"));


            if(strstr($contents, $_SESSION['id']))
                $tdLike = '<td class="like" liked="yes" style="color: rgb(171, 171, 171); cursor: auto;">Liked | '.$likes.'</td>';

            else
                $tdLike = ($_SESSION['id'] == $row['poster']) ? '<td class="like" postId="'.$postId.'">Like | '.$likes.'</td>' : '<td class="like" postId="'.$postId.'">Like</td>';
        }
    else //file doesnt exist: 0 likes
    $tdLike = ($_SESSION['id'] == $row['poster']) ? '<td class="like" postId="'.$postId.'">Like | '.$likes.'</td>' : '<td class="like" postId="'.$postId.'">Like</td>';
?>