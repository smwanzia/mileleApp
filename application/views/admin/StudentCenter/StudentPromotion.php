


<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">ManageStudent</li>
             <li class="active">Student Promotion</li>
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
                    <div class="col-xs-8" id="promotioncenter">
                     
                         

                            
                    </div>
                    <div class="col-md-4" id="statement-sidebar" style="background: #efefef;margin-top: -22px;">
                      <!--add class form-->
                      <h1 style="font-size: 16px;">Select Class</h1>
                             <div class="perclass" style="margin-top: 5px">
                                        <form role="form" id='promotionform'>
                                            <div class="row">
                                               <div class="col-md-12">
                                                    <div class="row">
                                                         <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="exampleInputEmail1">Class ID</label>
                                                                    <select class="form-control select2" name="classname" id="classid" value="" style="width: 100%;">
                                                                             <?php foreach ($class as $key) { ?>
                                                                                      <option value="<?= $key->CLASSLISTID ?>"><?= $key->CLASS ?></option>
                                                                             <?php } ?>
                                                                     </select>
                                                                </div>

                                                           </div>
                                                           <div class="col-md-6">
                                                               
                                                                <div class="form-group">
                                                                    <label for="category">Stream</label>
                                                                     <select class="form-control select2" name="stream"  value="" style="width: 100%;">
                                                                                   <?php if(!empty($stream)){ foreach($stream as $row){ ?>
                                                                                       <option  value="<?= $row->STREAMID ?>"><?= $row->STREAM ?></option>
                                                                                 <?php }} ?>
                                                                     </select>
                                                                </div>
                                                                <button type="submit" value="" class="btn btn-xs btn-primary pull-left">Get Students</button>

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
    $(function(){

                $("#promotionform").submit(function(e){
                  e.preventDefault();
                     // var subject=$("#subjectid").val();
                      var classid=$("#classid").val();
                     // var streamid=$("#streamid").val();
                     // var data='?newsid='+newsid+'&role='+role+'&section='+section;
                      var formdata='?classid='+classid;
                      //var data=$("#getmark_sheetform").serialize();
                      //var id="?data="+data;
                      var loadat="#promotioncenter"
                      GenericLoad("ManageStudents","loadstudentpromotionSheet",loadat,formdata);
                })


             $('#classlis-table').DataTable({
                      "paging": true,
                      "lengthChange": true,
                      "searching":true,
                      "ordering": true,
                      "info": true,
                      "autoWidth": false
            });

    })
    </script>


