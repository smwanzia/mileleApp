
<style>
h2{
   margin-top: -35px;
    font-size: 21px;
    text-align: center;
    font-weight: bold;
}
</style>
<h2>My Finance Statement</h2>
<div  class="table-responsive student-table" style="margin-top:5px">
            <table>
                 <tr>
                    <td><h3 style="color:#000;font-weight:bold;font-size: 15px;margin-top:19px"><?php echo $this->session->userdata('firstname') ?></h3></td>
                    <td><h3 style="color:#000;font-weight:bold;font-size: 15px;margin-left: 20px "><?php echo $this->session->userdata('lastname') ?></h3></td> 
                    <td><h3 style="color:#000;font-weight:bold;font-size: 15px;margin-left: 425px"><?php echo $this->session->userdata('classid') ?></h3></td>                    
                </tr>
            </table>
                <table class="table table-striped table-bordered table-hover" id="finance-table">
                    <thead>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        
                    </thead>
                    <tbody>
                        <?php if(!empty($finance)) { foreach ($finance as $row) { ?>
                           <tr>
                                <td><?php echo $row->DATE ?></td>
                                <td><?php echo $row->DESCRIPTION ?> </td>
                                <td><?php echo $row->INVOICEAMOUNT ?> </td>
                                <td><?php echo $row->AMOUNTPAID ?></td>
                            </tr>


                       <?php } } ?>
                     </tbody>                   
                       
                 </table>
                 <tr>
                    <div class="col-md-12">
                        <div class="col-md-2">
                        </div>
                         <div class="col-md-1">
                        </div>
                         <div class="col-md-3">
                              <td><h3 style="color:#000;font-weight:bold;font-size: 22px;margin-top: -6px">Total</h3></td>
                        </div>
                         <div class="col-md-3">
                             <td><h2 style="margin-left:-20px;color:#000;margin-top: -6px"><?php echo $this->session->userdata("credit") ?><h3></td>
                             
                        </div>
                        <div class="col-md-3">
                             <td><h2 style="margin-left:-57px;color:#000;margin-top: -6px"><?php echo $this->session->userdata("debit") ?></h2></td>
                        </div>

                    </div>
                       
                 </tr>
                   <h2 style="color:#000;margin-top: 20px;">Balance :   <?php echo $this->session->userdata("bal") ?></h2>
                   <a href="<?php echo base_url();?>index.php/Finance/printStudentSatetement" target="_blank">Print</a> 
                  
         </div>