

<?php
$host = "localhost";
 $user = "root";
 $password = "";
 $database = "test_db";

 $id = "";
 $fname = "";
 $lname = "";
 $age = "";

 mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);

 try{
     $connect = mysqli_connect($host, $user, $password, $database);
 } catch (Exception $ex) {
     echo 'Error';
 }

 function getPosts(){
     $posts = array();
     $posts[0] = $_POST['id'];
     $posts[1] = $_POST['fname'];
     $posts[2] = $_POST['lname'];
     $posts[3] = $_POST['age'];
     return $posts;
 } 
        
        echo 'before isset';
        //search
        if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM users WHERE id = $data[0]";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['id'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $age = $row['age'];
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}

//insert
if(isset($_POST['insert'])){
    $data = getPosts();
    $insert_Query = "INSERT INTO `users`(`fname`, `lname`, `age`) VALUES ('$data[1]','$data[2]',$data[3])";
    try {
        $insert_Result = mysqli_query($connect,$insert_Query);
        if($insert_Result){
            if(mysqli_affected_rows($connect) > 0){
                echo 'Data Inserted';
            }
            else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert'.$ex->getMessage();
    }

}

?>