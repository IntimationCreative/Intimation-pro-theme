<div class="container">
    <div class="row">
        <?php foreach ( $row['pick_a_module'] as $module ) : ?>
            <div class="col-sm-12">
                <?php include( locate_template( 'template-parts/modules/' . $module['acf_fc_layout'] . '.php' ) ); ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>