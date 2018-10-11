<?php
if (isset($_POST["processes"])){
    $processes = $_POST['processes'];
  } else {
    header('Location: '."index.php");
}

$processes = array();
$quantum = $_POST["quantum"];
$processes_num = $_POST["processes"];
for ($i = 0; $i < $processes_num ; $i++){
  $processes = array("P".$i,$_POST["arrival_time_".$i],$_POST["burst_time_".$i],$_POST["priority_".$i]);
}
var_dump($processes);
$technique_no = $_POST["technique"];
$technique;
  switch($technique_no){
    case 1: {
      $technique = "First Come First Serve";

      break;
    }
    case 2: $technique = "Shortest Job First"; break;
    case 3: $technique = "Priority Non-Preemptive"; break;
    case 4: $technique = "Priority Preemptive"; break;
    case 5: $technique = "Round Robin"; break;
  }
?>

<html>

<head>
  <title>ITOPSYS</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="overlay">
  <div class="valign-wrapper" id="box">
    <div class="container">
      <div class="row">
        <div class="col s12 m8 offset-m2">
          <h4 class="white-text weight-300">Technique: <?php echo $technique; ?></h4>
          <?php if($technique_no == 5){?>
          <h5 class="white-text">Quantum: <?php echo $quantum; ?></h5>
          <?php } ?>
          <table class="white-text">
           <thead>
             <tr>
                 <th>Process</th>
                 <th>Arrival Time</th>
                 <th>Burst Time</th>
                 <th>Priority</th>
             </tr>
           </thead>
           <tbody>
             <?php for ($i = 0; $i < $processes; $i++){ ?>
             <tr>
               <td><?php echo "P".$i; ?></td>
               <td><?php echo $arrival_time[$i]." ms";?></td>
               <td><?php echo $burst_time[$i];?></td>
               <td><?php echo $priority[$i];?></td>
             </tr>
            <?php } ?>
           </tbody>
         </table>
       </div>
     </div>
    </div>
  </div>
</div>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
