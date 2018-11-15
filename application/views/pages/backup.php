

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>members</title>

        <!-- Bootstrap -->
  <?php include "include-css.php"  ?>
        
<style>
.right-bar{
  background: #efefef;
}
.right-bar li a {
  color:#000;
}
.right-bar li a:hover{
  color:#fff;
  background-color: #000;
}

.right-bar ul li{
 display: inline;
}
.dropdown-menu{
 display: none;
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
                 <div class"mycontent"  style="background:#fff;margin-top: 21px;">                     
 <div classs="main-content">
    <div class="loader" style="margin-left: 283px;margin-top: 7px;font-size: 18px;background: #ece4e4;padding: 6px; width:100px;display:none">
          loading...</div>
          <div class="col-md-6 col-md-offset-3">
             <div class="DisplayMsg" style="display:none">
                  <div class='bs-example-modal-sm alert alert-success'><a href='#' class='close'
                       data-dismiss='alert' onclick='closeMsgBox()'>&times;</a>
                       <strong><div class="msg"></div></strong>
                  </div>
              </div>
          </div>
        <div class="row">       
          <div class="col-md-10 col-sm-12 col-md-offset-1" id="Result-Center" style="margin-top:0px;margin-bottom:10px">
              <h3 style="text-align:center;font-size:20px;font-weight:bold;margin-top:0px;color:#000">Member Registration Form</h3>

            <div class="wizard">
                <div class="wizard-inner">
                  <div class="connecting-line"></div>
                     <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active">
                          <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Personal Info">
                              <span class="round-tab">
                                  1
                                <!--  <i class="glyphicon glyphicon-folder-open President"></i>-->
                                 </span>
                          </a>
                      </li>
                      <li role="presentation" class="disabled">
                          <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Next of Kin">
                           
                              <span class="round-tab">
                                  2
                                  <!--<i class="glyphicon glyphicon-pencil"></i>-->
                                 
                              </span>
                          </a>
                      </li>
                      <li role="presentation" class="disabled">
                          <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Beneficiary">
                              <span class="round-tab">
                                  3
                               <!--   <i class="glyphicon glyphicon-picture"></i>-->
                              </span>
                          </a>
                      </li>                     
                      <li role="presentation" class="disabled">
                          <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                              <span class="round-tab">
                                4  <i class="glyphicon glyphicon-ok"></i>
                              </span>
                          </a>
                      </li>
                  </ul>
              </div>

              <form role="form" action="PlaceVote" method="post">
                      <div class="tab-content">
                          <div class="tab-pane active" role="tabpanel" id="step1">
                              <h3> Personal Information</h3>
                              <div class="row">
                                  <div class="col-md-12 col-sm-6 col-xs-12">
                                
                              <div class="col-md-4">                                  
                                  <div class="form-group">
                                      <label for="status">Scheme</label>
                                       <select class="form-control select2" name="programme" required="" style="width: 100%;">
                                                 <option selected="selected"></option>
                                                 <option value="<?php echo $this->session->userdata("programmeid") ?>"><?php echo $this->session->userdata("programme") ?></option>
                                       </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="status">Scheme Type</label>
                                       <select class="form-control select2" name="programme" required="" style="width: 100%;">
                                                 <option selected="selected"></option>
                                                 <option value="<?php echo $this->session->userdata("programmeid") ?>"><?php echo $this->session->userdata("programme") ?></option>
                                       </select>
                                  </div>
                                  <div class="form-group">
                                     <label for="status">First Name</label>
                                        <select class="form-control select2" required="" name="semester" style="width: 100%;">
                                            <option selected="selected"></option>
                                            <option>Semester 1</option>
                                            <option>Semester 2</option>
                                        </select>
                                         <?php echo form_error('season', '<div class="error">', '</div>'); ?>
                                   </div>
                                    <div class="form-group">
                                          <label for="username">Last Name</label>
                                          <select class="form-control select2" required="" name="season" style="width: 100%;">
                                              <option selected="selected"></option>
                                              <option>March-Jun</option>
                                              <option>Sept-Dec</option>
                                           </select>
                                            <?php echo form_error('season', '<div class="error">', '</div>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="username">User Name</label>
                                            <select class="form-control select2" required=""name="academic_year" style="width: 100%;">
                                                 <option selected="selected"></option>
                                                 <option>2019-2020</option>
                                                 <option>2018-2019</option>
                                                  <option>2017-2018</option>
                                                  <option>2016-2017</option>
                                                  <option>2015-2016</option>
                                                  <option>2014-2015</option>
                                            </select>
                                            <?php echo form_error('academic_year', '<div class="error">', '</div>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="username">Email Address</label>
                                            <select class="form-control select2" required=""name="academic_year" style="width: 100%;">
                                                 <option selected="selected"></option>
                                                 <option>2019-2020</option>
                                                 <option>2018-2019</option>
                                                  <option>2017-2018</option>
                                                  <option>2016-2017</option>
                                                  <option>2015-2016</option>
                                                  <option>2014-2015</option>
                                            </select>
                                            <?php echo form_error('academic_year', '<div class="error">', '</div>'); ?>
                                       </div>
                                     
                                      
                                </div>
                               <div class="col-md-4">
                                  <div class="form-group">
                                       <label for="username">Date of Birth</label>
                                        <select class="form-control select2" required=""name="academic_year" style="width: 100%;">
                                             <option selected="selected"></option>
                                             <option>2019-2020</option>
                                             <option>2018-2019</option>
                                              <option>2017-2018</option>
                                              <option>2016-2017</option>
                                              <option>2015-2016</option>
                                              <option>2014-2015</option>
                                        </select>
                                        <?php echo form_error('academic_year', '<div class="error">', '</div>'); ?>
                                     </div>
                                     <div class="form-group">
                                           <label for="username">Reference</label>
                                            <select class="form-control select2" required=""name="academic_year" style="width: 100%;">
                                                 <option selected="selected"></option>
                                                 <option>Milele BBs</option>
                                                 <option>Imarika Sacco</option>
                                                  <option>Lengo Sacco</option>
                                             </select>
                                            <?php echo form_error('academic_year', '<div class="error">', '</div>'); ?>
                                     </div>
                                     <div class="form-group">
                                       <label for="status">Branch</label>
                                        <select class="form-control select2" required="" name="semester" style="width: 100%;">
                                            <option selected="selected"></option>
                                            <option>Semester 1</option>
                                            <option>Semester 2</option>
                                        </select>
                                         <?php echo form_error('season', '<div class="error">', '</div>'); ?>
                                   </div>
                                   <div class="form-group">
                                     <label for="status">National Id</label>
                                        <select class="form-control select2" required="" name="semester" style="width: 100%;">
                                            <option selected="selected"></option>
                                            <option>Semester 1</option>
                                            <option>Semester 2</option>
                                        </select>
                                         <?php echo form_error('season', '<div class="error">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                     <label for="status">County</label>
                                        <select class="form-control select2" required="" name="semester" style="width: 100%;">
                                            <option selected="selected"></option>
                                            <option>Semester 1</option>
                                            <option>Semester 2</option>
                                        </select>
                                         <?php echo form_error('season', '<div class="error">', '</div>'); ?>
                                   </div> 
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                     <label for="status">Constituency</label>
                                        <select class="form-control select2" required="" name="semester" style="width: 100%;">
                                            <option selected="selected"></option>
                                            <option>Semester 1</option>
                                            <option>Semester 2</option>
                                        </select>
                                         <?php echo form_error('season', '<div class="error">', '</div>'); ?>
                                   </div>
                                  <div class="form-group">
                                     <label for="status">Ward</label>
                                        <select class="form-control select2" required="" name="semester" style="width: 100%;">
                                            <option selected="selected"></option>
                                            <option>Semester 1</option>
                                            <option>Semester 2</option>
                                        </select>
                                         <?php echo form_error('season', '<div class="error">', '</div>'); ?>
                                   </div>
                                   <div class="form-group">
                                     <label for="status">Village</label>
                                        <select class="form-control select2" required="" name="semester" style="width: 100%;">
                                            <option selected="selected"></option>
                                            <option>Semester 1</option>
                                            <option>Semester 2</option>
                                        </select>
                                         <?php echo form_error('season', '<div class="error">', '</div>'); ?>
                                   </div>
                                  <div class="form-group">
                                     <label for="status">Registration Fee</label>
                                        <select class="form-control select2" required="" name="semester" style="width: 100%;">
                                            <option selected="selected"></option>
                                            <option>Semester 1</option>
                                            <option>Semester 2</option>
                                        </select>
                                         <?php echo form_error('season', '<div class="error">', '</div>'); ?>
                                   </div>
                                  <div class="form-group">
                                     <label for="status">Gender</label>
                                        <select class="form-control select2" required="" name="semester" style="width: 100%;">
                                            <option selected="selected"></option>
                                            <option>Semester 1</option>
                                            <option>Semester 2</option>
                                        </select>
                                         <?php echo form_error('season', '<div class="error">', '</div>'); ?>
                                   </div>
                                                                      
                                  
                                </div>
                             
                           <!--  <button class="pull-right btn btn-primary">Register</button>-->                   
                                 </div>
                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step2">
                             <h3>Next of Kin</h3>
                              <div class="row">
                                  <div class="col-md-12 col-sm-6 col-xs-12">
                                    <div class="col-md-4">
                                  <div class="form-group">
                                       <label for="username">Date of Birth</label>
                                        <select class="form-control select2" required=""name="academic_year" style="width: 100%;">
                                             <option selected="selected"></option>
                                             <option>2019-2020</option>
                                             <option>2018-2019</option>
                                              <option>2017-2018</option>
                                              <option>2016-2017</option>
                                              <option>2015-2016</option>
                                              <option>2014-2015</option>
                                        </select>
                                        <?php echo form_error('academic_year', '<div class="error">', '</div>'); ?>
                                     </div>
                                     <div class="form-group">
                                           <label for="username">Reference</label>
                                            <select class="form-control select2" required=""name="academic_year" style="width: 100%;">
                                                 <option selected="selected"></option>
                                                 <option>Milele BBs</option>
                                                 <option>Imarika Sacco</option>
                                                  <option>Lengo Sacco</option>
                                             </select>
                                            <?php echo form_error('academic_year', '<div class="error">', '</div>'); ?>
                                     </div>
                                     <div class="form-group">
                                       <label for="status">Branch</label>
                                        <select class="form-control select2" required="" name="semester" style="width: 100%;">
                                            <option selected="selected"></option>
                                            <option>Semester 1</option>
                                            <option>Semester 2</option>
                                        </select>
                                         <?php echo form_error('season', '<div class="error">', '</div>'); ?>
                                   </div>
                                   <div class="form-group">
                                     <label for="status">National Id</label>
                                        <select class="form-control select2" required="" name="semester" style="width: 100%;">
                                            <option selected="selected"></option>
                                            <option>Semester 1</option>
                                            <option>Semester 2</option>
                                        </select>
                                         <?php echo form_error('season', '<div class="error">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                     <label for="status">County</label>
                                        <select class="form-control select2" required="" name="semester" style="width: 100%;">
                                            <option selected="selected"></option>
                                            <option>Semester 1</option>
                                            <option>Semester 2</option>
                                        </select>
                                         <?php echo form_error('season', '<div class="error">', '</div>'); ?>
                                   </div> 
                                </div>
                                       
                                      
                                  </div>
                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step form-btn">Previous</button></li>
                                  <li><button type="button" class="btn btn-primary next-step2 form-btn">Next</button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step3">
                              <h3>Beneficiary</h3>
                           
                              <div class="row">
                                  <div class="col-md-12 col-sm-6 col-xs-12">
                                       
                                      
                                  </div>
                              </div>
                               <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step form-btn">Previous</button></li>
                                  <li><button type="button" class="btn btn-primary next-step3 form-btn">Next</button></li>
                              </ul>
                          </div>                        
                          <div class="tab-pane" role="tabpanel" id="complete">
                              <h3>Complete</h3>
                              <p style="font-size: 20px;">You have successfully completed all steps.</p>
                              <button type="submit" class="btn btn-primary ">Cast Your Vote <i class="fa fa-check" style="margin-left: 471px;"></i></button>
                          </div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
               </div>



                  <!-- -->


          </div>
        </div>
       </div>
  </div>
 </div>
</div>
 <footer style="position:fixed-bottom">
   <div class="text-center">
			<div class="copyright">
				&copy; 2018 <a target="_blank" href="#" title=""></a>. All Rights Reserved.
			</div>
        </div>									
    </footer>

   <?php include "include-js.php"  ?>
    <script type="text/javascript">  
            
            $(".next-step").click(function(e){
              //alert()
                e.preventDefault();           
                  var $active1 = $('.wizard .nav-tabs li.active');
                  //var $active1 = $('.wizard .nav-tabs li.active');
                   $active1.next().removeClass('disabled');
                   //go to next tab
                  $('.wizard .nav-tabs li.active').next().find('a[data-toggle="tab"]').click();
                  isValid=true;
             });
            $(".next-step2").click(function(e){
                e.preventDefault();
                //var isValid=true;                 
                var $active1 = $('.wizard .nav-tabs li.active');
                var $active1 = $('.wizard .nav-tabs li.active');
                 $active1.next().removeClass('disabled');
                 //go to next tab
                $('.wizard .nav-tabs li.active').next().find('a[data-toggle="tab"]').click();
               // isValid=true;                  
                 
               
            });
            $(".next-step3").click(function(e){
                e.preventDefault();
                //var isValid=true;         
                 var $active1 = $('.wizard .nav-tabs li.active');
                var $active1 = $('.wizard .nav-tabs li.active');
                 $active1.next().removeClass('disabled');
                 //go to next tab
                $('.wizard .nav-tabs li.active').next().find('a[data-toggle="tab"]').click();
                //isValid=true;
            });
          
            </script>
  


        <script>

                //clicking the sidebar dropdown submenus 
                $(".right-bar li a").click(function(){

                      var controller=$(this).attr("controller");
                      var method=$(this).attr("method"); 
                      var id=$(this).attr("data");
                      var data="?id="+id+'';
                      var base_url="http://localhost/UnitApp/";
                    $("#Result-Center").load(base_url+"index.php/"+controller+"/"+method+"/"+data); 
                  
                 
                 });
 
               
        </script>
        <script>
        $(document).ready(function(){
            $(".right-bar li").hover(function(){
              $(".dropdown-menu", this).slideDown(100);
            }, function(){
              $(".dropdown-menu", this).stop().slideUp(100);
            });
        })
      </script>
       <script>
          $(document).ready(function(){
              var datas="<?php echo $this->session->userdata("userid") ?>";
              var id="?id="+datas+'';
              var base_url="http://localhost/UnitApp/";
              var controllers="ManageUsers";
              var methods="loadUserProfile";
              $("#Result-Center").load(base_url+"index.php/"+controllers+"/"+methods+"/"+id); 
         })
     </script>
    </body>
</html>
