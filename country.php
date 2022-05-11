<!DOCTYPE html>
<html>
 
<head>
  <meta charset="utf-8">
  <title>Phone Number With Country Code Using JS</title>
  <link rel="stylesheet" href="build/css/intlTelInput.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
 
<body>
 <!--  <h1>Phone Number With Country Code</h1>
  <form>
    <input id="phone" name="phone" type="tel">
    <button type="submit">Submit</button>
  </form> -->
 
  <script src="build/js/intlTelInput.js"></script>
    <script>
    // Vanilla Javascript
    var input = document.querySelector("#phone");
    window.intlTelInput(input,({
      // options here
    }));
 
    $(document).ready(function() {
        $('.iti__flag-container').click(function() { 
          var countryCode = $('.iti__selected-flag').attr('title');
          var countryCode = countryCode.replace(/[^0-9]/g,'')
          $('#phone').val("");
          $('#phone').val("+"+countryCode+" "+ $('#phone').val());
       });
    });
  </script>
</body>
</html>