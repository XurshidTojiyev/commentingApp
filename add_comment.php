<html>
<head>
    <meta charset="UTF-8">
    <title>Add Comment Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
 
 
  
  <?php
    
    include "conn.php";
    
    if(isset($_POST['submit'])) {
        $getPostId = $_GET['id'];
        $email = $_POST['email'];
        $comment = $_POST['body'];
        
        $query = "INSERT INTO comments(id, postId, userEmail, userComment) VALUES (NULL, '$getPostId', '$email', '$comment')";
        
        $myPDO->query($query);
        
    }
    
    ?>
   
   <div class="all">
            <a href="index.php" class="btn btn-link">←Back</a>

       <div class="container justify-content-center align-items-center d-flex vh-100 w-100">
           <form method="post">
              <h1>Add Comment</h1>
               <input type="email" class="form-control" name="email" placeholder="Your Email..">
               <textarea class="form-control mt-3" name="body" id="" cols="200" rows="10" placeholder="Comment.."></textarea>
               <button class="btn btn-primary mt-3" name="submit">Add Comment</button>
           </form>
       </div>
   </div>
    
</body>
</html>