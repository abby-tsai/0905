/**
 * Created by jerry on 13/01/2017.
 */
$(function() {

    var editor = new MediumEditor('.editable', {
        delay: 1000,
        targetBlank: true,
        toolbar: {
            buttons: ['bold', 'italic', 'underline', 'anchor', 'h2', 'h3', 'h4', 'quote', 'orderedlist', 'unorderedlist', 'removeFormat'],
            diffLeft: 0,
            diffTop: -10,
        },
        paste: {
            forcePlainText: false,
            cleanPastedHTML: true,
            cleanTags: ['label', 'meta'],
            unwrapTags: ['sub', 'sup']
        }
    });
});
