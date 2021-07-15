grecaptcha.ready(function() {
    grecaptcha.execute('SITE-KEY-AQUI', {action: 'homepage'}).then(function(token) {
        
        document.getElementById("g-recaptcha-response").value = token;
    });
  });