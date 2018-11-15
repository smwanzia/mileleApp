



<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Staff</li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
        <div class="page-header">

                <div class="btn-group float_right  page_btn">
                    <div class="btn btn-info dash_btns btn-plus btn-xs glyphicon  glyphicon-plus" > </div>
                    <div class="btn btn-danger dash_btns  btn-xs delete-staffbtn  glyphicon glyphicon-trash" title="Add staff"> </div>
                    <div class="btn btn-success dash_btns btn-xs btn-list  glyphicon glyphicon-list" title="view staff"> </div>
                    <div class="result" style="margin-left: 155px;margin-top: -7px;font-size: 18px;background: #ece4e4;padding: 6px;display:none">
                      loading...</div>
                </div>
                <div class="hr hr12" style="margin-top:6px"><div id="loader"></div></div>
                <div class="btn-group pull-right">
                    <div class="clearfix">
                            <div class="pull-right tableTools-container"></div>
                    </div>
                </div>


                <!--display message-->
                <div class="DisplayMsg" style="display:none">
                    <div class='bs-example-modal-sm alert alert-success'><a href='#' class='close'
                         data-dismiss='alert' onclick='closeMsgBox()'>&times;</a>
                         <strong><div class="msg">sucess</div></strong>
                    </div>
                </div>
                  <!--display message-->
               


        </div><!-- /.page-header -->
        <div class="row">
            <div class="col-xs-12">
                 <div class="row">
                    <div class="col-xs-12">
                           <div  class="table-responsive staff-table" style="margin-top: -20px;">
                                <table class="table table-striped table-bordered table-hover table-full-width" id="staff-table">
                                   <thead>
                                      <th class="center">
                                              <label class="pos-rel">
                                                      <input type="checkbox" class="ace" />
                                                      <span class="lbl"></span>
                                              </label>
                                         </th>
                                         <th>Staff No</th>
                                         <th>Name</th>
                                         <th>Phone Number</th>
                                         <th>Email Address</th>
                                         <th>Role</th>
                                         <th>Gender</th>
                                     </thead>
                                    <tbody>
                                     <?php if(!empty($staff)){ foreach($staff as $row){ ?>
                                              <tr studentid="<?= $row->STAFFID ?>" title="double click to view more">
                                                     <td class="center">
                                                          <label class="pos-rel">
                                                                  <input type="checkbox" value="<?= $row->STAFFID ?>" class="ace" />
                                                                  <span class="lbl"></span>
                                                          </label>
                                                      </td>
                                                      <td><?= $row->STAFFID ?></td>
                                                      <td><?= $row->FIRSTNAME ?> <?=  $row->LASTNAME ?></td>
                                                      <td><?= $row->PHONENUMBER ?></td>
                                                      <td><?= $row->EMAILADDRESS ?></td>
                                                       <td><?= $row->ROLE ?></td>
                                                      <td><?= $row->GENDER ?></td>
                                              </tr>

                                     <?php } }?> 

                                    </tbody>
                                </table>
                            </div>

                            <!--add student form-->
                 <div class="staff-form" style="display: none;margin-top: 5px">
                         <div class="staff-form" style="display: none;margin-top: 5px">
                                        <form role="form" id='staffform' >
                                            <div class="row">
                                               <div class="col-md-12">
                                                    <div class="row">
                                                         <div class="col-md-4">
                                                                 <div class="form-group">
                                                                    <label for="exampleInputEmail1">First Name</label>
                                                                    <input type="text" name="firstname" class="form-control" id="capacity" placeholder="">
                                                                 </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Last Name</label>
                                                                     <input type="text" name="lastname" class="form-control" id="capacity" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">UserName</label>
                                                                    <input type="text" name="username" class="form-control"  placeholder="">
                                                                </div>
                                                                 <div class="form-group">
                                                                     <label for="exampleInputEmail1">Password</label>
                                                                    <input type="password" name="password" class="form-control"  placeholder="">
                                                                </div>
                                                                
                                                             
                                                            </div>
                                                            <div class="col-md-4">
                                                               <div class="form-group">
                                                                     <label for="exampleInputEmail1">Staff IdNo</label>
                                                                    <input type="text" name="staffid" class="form-control"  placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                   <label for="status">Role</label>
                                                                      <select class="form-control select2" name="role" id="status" style="width: 100%;">
                                                                                  <option selected="selected"></option>
                                                                                  <option>Active</option>
                                                                                  <option>InActive</option>
                                                                      </select>
                                                                 </div>
                                                                 
                                                                 <div class="form-group">
                                                                    <label for="exampleInputEmail1">Residence</label>
                                                                    <input type="text" name="residence" class="form-control"  placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="category">Gender</label>
                                                                     <select class="form-control select2" name="gender" id="gender" value="" style="width: 100%;">
                                                                                <option selected="selected"></option>
                                                                                  <option selected="selected">Male</option>
                                                                                    <option selected="selected">Female</option>
                                                                     </select>
                                                                </div>

                                                         </div>
                                                         <div class="col-md-4">
                                                                 <div class="form-group">
                                                                    <label for="exampleInputEmail1">Phone Number</label>
                                                                    <input type="text" name="phonenumber" class="form-control" id="" placeholder="">
                                                                 </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Alternate Phone Number</label>
                                                                    <input type="text" name="alternatephonenumber" class="form-control"  placeholder="">
                                                                 </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Email Address</label>
                                                                    <input type="email" name="emailaddress" class="form-control"  placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                      <label for="status">Status</label>
                                                                      <select class="form-control select2" name="status" id="status" style="width: 100%;">
                                                                                  <option selected="selected"></option>
                                                                                  <option>Teaching</option>
                                                                                  <option>Non Teaching</option>
                                                                      </select>
                                                                 </div>
                                                         </div>
                                                         <button type="submit" id="Submit_Student" value="" class="btn btn-primary pull-left">Save</button>
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
    
     <script>
   //submit form data
   $("#staffform").validate({
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
           
           username: {
                required: true
            },
            emailaddress: {
                required: true
            },
            gender: {
                required: true
            },
             staffid: {
                required: true
            },
             password: {
                required: true
            },
             role: {
                required: true
            },
             status: {
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
            staffid: {
                required: "please staff No is required",
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
         //processform('staffform','ManageStaff','addNewStaff','loader');
            $.ajax({
                  url:"<?php echo base_url();?>index.php/ManageStaff/addNewStaff",
                  type:"POST",
                  data:$(form).serialize(),
                  success:function(data){
                       $(".loader").hide();
                        // $(".DisplayMsg").show();
                        if(data!="success"){
                              sweetAlert({
                                  title:"Ooops!",
                                  text:data,
                                  type:"error",
                                  onClose:function(){
                                       $("#staffform")[0].reset();
                                   }
                        })
                         }else{
                                sweetAlert({
                                title:"success",
                                text:"Data successfully added",
                                type:"success",
                                onClose:function(){
                                          $.get("<?php echo base_url();?>index.php/ManageStaff/stafflist",{},function(staff){
                                              $(".main-content-inner").html(staff);

                                          })                                                                                    }

                          })

                          }
                           
                         
                      }
                })
        }
      
    }); 
      
      $(".btn-plus").click(function(){
            $(".staff-form").show();
            $(".staff-table").hide();
          
      });
      
        $(".btn-list").click(function(){
             $(".staff-form").hide();
             $(".staff-table").show();    
      });
      
      //double click to view student
      $('body').on('dblclick',"#staff-table tbody tr",function(){
          var id=$(this).attr("studentid");
          var regno="?regno="+id;
          GenericLoad("ManageStudents","loadStudentProfile","",regno);
        
      });
     
     //delete staff
     $("body").on('click',".delete-staffbtn",function(){
            var id=[];
            $(':checkbox:checked').each(function(i){
                 id[i]=$(this).val();
              })
            if(id.length===0){
                 sweetAlert("Oops...", "Select atleast one staff!", "error");
                 // alert("select atleat one checkbox");
            }else{

                 GenericDelete(id,"ManageStaff","deleteStaff","stafflist");
            }

            
     })
     
      
    //$("#example1").DataTable();
    $('#staff-table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching":true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

</script>
         
			
