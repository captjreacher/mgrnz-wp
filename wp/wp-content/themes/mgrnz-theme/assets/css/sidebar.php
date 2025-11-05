<?php
/* Primary sidebar */
if ( ! is_active_sidebar( 'primary-sidebar' ) ) : ?>
  <aside class="sidebar" style="background:#0b0b0b;border:1px solid #1f1f1f;border-radius:16px;padding:1rem;color:#cfcfcf;">
    <h3 style="color:#fff;margin-top:0;">Sidebar</h3>
    <p>Add widgets in <strong>Appearance → Widgets</strong> to replace this placeholder.</p>
  </aside>
<?php else : ?>
  <aside class="sidebar" role="complementary">
    <?php dynamic_sidebar( 'primary-sidebar' ); ?>
  </aside>
<?php endif; ?>
