<?php include('includes/header.php') ?>
  <main>
    <section class="block">
      <h2 class="block__header">Works</h2>
      <section class="gallery">
        <?php
          $path = 'img/gallery/';
          $dir = new DirectoryIterator($path);

          foreach($dir as $subDir) {
            if($subDir->isDot()) continue;
            echo '<h3 class="gallery__header">' . $subDir->getBaseName() . '</h3>';

            $files = new DirectoryIterator($path . $subDir->getBaseName());

            foreach($files as $fileInfo) {
              if($fileInfo->isDot()) continue;

              echo '<img class="gallery__picture" src="' . $fileInfo->getPathName() . '" />';
            }
          }
        ?>
      </section>
    </section>
  </main>
<?php include('includes/footer.php') ?>