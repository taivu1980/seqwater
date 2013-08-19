<?php

    // split the username and password so we can put the form links were we want (they are in the "user-login-links" div bellow)
    print drupal_render($form['name']);
    print drupal_render($form['pass']);

    // render login button
    print drupal_render($form['form_build_id']);
    print drupal_render($form['form_id']);
    print drupal_render($form['actions']);

?>