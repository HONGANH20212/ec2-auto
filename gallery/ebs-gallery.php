<div class="container">
        <div class="gallery">
            <?php
            // Retrieve images from the database
            $query = $db->query("SELECT * FROM root_ebs WHERE status = 1 ORDER BY id ASC");
            
            if($query->num_rows > 0){
                while($row = $query->fetch_assoc()){
                    $imageThumbURL = 'gallery/images/thumb/'.$row["file_name"];
                    $imageURL = 'gallery/images/'.$row["file_name"];
            ?>
                <a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["title"]; ?>" >
                    <img src="<?php echo $imageThumbURL; ?>" alt="" />
                </a>
            <?php }
            } ?>
            </div>
        </div>