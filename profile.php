<?php 
session_start();
if(!isset($_SESSION['user']))
{
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
    <?=var_dump($exist)?>
</div>

<div class=col-md-6>
    <button class="btn btn-primary">create profile</button>
</div>


</div>

<?php include('./template/footer.php'); ?>