<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>ChangaRoot :: Archetype</title>

</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">

    <?php include 'inc/_header.php';?>

    <main>
      <!-- Archetype -->
      <div class="section">
        <div class="spacer-sm"></div>
        <!-- decor -->
        <div class="sec-decor d-none d-xl-block" style="right: 50px; top: 50px">
          <picture>
            <source type="image/svg+xml" media="(min-width:1200px)" srcset="img/decor-2.svg">
            <img src="" alt="" loading="lazy">
          </picture>
        </div>
        <div class="sec-decor d-none d-xl-block" style="left: 50px; bottom: 40%">
          <picture>
            <source type="image/svg+xml" media="(min-width:1200px)" srcset="img/decor-3.svg">
            <img src="" alt="" loading="lazy">
          </picture>
        </div>

        <div class="container">
          <div class="arch-th-wrap">
            <!-- title -->
            <h1 class="h2 title title-margin text-center">
              Congratulation
            </h1>
            <div class="text text-center">
              Thank you for filling out the questionnaire, your archetype is Alchemist. The best cleaning program for you is:
            </div>
            <div class="program-item">
              <div class="program-img">
                <img src="img/program-img-2.svg" alt="" loading="lazy">
              </div>
              <div class="h4 title">
                The Alchemist Cleanse
              </div>
              <div class="text">
                Motivated to manifest new visions of themselves and change their own DNA.
              </div>
              <a class="btn btn-primary" href="program-detail.php">
                <i>
                  <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 5.53325L13.7665 5.53325M13.7665 5.53325L9.2665 1.33325M13.7665 5.53325L9.26651 9.73325" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </i>
                <b>Read about program</b>
              </a>
            </div>

            <a class="btn-link" href="index.php">Back to the main page</a>
          </div>
        </div>
        <div class="spacer-lg"></div>
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