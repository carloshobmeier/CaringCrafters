<?php
session_start();

// Check if the event_id is set in the URL
if (isset($_GET['event_id'])) {
    $event_id = intval($_GET['event_id']); // Get the event ID and ensure it's an integer
    $id_user = $_SESSION['id'];

    include_once('./connectTeste.php');

    // Insert the event ID and session ID into the database
    $sql ="INSERT INTO Participa_evento (fk_Usuario_id_user, fk_Evento_id_evento) VALUES ('$id_user', '$event_id')";


    $stmt = $conn->prepare($sql);

    $stmt->execute();
    $stmt->close();
    header("Location:../events.php");
} else {
    echo "No event ID provided";
}
?>
