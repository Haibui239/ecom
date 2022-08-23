<?php
    $query="select * from banner where status=1";
    $result=$connect->query($query);
?>
<div class="about" data-aos="fade-up" >
            <div class="about-main main">
                <div class="about-bg">
                    <div class="about-image-slider">
                    <?php if ($result->num_rows > 0):?>
                        <?php while($row=$result->fetch_assoc()):?>
                            <div class="about-image-item">
                                <a href="">
                                    <img src="images-products/<?=$row['bannerimage']?>" alt="">
                                </a>
                            </div>
                        <?php endwhile;?>
                        <?php else:?>
                            <?php echo "0 result";?>
                    <?php endif;?>  
                    </div> 
                </div>
                <div class="our-story">
                    <p>Our Story</p>
                    <p>Since our first day in business, HSquare has been offering customers the best selection of products at unbeatable prices. Our online store has become synonymous with quality, and we ensure a continuous variety of fantastic merchandise along with unique limited edition and seasonal items that fit any budget. Check us out and start shopping today!</p>
                    <p>Contact</p>
                </div>
            </div>
        </div>