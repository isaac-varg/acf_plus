# IIV ACF Plus

This plugin extends the [Advanced Custom Fields](https://www.advancedcustomfields.com) plugin developed by Delicious Brains, Inc. This was created to incorporate fields created using ACF into templates and provide colleagues with shortcodes that could be easily used. 

## Shortcodes


### Conditional

Shows/Hides the content between the shortcode depending on value of Conditional ACF Field.

```
[iiv_acf_conditional field="acf_conditional_field"] Content [/iiv_acf_conditional]
```

Parameters
- field
    - Name of the ACF field

### Post Object

Returns the specifed property of the post object.
```
[iiv_acf_post_object field="acf_field_name" return="title"]
```

Parameters
- field
    - Name of the ACF field
- return 
    - title = title of the post object


### Relationship

Provides the selected relationship items as either a singleton link or unordered list.

```
[iiv_acf_relationship field="acf_field_name"]
```

Parameters
- field
    - Name of the ACF field
- display (optional)
    - list = unorodered list for multiple linked items
    - default = single link

### Taxonomy
Lists all the selected elements from the taxonomy field and displays elements as linkes in a inline list

```
[iiv_acf_taxonomy field="acf_taxonomy_field"]
```
Parameters
- field
    - Name of the ACF field
- display (optional)
    - Default is unordered list
    - 'inline' displays an horizontal inline list with each element separated by a comma


    

## Dynamic Tags

### Post Object

Returns the name of the post object

- This is only available for *text* control type
- Paremters
    - field
        - Name of the ACF Post Object field
