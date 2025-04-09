<?php include('includes/header.php') ?>
  <main>
    <section class="block">
      <h2 class="block__header">Works</h2>
      <h3>2025</h3>
      <?php
        $path = 'img/2025/';
        $dir = new DirectoryIterator($path);
        foreach ($dir as $fileInfo) {
            if(!$fileInfo->isDot()) {
                echo '<img src="' . $path . $fileInfo->getFilename() . '" />';
            }
        }
      ?>
      <h3>2024</h3>
      <?php
        $path = 'img/2024/';
        $dir = new DirectoryIterator($path);
        foreach ($dir as $fileInfo) {
            if(!$fileInfo->isDot()) {
                echo '<img src="' . $path . $fileInfo->getFilename() . '" />';
            }
        }
      ?>
    </section>
  </main>
<?php include('includes/footer.php') ?>