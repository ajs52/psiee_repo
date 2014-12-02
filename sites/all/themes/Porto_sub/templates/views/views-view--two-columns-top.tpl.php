<?php

/**
 * 
 */
?>


	
		
<div class="container">
<div class="row">


			<div class="col-md-6">
			

				<?php if ($header): ?>
				      <?php print $header; ?>
				    <?php endif; ?>
					

 						<?php if ($rows): ?>
							    <?php print $rows; ?>
							  <?php elseif ($empty): ?>
						    <div class="view-empty">
						      <?php print $empty; ?>
						    </div>
							  <?php endif; ?>


				
			</div><!-- end col-md-6 -->
					
					
			

				
				
				
				<?php if ($footer): ?>
					<div class="col-md-6">
				  <?php print $footer; ?>
				  </div><!-- end col-md-6 -->
				<?php endif; ?>




				</div>

				</div>
				
			

		
		






	
 
