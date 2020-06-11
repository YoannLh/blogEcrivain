<!DOCTYPE html>
<html lang="fr">
	<head>

		<?php include_once 'views/includes/head.php'; ?>

	</head>
	<body id="body">

		<?php 

			include_once 'views/includes/insert_header.php';

			insertHeader();

		?>

		<?= showFormEditAndDelete() ?>

		<?= editPost() ?>

		<?= deletePost() ?>

		<?= getReportedComment() ?>

		<?= deleteComment() ?>

		<?= showTitleAndPost() ?>

		<?= previousOrNextPost() ?>

		<?= getComments() ?>

		<?= showAllCommentsByPost() ?>

		<?php include_once 'views/includes/footer.php'; ?>

	</body>
</html>