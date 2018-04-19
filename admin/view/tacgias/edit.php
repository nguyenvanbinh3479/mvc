<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<div id="wrapper">
  <div class="container">
      <form method="post" action="admin.php">
      <input type="hidden" name="id" value="<?php echo $tacgia->id; ?>">
      <input type="hidden" name="c" value="tacgia">
      <input type="hidden" name="a" value="update">
      <div class="row">
        <h2>Edit tacgia</h2>
      </div>
      <div class="row">
        <label>ten:</label>
      </div>
      <div class="row">
        <input type="text" class="form-control p-2 m-2" name="ten" value="<?php echo $tacgia->ten; ?>">
      </div>
      <div class="row">
        <label>thong tin:</label>
      </div>
      <div class="row">
        <input type="text" class="form-control p-2 m-2" name="thong_tin" value="<?php echo $thongtin->thong_tin; ?>">
      </div>
    <div class="row">
        <label>anh:</label>
      </div>
      <div class="row">
        <input type="text" class="form-control p-2 m-2" name="anh" value="<?php echo $tacgia->anh; ?>">
      </div>
      <div class="row">
        <button class="btn btn-primary p-2 m-2" type="submit">Apply</button>
      </div>
      </form>
  </div>
</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>
