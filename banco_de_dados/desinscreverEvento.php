<?php
session_start();

// Check if the event_id is set in the URL
if (isset($_GET['event_id'])) {
    $event_id = intval($_GET['event_id']); // Get the event ID and ensure it's an integer
    $id_user = $_SESSION['id'];

    include_once('./connectTeste.php');

    // Prepare and execute the DELETE query
    $sql = "DELETE FROM Participa_evento WHERE fk_Usuario_id_user ='$id_user' AND fk_Evento_id_evento = '$event_id';";

    $stmt = $conn->prepare($sql);

    $stmt->execute();
    $stmt->close();
    header("Location:../events.php");
} else {
    echo "No event ID provided";
}
?>
