<?php
		echo $this->Html->css('carousel');
?>
<style>
body {
background-color: black !important;
}
.111 {

	background-color: white !important;

}
#111 {

	background-color: white !important;

}
h3 { 
	//color: black !important;
}

.page-header {
    color: #42dca3 !important;
    text-shadow: 0 0 .5px #42dca3 !important;
}
small { 
	text-shadow: none !important;
}
footer {
	background-color: black !important;
	color: white !important;
}
hr {
color: #42dca3 !important;
}
img {
width: 100%;
height: 250px;
}
h2 {
text-align: center;
}
.btn btn-primary {
vertical-align: center;
}
#viewskill {
width: 100% !important;
}
#myCarousel {
	height: 400px !important;
}
.carousel-inner {
	height: 100% !important;
}
.carousel {
margin-bottom: 20px;
}
.item {
height: 100% !important;
}
.carousel-inner > .item > img {
	height: 100% !important;
    padding: 2% 30% 2% 30%;
}
.col-sm-4 {
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    padding: 0px;
}
h2 {
height: 40px !important;

}
.col-sm-4 {
		background-color: white !important;

}
.skilldisplayimg {

}
@media (max-width: 767px) {
.carousel-inner > .item > img {
display: none;
}
#myCarousel {
height: 275px !important;
}
.carousel {
margin-bottom: 5% !important;
}
#psum {
display:none !important; 
}
.col-sm-4 {
    border-style: none;
    border-width: 0px;
    padding: 0px;
}
.carousel-caption {
left: 2%;
right: 2%
}
.skilldisplayimg {
padding: 0% 5% 0% 5% !important;
}
}
.page-header {
margin: 20px 0px 20px !important;
}
</style>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Projects
                    <small>Examples</small>
                </h1>
            </div>
        </div>
   <!-- Navigation -->
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
	<?php $counter1 = 0; ?>
	<?php foreach ($projects as $project): ?>
	<?php if ($counter1 == 0) {
        echo('<li data-target="#myCarousel" data-slide-to="0" class="active"></li>');
	} elseif ($counter1 > 0 ) {
        echo('<li data-target="#myCarousel" data-slide-to="' . $counter1 . '"></li>');
	 } ?>	
	<?php endforeach; ?>
      </ol>
      <div class="carousel-inner" role="listbox">
	<?php $counter2 = 0; ?>
	<?php foreach ($projects as $project): ?>
	<?php if ($counter2 == 0) {
	
        
        echo('<div class="item active" id="111">' . $this->Html->image($project['Project']['banner_image'], array('alt' => 'Project 1 Image'), array('class' => 'slideimg')) . '
          <div class="container">
            <div class="carousel-caption">
              <h1>' . $project['Project']['name'] . '</h1>
              <p id="psum">' . $project['Project']['summary'] . '</p>

              <p>' . $this->Html->link(__('Read More'), array('action' => 'view', $project['Project']['id']), array('class' => 'btn btn-primary')) . '</p>
            </div>
          </div>
        </div>');
	}	 elseif ($counter2 > 0 ) {

        echo('<div class="item">
          ' . $this->Html->image($project['Project']['banner_image'], array('alt' => 'Project 1 Image'), array('class' => 'slideimg')) . '
          <div class="container">
            <div class="carousel-caption">
              <h1>' . $project['Project']['name'] .'</h1>
              <p id="psum">' . $project['Project']['summary'] . '</p>
              <p>' . $this->Html->link(__('Read More'), array('action' => 'view', $project['Project']['id']), array('class' => 'btn btn-primary')) . '</p>
            </div>
          </div>
        </div>');

	}	elseif ($counter2 < 6) {


echo('<div class="item">
          ' . $this->Html->image($project['Project']['banner_image'], array('alt' => 'Project 1 Image'), array('class' => 'slideimg')) . '
          <div class="container">
            <div class="carousel-caption">
              <h1>' . $project['Project']['name'] . '</h1>
              <p id="psum">' . $project['Project']['summary'] . '</p>
              <p>' . $this->Html->link(__('Read More'), array('action' => 'view', $project['Project']['id']), array('class' => 'btn btn-primary')) . '</p>
            </div>
          </div>
        </div>');
	 } ?>
	<?php $counter2 = $counter2+1; ?>	
	<?php endforeach; ?>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <!-- Page Content -->



<div class="skills index">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Skills
                    <small>Proficiencies</small>
                </h1>
            </div>
        </div>



<?php $counter = -1; ?>

	<?php foreach ($skills as $skill): ?>
	
	
	<?php $counter = $counter+1; ?>
	<?php if (($counter % 3) == 0) {
		echo('  <div class="row">
            <div class="col-sm-4">
            	' . $this->Html->image($skill['Skill']['display_image'], array('alt' => 'Skill Image 300 x 300', 'class' => 'skilldisplayimg')) . '
                <h2>' . $skill['Skill']['name'] . '</h2>' .
				$this->Html->link(__('Read More'), array('controller' => 'skills', 'action' => 'view', $skill['Skill']['id']), array('class' => 'btn btn-primary', 'id' => 'viewskill')) . '            </div>');
	
	} elseif (($counter % 3) == 1) {	
			echo(' <div class="col-sm-4">
			    ' . $this->Html->image($skill['Skill']['display_image'], array('alt' => 'Skill Image 300 x 300', 'class' => 'skilldisplayimg')) . '
                <h2>' . $skill['Skill']['name'] . '</h2>' .
				$this->Html->link(__('Read More'), array('controller' => 'skills', 'action' => 'view', $skill['Skill']['id']), array('class' => 'btn btn-primary', 'id' => 'viewskill')) . '            </div>');
	} elseif (($counter % 3) == 2) {
		echo('<div class="col-sm-4">
		        ' . $this->Html->image($skill['Skill']['display_image'], array('alt' => 'Skill Image 300 x 300', 'class' => 'skilldisplayimg')) . '
               <h2>' . $skill['Skill']['name'] . '</h2>' .
				$this->Html->link(__('Read More'), array('controller' => 'skills', 'action' => 'view', $skill['Skill']['id']), array('class' => 'btn btn-primary', 'id' => 'viewskill')) . '            </div>
        </div>');
		
}
?>







<?php endforeach; ?>

<?php
if (($counter % 3) == 0) {	
			echo(' <div class="col-sm-8">
                </div></div>');
	} elseif (($counter % 3) == 1) {
		echo('<div class="col-sm-4">
                </div></div>');
}
?>
</div></div>

        <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Scott Alexander &copy; 2016</p>
        </div>
    </footer>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>




