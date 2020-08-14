@section('style')
    <link rel="stylesheet" href="/backend/plugins/tag-editor/jquery.tag-editor.css">
@endsection

@section('script')
    <script src="/backend/plugins/tag-editor/jquery.caret.min.js"></script>
    <script src="/backend/plugins/tag-editor/jquery.tag-editor.min.js"></script>
    <script type="text/javascript">
      

  

        $('#name').on('blur', function() {
            var theName = this.value.toLowerCase().trim(),
                slugInput = $('#slug'),
                theSlug = theName.replace(/&/g, '-and-')
                                  .replace(/[^a-z0-9-]+/g, '-')
                                  .replace(/\-\-+/g, '-')
                                  .replace(/^-+|-+$/g, '');

            slugInput.val(theSlug);
        });
        

        var simplemde2 = new SimpleMDE({ element: $("#bio")[0] });

       

       
    </script>
@endsection
