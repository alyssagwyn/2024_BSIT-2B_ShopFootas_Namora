<html>

<?php include_once "../db.php"; ?>
<head>
</head>
<body>
    <?php
        $sql = "SELECT *, (select size_name from product_sizes where sizes_id = product.sizes_id ) as sizename from product where prdct_dsgn_id = 69";
        $rs = $conn->query($sql);
        if ($rs->num_rows > 0) {
            // output data of each row
            while($row = $rs->fetch_assoc()) {
              echo $row["sizes_id"] . "-" . $row["sizename"] . "<br>";
            }
          } else {
            echo "0 results";
          }
    ?>

<div id="content">
    
</div>

</body>
</html>
