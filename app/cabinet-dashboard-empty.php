<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>ChangaRoot :: Dashboard Empty</title>

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
                <li class="active">
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
                <li>
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
                <div class="col-xl-9 offset-xl-3">
                  <div class="dashboard">
                    <div class="dashboard-top">
                      <div class="h4 title">Hi, Amanda Raily</div>
                      <div class="text">
                        Welcome to Chagaroot. Information about all orders and completed programs will be stored here
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xxl-8 col-lg-7">
                        <div class="ds-archetype">
                          <div class="ds-archetype-inner">
                            <div class="h4 title">
                              Your Archetype is <b></b>
                            </div>
                            <div class="text">
                              <p>
                                Your archetype is not defined. Take the survey to determine which archetype suits you best
                              </p>
                            </div>
                          </div>
                          <div class="ds-archetype-btn">
                            <a class="btn-link" href="archetype.php">
                              <i>
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M5 4.85H11M5 7.5H11M5 10C7.34315 10 8.65685 10 11 10M4.85 14.25H11.15C12.4101 14.25 13.0402 14.25 13.5215 14.0048C13.9448 13.789 14.289 13.4448 14.5048 13.0215C14.75 12.5402 14.75 11.9101 14.75 10.65V4.35C14.75 3.08988 14.75 2.45982 14.5048 1.97852C14.289 1.55516 13.9448 1.21095 13.5215 0.995235C13.0402 0.75 12.4101 0.75 11.15 0.75H4.85C3.58988 0.75 2.95982 0.75 2.47852 0.995235C2.05516 1.21095 1.71095 1.55516 1.49524 1.97852C1.25 2.45982 1.25 3.08988 1.25 4.35V10.65C1.25 11.9101 1.25 12.5402 1.49524 13.0215C1.71095 13.4448 2.05516 13.789 2.47852 14.0048C2.95982 14.25 3.58988 14.25 4.85 14.25Z" stroke="#131E29" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                              </i>
                              <b>Complete the survey</b>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-4 col-lg-5">
                        <div class="calendar-wrap">
                          <div class="calendar-block">
                          </div>
                          <div class="calendar-info">
                            Delivery date
                          </div>
                        </div>
                      </div>

                      <!-- Program -->
                      <div class="col-12">
                        <div class="cb-empty-block">
                          <img src="img/subs-empty-img-3.svg" alt="">
                          <h5>Previous programs were not found</h5>
                          <a class="btn btn-primary" href="programs.php">
                            <i>
                              <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.1665 5.53325L13.7665 5.53325M13.7665 5.53325L9.2665 1.33325M13.7665 5.53325L9.26651 9.73325" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                            </i>
                            <b>View all program</b>
                          </a>
                        </div>
                      </div>

                      <!-- notification -->
                      <div class="col-12">
                        <div class="dashboard-notification">
                          <div class="h4 title">Latest notification</div>
                          <div class="cb-notification">
                            <div class="cb-notification-item">
                              <div class="cb-notification-top">
                                <div class="cb-notification-title">
                                  Get 40% on your first subscription
                                </div>
                                <div class="cb-notification-date">
                                  Monday, January 9
                                </div>
                              </div>
                              <div class="cb-notification-content">
                                <div class="text">
                                  <p>
                                    Your Cleanse Program is ending soon, get 40% off <a href="program-detail.php">The Thrive Program</a> on your first subscription
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="cb-notification-item">
                              <div class="cb-notification-top">
                                <div class="cb-notification-title">
                                  You on the right way! Just keep going
                                </div>
                                <div class="cb-notification-date">
                                  Friday, January 13
                                </div>
                              </div>
                              <div class="cb-notification-content">
                                <div class="text">
                                  <p>
                                    Your Cleanse Program is ending soon, get 40% off <a href="program-detail.php">The Thrive Program</a> on your first subscription
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="cb-notification-item">
                              <div class="cb-notification-top">
                                <div class="cb-notification-title">
                                  You on the right way! Just keep going
                                </div>
                                <div class="cb-notification-date">
                                  Monday, January 16
                                </div>
                              </div>
                              <div class="cb-notification-content">
                                <div class="text">
                                  <p>
                                    Your Cleanse Program is ending soon, get 40% off <a href="program-detail.php">The Thrive Program</a> on your first subscription
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
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
    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <!-- Popups -->
  <div class="popup-wrapper" id="popups"></div>
  <?php include 'inc/_bottom.php';?>
  <?php include 'inc/_cart.php';?>
  <?php include 'inc/_inputs.php';?>
  <?php include 'inc/_calendar.php';?>
</body>

</html>