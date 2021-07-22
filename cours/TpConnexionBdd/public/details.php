<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Coming Soon html5 template by GetTemplate</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap itself -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> 
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"> 
	<!-- Custom styles -->
	<link rel="stylesheet" href="public/assets/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>

<body>

<!-- Header -->
<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-push-2 text-center">
				<h1>Welcome to Superhop</h1>
				<h2>get nice and sheep product very fast here it's your home </h2>
				<h1>Details nos produits disponnibles sont</h1></br>
                <?php
                $data=$db->query('SELECT * FROM product WHERE idProd='.$_GET['idProd'],'Produits');
      var_dump($data);
                ?>