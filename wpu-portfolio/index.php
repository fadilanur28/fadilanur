<?php
function get_Curl($url)

{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$result = get_Curl("https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&key=AIzaSyCLcLYkC1GEUJ2wi1Gxwb3daeeCKCJXLTU&id=UCGibfQ0sex4rfXsaAGv-u3w");

$youtubeProfilePic = $result['items'][0]['snippet'] ['thumbnails']['default']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

//latest video
$urlLatestVideo = "https://www.googleapis.com/youtube/v3/search?key=AIzaSyCLcLYkC1GEUJ2wi1Gxwb3daeeCKCJXLTU&channelId=UCGibfQ0sex4rfXsaAGv-u3w&maxResult=1&order=date&part=snippet";
$result = get_Curl($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];

//instagram API
$clientID = "29661881353458438";
$accessToken = "IGAATXQFJGCO9BZAE1IOWp0SmFLYWR6andpSmNMSk1OOW1WRmdxOGxVR2g4ZA2JGR2M0U3R0YXZA3eENVUDM3ZATZASYWV4WXY5M09VMTkxLUhKejFJcjdYeHJxR211X2xvSzVnUlNHVnZAXUlEwOUhhQkhXZAjM3ZAHRaczVCOFRybHNJQQZDZD";

$result2 = get_Curl("https://graph.instagram.com/v22.0/me?fields=username,profile_picture_url,followers_count&access_token=IGAATXQFJGCO9BZAE1IOWp0SmFLYWR6andpSmNMSk1OOW1WRmdxOGxVR2g4ZA2JGR2M0U3R0YXZA3eENVUDM3ZATZASYWV4WXY5M09VMTkxLUhKejFJcjdYeHJxR211X2xvSzVnUlNHVnZAXUlEwOUhhQkhXZAjM3ZAHRaczVCOFRybHNJQQZDZD");

$usernameIG = $result2['username'];
$profilePictureIG = $result2['profile_picture_url'];
$followersIG = $result2['followers_count'];

//media IG
$resultGambar1 = get_Curl("https://graph.instagram.com/v22.0/18084154003674923?fields=media_url&access_token=IGAATXQFJGCO9BZAE1IOWp0SmFLYWR6andpSmNMSk1OOW1WRmdxOGxVR2g4ZA2JGR2M0U3R0YXZA3eENVUDM3ZATZASYWV4WXY5M09VMTkxLUhKejFJcjdYeHJxR211X2xvSzVnUlNHVnZAXUlEwOUhhQkhXZAjM3ZAHRaczVCOFRybHNJQQZDZD");
$resultGambar2 = get_Curl("https://graph.instagram.com/v22.0/17879225034334889?fields=media_url&access_token=IGAATXQFJGCO9BZAE1IOWp0SmFLYWR6andpSmNMSk1OOW1WRmdxOGxVR2g4ZA2JGR2M0U3R0YXZA3eENVUDM3ZATZASYWV4WXY5M09VMTkxLUhKejFJcjdYeHJxR211X2xvSzVnUlNHVnZAXUlEwOUhhQkhXZAjM3ZAHRaczVCOFRybHNJQQZDZD");
$resultGambar3 = get_Curl("https://graph.instagram.com/v22.0/18312227170232436?fields=media_url&access_token=IGAATXQFJGCO9BZAE1IOWp0SmFLYWR6andpSmNMSk1OOW1WRmdxOGxVR2g4ZA2JGR2M0U3R0YXZA3eENVUDM3ZATZASYWV4WXY5M09VMTkxLUhKejFJcjdYeHJxR211X2xvSzVnUlNHVnZAXUlEwOUhhQkhXZAjM3ZAHRaczVCOFRybHNJQQZDZD");
$resultGambar4 = get_Curl("https://graph.instagram.com/v22.0/18037824320319791?fields=media_url&access_token=IGAATXQFJGCO9BZAE1IOWp0SmFLYWR6andpSmNMSk1OOW1WRmdxOGxVR2g4ZA2JGR2M0U3R0YXZA3eENVUDM3ZATZASYWV4WXY5M09VMTkxLUhKejFJcjdYeHJxR211X2xvSzVnUlNHVnZAXUlEwOUhhQkhXZAjM3ZAHRaczVCOFRybHNJQQZDZD");
$resultGambar5 = get_Curl("https://graph.instagram.com/v22.0/18024072284498589?fields=media_url&access_token=IGAATXQFJGCO9BZAE1IOWp0SmFLYWR6andpSmNMSk1OOW1WRmdxOGxVR2g4ZA2JGR2M0U3R0YXZA3eENVUDM3ZATZASYWV4WXY5M09VMTkxLUhKejFJcjdYeHJxR211X2xvSzVnUlNHVnZAXUlEwOUhhQkhXZAjM3ZAHRaczVCOFRybHNJQQZDZD");

$gambar1 = $resultGambar1['media_url'];
$gambar2 = $resultGambar2['media_url'];
$gambar3 = $resultGambar3['media_url'];
$gambar4 = $resultGambar4['media_url'];
$gambar5 = $resultGambar5['media_url'];


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>My Port folio</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">Fadlinur</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="img/fotoprofilnur.png" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Fadlinur</h1>
         <h3 class="lead">Software Developer | Data Analysis | Reading</h3>
        </div>
      </div>
    </div>


    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <p>Saya adalah Fadlinur, seorang Software Developer yang memiliki ketertarikan mendalam pada Data Analysis dan dunia membaca. Bagi saya, dunia pemrograman adalah ruang ekspresi antara logika dan kreativitas, tempat di mana ide-ide bisa diubah menjadi solusi nyata yang bermanfaat. Saya senang membangun aplikasi yang tidak hanya berfungsi dengan baik, tetapi juga memberikan pengalaman pengguna yang menyenangkan dan efisien. Minat saya pada analisis data memperluas perspektif saya dalam melihat pola, tren, dan informasi tersembunyi dalam angka-angka. Saya percaya bahwa setiap data memiliki cerita, dan tugas saya adalah menemukan serta menyampaikan cerita itu dengan cara yang berdampak.</p>
          </div>
          <div class="col-md-5">
            <p>Di luar dunia teknologi, saya adalah pembaca yang aktif dan haus akan pengetahuan. Buku-buku menjadi jendela saya untuk memahami dunia, mulai dari topik pengembangan diri, teknologi, psikologi, hingga fiksi ilmiah. Saya juga senang mengeksplorasi hal-hal baru, belajar secara mandiri, dan mencoba berbagai alat serta framework modern dalam dunia pengembangan perangkat lunak. Saya percaya bahwa pertumbuhan yang konsisten lebih berharga daripada kesempurnaan yang sesaat. Bagi saya, menjadi seorang developer bukan hanya tentang menulis kode, melainkan tentang memahami untuk siapa solusi itu dibuat dan bagaimana teknologi bisa memberikan dampak positif bagi kehidupan.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Youtube & IG -->
     <section class="social bg-light" id="social">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row">
              <div class="col md-4">
                <img src="<?= $youtubeProfilePic; ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $channelName; ?></h5>
                <p><?= $subscriber; ?> Subscriber.</p>
               <div class="g-ytsubscribe" data-channelid="UCGibfQ0sex4rfXsaAGv-u3w" data-layout="default" data-count="default"></div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId; ?>" allowfullscreen></iframe>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col md-4">
                <img src="<?= $profilePictureIG; ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $usernameIG ?></h5>
                <p><?= $followersIG ?> Followers.</p>
              </div>
            </div>

            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="ig-thumbnail">
                  <img src="<?= $gambar1; ?>">
                </div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="ig-thumbnail">
                  <img src="<?= $gambar2; ?>">
                </div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="ig-thumbnail">
                  <img src="<?= $gambar3; ?>">
                </div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="ig-thumbnail">
                  <img src="<?= $gambar4; ?>">
                </div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="ig-thumbnail">
                  <img src="<?= $gambar5; ?>">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </section>

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/foto 1.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Frontend Web App with Responsive Design
Sebuah proyek web dengan desain responsif menggunakan HTML, CSS, dan JavaScript. Fokus pada user experience yang optimal di semua perangkat.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/foto 2.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Data Visualization Dashboard
Dashboard interaktif menggunakan Chart.js dan API publik untuk menyajikan data statistik secara real-time.

</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/foto 3.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Financial Analysis Tool
Aplikasi sederhana untuk menganalisis tren pasar saham menggunakan Python dan Pandas, dengan output visual menggunakan Matplotlib.</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/foto 4.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Code Editor Clone (Python Project)
Mini project clone dari code editor sederhana dengan fitur syntax highlighting dan auto-save.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/foto 5.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">DevOps Monitoring Interface
Tampilan monitoring server yang dibangun menggunakan React dan mengakses data real-time dari Grafana/Prometheus API.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/foto 6.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Simple CRUD App (Fullstack)
Aplikasi CRUD menggunakan MERN stack (MongoDB, Express, React, Node.js), dilengkapi autentikasi dan dashboard admin.

</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Office</li>
              <li class="list-group-item">Jl. Setiabudhi No. 193, Bandung</li>
              <li class="list-group-item">West Java, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p>Copyright &copy; 2018.</p>
          </div>
        </div>
      </div>
    </footer>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>