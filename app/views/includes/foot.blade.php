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
    <script>
    $("select").imagepicker({
        show_label  : false
    })
    </script>

    
    <!-- Slider Toggle -->
    <script> 
    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideToggle("slow");
        });
    });
    </script>


    <script>
    $('.selectpicker').selectpicker({
      width: '270px',
      style: 'btn btn-xs btn-default'
      });    
    </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../bootstrap/js/core.js"></script>
    
    <!-- Script for dropdown list  -->
    <script>
        function createByJson() {
            var jsonData = [                    
                            {value:'', text:'Choose your Meat:'},                   
                            {image:'../images/menucon/pepperoni.png', value:'amex', text:'Pepperoni'},
                            {image:'../images/menucon/ham.png', value:'Discover', text:'Ham'},
                            {image:'../images/menucon/bacon.png', value:'Mastercard', text:'Bacon'},
                            {image:'../images/menucon/sausage.png', value:'amex', text:'Hungarian Sausage'},
                            {image:'../images/menucon/hotdog.png', value:'Discover', text:'Hotdog'},
                            {image:'../images/menucon/bacon.png', value:'Mastercard', text:'Bacon'}
                            ];
            $("#byjson").msDropDown({byJson:{data:jsonData, name:'payments2'}}).data("dd");
        }
        $(document).ready(function(e) {     
            //no use
            try {
                var pages = $("#pages").msDropdown({on:{change:function(data, ui) {
                                                        var val = data.value;
                                                        if(val!="")
                                                            window.location = val;
                                                    }}}).data("dd");

                var pagename = document.location.pathname.toString();
                pagename = pagename.split("/");
                pages.setIndexByValue(pagename[pagename.length-1]);
                $("#ver").html(msBeautify.version.msDropdown);
            } catch(e) {
                //console.log(e);   
            }
            
            $("#ver").html(msBeautify.version.msDropdown);
                
            //convert
            $("select").msDropdown({roundedBorder:false});
            createByJson();
            $("#tech").data("dd");
        });
        function showValue(h) {
            console.log(h.name, h.value);
        }
        $("#tech").change(function() {
            console.log("by jquery: ", this.value);
        })
//
</script>



<!-- Latest compiled and minified JavaScript -->
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
