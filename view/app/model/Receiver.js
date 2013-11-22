Ext.define('CleverReach.model.Receiver', {
    extend: 'Ext.data.Model',
    fields: [   
        'id',
        'email',
        'registered',
        'activated',
        'deactivated',
        'active',
        'source',
        'quality',
        'groupId'
    ],      
    autoLoad: true,
    proxy: {  
        type: 'direct',
        
        api: {
            create:  Receivers.save,
            update:  Receivers.save 
        }
    }
});