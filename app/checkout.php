<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>ChangaRoot :: Checkout</title>

</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">

    <?php include 'inc/_header.php';?>

    <main>

      <div class="section checkout-section">
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
            Checkout
          </h1>

          <div class="row justify-content-between">
            <div class="col-lg-6 order-1 order-lg-0">
              <div class="checkout-form">

                <!-- 1 -->
                <div class="form-block">
                  <div class="title h4">1. Contact information</div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="input-field-wrapper">
                        <input class="input" type="text" required>
                        <div class="input-placeholder">First name*</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapper">
                        <input class="input" type="text" required>
                        <div class="input-placeholder">Last name*</div>
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
                  </div>
                </div>

                <!-- 2 -->
                <div class="form-block">
                  <div class="title h4">2. Shipping address</div>
                  <div class="row">
                    <div class="col-12">
                      <div class="input-field-wrapper">
                        <input class="input" type="text">
                        <div class="input-placeholder">Company name</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-field-wrapper">
                        <select class="SelectBox" name="question" placeholder="*">
                          <option value="1">Region 1</option>
                          <option value="2">Region 2</option>
                          <option value="3">Region 3</option>
                          <option value="4">Region 4</option>
                          <option value="5">Region 5</option>
                          <option value="6">Region 6</option>
                        </select>
                        <div class="input-placeholder">Country/region</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapper">
                        <input class="input" type="text">
                        <div class="input-placeholder">House number and street name</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapper">
                        <input class="input" type="text">
                        <div class="input-placeholder">Apartment, suite, unit, etc.</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapper">
                        <input class="input" type="text" required>
                        <div class="input-placeholder">Town*</div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-field-wrapper">
                        <select class="SelectBox" name="question" placeholder="*">
                          <option value="1">State 1</option>
                          <option value="2">State 2</option>
                          <option value="3">State 3</option>
                          <option value="4">State 4</option>
                          <option value="5">State 5</option>
                          <option value="6">State 6</option>
                        </select>
                        <div class="input-placeholder">Country/region</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-field-wrapper">
                        <input class="input" type="text" required>
                        <div class="input-placeholder">ZIP Code*</div>
                      </div>
                    </div>
                  </div>

                  <!-- Ship to a different address -->
                  <div class="toggle-block">
                    <div class="toggle-btn">
                      <i>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 5V11M5 8H11M4.85 14.75H11.15C12.4101 14.75 13.0402 14.75 13.5215 14.5048C13.9448 14.289 14.289 13.9448 14.5048 13.5215C14.75 13.0402 14.75 12.4101 14.75 11.15V4.85C14.75 3.58988 14.75 2.95982 14.5048 2.47852C14.289 2.05516 13.9448 1.71095 13.5215 1.49524C13.0402 1.25 12.4101 1.25 11.15 1.25H4.85C3.58988 1.25 2.95982 1.25 2.47852 1.49524C2.05516 1.71095 1.71095 2.05516 1.49524 2.47852C1.25 2.95982 1.25 3.58988 1.25 4.85V11.15C1.25 12.4101 1.25 13.0402 1.49524 13.5215C1.71095 13.9448 2.05516 14.289 2.47852 14.5048C2.95982 14.75 3.58988 14.75 4.85 14.75Z" stroke="#131E29" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </i>
                      <b>Ship to a different address?</b>
                    </div>

                    <div class="toggle-inner">
                      <!-- 2.1. -->
                      <div class="form-block">
                        <div class="title h4">1. Contact information</div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="input-field-wrapper">
                              <input class="input" type="text" required>
                              <div class="input-placeholder">First name*</div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="input-field-wrapper">
                              <input class="input" type="text" required>
                              <div class="input-placeholder">Last name*</div>
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
                        </div>
                      </div>
                      <!-- 2.2. -->
                      <div class="form-block">
                        <div class="title h4">2. Shipping address</div>
                        <div class="row">
                          <div class="col-12">
                            <div class="input-field-wrapper">
                              <input class="input" type="text">
                              <div class="input-placeholder">Company name</div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="input-field-wrapper">
                              <select class="SelectBox" name="question" placeholder="*">
                                <option value="1">Region 1</option>
                                <option value="2">Region 2</option>
                                <option value="3">Region 3</option>
                                <option value="4">Region 4</option>
                                <option value="5">Region 5</option>
                                <option value="6">Region 6</option>
                              </select>
                              <div class="input-placeholder">Country/region</div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="input-field-wrapper">
                              <input class="input" type="text">
                              <div class="input-placeholder">House number and street name</div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="input-field-wrapper">
                              <input class="input" type="text">
                              <div class="input-placeholder">Apartment, suite, unit, etc.</div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="input-field-wrapper">
                              <input class="input" type="text" required>
                              <div class="input-placeholder">Town*</div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="input-field-wrapper">
                              <select class="SelectBox" name="question" placeholder="*">
                                <option value="1">State 1</option>
                                <option value="2">State 2</option>
                                <option value="3">State 3</option>
                                <option value="4">State 4</option>
                                <option value="5">State 5</option>
                                <option value="6">State 6</option>
                              </select>
                              <div class="input-placeholder">Country/region</div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="input-field-wrapper">
                              <input class="input" type="text" required>
                              <div class="input-placeholder">ZIP Code*</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- toggle block end -->
                </div>

                <!-- 3 -->
                <div class="form-block">
                  <div class="title h4">3. Additional Information</div>
                  <div class="input-field-wrapper">
                    <textarea class="input"></textarea>
                    <div class="input-placeholder">Notes about your order, e.g. specials notes for delivery.</div>
                  </div>
                </div>

                <!-- line -->
                <div class="ch-line"></div>

                <div class="order-wrap">
                  <!-- Coupon -->
                  <div class="coupon-field">
                    <div class="input-field-wrapper">
                      <input class="input" type="text" required>
                      <div class="input-placeholder">Coupon code</div>
                      <div class="input-field-error">
                        Incorrect format entered
                      </div>
                    </div>
                    <div class="coupon-field-btn">Apply coupon</div>
                  </div>

                  <!-- if no discount just add class "d-none" -->
                  <div class="order-discount">Discount: <b>$</b><b id="discount-price">150</b></div>
                  <div class="order-price">Total cost: <b>$</b><b id="total-price">1,132.20</b></div>
                </div>

                <div class="disclaimer">
                  Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.
                </div>

                <div class="ch-box-wrap">
                  <label class="ch-box-entry">
                    <input type="checkbox">
                    <span>
                      I have read and agree to the website <a href="privacy.php">terms and conditions *</a>
                    </span>
                  </label>
                </div>

                <a class="btn btn-primary btn-block main-order-button" href="thank-you.php">
                  <i>
                    <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.1665 5.53325L13.7665 5.53325M13.7665 5.53325L9.2665 1.33325M13.7665 5.53325L9.26651 9.73325" stroke='white' stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </i>
                  <b>Pay for the program</b>
                </a>
              </div>
            </div>

            <div class="col-lg-6 col-xxl-5">
              <div class="checkout-wrap">
                <div class="title h4">Your order</div>
                <div class="checkout_items">
                  <div class="cart_prd js-checkout-product" data-price="1132.20">
                    <a class="cart_prd-img" href="product-detail.php">
                      <picture>
                        <source srcset="img/cart-img-1.webp" type="image/webp">
                        <source srcset="img/cart-img-1.png" type="image/png">
                        <img src="img/cart-img-1.png" alt="" loading="lazy">
                      </picture>
                    </a>
                    <div class="cart_prd-info">
                      <a class="title h6" href="product-detail.php">
                        The Hero Cleanse
                      </a>
                      <div class="cart_prd-price-wrap">
                        <div class="cart_prd-q">1</div>
                        <span>X</span>
                        <div class="cart_prd-price">$ <b>1132.20</b></div>
                      </div>
                      <div class="thumb-input-number">
                        <button type="button" class="decr">-</button>
                        <input value="1" readonly="" tabindex="-1">
                        <button type="button" class="incr">+</button>
                      </div>
                    </div>
                    <div class="btn-delete">
                      <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3333 4.00008V3.33341C11.3333 2.39999 11.3333 1.93328 11.1517 1.57676C10.9919 1.26316 10.7369 1.00819 10.4233 0.848404C10.0668 0.666748 9.60009 0.666748 8.66667 0.666748H7.33333C6.39991 0.666748 5.9332 0.666748 5.57668 0.848404C5.26308 1.00819 5.00811 1.26316 4.84832 1.57676C4.66667 1.93328 4.66667 2.39999 4.66667 3.33341V4.00008M0.5 4.00008H15.5M13.8333 4.00008V13.3334C13.8333 14.7335 13.8333 15.4336 13.5608 15.9684C13.3212 16.4388 12.9387 16.8212 12.4683 17.0609C11.9335 17.3334 11.2335 17.3334 9.83333 17.3334H6.16667C4.76654 17.3334 4.06647 17.3334 3.53169 17.0609C3.06129 16.8212 2.67883 16.4388 2.43915 15.9684C2.16667 15.4336 2.16667 14.7335 2.16667 13.3334V4.00008" stroke="#4A5055" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                  <div class="cart_prd js-checkout-product" data-price="1200">
                    <a class="cart_prd-img" href="product-detail.php">
                      <picture>
                        <source srcset="img/cart-img-2.webp" type="image/webp">
                        <source srcset="img/cart-img-2.png" type="image/png">
                        <img src="img/cart-img-2.png" alt="" loading="lazy">
                      </picture>
                    </a>
                    <div class="cart_prd-info">
                      <a class="title h6" href="product-detail.php">
                        The Alchemist Cleanse monthly Subscription
                      </a>
                      <div class="cart_prd-price-wrap">
                        <div class="cart_prd-q">1</div>
                        <span>X</span>
                        <div class="cart_prd-price">$ <b>1200.00</b></div>
                      </div>
                      <div class="thumb-input-number">
                        <button type="button" class="decr">-</button>
                        <input value="1" readonly="" tabindex="-1">
                        <button type="button" class="incr">+</button>
                      </div>
                    </div>
                    <div class="btn-delete">
                      <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3333 4.00008V3.33341C11.3333 2.39999 11.3333 1.93328 11.1517 1.57676C10.9919 1.26316 10.7369 1.00819 10.4233 0.848404C10.0668 0.666748 9.60009 0.666748 8.66667 0.666748H7.33333C6.39991 0.666748 5.9332 0.666748 5.57668 0.848404C5.26308 1.00819 5.00811 1.26316 4.84832 1.57676C4.66667 1.93328 4.66667 2.39999 4.66667 3.33341V4.00008M0.5 4.00008H15.5M13.8333 4.00008V13.3334C13.8333 14.7335 13.8333 15.4336 13.5608 15.9684C13.3212 16.4388 12.9387 16.8212 12.4683 17.0609C11.9335 17.3334 11.2335 17.3334 9.83333 17.3334H6.16667C4.76654 17.3334 4.06647 17.3334 3.53169 17.0609C3.06129 16.8212 2.67883 16.4388 2.43915 15.9684C2.16667 15.4336 2.16667 14.7335 2.16667 13.3334V4.00008" stroke="#4A5055" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                  <div class="cart_prd js-checkout-product" data-price="1132.20">
                    <a class="cart_prd-img" href="product-detail.php">
                      <picture>
                        <source srcset="img/cart-img-1.webp" type="image/webp">
                        <source srcset="img/cart-img-1.png" type="image/png">
                        <img src="img/cart-img-1.png" alt="" loading="lazy">
                      </picture>
                    </a>
                    <div class="cart_prd-info">
                      <a class="title h6" href="product-detail.php">
                        The Hero Cleanse
                      </a>
                      <div class="cart_prd-price-wrap">
                        <div class="cart_prd-q">1</div>
                        <span>X</span>
                        <div class="cart_prd-price">$ <b>1132.20</b></div>
                      </div>
                      <div class="thumb-input-number">
                        <button type="button" class="decr">-</button>
                        <input value="1" readonly="" tabindex="-1">
                        <button type="button" class="incr">+</button>
                      </div>
                    </div>
                    <div class="btn-delete">
                      <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3333 4.00008V3.33341C11.3333 2.39999 11.3333 1.93328 11.1517 1.57676C10.9919 1.26316 10.7369 1.00819 10.4233 0.848404C10.0668 0.666748 9.60009 0.666748 8.66667 0.666748H7.33333C6.39991 0.666748 5.9332 0.666748 5.57668 0.848404C5.26308 1.00819 5.00811 1.26316 4.84832 1.57676C4.66667 1.93328 4.66667 2.39999 4.66667 3.33341V4.00008M0.5 4.00008H15.5M13.8333 4.00008V13.3334C13.8333 14.7335 13.8333 15.4336 13.5608 15.9684C13.3212 16.4388 12.9387 16.8212 12.4683 17.0609C11.9335 17.3334 11.2335 17.3334 9.83333 17.3334H6.16667C4.76654 17.3334 4.06647 17.3334 3.53169 17.0609C3.06129 16.8212 2.67883 16.4388 2.43915 15.9684C2.16667 15.4336 2.16667 14.7335 2.16667 13.3334V4.00008" stroke="#4A5055" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                  <div class="cart_prd js-checkout-product" data-price="1132.20">
                    <a class="cart_prd-img" href="product-detail.php">
                      <picture>
                        <source srcset="img/cart-img-1.webp" type="image/webp">
                        <source srcset="img/cart-img-1.png" type="image/png">
                        <img src="img/cart-img-1.png" alt="" loading="lazy">
                      </picture>
                    </a>
                    <div class="cart_prd-info">
                      <a class="title h6" href="product-detail.php">
                        The Hero Cleanse
                      </a>
                      <div class="cart_prd-price-wrap">
                        <div class="cart_prd-q">1</div>
                        <span>X</span>
                        <div class="cart_prd-price">$ <b>1132.20</b></div>
                      </div>
                      <div class="thumb-input-number">
                        <button type="button" class="decr">-</button>
                        <input value="1" readonly="" tabindex="-1">
                        <button type="button" class="incr">+</button>
                      </div>
                    </div>
                    <div class="btn-delete">
                      <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3333 4.00008V3.33341C11.3333 2.39999 11.3333 1.93328 11.1517 1.57676C10.9919 1.26316 10.7369 1.00819 10.4233 0.848404C10.0668 0.666748 9.60009 0.666748 8.66667 0.666748H7.33333C6.39991 0.666748 5.9332 0.666748 5.57668 0.848404C5.26308 1.00819 5.00811 1.26316 4.84832 1.57676C4.66667 1.93328 4.66667 2.39999 4.66667 3.33341V4.00008M0.5 4.00008H15.5M13.8333 4.00008V13.3334C13.8333 14.7335 13.8333 15.4336 13.5608 15.9684C13.3212 16.4388 12.9387 16.8212 12.4683 17.0609C11.9335 17.3334 11.2335 17.3334 9.83333 17.3334H6.16667C4.76654 17.3334 4.06647 17.3334 3.53169 17.0609C3.06129 16.8212 2.67883 16.4388 2.43915 15.9684C2.16667 15.4336 2.16667 14.7335 2.16667 13.3334V4.00008" stroke="#4A5055" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                  <div class="cart_prd js-checkout-product" data-price="1132.21">
                    <a class="cart_prd-img" href="product-detail.php">
                      <picture>
                        <source srcset="img/cart-img-1.webp" type="image/webp">
                        <source srcset="img/cart-img-1.png" type="image/png">
                        <img src="img/cart-img-1.png" alt="" loading="lazy">
                      </picture>
                    </a>
                    <div class="cart_prd-info">
                      <a class="title h6" href="product-detail.php">
                        The Hero Cleanse
                      </a>
                      <div class="cart_prd-price-wrap">
                        <div class="cart_prd-q">1</div>
                        <span>X</span>
                        <div class="cart_prd-price">$ <b>1132.21</b></div>
                      </div>
                      <div class="thumb-input-number">
                        <button type="button" class="decr">-</button>
                        <input value="1" readonly="" tabindex="-1">
                        <button type="button" class="incr">+</button>
                      </div>
                    </div>
                    <div class="btn-delete">
                      <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3333 4.00008V3.33341C11.3333 2.39999 11.3333 1.93328 11.1517 1.57676C10.9919 1.26316 10.7369 1.00819 10.4233 0.848404C10.0668 0.666748 9.60009 0.666748 8.66667 0.666748H7.33333C6.39991 0.666748 5.9332 0.666748 5.57668 0.848404C5.26308 1.00819 5.00811 1.26316 4.84832 1.57676C4.66667 1.93328 4.66667 2.39999 4.66667 3.33341V4.00008M0.5 4.00008H15.5M13.8333 4.00008V13.3334C13.8333 14.7335 13.8333 15.4336 13.5608 15.9684C13.3212 16.4388 12.9387 16.8212 12.4683 17.0609C11.9335 17.3334 11.2335 17.3334 9.83333 17.3334H6.16667C4.76654 17.3334 4.06647 17.3334 3.53169 17.0609C3.06129 16.8212 2.67883 16.4388 2.43915 15.9684C2.16667 15.4336 2.16667 14.7335 2.16667 13.3334V4.00008" stroke="#4A5055" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                  <div class="cart_prd js-checkout-product" data-price="1132.20">
                    <a class="cart_prd-img" href="product-detail.php">
                      <picture>
                        <source srcset="img/cart-img-1.webp" type="image/webp">
                        <source srcset="img/cart-img-1.png" type="image/png">
                        <img src="img/cart-img-1.png" alt="" loading="lazy">
                      </picture>
                    </a>
                    <div class="cart_prd-info">
                      <a class="title h6" href="product-detail.php">
                        The Hero Cleanse
                      </a>
                      <div class="cart_prd-price-wrap">
                        <div class="cart_prd-q">1</div>
                        <span>X</span>
                        <div class="cart_prd-price">$ <b>1132.20</b></div>
                      </div>
                      <div class="thumb-input-number">
                        <button type="button" class="decr">-</button>
                        <input value="1" readonly="" tabindex="-1">
                        <button type="button" class="incr">+</button>
                      </div>
                    </div>
                    <div class="btn-delete">
                      <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3333 4.00008V3.33341C11.3333 2.39999 11.3333 1.93328 11.1517 1.57676C10.9919 1.26316 10.7369 1.00819 10.4233 0.848404C10.0668 0.666748 9.60009 0.666748 8.66667 0.666748H7.33333C6.39991 0.666748 5.9332 0.666748 5.57668 0.848404C5.26308 1.00819 5.00811 1.26316 4.84832 1.57676C4.66667 1.93328 4.66667 2.39999 4.66667 3.33341V4.00008M0.5 4.00008H15.5M13.8333 4.00008V13.3334C13.8333 14.7335 13.8333 15.4336 13.5608 15.9684C13.3212 16.4388 12.9387 16.8212 12.4683 17.0609C11.9335 17.3334 11.2335 17.3334 9.83333 17.3334H6.16667C4.76654 17.3334 4.06647 17.3334 3.53169 17.0609C3.06129 16.8212 2.67883 16.4388 2.43915 15.9684C2.16667 15.4336 2.16667 14.7335 2.16667 13.3334V4.00008" stroke="#4A5055" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                  <div class="cart_prd js-checkout-product" data-price="1200">
                    <a class="cart_prd-img" href="product-detail.php">
                      <picture>
                        <source srcset="img/cart-img-2.webp" type="image/webp">
                        <source srcset="img/cart-img-2.png" type="image/png">
                        <img src="img/cart-img-2.png" alt="" loading="lazy">
                      </picture>
                    </a>
                    <div class="cart_prd-info">
                      <a class="title h6" href="product-detail.php">
                        The Alchemist Cleanse monthly Subscription
                      </a>
                      <div class="cart_prd-price-wrap">
                        <div class="cart_prd-q">1</div>
                        <span>X</span>
                        <div class="cart_prd-price">$ <b>1200.00</b></div>
                      </div>
                      <div class="thumb-input-number">
                        <button type="button" class="decr">-</button>
                        <input value="1" readonly="" tabindex="-1">
                        <button type="button" class="incr">+</button>
                      </div>
                    </div>
                    <div class="btn-delete">
                      <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3333 4.00008V3.33341C11.3333 2.39999 11.3333 1.93328 11.1517 1.57676C10.9919 1.26316 10.7369 1.00819 10.4233 0.848404C10.0668 0.666748 9.60009 0.666748 8.66667 0.666748H7.33333C6.39991 0.666748 5.9332 0.666748 5.57668 0.848404C5.26308 1.00819 5.00811 1.26316 4.84832 1.57676C4.66667 1.93328 4.66667 2.39999 4.66667 3.33341V4.00008M0.5 4.00008H15.5M13.8333 4.00008V13.3334C13.8333 14.7335 13.8333 15.4336 13.5608 15.9684C13.3212 16.4388 12.9387 16.8212 12.4683 17.0609C11.9335 17.3334 11.2335 17.3334 9.83333 17.3334H6.16667C4.76654 17.3334 4.06647 17.3334 3.53169 17.0609C3.06129 16.8212 2.67883 16.4388 2.43915 15.9684C2.16667 15.4336 2.16667 14.7335 2.16667 13.3334V4.00008" stroke="#4A5055" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                  <div class="cart_prd js-checkout-product" data-price="1132.20">
                    <a class="cart_prd-img" href="product-detail.php">
                      <picture>
                        <source srcset="img/cart-img-1.webp" type="image/webp">
                        <source srcset="img/cart-img-1.png" type="image/png">
                        <img src="img/cart-img-1.png" alt="" loading="lazy">
                      </picture>
                    </a>
                    <div class="cart_prd-info">
                      <a class="title h6" href="product-detail.php">
                        The Hero Cleanse
                      </a>
                      <div class="cart_prd-price-wrap">
                        <div class="cart_prd-q">1</div>
                        <span>X</span>
                        <div class="cart_prd-price">$ <b>1132.20</b></div>
                      </div>
                      <div class="thumb-input-number">
                        <button type="button" class="decr">-</button>
                        <input value="1" readonly="" tabindex="-1">
                        <button type="button" class="incr">+</button>
                      </div>
                    </div>
                    <div class="btn-delete">
                      <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3333 4.00008V3.33341C11.3333 2.39999 11.3333 1.93328 11.1517 1.57676C10.9919 1.26316 10.7369 1.00819 10.4233 0.848404C10.0668 0.666748 9.60009 0.666748 8.66667 0.666748H7.33333C6.39991 0.666748 5.9332 0.666748 5.57668 0.848404C5.26308 1.00819 5.00811 1.26316 4.84832 1.57676C4.66667 1.93328 4.66667 2.39999 4.66667 3.33341V4.00008M0.5 4.00008H15.5M13.8333 4.00008V13.3334C13.8333 14.7335 13.8333 15.4336 13.5608 15.9684C13.3212 16.4388 12.9387 16.8212 12.4683 17.0609C11.9335 17.3334 11.2335 17.3334 9.83333 17.3334H6.16667C4.76654 17.3334 4.06647 17.3334 3.53169 17.0609C3.06129 16.8212 2.67883 16.4388 2.43915 15.9684C2.16667 15.4336 2.16667 14.7335 2.16667 13.3334V4.00008" stroke="#4A5055" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>

                  <div class="cart-empty-message d-none">
                    <div class="title h3">Cart is empty</div>
                    <a class="btn" href="programs.php">
                      <b>View all programs</b>
                    </a>
                  </div>
                </div>
                <div class="order-price">Subtotal: <b>$</b><b id="all-product-price">1,132.20</b></div>
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
</body>

</html>