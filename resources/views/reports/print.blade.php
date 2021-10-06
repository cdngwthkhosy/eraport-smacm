<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <style>
    table.minimalistBlack {
  border: 3px solid #000000;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.minimalistBlack td, table.minimalistBlack th {
  border: 1px solid #000000;
  padding: 5px 4px;
}
table.minimalistBlack tbody td {
  font-size: 13px;
}
table.minimalistBlack thead {
  background: #CFCFCF;
  background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  border-bottom: 3px solid #000000;
}
table.minimalistBlack thead th {
  font-size: 15px;
  font-weight: bold;
  color: #000000;
  text-align: left;
}
table.minimalistBlack tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #000000;
  border-top: 3px solid #000000;
}
table.minimalistBlack tfoot td {
  font-size: 14px;
}
  </style>
</head>
<body>
  <table class="minimalistBlack">
    <thead>
    <tr>
    <th>head1</th>
    <th>head2</th>
    <th>head3</th>
    <th>head4</th>
    <th>head5</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
    <td>foot1</td>
    <td>foot2</td>
    <td>foot3</td>
    <td>foot4</td>
    <td>foot5</td>
    </tr>
    </tfoot>
    <tbody>
    <tr>
    <td>cell1_1</td>
    <td>cell2_1</td>
    <td>cell3_1</td>
    <td>cell4_1</td>
    <td>cell5_1</td>
    </tr>
    <tr>
    <td>cell1_2</td>
    <td>cell2_2</td>
    <td>cell3_2</td>
    <td>cell4_2</td>
    <td>cell5_2</td>
    </tr>
    <tr>
    <td>cell1_3</td>
    <td>cell2_3</td>
    <td>cell3_3</td>
    <td>cell4_3</td>
    <td>cell5_3</td>
    </tr>
    <tr>
    <td>cell1_4</td>
    <td>cell2_4</td>
    <td>cell3_4</td>
    <td>cell4_4</td>
    <td>cell5_4</td>
    </tr>
    <tr>
    <td>cell1_5</td>
    <td>cell2_5</td>
    <td>cell3_5</td>
    <td>cell4_5</td>
    <td>cell5_5</td>
    </tr>
    </tbody>
    </table>
</body>
</html>