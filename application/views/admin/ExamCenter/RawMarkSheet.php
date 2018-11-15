
 
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
             
              <h3 style="margin-top: 1px; text-align:center">MARK SHEET FOR  FORM 1 <?php echo $this->session->userdata('class') ?> </h3>
              <h3 style="text-align:center">CAT 1  TERM 1  2018</h3>
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
                       <div  class="table-responsive student-table" style="margin-top: -20px;">
                                <table class="table table-striped table-bordered table-hover table-full-width" id="student-table">
                                    <thead>
                                         <th>REGNO</th>
                                         <th>NAME</th>
                                           <?php if(!empty($marksheet)){ foreach($marksheet as $row){ ?>
                                            <th><?= $row->SUBJECTNAME ?></th>
                                         <?php } }?> 
                                    </thead>
                                    <tbody>
                                     <?php if(!empty($marksheet)){ foreach($marksheet as $row){ ?>
                                            <tr>
                                                     
                                                      <td><?= $row->STUDENT_REGNO ?></td>
                                                      <td><?= $row->FIRSTNAME ?>  <?=  $row->LASTNAME ?></td>
                                                     
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

       