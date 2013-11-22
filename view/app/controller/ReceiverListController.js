/** 
 * Receiver List Controller
 */
Ext.define('CleverReach.controller.ReceiverListController', {
    extend: 'Ext.app.Controller',
  
    stores: [ 'Receivers', 'Groups' ],
    views:  ['receiver.ReceiverList','receiver.ReceiverDetail'],  
    models: ['Receiver'],
    
    
    init: function() {
     
        this.control({
            'receiverlist':{
                beforerender: this.loadInitStores,
                cellclick: this.editReceiver,
                itemmouseenter: this.showEditIcon,
                itemmouseleave: this.hideEditIcon
            },
            'receiverlist > toolbar > combo[name=groupCombo]':{
                select: this.onGroupComboSelect
            },
            'receiverlist > toolbar > button[action=add]':{
                click: this.addReceiver
            }
        });
        
    },
    
    
    
    loadInitStores: function(){
        var groupStore = Ext.getStore('Groups');
        var thisController = this;
        
        groupStore.load({
            scope: this,
            callback: function(records, operation, success) {
                if (groupStore.count() > 0){
                    var firstGroup = groupStore.getAt(0);
                    // Selecting the first element in the group combobox
                    Ext.getCmp('groupCombo').select(firstGroup);
                    
                    // Loading the receivers grid with the selected group
                    thisController.loadReceiverStore(firstGroup.get('id'));
                }
            }
        });
    },
    
    
    loadReceiverStore: function(groupId){
        Ext.getStore('Receivers').load({
            params: {
                groupId: groupId
            }
        });
    },
    
    onGroupComboSelect: function(combo, records){
        var selectedGroup = records[0];
        this.loadReceiverStore(selectedGroup.get('id'));
    },
    
    
    addReceiver: function(button){
        var selectedGroup = Ext.getCmp('groupCombo').getValue();
        var receiverRecord = Ext.create('CleverReach.model.Receiver');
        receiverRecord.set('groupId',selectedGroup);
            
        Ext.create('CleverReach.view.receiver.ReceiverDetail', {
            title: locale.receiverDetail.creationTitle,
            receiverRecord: receiverRecord,
            icon : 'resources/img/icons/add.png'
        }
        ).show();
    },
    
    editReceiver: function( grid, td, cellIndex,record, tr, rowIndex){
        
        var selectedGroup = Ext.getCmp('groupCombo').getValue();
        record.set('groupId',selectedGroup);
        
        Ext.create('CleverReach.view.receiver.ReceiverDetail', {
            title: locale.receiverDetail.editionTitle,
            receiverRecord: record,
            icon : 'resources/img/icons/pencil.png'
        }
        ).show();
    },
    
     showEditIcon: function(view, task, node, rowIndex, e) {
        var icons = Ext.DomQuery.select('.x-action-col-icon', node);
        Ext.each(icons, function(icon){
            Ext.get(icon).removeCls('x-hidden');
        });
    },
    
    hideEditIcon: function(view, task, node, rowIndex, e) {
        var icons = Ext.DomQuery.select('.x-action-col-icon', node);
        Ext.each(icons, function(icon){
            Ext.get(icon).addCls('x-hidden');
        });
    }
});