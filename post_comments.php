<html>
<head>
    <meta charset="UTF-8">
    <title>Comments</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
   
   <div class="all mt-5">
      <a href="index.php" class="btn btn-link">←Back</a>
       <div class="container">
           <h1>Comments</h1>
           <?php
           $id = $_GET['id'];
           
           
           include "conn.php";
           $query = "SELECT * FROM comments WHERE postId = $id";
           $result = $myPDO->query($query);
           ?>
           
           <?php
           
           foreach($result as $res) {
             ?>
           <div class="comment border p-3 mt-3">
               <figure>
                      <p class="p-2 text-body-tertiary">
                        <?php echo $res['userEmail']?>
                      </p>
                        <blockquote class="blockquote">
                        <p><?php echo $res['userComment']?></p>
                      </blockquote>
                </figure>
           </div>
           <?php
           }
           
           
           ?>
       </div>
   </div>
    
</body>
</html>