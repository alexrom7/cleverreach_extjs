/**
 * Group Store
 */
var CURRENT_GROUP = null;

Ext.define('CleverReach.store.Groups', {
    extend: 'Ext.data.Store',
    model: 'CleverReach.model.Group',
    id:     'groupStore',
    proxy: {  
        type: 'direct',
        directFn: Groups.getAll,
        reader: {
            root: 'groups'
        }
    }
});