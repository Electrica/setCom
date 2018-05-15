setCom.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'setcom-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            html: '<h2>' + _('setcom') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('setcom_items'),
                layout: 'anchor',
                items: [{
                    html: _('setcom_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'setcom-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    setCom.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(setCom.panel.Home, MODx.Panel);
Ext.reg('setcom-panel-home', setCom.panel.Home);
