{!! HTML::script('vendor/simplemde/dist/simplemde.min.js') !!}
{!! HTML::style('vendor/simplemde/dist/simplemde.min.css') !!}



<script>
    $(function() {


        try {
            $('.geocomplete').geocomplete({
                    details: "form.gf",
                    types: ["geocode", "establishment"]
                }).bind("geocode:result", function(event, result) {
                    console.log(result);
            }, 1000);

        } catch (e) {
            console.log(e);
        }

        var simplemde = new SimpleMDE({
            element: $(".ediatble")[0],
            spellChecker: false,
            status: false
        });
        $('.hasDatepicker').DateTimePicker({
            dateTimeFormat: window.Attendize.DateTimeFormat
        });

    });
</script>
<style>
    .editor-toolbar {
        border-radius: 0 !important;
    }
    .CodeMirror, .CodeMirror-scroll {
        min-height: 100px !important;
    }

    .create_organiser, .address-manual {
        padding: 10px;
        border: 1px solid #ddd;
        margin-top: 10px;
        margin-bottom: 10px;
        background-color: #FAFAFA;
    }

    .in-form-link {
        display: block; padding: 5px;margin-bottom: 5px;padding-left: 0;
    }
</style>