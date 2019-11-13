<?php
  // Insert the page header
  $page_title = 'Edusim - Category';
  require_once('header.php');
  require_once('examiner_db.php');
?>

          <div class="col-md-10">
            <div class="row">
                <div class="col-md-6">
                    
                </div>
            </div>          
            <div class="row">
                <div class="col-md-12 panel-warning">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">
                            <h6><i class="glyphicon glyphicon-scale"></i><b> EXAMS RESULTS</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 panel-warning">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">
                            <h6><b>HIGH FLYER BOOK EXAMS</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>

            <div class="content-box-large">
                <div class="panel-body">

                            <h6><table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Position</th>
                                        <th>Full Names</th>
                                        <th>Total Marks(500)</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>Charles Njojo K</td>
                                        <td>390</td>
                                        <td class=""><p class="text-success"><i class="glyphicon glyphicon-ok"></i></p></td>
                                    </tr>                             
                                    <tr class="odd gradeX">
                                        <td>2</td>
                                        <td>Devin Kiprotich Kiprop</td>
                                        <td>390</td>
                                        <td class=""><p class="text-success"><i class="glyphicon glyphicon-ok"></i></p></td>
                                    </tr>    
                                    <tr class="odd gradeX">
                                        <td>3</td>
                                        <td>Vincent Nzomo</td>
                                        <td>333</td>
                                        <td class=""><p class="text-danger"><i class="glyphicon glyphicon-off"></i></p></td>
                                    </tr>     
                                </tbody>
                            </table>
                        </h6>                       
            </div>              
          </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>