<!DOCTYPE html>
<html>
<head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style>
		.tree-checkbox label.check-label{
      
      margin-bottom:0;
    }
    main .tree-checkbox span {  
         line-height: 25px;
    }
    .tree-checkbox .checkmark {   
         height: 18px;
         width: 18px;    
         border: 2px solid #ccc;
    }
    .tree-checkbox .check-label .checkmark:after {
         left: 3px;
         top: -1px;
         width: 4px;
         height: 8px;   
         border-width: 0 3px 3px 0;
    }
      .tree-checkbox .check-label {   
         font-size: 16px;
       }
     .tree-checkbox > ul {
        padding:0 0 0 10px;
        margin:0;
        border-left:1px dotted #ccc;
     }
     .tree-checkbox > ul > li {
        
     }
    
     .tree-checkbox > ul > li > ul {
            padding: 0 0 0 10px;
            margin-left:20px;
            border-left:1px dotted #ccc;
            display:none;
     }
     .tree-checkbox > ul > li > ul > li {
        
     }
     .tree-checkbox > ul > li > ul > li > ul {
            padding: 0 0 0 10px;
            margin-left:20px;
            border-left:1px dotted #ccc;
            display:none;
     }
     .tree-checkbox > ul > li > ul > li > ul > li {
        
     }
    .tree-fa {
         position: absolute;
         margin-left:-10px;
         margin-top: 2px;
         font-size: 20px;
         cursor: pointer;
         color:#515151;
    }
    ul.open-ul{
        display: block !important;
    }

    .dblock{
        display: block;
    }
    .open-toggle > ul {
        display: block !important;
    }

    li.open-toggle2 > ul {
        display: block !important;
    }
     .fa-caret-down:before {
         content: "\f0d7"!important;
     }
     .fa-caret-down {
          margin-left: -16px;
     }
	</style>
	<title>tree view level</title>
</head>
<body>
<div class="tree-checkbox">
                     <ul>
                        <li> 
                           <label class="check-label">  <span> CHECK ALL</span>
                           <input type="checkbox" name="all" ID="edit_all">                
                           </label> 
                        </li>
                        <li>
                            
                           <div class="mli-wrp">
                           <label class="check-label">  <span>adminstrator</span>
                           <input type="checkbox" checked="checked" name="radio1">                
                           </label> 
                           <ul>
                               <span>ok</span>
                              <li>
                                 
                                 <label class="check-label">  <span> ok</span>
                                 <input type="checkbox" name="radio2">                
                                 </label> 

                                 <ul class="hh">
                                         <span>ok112</span>
                                    
                                    <li>  
                                       <label class="check-label" >  <span> ok12</span>
                                       <input type="checkbox" name="radio3">                
                                       </label> 
                                    </li>
                                    
                                 </ul>
                              </li>
                                                        
                            
                           </ul>
                           </div>
                          
                        </li>

                     </ul>
                  </div>
</body>
</html>

<script>
    $(".tree-checkbox > ul > li > label.check-label").before('<i class="fa fa-caret-right tree-fa"></i>');

    $(".tree-checkbox > ul > li > ul > li > label.check-label").before('<i class="fa fa-caret-right tree-fa"></i>');

    $(".tree-checkbox > ul > li:first-child > i").removeClass('fa fa-caret-right tree-fa');

    $(".tree-checkbox > ul > li.open-toggle > .tree-fa").removeClass("fa-caret-right");

    $(".tree-checkbox > ul > li.open-toggle > .tree-fa").addClass("fa-caret-down");

    $(".tree-checkbox .open-toggle2 > .tree-fa").removeClass("fa-caret-right");

    $(".tree-checkbox .open-toggle2 > .tree-fa").addClass("fa-caret-down");

        $(".tree-checkbox > ul > li > .tree-fa").click (function() {
   
        $(this).parent().toggleClass("open-toggle"); 
        $(this).toggleClass("fa-caret-down"); 

     });

        $(".tree-checkbox > ul > li > ul > li > .tree-fa").click (function(){
        $(this).parent().toggleClass("open-toggle2") 
        $(this).toggleClass("fa-caret-down"); 
     });

       </script>  
       <script type="text/javascript">
   $(document).ready(function(){
      $('#edit_all').click(function(){
    
    
   if(this.checked)
   {
     $('input[type="checkbox"]').each(function(){
   this.checked = true;
   
     });

    }
    else{

      $('input:checkbox').removeAttr('checked');

     $('input[type="checkbox"]').each(function(){
   this.checked = false;
     });
    }
      });
   });
  


</script>
<script type="text/javascript">
  
  
$(".radio-label").append("<span class='radiomark'></span>");  
$(".check-label").append("<span class='checkmark'></span>");
$("select").after("<span class='select-after-border'></span>");  
$(".btn").append("<i class='fa fa-angle-right'></i>");
</script>