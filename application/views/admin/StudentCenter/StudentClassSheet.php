


<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Students</li>
             <li class="active">Class Sheet</li>
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
                                       <th>RegNo</th>
                                       <th>Name</th>
                                      
                                    </thead>
                                    <tbody>
                                     <?php if(!empty($classsheet)){ foreach($classsheet as $row){ ?>
                                            <tr title="">
                                                     <td class="center">
                                                          <label class="pos-rel">
                                                                  <input type="checkbox" value="" class="ace" />
                                                                  <span class="lbl"></span>
                                                          </label>
                                                      </td>
                                                      <td><?= $row->STUDENT_REGNO ?></td>
                                                      <td><?= $row->FIRSTNAME ?> <?= $row->LASTNAME ?></td>
                                           </tr>

                                     <?php } }?> 

                                    </tbody>
                                </table>
                            </div>
                    </div>
                 </div>
            </div>
        </div>

    </div>


    <script>
    $(function(){
             $('#classsheet-table').DataTable({
                      "paging": true,
                      "lengthChange": true,
                      "searching":true,
                      "ordering": true,
                      "info": true,
                      "autoWidth": false
            });

    })
    </script>