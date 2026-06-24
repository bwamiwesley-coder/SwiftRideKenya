<?php
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM cars");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Available Cars</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1 class="text-center mb-4">
        Available Cars
    </h1>

    <div class="row">

        <?php while($car = mysqli_fetch_assoc($result)) { ?>

        <div class="col-md-4">

            <div class="card mb-4">

                <div class="card-body">

                    <h5>
                        <?php echo $car['car_name']; ?>
                    </h5>

                    <p>
                        Year:
                        <?php echo $car['year']; ?>
                    </p>

                    <p>
                        KES
                        <?php echo number_format($car['price']); ?>
                    </p>

                </div>

            </div>

        </div>

        <?php } ?>

    </div>

</div>

</body>
</html>
?>