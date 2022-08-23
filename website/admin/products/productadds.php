<?php
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $query="select*from products where  name='$name'";
    if(mysqli_num_rows($connect->query($query))!=0){
        $alert="Đã tồn tại tên sản phẩm này!";
    }else{
        $brandid=$_POST['categorieID'];
        $price=$_POST['sale_price'];
        $description=$_POST['description'];
        $status=$_POST['status'];
        //xu ly phan anh
        $store="../images-products/";
        $imageName=$_FILES['images']['name'];
        $imageTemp=$_FILES['images']['tmp_name'];
        $exp3=substr($imageName,strlen($imageName)-3);//jpg,png,...
        $exp4=substr($imageName,strlen($imageName)-4);//jpeg,webp,...
        if($exp3=='jpg'||$exp3=='png'||$exp3=='bmp'||$exp3=='gif'||$exp3=='JPG'||$exp3=='PNG'||$exp3=='BMP'||$exp3=='GIF'||$exp4=='jpeg'||$exp4=='JPEG'||$exp4=='webp'||$exp4=='WEBP') {
            $imageName=time().'_'.$imageName;
            move_uploaded_file($imageTemp,$store.$imageName);
            $connect->query("INSERT products(categorieID,name,sale_price,images,description,status)
                values('$brandid','$name','$price','$images','$description','$status')");
            header("location:?option=product");
        }else {
            $alert="File da chon khong phai file anh";
        }
        ///
    }

}
?>
<?php
    $brands=$connect->query("SELECT * from categories")
?>
<h1>Thêm sản phẩm</h1>
<section  style="color: red;font-weight: bold;text-align: center;"><?=isset($alert)?$alert:''?></section>
<section class="container col-md-6">
    <form method="post" enctype="multipart/form-data">
        <section class="form-group">
           <lable>Tên:</lable>
            <select name="categorieID" id="categorieID" class="form-control">
                <option hidden>--Chọn hãng---</option>
                <?php foreach($brands as $item):?>
                    <option value="<?=$item['id']?>"><?=$item['categoryName']?></option>
                <?php endforeach;?>
            </select>
        </section>
        <section class="form-group">
           <lable>Tên :</lable><input name="name" class ="form-control"> 
        </section>
        <section class="form-group">
           <lable>Giá :</lable><input type="number" min="0" name="sale_price" class ="form-control"> 
        </section>          
        <section class="form-group">
           <lable>Ảnh :</lable><input type="file" name="images" class ="form-control"> 
        </section>
        <section>
           <lable>Mô tả :</lable>
        <textarea name="description" id="description"></textarea>
        <script>CKEDITOR.replace("description");</script>
        </section>    
        <section class ="form-group">
                <lable>Trạng thái :</lable><br><input type="radio" name="status" value="1" checked> Mở 
                <input type="radio" name="status" value="0"> Tắt 
        </section>
        <section> <input type="submit" value="Thêm" class="btn btn-primary">
        <a href ="?option=product" class="btn btn-outline-secondary">&lt;&lt;Back</a></section> 
</section>