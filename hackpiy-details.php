<!DOCTYPE html>
<html lang="en">

  <?php include 'includes/head.php'; ?>


<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->

    <?php include 'includes/header.php' ?>

  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfoio Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Portfoio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/hackpiy2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/hackpiy3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-9.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Web App</li>
                <li><strong>Client</strong>: Hackpiy Blockchain solution</li>
                <li><strong>Project date</strong>: April 2021</li>
                <li><strong>Project URL</strong>: <a href="https://hackpiy.com/">Hackpiy</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Hackpiy details</h2>
              <p>
              HackPiy Blockchain Solutions is a startup based in Enugu Nigeria, we are focused on developing software products , leveraging on blockchain technologies to solve problems within our environment.
              </p>
              <small></small>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'includes/footer.php' ?>
  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php include 'includes/script.php' ?>

</body>

</html>