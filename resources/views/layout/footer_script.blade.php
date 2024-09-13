{{-- alert mas str --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
<script>
  setTimeout(function() {
    document.querySelector('.alert').remove();
}, 3000);
</script>
{{-- alert mas  --}}
<script type="text/javascript" src="public/assets/mfm3~product.js.download"></script>
<script type="text/javascript">
    var _qevents = _qevents || [];

    (function() {
        var elem = document.createElement('script');
        elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") +
            ".quantserve.com/quant.js";
        elem.async = true;
        elem.type = "text/javascript";
        var scpt = document.getElementsByTagName('script')[0];
        scpt.parentNode.insertBefore(elem, scpt);
    })();

    _qevents.push({
        qacct: "p-gEksb-MVdYXWu"
    });
</script>
<!-- Add Swiper -->
<script src="public/assets/jquery-3.6.0.min"></script>
<script src="public/assets/bootstrap.bundle.min.js.download"></script>
{{-- pind code pattern --}}
<script>
    document.getElementById('pin_code').addEventListener('input', function(e) {
        let value = e.target.value;
        let digitsOnly = value.replace(/\D/g, ''); // Remove all non-digit characters for formatting

        let formattedValue = '';

        if (digitsOnly.length > 0) {
            formattedValue = digitsOnly.slice(0, 5); 
        }
        if (digitsOnly.length > 5) {
            formattedValue += '-' + digitsOnly.slice(5, 8); 
        }
        if (digitsOnly.length > 8) {
            formattedValue += '-' + digitsOnly.slice(8, 13); 
        }

        // If the formatted value doesn't match the entered value (and the difference isn't just a manually entered dash)
        if (value !== formattedValue && !(value.length > formattedValue.length && value[formattedValue
                .length] === '-')) {
            e.target.value = formattedValue;
        }
    });
</script>
</body>

</html>
