<dl>
  <?php foreach($rows as $row): ?>
    <dt><?php print $row['field_menu_section_title']; ?></dt>
    <dd><?php print $row['field_menu_item']; ?></dd>
    <dd><?php print $row['field_menu_style']; ?></dd>
  <?php endforeach; ?>
</dl>