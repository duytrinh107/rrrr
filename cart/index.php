<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Ma hang</th>
                    <th>Ten hang</th>
                    <th>So luong</th>
                    <th>Don gia</th>
                    <th>Hinh anh</th>
                    <th>Chon mua</th>
                </tr>
            </thead>
            <tbody>
                <?php
                      $fileProduct = fopen("../files/product.txt", "r") or die("Unable to open file!");
                      while(!feof($fileProduct)) {
                              $line = explode("\t", fgets($fileProduct));
                              if(!empty(trim($line[0]))){
                                  echo "<tr>";
                                  echo "<td> $line[0] </td>";
                                  echo "<td> $line[1] </td>";
                                  echo "<td> $line[2] </td>";
                                  echo "<td> $line[3] </td>";
                                  echo "<td>" . "<img src='$line[4]' style='height: 60px'>" . "</td>";
                                  echo "<td><a href='../order/index.php?id=$line[0]&name=$line[1]&quanity=$line[2]&price=$line[3]' class='btn btn-outline-success'>Mua</a></td>";
                                  echo "</tr>";
                              }
                      }
                      fclose($fileProduct);
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>