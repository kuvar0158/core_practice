<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{    background: -webkit-linear-gradient(left, #25c481, #25b7c4);
    background: linear-gradient(to right, #25c481, #25b7c4);}
.accordionWrapper{padding:30px;background:#fff;float:left;width:80%;box-sizing:border-box;margin:10%;    box-shadow: 0 1.5em 85px 0 rgba(0, 0, 0, 0.2);}
.accordionItem{
    float:left;
    display:block;
    width:100%;
    box-sizing: border-box;
    font-family:'Open-sans',Arial,sans-serif;
}
.accordionItemHeading{
    cursor:pointer;
    margin:0px 0px 10px 0px;
    padding:10px;
    background:#2980b9;
    color:#fff;
    width:100%;
    -webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
        box-sizing: border-box;
}
.close .accordionItemContent{
    height:0px;
    transition:height 1s ease-out;
    -webkit-transform: scaleY(0);
	-o-transform: scaleY(0);
	-ms-transform: scaleY(0);
	transform: scaleY(0);
    float:left;
    display:block;
    
    
}
.open .accordionItemContent{
        padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    width: 100%;
    margin: 0px 0px 10px 0px;
    display:block;
    -webkit-transform: scaleY(1);
	-o-transform: scaleY(1);
	-ms-transform: scaleY(1);
	transform: scaleY(1);
    -webkit-transform-origin: top;
	-o-transform-origin: top;
	-ms-transform-origin: top;
	transform-origin: top;

	-webkit-transition: -webkit-transform 0.4s ease-out;
	-o-transition: -o-transform 0.4s ease;
	-ms-transition: -ms-transform 0.4s ease;
	transition: transform 0.4s ease;
        box-sizing: border-box;
}

.open .accordionItemHeading{
    margin:0px;
        -webkit-border-top-left-radius: 3px;
    -webkit-border-top-right-radius: 3px;
    -moz-border-radius-topleft: 3px;
    -moz-border-radius-topright: 3px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    -webkit-border-bottom-right-radius: 0px;
    -webkit-border-bottom-left-radius: 0px;
    -moz-border-radius-bottomright: 0px;
    -moz-border-radius-bottomleft: 0px;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
    background-color: #bdc3c7;
    color: #7f8c8d;
}
	</style>
	<title>accordian example</title>
</head>
<body>
<div class="accordionWrapper">
<div class="accordionItem open">
      <h2 class="accordionItemHeading">About accordions</h2>
      <div class="accordionItemContent">
        <p>JavaScript accordions let you squeeze a lot of content into a small space in a Web page.</p>
        <p>This simple accordion degrades gracefully in browsers that don't support JavaScript or CSS.</p>
      </div>
    </div>

    <div class="accordionItem close">
      <h2 class="accordionItemHeading">Accordion items</h2>
      <div class="accordionItemContent">
        <p>A JavaScript accordion is made up of a number of expandable/collapsible items. Only one item is ever shown at a time.</p>
        <p>You can include any content you want inside an accordion item. Here's a bullet list:</p>
        <ul>
          <li>List item #1</li>
          <li>List item #2</li>
          <li>List item #3</li>
        </ul>
      </div>
    </div>

    <div class="accordionItem close">
      <h2 class="accordionItemHeading">How to use a JavaScript accordion</h2>
      <div class="accordionItemContent">
        <p>Click an accordion item's heading to expand it. To collapse the item, click it again, or click another item heading.</p>
      </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
	var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionItemHeading');
    for (i = 0; i < accHD.length; i++) {
        accHD[i].addEventListener('click', toggleItem, false);
    }
    function toggleItem() {
        var itemClass = this.parentNode.className;
        for (i = 0; i < accItem.length; i++) {
            accItem[i].className = 'accordionItem close';
        }
        if (itemClass == 'accordionItem close') {
            this.parentNode.className = 'accordionItem open';
        }
    }
</script>