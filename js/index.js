
        // function googleTranslateElementInit() {
            // new google.translate.TranslateElement({
                // pageLanguage: 'en',
                // includedLanguages: 'ar,de,en,nl,ru,fa,ur',
            // }, 'google_translate_element');

        // }
        // counter section
        
(function ($){
    $.fn.counter = function() {
      const $this = $(this),
      numberFrom = parseInt($this.attr('data-from')),
      numberTo = parseInt($this.attr('data-to')),
      delta = numberTo - numberFrom,
      deltaPositive = delta > 0 ? 1 : 0,
      time = parseInt($this.attr('data-time')),
      changeTime = 10;
      
      let currentNumber = numberFrom,
      value = delta*changeTime/time;
      var interval1;
      const changeNumber = () => {
        currentNumber += value;

        (deltaPositive && currentNumber >= numberTo) || (!deltaPositive &&currentNumber<= numberTo) ? currentNumber=numberTo : currentNumber;
        this.text(parseInt(currentNumber));
        currentNumber == numberTo ? clearInterval(interval1) : currentNumber;  
      }
  
      interval1 = setInterval(changeNumber,changeTime);
    }
  }(jQuery));
  
  $(document).ready(function(){
  
    $('.count-up').counter();
    $('.count1').counter();
    $('.count2').counter();
    $('.count3').counter();
    $('.count4').counter();
    
    new WOW().init();
    
    setTimeout(function () {
      $('.count5').counter();
    }, 3000);
  });
        // 

     


    
