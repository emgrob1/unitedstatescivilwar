
<html>
<head>
<div>
  {{partial('partials/nav_menu')}}
  
</div>
  
</head>

<body>
{{ form('createTheater/save', 'method': 'post') }}
<div>
    <label for="name">Name</label>
    {{ text_field("theater_name", "size": 32) }}

    <label for="type">Region</label>
   {{ text_field("theater_region", "size": 32) }}

    {{ submit_button('Save') }}
</div>
{{ end_form() }}
</html>