<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 **/
?>


<?php $view->component('start'); ?>
<h1>Login page</h1>

<form action="/login" method="post">
    <?php if ($session->has('error')) {?>
        <p style="color: darkred">
            <?php echo $session->get('error'); ?>
        </p>
    <?php } ?>
    <p>Email</p>
    <input type="text" name="email">
    <p>Password</p>
    <input type="password" name="password"><br><br>
    <button>Login</button>
</form>
<?php $view->component('end'); ?>

