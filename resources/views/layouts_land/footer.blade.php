
<script type="text/javascript">

    $(document).ready(function(){
        $('.hamburger').click(function(){
            $('.hamburger').toggleClass('active')
        })
    })

</script>

<script>
    $(function(){
        var day = $("#day");
        $("#month").change(function(){
            if(($(this).val() == "4") || ($(this).val() == "6") || ($(this).val() == "9") || ($(this).val()== "11")){
                // alert("Got it")
                day.find('option[value="31"]').prop("disabled", true);
                day.find('option[value="30"]').prop("disabled", false);
            }
            else if($(this).val() == "2"){
                day.find('option[value="31"]').prop("disabled", true);
                day.find('option[value="30"]').prop("disabled", true);
            }

            else{
                day.find('option[value="31"]').prop("disabled", false)
                day.find('option[value="30"]').prop("disabled", false);
            }
        })
    })
</script>