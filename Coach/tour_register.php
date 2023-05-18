<?php
$db = mysqli_connect("localhost","root","","db_sports");
?>
<?php
session_start();
if(!isset($_SESSION['log_id'])){
    header("location: ../logindes.php");
}
$errors = array();
date_default_timezone_set('Asia/Kolkata');
if (isset($_POST['submit'])) {
    $tour_start = $_POST['event_start'];
    $tour_end = $_POST['event_end'];
    $tour_category = $_POST['category'];
    $participant = $_POST['participant'];
    $tour_college = $_POST['event_college'];
    $tour_place = $_POST['event_place'];
    $tour_inst = $_POST['event_inst'];
    $date = date("Y-m-d");
    $time = date('h:i A');
    $xyz = implode(",",$participant);
    $words_array = explode(",", $xyz);

    if (count($errors) == 0) {
        foreach ($words_array as $word) {
          $tour_matter = <<<EOT
          Congratulations! You have been selected to participate in the $tour_category tournament. The details regarding the tournament are given below.
          
          EOT;
          $reg_query = $db->prepare("INSERT INTO tbl_tournament(tour_start_date,tour_end_date,tour_category,tour_participants,tour_college,tour_place,tour_matter,stud_date,stud_time,tour_instructions) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $reg_query->bind_param("ssssssssss", $tour_start, $tour_end, $tour_category, $word, $tour_college, $tour_place, $tour_matter, $date, $time, $tour_inst);
        $reg_query->execute();
        if($reg_query){
          echo"<script Type='text/javascript'>alert('Registered Successfully')</script>";
          echo"<script>window.location.href='http://localhost/Coach/tournament.php';</script>";
        }
        else {
          echo"<script Type='text/javascript'>alert('Couldnt register')</script>";
          echo"<script>window.location.href='http://localhost/Coach/tournament.php';</script>";
        } 
    }
      }
}
?> 
