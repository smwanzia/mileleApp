 
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
                        </ul><!-- /.breadcrumb -->
                    </div>
                    <div class="page-content">
                            <div class="page-header">
                                    <div class="btn-group float_right page_btn">
                                        <div class="btn btn-info dash_btns hidden Add_Product glyphicon glyphicon-plus" title="add product"> </div>
                                        <a href="javascript:;" class="btn btn-warning dash_btns delet_product hidden glyphicon glyphicon-trash" onclick="genericSelect()" > </a>
                                        <div class="btn btn-success dash_btns list_product glyphicon glyphicon-list" onclick="GenericLoad('LoadProducts')" title="view product"> </div>
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
                                              <!-- form start -->
                                                        <div class="updateproductform" style="margin-top: 40px">
                                                          <form role="form"  id='updateproductform' >
                                                            <div class="row">
                                                                      <div class="col-md-4 center">
                                                                            <span class="profile-picture">
                                                                                   <div class="input_wraps">
                                                                                        <label for="image">Product Image</label>
                                                                                        <div class="news_image_wrap" id="news_image_wrap" onclick=" openfile_upload('productimage')" style="background-image: url('images/ProductImages/${prod.image}')">
                                                                                          <i class="fa fa-camera  product_camera"></i>
                                                                                         <input type="file" name="productimage" class="hidden"   value='${prod.image}' id="productimage" onchange="preview_file(event,'news_image_wrap')" style='margin-top: 0px;'>
                                                                                        </div>
                                                                                    </div>
                                                                                <!-- <div  class="news_image_wrap" id="news_image_wra" onclick=" openfile_upload('profileimage')" style="background-image: url('images/');min-height: 220px;min-width: 160px">
                                                                                          <i class="fa fa-camera" style="left: 44% !important;top: 46% !important;"></i>
                                                                                         <input type="file" name="profileimage" class="hidden"  value='' id="profileimage" onchange="preview_file(event,'news_image_wrap')" style='margin-top: 0px;'>
                                                                                  </div>
                                                                                    <img id="avatar" class="editable img-responsive hidden" alt="Alex's Avatar" src="assets/admin/images/avatars/profile-pic.jpg" />
                                                                                -->     
                                                                            </span>

                                                                            <div class="space-4"></div>

                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="row">
                                                                                     <div class="col-md-6">
                                                                                         <input type="text" name="id"  class="form-control hidden" value="${prod.id}" id="title" placeholder="">

                                                                                            <div class="form-group">
                                                                                                <label for="exampleInputEmail1">Product Title</label>
                                                                                                <input type="text" name="productname"  class="form-control" value="${prod.name}" id="title" placeholder="">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                              <label for="exampleInputPassword1">Product Description</label>
                                                                                              <input type="text" name="productdescription" class="form-control" value="${prod.description}" id="description" placeholder="">
                                                                                            </div>
                                                                                             <div class="form-group">
                                                                                                <label for="exampleInputEmail1">Capacity/Size</label>
                                                                                                <input type="text" name="productcapacity" class="form-control" value="${prod.capacity}" id="capacity" placeholder="18*20">
                                                                                             </div>
                                                                                            <div class="form-group">
                                                                                                <label for="category">Category</label>
                                                                                                 <select class="form-control select2" name="productcategory"  id="category"  style="width: 100%;">

                                                                                                            <c:forEach var="categories" items="${category}">
                                                                                                                <option value="${prod.categoryid}">${categories.name}</option>
                                                                                                            </c:forEach>
                                                                                                  </select>
                                                                                            </div>
                                                                                       
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label for="exampleInputEmail1">Quantity</label>
                                                                                                <input type="number" name="quantity" class="form-control" value="${prod.quantity}" id="quantity" placeholder="">
                                                                                             </div>

                                                                                            <div class="form-group">
                                                                                                <label for="exampleInputEmail1">Product Price</label>
                                                                                                <input type="text" name="productprice" class="form-control" value="${prod.price}" id="price" placeholder="">
                                                                                            </div>

                                                                                             <div class="form-group hidden">
                                                                                                <label for="exampleInputEmail1">Manufacturer</label>
                                                                                                <input type="text" name="manufacturer" class="form-control" value="${prod.manufacturer}" id="manufacturer" placeholder="">
                                                                                             </div>
                                                                                              <div class="form-group">
                                                                                                    <label for="exampleInputPassword1">Product Type/Brand</label>
                                                                                                    <select class="form-control select2" name="productbrand"  style="width: 100%;">
                                                                                                                 <c:forEach var="brand" items="${brand}">
                                                                                                                    <option value="${prod.type}">${brand.brandname}</option>
                                                                                                                 </c:forEach>
                                                                                                      </select>
                                                                                             </div>
                                                                                             
                                                                                            <div class="form-group">
                                                                                                <label for="status">Product Status</label>
                                                                                                <select class="form-control select2" name="productstatus" value="${prod.status}" id="status" style="width: 100%;">
                                                                                                            <option selected="selected"></option>
                                                                                                            <option>Enabled</option>
                                                                                                            <option>Disabled</option>
                                                                                                </select>
                                                                                            </div>

                                                                                     </div>
                                                                                

                                                                            </div>
                                                                                <button type="submit" id="submit_product" value="" class="btn btn-primary pull-left">Update</button>
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
  $(function () {
      
     
    //submit form data
   $("#updateproductform").validate({
        rules: {
           productname: {
                required: true
            },
            
           
            productstatus: {
                required: true
            },
             productprice: {
                required: true
            },
           
            productimage: {
                required: true
            },
            productcategory: {
                required: true
            },
             
        },
        messages: {
           productname: {
                required: "please enter product name",
            },
            productprice: {
                required: "please enter product price",
            },
             productimage: {
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
          processform('updateproductform','UpdateProduct','LoadProducts');
        }
      
    }); 
  
  
  });
</script>