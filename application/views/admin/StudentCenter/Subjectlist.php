


<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Subjects</li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
        <div class="page-header">

                <div class="btn-group float_right page_btn">
                    <div class="btn btn-info dash_btns btn-plus btn-xs glyphicon  glyphicon-plus add-subject" > </div>
                    <div class="btn btn-danger dash_btns  btn-xs delete-studentbtn  glyphicon glyphicon-trash" title=""> </div>
                    <div class="btn btn-success dash_btns btn-xs btn-list  glyphicon glyphicon-list" title="view student"> </div>
                </div>
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
                    <div class="col-xs-12">
                           <div  class="table-responsive subject-table" style="margin-top: -20px;">
                                <table class="table table-striped table-bordered table-hover table-full-width" id="subject-table">
                                   <thead>
                                      <th class="center">
                                              <label class="pos-rel">
                                                      <input type="checkbox" class="ace" />
                                                      <span class="lbl"></span>
                                              </label>
                                       </th>
                                       <th>Subject Code</th>
                                       <th>Subject Name</th>
                                    </thead>
                                    <tbody>
                                     <?php if(!empty($subject)){ foreach($subject as $row){ ?>

                                            <tr studentid="" title="double click to view more">
                                                     <td class="center">
                                                          <label class="pos-rel">
                                                                  <input type="checkbox" value="" class="ace" />
                                                                  <span class="lbl"></span>
                                                          </label>
                                                      </td>
                                                      <td><?= $row->SUBJECTID ?></td>
                                                      <td><?= $row->SUBJECTNAME ?></td>
                                             </tr>

                                     <?php } }?> 

                 
                                    </tbody>
                                </table>
                            </div>

                            <!--add class form-->
                             <div class="subject-form" style="display:none;margin-top: 5px">
                                        <form role="form" id='subjectform' action="index.php/ManageStudents/AddSubject"  method="post">
                                            <div class="row">
                                               <div class="col-md-12">
                                                    <div class="row">
                                                         <div class="col-md-6">
                                                               <!--  <div class="form-group">
                                                                    <label for="exampleInputEmail1">Class ID</label>
                                                                    <input type="text" name="regno"  class="form-control" value="" id="title" placeholder="">
                                                                </div>-->

                                                                 <div class="form-group">
                                                                    <label for="exampleInputEmail1">Subject Name</label>
                                                                    <input type="text" name="subjectname" class="form-control" id="" placeholder="">
                                                                 </div>
                                                                  <div class="form-group">
                                                                   <button type="submit" id="" value="" class="btn btn-primary pull-left">Add</button>
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
    $(function(){
      $(".add-subject").click(function(){
          $(".subject-table").hide();
          $(".subject-form").show();

      })
      $("#subjectform").submit(function(e){
        var formdata=$(this).serialize();
        var form_method=$(this).attr("method");
        var form_url=$(this).attr("action");

        e.preventDefault();
        $.ajax({
          method:form_method,
          url:form_url,
          data:formdata,
          success:function(data){
             // $(".result").hide();
               $(".DisplayMsg").show();
               $(".msg").html(data);
               $("#subjectform input[name=subjectname]").val("");

          }
        })

      })


             $('#subject-table').DataTable({
                      "paging": true,
                      "lengthChange": true,
                      "searching":true,
                      "ordering": true,
                      "info": true,
                      "autoWidth": false
            });

    })
    </script>


