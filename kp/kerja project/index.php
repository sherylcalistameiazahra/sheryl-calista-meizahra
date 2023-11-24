<?php

include 'config.php';

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
  $email = $_POST['email'];
	$message = $_POST['message'];

	$sql = "INSERT INTO komentar (name, email,  message) 
  VALUES ('$name', '$email', '$message')";

	if ($conn->query($sql) === TRUE) {
		echo "";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La MADAME Florist</title>
     <!--Font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <!--custom css file link-->
     <link rel="stylesheet" href="style.css"> 
     
</head>
<body>

    <!--Header section starts-->
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">La Madame Florist<span>.</span></a>
        <nav class="navbar">
            <a href="#home" class="list">Home</a>
            <a href="#about" class="list">About Us</a>
            <a href="#products" class="list">Products</a>
            <a href="#contact" class="list">Contact Us</a>
            <a href="#feedback" class="list">Feedback</a>
        </nav>
        <div class="icons">

				<a href="https://web.facebook.com/people/La-Madame-Florist/100044608771526/"><i class="fab fa-facebook"></i></a>
				<a href="https://www.instagram.com/madameflorist/"><i class="fab fa-instagram"></i></a>

        </div>
    </header>
     <!--Header section ends-->


     <!--Home section starts-->
     <section class="home" id="home">
        <div class="content">
            <h4>La Madame Florist</h4>
            <span>Fresh & beautiful flowers</span>
            <p>Flowers are a perfect way to brighten up your home and our mood.</p>
            <a href="#about" class="btn">See More</a>
        </div>
     </section>


    <!--Home section ends-->


  <!--About section starts-->
<section class="about" id="about">
    <h1 class="heading"><span>about</span> us</h1>
    <div class="row">
        <div class="video-container">
            <video src="img/SHERYL.mp4" loop autoplay muted></video>
            <h3>best flowers sellers</h3>
        </div>
        <div class="content">
            <h3>La Madame Florist</h3>
            <p>La Madame Florist adalah sebuah toko bunga / florist yang berlokasi di Jakarta Utara, Pantai Indah Kapuk yang berdiri sejak tahun 2013 dan dengan bangga telah melayani para pelanggan dengan rangkaian - rangkaian bunga yang segar, cantik dan tentu nya berkualitas tinggi.</p>
            <p>La Madame Florist menyadari betul bahwa bunga adalah sebuah ungkapan yang memiliki makna mendalam di setiap momen kehidupan, oleh sebab itu La Madame Florist sangat menjaga kualitas nya sebagai “penyampai pesan” bagi para pelanggan.</p>
            <a href="#products" class="btn">See Our Products</a>

        </div>
    </div>
</section>

  <!--About section ends-->


<!--Products section stars-->

<section class="products" id="products">
    <h1 class="heading">our <span>products</span></h1>
       <div class="box-container">
        
        <h1 class="heading">New <span></span></h1>
        <div class="box">
        
            <div class="image">
                <img src="img/aspen.webp" alt="">
            </div>
            <div class="content">
                <h3>ASPEN YELLOW</h3>
                <div class="price">Rp.1.000.000 <span></span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/raspberry.webp" alt="">
            </div>
            <div class="content">
                <h3>RASPBERRY FUSCHIA</h3>
                <div class="price"> Rp.1.200.000<span></span></div>
            </div>
        </div>
        

        <div class="box">
            <div class="image">
                <img src="img/autumn.webp" alt="">
            </div>
            <div class="content">
                <h3>AUTUMN CHARM</h3>
                <div class="price">Rp.1.200.000 <span></span></div>
            </div>
        </div>

        <h1 class="heading">Fresh <span></span></h1>
        <div class="box">
            <div class="image">
                <img src="img/dear.webp" alt="">
            </div>
            <div class="content">
                <h3>DEAR ELLIE PRESERVED FLOWERS BOUQUET</h3>
                <div class="price">Rp. 2.500.000 <span></span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/blue.webp" alt="">
            </div>
            <div class="content">
                <h3>BLUE GINKO PRESERVED FLOWERS</h3>
                <div class="price">Rp.2.000.000 <span></span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/pastel.webp" alt="">
            </div>
            <div class="content">
                <h3>PASTEL RAINBOW PRESERVED FLOWER</h3>
                <div class="price">Rp.1.250.000 <span></span></div>
            </div>
        </div>
        
        <h1 class="heading">Dried <span></span></h1>
        <div class="box">
            <div class="image">
                <img src="img/samantha.webp" alt="">
            </div>
            <div class="content">
                <h3>SAMANTHA BOUQUET</h3>
                <div class="price"> Rp. 1.800.000 <span></span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/elegance.webp" alt="">
            </div>
            <div class="content">
                <h3>ELEGANCE FAIRY RED VASE</h3>
                <div class="price">Rp. 2.300.000 <span></span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/the.webp" alt="">
            </div>
            <div class="content">
                <h3>THE BLUE PARADISE</h3>
                <div class="price">Rp. 2.200.000 <span></span></div>
            </div>
        </div>
    </div>
</section>
<!--Products section ends-->




<!--contact section starts-->
<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> us</h1>
    <div class="box">
        <div class="col-4">
            <h4>Address</h4>
            <p>Ruko Cordoba, Jl. Pantai Indah Kapuk No.3, RT.7/RW.2, Kamal Muara, Kec. Penjaringan, Jkt Utara, Daerah Khusus Ibukota Jakarta 14470</p>
        </div>
        <div class="col-4">
            <h4>Line ID</h4>
            <p>@madameflorist,@madameflorist1</p>
        </div>
        <div class="col-4">
            <h4>Telp.</h4>
            <p>(021) 56945795</p>
        </div>
        <div class="col-4">
            <h4> No.Hp</h4>
            <p>087879038018</p>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1371956698968!2d106.74216637437728!3d-6.112224759941372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1d3dd0d3d06d%3A0x5c95e6360242872c!2sLa%20Madame%20Florist!5e0!3m2!1sid!2sid!4v1700544263470!5m2!1sid!2sid"  width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</section>

<!--contact section ends-->
<section class="feedback" id="feedback">
<div class="halo container col-sm-6">
    <form method="post" action="index.php#feedback">
    <div class="mb-3">
        <div>
            <label for="exampleFormControlInput1" class="form-label">Name</label>
        </div>
        <div>
            <input style="border: 1px solid gray; border-radius: 5px; padding: 5px; width: 100%;" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name" >
        </div>
</div>
<div class="mb-3" style="display: block;">
    <div>
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
    </div>
    <div>
        <input style="border: 1px solid gray; border-radius: 5px; padding: 5px; width: 100%;" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name='email' required>
    </div>
</div>

<div class="mb-3">
    <div>
        <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
    </div>
    <div>

        <textarea style="border: 1px solid gray; border-radius: 5px; padding: 5px; width: 100%;" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment" name="message" ></textarea>
    </div>
</div>
        <button type="submit" class="btn btn-warning" name="submit">Submit</button>
    </form>
</div>

<br>
<br>

<?php
		date_default_timezone_set('Asia/Jakarta');


		$sql = "SELECT * FROM komentar";
		$result = $conn->query($sql);
		$waktu_sekarang = time();

		if ($result->num_rows > 0) {
			// output data of each row
			while ($row = $result->fetch_assoc()) {
				$timestamp_unix = strtotime($row['timestamp']);

				$selisih_detik = $waktu_sekarang - $timestamp_unix;


				if ($selisih_detik < 60) {
					$teks_waktu = $selisih_detik . " sec" . ($selisih_detik > 1 ? "s" : "") . " ago";
				} elseif ($selisih_detik < 3600) {
					$menit = floor($selisih_detik / 60);
					$teks_waktu = $menit . " min" . ($menit > 1 ? "s" : "") . " ago";
				} elseif ($selisih_detik < 86400) {
					$jam = floor($selisih_detik / 3600);
					$teks_waktu = $jam . " hour" . ($jam > 1 ? "s" : "") . " ago";
				} elseif ($selisih_detik < 2592000) {
					$hari = floor($selisih_detik / 86400);
					$teks_waktu = $hari . " day" . ($hari > 1 ? "s" : "") . " ago";
				} elseif ($selisih_detik < 31536000) {
					$bulan = floor($selisih_detik / 2592000);
					$teks_waktu = $bulan . " month" . ($bulan > 1 ? "s" : "") . " ago";
				} else {
					$tahun = floor($selisih_detik / 31536000);
					$teks_waktu = $tahun . " year" . ($tahun > 1 ? "s" : "") . " ago";
				}

				// $tanggal = date("d-m-Y", strtotime($row['timestamp']));
				?>
        <div class="border rounded container col-sm-6">
		<?php

			$sql = "SELECT * FROM komentar";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
                $timestamp_unix = strtotime($row['timestamp']);

				$selisih_detik = $waktu_sekarang - $timestamp_unix;
                if ($selisih_detik < 60) {
					$teks_waktu = $selisih_detik . " sec" . ($selisih_detik > 1 ? "s" : "") . " ago";
				} elseif ($selisih_detik < 3600) {
					$menit = floor($selisih_detik / 60);
					$teks_waktu = $menit . " min" . ($menit > 1 ? "s" : "") . " ago";
				} elseif ($selisih_detik < 86400) {
					$jam = floor($selisih_detik / 3600);
					$teks_waktu = $jam . " hour" . ($jam > 1 ? "s" : "") . " ago";
				} elseif ($selisih_detik < 2592000) {
					$hari = floor($selisih_detik / 86400);
					$teks_waktu = $hari . " day" . ($hari > 1 ? "s" : "") . " ago";
				} elseif ($selisih_detik < 31536000) {
					$bulan = floor($selisih_detik / 2592000);
					$teks_waktu = $bulan . " month" . ($bulan > 1 ? "s" : "") . " ago";
				} else {
					$tahun = floor($selisih_detik / 31536000);
					$teks_waktu = $tahun . " year" . ($tahun > 1 ? "s" : "") . " ago";
				}
				
		?>
        <div style="text-align: center;">
                <div style="padding: 20px; box-shadow: 0 0.5rem 1rem rgb(0, 0, 0, .1); margin-bottom: 10px;">

                    <h3 id="name"><?php echo $row['name']; ?></h3>
                    <p id="chat"><?php echo $row['message']; ?></p>
                    <p><?php echo date("d-m-Y", strtotime($row['timestamp'])); ?> <?php echo $teks_waktu ?></p>
                </div>
        </div>
	    <?php } } ?>
  <?php }}?>

  <script>
		//PESAN
		var sensor = ["bot", "cuki", "anjing", "jelek", "kemem", "bangsat", "kontol", "peler", "pler", "meki", "memek", "ngentot", "babi", "ayam", "jenglot", "kimak"]
		function replaceTextInElements(elements) {
      elements.forEach(function (element) {
        console.log(element)
				var originalText = element.textContent;


				var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function (match) {

					return '*'.repeat(match.length);
				});


				element.textContent = newText;
			});
		}
		var messageElements = document.querySelectorAll('p#chat');
		replaceTextInElements(messageElements);

		//NAMA
		var sensor = ["anjing", "jelek", "kemem", "bangsat", "kontol", "peler", "pler", "memek", "ngentot", "babi", "ayam", "jenglot"]
		function replaceTextInElements(elements) {
			elements.forEach(function (element) {

				var originalText = element.textContent;


				var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function (match) {

					return '*'.repeat(match.length);
				});


				element.textContent = newText;
			});
		}


		var messageElements = document.querySelectorAll('h3#name');


		replaceTextInElements(messageElements);
        </script>
        </section>
<!--footer section starts-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#about">about</a>
            <a href="#products">products</a>
            <a href="#contact">contact us</a>
            <a href="feedback.php">feedback</a>
        </div>
        <div class="box">
            <h3>Locations</h3>
            <a href="https://maps.app.goo.gl/Ac8Q3iJKpmtUqxq17">Jakarta</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="https://web.facebook.com/people/La-Madame-Florist/100044608771526/"> facebook : La Madame Florist </a>
            <a href="https://www.instagram.com/madameflorist/"> instagram : madameflorist </a>
          <img src="/images/payment.png" alt="">
       
        </div>
    </div>
    <div class="credit">
        <small>&copy;Created by <span> La MADAME Florist</span> 2023 - Sheryl Calista. All Rights Reserved.</small> 
    </div>
</section>
<script src="script.js"></script>
<!--footer section ends-->

</body>
</html>