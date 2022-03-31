<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WEB TUTOR DEK!!</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="css/tooplate-style.css" rel="stylesheet">

    <style>
        .menu {
            border: 10px solid;
            padding: 20px;
            margin-bottom: 20px;
        }
	    a{
		    margin-left: 1rem;
	    }
    </style>

</head>
<body>
	<div class="tm-container-fluid">
        <!-- code here -->
        <section class="menu tm-bgcolor-1" id="">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </section>

        <section class="tm-bgcolor-2 tm-p-50 mt-20" style="border-radius: 15px; margin-bottom: 20px;">
            <h1>
                <?php
                    $pageTitle = 'WEB PERTAMA ';
                    echo "$pageTitle - TUTOR DEK!";
                ?>
            </h1>
            <?php
                $x = 1;
                while($x <=5) { 
                    echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nisi amet corporis recusandae repudiandae eos, eligendi ducimus tenetur suscipit enim beatae aliquam officia veniam ex hic distinctio accusantium, voluptatem dicta?</p>";
                    $x++;
                }
            ?>
        </section>

		<section class="tm-site-header tm-flex-center tm-mb-50 tm-bgcolor-1 tm-border-rounded">
			<i class="fas fa-heart fa-3x"></i>
			<h1>TUTOR WEB</h1>
		</section>

		<section class="tm-about tm-mb-80 tm-p-50 tm-bgcolor-2 tm-border-rounded">
			<div class="tm-about-header tm-flex-center">
				<i class="fas fa-users fa-2x"></i>
				<h2>AKU</h2>
			</div>
			<div class="tm-about-text">
				<p class="tm-mb-40">NAMA : ANTO WIJAYA</p>
				<p class="tm-mb-0">SANGAT TERAMAT INFORMATIKA JOKE </p>
