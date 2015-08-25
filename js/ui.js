$(document).ready(function() {
		$( "#ui1" ).click(function() {
			$( "#show" ).show(50);
		});
		$( "#ui2" ).click(function() {
			$( "#show" ).toggle(900);
		});
		$(function () {
			$( "#accordion" ).accordion({
				collapsible: true,
				heightStyle: "content"
			});
		});
		$(function () {
			$( "#datepicker" ).datepicker({
			});
		});
		function hexFromRGB(r, g, b) {
         var hex = [
           r.toString( 16 ),
           g.toString( 16 ),
           b.toString( 16 )
         ];
         $.each( hex, function( nr, val ) {
           if ( val.length === 1 ) {
             hex[ nr ] = "0" + val;
           }
         });
         return hex.join( "" ).toUpperCase();
       }
       function refreshSwatch() {
         var red = $( "#red" ).slider( "value" ),
           green = $( "#green" ).slider( "value" ),
           blue = $( "#blue" ).slider( "value" ),
           hex = hexFromRGB( red, green, blue );
         $( "#swatch" ).css( "background-color", "#" + hex );
       }
       $(function() {
         $( "#red, #green, #blue" ).slider({
           orientation: "horizontal",
           range: "min",
           max: 255,
           value: 127,
           slide: refreshSwatch,
           change: refreshSwatch
         });
         $( "#red" ).slider( "value", 64 );
         $( "#green" ).slider( "value", 128 );
         $( "#blue" ).slider( "value", 192 );
       });
	   $(function() {
         $( "#menu" ).menu({
           items: "> :not(.ui-widget-header)"
         });
       });
	   $(function() {
         var progressbar = $( "#progressbar" ),
           progressLabel = $( ".progress-label" );
      
         progressbar.progressbar({
           value: false,
           change: function() {
             progressLabel.text( progressbar.progressbar( "value" ) + "%" );
           },
           complete: function() {
             progressLabel.text( "Page Complete!" );
           }
         });
      
         function progress() {
           var val = progressbar.progressbar( "value" ) || 0;
      
           progressbar.progressbar( "value", val + 2 );
      
           if ( val < 99 ) {
             setTimeout( progress, 80 );
           }
         }
      
         setTimeout( progress, 2000 );
       });
	});