<script type="text/javascript">
    function updateInsert(id,naam){
        $.ajax({type: "GET",
            url: site_url + "/aanspreking/update",
            async: false,
            data : { id : id , naam : naam },
            success : function(result){
            haaloverzicht();
            }
            });
    }
    
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
    function maakUpdateClick(){
        var veranderdeObjecten = [];
        $('.wijzig').change(function(){
            veranderdeObjecten.push($(this));
        });        
        $('#wijzigen').click(function(e){
            e.preventDefault();
            $.each(veranderdeObjecten,function(){
                if ($(this).val() == ''){
                    
                }else {
                    
                    updateInsert($(this).data("id"),$(this).val());
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
                    maakUpdateClick();
                }
        });
    }
    $(function() {
       haaloverzicht(); 
       
       $('#toevoegen').click(function(){
           $( "#dialog-toevoegen" ).dialog("open");
       });
       
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
        
        $( "#dialog-toevoegen" ).dialog({
            autoOpen: false,
            resizable: false,
            height:200,
            modal: true,
            buttons: {
                "Toevoegen": function() {
                    if ($('#toetevoegen').val() == ''){
                        $('.toevoegenform').addClass('has-error');
                    }else {
                        updateInsert(0,$('#toetevoegen').val());
                        $('.toevoegenform').removeClass('has-error');
                        $('#toetevoegen').val("");
                        haaloverzicht();                        
                    }              
                    
                },
                "Klaar met toevoegen": function() {
                    $( this ).dialog( "close" );
                }
            }
        });
              
});
</script>
<div class="row">
<h1>Aansprekingen beheren</h1>
<div class="col-md-8">
<div id="resultaat"></div>
</div>
</div>
<div class="row">
<p><button type="button" id="toevoegen" class="btn btn-success">Aanspreking toevoegen</button> <button type="button" id="wijzigen" class="btn btn-primary">Wijzigen</button></p>
</div>
<div id="dialog-delete-fout" title="Fout">
	<p>
            <span>Je kan deze aanspreking niet verwijderen.<br />Er zijn nog gebruikers aan gekoppeld.</span>
        </p>        
</div>

<div id="dialog-toevoegen" title="Toevoegen">
	<div class="form-group toevoegenform">
            <label for="toevoegen" class="control-label">Aanspreking:</label><input class="form-control" type="text" id="toetevoegen" />
        </div>
</div>