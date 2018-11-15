/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 //generic function for loading pages
   /* function GenericLoad(controller,method,loadat,data)
    {
      alert(controller)
        data=data || 0;
        loadat=loadat || ".main-content";
        var loader=$("#loader").html();
        $(loadat).html(loader);
          
        $(loadat).load("index.php/"+controller+"/"+method+"/"+data);   

    }*/

  //generic function for saving form data
   function SaveFormData(form,controller,method,loadat){
   $.ajax({
    url: "index.php/"+controller+"/"+method,
    method: "post",
    //timeout: 1000,
    data: $(form).serialize(),
    success: function (result) {
        if (result == "success") {
            $(".DisplayMsg").show().fadeOut(1000);
            $(".msg").html("Data successfully added");
            setTimeout(function(){
              GenericLoad(loadat); 
          },1000)  
         }
        else {
          alert(result);
         $("#"+form)[0].reset();
        }
    },
    error: function (jqhr, status, error_thrown) {
        alert("The following errors Occurred :TextStatus = +status+", "ErrorThrown = +error_thrown+");
    }
    });   
};

/* enable and disable user in the system */

$("body").on("click", ".edit-user", function () {
    var status = $(this).attr("role");
    //check the status 
    if(status=="InActive"){
        var message="Activate";
    }else{
        var message="Deactivate";
    }
    var id=$(this).attr("id");
    bootbox.confirm({
       message: "Are you sure want to "+message+" this?",
       buttons: {
           confirm: {
               label: 'Yes',
               className: 'btn-success'
           },
           cancel: {
               label: 'No',
               className: 'btn-danger'
           }
       },
       callback: function (result) {
           if(result==true){
           $.ajax({
           //dataType: 'json',
           type: 'POST',
           url: 'UpdateUserStatus',
           data:{id:id,status:status},
            }).done(function (data){
              if (data == "success"){
                $(".DisplayMsg").show().fadeOut(10000);
               $(".msg").html("success! Data successfully updated");
               $("#userform")[0].reset();
            } else {
                alert("Error occured");

            }
          }); 
        }     
      }
   });
      
});


//generic function for handling form data and files upload
function processform(formid,Controller,method,loadto)
{
    
        $.ajax({
          type: "POST",
          url:"index.php/"+Controller+"/"+method,
          data:  new FormData($("#"+formid)[0]), 
          contentType:false,
          processData:false,
          success: function(data){
              if (data=="success") {
                 // swal(""+data, "your data saved successfully!", "success");

                   sweetAlert("Oops...", "Something went wrong!", "error");
                
         }
              else {
                  swal(""+data, "your data saved successfully!", "success");
                  $("#"+formid)[0].reset();
                  
              }
        
          }
        });
}


//generic delete
function GenericDelete(id,controller,method,loadat){
    bootbox.confirm({
    message: "Are you sure want to delete this?",
    buttons: {
        confirm: {
            label: 'Yes',
            className: 'btn-success'
        },
        cancel: {
            label: 'No',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
        if(result==true){
            $.ajax({
                //dataType: 'json',
                type: 'POST',
                url: 'index.php/'+controller+'/'+method,
                data:{id:id},
             }).done(function(data){
                 if (data=='success'){
                     //swal(""+data, "You clicked the button!", "success");
                      swal("Error Occured!", "Try Again!", "error");
                  } 
                  else {
                    // GenericLoad(loadto);
                    
                      swal(""+data, "You clicked the button!", "success");
                    
               //  alert("Error occured");

             }
           }); 
     }     
   }
});
    
}

//generic delete
function multiDelete(id,controller,method,loadat){
        swal({
              title: "Are you sure?",
              text: "You will not be able to recover this imaginary file!",
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Yes, delete it!",
              cancelButtonText: "No, cancel plx!",
              closeOnConfirm: false,
              closeOnCancel: false
      },
      function(isConfirm) {
          if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
    });
    
}

	 /*preview image upload*/
    var preview_file = function(event,load_to) {
        $("."+load_to+",#"+load_to).css({"background-image":"url('"+URL.createObjectURL(event.target.files[0])+"')"});
    };

    function   openfile_upload(file){
            document.getElementById(file).click();
          //  document.getElementByName(file).click();
    }
/*
function genericSelect(){
    var id = [];
        $(":checkbox:checked").each(function (i) {
            id[i] = $(this).attr("data");
        });
        if(id.length === 0){
            alert("Select atleast one checkbox");
        }else{
            alert("something")
            //perform ajax function
        }
}
*/

            //double click to view user
           $('body').on('click',"#profile_btn",function(){
               var data1=$(this).attr("data");
               var data="?id="+data1+'';
               GenericLoad('loadProfile'+data);
           })
 
 
 
  
    //generic function for instating data tables
    function GenericDataTableTools(myTable){
         $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
        
       var newTable=$('#product_table');
				
            new $.fn.dataTable.Buttons(newTable, {
                    buttons: [
                      {
                            "extend": "colvis",
                            "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                            "className": "btn btn-white btn-primary btn-bold",
                            columns: ':not(:first):not(:last)'
                      },
                      {
                            "extend": "copy",
                            "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                            "extend": "csv",
                            "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                            "extend": "excel",
                            "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                            "extend": "pdf",
                            "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                            "extend": "print",
                            "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                            "className": "btn btn-white btn-primary btn-bold",
                            autoPrint: false,
                            message: 'This print was produced using the Print button for DataTables'
                      }		  
                    ]
            } );
            newTable.buttons().container().appendTo( $('.tableTools-container') );
            
            //style the message box
                var defaultCopyAction = newTable.button(1).action();
                newTable.button(1).action(function (e, dt, button, config) {
                        defaultCopyAction(e, dt, button, config);
                        $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                });
                
                var defaultColvisAction = newTable.button(0).action();
				newTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
                                
                                ////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
            
            
        

    }
    //generic function for selecting multiples rows in a table
    function GenericmultipleRowSelect(myTable){
        /////////////////////////////////
            //table checkboxes
            $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

            //select/deselect all rows according to table header checkbox
            $('#student-table > thead > tr > th input[type=checkbox], #student-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header

                    $('#student-table').find('tbody > tr').each(function(){
                            var row = this;
                            if(th_checked) myTable.row(row).select();
                            else  myTable.row(row).deselect();
                    });
            });

            //select/deselect a row when the checkbox is checked/unchecked
            $('#student-table').on('click', 'td input[type=checkbox]' , function(){
                    var row = $(this).closest('tr').get(0);
                    if(this.checked) myTable.row(row).deselect();
                    else myTable.row(row).select();
            });
        
    }
 

