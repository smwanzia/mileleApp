

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
<ul class="breadcrumb">
        <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Member</a>
        </li>
        <li class="active">Member Profile</li>
</ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
    <div class="page-header">

            <div class="btn-group float_right page_btn">
                <div class="btn btn-info dash_btns btn-plus btn-xs glyphicon  glyphicon-plus" > </div>
                <div class="btn btn-danger dash_btns  hidden btn-delete btn-xs  glyphicon glyphicon-trash" title="Add student"> </div>
                <div class="btn btn-success dash_btns btn-xs btn-list  glyphicon glyphicon-list" title="view student"> </div>
            </div>
            <div class="hr hr12" style="margin-top:6px"></div>            
            <!--display message-->
            <div class="DisplayMsg" style="display:none">
                <div class='bs-example-modal-sm alert alert-success'><a href='#' class='close'
                     data-dismiss='alert' onclick='closeMsgBox()'>&times;</a>
                     <strong><div class="msg"></div></strong>
                </div>
            </div>
    </div><!-- /.page-header -->
    <div class="row">
        <div class="col-xs-12">
             <div class="row">
                <div class="col-xs-12">
                  <!-- form start -->
                    <?php  if(!empty($profile)) {
                              foreach ($profile as $profile) { ?>                    
                  <div id="user-profile-1" class="user-profile row">
                        <div class="col-xs-12 col-sm-3 center">
                                <div>
                                    <span class="profile-picture hidden">
                                            <img id="avatar" class="editable img-responsive" alt="${customerdetails.username}" src="assets/admin/images/avatars/kemripic.jpg" />
                                    </span>
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
                                                            <span class="white"><?php echo $profile->USERNAME ?></span>
                                                    </a>
          
                                            </div>
                                    </div>
                                </div>
                                <div class="space-6"></div>
                                <div class="profile-contact-info">
                                    <div class="profile-contact-links align-left">
                                           <a href="#" class="btn btn-link">
                                                    <i class="ace-icon fa fa-envelope bigger-120 pink"></i>
                                                    Send a message
                                            </a>
                                            <a href="#" class="btn btn-link">
                                                    <i class="ace-icon fa fa-globe bigger-125 blue"></i>
                                                    <?php echo $profile->EMAIL_ADDRESS ?>
                                            </a>
                                             <a href="#" class="btn btn-link">
                                                    <i class="ace-icon fa fa-phone-square bigger-125 blue"></i>
                                                   <?php echo $profile->PHONE  ?>
                                            </a>
                                             
                                    </div>

                                        <div class="space-6"></div>
                                    </div>
                                      <div class="profile-contact-info">
                                    <div class="profile-contact-links align-left">
                                           
                                            <a href="#" class="btn btn-link">
                                                    <i class="ace-icon fa fa-globe bigger-125 blue"></i>
                                                    <?php echo 'Date Registered :'.$profile->DATE_REGISTERED ?>
                                            </a>
                                             <a href="#" class="btn btn-link">
                                                    <i class="ace-icon fa fa-phone-square bigger-125 blue"></i>
                                                   <?php echo 'Registration Fee :'.$profile->REGISTRATION_FEE  ?>
                                            </a>
                                             <a href="#" class="btn btn-link">
                                                    <i class="ace-icon fa fa-phone-square bigger-125 blue"></i>
                                                   <?php echo 'Fee status :UnPaid'  ?>
                                            </a>
                                             
                                    </div>

                                        <div class="space-6"></div>
                                    </div>

                                <div class="hr hr12 dotted"></div>
                                 <div class="hr hr16 dotted"></div>
                          </div>

                          <div class="col-xs-12 col-sm-9">
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
                                                      <input type="text" name="email" value="<?php//echo $profile->WARD_NAME ?>" class="form-control" id="phone" placeholder="">
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
                                            

                                           </div>                                        



                                      </div>
                                      <button class="pull-right btn btn-primary btn-sm">Update</button>
                                  </form>
                                  <?php }  } ?>
                                            <!--end php form-->
                              </div>
                               <div class="space-20"></div>
                                    <div class="widget-box transparent">
                                        <div class="widget-header widget-header-small">
                                                <h4 class="widget-title blue smaller">
                                                        <i class="ace-icon fa fa-rss orange"></i>
                                                        Next of Kin Information
                                                </h4>

                                                <div class="widget-toolbar action-buttons">
                                                        <a href="#" data-action="reload">
                                                                <i class="ace-icon fa fa-refresh blue"></i>
                                                        </a>
&nbsp;
                                                        <a href="#" class="pink">
                                                                <i class="ace-icon fa fa-trash-o"></i>
                                                        </a>
                                                </div>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-main padding-8">
                                                <div id="profile-feed-1" class="profile-feed">
                                                    <div class="profile-activity clearfix">
                                                         <div  class="table-responsive order-table">
                                                            <table class="table table-striped table-bordered table-hover table-full-width" id="table">
                                                                  <thead>                               
                                                                      <th>Name</th>
                                                                      <th>Phone Number</th>
                                                                      <th>National Id</th>
                                                                      <th>Email Address</th>

                                                                  </thead>
                                                                  <tbody>
                                                                     <?php if(!empty($profile)) { foreach ($kin as $value) { ?>
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
                                                        </div>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr hr2 hr-double"></div>
                                    <div class="space-6"></div>
                                    <div class="center">
                                        <button type="button" class="btn btn-sm btn-primary btn-white btn-round customer-button" id="${invoiceid}">
                                                <i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
                                                <span class="bigger-110">View more Student details</span>

                                                <i class="icon-on-right ace-icon fa fa-arrow-right"></i>
                                        </button>
                                    </div>
                            </div>
                        </div>
                        <script>
                            $(function(){
                                $(".customer-button").click(function(){
                                    var invoiceid="16";
                                     var data="id="+invoiceid+'';
                                    // alert(data)
                                   // alert(invoiceid)
                                    GenericLoad('SelectInvoiceDetailsByInvoiceNo?'+data);
                                 })
                            })
                        </script>
                      
                      
                     </div>
                  </div>
             </div>
        </div>
    </div>
</div>



