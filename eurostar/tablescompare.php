<?php
// Conexión a la primera base de datos
$conn1 = mysqli_connect('192.168.0.14', 'admin', 'euro321', 'dbeurostar');

// Conexión a la segunda base de datos
//$conn1 = mysqli_connect('localhost', 'root', '', 'dbeurostar');
$conn2 = mysqli_connect('192.168.0.14', 'admin', 'euro321', 'dbeurostar_fusion');

// Función para comparar los campos de dos tablas
function compareTables($conn1, $conn2, $table) {
  // Obtener los campos de la tabla de la primera base de datos
  $result1 = mysqli_query($conn1, "SHOW COLUMNS FROM $table");
  $columns1 = array();
  while ($row = mysqli_fetch_assoc($result1)) {
    $columns1[] = $row;
  }

  // Obtener los campos de la tabla de la segunda base de datos
  $result2 = mysqli_query($conn2, "SHOW COLUMNS FROM $table");
  $columns2 = array();
  while ($row = mysqli_fetch_assoc($result2)) {
    $columns2[] = $row;
  }

  // Comparar los campos de las dos tablas
  $diff1 = array_udiff($columns1, $columns2, function($a, $b) {
    return $a == $b ? 0 : ($a > $b ? 1 : -1);
  });
  $diff2 = array_udiff($columns2, $columns1, function($a, $b) {
    return $a == $b ? 0 : ($a > $b ? 1 : -1);
  });

  if (empty($diff1) && empty($diff2)) {
    //echo "La tabla $table tiene los mismos campos en ambas bases de datos. <br>";
  } else {
    echo "La tabla $table tiene diferencias en los siguientes campos:<br>";

    if (!empty($diff1)) {
      echo "_En la primera base de datos(dbeurostar) tiene estas columas que en la segunda base de datos (dbeurostar_fusion) NO _ <br>";
      foreach ($diff1 as $column) {
        echo "-> {$column['Field']} ({$column['Type']})<br>";
      }
    }else{
      echo "_En la primera base de datos(dbeurostar) tiene todas la columnas que la segunda base de datos(dbeurostar_fusion) <br>";
      echo "-> <br>";
    }

    if (!empty($diff2)) {
      echo "_En la segunda base de datos(dbeurostar_fusion) tiene estas columas  que en la primera base de datos (server) NO _ <br>";
      foreach ($diff2 as $column) {
        echo "-> {$column['Field']} ({$column['Type']})<br>";
      }
    }
    echo"<br>";
  }
}

// Obtener una lista de todas las tablas de la primera base de datos
$result1 = mysqli_query($conn1, "SHOW TABLES");
$tables1 = array();
while ($row = mysqli_fetch_row($result1)) {
  $tables1[] = $row[0];
}

// Comparar las tablas de las dos bases de datos
foreach ($tables1 as $table) {
  if (in_array($table, $tables1)) {
    compareTables($conn1, $conn2, $table);
  } else {
    echo "La tabla $table no existe en la segunda base de datos.\n";
  }
}

// Cerrar las conexiones a las bases de datos
mysqli_close($conn1);
mysqli_close($conn2);
?>
