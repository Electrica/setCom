var setCom = function (config) {
    config = config || {};
    setCom.superclass.constructor.call(this, config);
};
Ext.extend(setCom, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('setcom', setCom);

setCom = new setCom();