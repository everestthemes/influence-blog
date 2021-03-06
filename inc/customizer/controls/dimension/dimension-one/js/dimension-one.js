wp.customize.controlConstructor["dimension-one"] = wp.customize.Control.extend({
    ready: function () {
        "use strict";
        var t = this;
        t.container.on("change keyup paste", ".dimension-desktop_top", function () {
            t.settings.desktop_top.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".dimension-desktop_right", function () {
            t.settings.desktop_right.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".dimension-desktop_bottom", function () {
            t.settings.desktop_bottom.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".dimension-desktop_left", function () {
            t.settings.desktop_left.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".dimension-tablet_top", function () {
            t.settings.tablet_top.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".dimension-tablet_right", function () {
            t.settings.tablet_right.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".dimension-tablet_bottom", function () {
            t.settings.tablet_bottom.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".dimension-tablet_left", function () {
            t.settings.tablet_left.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".dimension-mobile_top", function () {
            t.settings.mobile_top.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".dimension-mobile_right", function () {
            t.settings.mobile_right.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".dimension-mobile_bottom", function () {
            t.settings.mobile_bottom.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".dimension-mobile_left", function () {
            t.settings.mobile_left.set(jQuery(this).val())
        })
    }
}), jQuery(document).ready(function (i) {
    i(".dimension-one-linked").on("click", function () {
        var t = i(this);
        t.parent().parent(".dimension-wrap").prevAll().slice(0, 4).find("input").removeClass("linked").attr("data-element", ""), t.parent(".link-dimensions").removeClass("unlinked")
    }), i(".dimension-one-unlinked").on("click", function () {
        var t = i(this),
            e = t.data("element");
        t.parent().parent(".dimension-wrap").prevAll().slice(0, 4).find("input").addClass("linked").attr("data-element", e), t.parent(".link-dimensions").addClass("unlinked")
    }), i(".dimension-wrap").on("input", ".linked", function () {
        var t = i(this).attr("data-element"),
            n = i(this).val();
        i('.linked[ data-element="' + t + '" ]').each(function (t, e) {
            i(this).val(n).change()
        })
    })
});
