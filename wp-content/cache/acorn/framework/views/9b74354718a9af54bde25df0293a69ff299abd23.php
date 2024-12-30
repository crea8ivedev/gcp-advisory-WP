<?php
    // Get the categories of the current post
    $categories = get_the_category();

    // Check if there are categories and get the first one
    $category = !empty($categories) ? $categories[0] : null;
?>
<ul class="blog-data !flex items-center justify-between lg:justify-center gap-[20px] lg:gap-[40px] list-none py-20 1023:flex-col !pl-0">
    <li class="!list-none flex items-center gap-[10px]">
    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5 4C5 2.93913 5.42143 1.92172 6.17157 1.17157C6.92172 0.421427 7.93913 0 9 0C10.0609 0 11.0783 0.421427 11.8284 1.17157C12.5786 1.92172 13 2.93913 13 4C13 5.06087 12.5786 6.07828 11.8284 6.82843C11.0783 7.57857 10.0609 8 9 8C7.93913 8 6.92172 7.57857 6.17157 6.82843C5.42143 6.07828 5 5.06087 5 4ZM5 10C3.67392 10 2.40215 10.5268 1.46447 11.4645C0.526784 12.4021 0 13.6739 0 15C0 15.7956 0.316071 16.5587 0.87868 17.1213C1.44129 17.6839 2.20435 18 3 18H15C15.7956 18 16.5587 17.6839 17.1213 17.1213C17.6839 16.5587 18 15.7956 18 15C18 13.6739 17.4732 12.4021 16.5355 11.4645C15.5979 10.5268 14.3261 10 13 10H5Z" fill="#4E6F52"/>
</svg>
    <a href="<?php echo e(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="p-author h-card">
      <?php echo e(get_the_author()); ?>

    </a>

    </li>
    <li class="!list-none flex items-center gap-[10px]">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 7C0 5.114 -5.96046e-08 4.172 0.586 3.586C1.172 3 2.114 3 4 3H16C17.886 3 18.828 3 19.414 3.586C20 4.172 20 5.114 20 7C20 7.471 20 7.707 19.854 7.854C19.707 8 19.47 8 19 8H1C0.529 8 0.293 8 0.146 7.854C-8.9407e-08 7.707 0 7.47 0 7ZM0 16C0 17.886 -5.96046e-08 18.828 0.586 19.414C1.172 20 2.114 20 4 20H16C17.886 20 18.828 20 19.414 19.414C20 18.828 20 17.886 20 16V11C20 10.529 20 10.293 19.854 10.146C19.707 10 19.47 10 19 10H1C0.529 10 0.293 10 0.146 10.146C-8.9407e-08 10.293 0 10.53 0 11V16Z" fill="#4E6F52"/>
<path d="M5 1V4M15 1V4" stroke="#4E6F52" stroke-width="2" stroke-linecap="round"/>
</svg>

  <time class="dt-published" datetime="<?php echo e(get_post_time('c', true)); ?>"><a>
    <?php echo e(get_the_date()); ?></a>
  </time>
    <li class="!list-none flex items-center gap-[10px]">
    <?php if($category): ?>
    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M14 0C12.9391 0 11.9217 0.421427 11.1716 1.17157C10.4214 1.92172 10 2.93913 10 4C10 5.06087 10.4214 6.07828 11.1716 6.82843C11.9217 7.57857 12.9391 8 14 8C15.0609 8 16.0783 7.57857 16.8284 6.82843C17.5786 6.07828 18 5.06087 18 4C18 2.93913 17.5786 1.92172 16.8284 1.17157C16.0783 0.421427 15.0609 0 14 0ZM0 14C0 12.9391 0.421427 11.9217 1.17157 11.1716C1.92172 10.4214 2.93913 10 4 10C5.06087 10 6.07828 10.4214 6.82843 11.1716C7.57857 11.9217 8 12.9391 8 14C8 15.0609 7.57857 16.0783 6.82843 16.8284C6.07828 17.5786 5.06087 18 4 18C2.93913 18 1.92172 17.5786 1.17157 16.8284C0.421427 16.0783 0 15.0609 0 14ZM10 11C10 10.7348 10.1054 10.4804 10.2929 10.2929C10.4804 10.1054 10.7348 10 11 10H17C17.2652 10 17.5196 10.1054 17.7071 10.2929C17.8946 10.4804 18 10.7348 18 11V16C18 16.5304 17.7893 17.0391 17.4142 17.4142C17.0391 17.7893 16.5304 18 16 18H12C11.4696 18 10.9609 17.7893 10.5858 17.4142C10.2107 17.0391 10 16.5304 10 16V11ZM0 1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H7C7.26522 0 7.51957 0.105357 7.70711 0.292893C7.89464 0.48043 8 0.734784 8 1V6C8 6.53043 7.78929 7.03914 7.41421 7.41421C7.03914 7.78929 6.53043 8 6 8H2C1.46957 8 0.960859 7.78929 0.585786 7.41421C0.210714 7.03914 0 6.53043 0 6V1Z" fill="#4E6F52"/>
</svg>

          <a href="<?php echo e(esc_url(get_category_link($category->term_id))); ?>"><?php echo e(esc_html($category->name)); ?></a></li>
    <?php endif; ?>
</ul>

<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/entry-meta.blade.php ENDPATH**/ ?>