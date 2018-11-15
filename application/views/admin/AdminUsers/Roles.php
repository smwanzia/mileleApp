
 <div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>
            <li class="active">Manage Roles</li>
    </ul><!-- /.breadcrumb -->
  </div>
      <div class="page-content">
        <div class="page-header">           
                <div class="btn-group float_right page_btn" >
                    <div class="btn btn-info dash_btns btn-add-role glyphicon glyphicon-plus"> </div>
                    <div class="btn btn-warning dash_btns btn-delete-role glyphicon glyphicon-trash"> </div>
                    <div class="btn btn-success dash_btns  btn-list-role glyphicon glyphicon-edit" title="view users"> </div>
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
                        <!-- PAGE CONTENT BEGINS -->
                         <div  class="table-responsive role-table">
                            <table class="table table-striped table-bordered table-hover table-full-width" id="role-table">
                                <thead>
                                    <th class="hidden">ID</th>
                                    <th>Role Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <c:forEach var="userrole" items="${roles}">
                                        <tr id="${userrole.id}">
                                            <td class="hidden user">${user.id}</td>
                                            <td>${userrole.rolename} </td>
                                            <td>${userrole.status}</td>
                                            <td><a href="javascript:;" id="" onclick="GenericDelete(${userrole.id},'DeleteRoles','ManageRoles')">Delete</a></td>
                                          <!--  <td><a href="#" role="${user.status}" id="${user.id}" class="edit-user">
                                                    Activate</a> <a href="#" role="${user.status}" id="${user.id}" class="edit-user">Disable</a></td>-->
                                        </tr>
                                    </c:forEach>
                                </tbody>
                             </table>
                        </div>
                         <!-- form start -->
                         <div class="roleform" style="display: none">
                                <form role="form" id="roleform">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Role Name</label>
                                            <input type="text" class="form-control" id="firstname" name="rolename" placeholder="Role name">
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Status</label>
                                                 <select class="form-control select2" name="status" style="width: 100%;">
                                                    <option selected="selected">Active</option>
                                                    <option>Active</option>
                                                    <option>Disabled</option>
                                                 </select>
                                            </div>
                                        </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
                                             <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                         </div>

                                    </div>

                                </form>
                         </div>
                        
                    </div>
                 </div>
            </div>
        </div>
    </div>


                                   
                                    
<script type="text/javascript">          

    $(".btn-add-role").click(function(e){
        e.preventDefault();
        $(".roleform").show();
        $(".role-table").hide();
    })
    $(".btn-list-role ").click(function(){
        $(".roleform").hide();
        $(".role-table").show();

    })                  
    //submit role form
   $("#roleform").validate({
      rules: {
          status: {
              required: true
          },

         rolename: {
              required: true
          },

      },
      messages: {
        status: {
              required: "please select status",
          },
         rolename: {
              required: "please enter roles name",
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
            SaveFormData(form,'AddRoles','ManageRoles');
          }

   }); 
   //end submitting form             
  $('#role-table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching":true,
      "ordering": true,
      "info": true,
      "autoWidth": false      
    });
 </script>                                    
           
