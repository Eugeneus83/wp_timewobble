<form id="timewobble-form-settings" method="POST" action="options.php">
    <?php
    settings_fields('timewobble-settings');
    do_settings_sections('timewobble-settings');
    settings_errors('timewobble_settings');

    $gmap_api_key = get_option('gmap_api_key', null);

    ?>
    <div class="key-block mt-5">

        <div>Set up the plugin</div>

        <div class="m-auto my-4 text-center" style="max-width: 500px;width: 100%">
            <p>Paste Google Map Api Key here</p>
            <div class="ui input w-100">
                <input type="text" name="gmap_api_key" class="text-truncate" style="width: 400px"
                       value="<?php echo $gmap_api_key ?>"
                       placeholder="XXXXXXXXXXXXXXXX"
                >
            </div>

            <div class="my-4">
                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-custom" value="Save">
            </div>

        </div>

    </div>

</form>

<?php

wp_enqueue_style('timewobble-style', plugins_url('../widget/css/style.css?version=' . HELPDESK_PLUGIN_VERSION,__FILE__) );
wp_enqueue_style('time_wobble-bootstrap', plugins_url('../widget/css/bootstrap.min.css?version=' . TIMEWOBBLE_PLUGIN_VERSION, __FILE__));

?>