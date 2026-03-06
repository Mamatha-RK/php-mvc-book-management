<html>

<head>
 

  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <style type="text/css">
      body::before {
        content: ' ';
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        opacity: 0.45;
        background-image: url("https://i.pinimg.com/originals/42/32/8d/42328d58dc7490bff34e62598df9e848.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
      }
      body{
        margin-left: 10%;
        margin-right: 10%;
        
      }
      #content{
        position: relative;
      }

      table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;

      }

      table,
      th,
      td {
        border: 1px solid;
        
      }

      table th,
      table td {
        padding: 5px;
        text-align: left;
        padding: 12px;
      }

      h3 {
        text-align: center;
        background-color:hsl(0, 100%, 30%);
        font-size: 30px;
        color:white;
        margin: 0%;
        margin-bottom: 10px;
        padding:10px;
      }
      #add {
        margin-left: 85%;
        padding: 7px 40px;
        background-color: #E25822;
        color: white;
        border: none;
        border-radius: 3px;
        font-size: 16px;
      }

      button {
        background-color: #DB7093;
        border: none;
        border-radius: 10px;
        padding: 4px 10px;

      }
      a{
        text-decoration: none;
        color:black;
      }
    </style>

  </head>

<body>
  <div id="content">
  <h3> Book Management</h3>
  <input type="submit" id="add" value="Add">
  <table class="table">
    <thead>
      <tr>
        <th>Slno</th>
        <th>BookNumber</th>
        <th>BookName</th>
        <th>Author</th>
        <th>Published Year</th>
        <th>Copies Available</th>
        <th>Cost</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <script>
      $("#add").click(function () {
        window.location.href = "index.php?rt=book/addbooklist";

      });	   
    </script>

</div>
</body>

</html>

<?php
$n=1;
for ($i = 0; $i < count($booklist); $i++) {
  $Slno = $booklist[$i]['Slno'];
  
  echo '<tr>
            <td> ' . $n . '</td>
            <td> ' . $booklist[$i]['bookNumber'] . '</td>
            <td> ' . $booklist[$i]['bookName'] . '</td>
            <td> ' . $booklist[$i]['author'] . '</td>
            <td> ' . $booklist[$i]['publishedYear'] . '</td>
            <td> ' . $booklist[$i]['copies'] . '</td>
            <td> ' . $booklist[$i]['cost'] . '</td>
            <td> ' . $booklist[$i]['description'] . '</td>
               
            <td> <button><a href="index.php?rt=book/editbooklist&Slno='.$Slno.'">edit</a></button> </td>
            <td> <button><a href="index.php?rt=book/deletebook&Slno=' .$Slno.'">delete</a></button> </td>
         </tr>';
         $n+=1;
}

?>