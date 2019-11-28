<div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <li class="current"><a href="dashboard_pupil.php">
                        <form name="Tick">
                        <input type="text" size="11" name="Clock">
                        </form>
                        <script language="javascript" type="text/javascript">
                        <!--
                        /* Visit http://www.yaldex.com/ for full source code
                        and get more free JavaScript, CSS and DHTML scripts! */
                        function show(){
                        var Digital=new Date()
                        var hours=Digital.getHours()
                        var minutes=Digital.getMinutes()
                        var seconds=Digital.getSeconds()
                        var dn="AM"
                        if (hours>12){
                        dn="PM"
                        hours=hours-12
                        }
                        if (hours==0)
                        hours=12
                        if (minutes<=9)
                        minutes="0"+minutes
                        if (seconds<=9)
                        seconds="0"+seconds
                        document.Tick.Clock.value=hours+":"+minutes+":"
                        +seconds+" "+dn
                        setTimeout("show()",1000)
                        }
                        show()
                        //-->
                        </script>
                    </a></li>
                    <!-- Main menu -->
                    <li><a href="dashboard_pupil.php"><i class="glyphicon glyphicon-dashboard"></i> DASHBOARD</a></li>
                    <li><a href="manage_profile_pupil.php"><i class="glyphicon glyphicon-user"></i>PROFILE</a></li>
                    <li><a href="manage_register_pupil.php"><i class="glyphicon glyphicon-tasks"></i>REGISTER</a></li>
                    <li><a href="manage_exams_pupil.php"><i class="glyphicon glyphicon-pencil"></i>EXAMS</a></li>
                    <li><a href="manage_results_pupil.php"><i class="glyphicon glyphicon-scale"></i> RESULTS</a></li>
                    <li><a href="cp_pupil.php"><i class="glyphicon glyphicon-refresh"></i> PASSWORD</a></li>
                    <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> LOGOUT</a></li>
                </ul>
            </div>
</div>