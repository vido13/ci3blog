<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Postend on: <?php echo $post['created_at']; ?></small>
<img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" class="post-thumb" alt="">
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>
<a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class="btn btn-default pull-left">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
    <input type="submit" value="delete" class="btn btn-danger">
</form>
