CKEDITOR.plugins.add( 'emailtemplate', {
    requires: 'widget',
    init: function( editor ) {
        var pluginDirectory = this.path;
        editor.addContentsCss( pluginDirectory + 'styles/main.css' );
        // CKEDITOR.dialog.add( 'emailtemplate', this.path + 'dialogs/emailtemplate.js' );

        editor.widgets.add( 'emailtemplate', {
            // dialog: 'emailtemplate',
            allowedContent: 'code(!code);',
            requiredContent: 'code(code)',
            upcast: function( element ) {
                return element.name == 'code' && element.hasClass( 'code' );
            }
        } );
    }
} );