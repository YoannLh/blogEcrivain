<!DOCTYPE html>
<html lang="fr">
	<head>

		<?php include_once 'views/includes/head.php'; ?>

	</head>
	<body>

		<?php 

			include_once 'views/includes/insert_header.php';

			insertHeader();

		?>

		<?= noDeleteComment() ?>

		<?= deleteComment() ?>

		<?= showAllReportedComment() ?>

		<?php include_once 'views/includes/footer.php'; ?>

	</body>
</html>