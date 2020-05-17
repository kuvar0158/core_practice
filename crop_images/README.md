# BeepPanZoom<br/>
A hammer.js &amp;amp; Jquery based Touch Event Enabled Image Viewer Plugin with Pan and Pinch Zoom Support,<br/>
* Added Support for HTML MAPS, Which will auto postion and size anchros according to zoom level.<br/>
  Sample Usage:<br/>
  <br/>
  &lt;div class=&quot;img_cotainer&quot; style=&quot;overflow:hidden;width:100px;height:100px&quot;&gt;<br/>
  &lt;img src="assets/image.jpg"  usemap="#image-map"&gt;<br/>
  &lt;map name="image-map"&gt;<br/>
    &lt;area target="" alt="" title="" href="http://example.com/" coords="1909,3816,2026,4061" shape="rect"&gt;<br/>
  &lt;/map&gt;<br/>
  &lt;/div&gt;<br/>
<br/>    
Usage :<br/>
<br/>
include jquery and hammer.js<br/>
include our js plugin<br/>
<br/>
&lt;div class=&quot;img_cotainer&quot; style=&quot;overflow:hidden;width:100px;height:100px&quot;&gt;<br/>
&lt;img src=&quot;my_big_image.jpg&quot; style=&quot;width:inherit;height:inherit&quot; /&gt;<br/>
&lt;/div&gt;<br/>
<br/>
Usage : <br/>
$(&quot;.img_cotainer&quot;).beepPanZoom();<br/>
<br/>
<br/>
Some Options : <br/>
ZOOM      : initial Zoom<br/>
MIN_SCALE : Minimum Allowed Scale<br/>
MAX_SCALE : Maxmium Allowed Scale<br/>
<br/>
<br/>
*Example : <br/>
  $(".img_cotainer").beepPanZoom({ZOOM:1/2,<br/>
  MIN_SCALE:0,<br/>
  MAX_SCALE:5});<br/>
<br/>
<br/>
Sorry, too lazy right now...
