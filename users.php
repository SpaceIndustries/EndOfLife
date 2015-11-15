<?php include('includes/header.php'); ?>
<body>
<style>
body {
        background-image: url('images/bg-dark.jpg');
        background-repeat: repeat;
}
</style>
    <div class="container">
        <div class="row"><br>
            <div class="col-lg-12">
                <div class="panel panel-default">
                        <div class="panel-heading">
                           <i><img src="favicon.ico" width="30" height="30"></i> End Of Life
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						    <div class="well">
                                <h2>Doxing Anonymous</h2>
                                <p>Anonymous is a Hacker Black Hat wanted by FBI.</p>
                            </div>
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-user"></i> What ?</th>
											<th><i class="fa fa-info-circle"></i> Informations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									    <tr class="odd gradeA">
                                            <th>Pseudonyme</th>
                                            <td>Anonymous</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <th>Full Name</th>
                                            <td>John Smith</td>
                                        </tr>
										<tr class="odd gradeA">
                                            <th>IP Address</th>
                                            <td>John Smith</td>
                                        </tr>
										<tr class="odd gradeA">
                                            <th>Home Address</th>
                                            <td>55 Rue du Faubourg Saint-Honoré, 75008 Paris, France</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/website.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>