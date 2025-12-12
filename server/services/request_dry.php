<?php
    require __DIR__.'/../db.php';

    $request_wash = "SELECT * FROM equipos INNER JOIN tipo_equipo ON 
                        equipos.id_tipo_equipo=tipo_equipo.id_tipo_equipo 
                        WHERE disponible = TRUE AND tipo_equipo.id_tipo_equipo = '2'";
    $result = mysqli_query($CONNECTION, $request_wash);

    while($row = mysqli_fetch_assoc($result)){
        $lugar = $row['lugar'];
        echo "<option value='".$lugar."'>".$lugar."</option>";
    }
?>