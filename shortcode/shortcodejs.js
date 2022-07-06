	(function() {

	    tinymce.PluginManager.add('my_mce_button', function( editor, url ) {

	        editor.addButton( 'my_mce_button', {

	            text: 'protfolio button',

	            icon: false,

	            type: 'menubutton',

	            menu: [

	                {

	                    text: 'Item 1',

	                    menu: [

	                        {

	                            text: 'Sub Item 1',

	                            onclick: function() {

	                               editor.windowManager.open( {

	                                    title: 'Insert Random Shortcode',

	                                    body: [

	                                        {

	                                            type: 'textbox',

	                                            name: 'number',

	                                            label: 'protfolio number',

	                                            value: '2'

	                                        },

	                                      /*  {

	                                            type: 'textbox',

	                                            name: 'multilineName',

	                                            label: 'Multiline Text Box',

	                                            value: 'You can say a lot of stuff in here',

	                                            multiline: true,

	                                            minWidth: 300,

	                                            minHeight: 100

	                                        },

	                                        {

	                                            type: 'listbox',

	                                            name: 'listboxName',

	                                            label: 'List Box',

	                                            'values': [

	                                                {text: 'Option 1', value: '1'},

	                                                {text: 'Option 2', value: '2'},

	                                                {text: 'Option 3', value: '3'}

	                                            ]

	                                        }*/

	                                    ],

	                                    onsubmit: function( e ) {

	                                        editor.insertContent( '[protfolio number="' + e.data.number + '"]');

	                                    }

	                                });

	                            }

	                        },

	                        {

	                            text: 'Sub Item 2',

	                            onclick: function() {

	                               editor.windowManager.open( {

	                                    title: 'Insert Random Shortcode',

	                                    body: [

	                                        {

	                                            type: 'textbox',

	                                            name: 'positionid',

	                                            label: 'position',

	                                            value: 'left'

	                                        },

	                               

	                                    ],

	                                    onsubmit: function( e ) {

	                                        editor.insertContent( '[btn position="' + e.data.positionid + '"]');

	                                    }

	                                });

	                            }

	                        }

	                    ]

	                },

	               
	            ]

	        });

	    });

	})();