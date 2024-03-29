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
                  <img src="assets/img/portfolio/bestschools.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/bestschools1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/bestschool2.png" alt="">
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
                <li><strong>Client</strong>: Mr Jose</li>
                <li><strong>Project date</strong>: january, 2023</li>
                <li><strong>Project URL</strong>: <a href="https://www.bestschoolpage.com.ng/">bestschoolpages.com.ng</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>bestschool details</h2>
              <p>
              bestschoolpages.com.ng  is an Intensive school management system that covers all the affairs of the various school registered under it . it covers the following affairs :
              <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Payment:</strong> <span>School Fees and other tuition</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Principal Remarks:</strong> <span>Principal Remarks on Result and Teachers etc</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Staffs Different dashboard:</strong> <span>every staff has an assigned role and can only access information according to his or her role. etc</span></li>
                </ul>
              </p>
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