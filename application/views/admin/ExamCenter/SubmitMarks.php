

     <!--submit studeny marks t-->

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Exam</li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
          <div class="page-header">
              <h3 style="">Get Student Marks Sheet</h3>
           
            </div><!-- /.page-header -->
        <div class="row">
            <div class="col-xs-12">
                 <div class="row">
                    <div class="col-xs-12">
                          <form role="form" id='getmark_sheetform' >
                                      <div class="row">
                                         <div class="col-md-12">
                                              <div class="row">
                                                   <div class="col-md-6">
                                                          <div class="form-group">
                                                               <label for="exampleInputEmail1">Class </label>
                                                                <select class="chosen-select form-control" id="classid" name="classid" data-placeholder="Choose subject...">
                                                                                  <option value=""></option>
                                                                                  <?php foreach ($classlist as $row ) {   ?>
                                                                                        <option value="<?php echo $row->CLASSLISTID ?>"><?php echo $row->CLASS ?></option>
                                                                                    <?php } ?>
                                                                 </select>
                                                          </div>

                                                           <div class="form-group">
                                                              <label for="exampleInputEmail1">Stream</label>
                                                            <select class="chosen-select form-control" id="streamid" name="streamid"  data-placeholder="Choose stream...">
                                                                                  <option value=""></option>
                                                                                  <?php foreach ($stream as $row ) {   ?>
                                                                                        <option value="<?php echo $row->STREAMID ?>"><?php echo $row->STREAM ?></option>
                                                                                    <?php } ?>
                                                                 </select>
                                                           </div>
                                                          
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                     <label for="exampleInputEmail1">Subject</label>
                                                                     <select class="chosen-select form-control" id="subjectid" name="subjectid" data-placeholder="Choose subject...">
                                                                              <option value=""></option>
                                                                              <?php foreach ($subject as $row ) {   ?>
                                                                                    <option value="<?php echo $row->SUBJECTID ?>"><?php echo $row->SUBJECTNAME ?></option>
                                                                                <?php } ?>
                                                                      </select>
                                                             </div>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                          </div>
                                                 <div class="form-group">
                                                    <button type="button"  id="Submit_Student_marks" value="" class="btn btn-primary pull-right">Get</button>
                                                 </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                        <script>
                              $("#Submit_Student_marks").click(function(){
                                    var subject=$("#subjectid").val();
                                    var classid=$("#classid").val();
                                    var streamid=$("#streamid").val();
                                   // var data='?newsid='+newsid+'&role='+role+'&section='+section;
                                    var formdata='?subjectid='+subject+'&classid='+classid+'&streamid='+streamid;
                                    //var data=$("#getmark_sheetform").serialize();
                                    //var id="?data="+data;
                                    GenericLoad("Exams","loadStudentMarkSheet","",formdata);
                             })


                        </script>
                        