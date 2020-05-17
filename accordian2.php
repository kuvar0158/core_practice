<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  /** This class will hide all the body be default **/
#accordion .body{
   display : none;
   padding : 10px;
}

/** This class will show the body if it has a parent with active       class
**/
#accordion .active .body {
   display : block;
}

#accordion .panel{
  border : solid 1px #D6D6D6;
  margin:5px;
  padding : 5px;
  border-radius : 2px;
}
</style>
</head>
<body>
	<div id="accordion">
	    <div class="panel"> <!-- first panel -->
	        <div class="header">header1</div>
	        <div class="body">body of panel 1</div>
	    </div>
	     <div class="panel"> <!-- second panel -->
	        <div class="header">header2</div>
	        <div class="body">body of panel 2</div>
	    </div>
	    <div class="panel"> <!-- third panel -->
	        <div class="header">header3</div>
	        <div class="body">body of panel 3</div>
	    </div>
	</div>
</body>
</html>
<script type="text/javascript">
	 function initAccordion(accordionElem){
	  
	//when panel is clicked, handlePanelClick is called.          

	function handlePanelClick(event){
	      showPanel(event.currentTarget);
	}

	//Hide currentPanel and show new panel.  
	  
	function showPanel(panel){
	    //Hide current one. First time it will be null. 
	    var expandedPanel = accordionElem.querySelector(".active");
	    if (expandedPanel){
	        expandedPanel.classList.remove("active");
	    }

	    //Show new one
	    panel.classList.add("active");

	}

	var allPanelElems = accordionElem.querySelectorAll(".panel");
	for (var i = 0, len = allPanelElems.length; i < len; i++){
	    allPanelElems[i].addEventListener("click", handlePanelClick);
	}

	//By Default Show first panel
	showPanel(allPanelElems[0])

}
initAccordion(document.getElementById("accordion"));
</script>