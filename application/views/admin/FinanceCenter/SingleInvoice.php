  


<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Finance</li>
            <li class="active">Single Invoice</li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
        <div class="page-header">

                
        </div><!-- /.page-header -->
         <div class="row">
            <div class="col-xs-12">
                 <div class="row">
                    <div class="col-xs-12">
                         <!--invoice single student-->
                         <div class="singleinvoice-form" style="margin-top: 5px">
                             <form role="form" id='singleinvoice'action="index.php/Finance/Invoice/SingleInvoice" method="post">
                                      <div class="row">
                                         <div class="col-md-12">
                                              <div class="row">
                                                   <div class="col-md-6">
                                                          <div class="form-group">
                                                             <div class="input-group">
                                                                <label for="form-field-mask-1">
                                                                  Student RegNo
                                                                 </label>
                                                                      <input class="form-control input-mask-date" type="text" placeholder="click to select student regNo" id="regno_input" required="" name="regno" />
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
                                                                  <input type="text" name="invoice_amount" required="" class="form-control" id="capacity" placeholder="">
                                                           </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label for="exampleInputEmail1">References</label>
                                                              <input type="text" name="description" class="form-control" id="capacity" placeholder="">
                                                            </div>
                                                            <div class="form-group hidden">
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
                  <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="select_studentinvoice">
                      <thead>
                          <tr>
                              <th>##</th>
                              <th>Reg No</th>
                              <th>Name</th>                             
                          </tr>
                      </thead>
                      <tbody>
                        <?php if(!empty($student)){ foreach($student as $row){ ?>
                              <tr studentid="<?= $row->STUDENT_REGNO ?>">
                                   <td class="center">
                                        <label class="pos-rel">
                                                <input type="checkbox" value="<?= $row->STUDENT_REGNO ?>" class="ace" />
                                                <span class="lbl"></span>
                                        </label>
                                    </td>
                                    <td><?= $row->STUDENT_REGNO ?></td>
                                    <td><?= $row->FIRSTNAME ?> <?=  $row->LASTNAME ?></td>                                      
                               </tr>
                       <?php } }?> 
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
  //submit form data
$("#singleinvoice").submit(function(e){
      e.preventDefault();
      var formdata=$(this).serialize();
      var form_url=$(this).attr("action");
      var form_method=$(this).attr("method").toUpperCase();
      $(".result").show();
              $.ajax({
                url:form_url,
                type:form_method,
                data:formdata,
                success:function(data){
                    $(".result").hide();
                    sweetAlert({
                      title:"success",
                      text:"Invoiced successfully",
                      type:"success",
                      onClose:function(){
                         $("#singleinvoice")[0].reset();
                      }
                     })
               }
      })
})
//click to select regno from modal table
$("#select_studentinvoice tbody tr ").click(function(){
    var id=$(this).attr('studentid');   
    $("#regno_input").val(id);
    $("#modal-table").modal('hide');

})

 //$("#example1").DataTable();
    $('#select_studentinvoice').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching":true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
</script>


