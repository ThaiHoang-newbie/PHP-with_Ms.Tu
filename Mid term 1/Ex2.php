<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="Ex2.css">
</head>





<body>




  <?php
  $product = array(
    'GIÀY DÉP' => array(
      'G1' => array(
        'id' => 1,
        'title' => 'Sandal nữ cao gót phong cách Hàn Quốc - Kem ',
        'oldprice' => '350000',
        'price' => '400000',
        'img' => 'https://salt.tikicdn.com/cache/w1200/ts/product/cf/99/89/bf004aa9986efce181885a2e6cdd06cf.jpg'
      ),
      'G2' => array(
        'id' => 2,
        'title' => 'Giày sandal để xuống 7 cm quai chéo 10190',
        'oldprice' => '550000',
        'price' => '600000',
        'img' => 'https://salt.tikicdn.com/cache/w1200/ts/product/cf/99/89/bf004aa9986efce181885a2e6cdd06cf.jpg'
      ),
      'G3' => array(
        'id' => 3,
        'title' => 'Giày cao gót bít mũi Tammy shoes 8cm đen',
        'oldprice' => '218000',
        'price' => '218000',
        'img' => 'https://cdnb.lystit.com/photos/mytheresa/9b39118b/gucci-brown-Ophidia-GG-Small-Shoulder-Bag.jpeg'
      )
    ),

    'TÚI XÁCH' => array(
      'T1' => array(
        'id' => 1,
        'title' => 'Túi xách nữ thời trang POKETO',
        'oldprice' => '9000',
        'price' => '10000',
        'img' => 'https://images-na.ssl-images-amazon.com/images/I/8118ZfaYYlL._AC_UL1500_.jpg'
      ),
      'T2' => array(
        'id' => 2,
        'title' => 'Túi xách nữ thời trang POKETO',
        'oldprice' => '600000',
        'price' => '600000',
        'img' => 'https://ae01.alicdn.com/kf/HTB1TmJNa5LxK1Rjy0Ffq6zYdVXaT/BEAU-Womens-Handbags-And-Purses-Fashion-Top-Handle-Satchel-Tote-Pu-Leather-Shoulder-Bags.jpg'
      ),
      'T3' => array(
        'id' => 3,
        'title' => 'Túi xách nữ thời trang POKETO',
        'oldprice' => '450000',
        'price' => '450000',
        'img' => 'https://cdnb.lystit.com/photos/mytheresa/9b39118b/gucci-brown-Ophidia-GG-Small-Shoulder-Bag.jpeg'
      )
    )
  )


  
  ?>

  <div class="item-shoes">
    <?php foreach ($product as $a => $b) { ?>
      <h4 class="title" style="color:orange;">
        <?php echo $a; ?>
      </h4>

      <?php foreach ($b as $b1 => $b2) { ?>

        <img class="image" src="<?php echo $b2['img'] ?>" alt="">
        <p class="title">

          <?php echo $b2['title'] ?>
        </p>
        <div class="price">

          <?php echo $b2['price'] ?>
          
          <?php // Check có giảm hay không
          if ($b2['price'] > $b2['oldprice'] || $b2['oldprice'] == null) {
            echo "<small><del>" . $b2['oldprice'] . "</del></small>"; 
            ?>
            <center><button style="background-color: red;" onclick="grateful()">Đang giảm giá 
            <?php // Tính giá giảm
            $saleof = ($b2['oldprice'] - $b2['price']);
            $saleof = round($saleof);
            echo $saleof;
            ?></button></center>
          <?php } else { ?>
            <center><button onclick="grateful()" id="<?php echo $b2["id"] ?>" href="">Buy now</button></center>
          <?php } ?>

        </div>
      <?php } ?>
    <?php } ?>
  </div>















</body>



<script>
  function grateful() {
    alert("Thank you for your order");
  }
</script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>

</html>