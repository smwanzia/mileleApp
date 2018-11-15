


     <!--submit studeny marks t-->

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Exam</li>
             <li class="active">Update Marks</li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
          <div class="page-header">
              <h3 style="">Update Marks</h3>
           
            </div><!-- /.page-header -->
        <div class="row">
            <div class="col-xs-12">
                 <div class="row">
                    <div class="col-xs-12">
                           <!--Update Student  Marks-->
                             <div class="update-Marks" style="margin-top: 5px">
                            
                                        <form role="form" id='updateform' >
                                            <div class="row">
                                               <div class="col-md-12">
                                                    <div class="row">
                                                         <div class="col-md-6">
                                                              <div class="input-group">
                                                                <label for="form-field-mask-1">
                                                                  Student RegNo
                                                                 </label>
                                                                      <input class="form-control input-mask-date" id="regno" type="text" name="regno" placeholder="click to select student regNo"/>
                                                                        <span class="input-group-btn">
                                                                          <a href="#modal-table" role="button" data-toggle="modal" class="btn btn-sm btn-default" type="button" style="margin-top: 27px;">
                                                                            <i class="ace-icon fa fa-calendar bigger-110" ></i>
                                                                            Go!
                                                                          </a>
                                                                        </span>
                                                                  </div>
                                                                 <div class="form-group">
                                                                      <label for="exampleInputEmail1">Subject</label>
                                                                      <select class="chosen-select form-control" name="subject" id="subject" data-placeholder="Choose subject...">
                                                                              <option value=""></option>
                                                                              <?php foreach ($subject as $row ) {   ?>
                                                                                    <option value="<?php echo $row->SUBJECTID ?>"><?php echo $row->SUBJECTNAME ?></option>
                                                                                <?php } ?>
                                                                       </select>
                                                                 </div>
                                                           </div>
                                                           <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="">Exam Type</label>
                                                                     <select class="chosen-select form-control" name="examtype" id="examtype" data-placeholder="Choose exam...">
                                                                              <option value=""></option>
                                                                              <?php foreach ($exam as $row ) {   ?>
                                                                                    <option value="<?php echo $row->examid ?>"><?php echo $row->EXAMNAME ?></option>
                                                                              <?php } ?>
                                                                       </select>
                                                                 </div>
                                                               
                                                           </div>
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="">Term</label>
                                                                     <select class="chosen-select form-control" id="term" name="term" data-placeholder="Choose exam...">
                                                                              <option value="Term 1">Term 1</option>
                                                                              <option value="Term 2">Term 2</option>
                                                                              <option value="Term 3">Term 3</option>
                                                                             
                                                                       </select>
                                                                 </div>
                                                               
                                                           </div>
                                                     </div>
                                                 </div>
                                           </div>
                                                 <div class="form-group">
                                                    <button type="submit" id="GetUpdateStudentMarkSheet" value="" class="btn btn-primary pull-right">Get Student Marks</button>
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
                                       <table class="table table-striped table-bordered table-hover table-full-width" id="student-tablemodal">
                                       <thead>
                                            <tr>
                                                <th>Reg No</th>
                                                <th>Name</th>
                                                <th>Class</th>
                                                <th>Stream</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($student as $row ) { ?>
                                          <tr regno="<?= $row->STUDENT_REGNO ?>">
                                            <td><?= $row->STUDENT_REGNO ?></td>
                                            <td><?= $row->FIRSTNAME ?> <?= $row->LASTNAME ?></td>
                                            <td><?= $row->CLASSID ?></td>
                                            <td><?= $row->STREAMID ?></td>
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
                              $("#GetUpdateStudentMarkSheet").click(function(e){
                                    e.preventDefault();
                                    var regno=$("#regno").val();
                                    var examtype=$("#examtype").val();
                                    var term=$("#term").val();
                                    var subject=$("#subject").val();
                                    
                                   // var data='?newsid='+newsid+'&role='+role+'&section='+section;
                                     var formdata='?regno='+regno+'&examtype='+examtype+'&term='+term+'$subject='+subject;
                                    //var data=$("#getmark_sheetform").serialize();
                                    //var id="?data="+data;
                                     GenericLoad("Exams","loadUpdateMarkSheet","");
                             })
                              $("#student-tablemodal tbody tr").click(function(){
                                  var regno=$(this).attr("regno");
                                  $("#updateform").find('input[name=regno]').val(regno);
                                  $("#modal-table").modal('hide');
                              })


                              $("#student-tablemodal").dataTable({
                                      "paging": true,
                                      "lengthChange": true,
                                      "searching":true,
                                      "ordering": true,
                                      "info": true,
                                      "aLengthMenu":[[5,10,15,20,-1],[5,10,15,20,"All"]],
                                      "autoWidth": false
                              });


                        </script>
                        
 