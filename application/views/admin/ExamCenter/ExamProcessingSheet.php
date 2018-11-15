


<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
            </li>
            <li class="active">Finance</li>
             <li class="active">Student Statement</li>
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
                           <div  class="table-responsive student-table" style="margin-top: -20px;">
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
                      <h1 style="font-size: 16px;">Select Exam Type</h1>
                             <div class="perclass" style="margin-top: 5px">
                                        <form role="form" id='studentform' >
                                            <div class="row">
                                               <div class="col-md-12">
                                                    <div class="row">
                                                         <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label for="exampleInputEmail1">Class ID</label>
                                                                    <input type="text" name="regno"  class="form-control" value="" id="title" placeholder="">
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
                                                                <button type="submit" id="" value="" class="btn btn-xs btn-primary pull-left">Get</button>

                                                           </div>
                                                        </div>

                                            </div>

                                    </div>
                             </form>
                         </div>
                              <!--add class form-->
                              <h1 style="font-size: 16px;">End Term Exam</h1>
                             <div class="per_student" style="margin-top: 5px">
                                        <form role="form" id='perstudent' >
                                            <div class="row">
                                               <div class="col-md-12">
                                                    <div class="row">
                                                         <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Student RegNo</label>
                                                                    <input type="text" name="regno"  class="form-control" value="" id="title" placeholder="">
                                                                </div>

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

    </div>


    <script>
    $(function(){


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


