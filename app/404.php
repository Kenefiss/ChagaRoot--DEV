<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>ChangaRoot :: 404</title>

</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">

    <?php include 'inc/_header.php';?>

    <main>

      <!-- 404 -->
      <div class="section">

        <div class="sec-decor d-none d-xl-block" style="right: 15px; top: 50px">
          <picture>
            <source type="image/svg+xml" media="(min-width:1200px)" srcset="img/decor-4.svg">
            <img src="" alt="" loading="lazy">
          </picture>
        </div>

        <div class="container">
          <div class="page-404">
            <div class="page-404-inner">
              <div class="page-404-img">
                <img src="img/404.svg" alt="" loading="lazy">
              </div>
              <h1 class="title h3">
                Page not found
              </h1>
              <div class="text">
                We’re sorry, the page you requested could not be found. Please go back to the home page
              </div>
              <a class="btn btn-primary" href="index.php">
                <i>
                  <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 5.53325L13.7665 5.53325M13.7665 5.53325L9.2665 1.33325M13.7665 5.53325L9.26651 9.73325" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </i>
                <b>Go to home page</b>
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <!-- Popups -->
  <div class="popup-wrapper" id="popups"></div>
  <?php include 'inc/_bottom.php';?>
  <?php include 'inc/_cart.php';?>
  <?php include 'inc/_inputs.php';?>
</body>

</html>