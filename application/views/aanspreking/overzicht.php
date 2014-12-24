<table class="table">
    <?php foreach($aansprekingen as $aanspreking){
        echo "<tr><td><input type=\"text\" class=\"wijzig\" data-id= " . $aanspreking->id . "\" value=\"" . $aanspreking->naam . "\"/></td><td>" . '<button data-id="' . $aanspreking->id . '" type="button" class="verwijder btn btn-default btn-lg">
  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Verwijderen</button></td></tr>'; 
    } ?>
</table>