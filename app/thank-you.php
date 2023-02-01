<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>ChangaRoot :: Thank You</title>

</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">

    <?php include 'inc/_header.php';?>

    <main>

      <div class="section">
        <!-- decor -->
        <div class="sec-decor d-none d-xl-block" style="right: 15px; top: 50px">
          <picture>
            <source type="image/svg+xml" media="(min-width:1200px)" srcset="img/decor-4.svg">
            <img src="" alt="" loading="lazy">
          </picture>
        </div>

        <div class="container">
          <div class="th-wrap">
            <div class="th-inner">
              <h1 class="title h2">Great Thank You</h1>
              <div class="th-message">
                Your order is confirmed. All details will be sent to your email: <b>testmail@gmail.com</b>
              </div>
              <a class="btn btn-primary" href="index.php">
                <i>
                  <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 5.53325L13.7665 5.53325M13.7665 5.53325L9.2665 1.33325M13.7665 5.53325L9.26651 9.73325" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </i>
                <b>Back to the main page</b>
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