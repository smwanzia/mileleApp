

     <!--submit studeny marks t-->

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Exam</li>
           <li class="active">Raw Marks</li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
          <div class="page-header">
              <h3 style="">Get Student Raw Marks </h3>
           
            </div><!-- /.page-header -->
        <div class="row">
            <div class="col-xs-12">
                 <div class="row">
                    <div class="col-xs-12">
                          <form role="form" id='Rawmarks_form'>
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
                                                              <label for="exampleInputEmail1">Year</label>
                                                            <select class="chosen-select form-control" id="year" name="year">
                                                                         <option value=""></option>
                                                                         <option value="2018">2018</option>
                                                                            
                                                                 </select>
                                                           </div>
                                                          
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                     <label for="exampleInputEmail1">Exam Type</label>
                                                                     <select class="chosen-select form-control" id="examid" name="examtype">
                                                                              <option value=""></option>
                                                                              <?php foreach ($exam as $row ) {   ?>
                                                                                    <option value="<?php echo $row->examid?>"><?php echo $row->EXAMNAME ?></option>
                                                                                <?php } ?>
                                                                      </select>
                                                             </div>
                                                             <div class="form-group">
                                                                     <label for="exampleInputEmail1">Term</label>
                                                                     <select class="chosen-select form-control" id="term" name="term" data-placeholder="Choose subject...">
                                                                              <option value=""></option>
                                                                              <option value="TERM 1">TERM 1</option>
                                                                              <option value="TERM 2">TERM 2</option>
                                                                              <option value="TERM 3">TERM 2</option>
                                                                      </select>
                                                             </div>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                          </div>
                                                 <div class="form-group">
                                                    <button type="button"  id="Student_Rawmarks_form" value="" class="btn btn-primary pull-right">Get</button>
                                                 </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                        <script>
                              $("#Student_Rawmarks_form").click(function(){
                                    var classid=$("#classid").val();
                                    var year=$("#year").val();
                                    var term=$("#term").val();
                                    var examid=$("#examid").val();
                                   // var data='?newsid='+newsid+'&role='+role+'&section='+section;
                                    var formdata='?year='+year+'&classid='+classid+'&term='+term+'examid='+examid;
                                    //var data=$("#getmark_sheetform").serialize();
                                    //var id="?data="+data;
                                    GenericLoad("Exams","loadRawMarkSheet","",formdata);
                             })


                        </script>
                        