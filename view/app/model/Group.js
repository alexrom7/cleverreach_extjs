Ext.define('CleverReach.model.Group', {
    extend: 'Ext.data.Model',
    fields: [   
        'id',
        'name',
        'description',
        'last_mailing',
        'last_changed',
        'count',
        'inactive_count',
        'total_count',
        'attributes',
        'globalAttributes'
    ],      
    proxy: {  
        type: 'direct',
        
        api: {
            create:  Groups.save,
            update:  Groups.save 
        }
    }
});