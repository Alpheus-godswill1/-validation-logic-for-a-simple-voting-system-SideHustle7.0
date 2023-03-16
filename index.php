<?php

// Get voter's age, PVC status, and ward number
$age = 18; // Voter's age
$pvc = true; // Valid PVC
$ward = '020'; // Voter's Word

// Check if voter is above 18 years
if ($age < 18) {
  echo "Sorry, you are not eligible to vote as you are below 18 years old.";
}
// Check if voter has PVC
else if (!$pvc) {
  echo "Sorry, you are not eligible to vote as you do not have a PVC.";
}
// Check if voter's ward is 020
else if ($ward != '020') {
  echo "Sorry, you are not eligible to vote as you are not registered in ward 020.";
}
// If all checks out, echo "Voter eligible to vote"
else {
  echo "Congratulations! You are eligible to vote.";
}

?>
