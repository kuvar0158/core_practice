/*
BeepPanZoom Alpha
Author: Beep.exe, http://bincoder.com/
https://github.com/redocnib/BeepPanZoom/
*/

(function ($){
var BeepPanZoom = {
  init: function(options, elem) {
    this.options = $.extend({},this.options,options);

      this.elem  = elem;
      this.$elem = $(elem);
      this.imgWidth = null;
      this.imgHeight = null;
      this.viewportWidth = null;
      this.viewportHeight = null;
      this.scale = null;
      this.lastScale = null;
      this.img = this.$elem.find("img")[0];
	  
      this.container = this.img.parentElement;
      this.x = 0;
      this.lastX = 0;
      this.y = 0;
      this.lastY = 0;
      this.pinchCenter = null;
      this.hammer=null;
	  this.setup();
      this.initHammer();
      
    return this;
  },
  options: {
    MIN_SCALE:0,
    MAX_SCALE:5,
	ZOOM:1,
	onZoom:null
  },
  
/* THE BELOW FUNCTION USES A PART OF
* rwdImageMaps jQuery plugin v1.6
*
* Allows image maps to be used in a responsive design by recalculating the area coordinates to match the actual image size on load and window.resize
*
* Copyright (c) 2016 Matt Stow
* https://github.com/stowball/jQuery-rwdImageMaps
* http://mattstow.com
* Licensed under the MIT license
*/
 rwdImageMap : function() {
			
				if (typeof($(this.img).attr('usemap')) == 'undefined')
					return;

				var that = this.img,
					$that = $(that);

				// Since WebKit doesn't know the height until after the image has loaded, perform everything in an onload copy
				$('<img />').on('load', function() {
					var attrW = 'width',
						attrH = 'height',
						w = $that.attr(attrW),
						h = $that.attr(attrH);

					if (!w || !h) {
						var temp = new Image();
						temp.src = $that.attr('src');
						if (!w)
							w = temp.width;
						if (!h)
							h = temp.height;
					}

					var wPercent = $that.width()/100,
						hPercent = $that.height()/100,
						map = $that.attr('usemap').replace('#', ''),
						c = 'coords';

					$('map[name="' + map + '"]').find('area').each(function() {
						var $this = $(this);
						if (!$this.data(c))
							$this.data(c, $this.attr(c));

						var coords = $this.data(c).split(','),
							coordsPercent = new Array(coords.length);

						for (var i = 0; i < coordsPercent.length; ++i) {
							if (i % 2 === 0)
								coordsPercent[i] = parseInt(((coords[i]/w)*100)*wPercent);
							else
								coordsPercent[i] = parseInt(((coords[i]/h)*100)*hPercent);
						}
						$this.attr(c, coordsPercent.toString());
					});
				}).attr('src', $that.attr('src'));
			
		},
  
/* 
*  END OF rwdImageMaps jQuery plugin v1.6
*/
  
  
  disableImgEventHandlers : function () {

       var self=this;
        var events = ['onclick', 'onmousedown', 'onmousemove', 'onmouseout', 'onmouseover',
                      'onmouseup', 'ondblclick', 'onfocus', 'onblur','contextmenu'];

        events.forEach(function (event) {
          self.img[event] = function () {

            return false;
          };
        });
      },

      // Traverse the DOM to calculate the absolute position of an element
      absolutePosition : function (el) {
        var x = 0,
          y = 0;

        while (el !== null) {
          x += el.offsetLeft;
          y += el.offsetTop;
          el = el.offsetParent;
        }

        return { x: x, y: y };
      },

      restrictScale : function (scale) {
        if (scale < this.options.MIN_SCALE) {
          scale = this.options.MIN_SCALE;
        } else if (scale > this.options.MAX_SCALE) {
          scale = this.options.MAX_SCALE;
        }
        return scale;
      },

       restrictRawPos : function (pos, viewportDim, imgDim) {
        if (pos < viewportDim/this.scale - imgDim) { // too far left/up?
          pos = viewportDim/this.scale - imgDim;
        } else if (pos > 0) { // too far right/down?
          pos = 0;
        }
        return pos;
      },

      updateLastPos : function (deltaX, deltaY) {
        this.lastX = this.x;
        this.lastY = this.y;
      },

       translate : function (deltaX, deltaY) {
        var newX = this.restrictRawPos(this.lastX + deltaX/this.scale,
                                  Math.min(this.viewportWidth, this.curWidth), this.imgWidth);
        this.x = newX;
        this.img.style.marginLeft = Math.ceil(newX*this.scale) + 'px';

        var newY = this.restrictRawPos(this.lastY + deltaY/this.scale,
                                  Math.min(this.viewportHeight, this.curHeight), this.imgHeight);
        this.y = newY;
        this.img.style.marginTop = Math.ceil(newY*this.scale) + 'px';
      },

       zoom : function (scaleBy) {
        this.scale = this.restrictScale(this.lastScale*scaleBy);

        this.curWidth = this.imgWidth*this.scale;
        this.curHeight = this.imgHeight*this.scale;

        this.img.style.width = Math.ceil(this.curWidth) + 'px';
        this.img.style.height = Math.ceil(this.curHeight) + 'px';
        //if(this.) onZoom
        
        if(this.options.onZoom!=null)this.options.onZoom(Math.ceil(this.curWidth),Math.ceil(this.curHeight));
        this.rwdImageMap();
        // Adjust margins to make sure that we aren't out of bounds
        this.translate(0, 0);
      },

      rawCenter : function (e) {
        var pos = this.absolutePosition(this.container);

        // We need to account for the scroll position
        var scrollLeft = window.pageXOffset ? window.pageXOffset : document.body.scrollLeft;
        var scrollTop = window.pageYOffset ? window.pageYOffset : document.body.scrollTop;

        var zoomX = -this.x + (e.center.x - pos.x + scrollLeft)/this.scale;
        var zoomY = -this.y + (e.center.y - pos.y + scrollTop)/this.scale;

        return { x: zoomX, y: zoomY };
      },

      updateLastScale : function () {
        this.lastScale = this.scale;
      },

      zoomAround : function (scaleBy, rawZoomX, rawZoomY, doNotUpdateLast) {
        // Zoom
        this.zoom(scaleBy);

        // New raw center of viewport
        var rawCenterX = -this.x + Math.min(this.viewportWidth, this.curWidth)/2/this.scale;
        var rawCenterY = -this.y + Math.min(this.viewportHeight, this.curHeight)/2/this.scale;

        // Delta
        var deltaX = (rawCenterX - rawZoomX)*this.scale;
        var deltaY = (rawCenterY - rawZoomY)*this.scale;

        // Translate back to zoom center
        this.translate(deltaX, deltaY);

        if (!doNotUpdateLast) {
          this.updateLastScale();
          this.updateLastPos();
        }
      },

       zoomCenter : function (scaleBy) {
        // Center of viewport
        var zoomX = -x + Math.min(this.viewportWidth, this.curWidth)/2/this.scale;
        var zoomY = -y + Math.min(this.viewportHeight, this.curHeight)/2/this.scale;

        this.zoomAround(scaleBy, zoomX, zoomY);
      },
      
      zoomIn : function () {
        this.zoomCenter(2);
      },

       zoomOut : function () {
        this.zoomCenter(1/2);
      },
      killHammer: function(){
          
      }
      ,
	  setup:function(){
		this.rwdImageMap();
		this.disableImgEventHandlers();
		this.imgWidth = this.img.width;
        this.imgHeight = this.img.height;
	
		this.viewportWidth = this.img.offsetWidth;
        this.viewportHeight = this.img.parentElement.offsetHeight;
		this.scale = this.viewportWidth/(this.imgWidth);
        this.lastScale = this.scale;
        this.curWidth = this.imgWidth*this.scale;
        this.curHeight = this.imgHeight*this.scale;
		
		this.zoom(this.options.ZOOM);


		this.imgWidth = this.img.width;
        this.imgHeight = this.img.height;

		//this.zoomCenter
	  }
	  ,
      initHammer: function(){
        
        var self=this;
        this.hammer = new Hammer(this.container, {
          domEvents: true
        });

         this.hammer.get('pinch').set({
          enable: true
        });

         this.hammer.on('pan', function (e) {
          self.translate(e.deltaX, e.deltaY);
        });

         this.hammer.on('panend', function (e) {
          self.updateLastPos();
        });

         this.hammer.on('pinch', function (e) {
            
          if (self.pinchCenter === null) {
            self.pinchCenter = self.rawCenter(e);
            var offsetX = self.pinchCenter.x*self.scale - (-self.x*self.scale + Math.min(self.viewportWidth, self.curWidth)/2);
            var offsetY = self.pinchCenter.y*self.scale - (-self.y*self.scale + Math.min(self.viewportHeight, self.curHeight)/2);
            self.pinchCenterOffset = { x: offsetX, y: offsetY };
          }

 
          var newScale = self.restrictScale(self.scale*e.scale);
          var zoomX = self.pinchCenter.x*newScale - self.pinchCenterOffset.x;
          var zoomY = self.pinchCenter.y*newScale - self.pinchCenterOffset.y;
          var zoomCenter = { x: zoomX/newScale, y: zoomY/newScale };

          self.zoomAround(e.scale, zoomCenter.x, zoomCenter.y, true);
        });

         this.hammer.on('pinchend', function (e) {
          self.updateLastScale();
          self.updateLastPos();
          self.pinchCenter = null;
        });

         this.hammer.on('doubletap', function (e) {
          var c = self.rawCenter(e);
          self.zoomAround(2, c.x, c.y);
        });


  }
};

  $.fn.beepPanZoom=function (options){
    this.init= function(options, elem) {
      this.options = $.extend({},this.options,options);
      this.elem  = elem;
      this.$elem = $(elem);

      return this;
  };

    if ( this.length ) {
      return this.each(function(){
        var beeppanzoom = Object.create(BeepPanZoom);
        beeppanzoom.init(options, this); 
        $.data(this, 'beeppanzoom', beeppanzoom);
      });
    }


  };
})(jQuery);
