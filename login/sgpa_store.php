<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  // connect to the database
$db = mysqli_connect('localhost', 'root', '', 'student_grade_db');
$sem=$_SESSION['semester'];




if($sem == '1st Semester'){
  
$username=$_SESSION['username'];
$sem=$_SESSION['semester'];

if(isset($_REQUEST['sgpa_data'])) {


$queryy = "SELECT * FROM sgpa WHERE username='$username' and sem='$sem'"; 
$result =mysqli_query($db,$queryy);

if(mysqli_num_rows($result) > 0){
$s1=$_REQUEST['subject1'];
$s2=$_REQUEST['subject2'];
$s3=$_REQUEST['subject3'];
$s4=$_REQUEST['subject4'];
$s5=$_REQUEST['subject5'];
$s6=$_REQUEST['subject6'];
$s7=$_REQUEST['subject7'];
$s8=$_REQUEST['subject8'];
$s9=$_REQUEST['subject9'];
$out=$_REQUEST['sgpaop'];
$username=$_SESSION['username'];



  $query1 = "UPDATE sgpa
  SET sub1 = '$s1',sub2 ='$s2',sub3 = '$s3',sub4 = '$s4', sub5 = '$s5',sub6 = '$s6',sub7='$s7',sub8='$s8',sub9='$s9',sgpa='$out'
  WHERE username='$username' AND sem='$sem'";
  $q2="UPDATE  cgpa set semester1='$out' where username='$username' ";
  mysqli_query($db, $q2);
   
 if(mysqli_query($db, $query1)){

     header('location:grades.php');
   
 }
 else{
     echo "ERROR";
 }
 
    
}

else{


    $s1=$_REQUEST['subject1'];
    $s2=$_REQUEST['subject2'];
    $s3=$_REQUEST['subject3'];
    $s4=$_REQUEST['subject4'];
    $s5=$_REQUEST['subject5'];
    $s6=$_REQUEST['subject6'];
    $s7=$_REQUEST['subject7'];
    $s8=$_REQUEST['subject8'];
    $s9=$_REQUEST['subject9'];
    $out=$_REQUEST['sgpaop'];
$username=$_SESSION['username'];



$query = "INSERT INTO sgpa 
VALUES('$username','$sem','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9', '$out')";
if(mysqli_query($db, $query)){
    header('location:grades.php');
  
}
else{
    echo "ERROR";
}
$q2="UPDATE  cgpa set semester1='$out' where username='$username' ";
mysqli_query($db, $q2); 
}
}
}



if($sem== '2nd Semester'){
  
    $username=$_SESSION['username'];
    $sem=$_SESSION['semester'];
    
    if(isset($_REQUEST['sgpa_data'])) {
    
    
    $queryy = "SELECT * FROM sgpa WHERE username='$username' and sem='$sem'"; 
    $result =mysqli_query($db,$queryy);
    
    if(mysqli_num_rows($result) > 0){
    $s1=$_REQUEST['subject1'];
    $s2=$_REQUEST['subject2'];
    $s3=$_REQUEST['subject3'];
    $s4=$_REQUEST['subject4'];
    $s5=$_REQUEST['subject5'];
    $s6=$_REQUEST['subject6'];
    $s7=$_REQUEST['subject7'];
    $s8=$_REQUEST['subject8'];
    $s9=$_REQUEST['subject9'];
    $out=$_REQUEST['sgpaop'];
    $username=$_SESSION['username'];
    
    
    
      $query1 = "UPDATE sgpa
      SET sub1 = '$s1',sub2 ='$s2',sub3 = '$s3',sub4 = '$s4', sub5 = '$s5',sub6 = '$s6',sub7='$s7',sub8='$s8',sub9='$s9',sgpa='$out'
      WHERE username='$username' AND sem='$sem'";
      $q2="UPDATE  cgpa set semester2='$out' where username='$username' ";
      mysqli_query($db, $q2);
       
     if(mysqli_query($db, $query1)){
    
         header('location:grades.php');
       
     }
     else{
         echo "ERROR";
     }
     
        
    }
    
    else{
    
    
        $s1=$_REQUEST['subject1'];
        $s2=$_REQUEST['subject2'];
        $s3=$_REQUEST['subject3'];
        $s4=$_REQUEST['subject4'];
        $s5=$_REQUEST['subject5'];
        $s6=$_REQUEST['subject6'];
        $s7=$_REQUEST['subject7'];
        $s8=$_REQUEST['subject8'];
        $s9=$_REQUEST['subject9'];
        $out=$_REQUEST['sgpaop'];
    $username=$_SESSION['username'];
    
    
    
    $query = "INSERT INTO sgpa 
    VALUES('$username','$sem','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9', '$out')";
    if(mysqli_query($db, $query)){
        header('location:grades.php');
      
    }
    else{
        echo "ERROR";
    }
    $q2="UPDATE  cgpa set semester2='$out' where username='$username' ";
    mysqli_query($db, $q2); 
    }
    }
    }


    if($sem== '3rd Semester'){
  
        $username=$_SESSION['username'];
        $sem=$_SESSION['semester'];
        
        if(isset($_REQUEST['sgpa_data'])) {
        
        
        $queryy = "SELECT * FROM sgpa WHERE username='$username' and sem='$sem'"; 
        $result =mysqli_query($db,$queryy);
        
        if(mysqli_num_rows($result) > 0){
        $s1=$_REQUEST['subject1'];
        $s2=$_REQUEST['subject2'];
        $s3=$_REQUEST['subject3'];
        $s4=$_REQUEST['subject4'];
        $s5=$_REQUEST['subject5'];
        $s6=$_REQUEST['subject6'];
        $s7=$_REQUEST['subject7'];
        $s8=$_REQUEST['subject8'];
        $s9=$_REQUEST['subject9'];
        $out=$_REQUEST['sgpaop'];
        $username=$_SESSION['username'];
        
        
        
          $query1 = "UPDATE sgpa
          SET sub1 = '$s1',sub2 ='$s2',sub3 = '$s3',sub4 = '$s4', sub5 = '$s5',sub6 = '$s6',sub7='$s7',sub8='$s8',sub9='$s9',sgpa='$out'
          WHERE username='$username' AND sem='$sem'";
          $q2="UPDATE  cgpa set semester3='$out' where username='$username' ";
          mysqli_query($db, $q2);
           
         if(mysqli_query($db, $query1)){
        
             header('location:grades.php');
           
         }
         else{
             echo "ERROR";
         }
         
            
        }
        
        else{
        
        
            $s1=$_REQUEST['subject1'];
            $s2=$_REQUEST['subject2'];
            $s3=$_REQUEST['subject3'];
            $s4=$_REQUEST['subject4'];
            $s5=$_REQUEST['subject5'];
            $s6=$_REQUEST['subject6'];
            $s7=$_REQUEST['subject7'];
            $s8=$_REQUEST['subject8'];
            $s9=$_REQUEST['subject9'];
            $out=$_REQUEST['sgpaop'];
        $username=$_SESSION['username'];
        
        
        
        $query = "INSERT INTO sgpa 
        VALUES('$username','$sem','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9', '$out')";
        if(mysqli_query($db, $query)){
            header('location:grades.php');
          
        }
        else{
            echo "ERROR";
        }
        $q2="UPDATE  cgpa set semester3='$out' where username='$username' ";
        mysqli_query($db, $q2); 
        }
        }
        }
        if($sem== '4th Semester'){
  
            $username=$_SESSION['username'];
            $sem=$_SESSION['semester'];
            
            if(isset($_REQUEST['sgpa_data'])) {
            
            
            $queryy = "SELECT * FROM sgpa WHERE username='$username' and sem='$sem'"; 
            $result =mysqli_query($db,$queryy);
            
            if(mysqli_num_rows($result) > 0){
            $s1=$_REQUEST['subject1'];
            $s2=$_REQUEST['subject2'];
            $s3=$_REQUEST['subject3'];
            $s4=$_REQUEST['subject4'];
            $s5=$_REQUEST['subject5'];
            $s6=$_REQUEST['subject6'];
            $s7=$_REQUEST['subject7'];
            $s8=$_REQUEST['subject8'];
            $s9=$_REQUEST['subject9'];
            $out=$_REQUEST['sgpaop'];
            $username=$_SESSION['username'];
            
            
            
              $query1 = "UPDATE sgpa
              SET sub1 = '$s1',sub2 ='$s2',sub3 = '$s3',sub4 = '$s4', sub5 = '$s5',sub6 = '$s6',sub7='$s7',sub8='$s8',sub9='$s9',sgpa='$out'
              WHERE username='$username' AND sem='$sem'";
              $q2="UPDATE  cgpa set semester4='$out' where username='$username' ";
              mysqli_query($db, $q2);
               
             if(mysqli_query($db, $query1)){
            
                 header('location:grades.php');
               
             }
             else{
                 echo "ERROR";
             }
             
                
            }
            
            else{
            
            
                $s1=$_REQUEST['subject1'];
                $s2=$_REQUEST['subject2'];
                $s3=$_REQUEST['subject3'];
                $s4=$_REQUEST['subject4'];
                $s5=$_REQUEST['subject5'];
                $s6=$_REQUEST['subject6'];
                $s7=$_REQUEST['subject7'];
                $s8=$_REQUEST['subject8'];
                $s9=$_REQUEST['subject9'];
                $out=$_REQUEST['sgpaop'];
            $username=$_SESSION['username'];
            
            
            
            $query = "INSERT INTO sgpa 
            VALUES('$username','$sem','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9', '$out')";
            if(mysqli_query($db, $query)){
                header('location:grades.php');
              
            }
            else{
                echo "ERROR";
            }
            $q2="UPDATE  cgpa set semester4='$out' where username='$username' ";
            mysqli_query($db, $q2); 
            }
            }
            }
            if($sem== '5th Semester'){
  
                $username=$_SESSION['username'];
                $sem=$_SESSION['semester'];
                
                if(isset($_REQUEST['sgpa_data'])) {
                
                
                $queryy = "SELECT * FROM sgpa WHERE username='$username' and sem='$sem'"; 
                $result =mysqli_query($db,$queryy);
                
                if(mysqli_num_rows($result) > 0){
                $s1=$_REQUEST['subject1'];
                $s2=$_REQUEST['subject2'];
                $s3=$_REQUEST['subject3'];
                $s4=$_REQUEST['subject4'];
                $s5=$_REQUEST['subject5'];
                $s6=$_REQUEST['subject6'];
                $s7=$_REQUEST['subject7'];
                $s8=$_REQUEST['subject8'];
                $s9=$_REQUEST['subject9'];
                $out=$_REQUEST['sgpaop'];
                $username=$_SESSION['username'];
                
                
                
                  $query1 = "UPDATE sgpa
                  SET sub1 = '$s1',sub2 ='$s2',sub3 = '$s3',sub4 = '$s4', sub5 = '$s5',sub6 = '$s6',sub7='$s7',sub8='$s8',sub9='$s9',sgpa='$out'
                  WHERE username='$username' AND sem='$sem'";
                  $q2="UPDATE  cgpa set semester5='$out' where username='$username' ";
                  mysqli_query($db, $q2);
                   
                 if(mysqli_query($db, $query1)){
                
                     header('location:grades.php');
                   
                 }
                 else{
                     echo "ERROR";
                 }
                 
                    
                }
                
                else{
                
                
                    $s1=$_REQUEST['subject1'];
                    $s2=$_REQUEST['subject2'];
                    $s3=$_REQUEST['subject3'];
                    $s4=$_REQUEST['subject4'];
                    $s5=$_REQUEST['subject5'];
                    $s6=$_REQUEST['subject6'];
                    $s7=$_REQUEST['subject7'];
                    $s8=$_REQUEST['subject8'];
                    $s9=$_REQUEST['subject9'];
                    $out=$_REQUEST['sgpaop'];
                $username=$_SESSION['username'];
                
                
                
                $query = "INSERT INTO sgpa 
                VALUES('$username','$sem','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9', '$out')";
                if(mysqli_query($db, $query)){
                    header('location:grades.php');
                  
                }
                else{
                    echo "ERROR";
                }
                $q2="UPDATE  cgpa set semester5='$out' where username='$username' ";
                mysqli_query($db, $q2); 
                }
                }
                }

                if($sem== '6th Semester'){
  
                    $username=$_SESSION['username'];
                    $sem=$_SESSION['semester'];
                    
                    if(isset($_REQUEST['sgpa_data'])) {
                    
                    
                    $queryy = "SELECT * FROM sgpa WHERE username='$username' and sem='$sem'"; 
                    $result =mysqli_query($db,$queryy);
                    
                    if(mysqli_num_rows($result) > 0){
                    $s1=$_REQUEST['subject1'];
                    $s2=$_REQUEST['subject2'];
                    $s3=$_REQUEST['subject3'];
                    $s4=$_REQUEST['subject4'];
                    $s5=$_REQUEST['subject5'];
                    $s6=$_REQUEST['subject6'];
                    $s7=$_REQUEST['subject7'];
                    $s8=$_REQUEST['subject8'];
                    $s9=$_REQUEST['subject9'];
                    $out=$_REQUEST['sgpaop'];
                    $username=$_SESSION['username'];
                    
                    
                    
                      $query1 = "UPDATE sgpa
                      SET sub1 = '$s1',sub2 ='$s2',sub3 = '$s3',sub4 = '$s4', sub5 = '$s5',sub6 = '$s6',sub7='$s7',sub8='$s8',sub9='$s9',sgpa='$out'
                      WHERE username='$username' AND sem='$sem'";
                      $q2="UPDATE  cgpa set semester6='$out' where username='$username' ";
                      mysqli_query($db, $q2);
                       
                     if(mysqli_query($db, $query1)){
                    
                         header('location:grades.php');
                       
                     }
                     else{
                         echo "ERROR";
                     }
                     
                        
                    }
                    
                    else{
                    
                    
                        $s1=$_REQUEST['subject1'];
                        $s2=$_REQUEST['subject2'];
                        $s3=$_REQUEST['subject3'];
                        $s4=$_REQUEST['subject4'];
                        $s5=$_REQUEST['subject5'];
                        $s6=$_REQUEST['subject6'];
                        $s7=$_REQUEST['subject7'];
                        $s8=$_REQUEST['subject8'];
                        $s9=$_REQUEST['subject9'];
                        $out=$_REQUEST['sgpaop'];
                    $username=$_SESSION['username'];
                    
                    
                    
                    $query = "INSERT INTO sgpa 
                    VALUES('$username','$sem','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9', '$out')";
                    if(mysqli_query($db, $query)){
                        header('location:grades.php');
                      
                    }
                    else{
                        echo "ERROR";
                    }
                    $q2="UPDATE  cgpa set semester6='$out' where username='$username' ";
                    mysqli_query($db, $q2); 
                    }
                    }
                    }

                    if($sem== '7th Semester'){
  
                        $username=$_SESSION['username'];
                        $sem=$_SESSION['semester'];
                        
                        if(isset($_REQUEST['sgpa_data'])) {
                        
                        
                        $queryy = "SELECT * FROM sgpa WHERE username='$username' and sem='$sem'"; 
                        $result =mysqli_query($db,$queryy);
                        
                        if(mysqli_num_rows($result) > 0){
                        $s1=$_REQUEST['subject1'];
                        $s2=$_REQUEST['subject2'];
                        $s3=$_REQUEST['subject3'];
                        $s4=$_REQUEST['subject4'];
                        $s5=$_REQUEST['subject5'];
                        $s6=$_REQUEST['subject6'];
                        $s7=$_REQUEST['subject7'];
                        $s8=$_REQUEST['subject8'];
                        $s9=$_REQUEST['subject9'];
                        $out=$_REQUEST['sgpaop'];
                        $username=$_SESSION['username'];
                        
                        
                        
                          $query1 = "UPDATE sgpa
                          SET sub1 = '$s1',sub2 ='$s2',sub3 = '$s3',sub4 = '$s4', sub5 = '$s5',sub6 = '$s6',sub7='$s7',sub8='$s8',sub9='$s9',sgpa='$out'
                          WHERE username='$username' AND sem='$sem'";
                          $q2="UPDATE  cgpa set semester7='$out' where username='$username' ";
                          mysqli_query($db, $q2);
                           
                         if(mysqli_query($db, $query1)){
                        
                             header('location:grades.php');
                           
                         }
                         else{
                             echo "ERROR";
                         }
                         
                            
                        }
                        
                        else{
                        
                        
                            $s1=$_REQUEST['subject1'];
                            $s2=$_REQUEST['subject2'];
                            $s3=$_REQUEST['subject3'];
                            $s4=$_REQUEST['subject4'];
                            $s5=$_REQUEST['subject5'];
                            $s6=$_REQUEST['subject6'];
                            $s7=$_REQUEST['subject7'];
                            $s8=$_REQUEST['subject8'];
                            $s9=$_REQUEST['subject9'];
                            $out=$_REQUEST['sgpaop'];
                        $username=$_SESSION['username'];
                        
                        
                        
                        $query = "INSERT INTO sgpa 
                        VALUES('$username','$sem','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9', '$out')";
                        if(mysqli_query($db, $query)){
                            header('location:grades.php');
                          
                        }
                        else{
                            echo "ERROR";
                        }
                        $q2="UPDATE  cgpa set semester7='$out' where username='$username' ";
                        mysqli_query($db, $q2); 
                        }
                        }
                        }

                        if($sem== '8th Semester'){
  
                            $username=$_SESSION['username'];
                            $sem=$_SESSION['semester'];
                            
                            if(isset($_REQUEST['sgpa_data'])) {
                            
                            
                            $queryy = "SELECT * FROM sgpa WHERE username='$username' and sem='$sem'"; 
                            $result =mysqli_query($db,$queryy);
                            
                            if(mysqli_num_rows($result) > 0){
                            $s1=$_REQUEST['subject1'];
                            $s2=$_REQUEST['subject2'];
                            $s3=$_REQUEST['subject3'];
                            $s4=$_REQUEST['subject4'];
                            $s5=$_REQUEST['subject5'];
                            $s6=$_REQUEST['subject6'];
                            $s7=$_REQUEST['subject7'];
                            $s8=$_REQUEST['subject8'];
                            $s9=$_REQUEST['subject9'];
                            $out=$_REQUEST['sgpaop'];
                            $username=$_SESSION['username'];
                            
                            
                            
                              $query1 = "UPDATE sgpa
                              SET sub1 = '$s1',sub2 ='$s2',sub3 = '$s3',sub4 = '$s4', sub5 = '$s5',sub6 = '$s6',sub7='$s7',sub8='$s8',sub9='$s9',sgpa='$out'
                              WHERE username='$username' AND sem='$sem'";
                              $q2="UPDATE  cgpa set semester8='$out' where username='$username' ";
                              mysqli_query($db, $q2);
                               
                             if(mysqli_query($db, $query1)){
                            
                                 header('location:grades.php');
                               
                             }
                             else{
                                 echo "ERROR";
                             }
                             
                                
                            }
                            
                            else{
                            
                            
                                $s1=$_REQUEST['subject1'];
                                $s2=$_REQUEST['subject2'];
                                $s3=$_REQUEST['subject3'];
                                $s4=$_REQUEST['subject4'];
                                $s5=$_REQUEST['subject5'];
                                $s6=$_REQUEST['subject6'];
                                $s7=$_REQUEST['subject7'];
                                $s8=$_REQUEST['subject8'];
                                $s9=$_REQUEST['subject9'];
                                $out=$_REQUEST['sgpaop'];
                            $username=$_SESSION['username'];
                            
                            
                            
                            $query = "INSERT INTO sgpa 
                            VALUES('$username','$sem','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9', '$out')";
                            if(mysqli_query($db, $query)){
                                header('location:grades.php');
                              
                            }
                            else{
                                echo "ERROR";
                            }
                            $q2="UPDATE  cgpa set semester8='$out' where username='$username' ";
                            mysqli_query($db, $q2); 
                            }
                            }
                            }
?>