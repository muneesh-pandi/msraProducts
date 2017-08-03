<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Example of Employee Table with twitter bootstrap</title>
<meta name="description" content="Creating a Employee table with Twitter Bootstrap. Learn with example of a Employee Table with Twitter Bootstrap.">
<link href="/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css"></style>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css"></style>

</head>
<body style="margin:20px auto">
<div class="container">
<div class="row header" style="text-align:center;color:green">
<h3>Bootstrap Table With sorting,searching and paging using dataTable.js (Responsive)</h3>
</div>
<table id="myTable" class="table table-striped table-bordered dt-responsive nowrap" width="100%">
        <thead>
          <tr>
            <th>ENO</th>
            <th>EMPName</th>
            <th>Country</th>
            <th>Salary</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>001</td>
            <td>Anusha</td>
            <td>India</td>
            <td>10000</td>
          </tr>
          <tr>
            <td>002</td>
            <td>Charles</td>
            <td>United Kingdom</td>
            <td>28000</td>
          </tr>
          <tr>
            <td>003</td>
            <td>Sravani</td>
            <td>Australia</td>
            <td>7000</td>
          </tr>
		   <tr>
            <td>004</td>
            <td>Amar</td>
            <td>India</td>
            <td>18000</td>
          </tr>
          <tr>
            <td>005</td>
            <td>Lakshmi</td>
            <td>India</td>
            <td>12000</td>
          </tr>
          <tr>
            <td>006</td>
            <td>James</td>
            <td>Canada</td>
            <td>50000</td>
          </tr>

		   <tr>
            <td>007</td>
            <td>Ronald</td>
            <td>US</td>
            <td>75000</td>
          </tr>
          <tr>
            <td>008</td>
            <td>Mike</td>
            <td>Belgium</td>
            <td>100000</td>
          </tr>
          <tr>
            <td>009</td>
            <td>Andrew</td>
            <td>Argentina</td>
            <td>45000</td>
          </tr>

		    <tr>
            <td>010</td>
            <td>Stephen</td>
            <td>Austria</td>
            <td>30000</td>
          </tr>
          <tr>
            <td>011</td>
            <td>Sara</td>
            <td>China</td>
            <td>750000</td>
          </tr>
          <tr>
            <td>012</td>
            <td>JonRoot</td>
            <td>Argentina</td>
            <td>65000</td>
          </tr>
        </tbody>
      </table>
	  </div>
</body>
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>
