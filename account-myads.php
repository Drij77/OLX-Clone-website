<?php
session_start();
if($_SESSION['login']!=='a')
{
  header("location:login.php");
}
include('parts/header.php')
?>
    <!-- Header Area wrapper End -->

    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">My Ads</h2>
              <ol class="breadcrumb">
                <li><a href="#"></a></li>
                <li class="current"></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->  

    <?php
    include('parts/startcontent.php')
    ?>
              <div class="widget">
                <h4 class="widget-title">Advertisement</h4>
                <div class="add-box">
                  <img class="img-fluid" src="assets/img/img1.jpg" alt="">
                </div>
              </div>
            </aside>
          </div>

          <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="page-content">
              <div class="inner-box">
                <div class="dashboard-box">
                  <h2 class="dashbord-title">My Ads</h2>
                </div>
                <div class="dashboard-wrapper">
                 <nav class="nav-table">
                    <ul>
                      <li class="active"><a href="#">All Ads (42)</a></li>
                      <li><a href="#">Published (88)</a></li>
                      <li><a href="#">Featured (12)</a></li>
                      <li><a href="#">Sold (02)</a></li>
                      <li><a href="#">Active (42)</a></li>
                      <li><a href="#">Expired (01)</a></li>
                    </ul>
                  </nav>
                  <table class="table dashboardtable tablemyads">
                    <thead>
                      <tr>
                        <th>
                          <span class="checkbox">
                            <input id="checkedall" type="checkbox" name="myads" value="checkall">
                            <label for="checkedall"></label>
                          </span>
                        </th>
                        <th>Photo</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Ad Status</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr data-category="active">
                        <td>
                          <span class="checkbox">
                            <input id="adone" type="checkbox" name="myads" value="myadone">
                            <label for="adone"></label>
                          </span>
                        </td>
                        <td class="photo"><img class="img-fluid" src="assets/img/product/img1.jpg" alt=""></td>
                        <td data-title="Title">
                          <h3>HP Laptop 6560b core i3 3nd generation</h3>
                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                        </td>
                        <td data-title="Category"><span class="adcategories">Laptops & PCs</span></td>
                        <td data-title="Ad Status"><span class="adstatus adstatusactive">active</span></td>
                        <td data-title="Price">
                          <h3>Rs:139$</h3>
                        </td>
                        <td data-title="Action">
                          <div class="btns-actions">
                            <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                            <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                            <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr data-category="active">
                        <td>
                          <span class="checkbox">
                            <input id="adtwo" type="checkbox" name="myads" value="myadtwo">
                            <label for="adtwo"></label>
                          </span>
                        </td>
                        <td class="photo"><img class="img-fluid" src="assets/img/product/img2.jpg" alt=""></td>
                        <td data-title="Title">
                          <h3>Jvc Haebr80b In-ear Sports Headphones</h3>
                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                        </td>
                        <td data-title="Category">Electronics</td>
                        <td data-title="Ad Status"><span class="adstatus adstatusactive">Active</span></td>
                        <td data-title="Price">
                          <h3>$189</h3>
                        </td>
                        <td data-title="Action">
                          <div class="btns-actions">
                            <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                            <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                            <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr data-category="inactive">
                        <td>
                          <span class="checkbox">
                            <input id="adthree" type="checkbox" name="myads" value="myadthree">
                            <label for="adthree"></label>
                          </span>
                        </td>
                        <td class="photo"><img class="img-fluid" src="assets/img/product/img3.jpg" alt=""></td>
                        <td data-title="Title">
                          <h3>Furniture Straps 4-Pack, TV Anti-Tip Metal Wall </h3>
                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                        </td>
                        <td data-title="Category">Real Estate</td>
                        <td>
                          <span class="adstatus adstatusinactive">Inactive</span>
                        </td>
                        <td data-title="Price">
                          <h3>$69</h3>
                        </td>
                        <td data-title="Action">
                          <div class="btns-actions">
                            <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                            <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                            <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr data-category="sold">
                        <td>
                          <span class="checkbox">
                            <input id="adfour" type="checkbox" name="myads" value="myadfour">
                            <label for="adfour"></label>
                          </span>
                        </td>
                        <td class="photo"><img class="img-fluid" src="assets/img/product/img4.jpg" alt=""></td>
                        <td data-title="Title">
                          <h3>Apple iPhone X, Fully Unlocked 5.8", 64 GB - Black</h3>
                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                        </td>
                        <td data-title="Category">Mobile</td>
                        <td data-title="Ad Status"><span class="adstatus adstatussold">Sold</span></td>
                        <td data-title="Price">
                          <h3>$89</h3>
                        </td>
                        <td data-title="Action">
                          <div class="btns-actions">
                            <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                            <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr data-category="active">
                        <td>
                          <span class="checkbox">
                            <input id="adfive" type="checkbox" name="myads" value="myadfive">
                            <label for="adfive"></label>
                          </span>
                        </td>
                        <td class="photo"><img class="img-fluid" src="assets/img/product/img5.jpg" alt=""></td>
                        <td data-title="Title">
                          <h3>Apple Macbook Pro 13 Inch with/without Touch Bar</h3>
                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                        </td>
                        <td data-title="Category">Apple</td>
                        <td data-title="Ad Status"><span class="adstatus adstatusactive">Active</span></td>
                        <td data-title="Price">
                          <h3>$289</h3>
                        </td>
                        <td data-title="Action">
                          <div class="btns-actions">
                            <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                            <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                            <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr data-category="sold">
                        <td>
                          <span class="checkbox">
                            <input id="adsix" type="checkbox" name="myads" value="myadsix">
                            <label for="adsix"></label>
                          </span>
                        </td>
                        <td class="photo"><img class="img-fluid" src="assets/img/product/img6.jpg" alt=""></td>
                        <td data-title="Title">
                          <h3>Apple MQDT2CL/A 10.5-Inch 64GB Wi-Fi iPad Pro</h3>
                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                        </td>
                        <td data-title="Category">Apple iPad</td>
                        <td data-title="Ad Status"><span class="adstatus adstatussold">Sold</span></td>
                        <td data-title="Price">
                          <h3>$159</h3>
                        </td>
                        <td data-title="Action">
                          <div class="btns-actions">
                            <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                            <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr data-category="expired">
                        <td>
                          <span class="checkbox">
                            <input id="adseven" type="checkbox" name="myads" value="myadseven">
                            <label for="adseven"></label>
                          </span>
                        </td>
                        <td class="photo"><img class="img-fluid" src="assets/img/product/img7.jpg" alt=""></td>
                        <td data-title="Title">
                          <h3>Essential Phone 8GB Unlocked with Dual Camera</h3>
                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                        </td>
                        <td data-title="Category">Mobile</td>
                        <td data-title="Ad Status"><span class="adstatus adstatusexpired">Expired</span></td>
                        <td data-title="Price">
                          <h3>$89</h3>
                        </td>
                        <td data-title="Action">
                          <div class="btns-actions">
                            <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                            <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                            <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr data-category="inactive">
                        <td>
                          <span class="checkbox">
                            <input id="adeight" type="checkbox" name="myads" value="myadeight">
                            <label for="adeight"></label>
                          </span>
                        </td>
                        <td class="photo"><img class="img-fluid" src="assets/img/product/img8.jpg" alt=""></td>
                        <td data-title="Title">
                          <h3>LG Nexus 5x LG-H791 32GB GSM Smartphone</h3>
                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                        </td>
                        <td data-title="Category">Mobile</td>
                        <td>
                          <span class="adstatus adstatusinactive">Inactive</span>
                        </td>
                        <td data-title="Price">
                          <h3>$59</h3>
                        </td>
                        <td data-title="Action">
                          <div class="btns-actions">
                            <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                            <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                            <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr data-category="expired">
                        <td>
                          <span class="checkbox">
                            <input id="adnine" type="checkbox" name="myads" value="myadnine">
                            <label for="adnine"></label>
                          </span>
                        </td>
                        <td class="photo"><img class="img-fluid" src="assets/img/product/img9.jpg" alt=""></td>
                        <td data-title="Title">
                          <h3>Samsung Galaxy G550T On5 GSM Unlocked Smartphone</h3>
                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                        </td>
                        <td data-title="Category">Mobile</td>
                        <td data-title="Ad Status"><span class="adstatus adstatusexpired">Expired</span></td>
                        <td data-title="Price">
                          <h3>$129</h3>
                        </td>
                        <td data-title="Action">
                          <div class="btns-actions">
                            <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                            <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                            <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr data-category="deleted">
                        <td>
                          <span class="checkbox">
                            <input id="adten" type="checkbox" name="myads" value="myadten">
                            <label for="adten"></label>
                          </span>
                        </td>
                        <td class="photo"><img class="img-fluid" src="assets/img/product/img10.jpg" alt=""></td>
                        <td data-title="Title">
                          <h3>Apple iMac Pro 27" All-in-One Desktop, Space Gray</h3>
                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                        </td>
                        <td data-title="Category">Apple iMac</td>
                        <td data-title="Ad Status"><span class="adstatus adstatusdeleted">Deleted</span></td>
                        <td data-title="Price">
                          <h3>$389</h3>
                        </td>
                        <td data-title="Action">
                          <div class="btns-actions">
                            <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                            <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                            <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>      
    </div>
    <!-- End Content -->

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">About Us</h3>
                <div class="textwidget">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed, auctor ut purus.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Useful Links</h3>
                <ul class="menu">
                  <li><a href="#">How to Sell Faster</a></li>
                  <li><a href="#">Membership Details</a></li>
                  <li><a href="#">Why Choose</a></li>
                  <li><a href="#">Job Opennings</a></li>
                  <li><a href="#">Using This Platform</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Help & Support</h3>
                <ul class="menu">
                  <li><a href="#">Live Chat</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Purchase Protection</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Contact us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Contact Information</h3>
                <ul class="contact-footer">
                  <li>
                    <strong>Address :</strong><span>1900 Pico Blvd, New York</span>
                  </li>
                  <li>
                    <strong>Phone :</strong><span>+48 123 456 789</span>
                  </li>
                  <li>
                    <strong>E-mail :</strong><span><a href="#">info@example.com</a></span>
                  </li>
                </ul>  
                <ul class="footer-social">
                  <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                  <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                  <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                </ul>          
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->
      
      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info float-left">
                <p>All copyrights reserved &copy; 2018 - Designed by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
              </div>              
              <div class="float-right">  
                <ul class="bottom-card">
                  <li>
                      <a href="#"><img src="assets/img/footer/card1.jpg" alt="card"></a>
                  </li>
                  <li>
                      <a href="#"><img src="assets/img/footer/card2.jpg" alt="card"></a>
                  </li>
                  <li>
                      <a href="#"><img src="assets/img/footer/card3.jpg" alt="card"></a>
                  </li>
                  <li>
                      <a href="#"><img src="assets/img/footer/card4.jpg" alt="card"></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
    <!-- Footer Section End --> 

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/summernote.js"></script>
      
  </body>
</html>