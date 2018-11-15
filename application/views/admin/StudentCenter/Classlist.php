


<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Students</li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
        <div class="page-header">

                <div class="btn-group float_right page_btn">
                    <div class="btn btn-info dash_btns btn-plus btn-xs glyphicon AddClass glyphicon-plus">Add Class</div>
                    <div class="btn btn-danger dash_btns  btn-xs delete-studentbtn hidden glyphicon glyphicon-trash" title="Add student"></div>
                    <div class="btn btn-success dash_btns btn-xs btn-list  glyphicon glyphicon-list" title="generate class sheet"> Class Sheet </div>
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
                           <div  class="table-responsive class-table" style="margin-top: -20px;">
                                <table class="table table-striped table-bordered table-hover table-full-width" id="classlist-table">
                                   <thead>
                                      <th class="center">
                                              <label class="pos-rel">
                                                      <input type="checkbox" class="ace" />
                                                      <span class="lbl"></span>
                                              </label>
                                       </th>
                                       <th>Class Name</th>
                                       <th>Stream</th>
                                       <th>Class Teacher</th>
                                    </thead>
                                    <tbody>
                                     <?php if(!empty($classlist)){ foreach($classlist as $row){ ?>

                                            <tr title="double click to get class sheet" streamid="<?= $row->STREAMID ?>" classid="<?= $row->CLASSLISTID ?>">
                                                     <td class="center">
                                                          <label class="pos-rel">
                                                                  <input type="checkbox" value="" class="ace" />
                                                                  <span class="lbl"></span>
                                                          </label>
                                                      </td>
                                                      <td><?= $row->CLASS ?></td>
                                                      <td><?= $row->STREAM ?></td>
                                                      <td><?= $row->CLASSTEACHER?></td>
                                           </tr>

                                     <?php } }?> 

                                    </tbody>
                                </table>
                            </div>

                            <!--add class form-->
                             <div class="class-form" style="display:none;margin-top: 5px">
                                        <form role="form" id='classform' >
                                            <div class="row">
                                               <div class="col-md-12">
                                                    <div class="row">
                                                         <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="exampleInputEmail1">Class Name</label>
                                                                    <input type="text" name="firstname" class="form-control" id="capacity" placeholder="">
                                                                 </div>
                                                                  <div class="form-group">
                                                                    <label for="exampleInputPassword1">Class Teacher</label>
                                                                     <input type="text" name="lastname" class="form-control" id="capacity" placeholder="">
                                                                 </div>
                                                           </div>
                                                           <div class="col-md-6">
                                                               
                                                                <div class="form-group">
                                                                    <label for="category">Stream</label>
                                                                     <select class="form-control select2" name="gender" id="gender" value="" style="width: 100%;">
                                                                                 <option selected="selected"></option>
                                                                                 <option selected="selected">East</option>
                                                                                 <option selected="selected">West</option>
                                                                                 <option selected="selected">North</option>
                                                                                 <option selected="selected">South</option>
                                                                                 <option selected="selected">North East</option>
                                                                                 <option selected="selected">South East</option>

                                                                     </select>
                                                                </div>
                                                             </div>
                                                           <div class="col-md-6">
                                                               <button type="submit" id="" value="" class="btn btn-primary pull-right">Save</button>
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
      $(".AddClass").on("click",function(){
            $(".class-table").hide();
            $(".class-form").show();
      })
      //double click to view student
      $('body').on('dblclick',"#classlist-table tbody tr",function(){
          var id=$(this).attr("classid");
           var streamid=$(this).attr("streamid");
          //alert(id)
          var classid='?classid='+id+'&streamid='+streamid;
          GenericLoad("ManageStudents","ClassSheet","",classid);
        
      });


             $('#classlist-table').DataTable({
                      "paging": true,
                      "lengthChange": true,
                      "searching":true,
                      "ordering": true,
                      "info": true,
                      "autoWidth": false
            });

    })
    </script>