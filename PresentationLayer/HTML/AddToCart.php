<?php
      $cardId = $_GET['idAddCard'];
      $cardPic = $_GET['picAddCard'] ;
      $cardQuantity = $_GET['quantityAddCard'];
      $cardPrice = $_GET['priceAddCard'] ;
      $cardName = $_GET['nameAddCard'] ;



?>



<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" type="text/css" href="../CSS/AddToCartCSS.css">

</head>
<body>
      <?php include 'Head.php';?>
      
      <?php include 'MainHeader.php';?>
      
      
      <br><br><br><br>

      <div class="container cart">   

            <table>
                  <tr>
                        <th>Component</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                  </tr>

                  <tr>

                        <td>
                              <div class="product-info">
                                    <div class="img-box">
                                          <img src="<?php echo $cardPic ?>" style = "width: 80 ;height:80px" alt="">
                                    </div>

                                    <div class="img-info">
                                          <!--Product information will be written-->
                                          <p><?php echo $cardName ?></p>
                                    </div>
                                    <a href="StaticHome.php">Remove</a>
                              </div>
                        </td>
                        <td><input type="number" id = "cardQuan" min = "1" max = "<?php echo $cardQuantity ?>" value="1"></td>
                        <td class="price">
                              
                              <p id = "cngPrice"><?php echo $cardPrice; ?></p>
                              <!-- <p id = "no"></p> -->
                        </td>
                  </tr>
                  
            </table>
            
      </div>

</body>
</html>

<?php include 'Footerv2.php';?>

<script>

document.getElementById('cardQuan').addEventListener('change', function () {
	var yoo = this.value;
      //window.alert(yoo);
      var at = "<?php echo $cardPrice; ?>";
      var gg = yoo * at;
      //window.alert(at);
	document.getElementById("cngPrice").innerHTML= gg;
});
</script>