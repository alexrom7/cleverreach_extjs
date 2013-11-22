/** 
 * Receiver Detail Controller
 */
Ext.define('CleverReach.controller.ReceiverDetailController', {
    extend: 'Ext.app.Controller',
  
    stores: ['Receivers'],
    views:  ['receiver.ReceiverDetail'],  
    models: ['Receiver'],
    
    
    init: function() {
     
        this.control({
            'receiverdetail > toolbar > button[action=save]':{
                click: this.saveReceiver  
            },
            'receiverdetail > toolbar > button[action=cancel]':{
                click: this.closeWindow
            },
            'receiverdetail > panel > form > textfield':{
                specialkey: function(field, e){
                    if (e.getKey() == e.ENTER)
                        this.saveReceiver();
                }
            }
        });
        
    },
    
    saveReceiver: function(){
        var form = Ext.getCmp('receiverForm').getForm(); 
        var groupId = Ext.getCmp('receiverForm').up('window').receiverRecord.get('groupId');
        
        if (form.isValid()) {
            var formValues = form.getValues();
            var successMessage = '';
            var receiverRecord = form.getRecord();
        
            receiverRecord.set({
                email: formValues['email'], 
                active: formValues['active'],
                groupId: groupId
            });
        
            // Create New Receiver
            if (receiverRecord.get('id') == '')
                successMessage = locale.receiverDetail.creationSuccess
       
            // Modify Receiver
            else
                successMessage = locale.receiverDetail.editionSuccess
        
        
            receiverRecord.save({
                success: function(opt, r){
                    var msg=Ext.create('components.MessageBox');
                    if(r.response.result.success == true){
                        msg.show('success',successMessage);
                        
                        Ext.getStore('Receivers').load({
                            params: {
                                groupId: receiverRecord.get('groupId')
                            }
                        });
                        Ext.getCmp('receiverDetailWindow').close();
                    }
                                
                    else{
                        msg.show('error',r.response.result.message);
                    }       
                }
            });
        }

    },
    
    
    closeWindow: function(button){
        button.up('window').close();
    }
});