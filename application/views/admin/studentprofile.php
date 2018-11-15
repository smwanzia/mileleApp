<%-- 
    Document   : ViewCustomerById
    Created on : Dec 24, 2017, 11:47:45 PM
    Author     : xmore mmohz
--%>

<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>

<%@page contentType="text/html" pageEncoding="UTF-8"%>



                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                                <li>
                                        <i class="ace-icon fa fa-home home-icon"></i>
                                        <a href="#">Home</a>
                                </li>
                                <li class="active">Manage Customers</li>
                        </ul><!-- /.breadcrumb -->
                    </div>
                    <div class="page-content">
                            <div class="page-header">

                                    <!--<div class="btn-group float_right page_btn">
                                        <div class="btn btn-info dash_btns btn-plus glyphicon glyphicon-plus"> </div>
                                        <div class="btn btn-warning dash_btns btn-delete glyphicon glyphicon-trash"> </div>
                                        <div class="btn btn-success dash_btns  btn-list glyphicon glyphicon-list" title="view users"> </div>
                                    </div>-->
                                    
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
                                                                                            <span class="white">${customerdetails.firstname} ${customerdetails.lastname}</span>
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
                                                                                    ${customerdetails.emailaddress}
                                                                            </a>
                                                                             <a href="#" class="btn btn-link">
                                                                                    <i class="ace-icon fa fa-phone-square bigger-125 blue"></i>
                                                                                    ${customerdetails.phonenumber}
                                                                            </a>
                                                                    </div>

                                                                    <div class="space-6"></div>
                                                                 </div>

                                                            <div class="hr hr12 dotted"></div>
                                                             <div class="hr hr16 dotted"></div>
                                                        </div>

                                                            <div class="col-xs-12 col-sm-9">
                                                                

                                                                    <div class="profile-user-info profile-user-info-striped">
                                                                            <div class="profile-info-row">
                                                                                    <div class="profile-info-name"> Name  </div>

                                                                                    <div class="profile-info-value">
                                                                                            <span class="editable" id="username">${customerdetails.firstname} ${customerdetails.lastname}</span>
                                                                                    </div>
                                                                            </div>

                                                                            <div class="profile-info-row">
                                                                                    <div class="profile-info-name"> City </div>

                                                                                    <div class="profile-info-value">
                                                                                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                                            <span class="editable" id="country">${customerdetails.city}</span>
                                                                                            <span class="editable" id="city">${customerdetails.city}</span>
                                                                                    </div>
                                                                            </div>

                                                                            <div class="profile-info-row">
                                                                                    <div class="profile-info-name"> Company</div>

                                                                                    <div class="profile-info-value">
                                                                                            <span class="editable" id="age">${customerdetails.company}</span>
                                                                                    </div>
                                                                            </div>

                                                                            <div class="profile-info-row">
                                                                                    <div class="profile-info-name"> Home Address </div>

                                                                                    <div class="profile-info-value">
                                                                                            <span class="editable" id="signup">${customerdetails.homeaddress}</span>
                                                                                    </div>
                                                                            </div>

                                                                            <div class="profile-info-row">
                                                                                    <div class="profile-info-name"> Fax </div>

                                                                                    <div class="profile-info-value">
                                                                                            <span class="editable" id="login">${customerdetails.fax}</span>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="profile-info-row">
                                                                                    <div class="profile-info-name">Email Address</div>

                                                                                    <div class="profile-info-value">
                                                                                            <span class="editable" id="login">${customerdetails.emailaddress}</span>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="profile-info-row">
                                                                                    <div class="profile-info-name">Phone Number</div>

                                                                                    <div class="profile-info-value">
                                                                                            <span class="editable" id="login">${customerdetails.phonenumber}</span>
                                                                                    </div>
                                                                            </div>
                                                                        </div>

                                                                    <div class="space-20"></div>

                                                                    <div class="widget-box transparent">
                                                                        <div class="widget-header widget-header-small">
                                                                                <h4 class="widget-title blue smaller">
                                                                                        <i class="ace-icon fa fa-rss orange"></i>
                                                                                        Recent Customer Orders
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
                                                                                                               <!-- <th>First Name</th>
                                                                                                                <th>Last Name</th>-->
                                                                                                                <th>Order Number</th>
                                                                                                                <th>Order Amount</th>
                                                                                                                <th>Order Date</th>
                                                                                                                <th>Status</th>

                                                                                                            </thead>
                                                                                                            <tbody>
                                                                                                                <c:forEach var="order" items="${customerorder}">
                                                                                                                    <tr id="${order.id}" title="double click to view more">
                                                                                                                        <td>${order.invoicenumber}</a></td>
                                                                                                                        <td>${order.initialAmount}</a></td>
                                                                                                                        <td>${order.invoicedate}</td>
                                                                                                                        <td>${order.isprocessed}</td>

                                                                                                                    </tr>
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
                                                                                    <span class="bigger-110">View more Order details</span>

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
                                              
                                              
                                              
                                              
                                              
                                              
                                              
                                              
                                               <!-- <div class="customer-form">
                                                    <form role="form" id="userform" method="post" >	
                                                        <div class="box-body">
                                                          <div class="col-md-6">
                                                              <div class="form-group">
                                                                  <label for="exampleInputEmail1">First Name</label>
                                                                  <input type="text" class="form-control" id="firstname" value="${customerdetails.firstname}" readonly="" placeholder="">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="status">last Name</label>
                                                                  <input type="text" class="form-control" id="lastname" readonly="" value="${customerdetails.lastname}" name="" placeholder="">
                                                              </div>
                                                              <div class="form-group">
                                                                    <label for="role">fax</label>
                                                                    <input type="text" class="form-control" id="fax" readonly="" value="${customerdetails.fax}" name="" placeholder="">
                                                               </div>
                                                               <div class="form-group">
                                                                    <label for="role">Company</label>
                                                                    <input type="text" class="form-control" id="company" value="${customerdetails.company}" readonly="" name="" placeholder="">
                                                               </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="username">home Address</label>
                                                                    <input type="text" name="" class="form-control" readonly=""  value="${customerdetails.homeaddress}" id="homeaddress" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Preferred Method of Contact</label>
                                                                    <input type="" name=""  readonly=""  class="form-control" id="method" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="">Email Address</label>
                                                                        <input type="text" name="email"   readonly="" value="${customerdetails.emailaddress}" class="form-control" id="email" placeholder="">
                                                                </div>
                                                                 <div class="form-group">
                                                                        <label for="">Phone Number</label>
                                                                        <input type="text" name="email" readonly="" value="${customerdetails.phonenumber}" class="form-control" id="phone" placeholder="">
                                                                 </div>
                                                             </div>



                                                        </div>
                                                        <div class="col-md-12">
                                                            <H3 style="font-size: 20px"><a href="javascript:;" onclick="GenericLoad('LoadOrderDetails?id=${customerdetai.invoicenumber}')"> Click to View this Customer Orders</a></h3>
                                                        </div>

                                                        <!--  <button class="pull-right btn btn-primary">Submit</button>
                                                    </form>-->
                                                 </div>
                                            </div>
                                     </div>
                                </div>
                            </div>
                    </div>





    
                                    
        
 
			
	