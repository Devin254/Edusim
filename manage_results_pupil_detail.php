<?php
  // Insert the page header
  $page_title = 'Edusim - Category';
  require_once('header.php');
  require_once('pupil_db.php');
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
                                        <th>Exam Category Name</th>
                                        <th>Position</th>
                                        <th>ENG</th>
                                        <th>MAT</th>
                                        <th>KIS</th>
                                        <th>SCI</th>
                                        <th>GHC</th>
                                        <th>Total Score(500)</th>
                                        <th>Action</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>HIGH FLYER BOOK EXAMS</td>
                                        <td>1</td>
                                        <td>78</td>
                                        <td>88</td>
                                        <td>74</td>
                                        <td>87</td>
                                        <td>90</td>
                                        <td>417</td>
                                         <td class="center"><button class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-print"></button></td>
                                        <td class=""><p class="text-success"><i class="glyphicon glyphicon-ok"></i></p></td>
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