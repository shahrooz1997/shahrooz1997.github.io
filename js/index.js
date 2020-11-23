// nullify the global reference while instrumenting the form
StaticEmail = (function (StaticEmail) {
  contactform.addEventListener('submit', function (event) {
    event.preventDefault();
    var name = contactform.name.value.trim();
    var from = contactform.from.value.trim();
    var md = contactform.md.value.trim();
    if (from && md) {
      contactform.submit.disabled = true;
      StaticEmail({
        path: '/api/paperboy',
        subject: 'Contact from ' + name,
        from: from,
        md: md
      })
      .then(
        thanks,
        function (error) {
          // this check is to make code testable via http-server
          if (
            error.message === 'Method Not Allowed'
            // handle 405 errors as either OK (75%) or errors
            // if you don't want errors, comment the following line
          )
            thanks();
          else {
            alert(error);
            contactform.submit.disabled = false;
          }
        }
      );
    }
  });
  function thanks() {
    var div = document.createElement('div');
    div.textContent = 'Thank You!';
    contactform.parentNode.replaceChild(div, contactform);
  }
}(StaticEmail));