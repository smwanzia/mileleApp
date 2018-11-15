



<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
            <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Members</a>
            </li>
            <li class="active">Eligible</li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
    <div class="page-header">
        <div class="btn-group float_right page_btn">
              <div class="btn btn-info dash_btns btn-plus btn-xs glyphicon  glyphicon-plus" > </div>
                <div class="btn btn-danger dash_btns  btn-xs delete-studentbtn  glyphicon glyphicon-trash" title="Add student"> </div>
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
                           <div  class="table-responsive student-table" style="margin-top: -20px;">
                                <table class="table table-striped table-bordered table-hover table-full-width" id="eligible-table">
                                   <thead>
                                      <th class="center">
                                            <label class="pos-rel">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                            </label>
                                       </th>
                                       <th>Name</th>
                                       <th>National Id</th>
                                       <th>Phone Number</th>
                                       <th>Scheme</th>
                                       <th>Date Registered</th>
                                       <th>Status</th>
                                     </thead>
                                    <tbody>
                                     <?php if(!empty($eligible)){ foreach($eligible as $row){ ?>
                                        <tr memberid="<?= $row->MEMBER_ID ?>" title="double click to view more">
                                                 <td class="center">
                                                      <label class="pos-rel">
                                                              <input type="checkbox" value="<?= $row->MEMBER_ID ?>" class="ace" />
                                                              <span class="lbl"></span>
                                                      </label>
                                                  </td>                                                  
                                                  <td><?= $row->FIRSTNAME ?> <?=  $row->LASTNAME ?></td>
                                                  <td><?= $row->NATIONAL_ID ?></td>
                                                  <td><?= $row->PHONE ?></td>
                                                  <td><?= $row->SCHEME_NAME ?></td>
                                                  <td><?= $row->DATE_REGISTERED ?></td>
                                                  <td><?= $row->STATUS ?></td>
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
    </div>
    
     <script>        
      
       //double click to view student
      $('body').on('dblclick',"#eligible-table tbody tr",function(){
        //$(".overlay").show();
          var id=$(this).attr("membersid");
          var memberid="?membersid="+id;
          GenericLoad("Members","adminmember_profile","",memberid);        
      });
     
     //delete student
     $("body").on('click',".delete-studentbtn",function(){
            var id=[];
            $(':checkbox:checked').each(function(i){
                 id[i]=$(this).val();
              })
            if(id.length===0){
               sweetAlert("Oops...", "Select atleast one checkbox!", "error");
                  //alert("select atleat one checkbox");
            }else{
                 //GenericDelete(id,"ManageStudents","deleteStudent","studentlist");
                  $.ajax({
                       type: "POST",
                       url:"<?php echo base_url();?>index.php/ManageStudents/deleteStudent",
                       data:{id:id},
                      success:function(data){                      
                           sweetAlert({
                              title:"success",
                              text:data,
                              type:"success",
                              onClose:function(){
                                      $.get("<?php echo base_url();?>index.php/ManageStudents/studentlist",{},function(user){
                                          $(".main-content-inner").html(user);

                                      })
                                 
                               }
                          })

                      
                        }
              })
            }

            
     });
     
      
    //$("#example1").DataTable();
    $('#eligible-table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching":true,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });

</script>
         
	