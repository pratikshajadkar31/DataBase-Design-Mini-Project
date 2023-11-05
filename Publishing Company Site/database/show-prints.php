<?php
 include('connection.php');


 $stmt = $conn->
 prepare("select O.O_ID , B.B_NAME,E.ET_PRINTS,E.ET_PublishingDate,P.PH_NAME,E.ET_PRICE,O.O_STATUS,S.S_NAME,S.S_EMAILID
 FROM ORDERS O, EDITIONS E, PRINT_HOUSE P,SHIPPERS S,BOOKS B
 WHERE B.B_ID = O.B_ID AND O.ET_ID=E.ET_ID AND E.B_ID = B.B_ID AND O.S_ID = S.S_ID");
 $stmt -> execute();


 $stmt->setFetchMode(PDO::FETCH_ASSOC);

 return $stmt -> fetchAll();
 