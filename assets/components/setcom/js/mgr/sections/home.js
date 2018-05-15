setCom.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'setcom-panel-home',
            renderTo: 'setcom-panel-home-div'
        }]
    });
    setCom.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(setCom.page.Home, MODx.Component);
Ext.reg('setcom-page-home', setCom.page.Home);