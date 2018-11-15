  



<style>
.active{
  background-color: #e6e6e6;
}
</style>


  <div  class="table-responsive student-table" style="margin-top: -20px;">
                                <table class="table table-striped table-bordered table-hover table-full-width" id="promotion-table">
                                   <thead>
                                      <th class="center">
                                              <label class="pos-rel">
                                                      <input type="checkbox" id="thead_checkbox" class="ace" />
                                                      <span class="lbl"></span>
                                              </label>
                                       </th>
                                       <th>RegNo</th>
                                       <th>Name</th>
                                       <th>Current Class</th>
                                       <th>Current Stream</th>
                                    </thead>
                                    <tbody>
                                     <?php if(!empty($promote)){ foreach($promote as $row){ ?>

                                            <tr studentid="<?= $row->STUDENT_REGNO ?>" streamid="<?= $row->STREAMID ?>" year="<?= $row->YEAR?>">
                                                     <td class="center">
                                                          <label class="pos-rel">
                                                                  <input type="checkbox"  value="<?= $row->STUDENT_REGNO ?>" class="ace" />
                                                                  <span class="lbl"></span>
                                                          </label>
                                                      </td>
                                                      <td><?= $row->STUDENT_REGNO ?></td>
                                                      <td><?= $row->FIRSTNAME ?> <?=  $row->LASTNAME ?></td>
                                                      <td><?= $row->CLASS ?></td>
                                                      <td><?= $row->STREAM?></td>
                                                    
                                             </tr>

                                     <?php } }?> 

                 
                                    </tbody>
                                </table>
                                     <!--add class form-->
                              <h1 style="font-size: 16px;">Promote To</h1>
                             <div class="perclass" style="margin-top: 5px">
                                  <form role="form" id='promotionform'>
                                       <div class="form-group">
                                              <label for="exampleInputEmail1">Class Name</label>
                                              <select class="form-control select2" name="classname" id="classid" value="" style="width: 100%;">
                                                       <?php foreach ($class as $key) { ?>

                                                                <option value="<?= $key->CLASSLISTID ?>"><?= $key->CLASS ?></option>
                                                       <?php }   

                                                       ?>
                                               </select>
                                          </div>
                                    </form>
                              </div>
                                <button class="btn btn-success promote-studentbtn btn-sm pull-right">Promote</button>
                            </div>

 <script>
    $(function(){

             $("body").on('click',".promote-studentbtn",function(){
                      var year=[];
                      var streamid=[];
                      $("#promotion-table tbody tr").each(function(e){
                            streamid[e]=$(this).attr("streamid");
                            year[e]=$(this).attr("year");
                      })
                      var regno=[];
                      $(':checkbox:checked').each(function(i){
                           regno[i]=$(this).val();
                        })


                      if(id.length===0){
                           sweetAlert("Oops...", "Select atleast one checkbox!", "error");
                            //alert("select atleat one checkbox");
                      }else{
                          $(".loader").show();
                          $.ajax({
                              url:"index.php/ManageStudents/promoteStudents",
                              method:"POST",
                              data:{year,streamid,regno},
                              success:function(data){
                                  $(".DisplayMsg").show();
                                  $(".msg").html('you have succesfully registered');
                                  $("#unit-table").find('input[type=checkbox]').each(function(i){
                                      $(this).prop("checked",false);

                                  })
                                  $(".loader").hide();
                              }
                          })
                          
                      }
                  })
             /////////////////////////////////
                //table checkboxes
           $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
             var active_class = 'active';
            //select/deselect all rows according to table header checkbox
            $("#thead_checkbox").change(function(){
                if($(this).prop("checked")){
                    $("tbody tr td input[type=checkbox]").each(function(){
                        $(this).prop('checked',true);
                        $(this).closest("tr").each(function(){
                            $(this).addClass(active_class);
                        });
                    });
                }else{
                     $("tbody tr td input[type=checkbox]").each(function(){
                        $(this).prop('checked',false);
                        $(this).closest("tr").each(function(){
                            $(this).removeClass(active_class);
                        });
                    });
                }
            })

             $('#promotion-table').DataTable({
                      "paging": true,
                      "lengthChange": true,
                      "searching":true,
                      "ordering": true,
                      "info": true,
                      "autoWidth": false
            });

    })
    </script>