<!DOCTYPE html>
<html>
    <head>
        <?php include 'NewCss.php' ?>
          <script>
                function preventBack() {
                    window.history.forward();
                }
                setTimeout("preventBack()", 0);
                window.onunload = function () {
                    null
                };
             </script>
     </head>

    <body class="no-skin">
           
		<!--include header navigation-->
        
        <?php include 'NewHeader.php' ?>
                 
                
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<!--include sidebar-->
            <?php include 'NewSidebar.php' ?>
                        

			<div class="main-content" style="margin-left: 230px !important;">
				<div class="main-content-inner">
					<!--load pages here-->

                   
				</div>
			</div><!-- /.main-content -->
       <!--show loading icon-->
                     <div class="overlay" style="z-index: 1020;background:#d0d0d0;display: none;
                          position: fixed;
                          top:0%;
                          left:0%;
                          width:100%;
                          height:100%;
                          margin-left:0px;
                          margin-top:0px;
                          opacity: .5; ">
                          <img src="<?=base_url("assets/members-assets/img/ajax-loader_1.gif")?>" style="margin-left:40%;margin-top:20%;"/>
                    </div>

			<!--include footer here-->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->


        <?php include 'NewJs.php' ?>

                       
	</body>
        
         <script type='text/javascript'>
               $(function(){
                      //load memebers not paid for 6months              
                          $(".overlay").fadeOut();
                          var loader=$(".overlay").show();
                          $(".main-content-inner").html(loader);
                          $(".main-content-inner").load("<?=base_url("Members/default_members")?>");
                  })        
         </script>
</html>
