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
        <div class="spacer-xs"></div>
        <!-- decor -->
        <div class="sec-decor d-none d-xl-block" style="right: 50px; top: 50px">
          <picture>
            <source type="image/svg+xml" media="(min-width:1200px)" srcset="img/decor-2.svg">
            <img src="" alt="" loading="lazy">
          </picture>
        </div>

        <div class="container">
          <!-- title -->
          <h1 class="h2 title title-margin">
            Archetype
          </h1>
          <div class="text">
            Answer a few questions below to find out what type of schedule or meal plan you should follow
          </div>

          <div class="spacer-md"></div>

          <div class="steps-wrap">
            <div class="h3 title title-margin text-center">Which archetype you are?</div>

            <div class="steps-inner">
              <div class="st-nav">
                <div class="st-item active">
                  <div class="st-item-num"><i></i></div>
                  <div class="st-item-title">Personal information</div>
                </div>
                <div class="st-item">
                  <div class="st-item-num"><i></i></div>
                  <div class="st-item-title">Your health</div>
                </div>
                <div class="st-item">
                  <div class="st-item-num"><i></i></div>
                  <div class="st-item-title">Other information</div>
                </div>
              </div>
              <div class="st-tabs">
                <form>
                  <!-- 1 -->
                  <div class="st-tab active">
                    <div class="form-block">
                      <div class="title h4">1. Select your gender</div>
                      <div class="ch-box-wrap">
                        <label class="ch-box-entry">
                          <input type="radio" name="gender">
                          <span>Male</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="gender">
                          <span>Female</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="gender">
                          <span>Other</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h4">2. Enter information</div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="text" required>
                            <div class="input-placeholder">Name*</div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="email" required>
                            <div class="input-placeholder">Email*</div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-field-wrapper">
                            <input class="input" type="text" required>
                            <div class="input-placeholder">Zip Code</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h4">3. Enter Your Data</div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="text" required>
                            <div class="input-placeholder">Weight*</div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="text" required>
                            <div class="input-placeholder">Height*</div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-field-wrapper">
                            <input class="input" type="text" required>
                            <div class="input-placeholder">Years old*</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h4">4. Activity</div>
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
                    </div>
                    <div class="st-btn-wrap">
                      <div class="btn btn-primary next-tab">
                        <i>
                          <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.1665 5.53325L13.7665 5.53325M13.7665 5.53325L9.2665 1.33325M13.7665 5.53325L9.26651 9.73325" stroke='white' stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </i>
                        <b>Next</b>
                      </div>
                    </div>
                  </div>
                  <!-- 2 -->
                  <div class="st-tab">
                    <div class="form-block">
                      <div class="title h4">5. Your state of health</div>
                      <div class="ch-box-wrap">
                        <label class="ch-box-entry">
                          <input type="radio" name="health">
                          <span>Goog</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="health">
                          <span>Normal</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="health">
                          <span>Bad</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h4">6. Do you have health complaints?</div>
                      <div class="input-field-wrapper">
                        <textarea class="input"></textarea>
                        <div class="input-placeholder">Describe your well-being</div>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h4">7. Do you take medication?</div>
                      <div class="input-field-wrapper">
                        <textarea class="input"></textarea>
                        <div class="input-placeholder">Which one</div>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h4">8. Are you currently taking another course?</div>
                      <div class="ch-box-wrap">
                        <label class="ch-box-entry">
                          <input type="radio" name="another course">
                          <span>Yes</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="another course">
                          <span>No</span>
                        </label>
                      </div>
                    </div>
                    <div class="st-btn-wrap">
                      <div class="btn-link prev-tab">Back</div>
                      <div class="btn btn-primary next-tab">
                        <i>
                          <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.1665 5.53325L13.7665 5.53325M13.7665 5.53325L9.2665 1.33325M13.7665 5.53325L9.26651 9.73325" stroke='white' stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </i>
                        <b>Next</b>
                      </div>
                    </div>
                  </div>
                  <!-- 3 -->
                  <div class="st-tab">
                    <div class="form-block">
                      <div class="title h4">9. Your program completion level</div>
                      <div class="ch-box-wrap">
                        <label class="ch-box-entry">
                          <input type="radio" name="completion level">
                          <span>Newbie</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="completion level">
                          <span>Middle</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="completion level">
                          <span>Advanced</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h4">10. Which component is most important to you?</div>
                      <div class="ch-box-wrap">
                        <label class="ch-box-entry">
                          <input type="radio" name="component">
                          <span>Nourish</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="component">
                          <span>Thrive</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="component">
                          <span>Cleanse</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h4">11. Choose the term of the program that is convenient for you</div>
                      <div class="ch-box-wrap">
                        <label class="ch-box-entry">
                          <input type="radio" name="term">
                          <span>1-2 week</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="term">
                          <span>2-3 week</span>
                        </label>
                        <label class="ch-box-entry">
                          <input type="radio" name="term">
                          <span>3-4 week</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h4">12. Do you have a wish for the program?</div>
                      <div class="input-field-wrapper">
                        <textarea class="input"></textarea>
                        <div class="input-placeholder">Describe it</div>
                      </div>
                    </div>
                    <div class="st-btn-wrap">
                      <div class="btn-link prev-tab">Back</div>
                      <a class="btn btn-primary" href="archetype-thank-you.php">
                        <i>
                          <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.1665 5.53325L13.7665 5.53325M13.7665 5.53325L9.2665 1.33325M13.7665 5.53325L9.26651 9.73325" stroke='white' stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </i>
                        <b>Next</b>
                      </a>
                    </div>
                  </div>
                </form>
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