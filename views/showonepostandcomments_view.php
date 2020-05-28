<!DOCTYPE html>
<html lang="fr">
	<head>

		<?php include_once 'views/includes/head.php'; ?>

	</head>
	<body id="body">

		<?php

			if($_SESSION['rank'] == "admin") {

		    		include_once 'views/includes/headerIfAdmin.php';

		    	} else if(isset($_SESSION['connect']) && isset($_SESSION['pseudo'])) {

		    		include_once 'views/includes/headerIfLogged.php';

				} else {

					include_once 'views/includes/header.php';

				}

		?>

		<div class="flex">
			<form method="post" style="margin: 3% auto">
				<table>
					<tr>
						<td>
							<input class="form_control" type="submit" name="edit_comment" value="Modifier ce post"/>
						</td>
						<td>
							<input class="form_control" type="submit" name="delete_comment" value="Supprimer ce post"/>
						</td>
					</tr>
				</table>
			</form>
		</div>

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