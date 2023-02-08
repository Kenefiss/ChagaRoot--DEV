<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>ChangaRoot :: Personal Information</title>

</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">

    <?php include 'inc/_header.php';?>

    <main>

      <!-- Cabinet -->
      <div class="section cabinet-section">
        <div class="spacer-xs"></div>
        <div class="container">
          <div class="cb-wrap">
            <div class="cb-nav">
              <ul>
                <li>
                  <a href="cabinet-dashboard.php">
                    <i>
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 15.5H10.25C14 15.5 15.5 14 15.5 10.25V5.75C15.5 2 14 0.5 10.25 0.5H5.75C2 0.5 0.5 2 0.5 5.75V10.25C0.5 14 2 15.5 5.75 15.5Z" stroke="#131E29" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.625 12.875C11.45 12.875 12.125 12.2 12.125 11.375V4.625C12.125 3.8 11.45 3.125 10.625 3.125C9.8 3.125 9.125 3.8 9.125 4.625V11.375C9.125 12.2 9.7925 12.875 10.625 12.875Z" stroke="#131E29" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M5.375 12.875C6.2 12.875 6.875 12.2 6.875 11.375V8.75C6.875 7.925 6.2 7.25 5.375 7.25C4.55 7.25 3.875 7.925 3.875 8.75V11.375C3.875 12.2 4.5425 12.875 5.375 12.875Z" stroke="#131E29" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </i>
                    <div>Dashboard</div>
                  </a>
                </li>
                <li class="active">
                  <a href="cabinet-data.php">
                    <i>
                      <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 12.6361C1 10.8933 2.21238 9.4088 3.86003 9.13414L4.00844 9.1094C5.3278 8.88946 6.6722 8.88946 7.99156 9.1094L8.13997 9.13414C9.78762 9.4088 11 10.8933 11 12.6361C11 13.3893 10.4154 14 9.69419 14H2.30581C1.58463 14 1 13.3893 1 12.6361Z" stroke="#009F4D"></path>
                        <path d="M8.91668 3.84375C8.91668 5.41431 7.61085 6.6875 6.00001 6.6875C4.38918 6.6875 3.08335 5.41431 3.08335 3.84375C3.08335 2.27319 4.38918 1 6.00001 1C7.61085 1 8.91668 2.27319 8.91668 3.84375Z" stroke="#009F4D"></path>
                      </svg>
                    </i>
                    <div>Personal information</div>
                  </a>
                </li>
                <li>
                  <a href="cabinet-history.php">
                    <i>
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.75 1.25L3.25 1.25C2.14543 1.25 1.25 2.14543 1.25 3.25L1.25 12.75C1.25 13.8546 2.14543 14.75 3.25 14.75H12.75C13.8546 14.75 14.75 13.8546 14.75 12.75V3.25C14.75 2.14543 13.8546 1.25 12.75 1.25Z" stroke="#131E29" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M4.25 4.25L11.75 4.25" stroke="#131E29" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M4.25 8L11.75 8" stroke="#131E29" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M4.25 11.75L8.75 11.75" stroke="#131E29" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </i>
                    <div>Order history</div>
                  </a>
                </li>
                <li>
                  <a href="cabinet-sub.php">
                    <i>
                      <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.74989 0.5L1.06999 8.51589C0.808382 8.82982 0.677579 8.98678 0.67558 9.11935C0.673842 9.23459 0.725195 9.34423 0.814839 9.41667C0.917957 9.5 1.12228 9.5 1.53092 9.5H6.99989L6.2499 15.5L12.9298 7.48411C13.1914 7.17018 13.3222 7.01322 13.3242 6.88065C13.3259 6.76541 13.2746 6.65577 13.185 6.58333C13.0818 6.5 12.8775 6.5 12.4689 6.5H6.99989L7.74989 0.5Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </i>
                    <div>Subscriptions</div>
                  </a>
                </li>
                <li>
                  <a href="cabinet-notification.php">
                    <i>
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.5 12.2439V14C6.5 14.8284 7.17157 15.5 8 15.5C8.82843 15.5 9.5 14.8284 9.5 14V12.2439M8 0.5V1.25M1.25 8H0.5M3.125 3.125L2.67493 2.67493M12.875 3.125L13.3252 2.67493M15.5 8H14.75M12.5 8C12.5 10.4853 10.4853 12.5 8 12.5C5.51472 12.5 3.5 10.4853 3.5 8C3.5 5.51472 5.51472 3.5 8 3.5C10.4853 3.5 12.5 5.51472 12.5 8Z" stroke="#131E29" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </i>
                    <div>Notification <b>1</b></div>
                  </a>
                </li>
                <li>
                  <div class="open-popup" data-rel="10">
                    <i>
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 14.75L4.85 14.75C3.58988 14.75 2.95982 14.75 2.47852 14.5048C2.05516 14.289 1.71095 13.9448 1.49523 13.5215C1.25 13.0402 1.25 12.4101 1.25 11.15L1.25 4.85C1.25 3.58988 1.25 2.95982 1.49524 2.47852C1.71095 2.05516 2.05516 1.71095 2.47852 1.49523C2.95982 1.25 3.58988 1.25 4.85 1.25L5.75 1.25M11 11.75L14.75 8M14.75 8L11 4.25M14.75 8L5.75 8" stroke="#131E29" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </i>
                    <div>Log out</div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="cb-inner">
              <div class="row">
                <div class="col-xl-8 offset-xl-3">
                  <form class="cb-form">
                    <div class="form-block">
                      <div class="title h4">Personal information</div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="text">
                            <div class="input-placeholder">First name</div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="text">
                            <div class="input-placeholder">Last name</div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="tel">
                            <div class="input-placeholder">Phone</div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="email">
                            <div class="input-placeholder">Email*</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h4">Shipping address</div>
                      <div class="row">
                        <div class="col-sm-6">
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
                            <input class="input" type="text">
                            <div class="input-placeholder">Town</div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="text">
                            <div class="input-placeholder">State</div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="text">
                            <div class="input-placeholder">ZIP Code</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h4">Password</div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="password">
                            <div class="input-placeholder">Password</div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-field-wrapper">
                            <input class="input" type="Password">
                            <div class="input-placeholder">Password authentication</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-block">
                      <div class="title h4">Credit card</div>

                      <div class="row added-card-row">
                        <div class="col-lg-6">
                          <div class="added-card">
                            <div class="added-card-num">
                              <i>
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M15.5 4.5H0.5M7.25 7.5H3.5M0.5 3.15L0.5 8.85C0.5 9.69008 0.5 10.1101 0.66349 10.431C0.8073 10.7132 1.03677 10.9427 1.31901 11.0865C1.63988 11.25 2.05992 11.25 2.9 11.25L13.1 11.25C13.9401 11.25 14.3601 11.25 14.681 11.0865C14.9632 10.9427 15.1927 10.7132 15.3365 10.431C15.5 10.1101 15.5 9.69008 15.5 8.85V3.15C15.5 2.30992 15.5 1.88988 15.3365 1.56902C15.1927 1.28677 14.9632 1.0573 14.681 0.913491C14.3601 0.750001 13.9401 0.750001 13.1 0.750001L2.9 0.75C2.05992 0.75 1.63988 0.75 1.31901 0.91349C1.03677 1.0573 0.807301 1.28677 0.66349 1.56901C0.5 1.88988 0.5 2.30992 0.5 3.15Z" stroke="#131E29" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                              </i>
                              <div>4141 4991 **** **23</div>
                            </div>
                            <div class="added-card-edit open-popup" data-rel="9">
                              <i>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12.5 6.50023L9.50002 3.50023M0.875 15.1252L3.41328 14.8432C3.72339 14.8087 3.87845 14.7915 4.02338 14.7446C4.15197 14.703 4.27434 14.6442 4.38717 14.5698C4.51434 14.4859 4.62466 14.3756 4.84529 14.1549L14.75 4.25023C15.5784 3.4218 15.5784 2.07865 14.75 1.25023C13.9216 0.4218 12.5784 0.421799 11.75 1.25023L1.8453 11.1549C1.62466 11.3756 1.51434 11.4859 1.43048 11.6131C1.35607 11.7259 1.29726 11.8483 1.25564 11.9768C1.20872 12.1218 1.19149 12.2768 1.15703 12.587L0.875 15.1252Z" stroke="#131E29" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                              </i>
                              <div>Edit</div>
                            </div>
                            <div class="added-card-delete btn-delete">
                              <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.3333 4.00008V3.33341C11.3333 2.39999 11.3333 1.93328 11.1517 1.57676C10.9919 1.26316 10.7369 1.00819 10.4233 0.848404C10.0668 0.666748 9.60009 0.666748 8.66667 0.666748H7.33333C6.39991 0.666748 5.9332 0.666748 5.57668 0.848404C5.26308 1.00819 5.00811 1.26316 4.84832 1.57676C4.66667 1.93328 4.66667 2.39999 4.66667 3.33341V4.00008M0.5 4.00008H15.5M13.8333 4.00008V13.3334C13.8333 14.7335 13.8333 15.4336 13.5608 15.9684C13.3212 16.4388 12.9387 16.8212 12.4683 17.0609C11.9335 17.3334 11.2335 17.3334 9.83333 17.3334H6.16667C4.76654 17.3334 4.06647 17.3334 3.53169 17.0609C3.06129 16.8212 2.67883 16.4388 2.43915 15.9684C2.16667 15.4336 2.16667 14.7335 2.16667 13.3334V4.00008" stroke="#4A5055" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- add card -->
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="btn btn-third btn-block open-popup" data-rel="9">
                            <i>
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 5V11M5 8H11M4.85 14.75H11.15C12.4101 14.75 13.0402 14.75 13.5215 14.5048C13.9448 14.289 14.289 13.9448 14.5048 13.5215C14.75 13.0402 14.75 12.4101 14.75 11.15V4.85C14.75 3.58988 14.75 2.95982 14.5048 2.47852C14.289 2.05516 13.9448 1.71095 13.5215 1.49524C13.0402 1.25 12.4101 1.25 11.15 1.25H4.85C3.58988 1.25 2.95982 1.25 2.47852 1.49524C2.05516 1.71095 1.71095 2.05516 1.49524 2.47852C1.25 2.95982 1.25 3.58988 1.25 4.85V11.15C1.25 12.4101 1.25 13.0402 1.49524 13.5215C1.71095 13.9448 2.05516 14.289 2.47852 14.5048C2.95982 14.75 3.58988 14.75 4.85 14.75Z" stroke="#131E29" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </i>
                            <b>Add credit card</b>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="cb-form-btn-wrap">
                      <button class="btn-link">Cancel</button>
                      <button class="btn btn-primary" type="submit">
                        <i>
                          <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.1665 5.53325L13.7665 5.53325M13.7665 5.53325L9.2665 1.33325M13.7665 5.53325L9.26651 9.73325" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </i>
                        <b>Save change</b>
                      </button>
                    </div>
                  </form>
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
</body>

</html>