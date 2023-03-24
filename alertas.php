<?php
function alerta(){
// Obtener el mensaje y el status de la URL
if (isset($_GET['mensaje'])) {
    $mensaje = $_GET['mensaje'];
}
if (isset($_GET['status'])) {
    $status = $_GET['status'];
}

// Mostrar la alerta de SweetAlert si se ha especificado un mensaje y un status
if (isset($mensaje) && isset($status)) {
    if ($status === 'success') {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Se ha registrado exitosamente',
                text: '$mensaje'
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '$mensaje'
            });
        </script>";
    }
}
}

?>
