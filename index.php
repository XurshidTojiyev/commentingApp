<html>
<head>
    <meta charset="UTF-8">
    <title>Add Comments WebPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php
    
    include "conn.php";
    
    ?>
<body>
   
   <div class="all">
       <div class="container mt-5 d-flex">
       <?php
           
           $result = $myPDO->query("SELECT * FROM posts");
           foreach($result as $res) {
               ?>
                <div class="cards p-3">
                   <div class="card" style="width: 18rem;">
                      <img src="<?php echo $res['imgLink']?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $res['title']?></h5>
                        <a href="add_comment.php?id=<?php echo $res['id']?>" class="btn btn-danger">Add Comment</a>
                        <a href="post_comments.php?id=<?php echo $res['id']?>" class="btn btn-primary">Comments</a>
                  </div>
                </div>
               </div>
           <?php
           }
           
           ?>
       </div>
   </div>
    
</body>
</html>