    <?php 
    // $cn =mysqli_connect("localhost","root","","macrane-art");
    $cn = new PDO('mysql:host=localhost;dbname=macrane-art','root','');
        $oid=rand();
        $date= date('Y-m-d');
       
    foreach($_POST['price'] as $key => $value)
    {
        
     $sql='INSERT INTO `customer_order`(`oid`,`uid`, `aid`, `price`, `qty`, `total`,`gtotal`,`pay_method`,`date`) VALUES (:oid,:uid,:aid,:price,:qty,:total,:gtotal,:pay,:date)';
        $stmt = $cn->prepare($sql);
        $stmt -> execute([
            'oid'=> $oid,
            'uid'=> $_POST['uid'],
            'aid'=> $_POST['aid'][$key], 
            'price'=> $value, 
            'qty'=> $_POST['qty'][$key],
            'total'=> $_POST['total'][$key],
            'gtotal'=> $_POST['gtotal'],
            'pay'=> $_POST['pay'],
            'date'=> $date,
            
        ]);
       
    }
    
    echo '<script>alert("Order Placed");
        window.location.href="order-details.php";
    </script>';
    // echo $stmt;
    // echo $sql;
?>