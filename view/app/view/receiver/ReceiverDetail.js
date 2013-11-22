/**
 * Receiver Detail
 * @version 1.0
 * @alias receiverdetail
 */
Ext.define('CleverReach.view.receiver.ReceiverDetail', {
    extend: 'Ext.window.Window',
    alias : 'widget.receiverdetail',
    id : 'receiverDetailWindow',
    height: 150,
    width: 400,
    modal: true,
    resizable : false,
    layout: 'fit',
    receiverRecord: null,
    title: null,

    
    fbar: [
    {
        type: 'button', 
        text: locale.generic.cancel,
        action:'cancel',
        icon : 'resources/img/icons/cross.png'
    },
    {
        type: 'button', 
        text: locale.generic.save,
        action:'save',
        icon : 'resources/img/icons/save.png'
    }
    ],
    
    
    initComponent: function(){
        
        var form = Ext.create('Ext.form.Panel', {   
            id: 'receiverForm',
            border: false,
            width: 350,
            scroll:false,
                
            defaults: {
                msgTarget: 'under',
                labelAlign: 'left',
                anchor: '100%'    
            }
        });
        
        form.add(this.createEmailTextField(),this.createStatusCombobox());
        
        
        var formPanel = Ext.create('Ext.panel.Panel', {
            layout: 'border',
            border:false,
            bodyStyle: {
                background: 'white',
                padding: '10px'
            },
            items: [ form ]
        });
        
        
         
        this.items = [formPanel];
        this.callParent(arguments);
        form.loadRecord(this.receiverRecord);
    },
    
    listeners: {
        move: function(cmp, x, y){
            if(y < 0){
                y = 15
                cmp.setPosition(x, y);
            }
            if(x < 0){
                cmp.setPosition(15, y);
            }
        }
    },
    
    createEmailTextField: function(){
        var cls = this.receiverRecord.get('id') ? 'textfield-disabled' : 'x-form-text';
        
        var fieldStyle = this.receiverRecord.get('id') ? 
                            { border: '0', background: 'white'} :
                            {}
        
        return Ext.create('Ext.form.field.Text',{
                name: 'email',
                xtype: 'textfield',
                cls: cls,
                cls: 'textfield-disabled',
                allowBlank: false,
                fieldLabel: locale.receiverDetail.email,
                blankText: locale.receiverDetail.emailBlankErrorMessage,
                maxLength: 100,
                fieldStyle: fieldStyle
        });
    },
    
    createStatusCombobox: function(){
        var statusStore = Ext.create('Ext.data.Store', {
            fields: ['active', 'name'],
            data : [
                {"active": "true", "name":locale.receiverDetail.active},
                {"active": "false", "name":locale.receiverDetail.inactive}
            ]
        });
        
        return Ext.create('Ext.form.ComboBox', {
            fieldLabel: locale.receiverDetail.status,
            name: 'active',
            store: statusStore,
            editable: false,
            queryMode: 'local',
            displayField: 'name',
            valueField: 'active',
            value: "true"
        });
    }
  
});