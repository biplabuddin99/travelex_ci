<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Update User</h2>
  <?php if($this->session->flashdata('msg')){
    echo $this->session->flashdata('msg');
  } ?>
  <?= form_open() ?>
    <div class="mb-3 mt-3">
      <label for="name">Full Name:</label>
      <input type="text" value="<?= set_value('name',$user->name); ?>" class="form-control" id="name" name="name">
      <span class="text-danger"><?= form_error('name'); ?></span>
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" value="<?= set_value('email',$user->email); ?>" class="form-control" id="email" name="email">
      <span class="text-danger"><?= form_error('email'); ?></span>
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password">
      <span class="text-danger"><?= form_error('password'); ?></span>
    </div>
    <div class="mb-3">
      <label for="cpwd">Confirm Password:</label>
      <input type="password" class="form-control" id="cpwd" name="cpassword">
      <span class="text-danger"><?= form_error('cpassword'); ?></span>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
