<div class="wp_invoice_lookup">
  <form action="<?php echo get_permalink($wpi_settings['web_invoice_page']); ?>" method="POST">
  <div for="wp_invoice_lookup_input"><?php echo $message; ?></div>
  <?php echo WPI_UI::input("name=wp_invoice_lookup_input&autocomplete=off")?>
  <input type="submit" value="<?php echo $button; ?>" class="wp_invoice_lookup_submit" />
  </form>
</div>