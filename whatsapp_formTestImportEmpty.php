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
//include "tags.php";
} ?>

<?php 
  if(!$prod){ 
    include 'whatsapp_form.php';
  }
?>

<!-- ------------------------------ -->
<!-- MAIN USAGE -->
<?php if($prod){ ?>
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
<?php } ?>
<!-- END :: MAIN USAGE -->
<!-- ------------------------------ -->


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