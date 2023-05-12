<?php
$split_input = array();
if(isset($_POST['submit_btn']))
{
    $search_input = $_POST['search'];
    echo $search_input;
    $split_input = explode(',',  $search_input);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search web</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="BOOTSRAP/css/bootstrap.min.css">
    link
</head>

<body>
    <section>
    <form action="" class="form" method="post">
        <h1>Search Bar</h1>
        <div class="container">
            <div>
                <input class="form-control" type="search" placeholder="Search..." name="search">
                <button class="btn btn-outline-success" type="submit" name="submit_btn">Search</button>
            </div>
        </div>
    </form>

    <div class="container">
        <div class="row">
            <div class="col-6 bg-primary" style="padding-bottom: 400px">
                <h1><b>Input: Unsorted Array</b></h1>
                <div><?php if(count($split_input) > 0) {print_r($split_input); }?></div>
            </div>
            <div class="col-6 bg-secondary" style="padding-bottom: 400px">
                <h1><b>Input: Sorted Array</b></h1>
                
            </div>
        </div>
    </div>
    </section>
</body>

<!-- Bootstrap JS -->
<script src="bootstrap.js"></script>

</html>