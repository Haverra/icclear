<script type="text/javascript">
    function maakDeleteClick() {
        $('.verwijder').click(function(e){
        e.preventDefault();        
        $.ajax({type: "GET",
            url: site_url + "/aanspreking/delete",
            async: false,
            data : { id : $(this).data("id") },
            success : function(result){
            if (result == '0') {               
            $( "#dialog-delete-fout" ).dialog( "open" );            
            } else {                
            haaloverzicht();           
            }
            }
            });
    });     
    }
    function haaloverzicht () {
        $.ajax({type : "GET",
                url : site_url + "/aanspreking/overzicht",                
                success : function(result){
                    $("#resultaat").html(result);
                    maakDeleteClick();
                }
        });
    }
    $(function() {
       haaloverzicht();   
    $( "#dialog-delete-fout" ).dialog({
            autoOpen: false,
            resizable: false,
            width: 400,
            height: 200,
            modal: true,
            buttons: {
                "OK": function() {
                    $( this ).dialog( "close" );
                }
            }
        });        
              
});
</script>
<h1>Aansprekingen beheren</h1>
<div id="resultaat"></div>
<div id="dialog-delete-fout" title="Fout">
	<p>
            <span>Je kan dit product niet verwijderen.<br />Aan dit product zijn nog bestellijnen gekoppeld.</span>
        </p>        
</div>