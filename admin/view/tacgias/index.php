<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
    <div class="row">
        <h3>Danh sach tacgia</h3>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>ten</th>
            <th>thong_tin</th>
            <th>anh</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($list_tacgia as $tacgia) { ?>
          <tr>
            <td><?php echo increment_once($index); ?></td>
            <td><?php echo $tacgia->ten; ?></td>
            <td><?php echo $tacgia->thongtin; ?></td>
            <td><?php echo $tacgia->anh; ?></td>
            <td><a href="admin.php?c=tacgia&a=edit&id=<?php echo $tacgia->id; ?>">Edit</a></td>
            <td><a href="admin.php?c=tacgia&a=delete&id=<?php echo $tacgia->id; ?>">Delete</a></td>
          </tr>
        <?php } ?>
        </tbody>
    </table>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>
