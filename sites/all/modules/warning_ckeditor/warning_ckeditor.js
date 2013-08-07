/**
 * Created with JetBrains PhpStorm.
 * User: KiSS-OS-2
 * Date: 7/30/13
 * Time: 3:39 PM
 * To change this template use File | Settings | File Templates.
 */

// Place your code here.
// If changes not saved, prompt user


jQuery(document).ready(function(){

    for(var i in CKEDITOR.instances) {
        CKEDITOR.instances[CKEDITOR.instances[i].name].on("instanceReady", function(){
            this.document.on("keyup", function(){
                windowEvent();
            });
        });
    }

    // for submit buttons
    jQuery('input[type=submit]').click(function(e){
        jQuery(window).unbind('beforeunload');
    });

});

var callOnce = false;
function windowEvent(){
    if(!callOnce){
        callOnce = true;
        jQuery(window).bind('beforeunload',function(){
            return "WARNING: You have unsaved changes. You will lose your changes if you leave the page.";
        });
    }
}
