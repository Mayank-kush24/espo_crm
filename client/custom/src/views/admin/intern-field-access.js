define('custom:views/admin/intern-field-access', ['view'], function (Dep) {
    return Dep.extend({
        template: 'custom:admin/intern-field-access',
        
        data: function () {
            return {
                // Optional: preload data or settings
            };
        },

        setup: function () {
            // Load existing rules or entity metadata
        },

        actionSave: function () {
            let data = {
                entityName: this.getFieldView('entityName').getValue(),
                fieldName: this.getFieldView('fieldName').getValue(),
                startDateTime: this.getFieldView('startDateTime').getValue(),
                endDateTime: this.getFieldView('endDateTime').getValue()
            };

            this.ajaxPostRequest('InternFieldAccess', data, function () {
                Espo.Ui.notify('Saved');
            });
        }
    });
});
