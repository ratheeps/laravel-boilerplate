'use strict';

CKEDITOR.dialog.add( 'emailtemplate', function( editor ) {
    var generalLabel = editor.lang.common.generalTab,
        validNameRegex = /^[^\[\]<>]+$/;

    return {
        title: 'Update Email Template Link Text',
        minWidth: 300,
        minHeight: 80,
        contents: [
            {
                id: 'info',
                label: generalLabel,
                title: 'Link Text',
                elements: [
                    {
                        id: 'name',
                        type: 'text',
                        style: 'width: 100%;',
                        'default': '',
                        label: 'Link Text',
                        required: true,
                        validate: CKEDITOR.dialog.validate.regex( validNameRegex ),
                        setup: function( widget ) {
                            var $element = $(widget.element);
                            this.setValue( $element.attr('data-id'));
                        },
                        commit: function( widget ) {
                            var value = this.getValue();
                            var $element = $(widget.element);
                            $element.attr('data-id', value);
                        }
                    }
                ]
            }
        ]
    };
} );