



<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Students</li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
    <div class="page-header">
        <div class="btn-group float_right page_btn">
              <div class="btn btn-info dash_btns btn-plus btn-xs glyphicon  glyphicon-plus" > </div>
                <div class="btn btn-danger dash_btns  btn-xs delete-studentbtn  glyphicon glyphicon-trash" title="Add student"> </div>
                <div class="btn btn-success dash_btns btn-xs btn-list  glyphicon glyphicon-list" title="view student"> </div>
            </div>
            <div class="hr hr12" style="margin-top:6px"></div>
            <div class="btn-group pull-right">
                <div class="clearfix">
                        <div class="pull-right tableTools-container"></div>
                </div>
            </div>


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
                           <div  class="table-responsive student-table" style="margin-top: -20px;">
                                <table class="table table-striped table-bordered table-hover table-full-width" id="student-table">
                                   <thead>
                                      <th class="center">
                                              <label class="pos-rel">
                                                      <input type="checkbox" class="ace" />
                                                      <span class="lbl"></span>
                                              </label>
                                       </th>
                                       <th>Reg Number</th>
                                       <th>Student Name</th>
                                       <th>Class</th>
                                       <th>Stream</th>
                                       <th>Gender</th>
                                     </thead>
                                    <tbody>
                                     <?php if(!empty($student)){ foreach($student as $row){ ?>

                                            <tr studentid="<?= $row->STUDENT_REGNO ?>" title="double click to view more">
                                                     <td class="center">
                                                          <label class="pos-rel">
                                                                  <input type="checkbox" value="<?= $row->STUDENT_REGNO ?>" class="ace" />
                                                                  <span class="lbl"></span>
                                                          </label>
                                                      </td>
                                                      <td><?= $row->STUDENT_REGNO ?></td>
                                                      <td><?= $row->FIRSTNAME ?> <?=  $row->LASTNAME ?></td>
                                                      <td><?= $row->CLASS ?></td>
                                                      <td><?= $row->STREAM ?></td>
                                                      <td><?= $row->GENDER ?></td>
                                             </tr>

                                     <?php } }?> 

                                    </tbody>
                                </table>
                            </div>

                            <!--add student form-->
                             <div class="student-form" style="display: none;margin-top: -28px">
                                        <form role="form" id='studentform'>
                                            <div class="row">
                                               <div class="col-md-12">
                                                    <div class="row">
                                                      <div class="col-md-12">
                                                        <h3>Student Info</h3>
                                                         <div class="col-md-3">
                                                                 <div class="form-group">
                                                                    <label for="exampleInputEmail1">Registration Number</label>
                                                                    <input type="text" name="regno"  class="form-control" value="" id="title" placeholder="">
                                                                </div>

                                                                 <div class="form-group">
                                                                    <label for="exampleInputEmail1">First Name</label>
                                                                    <input type="text" name="firstname" class="form-control" id="capacity" placeholder="">
                                                                 </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Last Name</label>
                                                                     <input type="text" name="lastname" class="form-control" id="capacity" placeholder="">
                                                                </div>
                                                              
                                                         </div>
                                                         <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Parent Name</label>
                                                                    <input type="text" name="parentname" class="form-control"  placeholder="">
                                                                 </div>

                                                                 <div class="form-group">
                                                                    <label for="exampleInputEmail1">Phone Number</label>
                                                                    <input type="text" name="phonenumber" class="form-control" id="" placeholder="">
                                                                 </div>
                                                                  <div class="form-group">
                                                                    <label for="exampleInputEmail1">Residence</label>
                                                                    <input type="text" name="residence" class="form-control"  placeholder="">
                                                                  </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                             <div class="form-group">
                                                                    <label for="category">Gender</label>
                                                                     <select class="form-control select2" name="gender" id="gender" value="" style="width: 100%;">
                                                                                <option selected="selected"></option>
                                                                                  <option selected="selected">Male</option>
                                                                                    <option selected="selected">Female</option>
                                                                     </select>
                                                                </div>
                                                                <div class="form-group">
                                                                      <label for="status">Status</label>
                                                                      <select class="form-control select2" name="status" id="status" style="width: 100%;">
                                                                                  <option selected="selected"></option>
                                                                                  <option>Active</option>
                                                                                  <option>InActive</option>
                                                                      </select>
                                                                 </div>
                                                             </div>
                                                             <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Alternate Phone Number</label>
                                                                    <input type="text" name="alternatephonenumber" class="form-control"  placeholder="">
                                                                 </div>
                                                                 <div class="form-group">
                                                                    <label for="exampleInputEmail1">Email Address</label>
                                                                    <input type="email" name="emailaddress" class="form-control"  placeholder="">
                                                                  </div>
                                                              </div>
                                                        </div>
                                                          <div class="col-md-12">
                                                            <h3>Admission</h3>

                                                              <div class="col-md-6">
                                                                  <div class="form-group">
                                                                      <label for="exampleInputEmail1">Class</label>
                                                                      <select class="form-control selected " name=classid>
                                                                        <option><!--select student class--></option>
                                                                         <?php if(!empty($class)){ foreach($class as $row){  ?>
                                                                          <option value=" <?= $row->CLASSLISTID ?>"><?= $row->CLASS ?></option>
                                                                           <?php } }?> 
                                                                       </select>

                                                                  </div>
                                                                  <div class="form-group">
                                                                      <label for="exampleInputEmail1">Stream</label>
                                                                        <select class="form-control selected " name=streamid>
                                                                           <option><!--select student stream--></option>
                                                                         <?php if(!empty($stream)){ foreach($stream as $row){  ?>
                                                                          <option value=" <?= $row->STREAMID ?>"><?= $row->STREAM ?></option>
                                                                           <?php } }?> 
                                                                       </select>
                                                                    
                                                                  </div>
                                                             </div>
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                      <label for="exampleInputEmail1">KCPE IndexNo</label>
                                                                      <input type="text" name="indexno" class="form-control"  placeholder="">
                                                                  </div>
                                                                 <div class="form-group">
                                                                        <label for="exampleInputEmail1">KCPE marks</label>
                                                                        <input type="text" name="kcpemarks" class="form-control"  placeholder="">
                                                                 </div>
                                                             </div>
                                                          </div>
                                                           <div class="col-md-12">
                                                            <h3>Subject Registration</h3>
                                                               <?php if(!empty($subject)){ foreach($subject as $row){ ?>
                                                                     <div class="col-md-3">
                                                                         <div class="form-group">
                                                                            <div class="form-group">
                                                                                <div class="checkbox clip-check check-primary checkbox-inline">
                                                                                    <input type="checkbox" id="" name="subjects[]" value="<?= $row->SUBJECTID ?>" style="width:19px">
                                                                                    <label for="checkbox18">
                                                                                        <div class="text-dark">
                                                                                         <?= $row->SUBJECTNAME ?></div>
                                                                                    </label>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                   </div>
                                                                <?php } }?> 
                                                                  
                                                            </div>
                                                      <button type="submit" id="" value="" class="btn btn-primary pull-rright">Save</button>
                                                      <button type="submit" id="Update_Student" value="" class="btn btn-primary pull-left" style='display:none'>Update</button>

                                                </div>

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
    
     <script>
   //submit form data
   $("#studentform").validate({
        rules: {
           firstname: {
                required: true
            },
            lastname: {
                required: true
            },
            phonenumber: {
                required: true
            },
             status: {
              required: true
            },
            classid: {
              required: true
            },
            streamid: {
              required: true
            },
            parentname: {
                required: true
            },
            emailaddress: {
                required: true
            },
              gender: {
                required: true
            },
             regno: {
                required: true
            },
             
        },
        messages: {
          firstname: {
                required: "please your firstname is required",
            },
           lastname: {
                required: "please lastname is required",
            },
            regno: {
                required: "please reg no is required",
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
         //processform('studentform','ManageStudents','AddStudent','studentlist');
                    var formdata=$("#studentform").serialize();
                   // var form_url=$(this).attr("action");
                  $.ajax({
                       type: "POST",
                       url:"<?php echo base_url();?>index.php/ManageStudents/AddStudent",
                       data:formdata,
                      success:function(data){                      
                           sweetAlert({
                              title:"success",
                              text:data,
                              type:"success",
                              onClose:function(){
                                      $.get("<?php echo base_url();?>index.php/ManageStudents/studentlist",{},function(user){
                                          $(".main-content-inner").html(user);

                                      })
                                 
                               }
                          })

                      
                        }
              })
        }
      
    }); 
      
      $(".btn-plus").click(function(){
            $(".student-form").show();
            $(".student-table").hide();
          
      });
      
        $(".btn-list").click(function(){
             $(".student-form").hide();
             $(".student-table").show();    
      });
      
      //double click to view student
      $('body').on('dblclick',"#student-table tbody tr",function(){
          var id=$(this).attr("studentid");
          var regno="?regno="+id;
          GenericLoad("ManageStudents","loadStudentProfile","",regno);
        
      });
     
     //delete student
     $("body").on('click',".delete-studentbtn",function(){
            var id=[];
            $(':checkbox:checked').each(function(i){
                 id[i]=$(this).val();
              })
            if(id.length===0){
               sweetAlert("Oops...", "Select atleast one checkbox!", "error");
                  //alert("select atleat one checkbox");
            }else{
                 //GenericDelete(id,"ManageStudents","deleteStudent","studentlist");
                  $.ajax({
                       type: "POST",
                       url:"<?php echo base_url();?>index.php/ManageStudents/deleteStudent",
                       data:{id:id},
                      success:function(data){                      
                           sweetAlert({
                              title:"success",
                              text:data,
                              type:"success",
                              onClose:function(){
                                      $.get("<?php echo base_url();?>index.php/ManageStudents/studentlist",{},function(user){
                                          $(".main-content-inner").html(user);

                                      })
                                 
                               }
                          })

                      
                        }
              })
            }

            
     });
     
      
    //$("#example1").DataTable();
    $('#student-table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching":true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

</script>
         
	