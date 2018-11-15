


<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Finance</li>
            <li class="active">Student Finance Statement</li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
    <div class="page-header">
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
                  <div class="col-xs-8">
                         <div  class="table-responsive student-table " id="Result-Center" style="margin-top: -20px;">
                              <table class="table table-striped table-bordered table-hover table-full-width" id="classlist-table">
                                 <thead>
                                     <th>Receipt/inv</th>
                                     <th>Description</th>
                                     <th>Debit</th>
                                     <th>Credit</th>
                                  </thead>
                                  <tbody>
                                         <?php if(!empty($class)){ foreach($class as $row){ ?>

                                                <tr studentid="<?= $row->REGNO ?>" title="double click to view more">
                                                         <td class="center">
                                                              <label class="pos-rel">
                                                                      <input type="checkbox" value="<?= $row->Id ?>" class="ace" />
                                                                      <span class="lbl"></span>
                                                              </label>
                                                          </td>
                                                          <td><?= $row->REGNO ?></td>
                                                          <td><?= $row->FIRSTNAME ?> <?=  $row->LASTNAME ?></td>
                                                          <td><?= $row->CLASSID ?></td>
                                                          <td><?= $row->STREAMID?></td>
                                                        
                                                 </tr>

                                         <?php } }?> 

               
                                  </tbody>
                              </table>
                          </div>

                          
                  </div>
                    <div class="col-md-4" id="statement-sidebar" style="background: #efefef;margin-top: -22px;">
                      <!--add class form-->
                     <h1 style="font-size: 15px;">Class Statement</h1>
                         <div class="perclass" style="margin-top: 5px">
                                <form role="form" id='class_statementform' action="<?php echo base_url();?>index.php/Finance/Invoice/ClassStatement" method="post"  >
                                    <div class="row">
                                       <div class="col-md-12">
                                            <div class="row">
                                                 <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">Class ID</label>
                                                               <select class="form-control select2" name="class" id="    gender" value="" style="width: 100%;">
                                                                     <option selected="selected"></option>
                                                                       <?php foreach ($classlist as $key) { ?>
                                                                          <option value="<?= $key->CLASSLISTID ?>"><?= $key->CLASS ?></option>
                                                                       <?php } ?>                                                                    
                                                             </select>
                                                        </div>

                                                   </div>
                                                    <div class="col-md-4">
                                                       <div class="form-group">
                                                          <label for="exampleInputEmail1">Term</label>
                                                          <select class="form-control select2" name="term" id="" value="" style="width: 100%;">
                                                                       <option selected="selected">TERM 1</option>
                                                                       <option selected="selected">TERM 2</option> 
                                                                      <option selected="selected">TERM 3</option>                    </select>
                                                      </div>

                                                   </div>
                                                   <div class="col-md-4">     
                                                       <div class="form-group">
                                                            <label for="category">Stream</label>
                                                             <select class="form-control select2" name="stream" value="" style="width: 100%;">
                                                                         <option selected="selected"></option>
                                                                           <?php foreach ($stream as $key) { ?>
                                                                              <option value="<?= $key->STREAMID ?>"><?= $key->STREAM ?></option>
                                                                             <?php } ?>                                                                    
                                                             </select>
                                                        </div>
                                                        <button type="submit" id="" value="" class="btn btn-xs btn-primary pull-left">Get</button>

                                                   </div>
                                                </div>

                                    </div>

                            </div>
                     </form>
                         </div>
                              <!--add class form-->
                             <h1 style="font-size: 15px;">Student Statement</h1>
                             <div class="per_student" style="margin-top: 5px">
                                  <form action="<?php echo base_url();?>index.php/Finance/Invoice/StudentStatement" role="form" id='perstudent' method="post">
                                            <div class="row">
                                               <div class="col-md-12">
                                                    <div class="row">
                                                         <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <label for="exampleInputEmail1">Student RegNo</label>
                                                                     <input class="form-control input-mask-list" type="text" placeholder="click to select student regNo" id="studentregno_input" required="" id="regno_input" name="regno" />
                                                                        <span class="input-group-btn">
                                                                          <a href="#modal-table" role="button" data-toggle="modal" class="btn btn-sm btn-default" type="button" style="margin:-36px 0px 0px 282px;">
                                                                            <i class="ace-icon fa fa-list bigger-110" ></i>
                                                                            Go!
                                                                          </a>
                                                                        </span>
                                                                    <!--<input type="text" name="regno"  class="form-control" value="" id="title" placeholder="">-->
                                                                </div>
                                                                <button type="submit" id="" value="" class="btn btn-primary btn-xs pull-left">Get</button>

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
                  <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="select_perstudent">
                      <thead>
                          <tr>
                              <th>##</th>
                              <th>Reg No</th>
                              <th>Name</th>                             
                          </tr>
                      </thead>
                      <tbody>
                        <?php if(!empty($student)){ foreach($student as $row){ ?>
                              <tr studentids="<?= $row->STUDENT_REGNO ?>">
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

    </div>


    <script>
    $(function(){
       $("#perstudent").submit(function(e){
        e.preventDefault();
        var regno=$("#regno_input").val();
        var formdata=$("#perstudent").serialize();
        var form_url=$(this).attr("action");
        var form_method=$(this).attr("method").toUpperCase();
        $(".result").show();
                $.ajax({
                  url:form_url,
                  method:form_method,
                  data:formdata,
                  success:function(data){
                      $(".result").hide();
                       $("#Result-Center").html(data);
                      // $.get("<?php echo base_url();?>index.php/Finance/Invoice/StudentStatement",{},function(user){
                          // $("#Result-Center").html(user);

                      //})
                 }
             })
        })

        //classlist statement
        $("#class_statementform").submit(function(e){
            e.preventDefault();           
            var formdata=$(this).serialize();
            var form_url=$(this).attr("action");
            var form_method=$(this).attr("method").toUpperCase();
            $(".result").show();
                    $.ajax({
                      url:form_url,
                      method:form_method,
                      data:formdata,
                      success:function(data){
                        $("#Result-Center").html(data);
                       //$("#Result-Center").load(base_url+"index.php/Finance/Invoice/ClassStatement",);                        
                          // $.get("<?php echo base_url();?>index.php/Finance/Invoice/ClassStatement",{},function(data){
                              // $("#Result-Center").html(data);

                          //})
                     }
                 })
        })

     //click to select regno from modal table
$("#select_perstudent tbody tr ").click(function(){
    var id=$(this).attr('studentids');   
    $("#studentregno_input").val(id);
    $("#modal-table").modal('hide');

})    

$('#select_perstudent').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching":true,
        "ordering": true,
        "info": true,
        "autoWidth": false
});

})
    </script>


