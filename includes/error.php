<?php if (!empty($_SESSION['error_msg'])) { ?>
<div class="alert alert-danger">
  <li>
    <?php echo $_SESSION['error_msg']; ?>
  </li>
</div>
<?php 
}
unset($_SESSION['error_msg']);
?>