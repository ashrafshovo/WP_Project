
<?php
 
session_start();

require("../db_connect.php");
require("helper.php");
 
if (isset($_POST)) {
  $parent_id = ($_POST['reply_id'] == NULL || $_POST['reply_id'] == '') ? 0 : $_POST['reply_id'];
    $email = $_POST['comment_email'];
    $name = $_POST['comment_name'];
    $web = $_POST['comment_web'];
    $comment_text = $_POST['comment_text'];
    $depth_level = $_POST['depth_level'];
   


if(isset($_SESSION['id']))
{
  
$post_id = $_SESSION['id'];

}

   
      $pql = $con->query("UPDATE blog_post SET num_comments=num_comments+1 WHERE id=$post_id");
    
       


  $sql = $con->query("INSERT INTO comments(post_id,comment_text, parent_id, email_address, web_address, created_by) VALUES('$post_id','$comment_text', '$parent_id','$email','$web','$name')");
   

   
    $inserted_id = $con->insert_id();
    $sql = "SELECT * FROM comments WHERE comment_id=" . $inserted_id;
    $results = $con->query($sql);
    if ($results) {
        while ($row=$results->fetch_assoc()) {
            if ($depth_level < 3) {
                $reply_link = "<a href=\"#\" class=\"reply_button\" id=\"{$row['comment_id']}\">reply</a><br/>";
            } else {
                $reply_link = '';
            }
            $depth = $depth_level + 1;
            $name = strlen($row['created_by']) ? $row['created_by'] : 'anonymous user';
            echo "<li id=\"li_comment_{$row['comment_id']}\" data-depth-level=\"{$depth}\">" .
            "<div><span class=\"commenter\">{$name} says</span>&nbsp;<span class=\"comment_date\">,  {$row['created_date']}</span></div>" .
            "<div style=\"margin-top:4px;\">{$row['comment_text']}</div>" .
            $reply_link . "</li>";
        }
        echo '<div class="success">Comment successfully posted</div>';
    } else {
        echo '<div class="error">Error in adding comment</div>';
    }
} else {
    echo '<div class="error">Please enter required fields</div>';
}



header("Location:viewpost.php?id=$id");




   
   

   