// International Phone Number With Code
        // // START

        // get the country data from the plugin
        $(function () {
          var code = "+1"; // Assigning value from model.
          $('#phone').val(code);
          $('#phone').intlTelInput({
              autoHideDialCode: False,
              autoPlaceholder: "ON",
              dropdownContainer: document.body,
              formatOnDisplay: true,
              hiddenInput: "full_number",
              initialCountry: "auto",
              nationalMode: true,
              placeholderNumberType: "DIAL",
              preferredCountries: ['US'],
              separateDialCode: false
          });

      });

      var countryData = window.intlTelInputGlobals.getCountryData(),
          input = document.querySelector("#phone");
      // init plugin
      var iti = window.intlTelInput(input, {
          utilsScript: "../../build/js/utils.js?1638200991544" // just for formatting/placeholders etc
      });

      // populate the country dropdown
      for (var i = 0; i < countryData.length; i++) {
          var country = countryData[i];
          var optionNode = document.createElement("option");
          optionNode.value = country.iso2;
          var textNode = document.createTextNode(country.name);
          optionNode.appendChild(textNode);
          addressDropdown.appendChild(optionNode);
      }
      // set it's initial value
      addressDropdown.value = iti.getSelectedCountryData().iso2;

      // listen to the telephone input for changes
      input.addEventListener('countrychange', function (e) {
          addressDropdown.value = iti.getSelectedCountryData().iso2;
      });

      // listen to the address dropdown for changes
      addressDropdown.addEventListener('change', function () {
          iti.setCountry(this.value);
      });
// END