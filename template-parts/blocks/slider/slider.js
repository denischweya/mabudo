(function (blocks, editor) {
    var el = wp.element.createElement;
    var InnerBlocks = editor.InnerBlocks;

    blocks.registerBlockType('acf/slider', {
        edit: function () {
            return el(
                'div',
                { className: 'slider' },
                el(InnerBlocks)
            );
        },
        save: function () {
            return el(
                'div',
                { className: 'slider' },
                el(InnerBlocks.Content)
            );
        }
    });
}(
    window.wp.blocks,
    window.wp.blockEditor || window.wp.editor
));
