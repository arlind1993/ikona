$(window).ready(function() {
    function loadLanguage(lang) {
        $.getJSON("languages/"+ lang + '.json', function(data) {
            Object.entries(data).map(([key, value])=>{
                var text = $('#'+key)?.text();
                if(text){
                    $('#'+key)?.text(value);
                }
            });
        });
      }

      // Function to change language
      window.changeLanguage = function(lang) {
        Cookies.set('language', lang, { expires: 31 }); // Save the language preference for 7 days
        loadLanguage(lang);
        $('.act-lang').removeClass('act-lang'); // Remove active class from the current active language
        $('#'+lang+'_title').addClass('act-lang'); // Add active class to the selected language
      };

      // Check for a saved language preference in cookies
      var savedLang = Cookies.get('language');
      changeLanguage(savedLang ?? 'en');
});
