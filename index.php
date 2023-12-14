<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Palindrome Checker</title>
</head>

<body>
    <div class="container">
        <div class="main-div shadow">
            <form action="" method="post" class="form">
                <h1 class="text-center">Palindrome Checker</h1>
                <textarea required class="form-control" name="data" id="exampleFormControlTextarea1" rows="3"></textarea>
                <?php
                    if(isset($_POST['check'])){
                        $data = $_POST['data'];
                        $rdata = strrev($data);
                        
                        if($data == $rdata){
                            echo "<h3 class='mt-3'>$data is a palindrome</h3>";
                        }else{
                            echo "<h3 class='mt-3'>$data is not a palindrome</h3>";
                        }
                    }
                ?>
                
                <button class="btn btn-primary mt-2 px-5" name="check">Check</button>
            </form>
        </div>
    </div>
    <footer class="text-center mx-2 my-3">
        All right reserved 2023 | RAHUL TILE
    </footer>
</body>

</html>