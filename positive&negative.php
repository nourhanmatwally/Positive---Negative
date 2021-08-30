 <?php
    if ($_POST) {
        $number = $_POST['number'];

        if (($number) < 0) {
            $msg = "$number is a negative number";
        } else {
            $msg = "$number is a positive number";
        }
    }
    ?>

 <!doctype html>
 <html lang="en">

 <head>
     <title>positive&&negative</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>

 <body>
 <br>
     <h1 style="text-align: center">positive&negative</h1>
     <br>
     <form method="POST" style="text-align: center">
     <br>
        <h5 style="text-align: center"> Enter a number</h5>
        <br>
         <input type="number" name="number">
         <br>
         <br>
         <input type="submit" name="submit">
         <br>
         <h5 style="text-align: center">result</h5>
         <br>
    <input type="text" name="result" value="<?php echo(isset($msg)? $msg: '') ?>">
     </form>
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>

 </html>