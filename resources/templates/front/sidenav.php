<div class="col-md-3">
    <p class="lead">Shop Name</p>
    <div class="list-group">
      <?php
      $query = "SElECT * FROM categories";
      $sendQuery = mysqli_query($connection,$query);
      while($row = mysqli_fetch_array($sendQuery)){
        echo "<a href='' class='list-group-item'>{$row['cat_title']}</a>";
      }

       ?>


    </div>
</div>
