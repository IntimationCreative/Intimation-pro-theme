<div class="container <?php echo $row['class']; ?>">
    <div class="row">
        <?php foreach ( $row['pick_a_module'] as $module ) : ?>
            <div class="col-sm-2">
                <?php include( locate_template( 'templates/modules/' . $module['acf_fc_layout'] . '.php' ) ); ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>