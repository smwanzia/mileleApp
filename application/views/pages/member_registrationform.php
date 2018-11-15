

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>members</title>

        <!-- Bootstrap -->
  <?php include "include-css.php"  ?>
        
<style>
.main-container h3{
  text-align:center;
  font-size:20px;
  font-weight:bold;
  margin:10px 0px 20px;
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
          <!--<div class="loader" style="margin-left: 283px;margin-top: 7px;font-size: 18px;background: #ece4e4;padding: 6px; width:100px;display:none">
                loading...
              </div>-->
          <div class="col-md-6 col-md-offset-3">
             <div class="DisplayMsg" style="display:none">
                  <div class='bs-example-modal-sm alert alert-success'><a href='#' class='close'
                       data-dismiss='alert' onclick='closeMsgBox()'>&times;</a>
                       <strong><div class="msg"></div></strong>
                  </div>
              </div>
          </div>
        <div class="row">       
          <div class="col-md-10 col-sm-12 col-md-offset-1 main-container" style="margin-top:0px;margin-bottom:10px">
              <h3 style="">Member Registration Form</h3>

             <!-- start: WIZARD FORM -->
              <form action="Members" action="<?=base_url("Members")?>" role="form" class="smart-wizard" id="form" method="post">
                  <div id="wizard" class="swMain">
                      <!-- start: WIZARD SEPS -->
                      <ul style="margin-top:-10px">
                          <li>
                              <a href="#step-1">
                                  <div class="stepNumber">
                                      1
                                  </div>
                                  <span class="stepDesc"><small>Personal Information </small></span>
                              </a>
                          </li>

                          <li>
                              <a href="#step-2">
                                  <div class="stepNumber">
                                      2
                                  </div>
                                  <span class="stepDesc"> <small> Next of Kin </small></span>
                              </a>
                          </li>

                          <li>
                              <a href="#step-3">
                                  <div class="stepNumber">
                                      3
                                  </div>
                                  <span class="stepDesc"> <small> Beneficiary </small> </span>
                              </a>
                          </li>
                         
                          <li>
                              <a href="#step-4">
                                  <div class="stepNumber">
                                      5
                                  </div>
                                  <span class="stepDesc"> <small> Complete </small> </span>
                              </a>
                          </li>

                      </ul>

                      <!-- end: WIZARD STEPS -->
                      <!-- start: WIZARD STEP 1 -->
                      <div id="step-1">
                          <div class="row">
                              <div class="col-md-12">
                                  <fieldset>
                                      <legend>Personal Information</legend>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                     Scheme <span class="symbol required"></span>
                                                  </label>
                                                  <span class="input-icon">
                                                    <!-- <input type="text" class="form-control" name="scheme_id"/>-->
                                                  <select class="select form-control selected" name="schemeid">
                                                    <?php foreach ($schemes as $scheme) { ?>
                                                    <option value="<?= $scheme->SCHEME_ID ?>"><?php echo
                                                    $scheme->SCHEME_NAME ?>                         </option>
                                                   <?php  } ?>                                                  
                                                  </select>
                                                   </span>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label class="control-label">
                                                      Scheme Type <span class="symbol required"></span>
                                                  </label>
                                                  <!--<input type="text" class="form-control" name="schemetype"/>-->
                                                  <select class="select form-control selected" name="schemetype">
                                                    <?php foreach ($scheme_type as $type) {                                                     
                                                    ?>
                                                    <option value="<?= $type->SCHEME_TYPE_ID ?>"><?= $type->SCHEME_TYPE_NAME ?></option>
                                                   <?php  } ?>
                                                    
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                               <div class="form-group">
                                                  <label class="control-label">
                                                      First Name <span class="symbol required"></span>
                                                  </label>
                                                  <input type="text" class="form-control" name="pfirstname"/>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      User Name <span class="symbol required"></span>
                                                  </label>
                                                  <span class="input-icon">
                                                     <input type="text" class="form-control" name="username"/></span>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label class="control-label">
                                                     Last Name <span class="symbol required"></span>
                                                  </label>
                                                  <input type="text" class="form-control" name="plastname"/>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label class="block">
                                                      Gender
                                                  </label>
                                                  <div class="clip-radio radio-primary">
                                                      <input type="radio" id="wz-female" name="gender" value="female">
                                                      <label for="wz-female">
                                                          Female
                                                      </label>
                                                      <input type="radio" id="wz-male" name="gender" value="male">
                                                      <label for="wz-male">
                                                          Male
                                                      </label>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      D.O.B <span class="symbol required"></span>
                                                  </label>
                                              </div>
                                              <div class="form-group">
                                                  <input type="text" value="" class="form-control" name="DOB"/>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      NationalID <span class="symbol required"></span>
                                                  </label>
                                                  <input type="text" value="" class="form-control" name="idNo"/>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      Email Adderess <span class="symbol required"></span>
                                                  </label>
                                                  <input type="text" placeholder="" class="form-control" name="pemailaddress"/>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label class="control-label">
                                                      Phone Number <span class="symbol required"></span>
                                                  </label>
                                                   <input type="text" value="" class="form-control" name="pphonenumber"/>
                                              </div>
                                          </div>

                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      Reference <span class="symbol required"></span>
                                                  </label>
                                                  <select class="form-control select2" required=""name="reference">
                                                     <option selected="selected"></option>
                                                     <option>Milele BBs</option>
                                                     <option>Imarika Sacco</option>
                                                     <option>Lengo Sacco</option>
                                                   </select>                                                
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      Choose your County
                                                  </label>
                                                  <input type="text" id="county" placeholder="select your county:" class="form-control" name="county"/>
                                                  <input type="hidden"  name="county1"/>
                                              </div>
                                          </div>
                                      </div>

                                      <p>
                                          <a href="javascript:void(0)" data-content="Your personal information is not required for unlawful purposes, but only in order to verify your membership application " data-title="Don't worry!" data-placement="top" data-toggle="popover">
                                              Why do you need my personal information?
                                          </a>
                                      </p>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                     Branch
                                                  </label>
                                                  <select  class="selected select form-control" name="branch">
                                                    <?php foreach ($branch as $branch) { ?>
                                                       <option value="<?= $branch->BRANCH_NAME ?>"><?= $branch->BRANCH_NAME ?></option>
                                                    <?php }  ?></select>
                                                </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      Constituency <span class="symbol required"></span>
                                                  </label>
                                                  <input type="text" id="constituency" placeholder="" class="form-control" name="constituency"/>
                                                  <input type="hidden"  name="constituency1"/>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      Ward <span class="symbol required"></span>
                                                  </label>
                                                  <input type="text" id="ward" placeholder="" class="form-control" name="ward"/>
                                                  <input type="hidden" id="ward1" placeholder="" class="form-control" name="ward1"/>
                                              </div>
                                          </div>
                                      </div>
                                       <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                     Village <span class="symbol required"></span>
                                                  </label>
                                                  <input type="text" placeholder="" class="form-control" name="village"/>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      Registration Fee <span class="symbol required"></span>
                                                  </label>
                                                  <input type="text" placeholder="" class="form-control" name="reg_fee"/>
                                              </div>
                                          </div>                                        
                                      </div>
                                      <div class="form-group">
                                          <button class="btn btn-primary btn-o next-step btn-wide pull-right">
                                              Next <i class="fa fa-arrow-circle-right"></i>
                                          </button>
                                      </div>
                                  </fieldset>

                              </div>
                          </div>
                      </div>
                      <!--end wizard step 1-->
                      <div id="step-2">
                          <div class="row">
                              <div class="col-md-12">
                                  <fieldset>
                                      <legend>
                                          Next of Kin
                                      </legend>

                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                     First Name<span class="symbol required"></span>
                                                  </label>
                                                  <input type="text" placeholder="first name" class="form-control" name="kin_firstname"/>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label class="control-label">
                                                      National IdNo <span class="symbol required"></span>
                                                  </label>
                                                  <input type="text" placeholder="grade scored" class="form-control" name="kin_nationalId"/>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      Phone Number:<span class="symbol required"></span>
                                                  </label>
                                                  <input type="text" placeholder="" class="form-control" name="kin_phonenumber"/>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label>
                                                      DOB<span class="symbol required"></span>
                                                  </label>
                                                  <div class="form-group">
                                                      <select class="cs-selected form-control" name="yearFrom">
                                                          <option value="">&nbsp;</option>
                                                           <option value="2018">2018</option>
                                                           <option value="2017">2017</option>
                                                          <option value="2015">2015</option>
                                                          <option value="2014">2014</option>
                                                          <option value="2013">2013</option>
                                                          <option value="2012">2012</option>
                                                          <option value="2011">2011</option>
                                                          <option value="2010">2010</option>
                                                          <option value="CT">2009</option>
                                                          <option value="DE">2008</option>
                                                          <option value="FL">2007</option>
                                                          <option value="GA">2006</option>
                                                          <option value="HI">2005</option>
                                                          <option value="ID">2004</option>
                                                          <option value="IL">2003</option>
                                                          <option value="IN">2002</option>
                                                          <option value="IA">2001</option>
                                                          <option value="KS">2000</option>
                                                          <option value="KY">1999</option>
                                                          <option value="LA">1998</option>
                                                          <option value="ME">1997</option>
                                                          <option value="MD">1996</option>
                                                          <option value="MA">1995</option>
                                                          <option value="MI">1994</option>
                                                          <option value="MN">1993</option>
                                                          <option value="MS">1992</option>
                                                          <option value="MO">1991</option>
                                                          <option value="MT">1990</option>
                                                          <option value="NE">1989</option>
                                                          <option value="NV">1988</option>
                                                          <option value="NH">1987</option>
                                                          <option value="NJ">1986 </option>
                                                          <option value="NM">1985</option>
                                                          <option value="NY">1984</option>
                                                          <option value="NC">1983</option>
                                                          <option value="ND">1982</option>
                                                          <option value="OH">1981</option>
                                                          <option value="OK">1980</option>
                                                          <option value="OR">1979</option>
                                                          <option value="PA">1978</option>
                                                          <option value="RI">1977</option>
                                                          <option value="SC">1976</option>
                                                          <option value="SD">1975</option>
                                                          <option value="TN">1974</option>
                                                          <option value="TX">1973</option>
                                                          <option value="UT">1972</option>
                                                          <option value="VT">1971</option>
                                                          <option value="VA">1970</option>
                                                          <option value="WA">1969</option>
                                                          <option value="WV">1968</option>
                                                          <option value="WI">1967</option>
                                                          <option value="WY">1966</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>                                       
                                       </div>                              
                                  </fieldset>
                                  <div class="form-group">
                                      <button class="btn btn-primary btn-o back-step btn-wide pull-left">
                                          <i class="fa fa-circle-arrow-left"></i> Back
                                      </button>
                                      <button class="btn btn-primary btn-o next-step btn-wide pull-right">
                                          Next <i class="fa fa-arrow-circle-right"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- end: WIZARD STEP 2 -->
                      <!--end wizard step 3-->
                      <div id="step-3">
                          <div class="row">
                              <div class="col-md-12">
                                  <fieldset>
                                      <legend>
                                         Beneficiary
                                      </legend>
                                       <!--add first beneficiary-->
                                      <div class="first_beneficiary">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>
                                                      First Name <span class="symbol required"></span>
                                                    </label>
                                                    <input type="text" placeholder="" class="form-control" name="ben_firstname"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Last Name<span class="symbol required"></span>
                                                    </label>
                                                </div>  
                                                <input type="text" id="" name="ben_lastname" class="form-control">
                                            </div>                                          
                                        </div>   
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone Number  <span class="symbol required"></span>
                                                    </label>
                                                </div>  
                                                <input type="text" id="" name="ben_phonenumber" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email Address <span class="symbol required"></span>
                                                    </label>
                                                </div>  
                                                <input type="email" id="" name="ben_emailaddress" class="form-control">
                                            </div>
                                        </div>
                                      </div>
                                      <!--add second beneficiary-->
                                      <div class="second_beneficiary" style="display: none">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>
                                                      First Name <span class="symbol required"></span>
                                                    </label>
                                                    <input type="text" placeholder="" class="form-control" name="firstname"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Last Name<span class="symbol required"></span>
                                                    </label>
                                                </div>  
                                                <input type="text" id="" name="lastname" class="form-control">
                                            </div>                                          
                                        </div>   
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone Number  <span class="symbol required"></span>
                                                    </label>
                                                </div>  
                                                <input type="text" id="" name="phonenumber" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email Address <span class="symbol required"></span>
                                                    </label>
                                                </div>  
                                                <input type="email" id="" name="emailaddress" class="form-control">
                                            </div>
                                        </div>
                                      </div>
                                      <!--add third beneficiary-->
                                       <div class="second_beneficiary" style="display: none">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>
                                                      First Name <span class="symbol required"></span>
                                                    </label>
                                                    <input type="text" placeholder="" class="form-control" name="firstname"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Last Name<span class="symbol required"></span>
                                                    </label>
                                                </div>  
                                                <input type="text" id="" name="lastname" class="form-control">
                                            </div>                                          
                                        </div>   
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone Number  <span class="symbol required"></span>
                                                    </label>
                                                </div>  
                                                <input type="text" id="" name="phonenumber" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email Address <span class="symbol required"></span>
                                                    </label>
                                                </div>  
                                                <input type="email" id="" name="emailaddress" class="form-control">
                                            </div>
                                        </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <button class="btn btn-primary btn-o back-step btn-wide pull-left">
                                              <i class="fa fa-circle-arrow-left"></i> Back
                                          </button>
                                          <button  action="submit" class="btn  btn-o next-step btn-primary btn-o  pull-right" >
                                              Next
                                          </button>
                                      </div>

                                  </fieldset>


                              </div>

                          </div>
                      </div>
                      <!--endwizard step -3-->  
                       <div id="step-4">
                          <div class="row">
                              <div class="col-md-12">
                                  <fieldset>
                                      <legend>
                                        Finish
                                      </legend>                                        
                                     <!-- <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Phone Number  <span class="symbol required"></span>
                                                  </label>
                                              </div>  
                                              <input type="Date" id="" name="phonenumber" class="form-control">
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Email Address <span class="symbol required"></span>
                                                  </label>
                                              </div>  
                                              <input type="Date" id="to_date" name="emailaddress" class="form-control">
                                          </div>
                                      </div>-->
                                      <h4 style="text-align: center">Success !click below button to submit your details</h4>
                                      <div id="success_msg" style="text-align: center">
                                      </div>
                                      <button  type="submit" class="btn  btn-o  btn-primary btn-o  pull-right" >
                                              Click to Submit 
                                      </button>

                                      <div class="form-group">
                                          <button class="btn btn-primary btn-o back-step btn-wide pull-left">
                                              <i class="fa fa-circle-arrow-left"></i> Back
                                          </button>
                                         <!-- <button  action="submit" class="btn  btn-o next-step btn-primary btn-o  pull-right" >
                                              Next
                                          </button>-->
                                           <button  type="submit" class="btn  btn-o btn-primary btn-o  pull-right" >
                                            Submit
                                          </button>
                                      </div>

                                  </fieldset>


                              </div>

                          </div>
                      </div>                   
                  </div>
              </form>

          </div>
        </div>
       </div>
       <div class="overlay" style="z-index: 1020;background:#d0d0d0;display: none;
          position: fixed;
          top:0%;
          left:0%;
          width:100%;
          height:100%;
          margin-left:0px;
          margin-top:0px;
          opacity: .5; ">
          <img src="<?=base_url("assets/members-assets/img/ajax-loader_1.gif")?>" style="margin-left:40%;margin-top:20%;"/>
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
    <script>
        jQuery(document).ready(function () {
            FormWizard.init();

        });
    </script>
    <script>
      $("#form").submit(function(e){
                    e.preventDefault();
                    var formdata=$(this).serialize();
                    var form_url=$(this).attr("action");
                    var form_method=$(this).attr("method").toUpperCase();
                    $.ajax({
                          url:form_url,
                          type:form_method,
                          data:formdata,
                          beforeSend:function(){
                            $(".overlay").show();

                          },
                          success:function(data){
                            $(".overlay").hide();
                               if(data=="1"){
                                    $("#success_msg").html("<div class='style="color:green"'>you have successfully registered</div>");
                                }else{
                                $("#success_msg").html("<div class='style="color:red"'>you have successfully registered</div>");                                      

                                 }
                              
                         }
                    })
        })
    </script>
    <script>
      var base_url='<?=base_url();?>';
       $(document).ready(function(){

           $('#county').autocomplete({
                source: base_url+"Home/jsonSearchCounty",               
                select: function (event, ui) {
                    $('[name=county]').val(ui.item.label);
                    $('[name=county1]').val(ui.item.county_id);
                   // $('[name=selecteddestination]').val(ui.item.dest_name) ;                    
                }
            });
           $('#constituency').autocomplete({
                source: base_url+"Home/jsonSearchConstituency?",               
                select: function (event, ui) {
                    $('[name=constituency]').val(ui.item.label); 
                    $('[name=constituency1]').val(ui.item.constituency_id) ;
                    //$('[name=HIDSH]').val(ui.item.vall) ;
                }
            });
            $('#ward').autocomplete({
                source: base_url+"Home/jsonSearchWard?",               
                select: function (event, ui) {
                    $('[name=ward]').val(ui.item.label); 
                    $('[name=ward1]').val(ui.item.ward_id) ;
                    //$('[name=HIDSH]').val(ui.item.vall) ;
                }
            });

            //load member account
            $("#member_account").click(function(){
               $(".overlay").show();             
            })
      })
    </script>
  
</body>
</html>
