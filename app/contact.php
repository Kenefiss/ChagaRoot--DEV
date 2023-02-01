<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>ChangaRoot :: Contact</title>

</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">

    <?php include 'inc/_header.php';?>

    <main>
      <!-- Contact -->
      <div class="section">
        <div class="spacer-sm"></div>
        <!-- decor -->
        <div class="sec-decor d-none d-xl-block" style="right: 15px; top: 50px">
          <picture>
            <source type="image/svg+xml" media="(min-width:1200px)" srcset="img/decor-4.svg">
            <img src="" alt="" loading="lazy">
          </picture>
        </div>

        <div class="container">
          <!-- title -->
          <h1 class="h2 title title-page">
            Contact Us
          </h1>

          <!-- Contact items -->
          <div class="row ct-items-row">
            <div class="col-lg-3 col-sm-6">
              <div class="contact-item">
                <div class="contact-item-title">
                  <img src="img/icons/icon-pin.svg" alt="" loading="lazy">
                  Address Restaurant
                </div>
                <div class="contact-item-info">
                  <div>
                    3318 E Flamingo Rd suite d, Las Vegas, NV 89121
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="contact-item">
                <div class="contact-item-title">
                  <img src="img/icons/icon-mail.svg" alt="" loading="lazy">
                  Mail Address
                </div>
                <div class="contact-item-info">
                  <a href="mailto:chagaroot@gmail.com">
                    Chagaroot@gmail.com
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="contact-item">
                <div class="contact-item-title">
                  <img src="img/icons/icon-phone.svg" alt="" loading="lazy">
                  Phone
                </div>
                <div class="contact-item-info">
                  <a href="tel:+17029923453">
                    +1 702-992-3453
                  </a>
                  <a href="tel:+14024594534">
                    +1 402-459-4534
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="contact-block" data-map-json="map.json">
            <div class="row justify-content-between">
              <div class="col-xl-6 order-1 order-xl-0">
                <div class="ct-block">
                  <div class="title h3">Write us</div>
                  <div class="text">
                    The members of our Team are ready to support you on your health and wellness journey, so please don't hesitate to reach out. We'll do our best to get back to you as quickly as possible.
                  </div>
                  <form class="ct-block-form">
                    <div class="form-block">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="text" required>
                            <div class="input-placeholder">Name*</div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="tel" required>
                            <div class="input-placeholder">Phone Number*</div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="email" required>
                            <div class="input-placeholder">Email*</div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="text" required>
                            <div class="input-placeholder">Zipcode*</div>
                          </div>
                        </div>
                      </div>

                      <div class="input-field-wrapper">
                        <select class="SelectBox" name="question" placeholder="*">
                          <option value="1">Question 1</option>
                          <option value="2">Question 2</option>
                          <option value="3">Question 3</option>
                          <option value="4">Question 4</option>
                          <option value="5">Question 5</option>
                          <option value="6">Question 6</option>
                        </select>
                        <div class="input-placeholder">Please select question type below</div>
                      </div>

                      <div class="ch-box-wrap">
                        <div class="title h5">
                          Do you need to cancel or make changes to an exiting order&
                        </div>
                        <label class="ch-box-entry">
                          <input type="radio" name="changes order">
                          <span>Yes</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="changes order">
                          <span>No</span>
                        </label>
                      </div>


                      <div class="input-field-wrapper">
                        <textarea class="input"></textarea>
                        <div class="input-placeholder">Your message</div>
                      </div>


                      <button class="btn btn-primary">
                        <i>
                          <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.1665 5.53325L13.7665 5.53325M13.7665 5.53325L9.2665 1.33325M13.7665 5.53325L9.26651 9.73325" stroke='white' stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </i>
                        <b>Submit</b>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-xl-5 ">
                <div class="ct-map">
                  <div class="map" data-xs-zoom="" data-zoom=""></div>
                </div>
              </div>
            </div>
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
  <?php include 'inc/_map.php';?>
</body>

</html>