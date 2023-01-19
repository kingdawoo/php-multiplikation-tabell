<?php
$five = 5;
$ten = 10;
$fifteen = 15;

echo "<h1>Multiplikation tabell</h1>";
echo "<div>";

// Fem
echo "<table>";
echo "<tr><td>Fem</td><td>Multiplikation</td></tr>";
for ($i = 1; $i < 11; $i++) {
    echo "<tr>";
    echo "<td>$five x $i</td>";
    echo "<td>".$five * $i."</td>";
    echo "</tr>";
}
echo "</table>";

// Tio
echo "<table>";
echo "<tr><td>Tio</td><td>Multiplikation</td></tr>";
for ($i = 1; $i < 11; $i++) {
    echo "<tr>";
    echo "<td>$ten x $i</td>";
    echo "<td>".$ten * $i."</td>";
    echo "</tr>";
}
echo "</table>";

// Femton
echo "<table>";
echo "<tr><td>Femton</td><td>Multiplikation</td></tr>";
for ($i = 1; $i < 11; $i++) {
    echo "<tr>";
    echo "<td>$fifteen x $i</td>";
    echo "<td>".$fifteen * $i."</td>";
    echo "</tr>";
}
echo "</table>";

echo "</div>";

// CSS
echo
"   <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      margin:5px;
      width: 30%;
      background: white;
      margin-top: 25px;
    }

    td, th {
      border: 1px solid Black;
      text-align: center;
      padding: 8px;
    }

    div {
        display: flex;
        justify-content: center;
    }
    body {
        background-color:Grey;
        color:black;
    }
    h1 {
        text-align: center;
    }
    </style>";
?>