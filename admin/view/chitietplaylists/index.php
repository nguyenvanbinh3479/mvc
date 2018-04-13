<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<div class="container">
    <div class="row">
        <h3>Danh sach playlist</h3>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>playlist</th>
            <th>baihat</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($list_playlist as $playlist) { ?>    
          <tr>
            <td><?php echo increment_once($index); ?></td>
            <td><?php echo $playlist->playlist_id; ?></td>
            <td><?php echo $playlist->baihat_id; ?></td>
            <td><a href="admin.php?c=playlist&a=edit&id=<?php echo $playlist->playlist_id; ?>">Edit</a></td>
            <td><a href="admin.php?c=playlist&a=delete&id=<?php echo $playlist->playlist_id; ?>">Delete</a></td>
          </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>