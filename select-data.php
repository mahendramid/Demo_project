<?php
    
    
    
    $result = mysqli_query($conn, "select * from basic");
    
    $data = array();
    
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
    print json_encode($data);
    
    
    
    
    

$conn->close();

?>
