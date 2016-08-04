
   <!-- Navigation -->

    <!-- Page Content -->
    <div class="container">



<div class="skills index">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Skills
                    <small>Experience & Specialties</small>
                </h1>
            </div>
        </div>




	<?php foreach ($skills as $skill): ?>


 <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php echo h($skill['Skill']['name']); ?>&nbsp;</h3>
                <!--<h4>Subheading</h4>-->
                <p><?php echo h($skill['Skill']['description']); ?>&nbsp;</p>
		<?php echo $this->Html->link(__('Read More'), array('action' => 'view', $skill['Skill']['id']), array('class' => 'btn btn-primary')); ?>
                <!--<a class="btn btn-primary" href="#">Read More<span class="glyphicon glyphicon-chevron-right"></span></a>-->
            </div>
        </div>
        <!-- /.row -->

        <hr>




<?php endforeach; ?>


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

