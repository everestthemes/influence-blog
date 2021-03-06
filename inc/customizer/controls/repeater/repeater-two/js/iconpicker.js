! function (e) {
    "use strict";
    wp.customizerRepeater = {
        init: function () {
            e(".iconpicker-items>i").on("click", function () {
                var i = e(this).attr("class").slice(3),
                    t = e(this).parents(".iconpicker-popover").prev().find(".icp");
                t.val(i), t.attr("value", i);
                var n = t.next(".input-group-addon"),
                    c = '<i class="fa '.concat(i, '"></i>');
                n.empty(), n.append(c);
                var r = e(this).parent().parent().parent();
                return t.trigger("change"), customizer_repeater_two_refresh_social_icons(r), !1
            })
        },
        search: function (i) {
            var t = i.parent().next().find(".iconpicker-items"),
                n = i.val().toLowerCase();
            n.length > 0 ? t.children().each(function () {
                e(this).filter("[title*=".concat(n)).length > 0 || n.length < 1 ? e(this).show() : e(this).hide()
            }) : t.children().show()
        },
        iconPickerToggle: function (e) {
            e.parent().next().addClass("iconpicker-visible")
        }
    }, e(document).ready(function () {
        wp.customizerRepeater.init(), e(".iconpicker-search").on("keyup", function () {
            wp.customizerRepeater.search(e(this))
        }), e(".icp-auto").on("click", function () {
            wp.customizerRepeater.iconPickerToggle(e(this))
        }), e(document).mouseup(function (i) {
            var t = e(".iconpicker-popover");
            t.is(i.target) || 0 !== t.has(i.target).length || t.removeClass("iconpicker-visible")
        })
    })
}(jQuery);
