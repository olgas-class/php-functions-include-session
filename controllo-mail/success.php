<?php
session_start();
echo "Congratulazioni! ti sei appena iscritto alla nostra newsletter. Riceverai aggiornamenti sulla tua email " . $_SESSION["email"];
