<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Menu Bar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="01.csv" download="">Download</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="table.php">Show</a>
                </li>
            </ul>
    </nav>
    <table class="table">
        <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
            </tr>
            <tbody>
                <?php
                    $file = fopen("01.csv","r");
                    while(($data = fgetcsv($file, 0, ","))!==FALSE){
                        echo "<tr>";
                        echo "<td>".$data[0]."</td>";
                        echo "<td>".$data[1]."</td>";
                    }
                    fclose($file);
                ?>
            </tbody>
        </thead>
    </table>
    <?php
        $file = fopen("01.csv","r");
        $balance =0;
        while (($data = fgetcsv($file, 0, ",")) !== FALSE){
            $balance += intval($data[1]);
        }
        fclose($file);
        echo "Total is :". $balance;
    ?>
</body>
</html>