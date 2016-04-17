<?php


$errors  = [ ];
$message = $_POST['message'];
$name    = $_POST['name'];
$mail    = $_POST['mail'];


if ( ! isset( $name ) || $name == '' ) {
	$errors['name'] = "Vous n'avez pas renseigné votre nom";
}
if ( ! isset( $message ) || $message == '' ) {
	$errors['message'] = "Vous n'avez pas renseigné votre message";
}
if ( ! isset( $mail ) || $mail == '' || !filter_var( $mail, FILTER_VALIDATE_EMAIL )){
	$errors['mail'] = "Vous n'avez pas renseigné un mail valide";
}
session_start();

if ( empty( $errors ) ) {
	$_SESSION['success']=1;
	$headers = 'FROM: site@local.dev';
	mail( 'pseudoups1@gmail.com', 'Formulaire de contact', $message);
	header( 'Location: index.php#contact' );

} else {
	$_SESSION['errors'] = $errors;
	$_SESSION['inputs'] = $_POST;

	header( 'Location: index.php#contact' );
}

