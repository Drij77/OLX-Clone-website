    <!-- Start Content -->
    
    <div id="content" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
            <aside>
              <div class="sidebar-box">
                <div class="user">
                  <figure>
                    <a href="#"><img src="assets/img/author/" alt=""></a>
                  </figure>
                  <div class="usercontent">
                    

                    <h3>
                    <?php
                    
                    $name=$_SESSION['un'];
                    $name1=$_SESSION['uid'];
                    echo($name);
                    
                  ?>
                  </h3>
                    <h4>Administrator</h4>
                  </div>
                </div>
                <nav class="navdashboard">
                  <ul>
                    <li>
                      <a  href="dashboard.php">
                        <i class="lni-dashboard"></i>
                        <span>Dashboard</span>
                      </a>
                    </li>
                    <li>
                      <a  href="updatepassword.php">
                      <i class="lni lni-user"></i>
                        <span>Update password/details.</span>
                      </a>
                    </li>
                    <li>
                      <a  href="post-ads.php">
                        <i class="lni-cog"></i>
                        <span>Post An Ads</span>
                      </a>
                    </li>
                    
                    
                    <li>
                     
                    </li>
                    <li>
                      <a href="account-favourite-ads.php">
                        <i class="lni-heart"></i>
                        <span>My Favourites</span>
                      </a>
                    </li>
                    <li>
                      <a href="privacy-setting.php">
                        <i class="lni-star"></i>
                        <span>Privacy Settings</span>
                      </a>
                    </li>
                    <li>
                      <a href="logout.php">
                        <i class="lni-enter"></i>
                        <span>Logout</span>
                      </a>
                    </li>
                    <li>
                    <a  href="forgot-password.php"><i class="lni-reload"></i> Forgot Password</a>
                    </li>
                  </ul>
                </nav>
              </div>
              