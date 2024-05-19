<html>
<head>
</head>
<body>

<div id="content">
    <form method="POST" action="process_admin_items.php" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="i_name" placeholder="name"/><br>
        </div>
        
        <div class="form-group">
            <input type="number" name="i_price" placeholder="price"/><br>
        </div>

        <div class="form-group">
            <input type="text" name="i_description" placeholder="description"/><br>
        </div>

        <div class="form-group">
            <input type="number" name="i_quantity" placeholder="quantity"/><br>
        </div>

        <div class="form-group">
            <input type="text" name="i_color" placeholder="color"/><br>
        </div>

        <div class="form-group">
            <label for="sizes">Sizes:</label><br>
                <input type="checkbox" id="size_1" name="sizes[]" value="Size 1">
                <label for="size_1">Size 1</label><br>
                <input type="checkbox" id="size_2" name="sizes[]" value="Size 2">
                <label for="size_2">Size 2</label><br>
                <input type="checkbox" id="size_3" name="sizes[]" value="Size 3">
                <label for="size_3">Size 3</label><br>
                <input type="checkbox" id="size_4" name="sizes[]" value="Size 4">
                <label for="size_4">Size 4</label><br>
                <input type="checkbox" id="size_5" name="sizes[]" value="Size 5">
                <label for="size_5">Size 5</label><br>
                <input type="checkbox" id="size_6" name="sizes[]" value="Size 6">
                <label for="size_6">Size 6</label><br>
                <input type="checkbox" id="size_7" name="sizes[]" value="Size 7">
                <label for="size_7">Size 7</label><br>
        </div>

        <div class="form-group">
            <input type="text" name="i_category" placeholder="category"/><br>
        </div>

        <div class="form-group">
            <input type="text" name="i_brand" placeholder="brand"/><br>
        </div>

        <div class="form-group">
            <input class="form-control" type="file" name="uploadfile" value="" /><br>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
        </div>
    </form>
</div>

</body>
</html>
<?php
error_reporting(0);

$msg = "";
?>