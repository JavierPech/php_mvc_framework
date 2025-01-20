<h1><?php echo $data["title"]?></h1>
<ul>
    <?php
    
    foreach($data["products"] AS $product){
        echo "<li>".$product["product"]."</li>";
    }
    
    ?>
</ul>