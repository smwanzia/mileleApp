

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
                  <h3><div class="formheader"></h3>
                  <!--  <div class="btn btn-info dash_btns btn-plus btn-xs glyphicon  glyphicon-plus" ></div>
                    <div class="btn btn-danger dash_btns  btn-xs delete-studentbtn  glyphicon glyphicon-trash" title="Add student"> </div>
                    <div class="btn btn-success dash_btns btn-xs btn-list  glyphicon glyphicon-list" title="view student"> </div>-->
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
                    <div class="col-xs-10" id="exam-center">
                           
                         <!--General Merit List-->
                         <div class="generalmeritList" style="display:none;margin-top: 5px">
                            <h3 style="margin-top: -36px;">General Merit List</h3>
                                  <form role="form" id='generalmeritlist' >
                                        <div class="row">
                                           <div class="col-md-12">
                                                <div class="row">
                                                   <div class="col-md-6">
                                                           <div class="form-group">
                                                              <label for="exampleInputEmail1">Choose Year</label>
                                                              <input type="text" name="regno"  class="form-control" value="" id="title" placeholder="">
                                                          </div>

                                                           <div class="form-group">
                                                                <label for="exampleInputEmail1">Class </label>
                                                                 <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose subject...">
                                                                                  <option value=""></option>
                                                                                  <?php foreach ($classlist as $row ) {   ?>
                                                                                        <option value="<?php echo $row->CLASSLISTID ?>"><?php echo $row->CLASS ?></option>
                                                                                   <?php } ?>
                                                                   </select>
                                                           </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                           <div class="form-group">
                                                              <label for="exampleInputEmail1">Term</label>
                                                              <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose subject...">
                                                                                  <option value=""></option>
                                                                                      <option value="">TERM 1</option>
                                                                                      <option value="">TERM 2</option>
                                                                                      <option value="">TERM 3</option>
                                                                                  
                                                                   </select>
                                                           </div>
                                                   </div>
                                                 </div>
                                              </div>
                                          </div>
                                              <div class="form-group">
                                                <button type="submit" id="Submit_Student" value="" class="btn btn-primary pull-right">Save</button>
                                             </div>
                             </form>
                         </div>
                    
                            
                    </div>
                    <div class="col-xs-2">
                      <div class="panel" id="right-bar" >
                         <div class="right-sidebar">
                                <ul class="sidebar-list">
                                    <li><a href="javascript:void()" id="submitmarks" val="Submit Marks">Submit Marks</a></li>
                                    <li><a href="javascript:void()" id="updatemarks" val="Update Marks" >Update Marks</a></li>
                                    <li><a href="javascript:void()" id="topperformer" val="Top Perfomer" >Top Perfomer</a></li>
                                    <li><a href="javascript:void()" id="studentreport" val="Student Report">Student Reports</a></li>
                                    <li><a href="javascript:void()" id="processmarks" val="" >Process Marks</a></li>
                                    <li><a href="javascript:void()" id="meritlist" val="Merit List" >Merit List</a></li>
                                </ul>
                            </div>
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

      $("#submitmarks").click(function(){
         // var header=$(this).attr("val");
          //$(".formheader").append(header);

          $(".studentmarks").fadeIn();
          $(".update-Marks").hide();
          $(".generalmeritList").hide();
        //  $(".singleinvoice-form").hide();

      })
      $("#updatemarks").click(function(){
         // var header=$(this).attr("val");

         // $(".formheader").append(header);
          $(".update-Marks").fadeIn();
          $(".studentmarks").hide();
          $(".generalmeritList").hide();
         // $(".singleinvoice-form").hide();
        
      })
      $("#topperformer").click(function(){

            $(".batchinvoice-form").fadeIn();
            $(".singleinvoice-form").hide();
            $(".update-Marks").hide();
        
      })
      $("#meritlist").click(function(){
         // var header=$(this).attr("val");
        //   $(".formheader").append(header);
            $(".generalmeritList").fadeIn();
            $(".update-Marks").hide();
            $(".studentmarks").hide();
      
        
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


