<?php
 include('connection.php');


 $stmt = $conn->prepare("select A.A_ID,B.B_Name,A.A_Name,A.A_EmailID,A.A_ContactNo from authors A , books B , author_book AB where A.A_ID = AB.A_ID AND AB.B_ID = B.B_ID order by A_ID ASC");
 $stmt -> execute();


 $stmt->setFetchMode(PDO::FETCH_ASSOC);

 return $stmt -> fetchAll();
 