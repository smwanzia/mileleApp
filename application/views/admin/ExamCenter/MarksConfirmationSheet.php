
 
<style>
.myinput{
  margin-left: 40px;
}
</style>




 <div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Exam</li>
            <li class="active">Marks Confirmation Sheet</li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
          <div class="page-header">
             
              <h3 style="margin-top: 1px;font-size: 15px;">Confirm Student Marks</h3>
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
                       <form class="form-inline" id="marksConfirmationform" action="" method="post">
                               <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">Class</label>-->
                                     <input type="text" class="chosen-select form-control" value="<?php echo $this->session->userdata('class') ?>"  id="form-field-select-3" placeholder="Class" data-placeholder="class">
                                       <input type="hidden" class="chosen-select form-control"  name="classid" value="<?php echo $this->session->userdata('classid') ?>">
                               </div>
                               <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">Stream</label>-->
                                     <input type="text" class="chosen-select form-control myinput"  value="<?php echo $this->session->userdata('stream') ?>"  id="form-field-select-3" placeholder="Stream" data-placeholder="stream">
                                        <input type="hidden" class="chosen-select form-control myinput" name="stream" value="<?php echo $this->session->userdata('streamid') ?>">
                               </div>
                               <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">Subject</label>-->
                                     <input type="text" class="chosen-select form-control myinput" name="subject" id="form-field-select-3" value="<?php echo  $this->session->userdata('subject') ?>" placeholder="Subject"  data-placeholder="subject">
                                 <input type="hidden" class="chosen-select form-control myinput" name="subjectid" id="form-field-select-3" value="<?php echo  $this->session->userdata('subjectid') ?>" placeholder="Subject"  data-placeholder="subject">
                               </div>
                               <div class="form-group">
                                  <!-- <label for="exampleInputEmail1">Exam Title</label>-->
                                   <select class="chosen-select form-control myinput" name="exam_title" id="form-field-select-3" placeholder="Exam Title"  data-placeholder="Choose subject...">
                                           <?php foreach ($examtype as $row ) { ?>
                                               <option value="<?= $row->examid ?>"><?= $row->EXAMNAME ?></option>
                                          <?php  } ?>
                                    </select>
                               </div>
                               <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">Term</label>-->
                                     <select class="chosen-select form-control myinput" name="term" id="form-field-select-3" placeholder="Term"  data-placeholder="Choose subject...">
                                              <option value="Term 1">Term 1</option>
                                              <option value="Term 2">Term 2</option>
                                              <option value="Term 3">Term 3</option>
                                     </select>
                               </div>
                         
                          
                          <br/>
                          <br/>


                          <div  class="table-responsive student-table" style="margin-top: -20px;">
                                <table class="table table-striped table-bordered table-hover table-full-width" id="student-table">
                                   <thead>
                                      <th class="center">
                                              <label class="pos-rel">
                                                      <input type="checkbox" class="ace" />
                                                      <span class="lbl"></span>
                                              </label>
                                       </th>
                                       <th>Reg Number</th>
                                       <th>Student Name</th>
                                       <th>Marks</th>
                                    </thead>
                                    <tbody>
                                     <?php if(!empty($student_marksheet)){ foreach($student_marksheet as $row){ ?>

                                            <tr studentid="">
                                                     <td class="center">
                                                          <label class="pos-rel">
                                                                  <input type="checkbox" value="<?= $row->STUDENT_REGNO ?>" class="ace" />
                                                                  <input type="hidden" name="regno[]" value="<?= $row->STUDENT_REGNO ?>" class="form-control input-sm"/>
                                                                  <span class="lbl"></span>
                                                          </label>
                                                      </td>
                                                      <td><?= $row->STUDENT_REGNO ?></td>
                                                      <td><?= $row->FIRSTNAME ?>  <?=  $row->LASTNAME ?></td>
                                                      <td><input type="text" id="marks" name="" disabled="" class="form-control input-sm"></td>
                                             </tr>

                                     <?php } }?> 

                                    </tbody>
                                </table>
                             </div>
                             <button type="submit" class="btn btn-sm btn-default pull-right marksheet_btn">Submit</button>
                          </form> 
                        </div>
                   </div>
                </div>
           </div>
        </div>

        <script>
            $("#marksfor").submit(function(e){
                    e.preventDefault();
                    var data = new Array();
                   // var regno=[];
                    $("#marksform").find("input[name=marks]").each(function(){
                      var mark=$(this).val();
                      data.push({"MARKS_OBTAINED":mark});
                     // data['MARKS_OBTAINED'].push(mark);

                    });
                     $("#marksform").find("input[name=regno]").each(function(){
                      var id=$(this).val();
                      data.push({"STUDENT_REGNO" : id});
                      //data['STUDENT_REGNO'].push(id);

                    });
                   // data.push({"SUBJECTID":"Mathematic"});
                    // data['SUBJECTID']="Mathematics";
                   //j data.push({"CLASSID": "FORM 1"});
                     //data['CLASSID']="FORM 1";
                    var formdata=$(this).serialize();
                    var form_url=$(this).attr("action");
                    var form_method=$(this).attr("method").toUpperCase();
                    $("result").show();
                    $.ajax({
                      url:form_url,
                      type:form_method,
                      data:formdata,
                      success:function(data){
                           $(".result").hide();
                           $(".DisplayMsg").show();
                           $(".msg").html("Marks Added successfully added");
                           $("#marksform").find("input[name=marks]").each(function(){
                               $(this).val("");
                           })



                      }


             })

        })
        </script>