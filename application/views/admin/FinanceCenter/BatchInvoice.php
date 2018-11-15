  





<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Finance</li>
            <li class="active">Batch Invoice</li>
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
                      <!--batch invoice  form-->
                        <div class="batchinvoice-form" style="margin-top: 5px">
                                <form role="form" id='batchinvoiceForm' action="index.php/Finance/Invoice/BatchInvoice" method="post" >
                                    <div class="row">
                                       <div class="col-md-12">
                                            <div class="row">
                                                 <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">Class ID</label>
                                                            <select class="form-control select2" name="class" required="" id="" value="" style="width: 100%;">
                                                                   <option selected="selected"></option>
                                                                   <?php foreach ($classlist as $key) { ?>
                                                                     <option value="<?= $key->CLASSLISTID ?>"><?= $key->CLASS ?></option>
                                                                    <?php } ?>
                                                            </select>
                                                        </div>
                                                 </div>
                                                   <div class="col-md-6">
                                                     <div class="form-group">
                                                             <label for="exampleInputEmail1">Term</label>
                                                             <select class="form-control select2" name="term" required="" id="term" value="" style="width: 100%;">
                                                                   <option selected="selected"></option>
                                                                   <option selected="selected">TERM 1</option>
                                                                   <option selected="selected">TERM 2</option>
                                                                   <option selected="selected">TERM 3</option>
                                                              </select>
                                                         </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                     <div class="form-group">
                                                             <label for="exampleInputEmail1">Description</label>
                                                             <textarea name="description" class="form-control" required="" rows="4"></textarea>
                                                         </div>
                                                   </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                             <button type="submit" id="" value="" class="btn btn-primary pull-left">Invoice</button>
                                                         </div>
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
<script>
$("#batchinvoiceForm").submit(function(e){
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
                    // $(".DisplayMsg").show();
                    // $(".msg").html("Invoiced successfully ");
                  sweetAlert({
                      title:"success",
                      text:"Invoiced successfully",
                      type:"success",
                      onClose:function(){
                         $("#batchinvoiceForm")[0].reset();
                      }
                     })
               }
      })
})
</script>

  