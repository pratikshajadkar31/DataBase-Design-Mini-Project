<?php
 include('connection.php');


 $stmt = $conn->prepare("
 select G.G_Name , B.B_Name , BS.BS_Name , O_STATUS, P.NO_OF_COPIES,S.S_Name FROM generes G, Books B, bookstores BS, order_bookstore OB, ORDERS O, books_generes OG, PRINTS P, EDITIONS ET, SHIPPERS S, ships sp WHERE O.O_ID = OB.O_ID AND OB.BS_ID = BS.BS_ID AND OG.G_ID = G.G_ID AND B.B_ID = OG.B_ID AND P.ET_ID = ET.ET_ID AND sp.O_ID = O.O_ID AND sp.S_ID = S.S_ID ");
 $stmt -> execute();


 $stmt->setFetchMode(PDO::FETCH_ASSOC);

 return $stmt -> fetchAll();
 