

 <div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Dashboard</a>
            </li>
             <li class="active">Message Center</li>
            <li class="active">Inbox</li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-header">
   <!-- <h1>
            Inbox
            <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    Mailbox with some customizations as described in docs
            </small>
    </h1>-->
</div><!-- /.page-header -->
 <div class="page-content">
    <div class="page-header">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                    <div class="col-xs-12">
                        <div class="tabbable">
                            <ul id="inbox-tabs" class="inbox-tabs nav nav-tabs padding-16 tab-size-bigger tab-space-1">
                                  
                                    <li class="li-new-mail pull-right">
                                            <a data-toggle="tab" href="#write" data-target="write" class="btn-new-mail">
                                                    <span class="btn btn-purple no-border">
                                                            <i class="ace-icon fa fa-envelope bigger-130"></i>
                                                            <span class="bigger-110">Compose SMS</span>
                                                    </span>
                                            </a>
                                    </li><!-- /.li-new-mail -->
                                  
                                           <!-- <a href="javascript:void(0)"  status="${setting.emailstatus}" class="btn-status pull-right" style="margin-right: 323px;">
                                                    <label>MAIL STATUS</label>
                                                   <span class="btn btn-sm no-border">
                                                            <span class="small">${setting.emailstatus}</span>
                                                    </span>
                                            </a>-->
                                    <!-- /.li-new-mail -->

                                    <li class="active">
                                            <a data-toggle="tab" href="#inbox" data-target="inbox">
                                                    <i class="blue ace-icon fa fa-inbox bigger-130"></i>
                                                    <span class="bigger-110">Inbox</span>
                                            </a>
                                    </li>

                                    <li>
                                            <a data-toggle="tab" href="#sent" data-target="sent">
                                                    <i class="orange ace-icon fa fa-location-arrow bigger-130"></i>
                                                    <span class="bigger-110">Sent</span>
                                            </a>
                                    </li>

                            </ul>

                    <div class="tab-content no-border no-padding">
                        <div id="inbox" class="tab-pane in active">
                            <div class="message-container">
                                <div id="id-message-list-navbar" class="message-navbar clearfix">
                                        <div class="message-bar">
                                                <div class="message-infobar" id="id-message-infobar">
                                                        <span class="blue bigger-150">Inbox</span>
                                                        <span class="grey bigger-110"><!--(2 unread messages)--></span>
                                                </div>

                                <div class="message-toolbar hide">
                                    <div class="inline position-relative align-left">
                                            <button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                                    <span class="bigger-110">Action</span>

                                                    <i class="ace-icon fa fa-caret-down icon-on-right"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
                                                    <li>
                                                            <a href="#">
                                                                    <i class="ace-icon fa fa-mail-reply blue"></i>&nbsp; Reply
                                                            </a>
                                                    </li>

                                                    <li>
                                                            <a href="#">
                                                                    <i class="ace-icon fa fa-mail-forward green"></i>&nbsp; Forward
                                                            </a>
                                                    </li>

                                                    <li>
                                                            <a href="#">
                                                                    <i class="ace-icon fa fa-folder-open orange"></i>&nbsp; Archive
                                                            </a>
                                                    </li>

                                                    <li class="divider"></li>

                                                    <li>
                                                            <a href="#">
                                                                    <i class="ace-icon fa fa-eye blue"></i>&nbsp; Mark as read
                                                            </a>
                                                    </li>

                                                    <li>
                                                            <a href="#">
                                                                    <i class="ace-icon fa fa-eye-slash green"></i>&nbsp; Mark unread
                                                            </a>
                                                    </li>

                                                    <li>
                                                            <a href="#">
                                                                    <i class="ace-icon fa fa-flag-o red"></i>&nbsp; Flag
                                                            </a>
                                                    </li>

                                                    <li class="divider"></li>

                                                    <li>
                                                            <a href="#">
                                                                    <i class="ace-icon fa fa-trash-o red bigger-110"></i>&nbsp; Delete
                                                            </a>
                                                    </li>
                                            </ul>
                                    </div>
                                    <button type="button" id="remove-msg" class="btn btn-xs btn-white btn-primary">
                                            <i class="ace-icon fa fa-trash-o bigger-125 orange"></i>
                                            <span class="bigger-110">Delete</span>
                                    </button>
                            </div>
                    </div>
                <div>
                <div class="messagebar-item-left">
                        <label class="inline middle">
                                <input type="checkbox" id="id-toggle-all" class="ace" />
                                <span class="lbl"></span>
                        </label>

                                &nbsp;
                        <div class="inline position-relative">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                        <i class="ace-icon fa fa-caret-down bigger-125 middle"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-lighter dropdown-100">
                                        <li>
                                                <a id="id-select-message-all" href="#">All</a>
                                        </li>

                                        <li>
                                                <a id="id-select-message-none" href="#">None</a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                                <a id="id-select-message-unread" href="#">Unread</a>
                                        </li>

                                        <li>
                                                <a id="id-select-message-read" href="#">Read</a>
                                        </li>
                                </ul>
                        </div>
                </div>

                <div class="messagebar-item-right">
                        <div class="inline position-relative">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                        Sort &nbsp;
                                        <i class="ace-icon fa fa-caret-down bigger-125"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-lighter dropdown-menu-right dropdown-100">
                                        <li>
                                            <a href="#">
                                                    <i class="ace-icon fa fa-check green"></i>
                                                    Date
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                    <i class="ace-icon fa fa-check invisible"></i>
                                                    From
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                    <i class="ace-icon fa fa-check invisible"></i>
                                                    Subject
                                            </a>
                                        </li>
                                </ul>
                        </div>
                </div>

                    <div class="nav-search minimized">
                            <form class="form-search">
                                    <span class="input-icon">
                                            <input type="text" autocomplete="off" class="input-small nav-search-input" placeholder="Search inbox ..." />
                                            <i class="ace-icon fa fa-search nav-search-icon"></i>
                                    </span>
                            </form>
                    </div>
            </div>
        </div>

                <div id="id-message-item-navbar" class="hide message-navbar clearfix">
                        <div class="message-bar">
                                <div class="message-toolbar">
                                        <div class="inline position-relative align-left">
                                                <button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                                        <span class="bigger-110">Action</span>

                                                        <i class="ace-icon fa fa-caret-down icon-on-right"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
                                                    <li>
                                                            <a href="#">
                                                                    <i class="ace-icon fa fa-mail-reply blue"></i>&nbsp; Reply
                                                            </a>
                                                    </li>

                                                    <li>
                                                            <a href="#">
                                                                    <i class="ace-icon fa fa-mail-forward green"></i>&nbsp; Forward
                                                            </a>
                                                    </li>

                                                    <li>
                                                            <a href="#">
                                                                    <i class="ace-icon fa fa-folder-open orange"></i>&nbsp; Archive
                                                            </a>
                                                    </li>

                                                    <li class="divider"></li>

                                                    <li>
                                                            <a href="#">
                                                                    <i class="ace-icon fa fa-eye blue"></i>&nbsp; Mark as read
                                                            </a>
                                                    </li>

                                                    <li>
                                                            <a href="#">
                                                                    <i class="ace-icon fa fa-eye-slash green"></i>&nbsp; Mark unread
                                                            </a>
                                                    </li>                                                       

                                                    <li class="divider"></li>

                                                    <li>
                                                            <a href="#">
                                                                    <i class="ace-icon fa fa-trash-o red bigger-110"></i>&nbsp; Delete
                                                            </a>
                                                    </li>
                                                </ul>
                                        </div>

                                       <button type="button" id="delete-button" class="btn btn-xs btn-white btn-primary">
                                                <i class="ace-icon fa fa-trash-o bigger-125 orange"></i>
                                                <span class="bigger-110">Delete</span>
                                        </button>
                                </div>
                        </div>

                        <div>
                                <div class="messagebar-item-left">
                                        <a href="#" class="btn-back-message-list">
                                                <i class="ace-icon fa fa-arrow-left blue bigger-110 middle"></i>
                                                <b class="bigger-110 middle">Back</b>
                                        </a>
                                </div>

                                <div class="messagebar-item-right">
                                        <i class="ace-icon fa fa-clock-o bigger-110 orange"></i>
                                        <span class="grey">Today, 7:15 pm</span>
                                </div>
                        </div>
                </div>

                <div id="id-message-new-navbar" class="hide message-navbar clearfix">
                        <div class="message-bar">
                                <div class="message-toolbar">
                                        <input type="checkbox" name="all" id="form-field-branch " class="ace" data-value="" value=""/>
                                        <span class="lbl" style="margin-left:10px" >Branch</span>
                                        <!--<button type="button" class="btn btn-xs btn-white btn-primary">
                                                <i class="ace-icon fa fa-floppy-o bigger-125"></i>
                                                <span class="bigger-110">Branch</span>
                                        </button>-->
                                         <input type="checkbox" name="all" id="form-field-branch"  class="ace" data-value="" value=""/>
                                         <span class="lbl" style="margin-left:10px" >Members</span>
                                        <input type="checkbox" name="all" id="form-field-branch"  class="ace" data-value="" style="margin-left:10px" value=""/>
                                         <span class="lbl">Individual</span>

                                        <!--<button type="button" class="btn btn-xs btn-white btn-primary">
                                                <i class="ace-icon fa fa-times bigger-125 orange2"></i>
                                                <span class="bigger-110">Members</span>
                                        </button>-->
                                </div>
                        </div>

                        <div>
                                <div class="messagebar-item-left">
                                        <a href="#" class="btn-back-message-list">
                                                <i class="ace-icon fa fa-arrow-left bigger-110 middle blue"></i>
                                                <b class="middle bigger-110">Back</b>
                                        </a>
                                </div>

                                <div class="messagebar-item-right">
                                        <span class="inline btn-send-message">
                                                <button type="button" class="btn btn-sm btn-primary no-border btn-white btn-round" id="send-message-button">
                                                        <span class="bigger-110">Send</span>

                                                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                </button>
                                        </span>
                                </div>
                        </div>
                    </div>
                        <!---start inbox-->
                        <div class="message-list-container">
                                <div class="message-list" id="message-list">
                                    <c:forEach var="inbox" items="${inbox}">
                                        <div class="message-item message-unread">
                                                <label class="inline">
                                                        <input type="checkbox" value="${inbox.smsId}" class="ace" />
                                                        <span class="lbl"></span>
                                                </label>

                                                <i class="message-star ace-icon fa fa-star orange2"></i>
                                                <span class="sender" title="">${inbox.recipientMsisdn} </span>
                                                <span class="time"><!--1:33 pm--></span>

                                                <span class="summary">
                                                        <span class="text" role="${inbox.smsId}" style="color:#555 !important">
                                                                ${inbox.content}
                                                        </span>
                                                </span>
                                        </div>
                                    </c:forEach>
                                </div>
                        </div>

                        <div class="hide message-footer message-footer-style2 clearfix">
                                <div class="pull-left"> simpler footer </div>

                                <div class="pull-right">
                                        <div class="inline middle"> message <!--1 of 151--> </div>

                                        &nbsp; &nbsp;
                                        <ul class="pagination middle">
                                                <li class="disabled">
                                                        <span>
                                                                <i class="ace-icon fa fa-angle-left bigger-150"></i>
                                                        </span>
                                                </li>

                                                <li>
                                                        <a href="#">
                                                                <i class="ace-icon fa fa-angle-right bigger-150"></i>
                                                        </a>
                                                </li>
                                        </ul>
                                </div>
                             </div>
                        </div>
                    </div>
                </div><!-- /.tab-content -->
            </div><!-- /.tabbable -->
    </div><!-- /.col -->
</div><!-- /.row -->
            <form id="id-message-form" class="hide form-horizontal message-form col-xs-12">
                <div>
                        <div class="form-group">
                             <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-subject">Filter:</label>
                                    <div class="col-sm-3 col-xs-12">
                                            <div class="input-icon block col-xs-12 no-padding">
                                                <select class="selected col-xs-12" name="filter">
                                                    <option>Registered Members</option>
                                                    <option>Paid Members</option>
                                                    <option>Pedding Members</option>
                                                </select>
                                               <!-- <input maxlength="100" type="text" class="col-xs-12" name="subject" id="subject" placeholder="Subject" />-->
                                               <!-- <i class="ace-icon fa fa-comment-o"></i>-->
                                            </div>
                                    </div>  
                                     <label class="col-sm-3 control-label no-padding-right" for="form-field-subject">Branch:</label>
                                     <div class="col-sm-3 col-xs-12">
                                            <div class="input-icon block col-xs-12 no-padding">
                                                <select class="selected col-xs-12" name="filter">
                                                    <option>Kilfi</option>
                                                    <option>Malindi</option>
                                                    <option>Mombasa</option>
                                                </select>
                                               <!-- <input maxlength="100" type="text" class="col-xs-12" name="subject" id="subject" placeholder="Subject" />-->
                                               <!-- <i class="ace-icon fa fa-comment-o"></i>-->
                                            </div>
                                    </div>                                   
                                </div>
                                 <div class="hr hr-18 dotted"></div>
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Recipient:</label>

                                <div class="col-sm-9">
                                        <span class="input-icon">
                                            <input type="text" name="recipient"  id="recipient" data-value="" value="" placeholder="Recipient(s)" />
                                            <a href="#modal-tabl" role="butto" data-toggle="moda" class="btn btn-sm btn-default" id="customer-dialog" type="button" style="padding:5px;margin-top: -2px;  margin-left: -5px">
                                                            <i class="ace-icon fa fa-phone bigger-110" ></i>
                                                            select
                                                          </a>
                                        </span>
                                        <span class="input-icon pull-right">
                                                <input type="checkbox" name="all" id="form-field-customer " class="ace" data-value="" value=""/>
                                               <!-- <i class="ace-icon fa fa-user"></i>-->
                                                <span class="lbl">All Memebers</span>
                                        </span>
                                </div>
                              <!--  <label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Recipient:</label>-->
                                <div class="col-sm-9">
                                       
                                </div>
                                
                        </div>

                        <div class="hr hr-18 dotted"></div>

                        <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-subject">Subject:</label>

                                <div class="col-sm-6 col-xs-12">
                                        <div class="input-icon block col-xs-12 no-padding">
                                                <input maxlength="100" type="text" class="col-xs-12" name="subject" id="subject" placeholder="Subject" />
                                                <i class="ace-icon fa fa-comment-o"></i>
                                        </div>
                                </div>
                        </div>

                        <div class="hr hr-18 dotted"></div>

                        <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right">
                                        <span class="inline space-24 hidden-480"></span>
                                        Message:
                                </label>

                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="5" name="message" id="msg_area" placeholder="write message"></textarea>
                                   <!-- <div class="wysiwyg-editor"></div>-->
                                </div>
                        </div>

                        <div class="hr hr-18 dotted"></div>

                       <!-- <div class="form-group no-margin-bottom">
                                <label class="col-sm-3 control-label no-padding-right">Attachments:</label>

                                <div class="col-sm-9">
                                        <div id="form-attachments">
                                                <input type="file" name="attachment[]" />
                                        </div>
                                </div>
                        </div>

                        <div class="align-right">
                                <button id="id-add-attachment" type="button" class="btn btn-sm btn-danger">
                                        <i class="ace-icon fa fa-paperclip bigger-140"></i>
                                        Add Attachment
                                </button>
                        </div>-->

                        <div class="space"></div>
                </div>
            </form>
           <div class="hide message-content" id="id-message-content">                        
            <div class="hr hr-double"></div>
            </div><!-- /.message-content -->
                    <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
 </div><!-- /.page content --> 
 <!--modall table for selecting student regnO-->
    <div id="modal-table" class="modal fade" tabindex="-1">
          <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header no-padding">
                     <div class="table-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="white">&times;</span>
                        </button>
                        Select Customer Phone Number
                    </div>
                 </div>

                <div class="modal-body no-padding">
                  <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                      <thead>
                          <tr>
                              <th>Customer Name</th>
                              <th>Phone Number</th>                              
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                  </table>
                </div>
                <div class="modal-footer no-margin-top">
                      <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                            <i class="ace-icon fa fa-times"></i>
                            Close
                      </button>
               </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
 <!-- dialog for selecting phone numbers -->
      <div id="customer_phonedialog" class="hide">            
          <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top customer-selectphone">
              <thead>
                  <tr>
                      <th>Customer Name</th>
                      <th>Phone Number</th>
                      
                  </tr>
              </thead>
              <tbody>
                    <c:forEach var="customer" items="${admincust}">
                        <tr phone="${customer.phonenumber} " title="click to select phonenumber">
                                <td>${customer.firstname} ${customer.lastname}  </td>
                                <td> ${customer.phonenumber}</td>
                        </tr>
                    </c:forEach>
              </tbody>
          </table>             
         </div><!-- #dialog-message -->    
    	<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($){			
				//handling tabs and loading/displaying relevant messages and forms
				//not needed if using the alternative view, as described in docs
				$('#inbox-tabs a[data-toggle="tab"]').on('show.bs.tab', function (e) {
					var currentTab = $(e.target).data('target');
					if(currentTab == 'write') {
						Inbox.show_form();
					}
					else if(currentTab == 'inbox') {
						Inbox.show_list();
					}
				})	
			
				//basic initializations
				$('.message-list .message-item input[type=checkbox]').removeAttr('checked');
				$('.message-list').on('click', '.message-item input[type=checkbox]' , function() {
					$(this).closest('.message-item').toggleClass('selected');
					if(this.checked) Inbox.display_bar(1);//display action toolbar when a message is selected
					else {
						Inbox.display_bar($('.message-list input[type=checkbox]:checked').length);
						//determine number of selected messages and display/hide action toolbar accordingly
					}		
				});
			
			
				//check/uncheck all messages
				$('#id-toggle-all').removeAttr('checked').on('click', function(){
					if(this.checked) {
						Inbox.select_all();
					} else Inbox.select_none();
				});
				
				//select all
				$('#id-select-message-all').on('click', function(e) {
					e.preventDefault();
					Inbox.select_all();
				});
				
				//select none
				$('#id-select-message-none').on('click', function(e) {
					e.preventDefault();
					Inbox.select_none();
				});
				
				//select read
				$('#id-select-message-read').on('click', function(e) {
					e.preventDefault();
					Inbox.select_read();
				});
			
				//select unread
				$('#id-select-message-unread').on('click', function(e) {
					e.preventDefault();
					Inbox.select_unread();
				});
			
				/////////
			
				//display first message in a new area
				$('.message-list .message-item .text').on('click', function() {
                                    var id=$(this).attr("role");
                                    //alert(id);
                                    
					//show the loading icon
					$('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
					
					$('.message-inline-open').removeClass('message-inline-open').find('.message-content').remove();
			
					var message_list = $(this).closest('.message-list');
			
					$('#inbox-tabs a[href="#inbox"]').parent().removeClass('active');
					//some waiting
					setTimeout(function() {
			
						//hide everything that is after .message-list (which is either .message-content or .message-form)
						message_list.next().addClass('hide');
						$('.message-container').find('.message-loading-overlay').remove();
			
						//close and remove the inline opened message if any!
			
						//hide all navbars
						$('.message-navbar').addClass('hide');
						//now show the navbar for single message item
						$('#id-message-item-navbar').removeClass('hide');
			
						//hide all footers
						$('.message-footer').addClass('hide');
						//now show the alternative footer
						$('.message-footer-style2').removeClass('hide');						
						
						//move .message-content next to .message-list and hide .message-list
						$('.message-content').removeClass('hide').insertAfter(message_list.addClass('hide'));
                                //$('.message-content').removeClass('hide');
                                //fetch data from db
                                //GenericLoad('LoadInvoiceReport?type=pdf&&invoiceid=${orderdetails.id}');
                                $(".message-content").load('ReadMessages?id='+id);
                               // GenericLoad("ReadMessages?id="+id,".message-content");
                                 /*$.ajax({
                                     method:"post",
                                     url:"ReadMessages",
                                     data:{id:id},
                                     contentType:'application/json',
                                     mimeType:'application/json',
                                     success:function(data){
                                         //render data
                                        
                                        
                                       // $(".message-content .message-body").html(data);
                                     }
                                 })*/

						//add scrollbars to .message-body
						$('.message-content .message-body').ace_scroll({
							size: 150,
							mouseWheelLock: true,
							styleClass: 'scroll-visible'
						});
			
					}, 500 + parseInt(Math.random() * 500));
				});		
			
				
				//back to message list
				$('.btn-back-message-list').on('click', function(e) {
					
					e.preventDefault();
					$('#inbox-tabs a[href="#inbox"]').tab('show');
				});		
			
			
				//hide message list and display new message form
				/**
				$('.btn-new-mail').on('click', function(e){
					e.preventDefault();
					Inbox.show_form();
				});
				*/	
			  var Inbox = {
					//displays a toolbar according to the number of selected messages
					display_bar : function (count) {
						if(count == 0) {
							$('#id-toggle-all').removeAttr('checked');
							$('#id-message-list-navbar .message-toolbar').addClass('hide');
							$('#id-message-list-navbar .message-infobar').removeClass('hide');
						}
						else {
							$('#id-message-list-navbar .message-infobar').addClass('hide');
							$('#id-message-list-navbar .message-toolbar').removeClass('hide');
						}
					}
					,
					select_all : function() {
						var count = 0;
						$('.message-item input[type=checkbox]').each(function(){
							this.checked = true;
							$(this).closest('.message-item').addClass('selected');
							count++;
						});
						
						$('#id-toggle-all').get(0).checked = true;
						
						Inbox.display_bar(count);
					}
					,
					select_none : function() {
						$('.message-item input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
						$('#id-toggle-all').get(0).checked = false;
						
						Inbox.display_bar(0);
					}
					,
					select_read : function() {
						$('.message-unread input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
						
						var count = 0;
						$('.message-item:not(.message-unread) input[type=checkbox]').each(function(){
							this.checked = true;
							$(this).closest('.message-item').addClass('selected');
							count++;
						});
						Inbox.display_bar(count);
					}
					,
					select_unread : function() {
						$('.message-item:not(.message-unread) input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
						
						var count = 0;
						$('.message-unread input[type=checkbox]').each(function(){
							this.checked = true;
							$(this).closest('.message-item').addClass('selected');
							count++;
						});
						
						Inbox.display_bar(count);
					}
				}
			
				//show message list (back from writing mail or reading a message)
				Inbox.show_list = function() {
					$('.message-navbar').addClass('hide');
					$('#id-message-list-navbar').removeClass('hide');
			
					$('.message-footer').addClass('hide');
					$('.message-footer:not(.message-footer-style2)').removeClass('hide');
			
					$('.message-list').removeClass('hide').next().addClass('hide');
					//hide the message item / new message window and go back to list
				}
			
				//show write mail form
				Inbox.show_form = function() {
					if($('.message-form').is(':visible')) return;
					if(!form_initialized) {
						initialize_form();
					}
					
					
					var message = $('.message-list');
					$('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
					
					setTimeout(function() {
						message.next().addClass('hide');
						
						$('.message-container').find('.message-loading-overlay').remove();
						
						$('.message-list').addClass('hide');
						$('.message-footer').addClass('hide');
						$('.message-form').removeClass('hide').insertAfter('.message-list');
						
						$('.message-navbar').addClass('hide');
						$('#id-message-new-navbar').removeClass('hide');
						
						
						//reset form??
						$('.message-form .wysiwyg-editor').empty();
					
						$('.message-form .ace-file-input').closest('.file-input-container:not(:first-child)').remove();
						$('.message-form input[type=file]').ace_file_input('reset_input');
						
						$('.message-form').get(0).reset();
						
					}, 300 + parseInt(Math.random() * 300));
				}
			
			
			
			
				var form_initialized = false;
				function initialize_form() {
					if(form_initialized) return;
					form_initialized = true;
					
					//intialize wysiwyg editor
					$('.message-form .wysiwyg-editor').ace_wysiwyg({
						toolbar:
						[
							'bold',
							'italic',
							'strikethrough',
							'underline',
							null,
							'justifyleft',
							'justifycenter',
							'justifyright',
							null,
							'createLink',
							'unlink',
							null,
							'undo',
							'redo'
						]
					}).prev().addClass('wysiwyg-style1');
			
			
			
					//file input
					$('.message-form input[type=file]').ace_file_input()
					.closest('.ace-file-input')
					.addClass('width-90 inline')
					.wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>');
			
					//Add Attachment
					//the button to add a new file input
					$('#id-add-attachment')
					.on('click', function(){
						var file = $('<input type="file" name="attachment[]" />').appendTo('#form-attachments');
						file.ace_file_input();
						
						file.closest('.ace-file-input')
						.addClass('width-90 inline')
						.wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>')
						.parent().append('<div class="action-buttons pull-right col-xs-1">\
							<a href="#" data-action="delete" class="middle">\
								<i class="ace-icon fa fa-trash-o red bigger-130 middle"></i>\
							</a>\
						</div>')
						.find('a[data-action=delete]').on('click', function(e){
							//the button that removes the newly inserted file input
							e.preventDefault();
							$(this).closest('.file-input-container').hide(300, function(){ $(this).remove() });
						});
					});
				}//initialize_form
			
				//turn the recipient field into a tag input field!
				/**	
				var tag_input = $('#form-field-recipient');
				try { 
					tag_input.tag({placeholder:tag_input.attr('placeholder')});
				} catch(e) {}
			
			
				//and add form reset functionality
				$('#id-message-form').on('reset', function(){
					$('.message-form .message-body').empty();
					
					$('.message-form .ace-file-input:not(:first-child)').remove();
					$('.message-form input[type=file]').ace_file_input('reset_input_ui');
			
					var val = tag_input.data('value');
					tag_input.parent().find('.tag').remove();
					$(val.split(',')).each(function(k,v){
						tag_input.before('<span class="tag">'+v+'<button class="close" type="button">&times;</button></span>');
					});
				});
				*/
			
			});
                     
                        $('body').on('click','.btn-status',function(){
                            var status=$(this).attr("status");
                            var statusid;
                            if(status=="Enabled"){
                               statusid ="Disabled";
                            }else{
                                statusid="Enabled";
                            }
                            bootbox.confirm({
                                 message: "Are you sure want this to be "+statusid+"?",
                                    buttons: {
                                        confirm: {
                                            label: 'Yes',
                                            className: 'btn-success'
                                        },
                                        cancel: {
                                            label: 'No',
                                            className: 'btn-danger'
                                            }
                                        },
                                    callback: function (result) {
                                       if(result==true){
                                            //show loading icon
                                            $('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
                                            $.ajax({
                                                method:"post",
                                                url:"ChangeMailStatus",
                                                data:{status:statusid},
                                                success:function(data){
                                                    sweetAlert({
                                                            title: "Succcess", 
                                                            text:"Mail Successfully"+" "+statusid+"!", 
                                                            type:"success",
                                                            onClose: function(){
                                                        GenericLoad("messages"); 
                                                    }});

                                                 }
                                             })

                                       }
                                   }
                            })
                           // alert(status)
                          
                        })
                        
                        //send sms 
                        $('body').on("click","#send-message-button",function(){
                           // validate form input
                           var recipient=$("#recipient").val();
                           var subject=$("#subject").val();
                           var msg_area=$("#msg_area").val();
                            if(recipient==""){
                                sweetAlert("Ooops!","recipient can not be null","error");
                            }
                            else if(subject==""){
                               sweetAlert("Ooops!","subject can not be null","error");
                            }
                            else if(msg_area==""){
                                sweetAlert("Ooops!","message can not be null","error");
                            }else {
                                  //get form data
                                    $('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
                                    var data=$("#id-message-form").serialize();
                                    setTimeout(function(){
                                        $.ajax({
                                            method:"POST",
                                            url:'http://localhost/mileleApp/Messages/composeMsg',
                                            data:data,
                                            success:function(data){
                                                $("#loader2").hide();
                                                sweetAlert({
                                                    title:"success",
                                                    type:"success",
                                                    text:"Message Send successfully",
                                                    onClose:function(){
                                                        GenericLoad("messages");
                                                    }
                                                })

                                            }
                                    })
                                    },300 + parseInt(Math.random() * 300))
                                
                            }
                                
                          
                           
                          
                            
                            
                        })
                        
                    $('body').on("click","#remove-msg",function(){
                         var id=[];
                        $(":checkbox:checked").each(function(i){
                            id[i]=$(this).val();
                         })
                         //alert(id)
                         $.ajax({
                             method:"post",
                             url:"DeleteMessage",
                             data:"id="+id,
                             success:function(data){
                                   sweetAlert({
                                            title:"success",
                                            type:"success",
                                            text:"Message successfully deleted",
                                            onClose:function(){
                                                GenericLoad("messages");
                                            }
                                        })
                             }
                         })
                      
                    })  
                    
                    //dialog
                      //override dialog's title function to allow for HTML titles
        $.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
                _title: function(title) {
                        var $title = this.options.title || '&nbsp;'
                        if( ("title_html" in this.options) && this.options.title_html == true )
                                title.html($title);
                        else title.text($title);
                }
        }));
        
      	$("#customer-dialog").on('click', function(e) {
             e.preventDefault();
                var dialog = $("#customer_phonedialog" ).removeClass('hide').dialog({
                        modal: true,
                        width:'650',
                        title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='ace-icon fa fa-check'></i>Select Customer PhoneNumber</h4></div>",
                        title_html: true,
                        buttons: [ 
                                {
                                        text: "Cancel",
                                        "class" : "btn btn-minier",
                                        click: function() {
                                                $( this ).dialog( "close" ); 
                                        } 
                                }
                        ]
                });

        });
        //select phone number ffrom customer table
        $("#customer_phonedialog .customer-selectphone tbody tr").click(function(){
            
                var phone=$(this).attr("phone");
               // alert(phone);
                $("#id-message-form input[name=recipient]").val(phone);
                //$("#modal-table").modal('hide');
                $("#customer_phonedialog").dialog( "close" ); 
        })
           //$("#example1").DataTable();
        $('.customer-selectphone').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching":true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            //"aLengthMenu":[[5,10,15,20,-1],[5,10,15,20,"All"]]
        });
		</script>