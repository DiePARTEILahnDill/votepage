<?php
include 'php/create-csv.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
        <meta charset="UTF-8" />
        <title>Dein Wahlprogramm</title>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link rel="stylesheet" href="style.css">
	<script>
	var divState = {};
	function showhide(id) {
	    if (document.getElementById) {
	        var divid = document.getElementById(id);
	        divState[id] = (divState[id]) ? false : true;
	        for (var div in divState){
	            if (divState[div] && div != id){
	                document.getElementById(div).style.display = 'none';
	                divState[div] = false;
	            }
	        }
	        divid.style.display = (divid.style.display == 'block' ? 'none' : 'block');
	    }
	}
	</script>
<script>
window.onload = function() {
  showhide('div1');
};
</script>
    </head>

    <body>
        <div class="formme">
	    <a href="https://partei-ldk.de/" class="custom-logo-link site-logo-link" rel="home" itemprop="url"><img width="720" height="179" src="https://partei-ldk.de/wp-content/uploads/2019/03/logo2.png" class="custom-logo attachment-full size-full" alt="Die Partei" itemprop="logo" srcset="https://partei-ldk.de/wp-content/uploads/2019/03/logo2.png 720w, https://partei-ldk.de/wp-content/uploads/2019/03/logo2-300x75.png 300w" sizes="(max-width: 720px) 100vw, 720px" /></a>
	        <div id="men0"> <a href="javascript:void(null)" onclick="showhide('nav');" >≡ Themen </a> </div>
            <div id="nav" class="menu">
		<div id="men1"> <a href="javascript:void(null)" onclick="showhide('div1');" >Verkehr</a> </div>
		<div id="men2"> <a href="javascript:void(null)" onclick="showhide('div2');" >Gesundheit</a> </div>
		<div id="men3"> <a href="javascript:void(null)" onclick="showhide('div3');" >Kinder</a> </div>
		<div id="men4"> <a href="javascript:void(null)" onclick="showhide('div4');" >Freizeitgestaltung</a> </div>
		<div id="men5"> <a href="javascript:void(null)" onclick="showhide('div5');" >Wohnungsmarkt</a> </div>
		<div id="men6"> <a href="javascript:void(null)" onclick="showhide('div6');" >Einzelhandel</a> </div>
                <div id="men7"> <a href="javascript:void(null)" onclick="showhide('div7');" >Digitalisierung</a> </div>
		<div id="men8"> <a href="javascript:void(null)" onclick="showhide('div8');" >Arbeitsmarkt</a> </div>
		<div id="men9"> <a href="javascript:void(null)" onclick="showhide('div9');" >Sonstiges </a></div>
           </div>
	<form action="" method="post">
<div id="content">
               <div id="div1" class="form">                                                                                                                           
                   <div class="col-2">                                                                                                                        
                       <label for="formcontent1" class="formcontent1"><p>Dein Vorschlag für unser Wahlprogramm zum Thema Verkehr und Baustellen</p></label>                                           
                   </div>                                                                                                                                     
                   <div class="ph-2">                                                                                                                         
                       <textarea id="formcontent" name="formcontent1" placeholder="Es soll eine Seilbahn zwischen Klinik und Dom errichtet werden." rows="4" cols="50"></textarea>   
                   </div>                                                                                                                                     
               </div>  
                                                                                                                                                              
               <div id="div2" class="form">                                                                                                                           
                   <div class="col-3">                                                                                                                        
                       <label for="formcontent2" class="formcontent2"><p>Dein Vorschlag für unser Wahlprogramm zum Thema Gesundheitsversorgung</p></label>                                           
                   </div>                                                                                                                                     
                   <div class="ph-3">                                                                                                                         
                       <textarea id="formcontent" name="formcontent2" placeholder="Die Kranken nach Osteuropa outsourcen, um die Krankenhäuser zu entlasten." rows="4" cols="50"></textarea>   
                   </div>                                                                                                                                     
               </div>                                                                                                                                         
                                                                                                                                                              
               <div id="div3" class="form">                                                                                                                           
                   <div class="col-4">                                                                                                                        
                       <label for="formcontent3" class="formcontent3"><p>Dein Vorschlag für unser Wahlprogramm zum Thema Kinder (Betreuung/Spielplätze/Schulen)</p></label>                                           
                   </div>                                                                                                                                     
                   <div class="ph-4">                                                                                                                         
                       <textarea id="formcontent" name="formcontent3" placeholder="Kinder müssen sich ihre Betreuung selber erarbeiten." rows="4" cols="50"></textarea>   
                   </div>                                                                                                                                     
               </div>  

               <div id="div4" class="form">                                                                                                                           
                   <div class="col-5">                                                                                                                        
                       <label for="formcontent4" class="formcontent4"><p>Dein Vorschlag für unser Wahlprogramm zum Thema Freizeitgestaltung (Vereine/Kultur)</p></label>                                           
                   </div>                                                                                                                                     
                   <div class="ph-5">                                                                                                                         
                       <textarea id="formcontent" name="formcontent4" placeholder="Vereine sollen verpflichtet werden, die hessische Kultur im Vereinsleben zu etablieren, indem zum Beispiel die hessische Tradition der Todesstrafe in die Vereinssatzung eingetragen wird." rows="4" cols="50"></textarea>   
                   </div>                                                                                                                                     
               </div>  

               <div id="div5" class="form">                                                                                                                           
                   <div class="col-6">                                                                                                                        
                       <label for="formcontent5" class="formcontent5"><p>Dein Vorschlag für unser Wahlprogramm zum Thema Wohnungsmarkt</p></label>                                           
                   </div>                                                                                                                                     
                   <div class="ph-6">                                                                                                                         
                       <textarea id="formcontent" name="formcontent5" placeholder="Um Wohnungsraum zu schaffen und die Seilbahnen nicht zu behindern, darf neuer Wohnraum nur noch in der Hohlerde gebaut werden." rows="4" cols="50"></textarea>   
                   </div>                                                                                                                                     
               </div>  

               <div id="div6" class="form">                                                                                                                           
                   <div class="col-7">                                                                                                                        
                       <label for="formcontent6" class="formcontent6"><p>Dein Vorschlag für unser Wahlprogramm zum Thema Einzelhandel</p></label>                                           
                   </div>                                                                                                                                     
                   <div class="ph-7">                                                                                                                         
                       <textarea id="formcontent" name="formcontent6" placeholder="Der Einzelhandel muss wieder lukrativer für alle werden und darf nicht vom Onlinehandel negativ beeinflusst werden. Deswegen darf der Onlinehandel nur noch ab 22 bis 6 Uhr geöffnet haben." rows="4" cols="50"></textarea>   
                   </div>                                                                                                                                     
               </div>  

               <div id="div7" class="form">                                                                                                                           
                   <div class="col-8">                                                                                                                        
                       <label for="formcontent7" class="formcontent7"><p>Dein Vorschlag für unser Wahlprogramm zum Thema Digitalisierung</p></label>                                           
                   </div>                                                                                                                                     
                   <div class="ph-8">                                                                                                                         
                       <textarea id="formcontent" name="formcontent7" placeholder="Die Digitalisierung auf dem Land muss besser werden, weil die Digitalisierung auf dem Land einfach besser werden muss." rows="4" cols="50"></textarea>   
                   </div>                                                                                                                                     
               </div>  

               <div id="div8" class="form">                                                                                                                           
                   <div class="col-9">                                                                                                                        
                       <label for="formcontent8" class="formcontent8"><p>Dein Vorschlag für unser Wahlprogramm zum Thema Arbeitsmarkt</p></label>                                           
                   </div>                                                                                                                                     
                   <div class="ph-9">                                                                                                                         
                       <textarea id="formcontent" name="formcontent8" placeholder="Damit jede:r hessische Einwohner:in die Möglichkeit einer Vollzeitstelle erhält, soll Carearbeit als sozialversicherungspflichtige Beschäftigung im Staatsdienst zählen." rows="4" cols="50"></textarea>   
                   </div>                                                                                                                                     
               </div>  

               <div id="div9" class="form">                                                                                                                           
                   <div class="col-10">                                                                                                                        
                       <label for="formcontent9" class="formcontent9"><p>Was schlägst du sonst noch vor, was wir für dich umsetzen sollen?</p></label>                                           
                   </div>                                                                                                                                     
                   <div class="ph-10">                                                                                                                         
                       <textarea id="formcontent" name="formcontent9" placeholder="Es soll eine Seilbahn zwischen Klink und Dom erichtet werden" rows="4" cols="50"></textarea>   
                   </div>                                                                                                                                     
               </div>  
</div>

<p id="info"> Wähle ein Thema aus dem Menü oben aus und schlage vor, was wir politisch umsetzen sollen. 
Wenn du zu allen Themen, zu denen wir Politik machen sollen, etwas eingetragen hast, 
validiere dich mit deiner E-Mail und dem reCaptcha, dass du kein Bot oder eine weltvernichtende Maschine bist.</p>
               
                <?php                                    
                if (isset($errors)) {                    
                    ?>                                   
                    <div class="errors">                 
                        <?php                            
                        foreach ($errors as $error) {    
                            ?>                           
                            <p style="color:#ff0000">    
                                <?php echo $error; ?>    
                            </p>                         
                            <?php                        
                        }                                
                        ?>                               
                    </div>                               
                    <?php                                
                }                                        
                ?>                                       

<div class="form-1">
                   <div class="col-1">
                       <label for="formmail" class="formmail"><b>E-Mail-Adresse*</b></label>
                   </div>
                   <div class="ph-1">
                       <input type="text" id="formmail" name="formmail" placeholder="Deine E-Mail Adresse">
                   </div>
               </div>


    <form action="submit" method="POST">
      <div class="g-recaptcha" data-sitekey="<key>" data-callback="enableBtn"></div>
      <br/>
      <input disabled="true" id="submit-rc" name="submit" type="submit" value="Absenden">
    </form>
	<script type="text/javascript">
        function enableBtn() {
        document.getElementById("submit-rc").disabled = false;
        };                                  
 	</script>
         </form>
<div id="footer">                                                                          
This site is protected by reCAPTCHA and the Google                        
    <a href="https://policies.google.com/privacy">Privacy Policy</a> and  
    <a href="https://policies.google.com/terms">Terms of Service</a> apply
<br>
<a href="https://partei-ldk.de/impressum/"> Datenschutzerklärung und Impressum
</div>
        </div>
    </body>
</html>

