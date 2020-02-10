wp.customize.controlConstructor["box-shadow-one"] = wp.customize.Control.extend({
    ready: function () {
        "use strict";
        var t = this;
        t.container.on("change keyup paste", ".box-shadow-one-desktop_top", function () {
            t.settings.desktop_top.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".box-shadow-one-desktop_right", function () {
            t.settings.desktop_right.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".box-shadow-one-desktop_bottom", function () {
            t.settings.desktop_bottom.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".box-shadow-one-desktop_left", function () {
            t.settings.desktop_left.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".box-shadow-one-tablet_top", function () {
            t.settings.tablet_top.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".box-shadow-one-tablet_right", function () {
            t.settings.tablet_right.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".box-shadow-one-tablet_bottom", function () {
            t.settings.tablet_bottom.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".box-shadow-one-tablet_left", function () {
            t.settings.tablet_left.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".box-shadow-one-mobile_top", function () {
            t.settings.mobile_top.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".box-shadow-one-mobile_right", function () {
            t.settings.mobile_right.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".box-shadow-one-mobile_bottom", function () {
            t.settings.mobile_bottom.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".box-shadow-one-mobile_left", function () {
            t.settings.mobile_left.set(jQuery(this).val())
        })
    }
}), jQuery(document).ready(function (i) {
    i(".box-shadow-one-linked").on("click", function () {
        var t = i(this);
        t.parent().parent(".box-shadow-one-wrap").prevAll().slice(0, 4).find("input").removeClass("linked").attr("data-element", ""), t.parent(".link-box-shadow-one").removeClass("unlinked")
    }), i(".box-shadow-one-unlinked").on("click", function () {
        var t = i(this),
            e = t.data("element");
        t.parent().parent(".box-shadow-one-wrap").prevAll().slice(0, 4).find("input").addClass("linked").attr("data-element", e), t.parent(".link-box-shadow-one").addClass("unlinked")
    }), i(".box-shadow-one-wrap").on("input", ".linked", function () {
        var t = i(this).attr("data-element"),
            n = i(this).val();
        i('.linked[ data-element="' + t + '" ]').each(function (t, e) {
            i(this).val(n).change()
        })
    })
});
