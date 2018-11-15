/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function(){    
    
      //clicking the sidebar dropdown submenus 
     $(".submenu li a").click(function(){
           
          var controller=$(this).attr("controller");
          var method=$(this).attr("method"); 
         
          var id=$(this).attr("data");
          var data="?id="+id+'';

          GenericLoad(controller,method,"",data); 
        
       
     });
 

 
 
 
    
});

