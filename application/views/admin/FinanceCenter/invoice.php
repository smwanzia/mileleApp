

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Finance</li>
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
                    <div class="col-xs-10">
                           <!--batch invoice  form-->
                            <div class="batchinvoice-form" style="display:none;margin-top: 5px">
                                    <form role="form" id='batchinvoice' >
                                        <div class="row">
                                           <div class="col-md-12">
                                                <div class="row">
                                                     <div class="col-md-6">
                                                             <div class="form-group">
                                                                <label for="exampleInputEmail1">Class ID</label>
                                                                <input type="text" name="regno"  class="form-control" value="" id="title" placeholder="">
                                                            </div>
                                                     </div>
                                                       <div class="col-md-6">
                                                         <div class="form-group">
                                                                <label for="exampleInputEmail1">Term</label>
                                                                <input type="text" name="firstname" class="form-control" id="capacity" placeholder="">
                                                             </div>
                                                       </div>
                                                     <button type="submit" id="Submit_Student" value="" class="btn btn-primary pull-right">Save</button>
                                                </div>
                                           </div>

                                      </div>
                                  </form>
                            </div>
                         <!--invoice single student-->
                         <div class="singleinvoice-form" style="display:none;margin-top: 5px">
                               <form role="form" id='singleinvoice' >
                                      <div class="row">
                                         <div class="col-md-12">
                                              <div class="row">
                                                   <div class="col-md-6">
                                                          <div class="form-group">
                                                             <div class="input-group">
                                                                <label for="form-field-mask-1">
                                                                  Student RegNo
                                                                 </label>
                                                                      <input class="form-control input-mask-date" type="text" placeholder="click to select student regNo" id="form-field-mask-1" />
                                                                        <span class="input-group-btn">
                                                                          <a href="#modal-table" role="button" data-toggle="modal" class="btn btn-sm btn-default" type="button" style="margin-top: 27px;">
                                                                            <i class="ace-icon fa fa-calendar bigger-110" ></i>
                                                                            Go!
                                                                          </a>
                                                                        </span>
                                                                </div>
                                                           </div>
                                                       <div class="form-group">
                                                              <label for="exampleInputEmail1">Invoice Amount</label>
                                                              <input type="text" name="firstname" class="form-control" id="capacity" placeholder="">
                                                       </div>
                                                      </div>
                                                       <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label for="exampleInputEmail1">References</label>
                                                              <input type="text" name="firstname" class="form-control" id="capacity" placeholder="">
                                                           </div>
                                                           <div class="form-group">
                                                              <label for="exampleInputEmail1">Date</label>
                                                              <input type="text" name="firstname" class="form-control" id="capacity" placeholder="">
                                                           </div>
                                                       </div>
                                                 
                                                <button type="submit" id="Submit_Student" value="" class="btn btn-primary pull-right">Save</button>
                                               </div>
                                          </div>
                                     </div>
                                </form>
                         </div>
                         <div class="receivepayment" style="display:none;margin-top: 5px">
                               <form role="form" id='paymentinvoice' >
                                      <div class="row">
                                         <div class="col-md-12">
                                              <div class="row">
                                                   <div class="col-md-6">
                                                          <div class="form-group">
                                                              <label for="exampleInputEmail1">Student Id</label>
                                                              <input type="text" name="regno"  class="form-control" value="" id="title" placeholder="">
                                                          </div>

                                                           <div class="form-group">
                                                              <label for="exampleInputEmail1">Invoice Amount</label>
                                                              <input type="text" name="firstname" class="form-control" id="capacity" placeholder="">
                                                           </div>
                                                            <div class="form-group">
                                                              <label for="exampleInputEmail1">Payment Type</label>
                                                              <input type="text" name="firstname" class="form-control" id="capacity" placeholder="">
                                                           </div>
                                                      </div>
                                                       <div class="col-md-6">
                                                       <div class="form-group">
                                                                  <label for="exampleInputEmail1">References</label>
                                                                  <input type="text" name="firstname" class="form-control" id="capacity" placeholder="">
                                                               </div>
                                                               <div class="form-group">
                                                                  <label for="exampleInputEmail1">Date</label>
                                                                  <input type="text" name="firstname" class="form-control" id="capacity" placeholder="">
                                                               </div>
                                                        
                                                       </div>
                                                 
                                                <button type="submit" id="Submit_Student" value="" class="btn btn-primary pull-right">Save</button>
                                               
                                             </div>
                                          </div>
                                     </div>
                                </form>
                         </div>
                            
                    </div>
                     <div class="col-xs-2">
                          <div class="panel" id="right-bar">
                               <div class="right-sidebar">
                                    <ul class="sidebar-list">
                                        <li><a href="javascript:void()" id="studentstatement">Student statement </a></li>
                                        <li><a href="javascript:void()" id="receivepayment">Receive Payment </a></li>
                                        <li><a href="javascript:void()" id="createinvoice">Create Invoice </a></li>
                                        <li><a href="javascript:void()" id="invoicesinglestudent">Single Invoice </a></li>
                                        <li><a href="javascript:void()" id="classreport">Class Report </a></li>
                                    </ul>
                                </div>
                         </div>
                  </div>
            </div>
        </div>

    </div>
    <!--modall table for selecting student regnO-->
    <div id="modal-table" class="modal fade" tabindex="-1">
          <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header no-padding">
                     <div class="table-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="white">&times;</span>
                      </button>
                        Select Student RegNo
                  </div>
                </div>

                <div class="modal-body no-padding">
                  <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                      <thead>
                          <tr>
                              <th>Reg No</th>
                              <th>Name</th>
                              <th>Class</th>
                              <th>Stream</th>
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


    <script>
    $(function(){

      $("#studentstatement").click(function(){

      })
      $("#receivepayment").click(function(){
          $(".receivepayment").fadeIn();
          $(".batchinvoice-form").hide();
          $(".singleinvoice-form").hide();
        
      })
      $("#createinvoice").click(function(){

            $(".batchinvoice-form").fadeIn();
            $(".singleinvoice-form").hide();
            $(".receivepayment").hide();
        
      })
      $("#classreport").click(function(){
        
      })
       $("#invoicesinglestudent").click(function(){
        
            $(".singleinvoice-form").fadeIn();
            $(".batchinvoice-form").hide();
            $(".receivepayment").hide();
        
      })




             $('#classlist-table').DataTable({
                      "paging": true,
                      "lengthChange": true,
                      "searching":true,
                      "ordering": true,
                      "info": true,
                      "autoWidth": false
            });

    })
    </script>


