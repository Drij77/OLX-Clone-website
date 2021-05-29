<?php
include('parts/header.php')

?>
    <!-- Header Area wrapper End -->

    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">Profile Settings</h2>
              <ol class="breadcrumb">
                <li><a href="#">Home /</a></li>
                <li class="current">Profile Settings</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->  

    <?php
    include('parts/startcontent.php')?>

              <div class="widget">
                <h4 class="widget-title">Advertisement</h4>
                <div class="add-box">
                  <img class="img-fluid" src="assets/img/img1.jpg" alt="">
                </div>
              </div>
            </aside>
          </div>

        
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                <div class="inner-box">
                  <div class="tg-contactdetail">
                    <div class="dashboard-box">
                      <h2 class="dashbord-title">Profile</h2>
                    </div>
                    <div class="dashboard-wrapper">
                      <div class="form-group mb-3">
                        
                        <div class="tg-selectgroup">
                          
                        </div>
                      </div>
                      <form role="form" class="login-form" method='post' action='con_profile.php'>
                      <div class="form-group mb-3">
                        <label class="control-label">First Name*</label>
                        <input class="form-control input-md" name="firstname" type="text">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">Last Name*</label>
                        <input class="form-control input-md" name="lastname" type="text">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">Phone*</label>
                        <input class="form-control input-md" name="phone" type="text">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">Enter Address</label>
                        <input class="form-control input-md" name="address1" type="text">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">Enter Address</label>
                        <input class="form-control input-md" name="address2" type="text">
                      </div>
                      <div class="form-group mb-3 tg-inputwithicon">
                        <label class="control-label">Country</label>
                        <div class="tg-select form-control">
                          <select name="country">
                          
                            <option value="india">India</option>
                          
                          </select>
                        </div>
                      </div>
                      <div class="form-group mb-3 tg-inputwithicon">
                        <label class="control-label">State</label>
                        <div class="tg-select form-control">
                          <select name="state">
                            <option value="Gujrat">Gujrat</option>
                            <option value="Rajasthan">Select State</option>
                            <option value="Maharashtra">Select State</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group mb-3 tg-inputwithicon">
                        <label class="control-label">City</label>
                        <div class="tg-select form-control">
                          <select name="city">
                            <option value="">Select City</option>
                            <option value="none">Select City</option>
                            <option value="none">Select City</option>
                          </select>
                        </div>
                      </div>
                      <div class="tg-checkbox">
                      <label class="tg-fileuploadlabel" for="tg-photogallery">
                      <span>Upload Profile Photo</span>
                      
                     <span class="btn btn-common">
                      <input  type="file" name='myimage' >
                      </span>
                      <span>Maximum upload file size: 500 KB</span>
                    </label>
                      </div>
                      
                      <button class="btn btn-common" type="submit">Update Profile</button>
                      </form>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>      
    </div>
    <!-- End Content -->

<?php
include('parts/footer.php')
?>