<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

    </script>
    <style>
        .tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

        </style>
</head>
<body>

    <!-- Tab links -->
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Create Database</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Table Name</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Show Records</button>
</div>

<!-- Tab content -->
<div id="London" class="tabcontent">
  <form action="createDatabase2.php" method="POST">
    Enter Database Name: <input type="text" name="create_database"/>
    <button type="submit">Submit</button>
  </form>
</div>

<div id="Paris" class="tabcontent">
<select name="list_of_databases">
    <?php
     $conn=mysqli_connect("localhost","root","");
     $result=mysqli_query($conn,"show databases");
     while($row=mysqli_fetch_array($result)){
        echo "<option value=".$row['Database'].">".$row['Database']."</option>";
     }
    ?>
<form action="createtable.php" method="POST">
    Enter table Name: <input type="text" name="create_table"/>
    <button type="submit">Create Table</button>
  </form>
</div>

<div id="Tokyo" class="tabcontent">
<form action="showRecords.php" method="POST">
    Enter Database Name: <input type="text" name="dbname"/>
    Enter Table Name: <input type="text" name="tname"/>

    <button type="submit">Show Records</button>
  </form>
</div>
    
</body>
</html>

