<?php
    if(isset($_POST['done'])){
        $item = $_POST['item'];
        $price = $_POST['price'];

        $file = fopen("01.csv",'a');
        $add_row = "\n".$item.",".$price;
        fwrite($file,$add_row);
        fclose($file);
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-color: #efeeee;">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Menu Bar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="01.csv" download="">Download</a>
            </li>
        </ul>
    </nav>
    <form method="post">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card rounded-0">
                            <div class="card-header">
                                <h3 class="title">Shopping Record</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="uname1">Item</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="item" id="item" required="">
                                    </div>

                                    <div class="form-group">
                                        <label for="uname1">Price</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="price" id="price" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                    <button type="submit" id="done" name="done" value="Submit" class="btn btn-outline-primary btn-lg float-right">Done</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</form>
</body>
</html>