<?php 
  $title = "Exercise 4: Control Flow";
  include 'header.php'; 
?>

<div class="container mt-4">
    <h3>1. Voting Eligibility</h3>
    <form method="post" action="">
        <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
        <input type="number" name="age" placeholder="Age" class="form-control mb-2" required>
        <button type="submit" name="check" class="btn btn-primary">Check Eligibility</button>
    </form>

    <?php
    if (isset($_POST['check'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        if ($age >= 18) {
            echo "<h4 class='text-success mt-2'>Hello $name, You are eligible for voting.</h4>";
        } else {
            echo "<h4 class='text-danger mt-2'>Hello $name, You are not eligible for voting.</h4>";
        }
    }
    ?>

    <hr> 
    
    <h3>2. Switch Case: Current Month</h3>
    <?php
    $month = date('F'); 
    switch ($month) {
        case "August":
            echo "<h4>It's August, so it's still holiday.</h4>";
            break;
        default:
            echo "<h4>Not August, this is $month so I don't have any holidays.</h4>";
            break;
    }
    ?>

    <hr>
    
    <h3>3. Multiplication Table</h3>
    <form method="post" action="">
        <div class="row">
            <div class="col-md-4">
                <input type="number" name="num" placeholder="Enter a number" class="form-control" required>
            </div>
            <div class="col-md-2">
                <button type="submit" name="get_table" class="btn btn-success">Show Table</button>
            </div>
        </div>
    </form>

    <?php
    if (isset($_POST['get_table'])) {
        $n = $_POST['num'];
        echo "<h4 class='mt-3'>Table of $n:</h4>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $n * $i;
            echo "$n x $i = $result <br>";
        }
    }
    ?>

    <hr>
    
    <h3>4. While Loop: Count from 1 to n</h3>
    <form method="post" action="">
        <div class="row">
            <div class="col-md-4">
                <input type="number" name="limit" placeholder="Enter a number (n)" class="form-control" required>
            </div>
            <div class="col-md-2">
                <button type="submit" name="get_count" class="btn btn-info">Count Now</button>
            </div>
        </div>
    </form>

    <?php
    if (isset($_POST['get_count'])) {
        $n = $_POST['limit'];
        $i = 1; 
        echo "<h4 class='mt-3'>Counting up to $n:</h4>";
        while ($i <= $n) {
            echo $i;
            if ($i < $n) { echo ", "; }
            $i++; 
        }
    }
    ?>

    <hr>
    
    <h3>5. Foreach Loop: Array of Languages</h3>
    <?php
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");
    echo "<h5>List of Web Technologies:</h5>";
    echo "<ul>";
    
    foreach ($myarray as $value) {
        echo "<li>$value</li>";
    }
    
    echo "</ul>";
    ?>
</div>

<?php include 'footer.php'; ?>