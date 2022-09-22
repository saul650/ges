<?php 
	require_once 'admin/conn.php'
?>

                <div class="gallery">
            <?php
							$query = mysqli_query($conn, "SELECT * FROM `storage`") or die(mysqli_error($link));
							while($fetch = mysqli_fetch_array($query)){
						?>
  <br>  <br>  <br>
                  <!-- accodions  -->
  
 
                  
<!-- sadfghj -->
              <article>
                <section>
                  <h3> <?php echo substr($fetch['filename'], 0 ,30)."..."?> </h3>
                </section>
                <section>
                  <?php if ( $fetch['file_type'] == 'image/jpeg' || $fetch['file_type'] == 'image/png' || $fetch['file_type'] == 'image/gif' || $fetch['file_type'] == 'image/jpg' ): ?>
                    <img src="./<?php echo $fetch['folder'] ?>" alt="<?php echo $fetch['filename'] ?>">
                  <?php else: ?>
                    <!-- show pdf -->
                    <iframe src="./<?php echo $fetch['folder'] ?>" width="50%" height="900px"></iframe>
                  <?php endif; ?>
                </section>
              </article>

              <br>
						<?php
							};
						?>

            <br>
          </div>
          
