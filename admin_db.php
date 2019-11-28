<div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="dashboard_admin.php">
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
                    <li><a href="dashboard_admin.php"><i class="glyphicon glyphicon-dashboard"></i> DASHBOARD</a></li>
                    <li><a href="manage_users.php"><i class="glyphicon glyphicon-user"></i> USERS</a></li>
                    <li><a href="manage_category.php"><i class="glyphicon glyphicon-list-alt"></i>CATEGORY</a></li>
                    <li><a href="manage_subjects.php"><i class="glyphicon glyphicon-calendar"></i>SUBJECTS</a></li>
                    <li><a href="manage_exams.php"><i class="glyphicon glyphicon-pencil"></i>EXAMS</a></li>
                    <li><a href="manage_results.php"><i class="glyphicon glyphicon-scale"></i> RESULTS</a></li>
                    <li><a href="cp_admin.php"><i class="glyphicon glyphicon-refresh"></i> PASSWORD</a></li>
                    <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> LOGOUT</a></li>
                </ul>
            </div>
</div>