<?php include('includes/header.php') ?>
  <main>
    <section class="block">
      <h2 class="block__header">Works</h2>
      <?php
        $path = 'img/gallery/';
        $dir = new DirectoryIterator($path);

        foreach($dir as $subDir) {
          if($subDir->isDot()) continue;
          echo '<h3>' . $subDir->getBaseName() . '</h3>';

          $files = new DirectoryIterator($path . $subDir->getBaseName());

          foreach($files as $fileInfo) {
            if($fileInfo->isDot()) continue;

            echo '<img src="' . $fileInfo->getPathName() . '" />';
          }
        }
      ?>
    </section>
  </main>
<?php include('includes/footer.php') ?>