
<script type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js" charset="utf-8"></script>
<!-- The Modal -->
<div id="myModal-whats" class="modal-whats" style="display:none">
<!-- Modal content -->
<div class="modal-content-whats"><span class="close-whats">×</span>
<p class="modal-whats-body">
    <!-- CONTENT HERE -->
</p>
</div>
</div>

<script>
var whatsapp_form_hubspot_version = 'Whatsapp + Form Hubspot v1.7'
var whatsapp_form_hubspot_DONE=false
var whatsapp_default_phoneWhats = '11998920879'
var whatsapp_default_text = 'Ola, gostaria de mais informacoes da plataforma de fluxo Vemcount.'

console.log('%c %s', 'background: #222; color: #bada55', whatsapp_form_hubspot_version);

function docReadyChecker(checker){
    var toReturn = false
    try{
        console.log('docReadyChecker FUNC - '+checker.name)
        toReturn = checker()
    }catch(e){
        console.log('%c %s', 'background: #fff; color: #f00', 'docReadyChecker ERROR: %s', e)
    }

    return toReturn
}

function docReady(fn, checker) {
    console.log('%c %s', 'background: #000; color: #eee', 'docReady('+fn.name+')')

    if(whatsapp_form_hubspot_DONE){
        console.log('whatsapp_form_hubspot_DONE: %o', whatsapp_form_hubspot_DONE)
        return false
    }
    
    var checkerResult = docReadyChecker(checker)
    if(checkerResult===true){
        console.log('%c %s', 'background: #000; color: #0F0', 'docReady :: CHECKER OK: '+checker.name)
        setTimeout(fn, 100);
        return
    }
    

    // see if DOM is already available
    //if (document.readyState === "complete" || document.readyState === "interactive") {
    switch (document.readyState) {
    case "complete":
        console.log('docReady :: document.readyState: '+document.readyState)
        // call on next available tick
        setTimeout(fn, 100);
    break;
    case "interactive":
        console.log('docReady :: document.readyState: '+document.readyState)
        setTimeout(function(){
            docReady(fn, checker);
        }, 2000);
    break;
    case "loading":
        console.log('docReady :: document.readyState: '+document.readyState)
        setTimeout(function(){
            docReady(fn, checker);
        }, 2000);
    break;
    default:
        console.log('docReady :: document.readyState: '+document.readyState)
        document.addEventListener("DOMContentLoaded", fn);
        break;
    }
}  


var eventNameCustom = ''

function sendConversionAds(email){
    console.log('sendConversionAds('+email+')')

    var campaign_id = new URLSearchParams(window.location.search).get('utm_campaign')
    var eventName = 'LeadFormG4'
    if (eventNameCustom != ''){
        //eventName = 'LeadFormWhatsappG4'
        eventName = eventNameCustom
    }
        
    // Google Analytics - This is a lead
    var eventCategory = 'LandingForm'
    var eventAction = 'Submit ['+campaign_id+']'
    var eventLabel = email
      
    // Google Ads
    // gtag("event", "conversion", {send_to: "AW-881321376/HytICJyh9MwDEKDLn6QD"})
    // GA4 - LeadFormG4
    gtag("event", eventName, {
    eventCategory: eventCategory,
    eventAction: eventAction,
    eventLabel: eventLabel,
    });
    
    
    console.log('Facebook - Lead Event')
    fbq('track', 'Lead');
    
    console.log('Taboola - Lead Event')
	_tfa.push({notify: 'event', name: 'lead', id: 1431856});
  }

function formListener(){
    var funcName = arguments.callee.name

    console.log('formListener(): '+window.location)
    var items = document.querySelectorAll("form")
    if(items.length==0){
        console.log('%c %s', 'background: #fff; color: #f00', funcName+' ITEMS No:'+items.length)
    }
    items.forEach(function(formE){
        console.log('form:'+formE.id)
        formE.addEventListener('submit', function(e){
            var email = document.querySelectorAll('input[name="email"]', formE)[0].value
            sendConversionAds(email)
            return false;
        })
    })
}

var formListenerChecker = function(){
    var items = document.querySelectorAll("form")
    if(items.length>=1){
        console.log(items)
        return true;
    }
    return false
}
docReady(formListener, formListenerChecker)


var phoneWhatsGlobal = ''
var formWhatsDebug = null
function createFormCustom(number){
    console.log('createFormCustom('+number+')')

    if(phoneWhatsGlobal==number){
        console.log('Whatsapp Form already created')
        return
    }

    document.querySelector('.modal-whats-body').innerHTML=''

    hbspt.forms.create({
        target: '.modal-whats-body',
        region: "eu1",
        portalId: "26327664",
        formId: "b2821e21-f1e8-45b0-9591-5bba628d7a36",
        onFormSubmit: function(form) {
            console.log('onFormSubmit (WhatsappForm)')
            formWhatsDebug = form
            console.log(form)
            var email = ''
            try{
                email = form[0].email.value // Inside Hubspot Pages
            }catch(e){
                console.log('WhatsappForm ErrorEmail: %s', e)
                try{
                    email = form.email.value // External Pages
                }catch(e){
                    console.log('%c WhatsappForm ErrorEmail: %s', 'background: #fff; color: #f00', e)
                }
            }

            try{
                sendConversionAds(email)
            }catch(e){
                console.log('%c WhatsappForm Error: %s', 'background: #fff; color: #f00', e)
                console.log($form)
            }
          
            setTimeout(function(){
              window.location = 'https://wa.me/55'+number+'?text='+whatsapp_default_text
            }, 1500);
            
        } 
    });
    phoneWhatsGlobal = number
}

function createWPButton(){
    console.log(createWPButton.name)
    var imgURL = 'https://media.tenor.com/JfBNTAcCpN0AAAAj/ww.gif'

    var WPButton = document.createElement('img')
    WPButton.name='WP Default Button'
    WPButton.classList.add('whatsapp')
    WPButton.classList.add('wt-footer')
    WPButton.setAttribute('phone', whatsapp_default_phoneWhats)
    WPButton.setAttribute('src', imgURL)
    WPButton.setAttribute('alt', 'Whatsapp Button')
    WPButton.setAttribute('loading', 'lazy')
    WPButton.setAttribute('style', 'height: auto; max-width: 100%; width: 115px;')

    document.body.append(WPButton)
}

function whatsappForm(){
    // https://www.w3schools.com/howto/howto_css_modals.asp
    var funcName = arguments.callee.name
    
    styleWhatsapp = document.createElement("style");
    styleWhatsapp.append('.modal-whats {    display: none; /* Hidden by default */    position: fixed; /* Stay in place */    z-index: 1; /* Sit on top */    left: 0;    top: 0;    width: 100%; /* Full width */    height: 100%; /* Full height */    overflow: auto; /* Enable scroll if needed */    background-color: rgb(0,0,0); /* Fallback color */    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */  } ');
    styleWhatsapp.append('.modal-content-whats {    background-color: #fefefe;    margin: 7% auto; /* 15% from the top and centered */    padding: 20px;    border: 1px solid #888;    width: 80%; /* Could be more or less, depending on screen size */  }');
    styleWhatsapp.append('.close-whats {    color: #aaa;    float: right;    font-size: 28px;    font-weight: bold;  } ');
    styleWhatsapp.append('.close-whats:hover, .close-whats:focus {    color: black;    text-decoration: none;    cursor: pointer;  }');
    styleWhatsapp.append('.wt-footer { position: fixed; bottom: 5px; left: 5px; }');
    document.getElementsByTagName("body")[0].appendChild(styleWhatsapp);

    // Get the modal
    var modal = document.getElementById("myModal-whats");
    
    if(modal=='null' || modal==null){
        console.log('Whatsapp Modal NULL')
        return
    }else{
        console.log('Whatsapp Modal OK')
    }

    // Get the button that opens the modal
    var phoneWhats = whatsapp_default_phoneWhats
    
    var items = document.querySelectorAll('.whatsapp, a[href="#whatsapp"]');
    if(items.length==0){
        console.log('%c %s', 'background: #fff; color: #f00', funcName+' ITEMS No:'+items.length)
        
        createWPButton()
        items = document.querySelectorAll('.whatsapp, a[href="#whatsapp"]');
    }
    items.forEach(function(btn){
        console.log('Button Name Found: '+btn.name)
        btn.style.cursor='pointer';
        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            phoneWhats = btn.getAttribute('phone')
            if(phoneWhats==null || phoneWhats=='null'){
                phoneWhats = whatsapp_default_phoneWhats
                console.log('Button Without Phone - Using DEFAULT:'+phoneWhats)
            }
            createFormCustom(phoneWhats)
            eventNameCustom = 'LeadFormWhatsappG4' // Used for GoogleAds + GA4
            modal.style.display = "block";
            modal.style.zIndex=1000
        }
        btn.href = 'javascript:void(0);'
    });
    createFormCustom(phoneWhats)

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close-whats")[0];
    

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
  
    whatsapp_form_hubspot_DONE = true
};

var whatsappChecker = function(){
    var items = document.querySelectorAll('.whatsapp, a[href="#whatsapp"]')
    if(items.length>=2){
        console.log(items)
        return true
    }
    return false
}
docReady(whatsappForm, whatsappChecker)

</script>


<!-- Trigger/Open The Modal EXAMPLES -->
<!--
<img class="whatsapp wt-footer" phone="11YXXZZXXZZ"
src="https://26327664.fs1.hubspotusercontent-eu1.net/hubfs/26327664/whatsapp-icon-3-1.png" 
alt="whatsapp-icon-3-1" loading="lazy" style="height: auto; max-width: 100%; width: 115px;">

<img class="whatsapp wt-footer" phone="11YXXZZXXZZ"
src="https://media.tenor.com/JfBNTAcCpN0AAAAj/ww.gif" 
alt="whatsapp-icon-3-1" loading="lazy" style="height: auto; max-width: 100%; width: 115px;">

<img class="whatsapp wt-footer" phone="11YXXZZXXZZ"
src="https://i.pinimg.com/originals/cf/96/e5/cf96e5b917fa2c520da5a9a73afced44.gif" 
alt="whatsapp-icon-3-1" loading="lazy" style="height: auto; max-width: 100%; width: 115px;">
-->