<?php

include('dbconn.php');

if(isset ($_GET['delete'])){
    $id=$_GET['delete'];
    delete_data($connect,$id);
}

function delete_data($connect,$id){

    $query="DELETE from logbook where id=$id";
    $exec=mysqli_query($connect,$query);
    
    if($exec){
        header('location:table.php');
        
    }else{
        $msg="Error: ". $query. "<br>" . mysqli_error($connect);
        echo $msg;
    }
}
?>