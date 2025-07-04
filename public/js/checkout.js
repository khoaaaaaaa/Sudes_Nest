$(function() {
    $("body").on("input", ".field .field__input:not(select)", function() {
        const $field = $(this).closest(".field");
        this.value ? $field.addClass("field--show-floating-label") : $field.removeClass("field--show-floating-label");
    });
});
