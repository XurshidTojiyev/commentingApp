<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  
    <?php
    
    include "conn.php";
    
    if(isset($_POST['submit'])) {
        $title = $_POST['PostTitle'];
        $imgLink = $_POST['PostImageLink'];
        
        $query = "INSERT INTO posts(id, title, imgLink) VALUES (NULL, '$title', '$imgLink')";
        $myPDO->query($query);
        
    }
    
    ?>
   
   <div class="all">
       <div class="container justify-content-center align-items-center d-flex vh-100 w-100">
           <form method="post" class="addPost">
              <label for="PostTitle">Title</label>
               <input type="text" name="PostTitle" class="form-control"><br>
                <label for="PostImageLink">Image Link</label><br>
               <textarea name="PostImageLink" id="" cols="30" rows="10" class="form-control"></textarea><br>
               <button type="submit" class="btn btn-primary" name="submit">Add Post</button>
           </form>
       </div>
   </div>
    
</body>
</html>