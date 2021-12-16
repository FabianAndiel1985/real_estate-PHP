<p>Hi im the team view</p>

<!-- TODO: display the team data in a beautiful way -->

<?php foreach($params as $teammember): ?>
  <p> 
      <?php echo $teammember->firstname ?> 
  </p>

<?php
endforeach;
?>

<button>
  <a href="login" >
    Save the employees in a file
  </a>
</button>



<?php require __DIR__."../../../Components/Footer.php"; ?>
