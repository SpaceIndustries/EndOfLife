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
                                <h2>Welcome</h2>
                                <p>Endoflife.com is a community website. We are not responsible for any personal data that can pass on the site.</p>
                            </div>
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-user"></i> Name</th>
											<th><i class="fa fa-male"></i> Gender</th>
											<th><i class="fa fa-globe"></i> Country</th>
                                            <th><i class="fa fa-crosshairs"></i> IP Address</th>
                                            <th><i class="fa fa-align-justify"></i> Display for</th>
                                            <th><i class="fa fa-info-circle"></i> More informations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									    <tr class="odd gradeX">
                                            <td style="font-weight: bold; color: #ff0000;text-shadow: 0px 0px 5px #ff0000;">AUnknown</td>
                                            <td>Male</td>
											<td><i><img src="images/country/f/France.png"></i> France</td>
											<td>255.255.255.255</td>
                                            <td class="center">DDOS</td>
                                            <td class="center"><a class="btn btn-default btn-xs btn-block" target="_blank" href="users.php"><i class="fa fa-plus-circle"></i> More infos </a></td>
                                        </tr>
                                    </tbody>
									<tbody>
									    <tr class="odd gradeX">
                                            <td style="font-weight: bold; color: #ff0000;text-shadow: 0px 0px 5px #ff0000;">AUnknown</td>
                                            <td>Male</td>
											<td><i><img src="images/country/f/France.png"></i> France</td>
											<td>255.255.255.255</td>
                                            <td class="center">DDOS</td>
                                            <td class="center"><a class="btn btn-default btn-xs btn-block" target="_blank" href="users.php"><i class="fa fa-plus-circle"></i> More infos </a></td>
                                        </tr>
                                    </tbody>
									<tbody>
									    <tr class="odd gradeX">
                                            <td style="font-weight: bold; color: #ff0000;text-shadow: 0px 0px 5px #ff0000;">AUnknown</td>
                                            <td>Male</td>
											<td><i><img src="images/country/f/France.png"></i> France</td>
											<td>255.255.255.255</td>
                                            <td class="center">DDOS</td>
                                            <td class="center"><a class="btn btn-default btn-xs btn-block" target="_blank" href="users.php"><i class="fa fa-plus-circle"></i> More infos </a></td>
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