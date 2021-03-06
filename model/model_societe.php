<?php
  include('db.php');

  //Societe

  if (isset($_POST['submit_societe']))
  {
    include('../controller/controller.php');

    $stmt = $db->prepare("INSERT INTO societe (nom_societe, pays_societe, tva_societe, telephone_societe, types_id_types)
    VALUES (:nom_societe, :pays_societe, :tva_societe, :telephone_societe, :types_id_types)");

    $stmt->bindParam(':nom_societe', $nom_societe);
    $stmt->bindParam(':pays_societe', $pays_societe);
    $stmt->bindParam(':tva_societe', $tva_societe);
    $stmt->bindParam(':telephone_societe', $telephone_societe);
    $stmt->bindParam(':types_id_types', $types_id_types);

    $stmt->execute();
    header("Location: ../public/view/frontend/list/societe.php");
  }

  ?>
