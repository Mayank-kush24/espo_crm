define('custom:routes', [], function () {
    return function (router) {
        router.route('admin/intern-field-access', 'custom:views/admin/intern-field-access');
    };
});
