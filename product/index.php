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
        <div class="row">
            <div class="col-8">
                <h1 class="text-center">Product</h1>
                <form action="product.php" method="post">
                <div class="form-group">
                    <label for="idProduct">Ma san pham</label>
                    <input type="text" class="form-control" id="idProduct" name="idProduct">
                </div>
                <div class="form-group">
                    <label for="nameProduct">Ten san pham</label>
                    <input type="text" class="form-control" id="nameProduct" name="nameProduct">
                </div>
                <div class="form-group">
                    <label for="quantity">So luong</label>
                    <input type="text" class="form-control" id="quantity" name="quantity">
                </div>
                <div class="form-group">
                    <label for="price">Don gia</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="image">Anh minh hoa</label>
                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="idCategory">Nhom hang</label>
                    <select class="form-control" id="idCategory" name="idCategory">
                      <?php
                            $fileCategory = fopen("../files/category.txt", "r") or die("Unable to open file!");
                            while(!feof($fileCategory)) {
                                    $line = explode("\t", fgets($fileCategory));
                                    if(!empty(trim($line[0]))){
                                        echo "<option value='$line[0]'>" . $line[1] . "</option>";
                                    }
                            }
                            fclose($fileCategory);
                            ?>
                    </select>
                <button type="submit" class="btn btn-primary btn-block mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>