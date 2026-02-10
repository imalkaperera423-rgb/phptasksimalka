<?php 
  $title = "Exercise 3"; 
  include 'header.php'; // This uses your existing layout
?>

<div class="container mt-5">
    <h2>Exercise 3: Variables, Strings & Operators</h2>

    <div class="card p-4 mb-4">
        <form method="post" action="">
            <input type="text" name="fname" placeholder="First Name" class="form-control mb-2" required>
            <input type="text" name="lname" placeholder="Last Name" class="form-control mb-2" required>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

        <?php
        if (isset($_POST['fname'])) {
            $fn = $_POST['fname'];
            $ln = $_POST['lname'];
            echo "<h3 class='mt-3'>Hello $fn $ln, You are welcome to my site.</h3>";
        }
        ?>
    </div>

   <div class="table-responsive mt-4">
    <h3 class="mb-3">Our Participants</h3>
    <table class="table table-striped table-bordered table-hover shadow-sm">
        <thead class="table-primary text-center">
            <tr>
                <th scope="col"># ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>1</td>
                <td>Ima</td>
                <td>Virtanen</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Anna</td>
                <td>Mäkinen</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Matti</td>
                <td>Korhonen</td>
            </tr>
        </tbody>
    </table>
</div>

    <div class="alert alert-info">
        <?php
        // Strings
        $str1 = "Hello"; $str2 = "World";
        $combined = $str1 . " " . $str2;
        echo "<strong>String:</strong> $combined (Length: " . strlen($combined) . ")<br>";

        // Math
        $n1 = 298; $n2 = 234; $n3 = 46;
        echo "<strong>Addition:</strong> " . ($n1 + $n2 + $n3) . "<br>";

        // Browser
        echo "<strong>Browser:</strong> " . $_SERVER['HTTP_USER_AGENT'];
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>