<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $instutute=$_POST['Institute'];
    $degree=$_POST['degree'];
    $university=$_POST['University'];
    $subject=$_POST['subject'];
    $session=$_POST['session'];
    $collage=$_POST['collage'];
    $board=$_POST['board'];
    $group=$_POST['group'];
    $result=$_POST['result'];
    $year=$_POST['year'];
    $school=$_POST['school'];
    $boardS=$_POST['board-s'];
    $groupS=$_POST['group-s'];
    $resultS=$_POST['result-s'];
    $yearS=$_POST['year-s'];
    $career=$_POST['career'];
    $computer=$_POST['computer'];
    $personal=$_POST['Personal'];
    $SelfCommitment=$_POST['Self-Commitment'];
    $father=$_POST['father'];
    $mother=$_POST['mother'];
    $dateOfBirth=$_POST['dob'];
    $height=$_POST['height'];
    $nation=$_POST['nationality'];
    $religion=$_POST['religion'];
    $address=$_POST['address'];
    $marriedStatus=$_POST['married-status'];
    $exprience=$_POST['exprience'];
    $declaration=$_POST['declaration'];
    $interest=$_POST['interest'];


    $gender='';
    if(isset($_POST['gender'])){
        $gender=$_POST['gender'];
    }
    $ban='';
    $eng='';
    if(isset($_POST['bangla']) || isset($_POST['English'])){
        $ban=$_POST['bangla'];
        $eng=$_POST['English'];
    }

   
}else{
    header("Location:index.html");
    exit();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="cv.css">
<body>
    <div class="container">
        <h1><?php echo strtoupper($name)?></h1>
        <div class="contact">
            <p>Email:<?php echo $email?></p>
            <p>Phone:<?php echo $phone?></p>
        </div>

        <div class="section">
            <h3>Career Object</h3>
            <p><?php echo $career?></p>
        </div>
      <h2>Educational Background</h2>
        <div class="section">
          <?php  
           if($university){
            echo "<h3>".strtoupper($degree)."</h3>";
            echo "<span>Institute Name: $instutute</span>";
            echo "<span>University: $university</span>";
            echo "<span>Subject: $subject</span>";
            echo "<span>Session: $session</span>";

           }
          ?>

          <?php  
          
            if($collage){
                 echo "<h3>H.S.C</h3>";
                 echo "<span>Institute Name: $collage</span>";
                 echo "<span>Board: $board</span>";
                 echo "  <span>Group:  $group</span>";
                 echo " <span>Result: GPA- $result out of 5</span>";
                 echo " <span>Year of Passing: $year</span>";
            }
          
          ?>

          <?php
            if($school){
                echo " <h3>S.S.C</h3>";
                echo " <span>Institute Name: $school</span>";
                echo " <span>Board: $boardS</span>";
                echo " <span>Group: $groupS</span>";
                echo " <span>Result: GPA- $resultS out of 5</span>";
                echo " <span>Year of Passing: $yearS</span>";
                
            }
   
            ?>
        </div>


        <div class="section">
            
            <?php 
           if($eng || $ban){
            echo "<h2>Language Proficiency</h2>";
            if($ban){
               echo "<ul> <li>$ban</li> ";
            }
            if($eng){
               echo " <li>$eng</li> </ul>";
            }
           }
            
            ?>
        </div>

        <div class="section">
             <?php   

             if($computer){
                echo "<h2>Computer Skills</h2>";
                echo $computer;
             }
             if($personal){
                echo "<h2>Personal Skills</h2>";
                echo $computer;
             }
             if($SelfCommitment){
                echo "<h2>Self Commitment</h2>";
                echo $SelfCommitment;
             }

             if($interest){
                echo "Interest";
                echo $interest;
             }
             
             ?>
        </div>

        <div class="section">
            <h2>Personal-details</h2>
            <ul type="square">
                <li>Father's Name : <?php echo $father?></li>
                <li>Mother's Name : <?php echo $mother?></li>
                <li>Date of Birth : <?php echo $dateOfBirth?></li>
                <li>Sex : <?php echo $gender?></li>
                <li>Marital Status : <?php echo $marriedStatus?></li>
                <li>Height : <?php echo $height?></li>
                <li>Nationality : <?php echo $nation?></li>
                <li>Religion : <?php echo $religion?></li>
                <li>Permanent Address : <?php echo $address?></li>
            </ul>
        </div>

        <div class="section">
            <?php 
            if($exprience){
                echo "<h2>Exprience</h2>";
                echo $exprience;
            }

            if($declaration){
                echo "<h2>Declaration</h2>";
                echo $declaration;
            }
            
            ?>
        </div>
    </div>
 <button onclick="printCv()">Print</button> 
</body>
<script>
    function printCv(){
        window.print();
    }


</script>
</html>