<?php include('inc/icons.php'); ?>

<?php include('inc/header.php'); ?>   

                        <!-- Single feature -->
        <div class="single-feature-container single-feature-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 single-feature-text ">

	                	<div class="row">
	                		<?php foreach($icons as $icon) { ?>
	                			<div class="col-sm-2 single-feature-text icon-section">

		                			<img class="animated fadeInDown delay-1" src='<?php echo $icon["img"]; ?>' alt='<?php echo $icon["alt"]; ?>' title='<?php echo $icon["title"]; ?>' data-toggle="modal" data-target='#<?php echo $icon["id"]; ?>' />

		                			<p id="textlings" class="animated fadeInUp delay-4"><?php echo $icon["name"]; ?></p>

	                			</div>
	                

		                		<!-- Modal -->
								<div class="modal fade" id="<?php echo $icon["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								  <div class="modal-dialog modal-lg">
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								        <h4 class="modal-title" id="myModalLabel"><?php echo $icon["name"]; ?></h4>
								      </div>
								      <div class="modal-body">

								      		<img id="modal-images" src='<?php echo $icon["image"]; ?>' >
								        	<p><?php echo $icon["text"]; ?></p>

								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								      </div>
								    </div>
								  </div>
								</div>

							<?php } ?>


	                	</div>

		    		</div>
		    	</div>
		    </div>
		</div>


<?php include('inc/footer.php'); ?>