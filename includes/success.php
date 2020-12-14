<?php if (!empty($_SESSION['success_msg'])) { ?>
<div class="alert alert-success">
  <li>
    <?php echo $_SESSION['success_msg']; ?>
  </li>
</div>
<?php 
}
unset($_SESSION['success_msg']);
?>