      

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Finance</li>
            <li class="active">Receive Payment</li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
        <div class="page-header">
             <div class="btn-group float_right  page_btn">
                   <div class="result" style="margin-left: 155px;margin-top: -7px;font-size: 18px;background: #ece4e4;padding: 6px;display:none">
                      loading...</div>
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
                          
                        <div class="receivepayment" style="margin-top: 5px">
                                 <form role="form" id='Receivepaymentform'  action="index.php/Finance/Invoice/ReceivePayment" method="post">
                                        <div class="row">
                                           <div class="col-md-12">
                                                <div class="row">
                                                     <div class="col-md-6">
                                                            <div class="form-group">
                                                                  <label for="exampleInputEmail1">Student RegNo</label>
                                                                   <input class="form-control input-mask-date" id="regno" type="text"  name="regno"  required="" placeholder="click to select student regNo"/>
                                                                        <span class="input-group-btn">
                                                                          <a href="#modal-table" role="button" data-toggle="modal" class="btn btn-sm btn-default" type="button" style="margin-top: -36px;margin-left: 469px;">
                                                                            <i class="ace-icon fa fa-list bigger-110" ></i>
                                                                            Go!
                                                                          </a>
                                                                        </span>
                                                            </div>

                                                             <div class="form-group">
                                                                <label for="exampleInputEmail1">Invoice Amount</label>
                                                                <input type="text" name="invoice_amount" class="form-control" id="capacity"  required="" placeholder="">
                                                             </div>
                                                              <div class="form-group">
                                                                <label for="exampleInputEmail1">Payment Type</label>
                                                               <select type="text" name="payment_type" class="form-control select selected" required=""  placeholder="">
                                                                            <option>CASH</option>
                                                                            <option>MPESA</option>
                                                                            <option>CHEQUE</option>
                                                                    </select>
                                                             </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">References</label>
                                                                    <input type="text" name="reference" class="form-control" id="capacity" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">TERM</label>
                                                                    <select type="text" name="term" class="form-control select selected" required=""  placeholder="">
                                                                            <option>TERM 1</option>
                                                                            <option>TERM 2</option>
                                                                            <option>TERM 2</option>
                                                                    </select>
                                                                 </div>
                                                                 <div class="form-group">
                                                                       <label for="exampleInputEmail1">Description</label>
                                                                       <textarea name="description" class="form-control" rows="4"></textarea>
                                                                 </div>
                                                           
                                                       </div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-md-6">
                                                          <button type="submit" id="" value="" class="btn btn-primary pull-right">Receive Payment</button>
                                                       </div>
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
                  <!--<table class="table table-striped table-bordered table-hover no-margin-bottom table-full-width no-border-top student-tablemodal" >-->
                     <table class="table table-striped table-bordered table-hover table-full-width" id="student_payment_modal">
                     <thead>
                          <tr>
                              <th>Reg No</th>
                              <th>Name</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($student as $row ) { ?>
                            <tr regno="<?= $row->STUDENT_REGNO ?>">
                                <td><?= $row->STUDENT_REGNO ?></td>
                                <td><?= $row->FIRSTNAME ?> <?= $row->LASTNAME ?></td>                         
                            </tr> 
                        <?php } ?>
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
$("#Receivepaymentform").submit(function(e){
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
                          text:data,
                          type:"success",
                          onClose:function(){
                              $("#Receivepaymentform")[0].reset();
                          }
                     })
               }
      })
})

$("#student_payment_modal tbody tr").click(function(){
        var regno=$(this).attr("regno");
        $("#Receivepaymentform").find('input[name=regno]').val(regno);
        $("#modal-table").modal('hide');
})


$("#student_payment_modal").dataTable({
        "paging": true,
        "lengthChange": true,
        "searching":true,
        "ordering": true,
        "info": true,
        "aLengthMenu":[[5,10,15,20,-1],[5,10,15,20,"All"]],
        "autoWidth": false
});
</script>

  



















