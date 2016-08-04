<style>
body { color: black !important; }
.tagline {
    color: #42dca3 !important;
    text-shadow: 0 0 .5px #42dca3 !important;
	font-weight: 700 !important;

}
.page-header {
    color: #42dca3 !important;
    text-shadow: 0 0 .5px #42dca3 !important;
    margin: 0px !important;
    font-weight: 700 !important;
}
footer {
	background-color: black !important;
	color: white !important;
	margin: 0px !important;
}
.profpic {
	size: cover !important;

}
img {
width: 40%;
height: 300px;
}
.business-header {
width: 100%;
}
.featurette-heading {
width: 40%;
}
.lead {
width: 40%;
}
.business-header {
background: grey !important;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
}
@media (max-width: 767px) {
.business-header {
height: 200px !important;
}
.lead {
    width: 100% !important;
}
}
</style>

	<link rel="stylesheet" href="http://ironsummitmedia.github.io/startbootstrap-business-frontpage/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://ironsummitmedia.github.io/startbootstrap-business-frontpage/css/bootstrap.css">
	<link rel="stylesheet" href="http://ironsummitmedia.github.io/startbootstrap-business-frontpage/css/business-frontpage.css">

<?php
echo $this->Html->css('one-page-wonder');

?>
   <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo h($project['Project']['name']); ?>
                </h1>
            </div>
        </div>
    <header>
            <div class="row">
                <div class="col-sm-8">
                            	<div><?php echo $this->Html->image($project['Project']['profile_image'], array('class' => 'business-header'), array('id' => 'profpic')); ?>
                    <h1 class="tagline"><?php //echo h($project['Project']['name']); ?></h1>
                </div>
                </div>
                                <div class="col-sm-4">
                                                <h2>Table of Contents</h2><br>
               
 	             	 <div class="list-group">
                   	 <a href="#" class="list-group-item">1. Title</a>
                   	 <a href="#" class="list-group-item active">2. Summary</a>
                   	 <?php echo('<a href="#" class="list-group-item">3. ' . $project['Project']['topic1title'] . '</a>');
                   	  echo('<a href="#" class="list-group-item">4. ' . $project['Project']['topic2title'] . '</a>');
						if (!empty($project['Project']['topic3title'])) {
 							echo('<a href="#" class="list-group-item">5. ' . $project['Project']['topic3title'] . '</a>');

 						} 
 						if (!empty($project['Project']['topic4title'])) {
 							echo('<a href="#" class="list-group-item">6. ' . $project['Project']['topic4title'] . '</a>');

 						}
 		 				if (!empty($project['Project']['topic5title'])) {
 						   echo('<a href="#" class="list-group-item">7. ' . $project['Project']['topic5title'] . '</a>');
 						}				
					?>

                	</div>
                                </div>

            </div>
    </header>

    <!-- Page Content -->

        <hr>

        <div class="row">
         <div class="col-sm-4">
                            <h2>Overview</h2>
                
                                <p>



</p>
		<p>
		<b>Role</b> <?php echo h($project['Project']['title']); ?><br>
		<b>Organization</b> <?php echo h($project['Project']['type']); ?>
<br>
		<b>Tools</b> <?php echo h($project['Project']['technologies']); ?>
<br>
		<b>Dates</b> <?php echo h($project['Project']['dates']); ?>
<br>
		<b>Stakeholders</b> <?php echo h($project['Project']['stakeholders']); ?><br>
		<b>URL</b> <?php echo $this->Html->link($project['Project']['link'], $project['Project']['link']); ?><br>
		<b>Related Skills</b><br>



                <p>
                </p>


            </div>
            <div class="col-sm-8">
                <h2>Summary</h2>
                                <p>
		<?php echo h($project['Project']['description']); ?> 




                </p>
            </div>
           
        </div>
        <!-- /.row -->

      <!--  <hr>

        <div class="row">
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Problem</h2>
                <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Solution</h2>
                <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
               <h2>Resolution</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
        </div> -->
        <!-- /.row -->
	<!--
        <div class="row">
            <div class="col-sm-3">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Marketing Box #1</h2>
                <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
            </div>
            <div class="col-sm-3">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Marketing Box #2</h2>
                <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
            <div class="col-sm-3">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
               <h2>Marketing Box #3</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
            <div class="col-sm-3">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
               <h2>Marketing Box #3</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
        </div>-->


        <hr class="featurette-divider">

        <!-- First Featurette -->
        <div class="featurette" id="about">
			<?php  echo $this->Html->image($project['Project']['topic1photo'], array('class' => 'featurette-image img-responsive pull-right')); ?>
            <h2 class="featurette-heading"><?php echo($project['Project']['topic1title']); ?>
                <!--<span class="text-muted">Will Catch Your Eye</span>-->
            </h2><br>
            <p class="lead"><?php echo($project['Project']['topic1desc']); ?></p>
        </div>

        <hr class="featurette-divider">

        <!-- Second Featurette -->
        <div class="featurette" id="services">
			<?php  echo $this->Html->image($project['Project']['topic2photo'], array('class' => 'featurette-image img-responsive pull-right')); ?>

	            <h2 class="featurette-heading"><?php echo($project['Project']['topic2title']); ?>
                <!--<span class="text-muted">Is Pretty Cool Too.</span>-->
            </h2><br>
            <p class="lead"><?php echo($project['Project']['topic2desc']); ?></p>

        </div>

        <hr class="featurette-divider">

<?php
						if (!empty($project['Project']['topic3title'])) {
 							echo('<div class="featurette" id="contact">
 							' . $this->Html->image($project['Project']['topic3photo'], array('alt' => 'Skill Image 300 x 300', 'class' => 'featurette-image img-responsive pull-right')) . '
            <h2 class="featurette-heading">' . $project['Project']['topic3title'] . '
            </h2><br>
            <p class="lead">' . $project['Project']['topic3desc'] . '</p>
        </div>

        <hr class="featurette-divider">');

 						} 
						if (!empty($project['Project']['topic4title'])) {
 							echo('<div class="featurette" id="contact">
 							' . $this->Html->image($project['Project']['topic4photo'], array('alt' => 'Skill Image 300 x 300', 'class' => 'featurette-image img-responsive pull-right')) . '
            <h2 class="featurette-heading">' . $project['Project']['topic4title'] . '
            </h2><br>
            <p class="lead">' . $project['Project']['topic4desc'] . '</p>
        </div>

        <hr class="featurette-divider">');

 						} 
						if (!empty($project['Project']['topic5title'])) {
 							echo('<div class="featurette" id="contact">
 							' . $this->Html->image($project['Project']['topic5photo'], array('alt' => 'Skill Image 300 x 300', 'class' => 'featurette-image img-responsive pull-right')) . '
            <h2 class="featurette-heading">' . $project['Project']['topic5title'] . '
            </h2><br>
            <p class="lead">' . $project['Project']['topic5desc'] . '</p>
        </div>

        <hr class="featurette-divider">');

 						} 
 						?>
   

        <!-- Footer -->


        <div class="row">
         <div class="col-lg-12">
<!--
	<h3><?php echo __('Related Skills'); ?></h3>
	<?php if (!empty($project['Skill'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($project['Skill'] as $skill): ?>
		<tr>
			<td><?php echo $skill['name']; ?></td>
			<td><?php echo $skill['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'skills', 'action' => 'view', $skill['id'])); ?>
						</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?> -->
</div></div></div>
<br><br>
        <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Scott Alexander &copy; 2016</p>
        </div>
    </footer>
    
        <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>