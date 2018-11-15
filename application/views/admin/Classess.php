



<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Classess</li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
        <div class="page-header">

               <div class="btn-group float_right page_btn">
                    <div class="btn btn-info dash_btns btn-plus btn-xs glyphicon  glyphicon-plus" > </div>
                    <div class="btn btn-warning dash_btns btn-delete hidden glyphicon glyphicon-trash" title="Add student"> </div>
                    <div class="btn btn-success dash_btns btn-xs btn-list hidden glyphicon glyphicon-list" title="view student"> </div>
                </div>
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
                           <div  class="table-responsive student-table">
                                <table class="table table-striped table-bordered table-hover table-full-width" id="subject-table">
                                   <thead>
                                       <th>Class Id</th>
                                       <th>Class Name</th>
                                       <th>Stream</th>
                                       <th>Class Teacher</th>
                                   </thead>
                                    <tbody>
                                        <c:forEach var="students" begin="0" items="${requestScope.studentList}">
                                            <tr id="${students.registration_number}" title="double click to view more">
                                                <td></td>
                                                <td> </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </c:forEach>
                                    </tbody>
                                </table>
                            </div>

                            <!--add student form-->
                             <div class="class" style="display: none;margin-top: 5px">
                                        <form role="form" id='studentform' >
                                            <div class="row">
                                               <div class="col-md-12">
                                                    <div class="row">
                                                         <div class="col-md-6">
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
                                                               <div class="form-group">
                                                                    <label for="category">Gender</label>
                                                                     <select class="form-control select2" name="gender" id="category" value="" style="width: 100%;">
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
                                                         <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Parent Name</label>
                                                                    <input type="text" name="parentname" class="form-control"  placeholder="">
                                                                 </div>

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
                                                                    <label for="exampleInputEmail1">Residence</label>
                                                                    <input type="text" name="residence" class="form-control"  placeholder="">
                                                                </div>
                                                              <div class="form-group">
                                                                    <label for="exampleInputEmail1">Class</label>
                                                                    <input type="text" name="class" class="form-control"  placeholder="">
                                                                </div>
                                                               <div class="form-group">
                                                                    <label for="exampleInputEmail1">Stream</label>
                                                                    <input type="text" name="stream" class="form-control"  placeholder="">
                                                                </div>
                                                          </div>
                                                      <button type="submit" id="submit_product" value="" class="btn btn-primary pull-left">Save</button>

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
                required: "please enter product name",
            },
           lastname: {
                required: "please enter product price",
            },
            regno: {
                required: "please select product image",
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
          processform('studentform','CreateStudentServlet','Students');
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
      
      //double click to view customer
      $('body').on('dblclick',"#student-table tbody tr",function(){
          var id=$(this).attr("id");
          var data="id="+id+'';
          GenericLoad('FetchCustomerById?'+data);
        /*  $.getJSON("selectCustomerById",data,function(result){
              console.log(result);
              var msg = result;
              $.each(msg, function() {
                  alert(msg)
                   $("#fax").val(msg.fax);
                   $("#company").val(msg.company);
                   $("#firstname").prop("value",msg.firstname);
                   $("#lastname").val(msg.lastname);
                   $("#homeaddress").prop("value",msg.homeaddress);
                   $("#phonenumber").val(msg.phonenumber);
                   $("#emailaddress").val(msg.emailaddress);
                   $("#methodofcontact").val(msg.preferredmethodofcontact);
                  });
            });*/
           $(".student-table").hide();
           $(".student-form").fadeIn();
         // GenericLoad(''+data);
      });
     
    
      
      
    //$("#example1").DataTable();
    $('#subject-table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching":true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

</script>
         
			
	