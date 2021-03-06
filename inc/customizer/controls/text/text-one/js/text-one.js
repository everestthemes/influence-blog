wp.customize.controlConstructor["text-one"] = wp.customize.Control.extend({
    ready: function () {
        "use strict";
        var t = this;
        t.container.on("change keyup paste", ".desktop input", function () {
            t.settings.desktop.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".tablet input", function () {
            t.settings.tablet.set(jQuery(this).val())
        }), t.container.on("change keyup paste", ".mobile input", function () {
            t.settings.mobile.set(jQuery(this).val())
        })
    }
});
