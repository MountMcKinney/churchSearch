<h2><?php echo $title; ?></h2>

<?php foreach ($church as $church_item): ?>

        <h3><?php echo $church_item['title']; ?></h3>
        <div class="main">
                <?php echo $church_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('church/'.$church_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>
