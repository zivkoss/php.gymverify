<?php

require_once 'config.php';

$sql = "INSERT INTO members
        (first_name, last_name, email, phone_number, photo_path, training_plan_id, trainer_id, access_card_pdf_path)
        VALUES 
  (?, ?, ?, ?, ?, ?, ?, ?)";