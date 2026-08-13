(function() {

	tinymce.PluginManager.add('shortcodes', function( editor, url ) {

		editor.addButton( 'shortcodes', {

			text: 'Shortcodes',
			icon: false,
			type: 'menubutton',
			menu: [
				{
					text: 'Row',
					onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Row Shortcode',
							body: [
								{
									type: 'listbox',
									name: 'align',
									label: 'Align',
									minWidth: 300,
									'values': [
										{ text: 'Top', value: 'flex-start' },
										{ text: 'Center', value: 'center' },
										{ text: 'Bottom', value: 'flex-end' }
									]
								},
								{
									type: 'listbox',
									name: 'breakpoint',
									label: 'Breakpoint',
									minWidth: 300,
									'values': [
										{ text: 'X-Small', value: 'xs' },
										{ text:   'Small', value: 'sm' },
										{ text:  'Medium', value: 'md' },
										{ text:   'Large', value: 'lg' },
										{ text: 'X-Large', value: 'xl' }
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[row align="' + e.data.align + '" breakpoint="' + e.data.breakpoint + '"] [/row]');
							}
						});
					}

				},
				{
					text: 'Column',
					onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Columns Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'column',
									label: 'Column',
									value: '6',
								},
								{
									type: 'listbox',
									name: 'breakpoint',
									label: 'Breakpoint',
									minWidth: 300,
									'values': [
										{ text: 'X-Small', value: 'xs' },
										{ text:   'Small', value: 'sm' },
										{ text:  'Medium', value: 'md' },
										{ text:   'Large', value: 'lg' },
										{ text: 'X-Large', value: 'xl' }
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[columns breakpoint="' + e.data.breakpoint + '" column="' + e.data.column + '"] [/columns]');
							}
						});
					}
				},
				{
					text: 'Lead',
					onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Lead Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'lead',
									label: 'Content',
									multiline: true,
									minWidth: 450,
									minHeight: 150
								},
								{
									type: 'listbox',
									name: 'listboxName',
									label: 'Align',
									minWidth: 300,
									'values': [
										{ text:   'Left', value: 'left' },
										{ text: 'Center', value: 'center' },
										{ text:  'Right', value: 'right' }
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[lead align="' + e.data.listboxName + '"] ' + e.data.lead + ' [/lead]' );
							}
						});
					}
				},
				{
					text: 'Lead Dropcap',
					onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Lead Dropcap Shortcode',
							body: [
								{
									type: 'textbox',
									name: 'lead_dropcap',
									label: 'Content',
									multiline: true,
									minWidth: 450,
									minHeight: 150
								},
								{
									type: 'listbox',
									name: 'listboxName',
									label: 'Align',
									minWidth: 300,
									'values': [
										{ text:   'Left', value: 'left' },
										{ text: 'Center', value: 'center' },
										{ text:  'Right', value: 'right' }
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[lead-dropcap align="' + e.data.listboxName + '"] ' + e.data.lead_dropcap + ' [/lead-dropcap]' );
							}
						});
					}
				},
				{
					text: 'Spacer',
					onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Spacer Shortcode',
							body: [
								{
									type: 'listbox',
									name: 'listboxName',
									label: 'Color',
									minWidth: 300,
									'values': [
										{ text: 'Black', value: 'black' },
										{ text: 'White', value: 'white' },
										{ text:  'Gray', value: 'gray' }
									]
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[spacer color="' + e.data.listboxName + '"]');
							}
						});
					}
				},
				{
					text: 'Button',
					onclick: function() {
						editor.windowManager.open( {
							title: 'Insert Button Shortcode',
							body: [
								{
									type: 'listbox',
									name: 'listboxName',
									label: 'Color',
									minWidth: 300,
									'values': [
										{ text: 'Primary', value: 'primary' },
										{ text: 'Secondary', value: 'secondary' },
										{ text: 'Tertiary', value: 'tertiary' },
										{ text: 'Light', value: 'light' },
										{ text: 'Dark', value: 'dark' }
									]
								},
								{
									type: 'textbox',
									name: 'url',
									label: 'URL',
									value: 'http://example.com',
									minWidth: 300
								},
								{
									type: 'textbox',
									name: 'title',
									label: 'Title',
									value: 'Button Title',
									minWidth: 300
								},
								{
									type: 'textbox',
									name: 'text',
									label: 'Link Text',
									value: 'Button Text',
									minWidth: 300
								},
								{
									type: 'checkbox',
									name: 'target',
									label: 'Open link in a new window/tab',
									value: 'blank',
									minWidth: 300
								}
							],
							onsubmit: function( e ) {
								editor.insertContent( '[button color="' + e.data.listboxName + '" href="' + e.data.url + '" title="' + e.data.title + '" text="' + e.data.text + '" target="' + e.data.target + '"]');
							}
						});
					}
				}
			]

		});
	});
})();
