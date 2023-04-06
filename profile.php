<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:logout.php');
}
include('./template/navbar.php');
require_once('./app/controller/profileController.php');
use App\Controller\ProfileController;

$profile = new ProfileController();

$exist = $profile->findProfileByUserId($_SESSION['id']);


?>



<div class="row">
    <div class=col-md-6>
        <h1>Welcome user xxx </h1>
    </div>

    <div class=col-md-6>
        <?php if ($exist): ?>

            <button class="btn btn-primary">Edit profile</button>
        <?php endif ?>
        <?php if (!$exist): ?>

            <button class="btn btn-success">create profile</button>
        <?php endif ?>
    </div>


</div>

<?php include('./template/footer.php'); ?>