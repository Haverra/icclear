<?php
$this->load->helper('form');
?>

<h4><?php echo $title; ?></h4>



<h4><?php echo $naam; ?></h4>
<?php
   
    echo form_open('gebruiker/login');
?>
<table>
    <tr>
        <td><?php echo form_label('Gebruikersnaam:', 'gebruikersnaam'); ?></td>
        <td><?php echo form_input(array('name' => 'email', 'id' => 'email', 'size' => '30')); ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Wachtwoord:', 'password'); ?></td>
        <td><?php 
                $data = array('name' => 'password', 'id' => 'password', 'size' => '30');
                echo form_password($data);
            ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo form_submit('mysubmit', 'Submit'); ?></td>
    </tr>
</table>

<?php echo form_close(); ?>

<p><?php echo anchor('home/forgetpassword', 'wachtwoord vergeten'); ?></p>
<p><?php echo anchor('home/register', 'Registreren'); ?></p>
