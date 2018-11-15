 



<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>members</title>

        <!-- Bootstrap -->
  <?php include "include-css.php"  ?>
  <style>
.fa-camera{
  margin-top: 100px;
margin-left: 74px;
}
#myprofile{
  margin: -6px 0px 0px 62px;
font-weight: bold;
text-align: center;
font-size: 30px

}
.news_image_wrap{
  background-position: center center;
 background-repeat: no-repeat;
 background-size:cover;
 
}
.main-container h3{
  text-align:center;
  font-size:20px;
  font-weight:bold;
  margin:10px 0px 20px;
  color:#000;

}
.profile-contact-links {
    padding: 4px 2px 5px;
    border: 1px solid #E0E2E5;
    background-color: #F8FAFC;

}
.profile-contact-links a:hover{
  color:#000;

}
</style>

  </head>
      <body>
<?php include "HeaderNavigation.php"  ?>
<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">  
<div class="container-fluid">
<div class="container" style="margin-top:66px;">
  <div class="row">
   <div class="col-md-12">                      
     <div classs="main-content" style=" background:#fff; margin-top: -11px;">

                                       <!-- form start -->
   <?php  if(!empty($profile)) {
      foreach ($profile as $profile) { ?>
        <div id="user-profile-1" class="user-profile row" style="margin:-10px 0px 50px 0px">
             <div class="col-xs-12 col-sm-3 center" style="margin-top:45px">
                    <h5></h5>                
                   <span class="profile-picture">
                       <div class="news_image_wrap" id="news_image_wra" onclick=" openfile_upload('profileimage')" style="background-image: url('<?=base_url("assets/admin-assets/images/avatars/profile-pic.jpg")?>');min-height: 220px;min-width: 160px;">
                                <i class="fa fa-camera" style="left: 44% !important;top: 46% !important;"></i>
                               <input type="file" name="profileimage" class="hidden"  value='' id="profileimage" onchange="preview_file(event,'news_image_wrap')" style='margin-top: 0px;'>
                        </div>
                          <img id="avatar" class="editable img-responsive hidden" alt="Alex's Avatar" src="<?=base_url("assets/admin-assets/images/avatars/avatar2.png")?>" />
                  </span>
                 <div class="space-4"></div>
                 <div class="profile-contact-links"> 
                      <a href="javascript:void()" class="btn btn-link">
                         <i class="ace-icon fa fa-globe bigger-125 blue"></i>
                                <?php echo 'Registration Fee :'.$profile->REGISTRATION_FEE  ?>
                      </a>
                      <a href="javascript:void()" class="btn btn-link">
                                <i class="ace-icon fa fa-phone-square bigger-125 blue"></i>
                                <?php echo 'Fee status :UnPaid'  ?>
                      </a>  
                  </div>     
              </div>

                                       
                       
                         <div class="col-xs-12 col-sm-9">
                          <h2 id="myprofile" style="margin: 13px 0px 11px 0px;font-size: 21px">Personal Information</h2>
                               <div class="customer-form profile-user-info ">
                                 <form role="form" id="userform" method="post" > 
                                      <div class="box-body">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">First Name</label>
                                                <input type="text" class="form-control" id="firstname" value="<?php echo $profile->FIRSTNAME ?>"  placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="status">last Name</label>
                                                <input type="text" class="form-control" id="lastname"  value="<?php echo $profile->LASTNAME ?>" name="" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                  <label for="role">National Id</label>
                                                  <input type="text" class="form-control" id="fax"  value="<?php echo $profile->NATIONAL_ID?>" name="" placeholder="">
                                             </div>
                                             <div class="form-group">
                                                  <label for="role">Scheme</label>
                                                  <input type="text" class="form-control" id="company" value="<?php echo $profile->SCHEME_NAME ?>"  name="" placeholder="">
                                             </div>
                                             <div class="form-group">
                                                      <label for="">Scheme Type</label>
                                                      <input type="text" name="email" value="<?php echo $profile->SCHEME_TYPE_NAME ?>" class="form-control" id="phone" placeholder="">
                                               </div>
                                               <div class="form-group">
                                                      <label for="">Constituency</label>
                                                      <input type="text" name="email" value="<?php //echo $profile->CONSTITUENCY_NAME ?>" class="form-control" id="phone" placeholder="">
                                               </div>
                                               <div class="form-group">
                                                      <label for="">Village</label>
                                                      <input type="text" name="email" value="<?php //echo $profile->STATUS ?>" class="form-control" id="phone" placeholder="">
                                               </div>
                                               <div class="form-group">
                                                      <label for="">Ward</label>
                                                      <input type="text" name="email" value="<?php //echo $profile->WARD_NAME ?>" class="form-control" id="phone" placeholder="">
                                               </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="username">Date Registered</label>
                                                  <input type="text" name="" class="form-control" readonly=""  value="<?php echo $profile->DATE_REGISTERED ?>" id="homeaddress" placeholder="">
                                              </div>
                                              <div class="form-group">
                                                  <label for="exampleInputPassword1">Gender</label>
                                                  <input type="" name=""   class="form-control" value="<?php echo $profile->GENDER ?>" id="method" placeholder="">
                                              </div>
                                              <div class="form-group">
                                                      <label for="">Email Address</label>
                                                      <input type="text" name="email" value="<?php echo $profile->EMAIL_ADDRESS ?>" class="form-control" id="email" placeholder="">
                                              </div>
                                               <div class="form-group">
                                                      <label for="">Phone Number</label>
                                                      <input type="text" name="email" value="<?php echo $profile->PHONE ?>" class="form-control" id="phone" placeholder="">
                                               </div>
                                               <div class="form-group">
                                                      <label for="">Branch</label>
                                                      <input type="text" name="email" value="<?php echo $profile->BRANCH_NAME ?>" class="form-control" id="phone" placeholder="">
                                               </div>
                                                <div class="form-group">
                                                      <label for="">Status</label>
                                                      <input type="text" name="email" value="<?php echo $profile->STATUS ?>" class="form-control" id="phone" placeholder="">
                                               </div>
                                               <div class="form-group">
                                                      <label for="">County</label>
                                                      <input type="text" name="email" value="<?php //echo $profile->COUNTY_NAME ?>" class="form-control" id="phone" placeholder="">
                                               </div> 
                                               <div class="form-group">
                                                      <label for="">Status</label>
                                                      <input type="text" name="email" value="<?php //echo $profile->COUNTY_NAME ?>" class="form-control" id="phone" placeholder="">
                                               </div>                                           

                                           </div>  
                                        </div>
                                      <!--<button class="pull-right btn btn-primary btn-sm">Update</button>-->

                                      
                                  </form>
                                 <h4 style="text-align: center;font-size: 20px">Next of kin</h4>
                                      <table class="table table-striped table-bordered table-hover table-full-width" id="table">
                                            <thead>                               
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>National Id</th>
                                                <th>Email Address</th>

                                            </thead>
                                            <tbody>
                                               <?php if(!empty($kin)) { foreach ($kin as $value) { ?>
                                              <tr id="" title="double click to view more">
                                                  <td><?= $value->FIRSTNAME ?></td>
                                                  <td><?= $value->PHONE ?></td>
                                                   <td><?= $value->NATIONAL_ID ?></td>
                                                   <td><?= $value->EMAIL_ADDRESS ?></td>

                                              </tr>
                                                   <?php }} ?>
                                                </c:forEach>
                                            </tbody>
                                        </table>
                                   <?php }  } ?>
                                  
                                
                               

                    
                       </div>
                   </div>
                 </div>

<div class="row">
  <div class="col-md-6 col-md-offset-8" style="margin-top:-40px">
     <a href="javascript:void(0)" style="font-size:16px;color:#000;hover:background:#efefef">Click to Reset Password</a>

             <form role="form" id="passwordform" method="post" class="hidden"> 
                  <div class="box-body">
                    <div class="col-md-8">
                         
                         <div class="form-group">
                            <label for="status">Password</label>
                            <input type="text" class="form-control" id="lastname" name="password" placeholder="">
                          </div>
                          <div class="form-group">
                                  <label for="">Confirm Password</label>
                                  <input type="text" name="confirmpassword" class="form-control" id="" placeholder="">
                           </div>
                             <button class="btn btn-default btn-small" style="background:#efefef;color:#000;border-color:none" type="submit">Reset</button>
                      </div>

                      </div>
                 
              </form>
            </div>
         </div>
        </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    </body>
</html>


                  
                                       
           

            

            





           

            

           