<?php
$prod=false;

?>
<html>
<head>


<?php if($prod){ ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQ4MV4D');</script>
<!-- End Google Tag Manager -->
<?php } ?>

</head>
<body>


<?php if(!$prod){
include "tags.php";
} ?>



<!-- ------------------------------ -->
<!-- MAIN USAGE -->

<script>
  whatsappScriptURL = "https://raw.githubusercontent.com/alcantararafael/Whatsapp-Button/main/whatsapp_form.php"

  var container = document.createElement("div");
  container.setAttribute('id', 'whatsappScriptContainer')

  function whatsappLoadHTML(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        //var container = document.getElementById("dynamicScriptContainer");
        container.innerHTML = xhr.responseText;
        if (typeof callback === "function") {
          callback();
        }
      }
    };
    xhr.send();
  }
  function whatsappEvalNewJS() {
    //var scripts = document.getElementById("dynamicScriptContainer").getElementsByTagName("script");
    var scripts = container.getElementsByTagName("script");
    var currentIndex = 0;

    function executeNextScript() {
      if (currentIndex < scripts.length) {
        var script = scripts[currentIndex];
        if (script.src) {
          var scriptElement = document.createElement("script");
          scriptElement.src = script.src;
          document.head.appendChild(scriptElement);
          scriptElement.onload = function(){
            currentIndex++;
            executeNextScript(); // Wait for script to load
          }
        } else {
          eval(script.textContent);
          currentIndex++;
          executeNextScript();
        }
      }
    }
    executeNextScript();
}

document.addEventListener("DOMContentLoaded", function(){
  document.body.append(container)
  whatsappLoadHTML(whatsappScriptURL, whatsappEvalNewJS);
});

</script>

<!-- END :: MAIN USAGE -->
<!-- ------------------------------ -->




<button class="whatsapp" name='BTN with Class'>CLASS Whatsapp</button>

<a href="#whatsapp" name='LinkButton'>ANCHOR Whatsapp</a>

<img class="whatsapp wt-footer" phone="11998981339" src="https://26327664.fs1.hubspotusercontent-eu1.net/hubfs/26327664/whatsapp-icon-3-1.png" alt="whatsapp-icon-3-1" width="115" height="39" loading="lazy" style="height: auto; max-width: 100%; width: 115px;">
<BR>

<iframe width="560" height="315" src="https://www.youtube.com/embed/pXorTGt27bc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<BR>

<iframe src="https://play-eu1.hubspotvideo.com/v/26327664/id/55440392641?renderContext=onload-placeholder&parentOrigin=https%3A%2F%2Fmktbr.vemcogroup.com&pageId=66355225807&locale=en#hsvid=a054f90d-e8a1-49f5-95ae-bd0316fd4904&t=1682360605346" frameborder="0"></iframe>

<div style='margin-left: 200px;'>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom lorem ypsom <BR>
</div>

</body>
</html>