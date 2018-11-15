 
<%@ taglib uri="http://java.sun.com/jsp/jstl/sql" prefix="sql" %>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>

<style>
    .checkall{
       height: 17px;
       top: 5px;
       width: 30px;
       position:absolute;
    }
    .checkboxes{
        position:absolute;
        //opacity: 1;
        opacity: 3;
        width: 30px;
        height: 17px;
     
      
    }
    
  
   
</style>
    
    <script>
           function isNumber(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
                        }
    </script>
    
    
    
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
                            <div class="page-header" style="border-bottom: 1px dotted #E2E2E2;">
                               
                                    <div class="btn-group float_right page_btn">
                                        <div class="btn btn-xs btn-info dash_btns  Add_Product glyphicon glyphicon-plus"> </div>
                                        <a href="javascript:;" class="btn btn-xs btn-warning dash_btns delet_product glyphicon glyphicon-trash" onclick="genericSelect()" > </a>
                                        <div class="btn  btn-xs btn-success dash_btns list_product glyphicon glyphicon-list" title="view product"> </div>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <div class="clearfix">
                                                <div class="pull-right tableTools-container"></div>
                                        </div>
                                    </div>
                                  <!--display message-->
                                  <div class="DisplayMsg" style="display: none;margin-top:15px">
                                        <div class='bs-example-modal-sm alert alert-success alert-block'><a href='#' class='close'
                                            data-dismiss='alert' onclick='closeMsgBox()'>&times;</a>
                                            <strong><div class="msg"></div></strong>
                                        </div>
                                  </div>
                                
                            </div><!-- /.page-header -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                            <!-- PAGE CONTENT BEGINS -->
                                             <!--start table-->
                                            <div  class="table-responsive product-table">
                                                <table class="table table-striped table-bordered table-hover table-full-width" id="product_table">
                                                    <thead>
                                                        <th class="center">
                                                                <label class="pos-rel">
                                                                        <input type="checkbox" class="ace" />
                                                                        <span class="lbl"></span>
                                                                </label>
                                                         </th>
                                                        <th>Image</th>
                                                        <th>Title</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                        <th>Category</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </thead>
                                                    <tbody>
                                                         <c:forEach var="products" items="${product}">
                                                            <tr title="double click to update products" id="${products.id}">
                                                               <td class="center">
                                                                        <label class="pos-rel">
                                                                                <input type="checkbox" class="ace" />
                                                                                <span class="lbl"></span>
                                                                        </label>
                                                                </td>
                                                                <td><image src="images/ProductImages/${products.image}" style="width:21px"/></td>
                                                                <td>${products.name}</td>
                                                                <td>${products.quantity}</td>
                                                                <td>${products.price}</td>
                                                                <td>${products.categoryid}</td>
                                                                <td>${products.status}</td>
                                                                <td><a href="javascript:;" id="delete_user" onclick="GenericDelete(${products.id},'DeleteProduct','LoadProducts')" 
                                                                       class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a></td>
                                                            </tr>
                                                        </c:forEach>
                                                     </tbody>
                                                </table>
                                        </div>
                                        <!--end user table-->
                                         <!-- form start -->
                                        <div class="productform" style="display: none;margin-top: 5px">
                                          <form role="form" id='productform' >
                                              <div class="row">
                                                   <div class="col-md-4 center">
                                                            <span class="profile-picture">
                                                                 <div class="input_wraps">
                                                                      <label for="image">Select Product Image</label>
                                                                  <div class="news_image_wrap" id="news_image_wrap" onclick=" openfile_upload('productimage')">
                                                                          <i class="fa fa-camera product_camera" ></i>
                                                                       <input type="file" name="productimage" class="hidden"  id="productimage" style="display: none;" title="click to select image" onchange="preview_file(event,'news_image_wrap')">
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
                                                                    <div class="form-group hidden ">
                                                                        <label for="exampleInputFile"> Product Image</label>
                                                                        <input type="file" name="productimage" id="">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Product Title</label>
                                                                        <input type="text" name="productname"  class="form-control" value="" id="title" placeholder="">
                                                                    </div>
                                                                    
                                                                     <div class="form-group">
                                                                        <label for="exampleInputEmail1">Capacity/Size</label>
                                                                        <input type="text" name="productcapacity" class="form-control" id="capacity" placeholder="18 x 20">
                                                                     </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputPassword1">Product Type</label>
                                                                        <select class="form-control select2" name="productbrand" style="width: 100%;">
                                                                                    <option selected="selected">select brand</option>
                                                                                    <c:forEach var="brand" items="${brands}">
                                                                                        <option>${brand.brandname}</option>
                                                                                     </c:forEach>
                                                                          </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        
                                                                      <label for="exampleInputPassword1">Product Description</label>
                                                                      <textarea type="text" name="productdescription" class="form-control" id="description" rows="5" placeholder=""></textarea>
                                                                      <!--<input type="text" name="productdescription" class="form-control" id="description" placeholder="">-->
                                                                    </div>

                                                            </div>
                                                             <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Quantity</label>
                                                                        <input type="number" name="quantity" class="form-control" id="quantity" placeholder="">
                                                                     </div>

                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Product Price</label>
                                                                        <input type="text" name="productprice" class="form-control" onkeypress="return isNumber(event)" id="price" placeholder="0.00">
                                                                    </div>

                                                                     <div class="form-group hidden">
                                                                        <label for="exampleInputEmail1">Manufacturer</label>
                                                                        <input type="text" name="manufacturer" class="form-control" id="manufacturer" placeholder="">
                                                                     </div>
                                                                   <div class="form-group">
                                                                        <label for="category">Category</label>
                                                                         <select class="form-control select2" name="productcategory" id="category" value="" style="width: 100%;">
                                                                                    <option selected="selected"></option>
                                                                                    <c:forEach var="categories" items="${category}">
                                                                                        <option>${categories.name}</option>
                                                                                    </c:forEach>
                                                                          </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                          <label for="status">Product Status</label>
                                                                          <select class="form-control select2" name="productstatus" id="status" style="width: 100%;">
                                                                                      <option selected="selected"></option>
                                                                                      <option>Enabled</option>
                                                                                      <option>Disabled</option>
                                                                          </select>
                                                                     </div>
                                                                  
                                                                </div>
                                                          <button type="submit" id="submit_product" value="" class="btn btn-primary pull-left">Save</button>
                                                        
                                                    </div>

                                                </div>
                                             </form>
                                        </div>
                                       </div>
                                </div>
                             </div>
                                                  
                                                  
                                                  
                                                   <!-- <div class="col-md-6">
                                                           <div class="form-group">
                                                               <div class="input_wraps">
                                                                      <label for="image">Product Image</label>
                                                                  <div class="news_image_wrap" id="news_image_wrap" onclick=" openfile_upload('productimage')">
                                                                          <i class="fa fa-camera product_camera" ></i>
                                                                       <input type="file" name="productimage" class="hidden"  id="productimage" style="display: none;" title="click to select image" onchange="preview_file(event,'news_image_wrap')">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="form-group  ">
                                                                <label for="exampleInputFile"> Product Image</label>
                                                                <input type="file" name="productimage" id="">
                                                            </div>
                                                            

                                                    </div>-->
                                     
  

<script>
    
     $(".Add_Product").click(function(){
          $(".productform").show();
          $(".product-table").hide();
          $(".productform")[0].reset();
          
      });
        $(".list_product").click(function(){
           $(".productform").hide();
           $(".product-table").show();    
      });
      
         
      
    //submit form data
   $("#productform").validate({
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
          processform('productform','AddProduct','LoadProducts');
        }
      
    }); 
    
     //double click to view product
      $('body').on('dblclick',"#product_table tbody tr",function(e){
          e.preventDefault();
          $(".product_table ").hide();
          $(".productform").fadeIn();
          var id=$(this).attr("id");
           var data="id="+id+'';
           GenericLoad('JsonSelectProductById?'+data);
         /* $.getJSON("JsonSelectProductById",data,function(result){
              console.log(result);
              var msg = result;
             $.each(msg, function() {
                   $("#price").val(msg.price);
                   $("#quantity").val(msg.quantity);
                   $("#title").prop("value",msg.name);
                   $("#status").val(msg.status);
                   $("#categoryid").prop("value",msg.categoryid);
                   $("#description").val(msg.description);
                   $("#capacity").val(msg.capacity);
                  });
            });*/
         
         // GenericLoad('loadProfile'+data);
      });
      
  $(function () {
      
    
    
     
      
        $('.checkall').change(function(){
             $('#checkitem').prop("checked",$(this).prop("checked"));
        });
        
        $(".delete_product").click(function(){
            var id = [];
            $(":checkbox:checked").each(function (i) {
                id[i] = $(this).attr("data");
            });
            if(id.length === 0){
                alert("Select atleast one checkbox");
            }else{
                alert("something")
            }
           
        });
        
        function genericSelect(){
            var id = [];
            $(":checkbox:checked").each(function (i) {
                id[i] = $(this).attr("data");
            });
            if(id.length === 0){
                alert("Select atleast one checkbox");
            }else{
                alert("something")
                //perform ajax function
            }
        }
      
       //calling generic method for dynamic datatable
   // GenericTableData('#product-table');
    
   $('#product_table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching":true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
   
  });
</script>



