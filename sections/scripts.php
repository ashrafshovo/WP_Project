<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/jquery.min.js"></script> 
<script type='text/javascript' src='assets/bootstrap/js/jquery.pack.js'></script>

<script type="text/javascript">
$( "a.submenu" ).click(function() {
$( ".menuBar" ).slideToggle( "normal", function() {
// Animation complete.
});
});
$( "ul li.dropdown a" ).click(function() {
$( "ul li.dropdown ul" ).slideToggle( "normal", function() {
// Animation complete.
});
$('ul li.dropdown').toggleClass('current');
});
</script>

		<script>
	
			$(document).ready(function(){
				$("#toggleText").hide();
				$("#displayText").show();
				var display=$('#toggleText').css('display');
					$('#displayText').click(function(){
						var display=$('#toggleText').css('display');
							if(display=='none'){
								$("#toggleText").show();
								document.getElementById('displayText').innerHTML = "Cancel";
								$('#displayText').css('color','red');
								document.getElementById('body').hidden = "hidden";
							}
							else{
								$("#toggleText").hide();
								document.getElementById('body').hidden = "";
								document.getElementById('displayText').innerHTML = "Edit";
								$('#displayText').css('color','red');
							}
					});
			});
			
			$(document).ready(function(){
				$("#toggleText2").hide();
				$("#displayText2").show();
				var display=$('#toggleText2').css('display');
					$('#displayText2').click(function(){
						var display=$('#toggleText2').css('display');
							if(display=='none'){
								$("#toggleText2").show();
								document.getElementById('displayText2').innerHTML = "Cancel";
								$('#displayText2').css('color','red');
								document.getElementById('body2').hidden = "hidden";
							}
							else{
								$("#toggleText2").hide();
								document.getElementById('body3').hidden = "";
								document.getElementById('displayText2').innerHTML = "Edit";
								$('#displayText3').css('color','red');
							}
					});
			});
		
			$(document).ready(function(){
				$("#toggleText3").hide();
				$("#displayText3").show();
				var display=$('#toggleText3').css('display');
					$('#displayText3').click(function(){
						var display=$('#toggleText3').css('display');
							if(display=='none'){
								$("#toggleText3").show();
								document.getElementById('displayText3').innerHTML = "Cancel";
								$('#displayText3').css('color','red');
								document.getElementById('body3').hidden = "hidden";
							}
							else{
								$("#toggleText3").hide();
								document.getElementById('body3').hidden = "";
								document.getElementById('displayText3').innerHTML = "Edit";
								$('#displayText3').css('color','red');
							}
					});
			});
		
		</script>
		
		
		
		
		
		
		
		
		
		
		
		
        <script> 
			$(document).ready(function(){
				$(".posts").hide();
				$(".up").show();
				$('.up').click(function(){
				$(".posts").slideToggle();
				});
			});
       </script>



      












<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
  <script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
			  
		  
});
  </script>