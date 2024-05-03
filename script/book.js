$(document).ready(function () {
  $('#place').on('change', function(){
      switch($('#place option:selected').val()) {
          case '00':
            document.getElementById("showA").style.display  = '';
            document.getElementById("showA-1").style.display  = 'none';
            document.getElementById("showA-2").style.display  = 'none';
            document.getElementById("showA-3").style.display  = 'none';
            document.getElementById("showA-4").style.display  = 'none';
            document.getElementById("showA-5").style.display  = 'none';
            document.getElementById("showB").style.display  = '';
            document.getElementById("showB-1").style.display  = 'none';
            document.getElementById("showB-2").style.display  = 'none';
            document.getElementById("showB-3").style.display  = 'none';
            document.getElementById("showB-4").style.display  = 'none';
            document.getElementById("showB-5").style.display  = 'none';
            document.getElementById("showB-1-1").style.display  = 'none';
            document.getElementById("showB-2-1").style.display  = 'none';
            document.getElementById("showB-3-1").style.display  = 'none';
            document.getElementById("showB-4-1").style.display  = 'none';
            document.getElementById("showB-5-1").style.display  = 'none';
            document.getElementById("showB-1-2").style.display  = 'none';
            document.getElementById("showB-2-2").style.display  = 'none';
            document.getElementById("showB-3-2").style.display  = 'none';
            document.getElementById("showB-4-2").style.display  = 'none';
            document.getElementById("showB-5-2").style.display  = 'none';
            document.getElementById("showB-1-3").style.display  = 'none';
            document.getElementById("showB-2-3").style.display  = 'none';
            document.getElementById("showB-3-3").style.display  = 'none';
            document.getElementById("showB-4-3").style.display  = 'none';
            document.getElementById("showB-5-3").style.display  = 'none';
            document.getElementById("showB-1-4").style.display  = 'none';
            document.getElementById("showB-2-4").style.display  = 'none';
            document.getElementById("showB-3-4").style.display  = 'none';
            document.getElementById("showB-4-4").style.display  = 'none';

          break;
          case '01':
            document.getElementById("showA").style.display  = 'none';
            document.getElementById("showA-1").style.display  = '';
            document.getElementById("showA-2").style.display  = 'none';
            document.getElementById("showA-3").style.display  = 'none';
            document.getElementById("showA-4").style.display  = 'none';
            document.getElementById("showA-5").style.display  = 'none';

            $('#category').on('change', function(){
              switch($('#category option:selected').val()) {
                case '00':
                  document.getElementById("showB").style.display  = '';
                  document.getElementById("showB-1").style.display  = 'none';
                  document.getElementById("showB-2").style.display  = 'none';
                  document.getElementById("showB-3").style.display  = 'none';
                  document.getElementById("showB-4").style.display  = 'none';
                  document.getElementById("showB-5").style.display  = 'none';
          
                break;
                case '01':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1").style.display  = '';
                  document.getElementById("showB-2").style.display  = 'none';
                  document.getElementById("showB-3").style.display  = 'none';
                  document.getElementById("showB-4").style.display  = 'none';
                  document.getElementById("showB-5").style.display  = 'none';

                  $('#subcateg1').on('change', function(){
                    switch($('#subcateg1 option:selected').val()) {
                      case '00':
                        document.getElementById("showC").style.display  = '';
                        document.getElementById("showC-coral").style.display  = 'none';
                        document.getElementById("showC-matabungkay").style.display  = 'none';
                        document.getElementById("showC-crusoe").style.display  = 'none';
                        document.getElementById("showC-pico").style.display  = 'none';
                      break;
                      case '01':
                        document.getElementById("showC").style.display  = 'none';
                        document.getElementById("showC-coral").style.display  = '';
                        document.getElementById("showC-matabungkay").style.display  = 'none';
                        document.getElementById("showC-crusoe").style.display  = 'none';
                        document.getElementById("showC-pico").style.display  = 'none';
                      break;
                      case '02':
                        document.getElementById("showC").style.display  = 'none';
                        document.getElementById("showC-coral").style.display  = 'none';
                        document.getElementById("showC-matabungkay").style.display  = '';
                        document.getElementById("showC-crusoe").style.display  = 'none';
                        document.getElementById("showC-pico").style.display  = 'none';
                      break;
                      case '03':
                        document.getElementById("showC").style.display  = 'none';
                        document.getElementById("showC-coral").style.display  = 'none';
                        document.getElementById("showC-matabungkay").style.display  = 'none';
                        document.getElementById("showC-crusoe").style.display  = '';
                        document.getElementById("showC-pico").style.display  = 'none';
                      break;
                      case '04':
                        document.getElementById("showC").style.display  = 'none';
                        document.getElementById("showC-coral").style.display  = 'none';
                        document.getElementById("showC-matabungkay").style.display  = 'none';
                        document.getElementById("showC-crusoe").style.display  = 'none';
                        document.getElementById("showC-pico").style.display  = '';
                      break;
                    }
                  });

                break;
                case '02':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1").style.display  = 'none';
                  document.getElementById("showB-2").style.display  = '';
                  document.getElementById("showB-3").style.display  = 'none';
                  document.getElementById("showB-4").style.display  = 'none';
                  document.getElementById("showB-5").style.display  = 'none';

                    $('#subcateg2').on('change', function(){
                      switch($('#subcateg2 option:selected').val()) {
                        case '00':
                          document.getElementById("showC").style.display  = '';
                          document.getElementById("showC-laiya").style.display  = 'none';
                        break;
                        case '01':
                          document.getElementById("showC").style.display  = 'none';
                          document.getElementById("showC-laiya").style.display  = '';
                        break;
                      }
                    });
                break;
                case '03':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1").style.display  = 'none';
                  document.getElementById("showB-2").style.display  = 'none';
                  document.getElementById("showB-3").style.display  = '';
                  document.getElementById("showB-4").style.display  = 'none';
                  document.getElementById("showB-5").style.display  = 'none';

                    $('#subcateg3').on('change', function(){
                      switch($('#subcateg3 option:selected').val()) {
                        case '00':
                          document.getElementById("showC").style.display  = '';
                          document.getElementById("showC-taal").style.display  = 'none';
                          document.getElementById("showC-milea").style.display  = 'none';
                          document.getElementById("showC-fortune").style.display  = 'none';
                          document.getElementById("showC-fantasy").style.display  = 'none';
                        break;
                        case '01':
                          document.getElementById("showC").style.display  = 'none';
                          document.getElementById("showC-taal").style.display  = '';
                          document.getElementById("showC-milea").style.display  = 'none';
                          document.getElementById("showC-fortune").style.display  = 'none';
                          document.getElementById("showC-fantasy").style.display  = 'none';
                        break;
                        case '02':
                          document.getElementById("showC").style.display  = 'none';
                          document.getElementById("showC-taal").style.display  = 'none';
                          document.getElementById("showC-milea").style.display  = '';
                          document.getElementById("showC-fortune").style.display  = 'none';
                          document.getElementById("showC-fantasy").style.display  = 'none';
                        break;
                        case '03':
                          document.getElementById("showC").style.display  = 'none';
                          document.getElementById("showC-taal").style.display  = 'none';
                          document.getElementById("showC-milea").style.display  = 'none';
                          document.getElementById("showC-fortune").style.display  = '';
                          document.getElementById("showC-fantasy").style.display  = 'none';
                        break;
                        case '04':
                          document.getElementById("showC").style.display  = 'none';
                          document.getElementById("showC-taal").style.display  = 'none';
                          document.getElementById("showC-milea").style.display  = 'none';
                          document.getElementById("showC-fortune").style.display  = 'none';
                          document.getElementById("showC-fantasy").style.display  = '';
                        break;
                      }
                    });
                break;
                case '04':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1").style.display  = 'none';
                  document.getElementById("showB-2").style.display  = 'none';
                  document.getElementById("showB-3").style.display  = 'none';
                  document.getElementById("showB-4").style.display  = '';
                  document.getElementById("showB-5").style.display  = 'none';

                  $('#subcateg4').on('change', function(){
                    switch($('#subcateg4 option:selected').val()) {
                      case '00':
                        document.getElementById("showC").style.display  = '';
                        document.getElementById("showC-cintai").style.display  = 'none';
                        document.getElementById("showC-days").style.display  = 'none';
                        document.getElementById("showC-solano").style.display  = 'none';
                      break;
                      case '01':
                        document.getElementById("showC").style.display  = 'none';
                        document.getElementById("showC-cintai").style.display  = '';
                        document.getElementById("showC-days").style.display  = 'none';
                        document.getElementById("showC-solano").style.display  = 'none';
                      break;
                      case '02':
                        document.getElementById("showC").style.display  = 'none';
                        document.getElementById("showC-cintai").style.display  = 'none';
                        document.getElementById("showC-days").style.display  = '';
                        document.getElementById("showC-solano").style.display  = 'none';
                      break;
                      case '03':
                        document.getElementById("showC").style.display  = 'none';
                        document.getElementById("showC-cintai").style.display  = 'none';
                        document.getElementById("showC-days").style.display  = 'none';
                        document.getElementById("showC-solano").style.display  = '';
                      break;
                    }
                  });

                break;
                case '05':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1").style.display  = 'none';
                  document.getElementById("showB-2").style.display  = 'none';
                  document.getElementById("showB-3").style.display  = 'none';
                  document.getElementById("showB-4").style.display  = 'none';
                  document.getElementById("showB-5").style.display  = '';

                    $('#subcateg5').on('change', function(){
                      switch($('#subcateg5 option:selected').val()) {
                        case '00':
                          document.getElementById("showC").style.display  = '';
                          document.getElementById("showC-netanya").style.display  = 'none';
                          document.getElementById("showC-club").style.display  = 'none';
                        break;
                        case '01':
                          document.getElementById("showC").style.display  = 'none';
                          document.getElementById("showC-netanya").style.display  = '';
                          document.getElementById("showC-club").style.display  = 'none';
                        break;
                        case '02':
                          document.getElementById("showC").style.display  = 'none';
                          document.getElementById("showC-netanya").style.display  = 'none';
                          document.getElementById("showC-club").style.display  = '';
                        break;
                      }
                    });

                break;
                default:
              }
            });
          break;
          case '02':
            document.getElementById("showA").style.display  = 'none';
            document.getElementById("showA-1").style.display  = 'none';
            document.getElementById("showA-2").style.display  = '';
            document.getElementById("showA-3").style.display  = 'none';
            document.getElementById("showA-4").style.display  = 'none';
            document.getElementById("showA-5").style.display  = 'none';


            $('#category1').on('change', function(){
              switch($('#category1 option:selected').val()) {
                case '00':
                  document.getElementById("showB").style.display  = '';
                  document.getElementById("showB-1-1").style.display  = 'none';
                  document.getElementById("showB-2-1").style.display  = 'none';
                  document.getElementById("showB-3-1").style.display  = 'none';
                  document.getElementById("showB-4-1").style.display  = 'none';
                  document.getElementById("showB-5-1").style.display  = 'none';
                break;
                case '01':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-1").style.display  = '';
                  document.getElementById("showB-2-1").style.display  = 'none';
                  document.getElementById("showB-3-1").style.display  = 'none';
                  document.getElementById("showB-4-1").style.display  = 'none';
                  document.getElementById("showB-5-1").style.display  = 'none';
                break;
                case '02':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-1").style.display  = 'none';
                  document.getElementById("showB-2-1").style.display  = '';
                  document.getElementById("showB-3-1").style.display  = 'none';
                  document.getElementById("showB-4-1").style.display  = 'none';
                  document.getElementById("showB-5-1").style.display  = 'none';
                break;
                case '03':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-1").style.display  = 'none';
                  document.getElementById("showB-2-1").style.display  = 'none';
                  document.getElementById("showB-3-1").style.display  = '';
                  document.getElementById("showB-4-1").style.display  = 'none';
                  document.getElementById("showB-5-1").style.display  = 'none';
                break;
                case '04':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-1").style.display  = 'none';
                  document.getElementById("showB-2-1").style.display  = 'none';
                  document.getElementById("showB-3-1").style.display  = 'none';
                  document.getElementById("showB-4-1").style.display  = '';
                  document.getElementById("showB-5-1").style.display  = 'none';
                break;
                case '05':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-1").style.display  = 'none';
                  document.getElementById("showB-2-1").style.display  = 'none';
                  document.getElementById("showB-3-1").style.display  = 'none';
                  document.getElementById("showB-4-1").style.display  = 'none';
                  document.getElementById("showB-5-1").style.display  = '';
                break;
                default:
              }
            });
          break;
          case '03':
            document.getElementById("showA").style.display  = 'none';
            document.getElementById("showA-1").style.display  = 'none';
            document.getElementById("showA-2").style.display  = 'none';
            document.getElementById("showA-3").style.display  = '';
            document.getElementById("showA-4").style.display  = 'none';
            document.getElementById("showA-5").style.display  = 'none';


            $('#category2').on('change', function(){
              switch($('#category2 option:selected').val()) {
                case '00':
                  document.getElementById("showB").style.display  = '';
                  document.getElementById("showB-1-2").style.display  = 'none';
                  document.getElementById("showB-2-2").style.display  = 'none';
                  document.getElementById("showB-3-2").style.display  = 'none';
                  document.getElementById("showB-4-2").style.display  = 'none';
                  document.getElementById("showB-5-2").style.display  = 'none';
                break;
                case '01':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-2").style.display  = '';
                  document.getElementById("showB-2-2").style.display  = 'none';
                  document.getElementById("showB-3-2").style.display  = 'none';
                  document.getElementById("showB-4-2").style.display  = 'none';
                  document.getElementById("showB-5-2").style.display  = 'none';
                break;
                case '02':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-2").style.display  = 'none';
                  document.getElementById("showB-2-2").style.display  = '';
                  document.getElementById("showB-3-2").style.display  = 'none';
                  document.getElementById("showB-4-2").style.display  = 'none';
                  document.getElementById("showB-5-2").style.display  = 'none';
                break;
                case '03':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-2").style.display  = 'none';
                  document.getElementById("showB-2-2").style.display  = 'none';
                  document.getElementById("showB-3-2").style.display  = '';
                  document.getElementById("showB-4-2").style.display  = 'none';
                  document.getElementById("showB-5-2").style.display  = 'none';
                break;
                case '04':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-2").style.display  = 'none';
                  document.getElementById("showB-2-2").style.display  = 'none';
                  document.getElementById("showB-3-2").style.display  = 'none';
                  document.getElementById("showB-4-2").style.display  = '';
                  document.getElementById("showB-5-2").style.display  = 'none';
                break;
                case '05':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-2").style.display  = 'none';
                  document.getElementById("showB-2-2").style.display  = 'none';
                  document.getElementById("showB-3-2").style.display  = 'none';
                  document.getElementById("showB-4-2").style.display  = 'none';
                  document.getElementById("showB-5-2").style.display  = '';
                break;
                default:
              }
            });
          break;
          case '04':
            document.getElementById("showA").style.display  = 'none';
            document.getElementById("showA-1").style.display  = 'none';
            document.getElementById("showA-2").style.display  = 'none';
            document.getElementById("showA-3").style.display  = 'none';
            document.getElementById("showA-4").style.display  = '';
            document.getElementById("showA-5").style.display  = 'none';

            $('#category3').on('change', function(){
              switch($('#category3 option:selected').val()) {
                case '00':
                  document.getElementById("showB").style.display  = '';
                  document.getElementById("showB-1-3").style.display  = 'none';
                  document.getElementById("showB-2-3").style.display  = 'none';
                  document.getElementById("showB-3-3").style.display  = 'none';
                  document.getElementById("showB-4-3").style.display  = 'none';
                  document.getElementById("showB-5-3").style.display  = 'none';
                break;
                case '01':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-3").style.display  = '';
                  document.getElementById("showB-2-3").style.display  = 'none';
                  document.getElementById("showB-3-3").style.display  = 'none';
                  document.getElementById("showB-4-3").style.display  = 'none';
                  document.getElementById("showB-5-3").style.display  = 'none';
                break;
                case '02':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-3").style.display  = 'none';
                  document.getElementById("showB-2-3").style.display  = '';
                  document.getElementById("showB-3-3").style.display  = 'none';
                  document.getElementById("showB-4-3").style.display  = 'none';
                  document.getElementById("showB-5-3").style.display  = 'none';
                break;
                case '03':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-3").style.display  = 'none';
                  document.getElementById("showB-2-3").style.display  = 'none';
                  document.getElementById("showB-3-3").style.display  = '';
                  document.getElementById("showB-4-3").style.display  = 'none';
                  document.getElementById("showB-5-3").style.display  = 'none';
                break;
                case '04':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-3").style.display  = 'none';
                  document.getElementById("showB-2-3").style.display  = 'none';
                  document.getElementById("showB-3-3").style.display  = 'none';
                  document.getElementById("showB-4-3").style.display  = '';
                  document.getElementById("showB-5-3").style.display  = 'none';
                break;
                case '05':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-3").style.display  = 'none';
                  document.getElementById("showB-2-3").style.display  = 'none';
                  document.getElementById("showB-3-3").style.display  = 'none';
                  document.getElementById("showB-4-3").style.display  = 'none';
                  document.getElementById("showB-5-3").style.display  = '';
                break;
                default:
              }
            });
          break;
          case '05':
            document.getElementById("showA").style.display  = 'none';
            document.getElementById("showA-1").style.display  = 'none';
            document.getElementById("showA-2").style.display  = 'none';
            document.getElementById("showA-3").style.display  = 'none';
            document.getElementById("showA-4").style.display  = 'none';
            document.getElementById("showA-5").style.display  = '';

            $('#category4').on('change', function(){
              switch($('#category4 option:selected').val()) {
                case '00':
                  document.getElementById("showB").style.display  = '';
                  document.getElementById("showB-1-4").style.display  = 'none';
                  document.getElementById("showB-2-4").style.display  = 'none';
                  document.getElementById("showB-3-4").style.display  = 'none';
                  document.getElementById("showB-4-4").style.display  = 'none';
                break;
                case '01':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-4").style.display  = '';
                  document.getElementById("showB-2-4").style.display  = 'none';
                  document.getElementById("showB-3-4").style.display  = 'none';
                  document.getElementById("showB-4-4").style.display  = 'none';
                break;
                case '02':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-4").style.display  = 'none';
                  document.getElementById("showB-2-4").style.display  = '';
                  document.getElementById("showB-3-4").style.display  = 'none';
                  document.getElementById("showB-4-4").style.display  = 'none';
                break;
                case '03':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-4").style.display  = 'none';
                  document.getElementById("showB-2-4").style.display  = 'none';
                  document.getElementById("showB-3-4").style.display  = '';
                  document.getElementById("showB-4-4").style.display  = 'none';
                break;
                case '04':
                  document.getElementById("showB").style.display  = 'none';
                  document.getElementById("showB-1-4").style.display  = 'none';
                  document.getElementById("showB-2-4").style.display  = 'none';
                  document.getElementById("showB-3-4").style.display  = 'none';
                  document.getElementById("showB-4-4").style.display  = '';
                break;
                default:
              }
            });
          break;
          default:
      }
  });
});

function pay(){
  window.location.href = 'home.php';
  alert("Booked Successfully!");
};

$(function() {  
  $( "#datepick" ).datepicker();  
});  
$(function() {  
  $( "#datepick2" ).datepicker();  
});  

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
  var swiper = new Swiper(".brand-slider", {
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      450: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      991: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 5,
      },
    },
  });