<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>ChangaRoot :: Program detail Config</title>

</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">

    <?php include 'inc/_header.php';?>

    <main>
      <!-- breadcrumbs -->
      <div class="breadcrumbs-wrapper">
        <div class="container">
          <ul class="breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
              <a href="index.php" itemprop="item">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
              <a href="programs.php" itemprop="item">
                <span itemprop="name">Program</span>
              </a>
              <meta itemprop="position" content="2">
            </li>
            <li class="active" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
              <span itemprop="name">The Hero Cleanse</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <!-- Program detail section -->
      <div class="section">
        <!-- decor -->
        <div class="sec-decor d-none d-xl-block" style="right: 15px; top: 5px">
          <picture>
            <source type="image/svg+xml" media="(min-width:1200px)" srcset="img/decor-3.svg">
            <img src="" alt="" loading="lazy">
          </picture>
        </div>

        <div class="container">
          <!-- Program detail -->
          <div class="prg__detail">
            <div class="row">

              <!-- left -->
              <div class="col-xxl-6 col-lg-5 col-md-6">
                <div class="swiper-thumbs prd__detail--slider">
                  <!-- top slider -->
                  <div class="swiper-entry swiper-thumbs-top">
                    <div class="swiper-container" data-options='{"watchSlidesVisibility": true, "watchSlidesProgress": true, "effect": "fade", "fadeEffect": {"crossFade": true}}'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="prd__detail--img">
                            <img src="img/prg-detail-11.jpg" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="prd__detail--img">
                            <img src="img/prg-detail-2.jpg" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="prd__detail--img">
                            <img src="img/prg-detail-3.jpg" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="prd__detail--img">
                            <img src="img/prg-detail-4.jpg" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="prd__detail--img">
                            <img src="img/prg-detail-5.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- bottom slider -->
                  <div class="swiper-entry swiper-thumbs-bottom">
                    <div class="swiper-container" data-options='{"slidesPerView": 4, "spaceBetween": 10, "watchSlidesVisibility": true, "watchSlidesProgress": true, "breakpoints":{"768":{"spaceBetween": 10, "slidesPerView": 4}, "1200":{"spaceBetween": 10, "slidesPerView": 5}}}'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="prd__detail--thumbs">
                            <img src="img/prg-detail-11.jpg" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="prd__detail--thumbs">
                            <img src="img/prg-detail-small-2.jpg" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="prd__detail--thumbs">
                            <img src="img/prg-detail-small-3.jpg" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="prd__detail--thumbs">
                            <img src="img/prg-detail-small-4.jpg" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="prd__detail--thumbs">
                            <img src="img/prg-detail-small-5.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <!-- right -->
              <div class="col-xl-6 col-lg-7 col-md-6">
                <div class="prg__detail-info">
                  <h1 class="prg__detail--title title h3">
                    The Thrive Program
                  </h1>

                  <div class="prg__detail--config">
                    <div class="form-block">
                      <div class="title h5">Enter zip code to view options in your area</div>
                      <div class="input-field-wrapper">
                        <input class="input" type="text" required>
                        <div class="input-placeholder">Zip Code</div>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h5">Your meals</div>
                      <div class="ch-box-wrap">
                        <label class="ch-box-entry">
                          <input type="radio" name="meals">
                          <span>Breakfast</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="meals">
                          <span>Lunch</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="meals">
                          <span>Dinner</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h5">Program length</div>
                      <div class="ch-box-wrap">
                        <label class="ch-box-entry">
                          <input type="radio" name="length">
                          <span>2 Days (Thu - Fri)</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="length">
                          <span>3 Days (Mon - Wed)</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="length">
                          <span>5 Days (Mon - Fri)</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h5">Program schedule</div>
                      <div class="ch-box-wrap">
                        <label class="ch-box-entry">
                          <input type="radio" name="schedule">
                          <span>Weekly Subscription</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="schedule">
                          <span>One-time Program</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h5">Supercharge your results (+$39/week)</div>
                      <div class="ch-box-wrap">
                        <label class="ch-box-entry">
                          <input type="radio" name="supercharge">
                          <span>Probiotic Coconut Kefir (3x)</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="supercharge">
                          <span>Signature Green Smoothie (3x)</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="supercharge">
                          <span>None</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h5">Start date</div>
                      <div class="input-field-wrapper">
                        <select class="SelectBox" name="question" placeholder="*">
                          <option value="1">Activity 1</option>
                          <option value="2">Activity 2</option>
                          <option value="3">Activity 3</option>
                          <option value="4">Activity 4</option>
                          <option value="5">Activity 5</option>
                          <option value="6">Activity 6</option>
                        </select>
                        <div class="input-placeholder">Chose yours</div>
                      </div>
                      <div class="text">
                        You will receive deliveries: Saturday 8AM-8PM per week
                      </div>
                    </div>
                  </div>

                  <div class="prg__detail--spec text">
                    <p><strong>Categories: </strong>Best Sellers, Cleanses, Organic </p>
                    <p><strong>Tags: </strong>chaga, cleanse, juice, mushroom, organic, smoothie</p>
                    <p><strong>SKU: </strong>N/A</p>
                  </div>
                  <div class="prg__detail--controls">
                    <div class="prg-price">
                      <div class="price" id="prg-single-price">$ <b>232.20</b>/week</div>
                    </div>
                    <div class="thumb-input-number">
                      <button type="button" class="decr">-</button>
                      <input value="1" readonly="" tabindex="-1">
                      <button type="button" class="incr">+</button>
                    </div>
                    <div class="btn btn-primary">
                      <i>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.95287 12.3945L1.49006 12.5838L1.49006 12.5838L1.95287 12.3945ZM1.64194 7.30318L1.15946 7.17199L1.15946 7.17199L1.64194 7.30318ZM14.3374 7.30318L14.8199 7.17199L14.3374 7.30318ZM14.0344 12.3945L13.5716 12.2053L13.5716 12.2053L14.0344 12.3945ZM10.351 15.2653L10.2741 14.7712L10.351 15.2653ZM5.66859 15.2717L5.74547 14.7777L5.66859 15.2717ZM4.72473 4.48785L4.8239 4.97792L4.8239 4.97792L4.72473 4.48785ZM11.254 4.48785L11.1549 4.97792L11.1549 4.97792L11.254 4.48785ZM10.002 4.89098C9.89095 5.14379 10.0058 5.43879 10.2586 5.54988C10.5115 5.66098 10.8065 5.54609 10.9176 5.29328L10.002 4.89098ZM5.06121 5.29328C5.17231 5.54609 5.46731 5.66098 5.72012 5.54988C5.97293 5.43879 6.08781 5.14379 5.97672 4.89098L5.06121 5.29328ZM7.35849 0.561854L7.44261 1.05473L7.44261 1.05473L7.35849 0.561854ZM8.62027 0.561849L8.53615 1.05472L8.53615 1.05472L8.62027 0.561849ZM10.8438 2.62365L11.3322 2.51635L11.3322 2.51635L10.8438 2.62365ZM5.13493 2.62365L5.62328 2.73095L5.62328 2.73095L5.13493 2.62365ZM2.41568 12.2053C1.8491 10.8196 1.73274 8.87488 2.12443 7.43437L1.15946 7.17199C0.710352 8.82368 0.839907 10.9937 1.49006 12.5838L2.41568 12.2053ZM13.8549 7.43438C14.247 8.87639 14.1376 10.821 13.5716 12.2053L14.4972 12.5838C15.1479 10.9923 15.2686 8.82218 14.8199 7.17199L13.8549 7.43438ZM10.2741 14.7712C9.74993 14.8528 8.89031 14.8981 8.00887 14.8997C7.12707 14.9013 6.26843 14.8591 5.74547 14.7777L5.5917 15.7658C6.19271 15.8593 7.11328 15.9013 8.01069 15.8997C8.90847 15.898 9.82806 15.8526 10.4279 15.7593L10.2741 14.7712ZM4.8239 4.97792C6.91103 4.55558 9.06774 4.55558 11.1549 4.97792L11.3532 3.99779C9.13518 3.54896 6.84359 3.54896 4.62556 3.99779L4.8239 4.97792ZM5.74547 14.7777C4.22544 14.5411 2.96858 13.5575 2.41568 12.2053L1.49006 12.5838C2.18087 14.2733 3.73926 15.4775 5.5917 15.7658L5.74547 14.7777ZM10.4279 15.7593C12.2838 15.4705 13.8077 14.2701 14.4972 12.5838L13.5716 12.2053C13.0174 13.5607 11.7906 14.5352 10.2741 14.7712L10.4279 15.7593ZM11.1549 4.97792C12.4821 5.2465 13.5207 6.20515 13.8549 7.43438L14.8199 7.17199C14.3813 5.55906 13.0318 4.33746 11.3532 3.99779L11.1549 4.97792ZM4.62556 3.99779C2.94688 4.33748 1.598 5.55916 1.15946 7.17199L2.12443 7.43437C2.45869 6.20504 3.49674 5.24648 4.8239 4.97792L4.62556 3.99779ZM10.3555 2.73095C10.411 2.98362 10.3986 3.3626 10.3239 3.78608C10.2508 4.20091 10.1273 4.60594 10.002 4.89098L10.9176 5.29328C11.0789 4.92616 11.2235 4.44307 11.3087 3.95977C11.3924 3.48511 11.4288 2.95593 11.3322 2.51635L10.3555 2.73095ZM4.64658 2.51635C4.55 2.95593 4.58633 3.48511 4.67004 3.95977C4.75528 4.44307 4.89988 4.92616 5.06121 5.29328L5.97672 4.89098C5.85146 4.60594 5.728 4.20091 5.65484 3.78608C5.58016 3.3626 5.56776 2.98363 5.62328 2.73095L4.64658 2.51635ZM7.44261 1.05473C7.73949 1.00406 8.23928 1.00405 8.53615 1.05472L8.70439 0.0689759C8.29616 -0.000697856 7.68259 -0.000691474 7.27437 0.0689811L7.44261 1.05473ZM11.3322 2.51635C11.054 1.2503 10.0054 0.291028 8.70439 0.0689759L8.53615 1.05472C9.45844 1.21213 10.1695 1.88448 10.3555 2.73095L11.3322 2.51635ZM5.62328 2.73095C5.80927 1.88449 6.52032 1.21214 7.44261 1.05473L7.27437 0.0689811C5.97333 0.291033 4.92476 1.2503 4.64658 2.51635L5.62328 2.73095Z" fill="white"></path>
                        </svg>
                      </i>
                      <b>Add to cart</b>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="spacer-md"></div>
      </div>

      <!-- Program Tabs -->
      <div class="section">
        <div class="container">
          <div class="prg-tabs">
            <div class="prg-tabs-nav">
              <div class="is-active">Description</div>
              <div>Reviews (<b>0</b>)</div>
            </div>
            <div class="prg-tabs-inner">
              <!-- 1 -->
              <div class="prg-tab">
                <div class="h3 title title-margin">
                  The Warrior Cleanse consists of three phases:
                </div>

                <div class="phase-wrap type2">
                  <div class="phase-item">
                    <div class="phase-title">
                      <span>Phase 1</span><b>Liquid Elixir Cleanse</b>
                    </div>
                    <div class="phase-content">
                      <div class="text">Duration: <b>2 day</b></div>
                      <div class="text">
                        <p>
                          Approximately 90% Cleanse – 10% Nourish with a very high state of autophagy.
                          Consists of 6 16 oz bottles of mushrooms & botanical-based elixirs, tonic and seltzers, 2 mushroom & botanical shoots, and fiber balls.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="phase-item">
                    <div class="phase-title">
                      <span>Phase 2</span><b>Cleanse with Food</b>
                    </div>
                    <div class="phase-content">
                      <div class="text">Duration: <b>9 days</b></div>
                      <div class="text">
                        <p>
                          Approximately 70% Cleanse – 30% Nourish with a strong state of autophagy.
                          Each day consists of juices, detox smoothies, and soups. Delicious plant-based raw foods entrées.
                          For examples of the plates you will be eating, see our Cleanse with Food menu.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="spacer-xs"></div>
                <div class="btn btn-primary open-popup" data-rel="8">
                  <i>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12.125 11.75H3.875M12.125 8.75H3.875M1.25 5.75H14.75M4.85 1.25H11.15C12.4101 1.25 13.0402 1.25 13.5215 1.49524C13.9448 1.71095 14.289 2.05516 14.5048 2.47852C14.75 2.95982 14.75 3.58988 14.75 4.85V11.15C14.75 12.4101 14.75 13.0402 14.5048 13.5215C14.289 13.9448 13.9448 14.289 13.5215 14.5048C13.0402 14.75 12.4101 14.75 11.15 14.75H4.85C3.58988 14.75 2.95982 14.75 2.47852 14.5048C2.05516 14.289 1.71095 13.9448 1.49524 13.5215C1.25 13.0402 1.25 12.4101 1.25 11.15V4.85C1.25 3.58988 1.25 2.95982 1.49524 2.47852C1.71095 2.05516 2.05516 1.71095 2.47852 1.49524C2.95982 1.25 3.58988 1.25 4.85 1.25Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </i>
                  <b>View menu</b>
                </div>
              </div>
              <!-- 2 -->
              <div class="prg-tab">
                <div class="h3 title title-margin">
                  Reviews
                </div>

                <div class="row">
                  <div class="col-lg-auto order-1 order-lg-0">
                    <div class="rw-form">
                      <form>
                        <div class="form-block">
                          <div class="rate-wrap">
                            <span>Your rating</span>
                            <span class="rate-stars">
                              <input type="radio" value="5"><label></label>
                              <input type="radio" value="4"><label></label>
                              <input type="radio" value="3"><label></label>
                              <input type="radio" value="2"><label></label>
                              <input type="radio" value="1"><label></label>
                              <input type="radio" value="0"><label></label>
                            </span>
                          </div>
                          <div class="input-field-wrapper">
                            <input class="input" type="text" required>
                            <div class="input-placeholder">Name*</div>
                          </div>
                          <div class="input-field-wrapper">
                            <input class="input" type="email" required>
                            <div class="input-placeholder">Email*</div>
                          </div>
                          <div class="input-field-wrapper">
                            <textarea class="input" required></textarea>
                            <div class="input-placeholder">Your message*</div>
                          </div>
                          <button class="btn btn-primary">
                            <i>
                              <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.1665 5.53325L13.7665 5.53325M13.7665 5.53325L9.2665 1.33325M13.7665 5.53325L9.26651 9.73325" stroke='white' stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </i>
                            <b>Send</b>
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col">
                    <div class="feedback-list empty">
                      <div class="review-empty">
                        <img src="img/empty-review.svg" alt="">
                        <p>
                          There are no reviews yet.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-lg"></div>
      </div>

      <!-- Related products  * -->
      <div class="section">
        <div class="container">
          <!-- title -->
          <div class="h3 title title-margin">
            Related products
          </div>

          <!-- Program row -->
          <div class="row program-row">
            <div class="col-lg-4 col-md-6">
              <div class="program-item">
                <div class="program-img">
                  <img src="img/program-img-2.svg" alt="" loading="lazy">
                </div>
                <div class="h4 title">
                  The Alchemist Cleanse
                </div>
                <div class="phase-wrap">
                  <div class="phase-item">
                    <div class="phase-title">
                      <span>Phase 1</span><b>Liquid Elixir Cleanse</b>
                    </div>
                    <div class="phase-content">
                      <div class="text">
                        <p>
                          Duration: 3 day Approximately 90% Cleanse – 10% Nourish with a very high state of autophagy. Consists of 6 16 oz bottles of mushrooms & botanical-based elixirs, tonic and seltzers, 2 mushroom & botanical shoots, and fiber balls.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="phase-item">
                    <div class="phase-title">
                      <span>Phase 2</span><b>Cleanse with Food</b>
                    </div>
                    <div class="phase-content">
                      <div class="text">
                        <p>
                          Duration: 3 day Approximately 90% Cleanse – 10% Nourish with a very high state of autophagy. Consists of 6 16 oz bottles of mushrooms & botanical-based elixirs, tonic and seltzers, 2 mushroom & botanical shoots, and fiber balls.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="phase-item">
                    <div class="phase-title">
                      <span>Phase 3</span><b>Thrive Program</b>
                    </div>
                    <div class="phase-content">
                      <div class="text">
                        <p>
                          Duration: 3 day Approximately 90% Cleanse – 10% Nourish with a very high state of autophagy. Consists of 6 16 oz bottles of mushrooms & botanical-based elixirs, tonic and seltzers, 2 mushroom & botanical shoots, and fiber balls.
                        </p>
                      </div>
                    </div>
                  </div>
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
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="program-item">
                <div class="program-img">
                  <img src="img/program-img-3.svg" alt="" loading="lazy">
                </div>
                <div class="h4 title">
                  The Hero Cleanse
                </div>
                <div class="phase-wrap">
                  <div class="phase-item">
                    <div class="phase-title">
                      <span>Phase 1</span><b>Liquid Elixir Cleanse</b>
                    </div>
                    <div class="phase-content">
                      <div class="text">
                        <p>
                          Duration: 3 day Approximately 90% Cleanse – 10% Nourish with a very high state of autophagy. Consists of 6 16 oz bottles of mushrooms & botanical-based elixirs, tonic and seltzers, 2 mushroom & botanical shoots, and fiber balls.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="phase-item">
                    <div class="phase-title">
                      <span>Phase 2</span><b>Cleanse with Food</b>
                    </div>
                    <div class="phase-content">
                      <div class="text">
                        <p>
                          Duration: 3 day Approximately 90% Cleanse – 10% Nourish with a very high state of autophagy. Consists of 6 16 oz bottles of mushrooms & botanical-based elixirs, tonic and seltzers, 2 mushroom & botanical shoots, and fiber balls.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="phase-item">
                    <div class="phase-title">
                      <span>Phase 3</span><b>Thrive Program</b>
                    </div>
                    <div class="phase-content">
                      <div class="text">
                        <p>
                          Duration: 3 day Approximately 90% Cleanse – 10% Nourish with a very high state of autophagy. Consists of 6 16 oz bottles of mushrooms & botanical-based elixirs, tonic and seltzers, 2 mushroom & botanical shoots, and fiber balls.
                        </p>
                      </div>
                    </div>
                  </div>
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
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="program-item">
                <div class="program-img">
                  <img src="img/program-img-4.svg" alt="" loading="lazy">
                </div>
                <div class="h4 title">
                  The Warrior Cleanse
                </div>
                <div class="phase-wrap">
                  <div class="phase-item">
                    <div class="phase-title">
                      <span>Phase 1</span><b>Liquid Elixir Cleanse</b>
                    </div>
                    <div class="phase-content">
                      <div class="text">
                        <p>
                          Duration: 3 day Approximately 90% Cleanse – 10% Nourish with a very high state of autophagy. Consists of 6 16 oz bottles of mushrooms & botanical-based elixirs, tonic and seltzers, 2 mushroom & botanical shoots, and fiber balls.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="phase-item">
                    <div class="phase-title">
                      <span>Phase 2</span><b>Cleanse with Food</b>
                    </div>
                    <div class="phase-content">
                      <div class="text">
                        <p>
                          Duration: 3 day Approximately 90% Cleanse – 10% Nourish with a very high state of autophagy. Consists of 6 16 oz bottles of mushrooms & botanical-based elixirs, tonic and seltzers, 2 mushroom & botanical shoots, and fiber balls.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="phase-item">
                    <div class="phase-title">
                      <span>Phase 3</span><b>Thrive Program</b>
                    </div>
                    <div class="phase-content">
                      <div class="text">
                        <p>
                          Duration: 3 day Approximately 90% Cleanse – 10% Nourish with a very high state of autophagy. Consists of 6 16 oz bottles of mushrooms & botanical-based elixirs, tonic and seltzers, 2 mushroom & botanical shoots, and fiber balls.
                        </p>
                      </div>
                    </div>
                  </div>
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
            </div>
          </div>

          <!-- mobile btn -->
          <div class="d-md-none">
            <div class="spacer-md"></div>
            <a class="btn btn-primary" href="#">
              <i>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.95287 12.3945L1.49006 12.5838L1.49006 12.5838L1.95287 12.3945ZM1.64194 7.30318L1.15946 7.17199L1.15946 7.17199L1.64194 7.30318ZM14.3374 7.30318L14.8199 7.17199L14.3374 7.30318ZM14.0344 12.3945L13.5716 12.2053L13.5716 12.2053L14.0344 12.3945ZM10.351 15.2653L10.2741 14.7712L10.351 15.2653ZM5.66859 15.2717L5.74547 14.7777L5.66859 15.2717ZM4.72473 4.48785L4.8239 4.97792L4.8239 4.97792L4.72473 4.48785ZM11.254 4.48785L11.1549 4.97792L11.1549 4.97792L11.254 4.48785ZM10.002 4.89098C9.89095 5.14379 10.0058 5.43879 10.2586 5.54988C10.5115 5.66098 10.8065 5.54609 10.9176 5.29328L10.002 4.89098ZM5.06121 5.29328C5.17231 5.54609 5.46731 5.66098 5.72012 5.54988C5.97293 5.43879 6.08781 5.14379 5.97672 4.89098L5.06121 5.29328ZM7.35849 0.561854L7.44261 1.05473L7.44261 1.05473L7.35849 0.561854ZM8.62027 0.561849L8.53615 1.05472L8.53615 1.05472L8.62027 0.561849ZM10.8438 2.62365L11.3322 2.51635L11.3322 2.51635L10.8438 2.62365ZM5.13493 2.62365L5.62328 2.73095L5.62328 2.73095L5.13493 2.62365ZM2.41568 12.2053C1.8491 10.8196 1.73274 8.87488 2.12443 7.43437L1.15946 7.17199C0.710352 8.82368 0.839907 10.9937 1.49006 12.5838L2.41568 12.2053ZM13.8549 7.43438C14.247 8.87639 14.1376 10.821 13.5716 12.2053L14.4972 12.5838C15.1479 10.9923 15.2686 8.82218 14.8199 7.17199L13.8549 7.43438ZM10.2741 14.7712C9.74993 14.8528 8.89031 14.8981 8.00887 14.8997C7.12707 14.9013 6.26843 14.8591 5.74547 14.7777L5.5917 15.7658C6.19271 15.8593 7.11328 15.9013 8.01069 15.8997C8.90847 15.898 9.82806 15.8526 10.4279 15.7593L10.2741 14.7712ZM4.8239 4.97792C6.91103 4.55558 9.06774 4.55558 11.1549 4.97792L11.3532 3.99779C9.13518 3.54896 6.84359 3.54896 4.62556 3.99779L4.8239 4.97792ZM5.74547 14.7777C4.22544 14.5411 2.96858 13.5575 2.41568 12.2053L1.49006 12.5838C2.18087 14.2733 3.73926 15.4775 5.5917 15.7658L5.74547 14.7777ZM10.4279 15.7593C12.2838 15.4705 13.8077 14.2701 14.4972 12.5838L13.5716 12.2053C13.0174 13.5607 11.7906 14.5352 10.2741 14.7712L10.4279 15.7593ZM11.1549 4.97792C12.4821 5.2465 13.5207 6.20515 13.8549 7.43438L14.8199 7.17199C14.3813 5.55906 13.0318 4.33746 11.3532 3.99779L11.1549 4.97792ZM4.62556 3.99779C2.94688 4.33748 1.598 5.55916 1.15946 7.17199L2.12443 7.43437C2.45869 6.20504 3.49674 5.24648 4.8239 4.97792L4.62556 3.99779ZM10.3555 2.73095C10.411 2.98362 10.3986 3.3626 10.3239 3.78608C10.2508 4.20091 10.1273 4.60594 10.002 4.89098L10.9176 5.29328C11.0789 4.92616 11.2235 4.44307 11.3087 3.95977C11.3924 3.48511 11.4288 2.95593 11.3322 2.51635L10.3555 2.73095ZM4.64658 2.51635C4.55 2.95593 4.58633 3.48511 4.67004 3.95977C4.75528 4.44307 4.89988 4.92616 5.06121 5.29328L5.97672 4.89098C5.85146 4.60594 5.728 4.20091 5.65484 3.78608C5.58016 3.3626 5.56776 2.98363 5.62328 2.73095L4.64658 2.51635ZM7.44261 1.05473C7.73949 1.00406 8.23928 1.00405 8.53615 1.05472L8.70439 0.0689759C8.29616 -0.000697856 7.68259 -0.000691474 7.27437 0.0689811L7.44261 1.05473ZM11.3322 2.51635C11.054 1.2503 10.0054 0.291028 8.70439 0.0689759L8.53615 1.05472C9.45844 1.21213 10.1695 1.88448 10.3555 2.73095L11.3322 2.51635ZM5.62328 2.73095C5.80927 1.88449 6.52032 1.21214 7.44261 1.05473L7.27437 0.0689811C5.97333 0.291033 4.92476 1.2503 4.64658 2.51635L5.62328 2.73095Z" fill="white" />
                </svg>

              </i>
              <b>View all program</b>
            </a>
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
  <?php include 'inc/_swiper.php';?>
  <?php include 'inc/_inputs.php';?>
</body>

</html>