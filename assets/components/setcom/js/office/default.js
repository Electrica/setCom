Ext.onReady(function () {
    setCom.config.connector_url = OfficeConfig.actionUrl;

    var grid = new setCom.panel.Home();
    grid.render('office-setcom-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});