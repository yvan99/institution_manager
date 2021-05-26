<!DOCTYPE html>
<html>

<head>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="content col-md-8">
                <form method="POST">

                    <div class="form-group">
                        <button class="btn btn-outline-info" type="submit" name="submit">
                            Sign Up
                        </button>
                    </div>

                </form>
                <?php
                require_once '../init.php';
                if (isset($_POST['submit'])) {
                    $names = "mark";
                    $dob = "2020-1-1";
                    $user_id = 3;
                    $invoice_id = 2;
                    $class = new Finance();
                    // $query = $class->insertInvoice($names, $dob, $user_id);
                    // echo $query;
                    $query = $class->selectInvoice();
                    while ($row = mysqli_fetch_array($query)) {
                        echo $row['name'] . "<br>";
                    }
                }   ?>
            </div>
        </div>
    </div>
</body>

</html>