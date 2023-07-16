<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Articles</title>
		<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/css/style.css" />
	</head>
	<body>
		<div id="page">
			<main>
				<?php self::_includeInTemplate( $datas['page'],
					$datas['action'], $datas['router'] ); ?>
			</main>
		</div>
	</body>
</html>