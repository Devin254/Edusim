<!doctype html>
<html>
    <head>
        <title>DataTables AJAX Pagination with search and sort - PHP</title>
        <!-- Datatable CSS -->
        <link href='DataTables/datatables.min.css' rel='stylesheet' type='text/css'>

        <!-- jQuery Library -->
        <script src="jquery-3.3.1.min.js"></script>
        
        <!-- Datatable JS -->
        <script src="DataTables/datatables.min.js"></script>
        
    </head>
    <body >

        <div >
            <!-- Table -->
            <table id='empTable' class='display dataTable'>
                <thead>
                <tr>
                    <th>Employee name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Salary</th>
                    <th>City</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                <tr>
                    <td>Vincente Grace</td>
                    <td>victor@gmail.com</td>
                    <td>Female</td>
                    <td>KES 50,000</td>
                    <td>New Oleans</td>
                </tr>
                <tr>
                    <td>Victor Kipkoech</td>
                    <td>victor@gmail.com</td>
                    <td>Male</td>
                    <td>KES 30,000</td>
                    <td>Rockport City</td>
                </tr>
                </tbody>
                
            </table>
        </div>
        
        <!-- Script -->
        <script>
        $(document).ready(function(){
            $('#empTable').DataTable();
        });
        </script>

    </body>

</html>
