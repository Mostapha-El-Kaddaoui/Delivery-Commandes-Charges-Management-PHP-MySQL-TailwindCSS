
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./dist/delm.css" rel="stylesheet">
    <link href="./dist/myst2.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body class="bg-slate-500">
        <canvas id="lineChart" width="400" height="200"></canvas>

    <?php
    // Step 2: Retrieve data from MySQL
    $conn = mysqli_connect('localhost','furn','furnfurn123','Ayat');
    $startDate = '2023-01-01'; // Replace with your desired start date
    $endDate = '2023-06-30';   // Replace with your desired end date

    $query = "SELECT datee, COUNT(id) AS num_operations FROM operations WHERE datee BETWEEN '$startDate' AND '$endDate' GROUP BY datee";

    $result = mysqli_query($conn, $query);

    $dates = [];
    $numOperations = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $dates[] = $row['datee'];
        $numOperations[] = $row['num_operations'];
    }
    ?>

    <script>
        var ctx = document.getElementById('lineChart').getContext('2d');
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($dates); ?>,
                datasets: [{
                    label: 'Number of Operations',
                    data: <?php echo json_encode($numOperations); ?>,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
</body>
</html>





