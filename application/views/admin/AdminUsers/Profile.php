
 
  <div class="breadcrumbs ace-save-state" id="breadcrumbs">
      <ul class="breadcrumb">
              <li>
                      <i class="ace-icon fa fa-home home-icon"></i>
                      <a href="#">Home</a>
              </li>
              <li class="active">Profile</li>
             
      </ul><!-- /.breadcrumb -->
  </div>
  <div class="page-content">
      <div class="page-header">             
              <div class="btn-group float_right hidden page_btn">
                  <div class="btn btn-info dash_btns btn-plus glyphicon glyphicon-plus"> </div>
                  <div class="btn btn-warning dash_btns btn-delete glyphicon glyphicon-trash"> </div>
                  <div class="btn btn-success dash_btns  btn-list glyphicon glyphicon-list" title="view users"> </div>
              </div>
              <!--display message-->
              <div class="DisplayMsg" style="display: none;margin-top:20px">
                  <div class='bs-example-modal-sm alert alert-success'><a href='#' class='close'
                      data-dismiss='alert' onclick='closeMsgBox()'>&times;</a>
                      <strong><div class="msg"></div></strong>
                  </div>
               </div>
              <div class="ErrMsg" style="display: none;margin-top:20px">
                  <div class='bs-example-modal-sm alert alert-danger'><a href='#' class='close'
                      data-dismiss='alert' onclick='closeMsgBox()'>&times;</a>
                      <strong><div class="msg"></div></strong>
                  </div>
              </div>
      </div><!-- /.page-header -->
      <div class="row">
          <div class="col-xs-12">
               <div class="row">
                  <div class="col-xs-12">
                      <!-- PAGE CONTENT BEGINS -->                      
                      <div id="user-profile-1" class="user-profile row">
                        <?php  if(!empty($profile)){ foreach($profile as $prifile){ ?>                    
                        
                           <form role="form"  id="userform"  method="post" enctype="form-data/multipart" >	
                              <div class="col-xs-12 col-md-3 center">
                                  <div>
                                      <span class="profile-picture">
                                          <div class="news_image_wrap" id="news_image_wra" onclick=" openfile_upload('profileimage')" style="background-image: url('images/');min-height: 220px;min-width: 160px">
                                                    <i class="fa fa-camera" style="left: 44% !important;top: 46% !important;"></i>
                                                   <input type="file" name="profileimage" class="hidden"  value='' id="profileimage" onchange="preview_file(event,'news_image_wrap')" style='margin-top: 0px;'>
                                            </div>
                                            <img id="avatar" class="editable img-responsive hidden" alt="Alex's Avatar" src="assets/admin/images/avatars/profile-pic.jpg" />
                                      </span>
                                      <div class="space-4"></div>
                                      <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                              <div class="inline position-relative">
                                                      <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                              <i class="ace-icon fa fa-circle light-green"></i>
                                                              &nbsp;
                                                              <span class="white"><?=$prifile->USERNAME ?><?=$prifile->LASTNAME ?></span>
                                                      </a>
                                                 </div>
                                      </div>
                                      </div>
                                      <div class="space-6"></div>
                                      <div class="profile-contact-links align-left">
                                              <a href="#" class="btn btn-link">
                                                      <i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
                                                     <?=$prifile->PHONENUMBER?>
                                              </a>
                                              <a href="#" class="btn btn-link">
                                                      <i class="ace-icon fa fa-envelope bigger-120 pink"></i>
                                                      <?=$prifile->EMAIL_ADDRESS ?>
                                              </a>
                                      </div>
                              </div>
                              <div class="col-md-9 col-xs-12">                                 
                                  <div class="row">
                                     <div class="col-md-2 hidden">
                                         <div class="form-group">
                                             <div class="input_wraps  ">
                                                <label for="image">Profile Image</label>
                                                <div class="news_image_wrap" id="news_image_wrap" onclick=" openfile_upload('profileimage')" style="background-image: url('images/');min-height: 220px;min-width: 160px">
                                                        <i class="fa fa-camera" style="left: 44% !important;top: 46% !important;"></i>
                                                       <input type="file" name="profileimage" class="hidden"  value='' id="profileimage" onchange="preview_file(event,'news_image_wrap')" style='margin-top: 0px;'>
                                                </div>

                                             </div>
                                         </div>
                                      </div>
                                     <div class="col-md-6">                                            
                                           <div class="form-group hidden ">
                                               <label for="username">User id</label>
                                               <input type="text" name="id" class="form-control" disabled="true" value="" id="username" placeholder="Enter email">
                                           </div>
                                          
                                          <div class="form-group">
                                                   <label for="exampleInputPassword1">Phone Number</label>
                                                   <input type="text" name="phone" class="form-control" value="<?=$prifile->PHONENUMBER ?>" placeholder="0700...">
                                           </div>
                                           <div class="form-group">
                                                   <label for="email">Email Address</label>
                                                   <input type="email" name="email" class="form-control" value="<?=$prifile->EMAIL_ADDRESS ?>" id="email" placeholder="">
                                           </div>
                                           <div class="form-group">
                                               <label for="status">last Name</label>
                                               <input type="text" class="form-control" id="lastname" value="<?=$prifile->LASTNAME ?>" name="lastname" placeholder="Lastname">
                                           </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="role">Role</label>
                                             <input type="text" class="form-control" id="lastname" value="<?=$prifile->ROLE ?>" >
                                         </div>

                                         <div class="form-group">
                                             <label for="exampleInputEmail1">First Name</label>
                                             <input type="text" class="form-control" id="firstname" value="<?=$prifile->FIRSTNAME ?>" name="firstname" placeholder="firstName">
                                         </div>
                                         <div class="form-group">
                                             <label for="status">Account Status</label>
                                             <input type="text" class="form-control" value="<?=$prifile->STATUS ?>"
                                         </div> 
                                           <div class="form-group">
                                             <label for="status">BRANCH</label>
                                             <input type="text" class="form-control" value="<?=$prifile->BRANCH_ID ?>"
                                         </div>
                                     </div>
                             </div>                           
                               <button class="pull-left btn btn-primary">Update</button>
                        </div>
                     </form> 
                       <?PHP } } ?>                                           
                  </div>
                  <fieldset style="display: none">
                       <legend>Change Password</legend>
                       <form>
                           <div class="col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="username" >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="password" >
                                </div>
                           </div>
                       </form>
                   </fieldset>                                           
                             
                  </div>
               </div>
          </div>
      </div>
</div>

<script>
        //validate form by setting rules
   $("#userform").validate({
        rules: {
            username: {
                required: true
            },
            password: {
                minlength: 5,
                required: true
            },
            status: {
                required: true
            },
            firstname: {
                required: true
            },
             rolename: {
                required: true
            },
            email: {
                required: true
            },
            phone: {
                required: true
            },
            lastname: {
                required: true
            },
            role:{
                required:true
            },
        },
        messages: {
            emailaddress: {
                required: "please enter your email address",
            },
            phonenumber: {
                required: "Enter your phone number",
            },
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },submitHandler:function(form){
          processform("userform","UpdateProfile","loadProfile?id=${profile.id}");
        }
      
    });  
</script>
         
			
	