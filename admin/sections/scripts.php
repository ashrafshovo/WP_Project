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

<script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "computer" :
            document.getElementById("status").options[0]=new Option("","");
			document.getElementById("status").options[1]=new Option("General Computer Topics","General Computer Topics");
            document.getElementById("status").options[2]=new Option("Operating Systems","Operating Systems");
            document.getElementById("status").options[3]=new Option("Computer Hardware","Computer Hardware");
            document.getElementById("status").options[4]=new Option("Computer Software","Computer Software");
      
        		
            break;
        case "mobile" :
            document.getElementById("status").options[0]=new Option("","");
            document.getElementById("status").options[1]=new Option("Phones","Phones");
            document.getElementById("status").options[2]=new Option("Tablets","Tablets");
            document.getElementById("status").options[3]=new Option("iPhones, iPods, & iPads","iPhones, iPods, & iPads");
			document.getElementById("status").options[4]=new Option("Headphones & Mp3 Players","Headphones & Mp3 Players");
			document.getElementById("status").options[5]=new Option("Wearable Tech","Wearable Tech");
			
		
	  
             break;
        case "internet" :
            document.getElementById("status").options[0]=new Option("","");
            document.getElementById("status").options[1]=new Option("Computer Networking and Internet Hardware","open");
            document.getElementById("status").options[2]=new Option("Internet Software and Browsers","delivered");
            document.getElementById("status").options[3]=new Option("Web Graphics and Design, iPods, & iPads","shipped");
			document.getElementById("status").options[4]=new Option("SEO and Web Traffic ","shipped");
			document.getElementById("status").options[5]=new Option("ISP and Web Hosting","shipped");
			
			
			
			   break;
        case "security" :
            document.getElementById("status").options[0]=new Option("","");
            document.getElementById("status").options[1]=new Option("General Security Topics","General Security Topics");
            document.getElementById("status").options[2]=new Option("Viruses, Spyware and Malware","Viruses, Spyware and Malware");
            document.getElementById("status").options[3]=new Option("Enterprise Security","Enterprise Security");
			
         
		     break;
        case "gaming" :
            document.getElementById("status").options[0]=new Option("","");
            document.getElementById("status").options[1]=new Option("General Gaming","General Gaming");
            document.getElementById("status").options[2]=new Option("PC Gaming","PC Gaming");
            document.getElementById("status").options[3]=new Option("MMORPG Gaming","MMORPG Gaming");
			
			
		 


     	  break
	  
	          case "E&G" :
            document.getElementById("status").options[0]=new Option("","");
            document.getElementById("status").options[1]=new Option("Cameras","Cameras");
            document.getElementById("status").options[2]=new Option("TVs & Home Theaters","TVs & Home Theaters");
            document.getElementById("status").options[3]=new Option("Smart Home & Appliances","Smart Home & Appliances");
			document.getElementById("status").options[4]=new Option("Video Games & Consoles","Video Games & Consoles");
      
	  
	  
      
			
			
            break;
        }
        return true;
    }
    </script>


		<script>
	
			function toggle() {
				var ele = document.getElementById("toggleText");
				var text = document.getElementById("displayText");
				if(ele.style.display == "block") {
					ele.style.display = "none";
					text.innerHTML = "<span>Edit</span>";
					document.getElementById('body').hidden = ""; 
				}
				else {
					ele.style.display = "block";
					text.innerHTML = "<span>cancel</span>";
					
				  document.getElementById('body').hidden = "hidden"; 

				}	
			}
			
			function toggle2() {
				var ele = document.getElementById("toggleText2");
				var text = document.getElementById("displayText2");
				if(ele.style.display == "block") {
					ele.style.display = "none";
					text.innerHTML = "<span>Edit</span>";
					document.getElementById('body2').hidden = "";
					
				}
				else {
					ele.style.display = "block";
					text.innerHTML = "<span>cancel</span>";
					document.getElementById('body2').hidden = "hidden";
				}
			}		 
		
			function toggle3() {
				var ele = document.getElementById("toggleText3");
				var text = document.getElementById("displayText3");
				if(ele.style.display == "block") {
					ele.style.display = "none";
					text.innerHTML = "<span> Edit</span>";
					document.getElementById('body3').hidden = "";
				}
				else {
					ele.style.display = "block";
					text.innerHTML = "<span> cancel</span>";
					document.getElementById('body3').hidden = "hidden";	 
				}
			} 
		
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
  