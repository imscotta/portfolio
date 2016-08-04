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
#skillshead {
	width: 100% !important;
}

body {
	color: black !important;
}
.sprofimg {
	padding-left: 15%;
	padding-right: 15%;
    width: 100% !important;
    height: 100% !important;
    background-color: white !important;
    }
.img-responsive {
    width: 300px !important;
    height: 50% !important;
    }
    @media (max-width: 767px) {
.business-header {
height: 200px !important;
}

}
</style>

<?php 

echo $this->Html->css('business-frontpage');

?>

	<link rel="stylesheet" href="http://ironsummitmedia.github.io/startbootstrap-business-frontpage/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://ironsummitmedia.github.io/startbootstrap-business-frontpage/css/bootstrap.css">
	<link rel="stylesheet" href="http://ironsummitmedia.github.io/startbootstrap-business-frontpage/css/business-frontpage.css">

<?php
echo $this->Html->css('one-page-wonder');

?>
   <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo h($skill['Skill']['name']); ?>
                </h1>
            </div>
        </div>
          <header class="business-header" id="skillshead"><?php echo $this->Html->image($skill['Skill']['display_image'], array('class' => 'sprofimg')); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
    </header>
    <hr>
            <div class="row">
              
                                <div class="col-sm-8">
                                 
                                      <h2>Overview</h2>
                                <p>
		<?php echo h($skill['Skill']['description']); ?> 





<!--
		PSRs
			Conflict, solution, resolution
			List for each
Include 4 or 5 subtopics and subtitles as attributes (key topics, ie software design lifecycle)
Description
Reference
Relates Skills
-->


                </p>
                                 
                                 
                                 
                                 
                                 
                                </div>
                                  <div class="col-sm-4">
                            	                 <h2>Table of Contents</h2><br>
               
 	             	 <div class="list-group">
                   	 <a href="#" class="list-group-item">1. Title</a>
                   	 <a href="#" class="list-group-item active">2. Overview</a>
                   	 <a href="#" class="list-group-item active">3. Projects</a>

                   	
                	</div>
                </div>

            </div>

    <!-- Page Content -->

        <hr>
   
                                      <h2>Related Projects</h2><br>

	<?php foreach ($skill['Project'] as $project): ?>


 <div class="row">
            <div class="col-md-7">
                <a href="#">
                	<?php echo $this->Html->image($project['banner_image'], array('class' => 'img-responsive')); ?>
                    <!--<img class="img-responsive" src="http://placehold.it/700x300" alt="">-->
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php echo h($project['name']); ?>&nbsp;</h3>
                <!--<h4>Subheading</h4>-->
                <p><?php echo h($project['description']); ?>&nbsp;</p>
				<?php echo $this->Html->link(__('Read More'), array('controller' => 'projects', 'action' => 'view', $project['id']), array('class' => 'btn btn-primary')); ?>
                <!--<a class="btn btn-primary" href="#">Read More<span class="glyphicon glyphicon-chevron-right"></span></a>-->
            </div>
        </div>
        <!-- /.row -->

        <hr>




<?php endforeach; ?>





<br><br></div>
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
