<?php
if (isset($_GET["processes"])) {
    $processes = $_GET['processes'];
} else {
    header('Location: ' . "index.php");
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
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 offset-m3">
                        <?php if ($processes < 2) { ?>
                            <div class="row">
                                <div class="col s12 center-align">
                                    <i class="material-icons orange-text large">warning</i>
                                    <p class="white-text flow-text weight-300">Processes must be 2 or more!</p>
                                    <a class="btn waves-effect waves-light teal accent-4" href="index.php">
                                        <i class="material-icons white-text left">arrow_back</i> Back
                                    </a>
                                </div>
                            </div>
                        <?php } else { ?>
                            <form action="compute.php" method="post">
                                <?php for ($i = 0; $i < $processes; $i++) { ?>
                                    <div class="row">
                                        <div class="col s12 m3">
                                            <h4 class="flow-text white-text weight-300">P<?php echo $i; ?></h4>
                                        </div>
                                        <div class="col s12 m3 input-field">
                                            <input id="arrival_time_<?php echo $i; ?>" name="arrival_time_<?php echo $i; ?>" type="number" class="validate white-text" required>
                                            <label for="arrival_time_<?php echo $i; ?>">Arrival Time</label>
                                        </div>
                                        <div class="col s12 m3 input-field">
                                            <input id="burst_time_<?php echo $i; ?>" name="burst_time_<?php echo $i; ?>" type="number" class="validate white-text" required>
                                            <label for="burst_time_<?php echo $i; ?>">Burst Time</label>
                                        </div>
                                        <div class="col s12 m3 input-field">
                                            <input id="priority_<?php echo $i; ?>" name="priority_<?php echo $i; ?>" type="number" class="validate white-text" required>
                                            <label for="priority_<?php echo $i; ?>">Priority</label>
                                        </div>
                                    </div>
                                <?php } ?>
                                <input type="hidden" name="processes" value="<?php echo $_GET['processes'] ?>">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <p>
                                            <label>
                                                <input name="technique" type="radio" checked value=1 />
                                                <span>First Come First Serve (FCFS)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input name="technique" type="radio" value=2 />
                                                <span>Shortest Job First (SJF)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input name="technique" type="radio" value=3/>
                                                <span>Priority Non-preemptive</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input name="technique" type="radio" value=4 />
                                                <span>Priority Preemptive</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input name="technique" type="radio" value=5 />
                                                <span>Round Robin</span>
                                            </label>
                                        </p>
                                        <div class="row">
                                            <div class="col s12 m3 input-field">
                                                <input id="quantum" name="quantum" type="number" class="validate white-text" required>
                                                <label for="quantum">Quantum Time</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 center-align">
                                        <button class="btn waves-effect waves-light green accent-4" type="submit">
                                            <i class="material-icons white-text left">done_outline</i> Compute
                                        </button>
                                        <a class="btn waves-effect waves-light grey accent-4" href="index.php">
                                            <i class="material-icons white-text left">arrow_back</i> Back
                                        </a>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
