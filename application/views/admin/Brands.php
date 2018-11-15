
<%@ taglib uri="http://java.sun.com/jsp/jstl/sql" prefix="sql" %>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>






                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                                <li>
                                        <i class="ace-icon fa fa-home home-icon"></i>
                                        <a href="#">Home</a>
                                </li>
                                <li class="active">Manage Products</li>
                                <li class="active">Categories</li>
                                <li class="active">Type</li>
                        </ul><!-- /.breadcrumb -->
                    </div>
                    <div class="page-content">
                            <div class="page-header">

                                    <div class="btn-group float_right page_btn">
                                        <div class="btn btn-info btn-xs dash_btns btn-add-brand glyphicon glyphicon-plus"> </div>
                                        <div class="btn btn-warning btn-xs btn-delete glyphicon glyphicon-trash"> </div>
                                        <div class="btn btn-success btn-xs  btn-list-brand glyphicon glyphicon-list" title="view brand"> </div>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <div class="clearfix">
                                                <div class="pull-right tableTools-container"></div>
                                        </div>
                                    </div>
                                
                                    <!--display message-->
                                  <div class="DisplayMsg" style="display: none;margin-top:15px">
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
                                              <!--start table-->
                                                <div  class="table-responsive brand-table">
                                                    <table class="table table-striped table-bordered table-hover table-full-width" id="brand-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Product type</th>
                                                                <th>Category</th>
                                                                <th>Action</th>
                                                             </tr>
                                                        </thead>
                                                        <tbody>
                                                              <c:forEach var="brand" items="${brands}">
                                                                    <tr>
                                                                        <td>${brand.brandname}</td>
                                                                        <td>${brand.brandname}</td>
                                                                        <td><a href="javascript:;" class='btn btn-danger btn-xs' onclick="GenericDelete(${brand.id},'DeleteBrand','LoadBrand')">
                                                                                <i class="fa fa-trash"></i></a> </td>
                                                                      </tr>
                                                               </c:forEach>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end user table-->
                                                <div class="brandform" style='display:none'>
                                                    <form role="form" id="brandform">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label for="brand">Brand Name</label>
                                                              <input type="text" class="form-control" id="brand" name="brandname" placeholder="">
                                                            </div>
                                                             <div class="form-group">
                                                                <label for="status">Category</label>
                                                                <select class="form-control select2" name="categoryid" id="categoryid" style="width: 100%;">
                                                                            <option selected="selected"></option>
                                                                            <c:forEach var="categories" items="${category}">
                                                                                <option value="${categories.id}">${categories.name}</option>
                                                                            </c:forEach>
                                                                </select>
                                                                     </div>
                                                            
                                                        </div>
                                                        <div class="box-footer">
                                                            <button type="submit" class="btn btn-primary pull-right ">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            
                                        </div>
                                     </div>
                                </div>
                            </div>
                    </div>






<script>
    
    $(function(){
        //validate form by setting rules
        $("#brandform").validate({
             rules: {
                 brandname: {
                     required: true
                 },

             },
             messages: {
                brandname: {
                     required: "please enter your brand name",
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
               SaveFormData(form,'AddBrand','LoadBrand');
             }

         });  
         
           $(".btn-add-brand ").click(function(){
                $(".brandform").show();
                $(".brand-table").hide();
           });
           
            $(".btn-list-brand").click(function(){
                $(".brandform").hide();
                $(".brand-table").show();   
             });
        
        
      
    $('#brand-table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching":true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });  
    })
    </script>
