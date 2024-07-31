<div class="parent-block">
    <InnerBlocks />
</div>

<script>
    (function (blocks, editor, element) {
    var el = element.createElement;
    var InnerBlocks = editor.InnerBlocks;

    blocks.registerBlockType('acf/parent-block', {
        edit: function () {
            return el(
                'div',
                { className: 'parent-block' },
                el(InnerBlocks, {
                    allowedBlocks: ['core/paragraph', 'core/image'], // You can specify which blocks are allowed
                    template: [
                        ['core/paragraph', { placeholder: 'Enter text...' }],
                        ['core/image']
                    ]
                })
            );
        },
        save: function () {
            return el(
                'div',
                { className: 'parent-block' },
                el(InnerBlocks.Content)
            );
        }
    });
}(
    window.wp.blocks,
    window.wp.blockEditor || window.wp.editor,
    window.wp.element
));

</script>