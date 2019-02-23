<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
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
        $file = fopen("bosseiei.csv","r");
        $balance =0;
        while (($data = fgetcsv($file, 0, ",")) !== FALSE){
            $balance += intval($data[1]);
        }
        fclose($file);
        echo "Total is :". $balance;
    ?>
</body>
</html>