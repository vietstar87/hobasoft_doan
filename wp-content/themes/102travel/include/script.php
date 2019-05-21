<a href="#top" data-offset="300" class="btn btn-default btn--to-top to-top"><i class="fa fa-arrow-up"></i></a>
<?php wp_footer() ?>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/base-3.7.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/app-9.5.8.min.js"></script>
<script>
    var activeInput = function () {
            $("#category_sidebar input").click(function () {
                let active = $(this).parent().hasClass('active');
                if (active == false) {
                    $(this).parent().addClass('active');
                    $(this).attr('checked', true);
                } else {
                    $(this).parent().removeClass('active');
                    $(this).attr('checked', false);
                }

                $('#filter_search').submit();
            })
        };
        var getIDActiveDanhMuc = function() {
            return $('#category_sidebar li a.active').data('taxonomy-id');
        };
        var sendForm = function () {
            var id_danh_muc = getIDActiveDanhMuc();
            var input = $("<input>")
                .attr("type", "hidden")
                .attr("name", "danh_muc").val(id_danh_muc);
            $('#filter_search').append(input);
        };


    function main() {
        activeInput()
        sendForm();
    }

    main();



</script>