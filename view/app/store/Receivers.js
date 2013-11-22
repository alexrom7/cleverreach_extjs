/**
 * Receiver Store
 */

Ext.define('CleverReach.store.Receivers', {
    extend: 'Ext.data.Store',
    model: 'CleverReach.model.Receiver',
    pageSize: 100, // items per page
    id:     'receiverStore',
    proxy: {  
        type: 'direct',
        directFn: Receivers.getAll,
        reader: {
            root: 'receivers'
        }
    }
});