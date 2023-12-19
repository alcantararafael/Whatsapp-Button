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
<script>

</script>

<?php if(!$prod){ ?>
<!-- Google Analytics tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7W8TN3ZNPX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7W8TN3ZNPX');
</script>
<!-- END : Google Analytics tag (gtag.js) -->


<!-- Google ADS VemcoBrasil - tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-881321376"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-881321376');
</script>
<!-- END : Google ADS VemcoBrasil - tag (gtag.js) -->

<!-- Facebook Pixel Code : VEMCO BR -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '559506894966522');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=559506894966522&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Taboola Pixel Code -->
<script type='text/javascript'>
  window._tfa = window._tfa || [];
  window._tfa.push({notify: 'event', name: 'page_view', id: 1431856});
  !function (t, f, a, x) {
         if (!document.getElementById(x)) {
            t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
         }
  }(document.createElement('script'),
  document.getElementsByTagName('script')[0],
  '//cdn.taboola.com/libtrc/unip/1431856/tfa.js',
  'tb_tfa_script');
</script>
<!-- End of Taboola Pixel Code -->

<?php } ?>



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