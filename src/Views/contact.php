
<div class="w-25 mx-auto">
    <form action="contact" method ="POST">
    <div class="mb-3">
        <label for="firstname" class="form-label">Firstname</label>
        <input type="text" name="firstname" class="form-control" id="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Lastname</label>
        <input type="text" name="lastname" class="form-control" id="lastname">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Emailadress</label>
        <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Nachricht</label>
        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>  
  
<?php require __DIR__."../../../Components/Footer.php"; ?>
