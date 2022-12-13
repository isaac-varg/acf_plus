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
    - link = a link to page


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


### Post Object V2

The iiv_acf_post_object_v2 shortcode allows you to display the value of a specified field for a post object linked to the current post.

To use the shortcode, simply add the [iiv_acf_post_object_v2] code to any post or page where you want to display the value of the specified field. The shortcode accepts the following attributes:

field (required)
This attribute specifies the name of the ACF post object field that links to the post object you want to display. For example, if the post object field is called related_product, you would use field="related_product" in the shortcode.

return (optional)
This attribute specifies the name of the field you want to display the value of. The default value is title, which will display the title of the post object. You can specify any other field name to display the value of that field instead.

Examples
Here are some examples of how you might use the iiv_acf_post_object_two shortcode:

```
[iiv_acf_post_object_v2 field="related_product"]
```
This shortcode will display the title of the post object linked to the current post using the related_product ACF post object field.

```
[iiv_acf_post_object_v2 field="related_product" return="price"]
```
This shortcode will display the value of the price field for the post object linked to the current post using the related_product ACF post object field.
    

## Dynamic Tags

### Post Object

Returns the name of the post object

- This is only available for *text* and *url* control type
- Paremters
    - field
        - Name of the ACF Post Object field
    - return type
        - Title (String) = string of the post object title
        - URL = url of the post page
