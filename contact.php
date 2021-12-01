<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>समाजवादी बुलेटिन - समाजवादी पार्टी, बिजनौर</title>
<?php include 'header.php'; 
  $assets='assets/img/downloads/';
?>
<main id="main">
    <section id="" class="section-bg">
      <div class="container-fluid contact">

        <div class="section-title">
            <h2>संपर्क</h2>
        </div>

        <div class="row justify-content-center">
<div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="name">आपका नाम</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label for="email">आपका ईमेल</label>
                      <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="subject">विषय</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <label for="message">संदेश</label>
                    <textarea class="form-control" name="message" rows="8" required></textarea>
                  </div>
                  
                  <div class="text-center pt-3"><button type="submit">संदेश भेजें</button></div>
                </form>
              </div>
              </div>

</div>
</section>
</main>
<?php include('footer.php') ?>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>