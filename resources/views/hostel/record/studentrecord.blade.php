@extends('master.base')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  content="width=device-width";
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
  
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2>Student Information</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Student InformationWE " title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:25;">Name</th>
    <th style="width:25;">Last Name</th>
    <th style="width:25;">Mobile Number</th>
    <th style="width:25;">Email</th>
    <th style="width:25;">Address</th>
  </tr>
  <tr>
    <td>Bhavesh</td>
    <td>Rathod</td>
    <td>7359623514</td>
    <td>right2shiv.lp@gmail.com</td>
    <td>At:Junagadh</td>
  </tr>
 
  <tr>
    <td>vandan</td>
    <td>dave</td>
    <td>8989623514</td>
    <td>riyuhyht2shujk.lp@gmail.com</td>
    <td>At:Junagadh</td>
  </tr>

  <tr>
    <td>chintan</td>
    <td>bhalodiya</td>
    <td>995962390</td>
    <td>chintanv.lp@gmail.com</td>
    <td>At:Junagadh</td>
  </tr>

</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


@endsection