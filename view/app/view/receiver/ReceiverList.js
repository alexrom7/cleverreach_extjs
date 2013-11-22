/**
 * Receiver List
 * @alias receiverlist
 */
Ext.define('CleverReach.view.receiver.ReceiverList' ,{
    extend: 'Ext.grid.Panel',
    alias : 'widget.receiverlist',
    store: 'Receivers',
    autoScroll: true,
    border: false,
    minHeight: 300,
    
    viewConfig: {
        /* This is the message that will be shown when the store is empty */
        emptyText: '<div class="centered-panel"><div class="grid-empty-message">'+locale.receiverlist.emptyMessagge+'</div></div>'
    },
    requires:['Ext.selection.CheckboxModel'],
    dockedItems: [{
        xtype: 'pagingtoolbar',
        store: 'Receivers',   // same store GridPanel is using
        beforePageText : locale.receiverlist.page,
        afterPageText: locale.receiverlist.of + ' {0}',
        dock: 'bottom',
        displayInfo: true,
        displayMsg: locale.receiverlist.displaying + ' {0} - {1} ' +locale.receiverlist.of + ' {2}'
    }],
    
    initComponent: function() {
        
        this.tbar = this.createToolbar();
                    
        this.columns = [
        {
            header: locale.receiverlist.statusHeader, 
            dataIndex: 'active', 
            width: 50,
            renderer: this.renderStatus
        },
        {
            xtype: 'actioncolumn',
            width: 24,
            icon: 'resources/img/icons/pencil.png',
            tooltip: 'Edit',
            iconCls: 'x-hidden',
            sortable: false
        },
        {
            header: locale.receiverlist.emailHeader, 
            dataIndex: 'email', 
            flex: 1

        },
        {
            header: locale.receiverlist.registeredHeader, 
            dataIndex: 'registered',  
            flex: 1
        }
        ];
                       
        this.callParent(arguments);
    },
    
    createToolbar: function(){
        var addButton = Ext.create('Ext.button.Button', {
            action: 'add',
            text    : locale.generic.add,
            icon: 'resources/img/icons/add.png'
        });

        var toolbar = Ext.create('Ext.toolbar.Toolbar', {
            items   : [ 
                        addButton,
                        { xtype: 'tbspacer', width: 150 },
                        this.createGroupCombo()
                      ]
        });
        
        return toolbar;
    },
    
    /**
     * Combobox that will show all the available groups
     */
    createGroupCombo: function(){
        var groupStore = Ext.getStore('Groups');
        
        return Ext.create('Ext.form.ComboBox', {
            name: 'groupCombo',
            id: 'groupCombo',
            fieldLabel: locale.contactlist.group,
            store: groupStore,
            queryMode: 'local',
            editable: false,
            displayField: 'name',
            valueField: 'id',
            anchor: '100%'
        });
    },
    
    /**
     * Displays favorite icon
     */
    renderStatus: function(value, p, record){
        
        if (value == true){
            return '<div class="receiverlist-status-icon"><img src="resources/img/icons/bullet_ball_green.png"/></div>';
        }
        else{
            return '<div  class="receiverlist-status-icon"><img src="resources/img/icons/bullet_ball_red.png"/></div>';
        }
    }
});

