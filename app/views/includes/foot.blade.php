   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="../bootstrap/js/image-picker.min.js"></script>
    <script src="../bootstrap/js/image-picker.js"></script>
  
    
   
    

    // <!-- Stack Effects -->

    <script src="../stackeffects/js/classie.js"></script>
    <script src="../stackeffects/js/main.js"></script>


<!-- Latest compiled and minified JavaScript -->
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    

    <!-- Slide Toggle Effect -->
    <script>
        $( "#meatHeader" ).click(function() {
          $( "#meats" ).slideToggle( "fast" );
        });
    </script>

    <script>
        $( "#toppingsHeader" ).click(function() {
          $( "#toppings" ).slideToggle( "fast" );
        });
    </script>

     <script>
        $( "#baseHeader" ).click(function() {
          $( "#base" ).slideToggle( "fast" );
        });
    </script>

    <script>
        $( "#cheeseHeader" ).click(function() {
          $( "#cheese" ).slideToggle( "fast" );
        });
    </script>

    <script>
        $( "#chiliHeader" ).click(function() {
          $( "#chili" ).slideToggle( "fast" );
        });
    </script>

    <script>
        $( "#sauceHeader" ).click(function() {
          $( "#sauce" ).slideToggle( "fast" );
        });
    </script>

    <script>
        $( "#meatHeader2" ).click(function() {
          $( "#meats2" ).slideToggle( "fast" );
        });
    </script>

    <script>
        $( "#toppingsHeader2" ).click(function() {
          $( "#toppings2" ).slideToggle( "fast" );
        });
    </script>

     <script>
        $( "#baseHeader2" ).click(function() {
          $( "#base2" ).slideToggle( "fast" );
        });
    </script>

    <script>
        $( "#cheeseHeader2" ).click(function() {
          $( "#cheese2" ).slideToggle( "fast" );
        });
    </script>

    <script>
        $( "#chiliHeader2" ).click(function() {
          $( "#chili2" ).slideToggle( "fast" );
        });
    </script>

    <script>
        $( "#sauceHeader2" ).click(function() {
          $( "#sauce2" ).slideToggle( "fast" );
        });
    </script>


    <!-- Hide/Show Scripts -->
      <!-- For Delivery Mode -->
      <script>
          $(document).ready(function(){
              $('#mode').on('change', function() {
                if ( this.value == '0')
                {
                  $("#delivery").show();
                  $("#pickup").hide();
                }
                else
                {
                  $("#delivery").hide();
                  $("#pickup").show();
                }
              });
          });
      </script>

      <!-- For Pizza Size -->
       <script>
          $(document).ready(function(){
              $('#size').on('change', function() {
                if ( this.value == 'solo')
                {
                  $("#solo").show();
                  $("#large").hide();
                }
                else
                {
                  $("#solo").hide();
                  $("#large").show();
                }
              });
          });
      </script>


  <!-- For Menu Labels -->
   <script>
     $(function() {
      $("input#meat").change(function() {
        var arr = $(":checkbox[id=meat]:checked").map(function() { return $(this).next().text(); }).get();
        $("#meatDiv").text(arr.join(','));
      });
    });
   </script>

    <script>
     $(function() {
      $("input#base").change(function() {
        var arr = $(":radio[name=base]:checked").map(function() { return $(this).next().text(); }).get();
        $("#baseDiv").text(arr.join(','));
      });
    });
   </script>

   <script>
     $(function() {
      $("input#cheese").change(function() {
        var arr = $(":radio[name=cheese]:checked").map(function() { return $(this).next().text(); }).get();
        $("#cheeseDiv").text(arr.join(','));
      });
    });
   </script>

   <script>
     $(function() {
      $("input#chili").change(function() {
        var arr = $(":checkbox[id=chili]:checked").map(function() { return $(this).next().text(); }).get();
        $("#chiliDiv").text(arr.join(','));
      });
    });
   </script>

   <script>
     $(function() {
      $("input#topping").change(function() {
        var arr = $(":checkbox[id=topping]:checked").map(function() { return $(this).next().text(); }).get();
        $("#toppingDiv").text(arr.join(','));
      });
    });
   </script>

    <script>
     $(function() {
      $("input#sauce").change(function() {
        var arr = $(":radio[id=sauce]:checked").map(function() { return $(this).next().text(); }).get();
        $("#sauceDiv").text(arr.join(','));
      });
    });
   </script>

 

    