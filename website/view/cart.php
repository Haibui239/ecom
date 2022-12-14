<?php
    if(isset($_GET['action'])) {
        switch($_GET['action']) {
            case"add":
                $productid=$_GET['productid'];
                if(array_key_exists($productid, $_SESSION['cart'])) {
                    if(isset($_POST['number'])){
                        $_SESSION['cart'][$productid]+=$_POST['number'];
                    } else {
                        $_SESSION['cart'][$productid]++;
                    }
                } else {
                    if(isset($_POST['number'])){
                    $_SESSION['cart'][$productid]=$_POST['number'];
                    } else {
                        $_SESSION['cart'][$productid]=1;
                    }
                }
                header("location:?request=cart");
                break;
            case "delete":
                $productid=$_GET['productid'];
                unset($_SESSION['cart'][$productid]);
                break;
            case "deleteAll":
                unset($_SESSION['cart']);
                break;
            case "update":
                foreach(array_keys($_SESSION['cart']) as $key):
                    $_SESSION['cart'][$key]=$_POST[$key];
                endforeach;
                break;
            case "order":
                 if(isset($_SESSION['username'])):
                    if(isset($_GET['order'])) {
                        header("location:?request=order");
                    } else {
                        header("location: .");
                    }
                    header("location:?request=order");
                 else:
                    header("location:?request=login&order=1");
                 endif;
                break;
        }
    }
?>
<style>
    .left,.right {
        display: none;
    }
</style>
<?php
    if(isset($_SESSION['cart']) && $_SESSION['cart']!=null):
        ?>
            <form method="post" action="?request=cart&action=update"> 
        <?php
        $listid='0';
        foreach(array_keys($_SESSION['cart']) as $key):
            $listid.=','.$key;
        endforeach;
        $query="SELECT * FROM products WHERE id IN($listid)";
        $result=$connect->query($query);
        if(mysqli_num_rows($result)>0):
            ?>
            <section class="cart-menu">
                <section>???nh</section>
                <section>T??n</section>
                <section>Gi??</section>
                <section>S??? l?????ng</section>
                <section>T???ng</section>
                <section>X??a s???n ph???m</section>
            </section>
            <?php
            $tongtien=0;
            foreach($result as $rs):
            $thanhtien=$rs['sale_price']*$_SESSION['cart'][$rs['id']];
            $tongtien+=$thanhtien;
            ?>
                
                <section class="cart-container">
                    <section class="cart-img cart-item">
                        <img src="images-products/<?=$rs['images']?>" width="30%"> 
                    </section>
                    <section class="cart-name cart-item">
                        <p><?=$rs['name']?></p>
                    </section>
                    <section class="cart-price cart-item">
                        <p><?=number_format($rs['sale_price'],0,',','.')?></p>
                    </section>
                    <section class="cart-number cart-item">
                        <input type="number" name="<?=$rs['id']?>" value="<?=$_SESSION['cart'][$rs['id']]?>" min="1" max="99">
                    </section>
                    <section class="cart-product-price cart-item">
                        <?=number_format($thanhtien,0,',','.')?>
                    </section>
                    <section class="cart-delete cart-item">
                        <a onclick="return confirm('B???n c?? mu???n x??a s???n ph???m n??y kh??ng?')" href="?request=cart&action=delete&productid=<?=$rs['id']?>"><i class="fas fa-trash-alt"></i></a>
                    </section>
                </section>
            <?php endforeach;
        endif;
        ?>
            <section class="cart-result">
                <section></section>
                <section></section>
                <section></section>
                <section></section>
                <section>
                    <p><?=number_format($tongtien,0,',','.')?></p>
                </section>
                <section></section>
            </section>
            <section class="cart-order-container">
                <section class="cart-order-item">
                    <a href="?request=cart&action=deleteAll" onclick="return confirm('B???n c?? mu???n x??a gi??? h??ng kh??ng?')" class="btn-cart">X??a t???t c??? s???n ph???m trong gi??? h??ng</a>
                </section>
                <section class="cart-order-item">
                    <input type="submit" value="C???p nh???t gi??? h??ng" id="" class="btn-cart">
                </section>
                <section class="cart-order-item">
                    <a href="?request=cart&action=order" class="btn-cart">Thanh to??n</a>
                </section>
                <section class="cart-order-item"></section>
            </section>
            </form> 
        <?php
    else:
        ?>
            <section>
                Gi??? h??ng tr???ng
            </section>
        <?php
    endif;
?>